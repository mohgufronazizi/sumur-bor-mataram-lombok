<?php 

	require_once("koneksi.php");

	// Panggil file session check
	require_once("session_check.php");
	if ( $sessionStatus == false ) {
		header("Location: index.php");
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
					<form action="action_paket.php" method="POST">

						<div class="form-group mb-2">
							<label for="name">Paket</label>
							<input name="name" id="name" class="form-control" type="text" required>
						</div>

						<div class="form-group mb-2">
							<label for="inside">Kedalaman</label>
							<input name="inside" id="inside" class="form-control" type="text" required>
						</div>

						<div class="form-group mb-2">
							<label for="price">Harga</label>
							<input name="price" id="price" class="form-control" placeholder="Masukkan Nominal (ex: Rp 1.000)" required>
						</div>

						<input name="submit" type="submit" value="Kirim" class="btn btn-primary">
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
