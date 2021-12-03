<?php 

// Pemanggilan file koneksi
require_once("koneksi.php");

// mendapatkan data Id_galeri
if (isset($_POST["id_galeri"])) $id_galeri = $_POST["id_galeri"];
else {
	echo "ID tidak ditemukan! <a href='data_galari.php'>Kembali</a>";
	exit();
}


$query = "SELECT * FROM galeri WHERE id_galeri = '{$id_galeri}'";

$result = mysqli_query($mysqli, $query);

foreach ($result as $galeri) {
	$fotoLama=$galeri['gambar'];
}



$files=$_FILES['foto'];
$path="upload/";

// menangani file upload
if (!empty($files['name'])) {
	$filepath=$path.$files['name'];
	$upload=move_uploaded_file($files['tmp_name'], $filepath);

	if (file_exists($fotoLama)){
		unlink($fotoLama); //hapus foto lama
	}
}
else{
	$filepath=$fotoLama;
	$upload= false;
}

// menangani error saat mengupload
if ($upload = false ) {
	$galeri['gambar']='upload/default.jpg';
}

// Mengeksekusi MySQL Query
$query = "UPDATE galeri SET
		gambar = '{$filepath}'
		WHERE id_galeri = '{$id_galeri}'";

$insert = mysqli_query($mysqli, $query);

// Menangani ketika error pada saat eksekusi query
	if ( $insert == false ) {
		echo "Error dalam mengubah data. <a href='admin.php'> Kembali</a>";
		exit();
	}
	else{
		header("Location: data_galeri.php");
	}

?>
