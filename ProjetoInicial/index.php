<!DOCTYPE html>
<html>
	<head>
		<title>AJSKAJ</title>
	</head>

	<body>
		<form action="" method="post">
			Nome:<br>
			<input type="text" name="nome" required=""><br>
			<input type="email" name="email" required="">
			<input type="submit" name="Enviar Dados">
			<select>
				<option>oie</option>
			</select>
			<br> Idade:
			<input type="number" name="nascimento" required=""> <br>
		</form>

		<?php

			echo "<br> <b> e c h o </b>";
			$nome = $_POST["nome"];
			$booleano = true;
			$dinheiro = 2512.45;

			echo '<br> Nome do cara: '.$nome;
			echo "<br> Dinheiro do cara: $dinheiro";

			$ano_nasc = 2000;
			$idade = date('Y') - $ano_nasc;

			if ($idade >= 18) {
				echo "<br> Você é maior de idade";
			} else {
				echo "<br> Você é menor de idade";
			}
			






		?>

	</body>
</html>