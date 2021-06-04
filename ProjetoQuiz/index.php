<!DOCTYPE html>
<html>
	<head>
		<title>Top 10 - Quiz</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>

	<body>

		<div class="form">
			<form method="post">
				Qual o verdadeiro nome de "Silvio Santos"?
				<br><br>

				<input type="radio" name="silvio" value="truee" required="">
				Senor Abravanel
				<input type="radio" name="silvio" value="falsee">
				Antônio Abravanel
				<br>
				<input type="radio" name="silvio" value="falsee">
				Alberto Abravanel
				<input type="radio" name="silvio" value="falsee">
				Toby Maguire

				<br><br><br>

				Qual é o famoso personagem conhecido por acabar
				<br>com o adversário com um soco?

				<br><br>

				<input type="radio" name="soco" value="falsee" required="">
				Superman
				<input type="radio" name="soco" value="truee">
				Saitama
				<br>
				<input type="radio" name="soco" value="falsee">
				Kira
				<input type="radio" name="soco" value="falsee">
				Naruto

				<br><br><br>

				Qual das opções abaixo é mais conhecido(a)
				<br>mundialmente?
				
				<br><br>

				<input type="radio" name="simbolo" value="falsee" required="">
				Cruz da igreja católica
				<input type="radio" name="simbolo" value="falsee">
				Logo da Apple
				<br>
				<input type="radio" name="simbolo" value="truee">
				Logo do McDonald's
				<input type="radio" name="simbolo" value="falsee">
				Cruz da igreja evangélica

				<br><br><br>

				Quem são conhecidos como "Timão e Pumba"<br>
				da Etec de Franco da Rocha?
				
				<br><br>

				<input type="radio" name="etec" value="falsee" required="">
				Anderson e Débora
				<input type="radio" name="etec" value="falsee">
				Débora e Rodrigo
				<br>
				<input type="radio" name="etec" value="falsee">
				Anderson e Rafael
				<input type="radio" name="etec" value="truee">
				Rafael e Rodrigo

				<br><br><br>

				Você está jogando isso porque?
				
				<br><br>

				<input type="radio" name="qiz" value="falsee" required="">
				Corrigir e dar nota
				<input type="radio" name="qiz" value="falsee">
				Nem eu sei
				<br>
				<input type="radio" name="qiz" value="truee">
				Porque admira o aluno que o fez
				<input type="radio" name="qiz" value="falsee">
				Russi Supermercados (??)

				<br><br><br>

				O que significa MC
				
				<br><br>

				<input type="radio" name="mc" value="falsee" required="">
				Cantor de Funk
				<input type="radio" name="mc" value="falsee">
				Marca de Comida
				<br>
				<input type="radio" name="mc" value="falsee">
				Mestre de Cêrimonias
				<input type="radio" name="mc" value="truee">
				Maestro de Cêrimonias

				<br><br><br>

				O que João Victor vai fazer com <br>
				seu dinheiro quando for rico?
				
				<br><br>

				<input type="radio" name="din" value="falsee" required="">
				Alternativa à direita
				<input type="radio" name="din" value="truee">
				Vai jogar na cara de todos que o subestimaram
				<br>
				<input type="radio" name="din" value="falsee">
				Alternativa na diagonal
				<input type="radio" name="din" value="falsee">
				Alternativa acima

				<br><br><br>

				O que João deseja diariamente mas<br>
				praticamente nunca consegue?
				
				<br><br>

				<input type="radio" name="cf" value="truee" required="">
				Café
				<input type="radio" name="cf" value="falsee">
				Dormir
				<br>
				<input type="radio" name="cf" value="falsee">
				Comer
				<input type="radio" name="cf" value="falsee">
				Férias

				<br><br><br>

				Qual junção seria a mais PODEROSA?
				
				<br><br>

				<input type="radio" name="jun" value="falseee" required="">
				Anderson e Edvaldo
				<input type="radio" name="jun" value="falseee">
				Edvaldo e Gilberto
				<br>
				<input type="radio" name="jun" value="falseee">
				Anderson e Rafael
				<input type="radio" name="jun" value="truee">
				João e a opção correta da questão acima

				<br> <br> <br>
				<input type="submit" value="Confirmar" class="opa">

			</form>
		</div>

		<div class="php">
			
			<?php 

				if (!empty($_POST)) {
					
					$validador;
					$pontos = 0;

					$validador = $_POST["silvio"];

					if ($validador == "truee") {
						
						$pontos = $pontos + 1;
					}

					$validador = $_POST["soco"];

					if ($validador == "truee") {
						
						$pontos = $pontos + 1;
					}

					$validador = $_POST["simbolo"];

					if ($validador == "truee") {
						
						$pontos = $pontos + 1;
					}

					$validador = $_POST["etec"];

					if ($validador == "truee") {
						
						$pontos = $pontos + 1;
					}

					$validador = $_POST["qiz"];

					if ($validador == "truee") {
						
						$pontos = $pontos + 1;
					}

					$validador = $_POST["din"];

					if ($validador == "truee") {
						
						$pontos = $pontos + 1;
					}

					$validador = $_POST["cf"];

					if ($validador == "truee") {
						
						$pontos = $pontos + 1;
					}

					$validador = $_POST["jun"];

					if ($validador == "truee") {
						
						$pontos = $pontos + 1;
					}

					$validador = $_POST["mc"];

					if ($validador == "truee") {
						
						$pontos = $pontos + 1;
					}


					echo "Pontos Totais: $pontos";
					if ($pontos == 9) {
						echo "<br>Parabéns!! Acertou tudo!!";
					}



				}

				else{
					echo "Selecione uma das opções<br> de TODAS as questões";
				}











			 ?>
		</div>

	</body>
</html>