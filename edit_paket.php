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
if (isset($_GET["id_paket"])) $id_paket = $_GET["id_paket"];
else echo "NIS tidak ditemukan! <a href='data_paket.php'>Kembali</a>";

$query = "SELECT * FROM paket WHERE id_paket = '{$id_paket}'";

$result = mysqli_query($mysqli, $query);

foreach ($result as $paket) {

	$name = $paket["paket"];
	$inside = $paket["kedalaman"];
	$price = $paket["harga"];
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
					<form action="action_edit_paket.php" method="POST" enctype="multipart/form-data">

						<input type="hidden" name="id_paket" value="<?php echo $id_paket?>">
						
						<div class="form-group mb-2">
							<label for="name">Paket</label>
							<input name="name" id="name" class="form-control" type="text" value="<?php echo $paket['paket']?>" required>
						</div>

						<div class="form-group mb-2">
							<label for="inside">Kedalaman</label>
							<input name="inside" id="inside" class="form-control" type="text" value="<?php echo $paket['kedalaman']?>" required>
						</div>

						<div class="form-group mb-2">
							<label for="price">Harga</label>
							<input name="price" id="price" class="form-control" placeholder="Masukkan Nominal (ex: Rp 1.000)" value="<?php echo $paket['harga']?>" required>
						</div>

						<input name="submit" type="submit" value="Kirim" class="btn btn-primary">
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
