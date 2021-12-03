<?php 

// Pemanggilan file koneksi
require_once("koneksi.php");

// mendapatkan data Id_Barang
if (isset($_POST["id_paket"])) $id_paket = $_POST["id_paket"];
else {
	echo "ID tidak ditemukan! <a href='data_paket.php'>Kembali</a>";
	exit();
}

$query = "SELECT * FROM paket WHERE id_paket = '{$id_paket}'";

$result = mysqli_query($mysqli, $query);

foreach ($result as $paket) {
	
	$name = $paket["paket"];
	$inside = $paket["kedalaman"];
	$price = $paket["harga"];
}


	if (isset($_POST['name'])) $name = $_POST['name'];
	
	if (isset($_POST['inside'])) $inside = $_POST['inside'];

	if (isset($_POST['price'])) $price = $_POST['price'];


// Menyiapkan Query MySQL untuk diskusi
$query = "
	UPDATE paket SET
		paket = '{$name}',
		kedalaman = '{$inside}',
		harga = '{$price}'
	WHERE id_paket = '{$id_paket}'";

// Mengeksekusi MySQL Query
$insert = mysqli_query($mysqli, $query);

// Menangani ketika error pada saat eksekusi query
	if ( $insert == false ) {
		echo "Error dalam mengubah data. <a href='data_paket.php'> Kembali</a>";
	}
	else{
		header("Location: data_paket.php");
	}

?>
