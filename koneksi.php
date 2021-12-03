<?php
	$mysqli = new mysqli("localhost", "root", "", "sumur_bor");
	// Check connection
	if ($mysqli -> connect_errno){
		echo "Gagal menyambungkan ke MySQL: " . $mysqli -> connect_error;
		exit();
	}
?>

