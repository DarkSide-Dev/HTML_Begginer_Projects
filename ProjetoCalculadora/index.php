<!DOCTYPE html>
<html>

	<head>
		<title>Wizard Calculator</title>
		<meta charset="utf-8">
	</head>

	<body bgcolor="Cyan">
		<center><h1>Wizard Calculator</h1></center>

		<form method="post">
			Valor 1:
			<input type="number" name="valor1">

			<br><br>

			Valor 2:
			<input type="number" name="valor2">

			<br><br>

			<select name="opcao" required="">
				<option value="soma">Soma</option>
				<option value="subtracao">Subtração</option>
				<option value="multiplicacao">Multiplicação</option>
				<option value="divisao">Divisão</option>
				<option value="potenciacao">Exponênciação</option>
				<option value="raizq">Raiz Quadrada</option>
			</select>

			<br><br>

			<input type="submit" value="Calcular" >

		</form>

		<?php
			if (!empty($_POST)) {

			
				$op = $_POST["opcao"];

				$valor1 = $_POST["valor1"];
				$valor2 = $_POST["valor2"];

				$totalsoma = $valor1 + $valor2;

				$totalsubtracao = $valor1 - $valor2;

				$totalmultiplicacao = $valor1 * $valor2;

				$totaldivisao = $valor1 / $valor2;

				$totalexponenciacao = pow($valor1, $valor2);

				$totalraizq1 = sqrt($valor1);

				$totalraizq2 = sqrt($valor2);

				if ($op == "soma") {
					echo "<br><br> O valor é de $totalsoma";
				}

				else if ($op == "subtracao") {
					echo "<br><br> O valor é de $totalsubtracao";
				}

				else if ($op == "multiplicacao") {
					echo "<br><br> O valor é de $totalmultiplicacao";
				}

				else if ($op == "divisao") {
					echo "<br><br> O valor é de $totaldivisao";
				}

				else if ($op == "pontenciacao") {
					echo "<br><br> O valor é de $totalexponenciacao";
				}

				else {
					echo "<br><br> O valor do primeiro número é $totalraizq1 e do segundo é $totalraizq2";
				}
			}	

		?>

	</body>

</html>