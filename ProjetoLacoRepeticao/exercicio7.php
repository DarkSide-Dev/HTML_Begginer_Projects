<!DOCTYPE html>
<html>
	<head>
		<title>Laços de Repetição</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="CSS/estilo.css">
		<link rel="stylesheet" type="text/css" href="CSS/exercicio7.css">
	</head>

	<body>

		<div class="topo">
			<div class="topoint">
				<div class="menu">
					<ul>
						<li><a href="exercicio1.php">Exercício 1</a></li>
						<li><a href="exercicio2.php">Exercício 2</a></li>
						<li><a href="exercicio3.php">Exercício 3</a></li>
						<li><a href="exercicio4.php">Exercício 4</a></li>
						<li><a href="exercicio5.php">Exercício 5</a></li>
						<li><a href="exercicio6.php">Exercício 6</a></li>
						<li><a href="exercicio7.php">Exercício 7</a></li>
						<li><a href="exercicio8.php">Exercício 8</a></li>
					</ul>
				</div>
			</div>
		</div>

		<center>
			<div class="borda1">
				<div class="principal1">

					<form method="POST">
						
						Digite o número:
						<br>
						<input type="number" name="n1">
						<br><br>
						Digite a quantidade de vezes:
						<br>
						<input type="number" name="n2">
						<br><br>
						<input type="submit" name="" value="Confirmar">
						<br><br>
						<br><br>
						<br><br>

					</form>


					<?php

						if (!empty($_POST)) {

							$n1 = $_POST["n1"];
							$n2 = $_POST["n2"];

							for ($i=0; $i < $n2 ; $i++) { 
								
								if ($i != $n2-1) {

									echo "$n1 + ";
								}

								else{

									echo "$n1";
								}
								
							}
							$tot = $n1 * $n2;
							echo " = $tot";
								
						}
					?>

				</div>
			</div>
		</center>
	</body>
</html>