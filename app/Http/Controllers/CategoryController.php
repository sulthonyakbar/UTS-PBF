<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index(Request $request){

        $search = $request->query('search');

        if(!empty($request)){
            $category = DB::table('categories')->where('categories.category_name', 'like', '%'. $search .'%')->paginate(5);
        }else{
            $category = DB::table('categories')->paginate(5);
        }

        return view('category/index', ['category' => $category, 'title' => 'Data Kategori Artikel | SiDesa']);
    }

    public function tambah(){
        return view('category/tambah', ['title' => 'Tambah Data Kategori | SiDesa']);
    }

    public function store(Request $request){
        DB::table('categories')->insert([
            'category_name'=>$request->category_name
        ]);
        return redirect('/category');
    }

    public function edit($id){
        $category = DB::table('categories')->where('id_category',$id)->get();
        return view ('category/edit', ['category' => $category], ['title' => 'Edit Data Kategori | SiDesa']);
    }

    public function update(Request $request){
        DB::table('categories')->where('id_category', $request->id_category)->update([
            'category_name'=>$request->category_name
        ]);
        return redirect('/category');
    }

    public function hapus($id){
        $category = DB::table('categories')->where('id_category',$id)->delete();
        return redirect('/category');
    }
}
