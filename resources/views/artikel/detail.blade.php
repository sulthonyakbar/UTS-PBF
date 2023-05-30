@extends('navbar')

@section('content')

  <div class="container">

    <h3 class="mt-3 mb-3">Detail Data Artikel</h3>

    <table class="table mt-3">
      <tbody>
        <tr>
          <th scope="row">Judul Artikel</th>
          <td>:</td>
          <td>{{$article->title}}</td>
        </tr>
        <tr>
          <th scope="row">Isi Artikel</th>
          <td>:</td>
          <td>{{$article->content}}</td>
        </tr>
        <tr>
          <th scope="row">Gambar Artikel</th>
          <td>:</td>
          <td><img src="{{asset($article->image)}}" width="200px"></td>
        </tr>
        <tr>
          <th scope="row">Kategori Artikel</th>
          <td>:</td>
          <td>{{$category->category_name}}</td>
        </tr>
        <tr>
          <th scope="row">Author Artikel</th>
          <td>:</td>
          <td>{{$users->name}}</td>
        </tr>
        <tr>
          <th scope="row">Waktu Publish</th>
          <td>:</td>
          <td>{{ date('d M Y H:i:s', strtotime($article->created_at)) }}</td>
        </tr>
      </tbody>
    </table>
    <a class="btn btn-success" href="/artikel" role="button">Kembali</a>
  </div>

@endsection