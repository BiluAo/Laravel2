<x-layout>
    <div class="container-fluid px-4 py-4">

        {{-- Page Header --}}
        <div class="row mb-4">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-1">
                        <li class="breadcrumb-item">
                            <a href="/" class="text-decoration-none">
                                <i class="bi bi-house-door"></i> Dashboard
                            </a>
                        </li>
                        <li class="breadcrumb-item active">Fakultas</li>
                    </ol>
                </nav>
                <h4 class="fw-bold mb-0">
                    <i class="bi bi-building text-primary me-2"></i>Manajemen Fakultas
                </h4>
            </div>
        </div>

        {{-- Alert Session --}}
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show border-0 shadow-sm rounded-3 mb-4" role="alert">
                <div class="d-flex align-items-center">
                    <i class="bi bi-check-circle-fill me-2 fs-5"></i>
                    <span>{{ session('success') }}</span>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger alert-dismissible fade show border-0 shadow-sm rounded-3 mb-4" role="alert">
                <div class="d-flex align-items-center">
                    <i class="bi bi-x-circle-fill me-2 fs-5"></i>
                    <span>{{ session('error') }}</span>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        {{-- Stats Card --}}
        <div class="row g-3 mb-4">
            <div class="col-sm-6 col-xl-3">
                <div class="card border-0 shadow-sm rounded-3 h-100">
                    <div class="card-body d-flex align-items-center gap-3">
                        <div class="bg-primary bg-opacity-10 rounded-3 p-3">
                            <i class="bi bi-building fs-4 text-primary"></i>
                        </div>
                        <div>
                            <p class="text-muted small mb-0">Total Fakultas</p>
                            <h4 class="fw-bold mb-0">{{ $fakultas->count() }}</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="card border-0 shadow-sm rounded-3 h-100">
                    <div class="card-body d-flex align-items-center gap-3">
                        <div class="bg-success bg-opacity-10 rounded-3 p-3">
                            <i class="bi bi-person-badge fs-4 text-success"></i>
                        </div>
                        <div>
                            <p class="text-muted small mb-0">Total Dekan</p>
                            <h4 class="fw-bold mb-0">{{ $fakultas->count() }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Main Card --}}
        <div class="card border-0 shadow-sm rounded-3">

            {{-- Card Header --}}
            <div class="card-header bg-white border-bottom py-3 px-4">
                <div class="row align-items-center g-2">
                    <div class="col-12 col-md-6">
                        <h5 class="fw-bold mb-0 text-dark">
                            <i class="bi bi-list-ul text-primary me-2"></i>Daftar Fakultas
                        </h5>
                        <p class="text-muted small mb-0 mt-1">
                            Kelola seluruh data fakultas yang tersedia
                        </p>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="d-flex flex-wrap gap-2 justify-content-md-end">
                            {{-- Search --}}
                            <div class="input-group input-group-sm" style="width: 220px;">
                                <span class="input-group-text bg-light border-end-0">
                                    <i class="bi bi-search text-muted"></i>
                                </span>
                                <input type="text"
                                       class="form-control bg-light border-start-0 ps-0"
                                       placeholder="Cari fakultas..."
                                       id="searchInput">
                            </div>
                            {{-- Tambah Button --}}
                            <a href="/fakultas/create" class="btn btn-primary btn-sm px-3">
                                <i class="bi bi-plus-lg me-1"></i>Tambah
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Card Body --}}
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0" id="fakultasTable">
                        <thead>
                            <tr class="bg-light">
                                <th class="text-center text-muted fw-semibold ps-4"
                                    style="width: 60px;">No</th>
                                <th class="text-muted fw-semibold">
                                    <i class="bi bi-building me-1"></i>Nama Fakultas
                                </th>
                                <th class="text-muted fw-semibold">
                                    <i class="bi bi-person me-1"></i>Dekan
                                </th>
                                <th class="text-center text-muted fw-semibold pe-4"
                                    style="width: 180px;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($fakultas as $item)
                                <tr class="border-bottom searchable-row">
                                    {{-- No --}}
                                    <td class="text-center ps-4">
                                        <span class="badge bg-primary bg-opacity-10 text-primary rounded-pill fw-semibold px-2">
                                            {{ $loop->iteration }}
                                        </span>
                                    </td>

                                    {{-- Nama Fakultas --}}
                                    <td>
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="avatar-circle bg-primary bg-opacity-10 text-primary rounded-3 d-flex align-items-center justify-content-center flex-shrink-0"
                                                 style="width:40px; height:40px;">
                                                <i class="bi bi-building fs-5"></i>
                                            </div>
                                            <div>
                                                <p class="fw-semibold mb-0 searchable-name">
                                                    {{ $item->nama_fakultas }}
                                                </p>
                                                <small class="text-muted">ID: {{ $item->id }}</small>
                                            </div>
                                        </div>
                                    </td>

                                    {{-- Dekan --}}
                                    <td>
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="avatar-circle bg-success bg-opacity-10 text-success rounded-circle d-flex align-items-center justify-content-center flex-shrink-0"
                                                 style="width:32px; height:32px;">
                                                <i class="bi bi-person fs-6"></i>
                                            </div>
                                            <span class="fw-medium searchable-dekan">
                                                {{ $item->nama_dekan }}
                                            </span>
                                        </div>
                                    </td>

                                    {{-- Aksi --}}
                                    <td class="pe-4">
                                        <div class="d-flex gap-1 justify-content-center">

                                            {{-- Detail --}}
                                            <a href="/fakultas/{{ $item->id }}"
                                               class="btn btn-sm btn-light border"
                                               data-bs-toggle="tooltip"
                                               title="Lihat Detail">
                                                <i class="bi bi-eye text-info"></i>
                                            </a>

                                            {{-- Edit --}}
                                            <a href="/fakultas/{{ $item->id }}/edit"
                                               class="btn btn-sm btn-light border"
                                               data-bs-toggle="tooltip"
                                               title="Edit Data">
                                                <i class="bi bi-pencil text-warning"></i>
                                            </a>

                                            {{-- Hapus --}}
                                            <button type="button"
                                                    class="btn btn-sm btn-light border btn-delete"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#deleteModal"
                                                    data-id="{{ $item->id }}"
                                                    data-nama="{{ $item->nama_fakultas }}"
                                                    title="Hapus Data">
                                                <i class="bi bi-trash text-danger"></i>
                                            </button>

                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="text-center py-5">
                                        <div class="py-4">
                                            <div class="bg-light rounded-circle d-inline-flex align-items-center justify-content-center mb-3"
                                                 style="width:80px; height:80px;">
                                                <i class="bi bi-building-x fs-2 text-muted"></i>
                                            </div>
                                            <h6 class="fw-semibold text-muted">Belum Ada Data Fakultas</h6>
                                            <p class="text-muted small mb-3">
                                                Mulai tambahkan data fakultas untuk ditampilkan disini.
                                            </p>
                                            <a href="/fakultas/create" class="btn btn-primary btn-sm px-4">
                                                <i class="bi bi-plus-lg me-1"></i>Tambah Sekarang
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

            {{-- Card Footer --}}
            @if(method_exists($fakultas, 'hasPages') && $fakultas->hasPages())
                <div class="card-footer bg-white border-top py-3 px-4">
                    <div class="d-flex flex-column flex-md-row justify-content-between align-items-center gap-2">
                        <p class="text-muted small mb-0">
                            Menampilkan {{ $fakultas->firstItem() }}–{{ $fakultas->lastItem() }}
                            dari {{ $fakultas->total() }} data
                        </p>
                        <div>
                            {{ $fakultas->links() }}
                        </div>
                    </div>
                </div>
            @else
                <div class="card-footer bg-white border-top py-3 px-4">
                    <p class="text-muted small mb-0">
                        <i class="bi bi-info-circle me-1"></i>
                        Menampilkan {{ $fakultas->count() }} data fakultas
                    </p>
                </div>
            @endif

        </div>
    </div>

    {{-- ==================== MODAL DELETE ==================== --}}
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0 shadow rounded-3">
                <div class="modal-body text-center p-5">

                    {{-- Icon --}}
                    <div class="bg-danger bg-opacity-10 rounded-circle d-inline-flex
                                align-items-center justify-content-center mb-4"
                         style="width:72px; height:72px;">
                        <i class="bi bi-trash fs-2 text-danger"></i>
                    </div>

                    <h5 class="fw-bold mb-2">Hapus Fakultas?</h5>
                    <p class="text-muted mb-1">Anda akan menghapus fakultas:</p>
                    <p class="fw-semibold text-danger mb-4" id="modalFakultasNama">-</p>
                    <p class="text-muted small">
                        Tindakan ini <strong>tidak dapat dibatalkan</strong> dan
                        semua data terkait akan ikut terhapus.
                    </p>

                    <div class="d-flex gap-2 justify-content-center mt-4">
                        <button type="button"
                                class="btn btn-light border px-4"
                                data-bs-dismiss="modal">
                            <i class="bi bi-x-lg me-1"></i>Batal
                        </button>
                        <form id="deleteForm" method="POST" action="">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger px-4">
                                <i class="bi bi-trash me-1"></i>Ya, Hapus
                            </button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

    {{-- ==================== SCRIPTS ==================== --}}
    <script>
        document.addEventListener('DOMContentLoaded', function () {

            // ── Tooltip ──────────────────────────────────────
            const tooltips = document.querySelectorAll('[data-bs-toggle="tooltip"]');
            tooltips.forEach(el => new bootstrap.Tooltip(el, { trigger: 'hover' }));

            // ── Delete Modal ──────────────────────────────────
            const deleteModal = document.getElementById('deleteModal');
            deleteModal.addEventListener('show.bs.modal', function (event) {
                const btn       = event.relatedTarget;
                const id        = btn.getAttribute('data-id');
                const nama      = btn.getAttribute('data-nama');

                document.getElementById('modalFakultasNama').textContent = nama;
                document.getElementById('deleteForm').action = `/fakultas/${id}`;
            });

            // ── Search ────────────────────────────────────────
            const searchInput = document.getElementById('searchInput');
            searchInput.addEventListener('keyup', function () {
                const query = this.value.toLowerCase().trim();
                const rows  = document.querySelectorAll('.searchable-row');

                rows.forEach(row => {
                    const nama  = row.querySelector('.searchable-name')?.textContent.toLowerCase() ?? '';
                    const dekan = row.querySelector('.searchable-dekan')?.textContent.toLowerCase() ?? '';
                    row.style.display = (nama.includes(query) || dekan.includes(query)) ? '' : 'none';
                });
            });

        });
    </script>
</x-layout>