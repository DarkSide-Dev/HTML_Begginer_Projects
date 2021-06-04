<!DOCTYPE html>
<html>
	<head>
		<title>Exercícios - IMAGENS</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>

	<body>

		<center>
			
			<form method="POST">
				Pedra<input type="radio" name="escolha1" value="10" required="">&nbsp;&nbsp;
				Papel<input type="radio" name="escolha1" value="11" required="">&nbsp;&nbsp;
				Tesoura<input type="radio" name="escolha1" value="12" required=""><br>
				(Você é o da direita)<br>
				<input type="submit" name="">
			</form>


			<?php 

				if (!empty($_POST)){

					$mao = $_POST["escolha1"];
					$cpu = rand(10,12);

					switch ($cpu) {

						case 10:
							echo "<img src='Jokenpo/pedra.png' width='25%'>";
							break;

						case 11:
							echo "<img src='Jokenpo/papel.png' width='25%'>";
							break;

						case 12:
							echo "<img src='Jokenpo/tesoura.png' width='25%'>";
							break;
						
						default:
							
							break;
					}

					switch ($mao) {

						case 10:
							echo "<img src='Jokenpo/pedra2.png' width='25%'>";
							break;

						case 11:
							echo "<img src='Jokenpo/papel2.png' width='25%'>";
							break;

						case 12:
							echo "<img src='Jokenpo/tesoura2.png' width='25%'>";
							break;
						
						default:
							
							break;
					}

					if ($mao == $cpu) {
						echo "<br><br><h2> EMPATE </h2>";
					}

					else if ($mao == 10 && $cpu == 12) {
						echo "<br><br><h2> VOCÊ GANHOU </h2>";
					}

					else if ($mao == 12 && $cpu == 10) {
						echo "<br><br><h2> VOCÊ PERDEU </h2>";
					}

					else if ($mao == 11 && $cpu == 12) {
						echo "<br><br><h2> VOCÊ PERDEU </h2>";
					}

					else if ($mao == 12 && $cpu == 11) {
						echo "<br><br><h2> VOCÊ GANHOU </h2>";
					}

					else if ($mao == 10 && $cpu == 11) {
						echo "<br><br><h2> VOCÊ PERDEU </h2>";
					}

					else if ($mao == 11 && $cpu == 10) {
						echo "<br><br><h2> VOCÊ GANHOU </h2>";
					}
										
				}

			 ?>

		</center>

	</body>
</html>