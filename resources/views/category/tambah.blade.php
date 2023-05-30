@extends('navbar')

@section('content')

    <div class="row justify-content-center mt-3">
        <div class="col-md-8">
            <div class="card">

                <div class="card-header">
                    <h3 class="card-title">Tambah Data Kategori</h3>
                </div>
                
                <div class="card-body">
                    <form action="/category/store" method="post">
                        {{csrf_field()}}
                        <div class="mb-3">
                            <label for="category_name" class="form-label">Nama Kategori</label>
                            <input type="text" class="form-control" name="category_name" id="category_name" required="required" placeholder="Masukkan Nama Kategori Artikel">
                        </div>
                        <a class="btn btn-success" href="/category" role="button">Kembali</a>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection