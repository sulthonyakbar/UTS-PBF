@extends('app')

@section('content')

    <div class="row justify-content-center mt-3">
        <div class="col-md-8">
            <div class="card">

                <div class="card-header">
                    <h3 class="card-title">Tambah Data Warga</h3>
                </div>
                
                <div class="card-body">
                    <form action="/warga/store" method="post">
                        {{csrf_field()}}
                        <div class="mb-3">
                            <label for="NIK" class="form-label">NIK</label>
                            <input type="text" class="form-control" name="NIK" id="NIK" required="required" placeholder="Masukkan NIK Anda">
                        </div>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" name="nama" id="nama" required="required" placeholder="Masukkan Nama Lengkap Anda">
                        </div>
                        <div class="mb-3">
                            <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                            <input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir" required="required">
                        </div>
                        <div class="mb-3">
                            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                            <select class="form-select" name="jenis_kelamin" id="jenis_kelamin">
                                <option selected>Pilih Jenis Kelamin...</option>
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>        
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <textarea class="form-control" name="alamat" id="alamat" placeholder="Masukkan Alamat Anda"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="agama" class="form-label">Agama</label>
                            <select class="form-select" name="agama" id="agama">
                                <option selected>Pilih Agama...</option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Buddha">Buddha</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Konghucu">Konghucu</option>
                            </select> 
                        </div>
                        <div class="mb-3">
                            <label for="pekerjaan" class="form-label">Pekerjaan</label>
                            <input type="text" class="form-control" name="pekerjaan" id="pekerjaan" required="required" placeholder="Masukkan Pekerjaan Anda">
                        </div>
                        <a class="btn btn-success" href="/warga" role="button">Kembali</a>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection