<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  @vite([])
</head>

<body>
  <<nav class="navbar navbar-expand-lg sticky-top" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
    <div class="container">
        <a class="navbar-brand text-white fw-bold fs-4" href="{{ url('/') }}">
            <i class="bi bi-mortarboard-fill me-2"></i>
            Sistem Informasi Fakultas
        </a>
        <button class="navbar-toggler border-0 text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link text-white {{ request()->is('fakultas') ? 'active fw-bold' : '' }}" 
                       href="{{ url('/fakultas') }}">
                        <i class="bi bi-building me-1"></i>Fakultas
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white {{ request()->is('fakultas/create') ? 'active fw-bold' : '' }}" 
                       href="{{ url('/fakultas/create') }}">
                        <i class="bi bi-plus-circle me-1"></i>Tambah Fakultas
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<style>
    .navbar {
        box-shadow: 0 2px 20px rgba(0,0,0,0.1);
        transition: all 0.3s ease;
    }
    .navbar .nav-link {
        transition: all 0.3s ease;
        border-radius: 8px;
        margin: 0 5px;
    }
    .navbar .nav-link:hover {
        background-color: rgba(255,255,255,0.1);
        transform: translateY(-2px);
    }
    .navbar .nav-link.active {
        background-color: rgba(255,255,255,0.2);
        border-bottom: 2px solid white;
    }
    .navbar-toggler {
        background-color: rgba(255,255,255,0.2);
    }
    .navbar-toggler-icon {
        filter: brightness(0) invert(1);
    }
</style>
  <main>
    @if (session('success'))
    <div class="alert alert-success">
      {{ session('sucess') }}
    </div>
    @endif
    {{$slot}}
    <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
      ntegrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
      crossorigin="anonymous"></script>
</body>

</html>