<!DOCTYPE html>
<html>
	<head>
		<title>Laços de Repetição</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="CSS/estilo.css">
		<link rel="stylesheet" type="text/css" href="CSS/exercicio4.css">
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

						<?php
							$num = 1;
							$mult = 1;
							$result = 0;


							for($num = 1; $num <= 10; $num++){

								for($mult = 1; $mult <=10; $mult++){


									echo "
									<table border='5' width='250' height='200' cellpadding='5' cellspacing='10' bgcolor='lightgrey'>
									<tr>
										<td colspan='2'><center>Tabuada do $num</center></td>
									</tr>
									<tr>
										<td>$num x $mult</td>

										"; $result = $num * $mult; $mult++; echo" 

										<td>$result</td>
									</tr>
									<tr>
										<td>$num x $mult</td>

										"; $result = $num * $mult; $mult++; echo"

										<td>$result</td>
									</tr>									
									<tr>
										<td>$num x $mult</td>

										"; $result = $num * $mult; $mult++; echo"

										<td>$result</td>			
									</tr>
									<tr>
										<td>$num x $mult</td>

										"; $result = $num * $mult; $mult++; echo"

										<td>$result</td>			
									</tr>
									<tr>
										<td>$num x $mult</td>

										"; $result = $num * $mult; $mult++; echo"

										<td>$result</td>			
									</tr>
									<tr>
										<td>$num x $mult</td>

										"; $result = $num * $mult; $mult++; echo"

										<td>$result</td>			
									</tr>
									<tr>
										<td>$num x $mult</td>

										"; $result = $num * $mult; $mult++; echo"

										<td>$result</td>			
									</tr>
									<tr>
										<td>$num x $mult</td>

										"; $result = $num * $mult; $mult++; echo"

										<td>$result</td>
									</tr>
									<tr>
										<td>$num x $mult</td>

										"; $result = $num * $mult; $mult++; echo"

										<td>$result</td>			
									</tr>
									<tr>
										<td>$num x $mult</td>

										"; $result = $num * $mult; echo"

										<td>$result</td>			
									</tr>

								</table><br><br><br>";

								}
							}
								
						?>

					</div>
				</div>
			</div>
		</center>
	</body>
</html>