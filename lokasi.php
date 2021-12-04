<!-- Html -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
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
	<nav class="navbar navbar-expand-lg navbar-light bg-info">
		<div class="container-fluid bg-info">

			<!--Navbar Brand-->
			<a class="navbar-brand" href="#">
				<h1 class="text-white">Jasa Sumur Bor</h1>
			</a>

			<!-- navbar toggler -->
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Togglenavigation">

				<span class="navbar-toggler-icon"></span>

			</button>

			<!--Navbar Collapse-->
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a class="nav-link" aria-current="page" href="index.php">Home</a>
					</li>

					<li class="nav-item">
						<a class="nav-link" aria-current="page" href="about.php">Tentang Kami</a>
					</li>

					<li class="nav-item">
						<a class="nav-link" aria-current="page" href="index.php#features1">Harga</a>
					</li>

					<li class="nav-item">
						<a class="nav-link" aria-current="page" href="https://wa.me/0817365494?text=Hallo%20kak.">Hubungi Kami</a>
					</li>

					<li class="nav-item">
						<a class="nav-link" aria-current="page" href="lokasi.php">Lokasi</a>
					</li>
					
				</ul>
			</div>
		</div>
	</nav>

	<!--Lokasi-->
	<div id="lokasi">
		<div class="container">

			<iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d3944.8171916248034!2d116.1010010317331!3d-8.613542891397607!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x2dcdbf11e16a80b5%3A0xd913b19b0b1c2ec!2sSedot%20Wc%20Lombok%2C%20jln%20bandaseraya%20jempong%20timur%2C%20Jempong%20Baru%2C%20Kec.%20Sekarbela%2C%20Kota%20Mataram%2C%20Nusa%20Tenggara%20Bar.%2083117!3m2!1d-8.613139799999999!2d116.100765!5e0!3m2!1sid!2sid!4v1638613653665!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
		</div>
	</div>

	<!--Kontak-->
	<div id="features" class="bg-info">
		<div class="container">
			<div class="row pb-4">
				<div class=" text-center py-4">
					<h3 class="text-center card-title pb-4">Mencari Jasa Sumur Bor? Hubungi Kami!</h3>
					<p class=" text-center card-text"> Telpon/sms : 0817365494</p>
					<p class=" text-center card-text"> WA : 0817365494</p>

					<a class="btn btn-primary bg-success text-white" href="https://wa.me/0817365494?text=Hallo%20kak."> Hubungi kami</a>
				</div>
			</div>
		</div>
	</div>

	<div id="features" class="bg-dark">
		<div class="container">
			<div class="row footer-2 pt-3 bg-dark">
				<div class="col-12 text-center text-white">
					<p>© 2021 - Sumur Bor</p>
				</div>
			</div>
		</div>
	</div>
</body>
</html>