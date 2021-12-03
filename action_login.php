<?php 
	
	require_once("koneksi.php");

	// Status tidak error
	$error = 0;

	// Memvalidasi Inputan
	if (isset($_POST['email'])) $email = $_POST['email'];
	else $error = 1;

	if (isset($_POST['password'])) $password = $_POST['password'];
	else $error = 1;

	//Mengatasi jika terdapat error pada data input
	if ( $error == 1 ){
		echo "Terjadi kesalahan pada proses input data <a href='registrasi.php'>Kembali</a>";
	}

	// Hahing password
	$password = hash("sha256", $password);

	// Menyiapkan Query MySQL untuk dieksekusi
	$query = "SELECT * FROM admin WHERE email = '{$email}'";

	// MEngeksekusi MtSQL Query
	$result = mysqli_query($mysqli, $query);

	$data = mysqli_fetch_assoc($result);

	if (is_null($data)){
		echo "Email tidak terdaftar <a href='login.php'>Kembali</a>";
		exit();
	}
	else if ($data['password'] != $password){
		echo "Password salah <a href='login.php'>Kembali</a>";
		exit();
	}
	else {
		// Memulai fungsi SESSION, session hanya dapat digunakan setelah fungsi ini
		session_start();

		$_SESSION["status"] = true;
		$_SESSION["name"] = $data["nama"];
		$_SESSION["email"] = $data["email"];

		header("Location: admin.php");
	}

?>
