<x-layout>
    <div class="container mt-4">
        <div class="card shadow-sm border-0 rounded-3">
            <div class="card-header bg-white py-3 border-bottom-0">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h5 class="mb-0 fw-bold text-primary">
                            <i class="bi bi-info-circle me-2"></i>Detail Fakultas
                        </h5>
                        <p class="text-muted small mb-0 mt-1">Informasi lengkap data fakultas</p>
                    </div>
                    <div class="d-flex gap-2">
                        <a href="/fakultas" class="btn btn-secondary btn-sm">
                            <i class="bi bi-arrow-left me-1"></i>Kembali
                        </a>
                        <a href="/fakultas/{{ $fakultas->id }}/edit" class="btn btn-warning btn-sm">
                            <i class="bi bi-pencil-square me-1"></i>Edit
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card bg-light border-0 mb-3">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="bg-primary bg-opacity-10 rounded-circle p-3 me-3">
                                        <i class="bi bi-building fs-4 text-primary"></i>
                                    </div>
                                    <div>
                                        <small class="text-muted d-block">Nama Fakultas</small>
                                        <h4 class="mb-0 fw-bold">{{ $fakultas->nama_fakultas }}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="card bg-light border-0 mb-3">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="bg-success bg-opacity-10 rounded-circle p-3 me-3">
                                        <i class="bi bi-person-badge fs-4 text-success"></i>
                                    </div>
                                    <div>
                                        <small class="text-muted d-block">Nama Dekan</small>
                                        <h4 class="mb-0 fw-bold">{{ $fakultas->nama_dekan }}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                {{-- Informasi tambahan jika ada --}}
                <div class="row mt-2">
                    <div class="col-12">
                        <div class="card bg-light border-0">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="bg-info bg-opacity-10 rounded-circle p-3 me-3">
                                        <i class="bi bi-calendar fs-4 text-info"></i>
                                    </div>
                                    <div>
                                        <small class="text-muted d-block">Informasi Lainnya</small>
                                        <p class="mb-0">
                                            <span class="badge bg-secondary me-1">ID: {{ $fakultas->id }}</span>
                                            @if(isset($fakultas->created_at))
                                                <span class="badge bg-light text-dark">Dibuat: {{ $fakultas->created_at->format('d/m/Y H:i') }}</span>
                                            @endif
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="card-footer bg-white border-top-0 py-3">
                <div class="d-flex justify-content-between align-items-center">
                    <small class="text-muted">
                        <i class="bi bi-database me-1"></i>Sistem Informasi Fakultas
                    </small>
                    <div class="d-flex gap-2">
                        <form action="/fakultas/{{ $fakultas->id }}" 
                              method="post" 
                              class="d-inline"
                              onsubmit="return confirm('Yakin ingin menghapus fakultas {{ $fakultas->nama_fakultas }}?')">
                            @csrf
                            @method("DELETE")
                            <button type="submit" class="btn btn-danger btn-sm">
                                <i class="bi bi-trash me-1"></i>Hapus
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>