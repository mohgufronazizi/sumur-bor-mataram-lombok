<!DOCTYPE html>
<html>
<head>
	<title>Login Petugas</title> 
	<link href="style.css" rel="stylesheet"/>

	<?php
	require('komponen/style.php');
	require('komponen/script.php');
	?>
	
</head>
<body>
	<div class="form" class="pt-5">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="col col-8 p-4 bg-light">
					<h2 class="mb-4">Login Petugas</h2>

					<form action="action_login.php" method="POST">

						<div class="form-group mb-2">
							<label for="name">Alamat Email</label>
							<input name="email" id="email" class="form-control" type="email" placeholder="Alamat Email" required>
						</div>

						<div class="form-group mb-2">
							<label for="name">Password</label>
							<input name="password" id="password" class="form-control" type="password" placeholder="Password" required>
						</div>

						<input name="submit" type="submit" value="Masuk" class="btn btn-primary mt-4">

					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>