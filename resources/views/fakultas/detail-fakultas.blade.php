<x-layout>
    <h1>Detail Fakultas</h1>
    <table class="table">
        <tbody>
            <tr>
                <td>Nama Fakultas</td>
                <td>:</td>
                <td>{{ $fakultas->Nama_Fakultas }}</td>
            </tr>
            <tr>
                <td>Nama Dekan</td>
                <td>:</td>
                <td>{{ $fakultas->Nama_Dekan }}</td>
            </tr>
        </tbody>
    </table>
</x-layout>