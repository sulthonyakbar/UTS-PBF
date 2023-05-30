@extends('navbar')

@section('content')

  <div class="container">

    <h4 class="mt-3"> Selamat Datang,<b> {{ Auth::user()->name }} </b></h4>

    <h3 class="mt-3">Data Inventaris</h3>

    <a class="btn btn-primary mt-3" href="/inventaris/tambah" role="button">+ Tambah Data Barang</a>

    <form class="d-flex mt-3" role="search" method="get">
      <input class="form-control me-2" name="search" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>

    <table class="table mt-3">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama Barang</th>
          <th scope="col">Jenis Barang</th>
          <th scope="col">Sumber</th>
          <th scope="col">Status</th>
          <th scope="col">Opsi</th>
        </tr>
      </thead>
      <tbody>
        @foreach($inventaris as $i)
        <tr>
          <th scope="row">{{ ($inventaris->currentPage()-1) * $inventaris->perPage() + $loop->iteration }}</th>
          <td>{{$i->nama_barang}}</td>
          <td>{{$i->jenis_barang}}</td>
          <td>{{$i->sumber}}</td>
          <td>{{$i->status}}</td>
          <td>
            <span class="badge p-2 text-bg-success"><a href="/inventaris/detail/{{$i->id}}" class="link-light text-decoration-none">Detail</a></span>
            <span class="badge p-2 text-bg-info"><a href="/inventaris/edit/{{$i->id}}" class="link-light text-decoration-none">Edit</a></span>
            <span class="badge p-2 text-bg-danger"><a href="/inventaris/hapus/{{$i->id}}" class="link-light text-decoration-none" onclick="return confirm('Yakin ingin menghapus data?');">Hapus</a></span>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    {{ $inventaris->links() }}
  </div>

@endsection