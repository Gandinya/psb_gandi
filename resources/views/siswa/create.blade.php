<form action="{{ route('siswa.store') }}" method="POST">
    @csrf
    <label for="nama">Nama:</label>
    <input type="text" name="nama" id="nama" required>
    <label for="kelas">Kelas:</label>
    <input type="text" name="kelas" id="kelas" required>
    <label for="tanggal_lahir">Tanggal Lahir:</label>
    <input type="date" name="tanggal_lahir" id="tanggal_lahir" required>
    <button type="submit">Simpan</button>
</form>
