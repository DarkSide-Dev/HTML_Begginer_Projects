<?php

	session_start();
	$_SESSION["nome"] = "Administrador";
	$_SESSION["nome2"] = $_POST["nome"];

	// Criando variáveis para acoplar as informações do Index e comparar;

	$_SESSION["senha"] = "123456";
	$_SESSION["senha2"] = $_POST["senha"];

	if (!isset($_SESSION["contador"])) {
		
		$_SESSION["contador"] = 0; // Cria apenas se não existir

	}



	//Exibir

	echo "Nome: " . $_SESSION["nome"];

	$_SESSION["contador"]++;
	echo "<br>Contador: " . $_SESSION["contador"];









	

	if ($_SESSION["nome2"] == $_SESSION["nome"] && $_SESSION["senha2"] == $_SESSION["senha"]) {

		echo "<script> alert('Login concluido'); window.location='index.php'; </script>";
	}
	else{

		unset($_SESSION["nome"]);
		echo "<script> alert('Usuário ou senha incorretos'); window.location='index.php'; </script>";
	}

	// echo "<script> alert('Minha mensagem'); window.location='index.php'; </script>";





?>