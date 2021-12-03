<?php
	$mysqli = new mysqli("jongkreatif.com", "u5250287_sumurbormataramlombok", "sumurbormataramlombok1234", "u5250287_sumurbormataramlombok");
	// Check connection
	if ($mysqli -> connect_errno){
		echo "Gagal menyambungkan ke MySQL: " . $mysqli -> connect_error;
		exit();
	}
?>

