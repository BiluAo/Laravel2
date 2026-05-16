<x-layout>
  <div class="d-flex justify-content-center py-5">
    <div class="card border-0 shadow-sm" style="width: 100%; max-width: 480px;">
      <div class="card-body p-4">
        <div class="mb-4">
          <h5 class="fw-semibold mb-0">Tambah Fakultas</h5>
          <p class="text-muted mb-0 mt-1" style="font-size: 13px;">
            Isi informasi fakultas baru di bawah ini.
          </p>
        </div>
        <hr>

        @if ($errors  -> any())
            <div class="Alert alert-danger">
                <ul>
                    @foreach ($errors ->all() as $error)
                    <li>{{ $error }}</li>

                    @endforeach
                </ul>
            </div>
        @endif
        
        <form action="/fakultas" method="POST">
          @csrf


          <div class="mb-3">
            <label for="nama_fakultas" class="form-label small fw-medium text-secondary">
              Nama Fakultas
            </label>
            <input
              id="nama_fakultas"
              name="nama_fakultas"
              type="text"
              placeholder="contoh: Fakultas Teknik"
              class="form-control"
            >
          </div>

          <div class="mb-4">
            <label for="nama_dekan" class="form-label small fw-medium text-secondary">
              Nama Dekan
            </label>
            <input
              id="nama_dekan"
              name="nama_dekan"
              type="text"
              placeholder="contoh: Prof. Dr. Budi Santoso"
              class="form-control"
            >
          </div>

          <div class="d-flex gap-2 justify-content-end">
            <a href="/fakultas" class="btn btn-light">Batal</a>
            <button type="submit" class="btn btn-primary px-4">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</x-layout>