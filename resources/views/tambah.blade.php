<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/sass/app.scss', 'resources/js/app.js']) 
    <title>Tambah Data Warga</title>
</head>
<body>
<div class="container">

    <h3 class="mt-3 mb-3">Tambah Data Warga</h3>
    
    <form action="/warga/store" method="post">
        {{csrf_field()}}
        <div class="mb-3">
            <label for="NIK" class="form-label">NIK</label>
            <input type="text" class="form-control" name="NIK" id="NIK" required="required">
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" name="nama" id="nama" required="required">
        </div>
        <div class="mb-3">
            <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
            <input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir" required="required">
        </div>
        <div class="mb-3">
            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
            <select class="form-select" name="jenis_kelamin" id="jenis_kelamin">
                <option selected>Pilih Jenis Kelamin...</option>
                <option value="Laki - Laki">Laki - laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>        
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea class="form-control" name="alamat" id="alamat"></textarea>
        </div>
        <div class="mb-3">
            <label for="agama" class="form-label">Agama</label>
            <select class="form-select" name="agama" id="agama">
                <option selected>Pilih Agama...</option>
                <option value="Islam">Islam</option>
                <option value="Kristen">Kristen</option>
                <option value="Katolik">Katolik</option>
                <option value="Budha">Budha</option>
                <option value="Hindu">Hindu</option>
                <option value="Konghucu">Konghucu</option>
            </select> 
        </div>
        <div class="mb-3">
            <label for="pekerjaan" class="form-label">Pekerjaan</label>
            <input type="text" class="form-control" name="pekerjaan" id="pekerjaan" required="required">
        </div>
        <a class="btn btn-success" href="/warga" role="button">Kembali</a>
        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
</div>
</body>
</html>