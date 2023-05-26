<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WargaController extends Controller
{
    public function index(){
        $warga=DB::table('warga')->paginate(5);
        return view('index', ['warga'=>$warga]);
    }

    public function tambah(){
        return view('tambah');
    }

    public function store(Request $request){
        DB::table('warga')->insert([
            'NIK'=>$request->NIK,
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
        $warga = DB::table('warga')->where('id_warga',$id)->get();
        return view ('edit', ['warga'=>$warga]);
        return redirect('/warga');
    }

    public function update(Request $request){
        DB::table('warga')->where('id_warga', $request->id_warga)->update([
            'NIK'=>$request->NIK,
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
        $warga = DB::table('warga')->where('id_warga',$id)->delete();
        return redirect('/warga');
    }

    public function detail($id){
        $warga = DB::table('warga')->where('id_warga',$id)->first();
        return view ('detail', ['warga'=>$warga]);
    }
}
