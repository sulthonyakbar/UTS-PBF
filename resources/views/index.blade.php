@extends('app')

@section('content')

  <div class="container">

    <h4 class="mt-3"> Selamat Datang,<b> {{ Auth::user()->name }} </b></h4>

    <h3 class="mt-3">Data Warga</h3>

    <a class="btn btn-primary mt-3" href="/warga/tambah" role="button">+ Tambah Data Warga</a>

    <table class="table mt-3">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">NIK</th>
          <th scope="col">Nama</th>
          <th scope="col">Jenis Kelamin</th>
          <th scope="col">Pekerjaan</th>
          <th scope="col">Opsi</th>
        </tr>
      </thead>
      <tbody>
        @foreach($warga as $w)
        <tr>
          <th scope="row">{{ ($warga->currentPage()-1) * $warga->perPage() + $loop->iteration }}</th>
          <td>{{$w->nik}}</td>
          <td>{{$w->nama}}</td>
          <td>{{$w->jenis_kelamin}}</td>
          <td>{{$w->pekerjaan}}</td>
          <td>
            <span class="badge p-2 text-bg-success"><a href="/warga/detail/{{$w->id}}" class="link-light text-decoration-none">Detail</a></span>
            <span class="badge p-2 text-bg-info"><a href="/warga/edit/{{$w->id}}" class="link-light text-decoration-none">Edit</a></span>
            <span class="badge p-2 text-bg-danger"><a href="/warga/hapus/{{$w->id}}" class="link-light text-decoration-none">Hapus</a></span>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    {{ $warga->links() }}
  </div>

@endsection