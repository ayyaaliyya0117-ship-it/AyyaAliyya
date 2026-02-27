<!DOCTYPE html>
<html>
<head>
    <title>Daftar Siswa</title>
</head>
<body>

    <h1>Daftar Siswa</h1>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <a href="{{ route('siswa.create') }}" style="text-decoration: none; color: purple;">
        + Tambah Siswa Baru
    </a>
    <br><br>

    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Umur</th>
                <th>Nilai</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($siswa as $s)
            <tr>
                <td>{{ $loop->iteration }}</td> <td>{{ $s->nama }}</td>
                <td>{{ $s->umur }}</td>
                <td>{{ $s->nilai }}</td>
                <td>
                    <a href="{{ route('siswa.edit', $s->id) }}" style="color: blue;">Edit</a>
                    |
                    <form action="{{ route('siswa.destroy', $s->id) }}" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" style="cursor: pointer;">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>