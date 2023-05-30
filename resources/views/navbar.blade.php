<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{$title}}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
      @auth
      <nav class="navbar navbar-expand-lg bg-body-tertiary border">
        <div class="container-fluid">
          <a class="navbar-brand" href="/warga">SiDesa</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
          
            <ul class="navbar-nav d-flex flex-row justify-content-between">          
              <li class="nav-item">
                <a class="nav-link" href="/warga">Data Warga</a>
              </li>
            
              <li class="nav-item">
                <a class="nav-link" href="/inventaris">Data Inventaris</a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="/category">Data Kategori</a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="/artikel">Data Artikel</a>
              </li>

              <li class="nav-item">
                <form action="{{ route('logout') }}" method="POST" class="d-flex ms-auto mb-2 mb-lg-0">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-light" type="submit">Log Out</button>
                </form>
              </li>             
            </ul>
          </div>
        </div>
      </nav>
    @endauth
        @yield('content')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>