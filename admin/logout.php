<?php 

session_start();

	header("Location: login.php?logout=You are logged out Successfully...");

session_destroy();
?>

