@extends('navbar')

@section('content')

    <div class="row justify-content-center mt-3">
        <div class="col-md-8">
            <div class="card">

                <div class="card-header">
                    <h3 class="card-title">Tambah Data Artikel</h3>
                </div>
                
                <div class="card-body">
                    <form action="/artikel/store" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="mb-3">
                            <label for="title" class="form-label">Judul Artikel</label>
                            <input type="text" class="form-control" name="title" id="title" required="required" placeholder="Masukkan Judul Artikel">
                        </div>
                        <div class="mb-3">
                            <label for="content" class="form-label">Isi Artikel</label>
                            <textarea class="form-control" name="content" id="content" required="required" placeholder="Masukkan Isi Artikel" rows="10"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Gambar Artikel</label>
                            <input type="file" class="form-control" name="image" id="image" required="required" placeholder="Masukkan Gambar Artikel">
                        </div>
                        <div class="mb-3">
                            <label for="id_category" class="form-label">Kategori Artikel</label>
                            <select class="form-select" name="id_category" id="id_category" required="required">
                                <option value="">Pilih Kategori</option>
                                @foreach($category as $c)
                                <option value="{{$c->id_category}}">{{$c->category_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <a class="btn btn-success" href="/artikel" role="button">Kembali</a>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection