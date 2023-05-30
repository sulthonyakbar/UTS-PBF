@extends('navbar')

@section('content')

<div class="row justify-content-center mt-3">
<div class="col-md-8">
    <div class="card">

    <div class="card-header">
        <h3 class="mt-3 mb-3">Edit Data Barang</h3>
    </div>

    <div class="card-body">
    @foreach($inventaris as $i)
    <form action="/inventaris/update" method="post" >
        {{csrf_field()}}
        <input type="hidden" name="id" value="{{$i->id}}">
        <div class="mb-3">
            <label for="nama_barang" class="form-label">Nama Barang</label>
            <input type="text" class="form-control" name="nama_barang" id="nama_barang" value="{{$i->nama_barang}}">
        </div>
        <div class="mb-3">
            <label for="jenis_barang" class="form-label">Jenis Barang</label>
            <select class="form-select" name="jenis_barang" id="jenis_barang">
                <option selected>Pilih Jenis Barang...</option>
                <option value="Elektronik" {{ $i->jenis_barang == 'Elektronik' ? 'selected' : '' }}>Elektronik</option>
                <option value="Non Elektronik" {{ $i->jenis_barang == 'Non Elektronik' ? 'selected' : '' }}>Non Elektronik</option>
            </select> 
        </div>
        <div class="mb-3">
            <label for="deskripsi_barang" class="form-label">Deskripsi</label>
            <textarea class="form-control" name="deskripsi_barang" id="deskripsi_barang">{{ $i->deskripsi_barang }}</textarea>
        </div>
        <div class="mb-3">
            <label for="harga" class="form-label">Harga</label>
            <input type="text" class="form-control" name="harga" id="harga" value="{{$i->harga}}">
        </div>
        <div class="mb-3">
            <label for="tgl_diperoleh" class="form-label">Tanggal Diperoleh</label>
            <input type="date" class="form-control" name="tgl_diperoleh" id="tgl_diperoleh" value="{{$i->tgl_diperoleh}}">
        </div>
        <div class="mb-3">
            <label for="sumber" class="form-label">Sumber</label>
            <select class="form-select" name="sumber" id="sumber">
                <option selected>Pilih Sumber...</option>
                <option value="Pemerintah" {{ $i->sumber == 'Pemerintah' ? 'selected' : '' }}>Pemerintah</option>
                <option value="Dana Desa" {{ $i->sumber == 'Dana Desa' ? 'selected' : '' }}>Dana Desa</option>
                <option value="Bantuan" {{ $i->sumber == 'Bantuan' ? 'selected' : '' }}>Bantuan</option>
            </select>        
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select class="form-select" name="status" id="status">
                <option selected>Pilih Status...</option>
                <option value="Baru" {{ $i->status == 'Baru' ? 'selected' : '' }}>Baru</option>
                <option value="Bekas" {{ $i->status == 'Bekas' ? 'selected' : '' }}>Bekas</option>
            </select> 
        </div>
        <div class="mb-3">
            <label for="jumlah" class="form-label">Jumlah Barang</label>
            <input type="number" class="form-control" name="jumlah" id="jumlah" value="{{$i->jumlah}}">
        </div>
        <a class="btn btn-success" href="/inventaris" role="button">Kembali</a>
        <button type="submit" class="btn btn-primary">Ubah</button>
    </form>
    @endforeach
    </div>
</div>
</div>
</div>
@endsection