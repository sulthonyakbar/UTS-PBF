<?php

namespace App\Http\Controllers;

use App\Models\Warga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WargaController extends Controller
{
    public function index(){     
        $warga=DB::table('wargas')->paginate(5);
        return view('index', ['warga' => $warga, 'title' => 'Data Warga | SiDesa']);
    }

    public function tambah(){
        return view('tambah', ['title' => 'Tambah Data Warga | SiDesa']);
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
        $warga = DB::table('wargas')->where('id',$id)->get();
        return view ('edit', ['warga' => $warga], ['title' => 'Edit Data Warga | SiDesa']);
    }

    public function update(Request $request){
        DB::table('wargas')->where('id', $request->id_warga)->update([
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
        $warga = DB::table('wargas')->where('id',$id)->delete();
        return redirect('/warga');
    }

    public function detail($id){
        $warga = DB::table('wargas')->where('id',$id)->first();
        return view ('detail', ['warga' => $warga], ['title' => 'Detail Data Warga | SiDesa']);
    }
}
