<?php
include("config.php");

// cek apakah tombol simpan sudah diklik atau blum?
if (isset($_POST['simpan'])){
    
    // ambil data dari formulir
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $agama = $_POST['agama'];
    $jk = $_POST['jenis_kelamin'];
    $sekolah_asal = $_POST['sekolah_asal'];

    // buat query update
    $sql = "UPDATE calon_siswaa SET nama='$nama', alamat='$alamat',  agama='$agama', jenis_kelamin='$jk', sekolah_asal='$sekolah_asal' WHERE id=$id";
    $query = mysqli_query($db, $sql);

    // apakah query update berhasil?
    if($query) {
        header('Location: list-siswa.php');
    } else {
        // handle query failure
        die("Gagal menyimpan perubahan...");
    }
    
} else {
    // handle form submission failure
    die("Akses dilarang...");
}

?>