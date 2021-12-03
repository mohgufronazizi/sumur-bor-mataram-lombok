<?php 
	
	require_once("koneksi.php");

	// Status tidak error
	$error = 0;

	// Memvalidasi Inputan
	if (isset($_POST['email'])) $email = $_POST['email'];
	else $error = 1;

	if (isset($_POST['name'])) $name = $_POST['name'];
	else $error = 1;

	if (isset($_POST['password'])) $password = $_POST['password'];
	else $error = 1;

	if (isset($_POST['re-password'])) $repassword = $_POST['re-password'];
	else $error = 1;

	//Mengatasi jika terdapat error pada data input
	if ( $error == 1 ){
		echo "Terjadi kesalahan pada proses input data <a href='registrasi.php'>Kembali</a>";
	}

	// pengecekan password dan konfirmasi password
	if ( $password != $repassword ) {
		echo "Password tidak sama, ulangi mengisi form pendaftaran! <a href='registrasi.php'>Kembali</a>";
		exit();
	}
	else {
		$password = hash("sha256", $password);
	}

	// Meyiapkan Query MySQL untuk dieksekusi
	$query = "
	INSERT INTO admin
	(email, nama, password)
	VALUES
	('{$email}', '{$name}', '{$password}');";

	// Mengeksekusi MySQL Query
	$insert = mysqli_query($mysqli, $query);

	// Menangani katika error pada saat eksekusi query
	if ( $insert == false ) {
		echo "Error dalam menambahkan data. <a href='registrasi.php'>Kembali</a>";
	}
	else{
		header("Location: registrasi.php");
	}

?>