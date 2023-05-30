@extends('navbar')

@section('content')

  <div class="container">

    <h4 class="mt-3"> Selamat Datang,<b> {{ Auth::user()->name }} </b></h4>

    <h3 class="mt-3">Data Artikel</h3>

    <a class="btn btn-primary mt-3" href="/artikel/tambah" role="button">+ Tambah Data Artikel</a>

    <form class="d-flex mt-3" role="search" method="get">
      <input class="form-control me-2" name="search" type="search" placeholder="Search..." aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>

    <table class="table mt-3">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Judul Artikel</th>
          <th scope="col">Waktu Publish</th>
          <th scope="col">Opsi</th>
        </tr>
      </thead>
      <tbody>
        @foreach($article as $w)
        <tr>
          <th scope="row">{{ ($article->currentPage()-1) * $article->perPage() + $loop->iteration }}</th>
          <td>{{$w->title}}</td>
          <td>{{ date('d M Y H:i:s', strtotime($w->created_at)) }}</td>
          <td>
            <span class="badge p-2 text-bg-success"><a href="/artikel/detail/{{$w->id_article}}" class="link-light text-decoration-none">Detail</a></span>
            <span class="badge p-2 text-bg-info"><a href="/artikel/edit/{{$w->id_article}}" class="link-light text-decoration-none">Edit</a></span>
            <span class="badge p-2 text-bg-danger"><a href="/artikel/hapus/{{$w->id_article}}" class="link-light text-decoration-none" onclick="return confirm('Yakin ingin menghapus data?');">Hapus</a></span>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    {{ $article->links() }}
  </div>

@endsection