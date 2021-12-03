<?php
// Pemanggilan file koneksi
require_once("koneksi.php");
//Mengecek dan mendapatkan data session
require_once("session_check.php");

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

	<!--tentang kami-->
	<div id="features" class="py-5">
		<div class="container">
			<div class="row">

				<!--box1-->
				<div class="col col-12 col-lg-6 col-xl-6">
					<div class="row">
						<div class="box col-10 pe-6 ps-6 mb-6"><img src="gambar1.jpeg"></div>
					</div>
				</div>

				<!--box2-->
				<div class="col col-12 col-lg-6 col-xl-6">
					<div class="about-us">
						<div class="card-body">
							<h2 class="fw-bolder"> Tentang Kami</h2>
							<p> Kami menawarkan solusi air bersih untuk perumahan, kantor, hotel, tempat ibadah, instansi pemerintah dll dengan pembuatan sumur bor dangkal maupun sumur bor dalam mulai dari 10 meter sampai 100 meter. Sumur Bor Mataram Lombok di dukung oleh tenaga profesional serta ahli di bidangnya dan menggunakan alat yang memadai yang akan mempermudah dalam proses kerja sehingga memperoleh hasil yang maksimal dan tentunya dengan harga yg terjangkau dan sesuai kebutuhan.
							Adapun area kerja kami Seputaran Lombok meliputi kota Mataram, Lombok Barat, Lombok tengah, Lombok Timur, Lombok Utara. Kami juga melayani untuk sedot WC penuh/mampet dan mengatasi saluran mampet dan pengerjaan instalasi pipa.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!--Kelebihan-->
	<div id="features" class="bg-info py-5">
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
							<p class="card-text">Guna menunjang tenaga ahli kami didukung oleh peralatan yang modern dan terlengkap</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!--Galery-->
	<div id="features" class="py-5">
		<div class="container">
			<h3 class="text-center card-title pb-4"> Galeri </h3>
			<div class="item">
				<ul id="content-slider" class="content-slider">
					<?php
			        // pemanggilan data
					$query= "SELECT * FROM galeri";
					$result=mysqli_query($mysqli, $query);

					// menampilkan list data pada tabel barang dengan mengginakan pengulangan foreach
					foreach ($result as $galeri) {

								// cek foto
						if (!file_exists($galeri['gambar'])) {
							$galeri['gambar']='upload/default.jpg';
						}

						if (is_null($galeri['gambar'])||empty($galeri['gambar'])) {
							$galeri['gambar']='upload/default.jpg';
						}

						?>
						<li>
							<a><img src="<?php echo $galeri['gambar']?>" alt=""></a>
						</li>
						<?php
					}
					?>


				</ul>
			</div>
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