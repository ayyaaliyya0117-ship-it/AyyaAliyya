<h2>Tambah Siswa Baru</h2>
<form action="{{ route('siswa.store') }}" method="POST">
    @csrf
    <input type="text" name="nama" placeholder="Nama" required><br><br>
    <input type="number" name="umur" placeholder="Umur" required><br><br>
    <input type="number" step="0.1" name="nilai" placeholder="Nilai" required><br><br>
    <button type="submit">Simpan</button>
    <a href="{{ route('siswa.index') }}">Batal</a>
</form>