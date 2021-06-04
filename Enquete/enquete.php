<?php

		session_start();

		if (!isset($_SESSION["quant"])) {

		}
		else{
			if ($_SESSION["quant"] == 0) {
				echo "<script>alert('Resolva o problema!!'); window.location='nobreak.php';</script>";
			}
		}

	?>

<!DOCTYPE html>
<html>
	<head>
		<title>Enquete - 2°DS Tarde</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="assets\css\enquetes.css">
	</head>

	<?php
		session_start();

		if (isset($_SESSION["nome2"])) {
		

		}
		
		else{
			echo "<script> alert('Faça o login antes de acessar a área de votos !!'); window.location='index.php';</script>";
		}

		
	?>

	<body>
		<form method="POST" action="">
			<div class="titulo"> <H1>Armaduras preferidas (Homem de Ferro)</H1> </div>
			<img src="assets/img/1.png" height="300"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<img src="assets/img/2.png" height="300"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<img src="assets/img/3.png" height="300">
			<img src="assets/img/4.png" height="300">

			<br>

			<input type="radio" name="armor" value="1" required=""> MARK 8&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="radio" name="armor" value="2"> MARK 48&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="radio" name="armor" value="3"> MARK 5&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="radio" name="armor" value="4"> MARK 6&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

			<br><br><hr><br><br>

			<input type="submit" name="" value="Votar" id="enviar">&nbsp;&nbsp;

			<button><a href="resultado.php"> Resultados </a></button>&nbsp;&nbsp;

			<button><a href="sair.php"> Sair </a></button>

		</form>
	</body>
</html>

<?php

	if (!empty($_POST)) {
		//session_start();

		$armor = $_POST["armor"];

		if(!isset($_SESSION["armor1"])){

			$_SESSION["armor1"] = 0;
			$_SESSION["armor2"] = 0;
			$_SESSION["armor3"] = 0;
			$_SESSION["armor4"] = 0;
		}

		if(!isset($_SESSION["armor1"])){

			$_SESSION["armor1"] = 0;
			$_SESSION["armor2"] = 0;
			$_SESSION["armor3"] = 0;
			$_SESSION["armor4"] = 0;
		}

		switch ($armor) {

			case 1:
				echo "<script> alert('Voto na armadura MARK 8 confirmado')</script>";
				$_SESSION["armor1"]++;
				break;

			case 2:
				echo "<script> alert('Voto na armadura MARK 48 confirmado')</script>";
				$_SESSION["armor2"]++;
				break;

			case 3:
				echo "<script> alert('Voto na armadura MARK 5 confirmado')</script>";
				$_SESSION["armor3"]++;
				break;

			case 4:
				echo "<script> alert('Voto na armadura MARK 6 confirmado')</script>";
				$_SESSION["armor4"]++;
				break;

			default:
				echo "<script> alert('ERRO, TENTE NOVAMENTE')</script>";
				break;
		}

	}

?>