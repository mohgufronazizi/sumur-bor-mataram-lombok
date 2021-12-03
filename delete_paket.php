<?php 

require_once("koneksi.php");
// Panggil file session check
require_once("session_check.php");

// Cek apakah petugas sudah login
if ( $sessionStatus == false ) {
	header("Location: login.php");
}

// mendapatkan data id_galeri
if (isset($_GET["id_paket"])) $id_paket = $_GET["id_paket"];
else {
	echo "ID tidak ditemukan! <a href='data_paket.php'>Kembali</a>";
	exit();
}

$query = "DELETE FROM paket WHERE id_paket = '{$id_paket}'";

$result = mysqli_query($mysqli, $query);

if ( !$result ) {
	exit("Gagal menghapus data!");
}
else{
	header("Location: data_paket.php");
}

?>