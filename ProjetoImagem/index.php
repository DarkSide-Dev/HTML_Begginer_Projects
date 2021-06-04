<!DOCTYPE html>
<html>
	<head>
		<title>Exercícios - IMAGENS</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>

	<body>
		<center>
			<?php

				$sorteio = rand(1,3);

				switch ($sorteio) {
					case 1:
						echo "<img src='Darkseid.png' width='25%''>";
						break;

					case 2:
						echo "<img src='thanos.jpg' width='55%''>";
						break;

					case 3:
						echo "<img src='download.jpg' width='25%''>";
						break;

					
					default:
						echo "Sei lá";
						break;
				}
			?>
		</center>

		<br><br><br><br>
		<hr>
		<br><br><br><br>

		<center>
			<div class="imagem">

				<?php

					if (!empty($_POST)) {			 

						$Moeda_valor = $_POST["escolha"];

						$Moeda_sorteio = rand(1,3);

						switch ($Moeda_sorteio) {
							case 1:						
								echo "<img src='Moeda/cara.jpg' width='25%'>";
								break;

							case 2:
								echo "<img src='Moeda/coroa.jpg' width='25%'>";
								break;

							default:
								echo "<h3> Você jogou a moeda longe... </h3>";
								break;
						}

						if ($Moeda_sorteio == $Moeda_valor) {
							echo "<br><br><h1>Parabéns!! Você acertou!!</h1>";
						} else {
							echo "<br><br><h1>Você errou...</h1>";
						}
						

					 }  

				?>

				<form method="POST" action="">
					Cara<input type="radio" name="escolha" value="1" required=""> &nbsp;
					Coroa<input type="radio" name="escolha" value="2" required=""><br>
					<input type="submit" name="">
					<br>
				</form>
			</div> 


		</center>

	</body>
</html>