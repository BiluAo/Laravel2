<x-layout>
    <form action="/fakultas" method="POST">
        @csrf
        <div class="form-group">
            <input
            name="Nama_Fakultas"
            type="text"
            placeholder="Nama Fakultas"
            class="form-control"
            >
        </div>
        <div class= "form-group">
            <input=
            name="Nama_Dekan"
            type="tetx"
            placeholder="Nama Dekan"
            class="form-control"
            >
        </div>
        <button type=" submit" class="btn btn-primary">
            simpan'
        <button>
    </form> 
</x-layout>