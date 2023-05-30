<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InventarisController extends Controller
{
    public function index(Request $request){

        $search = $request->query('search');

        if(!empty($request)){
            $inventaris=DB::table('inventaris')->where('inventaris.nama_barang', 'like', '%'. $search .'%')->paginate(5);
        }else{
            $inventaris=DB::table('inventaris')->paginate(5);
        }

        return view('inventaris/index', ['inventaris' => $inventaris, 'title' => 'Data Inventaris | SiDesa']);
    }

    public function tambah(){
        return view('inventaris/tambah', ['title' => 'Tambah Data Barang | SiDesa']);
    }

    public function store(Request $request){
        DB::table('inventaris')->insert([
            'nama_barang'=>$request->nama_barang,
            'jenis_barang'=>$request->jenis_barang,
            'deskripsi_barang'=>$request->deskripsi_barang,
            'harga'=>$request->harga,
            'tgl_diperoleh'=>$request->tgl_diperoleh,
            'sumber'=>$request->sumber,
            'status'=>$request->status,
            'jumlah'=>$request->jumlah
        ]);
        return redirect('/inventaris');
    }

    public function edit($id){
        $inventaris = DB::table('inventaris')->where('id',$id)->get();
        return view ('inventaris/edit', ['inventaris' => $inventaris], ['title' => 'Edit Data Barang | SiDesa']);
    }

    public function update(Request $request){
        DB::table('inventaris')->where('id', $request->id)->update([
            'nama_barang'=>$request->nama_barang,
            'jenis_barang'=>$request->jenis_barang,
            'deskripsi_barang'=>$request->deskripsi_barang,
            'harga'=>$request->harga,
            'tgl_diperoleh'=>$request->tgl_diperoleh,
            'sumber'=>$request->sumber,
            'status'=>$request->status,
            'jumlah'=>$request->jumlah
        ]);
        return redirect('/inventaris');
    }

    public function hapus($id){
        $inventaris = DB::table('inventaris')->where('id',$id)->delete();
        return redirect('/inventaris');
    }

    public function detail($id){
        $inventaris = DB::table('inventaris')->where('id',$id)->first();
        return view ('inventaris/detail', ['inventaris' => $inventaris], ['title' => 'Detail Data Barang | SiDesa']);
    }
}
