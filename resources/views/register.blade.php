@extends('navbar')

@section('content')

    <div class="row justify-content-center mt-5">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title"><b>SiDesa | Register</b></h3>
                </div>
                <div class="card-body">
                    @if(Session::has('error'))
                    <div class="alert alert-danger" role="alert">
                        {{ Session::get('error') }}
                    </div>
                    @endif

                    <form action="{{ route('register') }}" method="post">
                    @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Fullname</label>
                            <input type="name" class="form-control" name="name" id="name" placeholder="Jonathan Doe">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" id="password" class="form-control" name="password" placeholder="Password">
                        </div>
                        <div class="mb-3">
                            <div class="d-grid">
                                <button type="submit" class="btn btn-dark">Register</button>
                                <a class="btn btn-primary mt-3" href="/" role="button">Log In</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection