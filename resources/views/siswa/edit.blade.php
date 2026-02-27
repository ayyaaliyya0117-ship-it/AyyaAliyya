<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Edit Data Siswa</h2>
<form action="{{ route('siswa.update', $siswa->id) }}" method="POST">
    @csrf
    @method('PUT') <label>Nama:</label><br>
    <input type="text" name="nama" value="{{ $siswa->nama }}" required><br><br>

    <label>Umur:</label><br>
    <input type="number" name="umur" value="{{ $siswa->umur }}" required><br><br>

    <label>Nilai:</label><br>
    <input type="number" step="0.01" name="nilai" value="{{ $siswa->nilai }}" required><br><br>

    <button type="submit">Simpan Perubahan</button>
    <a href="{{ route('siswa.index') }}">Batal</a>
</form>
</form>
</body>
</html>