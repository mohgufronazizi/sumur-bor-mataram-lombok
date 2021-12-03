<?php 
	
	require_once("koneksi.php");

	// mengambil data upload
	// mengambil data file upload
	$files=$_FILES['foto'];
	$path="upload/";

	// menangani file upload
	// name disini nama dari file nya, bukan dari input name
	// tmp_name adalah nama sementara
	if (!empty($files['name'])) {
	$filepath=$path.$files['name'];
	$upload=move_uploaded_file($files['tmp_name'], $filepath);
	}
	else{
		$filepath="";
		$upload= false;
	}

	// menangani error saat mengupload
	if ($upload = false ) {
		$galeri['gambar']='upload/default.jpg';
	}

	// Meyiapkan Query MySQL untuk dieksekusi
	$query = "
	INSERT INTO `galeri` (`gambar`) VALUES ('$filepath')";

	// Mengeksekusi MySQL Query
	$insert = mysqli_query($mysqli, $query);

	// Menangani katika error pada saat eksekusi query
	if ( $insert == false ) {
		echo "Error dalam menambahkan data. <a href='galeri.php'> Kembali</a>";
	}
	else{
		header("Location: data_galeri.php");
	}

?>