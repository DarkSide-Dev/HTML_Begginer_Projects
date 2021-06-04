<!DOCTYPE html>
<html>

	<head>
		<title>INSS - Cadastro</title>
	</head>

	<body bgcolor="darkgrey">

		<center><h1>INSS - Instituto Nacional do Seguro Social</h1></center>

		<form method="post">

			Nome:<br>
			<input type="text" name="nome" required="">
			<br> <br>

			CPF:<br>
			<input type="text" name="cpf" maxlength="11" required="">
			<br> <br>

			Sexo:<br> 
			<input type="radio" name="sexo" value="Masculino" required=""> Masculino
			<input type="radio" name="sexo" value="Feminino" required=""> Feminino
			<br> <br>

			Rua:<br>
			<input type="text" name="rua" required="">
			<br> <br>

			Bairro:<br>
			<input type="text" name="bairro" required="">
			<br> <br>

			Número:<br>
			<input type="number" name="numero" required="">
			<br> <br>

			Estado:<br>
			<select name="opcao" required="">
				<option value="São Paulo">São Paulo</option>
				<option value="Rio Grande do Sul">Rio Grande do Sul</option>
				<option value="Rio de Janeiro">Rio de Janeiro</option>
				<option value="Bahia">Bahia</option>
				<option value="Turquia">Turquia</option>
			</select>
			<br> <br>

			Horas trabalhadas:<br>
			<input type="number" name="hora" required="">
			<br> <br>

			Valor por hora:<br>
			<input type="number" name="tot" required="">
			<br> <br>

			<input type="submit" name="" required="">

		</form>

		<div align="right">
			<?php

				if (!empty($_POST)) {
				
					$nome = $_POST["nome"];
					echo "Nome: $nome<br><br>";

					$cpf = $_POST["cpf"];
					echo "CPF: $cpf<br><br>";

					$sexo = $_POST["sexo"];
					echo "Sexo: $sexo<br><br>";

					$rua = $_POST["rua"];
					echo "Rua: $rua<br><br>";

					$bairro = $_POST["bairro"];
					echo "Bairro: $bairro<br><br>";

					$numero = $_POST["numero"];
					echo "N°$numero<br><br>";

					$opcao = $_POST["opcao"];
					echo "Estado: $opcao<br><br>";

					$hora = $_POST["hora"];
					$quant = $_POST["tot"];

					$salario = $hora * $quant;

					echo "Salário: R$$salario<br><br>";

					$desconto;

					if ($salario <= 1751.81) {
						
						$desconto = ($salario * 0.08);
						echo "Desconto (8%):R$$desconto";
					}

					else if ($salario > 1751.81 && $salario <= 2919.72) {
						
						$desconto = ($salario * 0.09);
						echo "Desconto (9%):R$$desconto";
					}

					else if ($salario > 2919.72 && $salario <= 5839.45) {
						
						$desconto = ($salario * 0.11);
						echo "Desconto (11%):R$$desconto";
					}

					else{

						$desconto = 642.34;
						echo "Desconto (fixo de R$642.34):R$$desconto";
					}

				
					

				}
			?>
		</div>

	</body>

</html>