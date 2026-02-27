Refleksi
1. Apa kesulitan yang Anda temui saat menghubungkan Laravel dengan database?
    = * Saya salah menaruh urutan, saya klik "+ Tambah Siswa Baru", malah muncul 404 Not Found. Ternyata karena saya salah menaruh, yang harusnya rute /create di bawahnya siswa.index tapi           saya malah menaruhnya di atas siswa.index
      * Controller saya berantakan, di file SiswaController.php, saya sempat nulis fungsi edit dua kali dan kurung kurawalnya tidak rapi.
        
2. Bagaimana perbedaan proses CRUD di Laravel dibandingkan dengan PHP murni?
    = * Struktur MVC: Kalau di PHP biasa, kode HTML sama logika database sering campur aduk jadi satu file, pusing carinya kalau ada yang error. Di Laravel, semuanya dipisah-pisah (Model,           View, Controller), jadi lebih teratur.
      * Nulis Query: Di PHP biasa saya harus ngetik SQL panjang-panjang. Di Laravel, saya pakai Eloquent, jadi cukup panggil perintah pendek kayak Siswa::all(), datanya langsung keluar.
        
3. Bagaimana Anda memastikan keamanan saat melakukan operasi CRUD?
    = * Pakai @csrf di setiap form. Gunanya buat mastiin kalau data yang masuk itu beneran dari form saya, bukan serangan dari luar.
