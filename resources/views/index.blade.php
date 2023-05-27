<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Warga</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
  @include('navbar')
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
        <?php $no=1; ?>
        @foreach($warga as $w)
    <tr>
      <th scope="row">{{$no}}</th>
      <td>{{$w->NIK}}</td>
      <td>{{$w->nama}}</td>
      <td>{{$w->jenis_kelamin}}</td>
      <td>{{$w->pekerjaan}}</td>
      <td>
        <span class="badge text-bg-success"><a href="/warga/detail/{{$w->id_warga}}" class="link-light">Detail</a></span>
        <span class="badge text-bg-info"><a href="/warga/edit/{{$w->id_warga}}" class="link-light">Edit</a></span>
        <span class="badge text-bg-danger"><a href="/warga/hapus/{{$w->id_warga}}" class="link-light">Hapus</a></span>
      </td>
    </tr>
    <?php $no++; ?>
     @endforeach
  </tbody>
</table>
{!!$warga->withQueryString()->links('pagination::bootstrap-5')!!}
</div>
</body>
</html>