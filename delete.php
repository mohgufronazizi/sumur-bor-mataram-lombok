<?php 

require_once("koneksi.php");
// Panggil file session check
require_once("session_check.php");

// Cek apakah petugas sudah login
if ( $sessionStatus == false ) {
	header("Location: admin.php");
}

// mendapatkan data id_galeri
if (isset($_GET["id_galeri"])) $id_galeri = $_GET["id_galeri"];
else {
	echo "ID tidak ditemukan! <a href='data_galeri.php'>Kembali</a>";
	exit();
}

$query = "DELETE FROM galeri WHERE id_galeri = '{$id_galeri}'";

$result = mysqli_query($mysqli, $query);

if ( !$result ) {
	exit("Gagal menghapus data!");
}
else{
	header("Location: data_galeri.php");
}

?>