<?php 

// Pemanggilan file koneksi
require_once("koneksi.php");

// Panggil file session check
require_once("session_check.php");
if ( $sessionStatus == false ) {
	header("Location: index.php");
}

// status tidak error
$error = 0;

// mendapatkan data Id_Barang
if (isset($_GET["id_galeri"])) $id_galeri = $_GET["id_galeri"];
else echo "NIS tidak ditemukan! <a href='data_galeri.php'>Kembali</a>";

$query = "SELECT * FROM galeri WHERE id_galeri = '{$id_galeri}'";

$result = mysqli_query($mysqli, $query);

foreach ($result as $galeri) {
	$id_galeri = $galeri['id_galeri'];
	$foto=$galeri['gambar'];
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Sumur Bor Mataram Lombok</title> 
	<?php
	require('komponen/style.php');
	require('komponen/script.php');
	?>
	<!-- Javascript -->
	<script type="text/javascript">
		function confirm_delete(){
			return confirm("Anda yakin?");
		}
	</script>
</head>
<body>
<!--Header-->	
	<nav class="navbar navbar-expand-lg navbar-light bg-primary">
		<div class="container-fluid bg-primary">

			<!--Navbar Brand-->
			<a class="navbar-brand" href="#">
				<h1 class="text-white">Admin</h1>
			</a>

		</div>
	</nav>

	<div id="form" class="pt-5">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="col col-8 p-4 bg-light">
					<form action="action_edit.php" method="POST" enctype="multipart/form-data">
						
						<input type="hidden" name="id_galeri" value="<?php echo $id_galeri?>">
						<div class="form-group mb-2">
							<img src="<?php echo $foto?>" style="width: 350px !important;">
						</div>
						<div class="form-group mb-2">

							<label for="foto" class="mb-2">Foto</label>
							<input name="foto" id="foto" class="form-control" type="file">
						</div>

						<input name="submit" type="submit" value="Kirim" class="btn btn-primary">
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
