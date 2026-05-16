<x-layout>
    <div class="container mt-5">
        <!-- Hero Section -->
        <div class="text-center mb-5">
            <div class="mb-4">
                <i class="bi bi-mortarboard-fill text-primary" style="font-size: 4rem;"></i>
            </div>
            <h1 class="display-4 fw-bold text-primary mb-3">Belajar Basic Laravel</h1>
            <p class="lead text-muted mb-4">
                Mulai perjalanan Anda menguasai Laravel dari dasar hingga mahir
            </p>
            <div class="d-flex gap-3 justify-content-center">
                <a href="/fakultas" class="btn btn-primary btn-lg px-4">
                    <i class="bi bi-play-fill me-2"></i>Mulai Belajar
                </a>
                <a href="#" class="btn btn-outline-secondary btn-lg px-4">
                    <i class="bi bi-info-circle me-2"></i>Pelajari
                </a>
            </div>
        </div>

        <!-- Features Section -->
        <div class="row g-4 mt-4">
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm text-center">
                    <div class="card-body p-4">
                        <i class="bi bi-lightning-charge fs-1 text-primary mb-3"></i>
                        <h5 class="fw-bold">Mudah Dipahami</h5>
                        <p class="text-muted small">Materi disusun sistematis untuk pemula</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm text-center">
                    <div class="card-body p-4">
                        <i class="bi bi-code-square fs-1 text-success mb-3"></i>
                        <h5 class="fw-bold">Praktik Langsung</h5>
                        <p class="text-muted small">Belajar sambil membuat project nyata</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm text-center">
                    <div class="card-body p-4">
                        <i class="bi bi-shield-check fs-1 text-info mb-3"></i>
                        <h5 class="fw-bold">Best Practices</h5>
                        <p class="text-muted small">Mengikuti standar pengembangan modern</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Quick Menu -->
        <div class="row mt-5">
            <div class="col-12">
                <div class="card border-0 bg-light">
                    <div class="card-body p-4 text-center">
                        <h5 class="mb-3">Akses Cepat</h5>
                        <div class="d-flex gap-3 justify-content-center flex-wrap">
                            <a href="/fakultas" class="btn btn-outline-primary">
                                <i class="bi bi-building me-1"></i> Data Fakultas
                            </a>
                            <a href="/fakultas/create" class="btn btn-outline-success">
                                <i class="bi bi-plus-circle me-1"></i> Tambah Fakultas
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .card {
            transition: transform 0.2s;
        }
        .card:hover {
            transform: translateY(-5px);
        }
    </style>
</x-layout>