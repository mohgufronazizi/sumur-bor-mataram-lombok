<?php 
	
	require_once("koneksi.php");

	// Status tidak error
	$error = 0;

	// Memvalidasi Inputan

	if (isset($_POST['name'])) $name = $_POST['name'];
	else $error = 1;

	if (isset($_POST['inside'])) $inside = $_POST['inside'];
	else $error = 1;

	if (isset($_POST['price'])) $price = $_POST['price'];
	else $error = 1;

	// Mengatasi jika terdapat error pada input
	if ( $error == 1 ) {
		echo "Terjadi kesalahan pada input data";
		exit();
	}

	// Meyiapkan Query MySQL untuk dieksekusi
	$query = "
	INSERT INTO paket
	(paket, kedalaman, harga)
	VALUES
	('{$name}', '{$inside}', '{$price}');";

	// Mengeksekusi MySQL Query
	$insert = mysqli_query($mysqli, $query);

	// Menangani katika error pada saat eksekusi query
	if ( $insert == false ) {
		echo "Error dalam menambahkan data. <a href='data_paket.php'> Kembali</a>";
	}
	else{
		header("Location: data_paket.php");
	}

?>