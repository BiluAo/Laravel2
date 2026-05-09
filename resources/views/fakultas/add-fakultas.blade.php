<x-layout>
    <form action="/fakultas" method="POST">
        @csrf
        <div class="form-group">
            <input
            name="nama_fakultas"
            type="text"
            placeholder="Nama Fakultas"
            class="form-control"
            >
        </div>
        <div class= "form-group">
            <input
            name="nama_dekan"
            type="text"
            placeholder="Nama Dekan"
            class="form-control"
            >
        </div>
        <button type="submit" class="btn btn-primary">
            simpan
        </button>
    </form> 
</x-layout>