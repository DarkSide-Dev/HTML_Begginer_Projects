<!DOCTYPE html>
<html>
	<head>
		<title>Media Aluno</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>

	<body bgcolor="#CCCC">

		<div class="div1">
			<form action="" method="POST">
				Digite o nome do aluno:
				<br>
				<input type="name" name="nome" required="">
				<br><br>
				Digite a primeira nota do aluno:
				<br>
				<input type="number" name="nota1" required="" max="10">
				<br><br>
				Digite a segunda nota do aluno:
				<br>
				<input type="number" name="nota2" required="" max="10">
				<br><br>
				Digite a terceira nota do aluno:
				<br>
				<input type="number" name="nota3" required="" max="10">
				<br><br>
				Digite a quarta e última nota do aluno:
				<br>
				<input type="number" name="nota4" required="" max="10">
				<br>
				<br>
				Qual a frequência do aluno?
				<br>
				<input type="number" name="freq" required="">
				<br><br>
				<input type="submit" value="Confirmar">
			</form>
		</div>

		<div class="div2">
			<?php
				if (!empty($_POST)) {

					$nota1 = $_POST["nota1"];
					$nota2 = $_POST["nota2"];
					$nota3 = $_POST["nota3"];
					$nota4 = $_POST["nota4"];

					$media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

					$nome = $_POST["nome"];

					$freq = $_POST["freq"];

					if ($freq >= 75) {
						
						echo "A média do aluno $nome equivale a: $media";
						if ($media < 5) {
							echo "<br> Situação final: REPROVADO";
						}
						else if ($media <= 6) {
							echo "<br> Situação final: RECUPERAÇÃO";
						}
						else{
							echo "<br> Situação final: APROVADO";
						}
					}
					else{
						echo "O aluno foi automaticamente reprovado por baixa frequência";
					}

				}
				
			?>
		</div>




	</body>
</html>