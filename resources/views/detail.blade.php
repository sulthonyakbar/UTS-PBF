@extends('app')

@section('content')

  <div class="container">

    <h3 class="mt-3 mb-3">Detail Data Warga</h3>

    <table class="table mt-3">
      <tbody>
        <tr>
          <td>NIK</td>
          <td>:</td>
          <td>{{$warga->nik}}</td>
        </tr>
        <tr>
          <td>Nama</td>
          <td>:</td>
          <td>{{$warga->nama}}</td>
        </tr>
        <tr>
          <td>Tanggal Lahir</td>
          <td>:</td>
          <td>{{$warga->tgl_lahir}}</td>
        </tr>
        <tr>
          <td>Jenis Kelamin</td>
          <td>:</td>
          <td>{{$warga->jenis_kelamin}}</td>
        </tr>
        <tr>
          <td>Alamat</td>
          <td>:</td>
          <td>{{$warga->alamat}}</td>
        </tr>
        <tr>
          <td>Agama</td>
          <td>:</td>
          <td>{{$warga->agama}}</td>
        </tr>
        <tr>
          <td>Pekerjaan</td>
          <td>:</td>
          <td>{{$warga->pekerjaan}}</td>
        </tr>
      </tbody>
    </table>
    <a class="btn btn-success" href="/warga" role="button">Kembali</a>
  </div>

@endsection