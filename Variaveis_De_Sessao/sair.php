<?php

	session_start(); // Iniciar
	session_destroy(); // Destruir

	header("location:index.php"); // Direciona o usuário para a página dentro das aspas

?>