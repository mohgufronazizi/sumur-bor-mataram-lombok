<?php 

// Start session
session_start();


// Menegecek dan mendapatka SESSION status
if (isset($_SESSION['status'])) $sessionStatus = $_SESSION['status'];
else $sessionStatus = false;

// Mengecek dan mendapatkan data nama
if (isset($_SESSION['name'])) $sessionName = $_SESSION['name'];
else $sessionName = "";

// mengecek dan mendapatkan data email
if (isset($_SESSION['email'])) $sessionEmail = $_SESSION['email'];
else $sessionEmail = "";

?>