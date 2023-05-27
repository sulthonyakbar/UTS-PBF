<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary border">
  <div class="container-fluid">
    <a class="navbar-brand" href="/warga">SiDesa</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="/warga">Data Warga</a>
        </li>
    </ul>
    <form action="{{ route('logout') }}" method="POST" class="d-flex ms-auto mb-2 mb-lg-0">
        @csrf
        @method('DELETE')
        <button class="btn btn-light" type="submit">Log Out</button>
    </form>
    </ul>
    </div>
  </div>
</nav>
</body>
</html>