<x-layout>
    <h1>List Fakultas</h1>
    {{ $fakultas }}
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Fakultas</th>
                <th>Dekan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($fakultas as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->Nama_Fakultas }}</td>
                    <td>{{ $item->Nama_Dekan }}</td>
                    <td>
                        <a href="/fakultas/{{ $item->id }}/edit" class="btn btn-warning">Edit</a>
                        <a href="/fakultas/{{ $item->id }}">Detail</a>
                        <form action="/fakultas/{{$item->id}}" method="post">
                        @csrf
                        @method("DELETE")
                         <button type="submit" class="btn btn-danger">Hapus</button>
                       </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-layout>