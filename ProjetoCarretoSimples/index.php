<!DOCTYPE html>
<html>
	<head>
		<title>Mudanças - PHP</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>

	<body>
		<div class="div1">
			
			<form action="" method="POST">
				
				Selecione a cidade de origem:

				<br>

				<select name="estado1" required="">
					<option value="Null"></option>
					<option value="SP">São Paulo</option>
					<option value="RJ">Rio de Janeiro</option>
					<option value="CTBA">Curitiba</option>
				</select>

				<br> <br>

				Selecione a cidade de destino: 

				<br>

				<select name="estado2" required="">
					<option value="Null"></option>
					<option value="SP">São Paulo</option>
					<option value="RJ">Rio de Janeiro</option>
					<option value="CTBA">Curitiba</option>
				</select>

				<br><br>

				<input type="submit" value="Confirmar">
			</form>
		</div>

		<div class="div2">
			
			<?php

				if (!empty($_POST)) {

					$estado1 = $_POST["estado1"];
					$estado2 = $_POST["estado2"];


					if ($estado1 == $estado2) {
						
						if ($estado1 == "Null") {
							echo "Selecione as cidades disponíveis";
						}

						else{
							echo "A cidade de origem não pode ser igual a cidade de destino";
						}
					}

					else if ($estado1 == "SP" && $estado2 == "RJ" || $estado2 == "SP" && $estado1 == "RJ")
					{
						echo "O valor da passagem entre as cidades selecionadas será de R$138,00";
					}

					else if($estado1 == "SP" && $estado2 == "CTBA" || $estado2 == "SP" && $estado1 == "CTBA")
					{
						echo "O valor da passagem entre as cidades selecionadas será de R$159,00";
					}

					else if($estado1 == "RJ" && $estado2 == "CTBA" || $estado2 == "RJ" && $estado1 == "CTBA")
					{
						echo "O valor da passagem entre as cidades selecionadas será de R$203,00";
					}

					else
					{
						echo "Selecione as cidades disponíveis";
					}
					

				}

			?>

		</div>


	</body>

</html>