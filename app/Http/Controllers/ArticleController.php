<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    public function index(Request $request){

        $search = $request->query('search');

        if(!empty($request)){
            $article = DB::table('articles')->where('articles.title', 'like', '%'. $search .'%')->paginate(5);
        }else{
            $article = DB::table('articles')->paginate(5);
        }

        return view('artikel/index', ['article' => $article,'title' => 'Data Artikel | SiDesa']);
    }

    public function tambah(){
        $category = DB::table('categories')->get();
        return view('artikel/tambah', ['category' => $category], ['title' => 'Tambah Data Artikel | SiDesa']);
    }

    public function store(Request $request){
        $user_id = Auth::id();

        if($request->hasFile('image')){
            $img = $request->file('image');
            $imgname = time().'.'.$img->getClientOriginalExtension();
            $imgpath = public_path('/article_img');
            $img->move($imgpath,$imgname);
            $imgpath = '/article_img/'.$imgname;
        } else {
            $imgpath = '';
        }

        DB::table('articles')->insert([
            'title'=>$request->title,
            'content'=>$request->content,
            //get img path
            'image' => $imgpath,
            'category_id'=>$request->id_category,
            //get id user from session
            'author_id'=>$user_id
        ]);
        return redirect('/artikel');
    }

    public function edit($id){
        $article = DB::table('articles')->where('id_article',$id)->get();
        $category = DB::table('categories')->get();
        return view ('artikel/edit', ['article' => $article, 'category' => $category], ['title' => 'Edit Data Artikel | SiDesa']);
    }

    public function update(Request $request){
        $user_id = Auth::id();

        if($request->hasFile('image')){
            $img = $request->file('image');
            $imgname = time().'.'.$img->getClientOriginalExtension();
            $imgpath = public_path('/article_img');
            $img->move($imgpath,$imgname);
            $imgpath = '/article_img/'.$imgname;
        } else {
            $imgpath = $request->image;
        }

        DB::table('articles')->where('id_article', $request->id_article)->update([
            'title'=>$request->title,
            'content'=>$request->content,
            'image' => $imgpath,
            'category_id'=>$request->id_category,
            'author_id'=>$user_id
        ]);

        return redirect('/artikel');
    }

    public function hapus($id){
        $article = DB::table('articles')->where('id_article',$id)->delete();
        return redirect('/artikel');
    }

    public function detail($id){
        $article = DB::table('articles')->where('id_article',$id)->first();
        $category = DB::table('categories')->where('id_category',$article->category_id)->first();
        $users = DB::table('users')->where('id',$article->author_id)->first();
        return view ('artikel/detail', ['article' => $article, 'category' => $category, 'users' => $users], ['title' => 'Detail Data Artikel | SiDesa']);
    }
}
