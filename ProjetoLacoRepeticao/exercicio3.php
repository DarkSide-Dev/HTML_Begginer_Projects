<!DOCTYPE html>
<html>
	<head>
		<title>Laços de Repetição</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="CSS/estilo.css">
		<link rel="stylesheet" type="text/css" href="CSS/exercicio3.css">
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
					<div class="dentroprincipal1">

						<form method="POST">

							<br>

							<b> Informe a frase:</b> <input type="text" name="Texto" required="">

							<br> <br>

							<b> Informe a quantidade:</b> <input type="number" name="Quant" required="">

							<br> <br> <br> <br> <br> <br>

							<input type="submit" name="" value="Confirmar" class="humm" required="">

						</form>

						<br> 
						<hr>
						<br> <br> <br>

						<?php

							if (!empty($_POST)) {
								
								$text = $_POST["Texto"];
								$quantidade = $_POST["Quant"];
								$quantidade2 = 0;

								while ($quantidade2 < $quantidade) {
									
									echo "<b>$text</b> <br>";
									$quantidade2++;
								}

							}


						?>

					</div>
				</div>
			</div>
		</center>
	</body>
</html>