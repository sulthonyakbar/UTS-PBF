<?php

namespace App\Http\Controllers;

use App\Models\Warga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WargaController extends Controller
{
    public function index(Request $request){     

        $search = $request->query('search');

        if(!empty($request)){
            $warga=DB::table('wargas')->where('wargas.nama', 'like', '%'. $search .'%')->paginate(5);
        }else{
            $warga=DB::table('wargas')->paginate(5);
        }
        
        return view('warga/index', ['warga' => $warga, 'title' => 'Data Warga | SiDesa']);
    }

    public function tambah(){
        return view('warga/tambah', ['title' => 'Tambah Data Warga | SiDesa']);
    }

    public function store(Request $request){
        DB::table('wargas')->insert([
            'nik'=>$request->NIK,
            'nama'=>$request->nama,
            'tgl_lahir'=>$request->tgl_lahir,
            'jenis_kelamin'=>$request->jenis_kelamin,
            'alamat'=>$request->alamat,
            'agama'=>$request->agama,
            'pekerjaan'=>$request->pekerjaan
        ]);
        return redirect('/warga');
    }

    public function edit($id){
        $warga = DB::table('wargas')->where('id_warga',$id)->get();
        return view ('warga/edit', ['warga' => $warga], ['title' => 'Edit Data Warga | SiDesa']);
    }

    public function update(Request $request){
        DB::table('wargas')->where('id_warga', $request->id_warga)->update([
            'nik'=>$request->NIK,
            'nama'=>$request->nama,
            'tgl_lahir'=>$request->tgl_lahir,
            'jenis_kelamin'=>$request->jenis_kelamin,
            'alamat'=>$request->alamat,
            'agama'=>$request->agama,
            'pekerjaan'=>$request->pekerjaan
        ]);
        return redirect('/warga');
    }

    public function hapus($id){
        $warga = DB::table('wargas')->where('id_warga',$id)->delete();
        return redirect('/warga');
    }

    public function detail($id){
        $warga = DB::table('wargas')->where('id_warga',$id)->first();
        return view ('warga/detail', ['warga' => $warga], ['title' => 'Detail Data Warga | SiDesa']);
    }
}