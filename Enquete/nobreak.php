<!DOCTYPE html>
<html>
	<head>
		<title>Você é um robo? - 2°DS Tarde</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="assets\css\sty.css">
	</head>

	<body>
		<div class="container">
			
			<div class="container_int">
				
				<form method="POST" action="">
					Quantos é <?php                

						session_start();

						 $n1 = rand(1,5);
						 $n2 = rand(1,5);

						if (!isset($_SESSION["n1"])) {
		
							$_SESSION["n1"] = $n1;
							$_SESSION["n2"] = $n2;


							$_SESSION["num1"] = $_SESSION["n1"] + $_SESSION["n2"]; // Cria apenas se não existir

							

						}
						echo $_SESSION["n1"]. " + ".$_SESSION["n2"];

					?>
					<br><br>
					<input type="number" name="test" required="">
					<br><br><br>

					<input type="submit" name="" value="Confirmar">
				</form>

			</div>

		</div>
	</body>
</html>


<?php


	if (!empty($_POST)) {

		$n4 = $_POST["test"];

		if ($_SESSION["num1"] == $n4) {
			
			unset($_SESSION["quant"]);

			echo "<script> window.location='index.php'; </script>";
		}
		else{
			unset($_SESSION["n1"]);
			unset($_SESSION["n2"]);
		 	echo "<script> alert('TENTE NOVAMENTE'); window.location='nobreak.php'; </script>";
		 	// echo "$n4 $n3 $n2 $n1";
		}
		
	}




?>