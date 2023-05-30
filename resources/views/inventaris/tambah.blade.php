@extends('navbar')

@section('content')

<div class="row justify-content-center mt-3">
<div class="col-md-8">
    <div class="card">

    <div class="card-header">
        <h3 class="card-title">Tambah Data Barang</h3>
    </div>
    
    <div class="card-body">
    <form action="/inventaris/store" method="post">
        {{csrf_field()}}
        <div class="mb-3">
            <label for="nama_barang" class="form-label">Nama Barang</label>
            <input type="text" class="form-control" name="nama_barang" id="nama_barang" required="required" placeholder="Masukkan Nama Barang">
        </div>
        <div class="mb-3">
            <label for="jenis_barang" class="form-label">Jenis Barang</label>
            <select class="form-select" name="jenis_barang" id="jenis_barang">
                <option selected>Pilih Jenis Barang...</option>
                <option value="Elektronik">Elektronik</option>
                <option value="Non Elektronik">Non Elektronik</option>
            </select> 
        </div>
        <div class="mb-3">
            <label for="deskripsi_barang" class="form-label">Deskripsi</label>
            <textarea class="form-control" name="deskripsi_barang" id="deskripsi_barang" placeholder="Masukkan Deskripsi Barang"></textarea>
        </div>
        <div class="mb-3">
            <label for="harga" class="form-label">Harga</label>
            <input type="text" class="form-control" name="harga" id="harga" required="required" placeholder="Masukkan Harga Barang">
        </div>
        <div class="mb-3">
            <label for="tgl_diperoleh" class="form-label">Tanggal Diperoleh</label>
            <input type="date" class="form-control" name="tgl_diperoleh" id="tgl_diperoleh" required="required">
        </div>
        <div class="mb-3">
            <label for="sumber" class="form-label">Sumber</label>
            <select class="form-select" name="sumber" id="sumber">
                <option selected>Pilih Sumber...</option>
                <option value="Pemerintah">Pemerintah</option>
                <option value="Dana Desa">Dana Desa</option>
                <option value="Bantuan">Bantuan</option>
            </select>        
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select class="form-select" name="status" id="status">
                <option selected>Pilih Status...</option>
                <option value="Baru">Baru</option>
                <option value="Bekas">Bekas</option>
            </select> 
        </div>
        <div class="mb-3">
            <label for="jumlah" class="form-label">Jumlah Barang</label>
            <input type="number" class="form-control" name="jumlah" id="jumlah" required="required" placeholder="Masukkan Jumlah Barang">
        </div>
        <a class="btn btn-success" href="/inventaris" role="button">Kembali</a>
        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
    </div>
</div>
</div>
</div>
@endsection