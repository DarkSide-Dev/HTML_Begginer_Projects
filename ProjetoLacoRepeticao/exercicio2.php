<!DOCTYPE html>
<html>
	<head>
		<title>Laços de Repetição</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="CSS/estilo.css">
		<link rel="stylesheet" type="text/css" href="CSS/exercicio2.css">
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
				Números de 1 a 500 que são divisíveis por 3 ou 5
				<div class="principal1">
					<div class="dentroprincipal1">

						<?php

							$cont = 1;

							do{

								if ($cont%3 == 0) {
									echo "<b>$cont (divisível por 3) </b> <br> <br>";
								}
								else if ($cont%5 == 0) {
									echo "<b>$cont (divisível por 5) </b> <br> <br>";
								}

								$cont++;
							} while ($cont <= 500) 

						?>

					</div>
				</div>
			</div>
		</center>
	</body>
</html>