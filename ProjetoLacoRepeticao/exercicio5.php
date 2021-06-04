<!DOCTYPE html>
<html>
	<head>
		<title>Laços de Repetição</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="CSS/estilo.css">
		<link rel="stylesheet" type="text/css" href="CSS/exercicio5.css">
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
							<b>Informe a quantidade de números Fibonacci que deseja criar:</b> <input type="number" name="Quant">
							<br><br><br><br>
							<input type="submit" name="" value="Confirmar" class="arredonda">
							<br><br><br><br>
						</form>

						<?php

							if (!empty($_POST)) {
								
								$quantidade = $_POST["Quant"];
								$f1 = 1;
								$f2 = 1;
								$f3 = 0;
								$i = 0;


								while($i < $quantidade) { 
									
									$f1 = $f3 + $f2;
									$f2 = $f1 + $f3;
									$f3 = $f1 + $f2;

									if ($i < $quantidade) {
										
										echo "$f1 - ";
										$i++;

										if ($i < $quantidade) {
											echo "$f2 - ";
											$i++;

											if ($i < $quantidade) {
												echo "$f3 - ";
												$i++;
											}
										}
	
									}
									
								}

							}


						?>

					</div>
				</div>
			</div>
		</center>
	</body>
</html>