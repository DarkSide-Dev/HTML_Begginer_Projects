<?php
	session_start();

	unset($_SESSION["nome2"]);
	unset($_SESSION["senha2"]);

	echo "<script> window.location='index.php'; </script>";

?>