@extends('navbar')

@section('content')

    <div class="row justify-content-center mt-3">
        <div class="col-md-8">
            <div class="card">

                <div class="card-header">
                    <h3 class="mt-3 mb-3">Edit Data Kategori</h3>
                </div>

                <div class="card-body">
                    @foreach($category as $w)
                    <form action="/category/update" method="post">
                        {{csrf_field()}}
                        <input type="hidden" name="id_category" value="{{$w->id_category}}">
                        <div class="mb-3">
                            <label for="category_name" class="form-label">Nama Kategori</label>
                            <input type="text" class="form-control" name="category_name" id="category_name" value="{{$w->category_name}}">
                        </div>
                        <a class="btn btn-success" href="/category" role="button">Kembali</a>
                        <button type="submit" class="btn btn-primary">Ubah</button>
                    </form>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection