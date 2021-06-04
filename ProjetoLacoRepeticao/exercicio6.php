<!DOCTYPE html>
<html>
	<head>
		<title>Laços de Repetição</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="CSS/estilo.css">
		<link rel="stylesheet" type="text/css" href="CSS/exercicio6.css">
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
						<img src="Imagem/1.jpg" width="200px"><input type="radio" name="a" value="1" required="">
						<br><br>

						<img src="Imagem/2.jpg" width="200px"> <input type="radio" name="a" value="2" required="">
						<br><br>

						<img src="Imagem/3.jpg" width="200px" height="200px"> <input type="radio" name="a" value="3" required="">
						<br><br>

						Digite um número: <input type="number" name="number">
						<br><br>

						<input type="submit" name="" value="??????????">

						<br><br><br><br>
					</form>

					<?php

						if (!empty($_POST)) {

							$img = $_POST["a"];
							$number = $_POST["number"];

								
							if ($img == 1) {
								
								for ($i=0; $i < $number; $i++) { 
									

									if ($i%2 == 0) {

										for ($j=0; $j <= $i ; $j++) { 
											echo "<img src='Imagem/1.jpg' width='100px'>";
										}

										echo " incomoda muita gente<br><br>";
									}

									else{

										for ($j=0; $j <= $i ; $j++) { 
											echo "<img src='Imagem/1.jpg' width='100px'>";
										}

										echo " elefantes ";

										for ($j=0; $j <= $i ; $j++) { 
											echo "incomodam ";
										}

										echo "muito mais <br><br>";
									}

								}

							}

							else if ($img == 2) {
								
								for ($i=0; $i < $number; $i++) { 
									

									if ($i%2 == 0) {

										for ($j=0; $j <= $i ; $j++) { 
											echo "<img src='Imagem/2.jpg' width='100px'>";
										}

										echo " incomoda muita gente<br><br>";
									}

									else{

										for ($j=0; $j <= $i ; $j++) { 
											echo "<img src='Imagem/2.jpg' width='100px'>";
										}

										echo " elefantes ";

										for ($j=0; $j <= $i ; $j++) { 
											echo "incomodam ";
										}

										echo "muito mais <br><br>";
									}

								}
							}

							else{
								
								for ($i=0; $i < $number; $i++) { 
									

									if ($i%2 == 0) {

										for ($j=0; $j <= $i ; $j++) { 
											echo "<img src='Imagem/3.jpg' width='100px'>";
										}

										echo " incomoda muita gente<br><br>";
									}

									else{

										for ($j=0; $j <= $i ; $j++) { 
											echo "<img src='Imagem/3.jpg' width='100px'>";
										}

										echo " elefantes ";

										for ($j=0; $j <= $i ; $j++) { 
											echo "incomodam ";
										}

										echo "muito mais <br><br>";
									}

								}
							}
								
						}
					?>

				</div>
			</div>
		</center>
	</body>
</html>