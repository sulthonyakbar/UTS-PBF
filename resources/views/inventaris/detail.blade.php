@extends('navbar')

@section('content')

<div class="container">

<h3 class="mt-3 mb-3">Detail Data Barang</h3>

<table class="table mt-3">
  <tbody>
    <tr>
      <td>Nama Barang</td>
      <td>:</td>
      <td>{{$inventaris->nama_barang}}</td>
    </tr>
    <tr>
      <td>Jenis Barang</td>
      <td>:</td>
      <td>{{$inventaris->jenis_barang}}</td>
    </tr>
    <tr>
      <td>Deskripsi</td>
      <td>:</td>
      <td>{{$inventaris->deskripsi_barang}}</td>
    </tr>
    <tr>
      <td>Harga</td>
      <td>:</td>
      <td>Rp. {{number_format($inventaris->harga, 0, ',', '.')}}</td>
    </tr>
    <tr>
      <td>Tanggal Diperoleh</td>
      <td>:</td>
      <!-- date format -->
      <td>{{date('d F Y', strtotime($inventaris->tgl_diperoleh))}}</td>
    </tr>
    <tr>
      <td>Sumber</td>
      <td>:</td>
      <td>{{$inventaris->sumber}}</td>
    </tr>
    <tr>
      <td>Status</td>
      <td>:</td>
      <td>{{$inventaris->status}}</td>
    </tr>
    <tr>
      <td>Jumlah</td>
      <td>:</td>
      <td>{{$inventaris->jumlah}}</td>
    </tr>
  </tbody>
</table>
<a class="btn btn-success" href="/inventaris" role="button">Kembali</a>
</div>
@endsection