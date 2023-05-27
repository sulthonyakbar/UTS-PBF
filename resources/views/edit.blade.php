<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>Edit Data Warga</title>
</head>
<body>
@include('navbar')

<div class="row justify-content-center mt-3">
<div class="col-md-8">
    <div class="card">

    <div class="card-header">
        <h3 class="mt-3 mb-3">Edit Data Warga</h3>
    </div>

    <div class="card-body">
    @foreach($warga as $w)
    <form action="/warga/update" method="post" >
        {{csrf_field()}}
        <input type="hidden" name="id_warga" value="{{$w->id_warga}}">
        <div class="mb-3">
            <label for="NIK" class="form-label">NIK</label>
            <input type="text" class="form-control" name="NIK" id="NIK" value="{{$w->NIK}}">
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" name="nama" id="nama" value="{{$w->nama}}">
        </div>
        <div class="mb-3">
            <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
            <input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir" value="{{$w->tgl_lahir}}">
        </div>
        <div class="mb-3">
            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
            <select class="form-select" name="jenis_kelamin" id="jenis_kelamin">
                <option selected>Pilih Jenis Kelamin...</option>
                <option value="Laki - Laki" {{ $w->jenis_kelamin == 'Laki - Laki' ? 'selected' : '' }}>Laki - laki</option>
                <option value="Perempuan" {{ $w->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
            </select>        
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea class="form-control" name="alamat" id="alamat">{{ $w->alamat }}</textarea>
        </div>
        <div class="mb-3">
            <label for="agama" class="form-label">Agama</label>
            <select class="form-select" name="agama" id="agama" value="{{$w->agama}}">
                <option selected>Pilih Agama...</option>
                <option value="Islam" {{ $w->agama == 'Islam' ? 'selected' : '' }}>Islam</option>
                <option value="Kristen" {{ $w->agama == 'Kristen' ? 'selected' : '' }}>Kristen</option>
                <option value="Katolik" {{ $w->agama == 'katolik' ? 'selected' : '' }}>Katolik</option>
                <option value="Budha" {{ $w->agama == 'Budha' ? 'selected' : '' }}>Budha</option>
                <option value="Hindu" {{ $w->agama == 'Hindu' ? 'selected' : '' }}>Hindu</option>
                <option value="Konghucu" {{ $w->agama == 'Konghucu' ? 'selected' : '' }}>Konghucu</option>
            </select> 
        </div>
        <div class="mb-3">
            <label for="pekerjaan" class="form-label">Pekerjaan</label>
            <input type="text" class="form-control" name="pekerjaan" id="pekerjaan" value="{{$w->pekerjaan}}">
        </div>
        <a class="btn btn-success" href="/warga" role="button">Kembali</a>
        <button type="submit" class="btn btn-primary">Ubah</button>
    </form>
    @endforeach
    </div>
</div>
</div>
</div>
</body>
</html>