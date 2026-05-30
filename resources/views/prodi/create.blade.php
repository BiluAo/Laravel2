<x-layout>
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card border-0 shadow-sm">
                    <div class="card-header bg-white py-3">
                        <h5 class="mb-0">
                            <i class="bi bi-plus-circle text-primary me-2"></i>Tambah Program Studi
                        </h5>
                    </div>
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('prodi.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf


                            <div class="mb-3">
                                <label for="fakultas" class="form-label">
                                    Fakultas
                                </label>
                                <select class="form-select" name="fakultas_id" id="fakultas">
                                    <option value="">Pilih Fakultas</option>
                                    @foreach ($listfakultas as $fakultas)
                                        <option value="{{ $fakultas->id }}">
                                            {{ $fakultas->nama_fakultas }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('fakultas_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="alias_prodi" class="form-label">Alias Prodi <span
                                        class="text-danger">*</span></label>
                                <input type="text" name="alias_prodi" id="alias_prodi"
                                    class="form-control @error('alias_prodi') is-invalid @enderror"
                                    value="{{ old('alias_prodi') }}" placeholder="Contoh: TI, SI, IF" required>
                                @error('alias_prodi')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="nama_prodi" class="form-label">Nama Program Studi <span
                                        class="text-danger">*</span></label>
                                <input type="text" name="nama_prodi" id="nama_prodi"
                                    class="form-control @error('nama_prodi') is-invalid @enderror"
                                    value="{{ old('nama_prodi') }}" placeholder="Contoh: Teknik Informatika" required>
                                @error('nama_prodi')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="nama_kaprodi" class="form-label">Ketua Program Studi <span
                                        class="text-danger">*</span></label>
                                <input type="text" name="nama_kaprodi" id="nama_kaprodi"
                                    class="form-control @error('nama_kaprodi') is-invalid @enderror"
                                    value="{{ old('nama_kaprodi') }}" placeholder="Contoh: Dr. Ahmad Budiman, M.Kom"
                                    required>
                                @error('nama_kaprodi')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="photo_kaprodi" class="form-label">Photo Kaprodi</label>
                                <input 
                                    type="file" 
                                    name="photo_kaprodi" 
                                    id="photo_kaprodi"
                                    class="form-control 
                                    accept="image/*"
                                    placeholder="Pilih Photo Kaprodi"
                            </div>

                            <div class="d-flex gap-2 justify-content-end">
                                <a href="{{ route('prodi.index') }}" class="btn btn-secondary">Batal</a>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>