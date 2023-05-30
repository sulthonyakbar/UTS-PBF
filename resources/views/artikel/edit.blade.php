@extends('navbar')

@section('content')

    <div class="row justify-content-center mt-3">
        <div class="col-md-8">
            <div class="card">

                <div class="card-header">
                    <h3 class="mt-3 mb-3">Edit Data Artikel</h3>
                </div>

                <div class="card-body">
                    @foreach($article as $w)
                    <form action="/artikel/update" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <input type="hidden" name="id_article" value="{{$w->id_article}}">
                        <div class="mb-3">
                            <label for="title" class="form-label">Judul Artikel</label>
                            <input type="text" class="form-control" name="title" id="title" required="required" value="{{$w->title}}">
                        </div>
                        <div class="mb-3">
                            <label for="content" class="form-label">Isi Artikel</label>
                            <textarea class="form-control" name="content" id="content" required="required">{{$w->content}}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Gambar</label>
                            <!-- preview image -->
                            <div class="col-sm-2 mb-2">
                                <img src="{{asset($w->image)}}" width="200px">
                            </div>
                            <input type="file" class="form-control" name="image" id="image" required="required" value="{{$w->image}}">
                        </div>
                        <div class="mb-3">
                            <label for="id_category" class="form-label">Kategori</label>
                            <select class="form-control" name="id_category" id="id_category" required="required">
                                <option value="">Pilih Kategori</option>
                                @foreach($category as $c)
                                <option value="{{$c->id_category}}" @if($c->id_category == $w->category_id) selected @endif>{{$c->category_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <a class="btn btn-success" href="/artikel" role="button">Kembali</a>
                        <button type="submit" class="btn btn-primary">Ubah</button>
                    </form>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection