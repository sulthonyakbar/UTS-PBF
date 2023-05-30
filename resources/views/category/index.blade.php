@extends('navbar')

@section('content')

  <div class="container">

    <h4 class="mt-3"> Selamat Datang,<b> {{ Auth::user()->name }} </b></h4>

    <h3 class="mt-3">Data Kategori Artikel</h3>

    <a class="btn btn-primary mt-3" href="/category/tambah" role="button">+ Tambah Data Kategori</a>

    <form class="d-flex mt-3" role="search" method="get">
      <input class="form-control me-2" name="search" type="search" placeholder="Search..." aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>

    <table class="table mt-3">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama Kategori</th>
          <th scope="col">Opsi</th>
        </tr>
      </thead>
      <tbody>
        @foreach($category as $w)
        <tr>
          <th scope="row">{{ ($category->currentPage()-1) * $category->perPage() + $loop->iteration }}</th>
          <td>{{$w->category_name}}</td>
          <td>
            <span class="badge p-2 text-bg-info"><a href="/category/edit/{{$w->id_category}}" class="link-light text-decoration-none">Edit</a></span>
            <span class="badge p-2 text-bg-danger"><a href="/category/hapus/{{$w->id_category}}" class="link-light text-decoration-none" onclick="return confirm('Yakin ingin menghapus data?');">Hapus</a></span>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    {{ $category->links() }}
  </div>

@endsection