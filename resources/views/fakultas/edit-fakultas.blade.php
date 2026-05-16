<x-layout>
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm border-0 rounded-3">
                    <div class="card-header bg-white py-3 border-bottom-0">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h5 class="mb-0 fw-bold text-primary">
                                    <i class="bi bi-pencil-square me-2"></i>Edit Fakultas
                                </h5>
                                <p class="text-muted small mb-0 mt-1">
                                    Perbarui informasi data fakultas
                                </p>
                            </div>
                            <a href="/fakultas" class="btn btn-secondary btn-sm">
                                <i class="bi bi-arrow-left me-1"></i>Kembali
                            </a>
                        </div>
                    </div>
                    
                    @if ($errors  -> any())
            <div class="Alert alert-danger">
                <ul>
                    @foreach ($errors ->all() as $error)
                    <li>{{ $error }}</li>

                    @endforeach
                </ul>
            </div>
        @endif

                    <div class="card-body">
                        <form action="/fakultas/{{ $fakultas->id }}" method="POST">
                            @csrf
                            @method("PUT")
                            
                            {{-- Nama Fakultas Field --}}
                            <div class="mb-4">
                                <label for="nama_fakultas" class="form-label fw-semibold">
                                    <i class="bi bi-building me-1 text-primary"></i>Nama Fakultas
                                </label>
                                <input 
                                    name="nama_fakultas"
                                    id="nama_fakultas"
                                    type="text"
                                    placeholder="Masukkan nama fakultas"
                                    class="form-control form-control-lg @error('nama_fakultas') is-invalid @enderror"
                                    value="{{ old('nama_fakultas', $fakultas->nama_fakultas) }}"
                                    
                                >
                                @error('nama_fakultas')
                                    <div class="invalid-feedback">
                                        <i class="bi bi-exclamation-circle me-1"></i>{{ $message }}
                                    </div>
                                @enderror
                                <div class="form-text">
                                    Contoh: Fakultas Ilmu Komputer, Fakultas Ekonomi, dll.
                                </div>
                            </div>
                            
                            {{-- Nama Dekan Field --}}
                            <div class="mb-4">
                                <label for="nama_dekan" class="form-label fw-semibold">
                                    <i class="bi bi-person-badge me-1 text-success"></i>Nama Dekan
                                </label>
                                <input 
                                    name="nama_dekan"
                                    id="nama_dekan"
                                    type="text"
                                    placeholder="Masukkan nama dekan"
                                    class="form-control form-control-lg @error('nama_dekan') is-invalid @enderror"
                                    value="{{ old('nama_dekan', $fakultas->nama_dekan) }}"
                                    
                                >
                                @error('nama_dekan')
                                    <div class="invalid-feedback">
                                        <i class="bi bi-exclamation-circle me-1"></i>{{ $message }}
                                    </div>
                                @enderror
                                <div class="form-text">
                                    Masukkan nama lengkap dekan fakultas.
                                </div>
                            </div>
                            
                            {{-- Informasi ID (Readonly) --}}
                            <div class="mb-4 p-3 bg-light rounded-3">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <small class="text-muted d-block">
                                            <i class="bi bi-hash"></i> ID Fakultas
                                        </small>
                                        <span class="fw-semibold">{{ $fakultas->id }}</span>
                                    </div>
                                    @if(isset($fakultas->created_at))
                                    <div class="col-sm-6">
                                        <small class="text-muted d-block">
                                            <i class="bi bi-calendar"></i> Terakhir Diupdate
                                        </small>
                                        <span class="fw-semibold">{{ $fakultas->updated_at->format('d/m/Y H:i:s') }}</span>
                                    </div>
                                    @endif
                                </div>
                            </div>
                            
                            {{-- Action Buttons --}}
                            <div class="d-flex gap-2 justify-content-end">
                                <a href="/fakultas" class="btn btn-light btn-lg px-4">
                                    <i class="bi bi-x-circle me-1"></i>Batal
                                </a>
                                <button type="submit" class="btn btn-primary btn-lg px-4">
                                    <i class="bi bi-check-circle me-1"></i>Simpan Perubahan
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>