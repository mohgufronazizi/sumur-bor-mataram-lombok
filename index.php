<?php
	require_once("koneksi.php");
?>
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
	<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-info">
		<div class="container-fluid bg-info">

			<!--Navbar Brand-->
			<a class="navbar-brand" href="#">
				<h1 class="text-white">Jasa Sumur Bor</h1>
			</a>

			<!-- navbar toggler -->
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Togglenavigation">

				<span class="navbar-toggler-icon"></span>

			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<div class="navbar-nav ms-auto">


					<ul class="navbar-nav nav-pills">
						<li class="nav-item"><a class="nav-link scrollto" href="#carouselExampleCaptions">Home</a></li>
						<li class="nav-item"><a class="nav-link scrollto" href="#features3">Tentang kami</a></li>
						<li class="nav-item"><a class="nav-link scrollto" href="#features1"> Harga </a></li>
						<li class="nav-item"><a class="nav-link scrollto" href="#features4">Hubungi Kami</a></li>
						<li class="nav-item"><a class="nav-link scrollto" href="lokasi.php">Lokasi</a></li>
					</ul>

				</div>
			</div>
		</div>
	</nav>

<!--Carousel indicator-->
	<div id="carouselExampleCaptions" class="carousel slide py-5" data-bs-ride="carousel">
		
		<!--carousel indicator-->
		<div class="carousel-indicators">
			<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
			<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
			<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
		</div>

		<!--Carousel inner-->
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="carousel2.jpg" class="d-block w-100" alt="">
				<div class="carousel-caption d-none d-md-block">
					<h2>Jasa Sumur Bor</h2>
					<p>Kami adalah jasa sumur bor yang tepat untuk anda. Karena kami mempunyai team yang profesional dan berpengalaman dalam bidang sumur bor</p>
				</div>
			</div>

			<div class="carousel-item">
				<img src="carousel1.jpg" class="d-block w-100" alt="">
				<div class="carousel-caption d-none d-md-block">
					<h2>Jasa Sumur Bor</h2>
					<p>Kami adalah jasa sumur bor yang tepat untuk anda. Karena kami mempunyai team yang profesional dan berpengalaman dalam bidang sumur bor</p>
				</div>
			</div>

			<div class="carousel-item">
				<img src="carousel3.jpg" class="d-block w-100" alt="">
				<div class="carousel-caption d-none d-md-block">
					<h2>Jasa Sumur Bor</h2>
					<p>Kami adalah jasa sumur bor yang tepat untuk anda. Karena kami mempunyai team yang profesional dan berpengalaman dalam bidang sumur bor</p>
				</div>
			</div>
		</div>

		<!--Carousel navigation-->
		<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>

		<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>
	</div>

	<!--Tentang Kami-->
	<div id="features3" class="py-5">

		<div class="container py-5">

			<div class="row">

				<!--box 1-->
				<div class="about-box col-12 col-sm-6 col-lg-6">
					<div class="row d-flex justify-content-center flex-column flex-sm-row">
						<div class="box col-12 col-sm-6 pe-1 ps-1 mb-2"><img src="gambar2.jpeg"></div>

						<div class="box col-12 col-sm-6 pe-1 ps-1 mb-2"><img src="gambar4.jpeg"></div>
					</div>
				</div>
				<!--box 2-->
				<div class="col-12 col-lg-6">
					<div class="about-us">
						<div class="card-body">
							<h2 class="fw-bolder">Tentang Kami</h2>
							<p>Kami menawarkan solusi air bersih untuk perumahan, kantor, hotel, tempat ibadah, instansi pemerintah dll dengan pembuatan sumur bor dangkal maupun sumur bor dalam mulai dari 10 meter sampai 100 meter.</p>

							<a class="btn btn-primary bg-success text-white" href="about.php">Selengkapnya Tentang Kami</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!--Kelebihan-->
	<div id="features2" class="bg-info py-5">
		<div class="container">
			<div class="row pb-4">

				<h3 class="text-center mb-5">Kenapa anda harus memilih kami?</h3>

				<!--box 1-->
				<div class="col col-12 col-lg-4 mb-4 mb-lg-0">
					<div class="card text-center py-3">
						<div class="card-body">
							<div class="icon mb-4">
								<i class="fas fa-user-tie"></i>
							</div>
							<h5 class="card-title">Profesional</h5>
							<p class="card-text">Didukung oleh tenaga yang ahli Profesional dan berpengalaman</p>
						</div>
					</div>
				</div>
				<!--box 2-->
				<div class="col col-12 col-lg-4 mb-4 mb-lg-0">
					<div class="card text-center py-3">
						<div class="card-body">
							<div class="icon mb-4">
								<i class="fas fa-dollar-sign"></i>
							</div>
							<h5 class="card-title">Harga Murah</h5>
							<p class="card-text">Kami ada setiap saat, dengan harga yang tepat dan bersahabat</p>
						</div>
					</div>
				</div>
				<!--box 3-->
				<div class="col col-12 col-lg-4 mb-4 mb-lg-0">
					<div class="card text-center py-3">
						<div class="card-body">
							<div class="icon mb-4">
								<i class="fas fa-tools"></i>
							</div>
							<h5 class="card-title">Peralatan Lengkap</h5>
							<p class="card-text">Guna menunjang tenaga ahli kami didukung oleh peralatan yang modern dan terlengkap.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Paket harga -->
	<div id="features1" class="py-5">
		<div class="container py-5">
			<h3 class="text-center mb-5">Harga Sumur Bor</h3>
			<div class="row pb-4 d-flex justify-content-center">
				
				<?php
				$query = "SELECT * FROM paket";

				$result = mysqli_query($mysqli, $query); 
				
				foreach ($result as $paket) {?>

				<div class="card border-primary mb-3 ms-3 me-3 text-dark p-0" style="max-width: 18rem;">
				  <div class="card-header text-center py-3"><h5><?php echo $paket['paket']?></h5></div>
				  <div class="card-body text-center py-3">
				    <h5 class="card-title">Kedalaman : <?php echo $paket['kedalaman']?></h5>
				    <p class="card-text py-3"><?php echo $paket['harga']?></p>
				    <a class="btn btn-primary bg-success text-white" href="https://wa.me/0817365494?text=Hallo%20kak.">Sewa Jasa</a>
				  </div>
				</div>
				<?php }?>
				
			</div>
		</div>
	</div>

	<!--Kontak-->
	<div id="features4" class="bg-info">
		<div class="container">
			<div class="row pb-4">
				<div class=" text-center py-4">
					<h3 class="text-center card-title pb-4">Mencari Jasa Sumur Bor? Hubungi Kami!</h3>
					<p class=" text-center card-text"> Telpon/sms : 0817365494 </p>
					<p class=" text-center card-text"> WA : 0817365494 </p>

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