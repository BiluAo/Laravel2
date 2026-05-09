<x-layout>
    <form action="/fakultas" method="POST">
        @csrf
        @method("PUT")
        <div class="form-group">
            <input
            name="nama_fakultas"
            type="text"
            placeholder="Nama Fakultas"
            class="form-control"
            value="{{ $fakultas->nama_fakultas }}"
            >
        </div>
        <div class= "form-group">
            <input
            name="nama_dekan"
            type="text"
            placeholder="Nama Dekan"
            class="form-control"
            value="{{ $fakultas->nama_dekan }}"
            >
        </div>
        <button type="submit" class="btn btn-primary">
            simpan
        </button>
    </form> 
</x-layout> 