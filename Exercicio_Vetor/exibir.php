<!DOCTYPE html>
<html>
	<head>
		<title>Exercício Vetor - 2</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="assets/style2.css">
	</head>

	<body>
		<br>
		<a href="index2.php"><img src="assets/img/seta.png"></a><center><h1>&nbsp;&nbsp;PAINEL GERAL DE CADASTROS</h1></center>
		<br>
		<?php
			session_start();
			if (isset($_SESSION["nome"])) {

				echo "<table align='center'>
						<tr bgcolor='lightgrey' align='center'>
							<td>Nome</td>
							<td>Sexo</td>
							<td>E-mail</td>
							<td>Objetivo</td>
							<td>Nível</td>
						</tr>";

				for ($i=0; $i < count($_SESSION["nome"]); $i++) {
					if ($_SESSION["sexo"][$i] == "Masculino") {
						echo "<tr bgcolor='lightgreen'>
									<td width='200'>".$_SESSION["nome"][$i]."</td>
									<td width='120'>".$_SESSION["sexo"][$i]."</td>
									<td width='150'>".$_SESSION["email"][$i]."</td>
									<td width='200'>".$_SESSION["obj"][$i]."</td>
									<td width='40'>".$_SESSION["lvl"][$i]."</td>
							</tr>";
					}
				}
				for ($i=0; $i < count($_SESSION["nome"]) ; $i++) {
					if ($_SESSION["sexo"][$i] == "Feminino") {
						echo "<tr bgcolor='hotpink'>
									<td width='200'>".$_SESSION["nome"][$i]."</td>
									<td width='120'>".$_SESSION["sexo"][$i]."</td>
									<td width='150'>".$_SESSION["email"][$i]."</td>
									<td width='200'>".$_SESSION["obj"][$i]."</td>
									<td>".$_SESSION["lvl"][$i]."</td>
							</tr>";
					}
				}


				echo "</table><br><br>";

				$total_masc = 0;
				$total_femi = 0;

				for ($i=0; $i < count($_SESSION["sexo"]) ; $i++) {

						if ($_SESSION["sexo"][$i] == "Masculino") {

							$total_masc++;
						}
						else{
							$total_femi++;
						}
				}

				echo "<hr><br><div class='tarefa'><br>";
				echo "Quantidades de pessoas do sexo masculino: ".$total_masc;
				echo "<br>Quantidades de pessoas do sexo feminino: ".$total_femi;
				echo "<br><br></div><br><hr><br><br>";
			?>

			<div class="area_filtro">
				<h1>Filtragem de dados:</h1>

				<form action="" method="POST">

					<h3>Sexo:</h3>

					<label><input type="checkbox" name="a" value="Masculino"> Masculino &nbsp;</label>
					<label><input type="checkbox" name="b" value="Feminino"> Feminino &nbsp;</label>
					<br><br><br>

					<h3>Objetivo:</h3>

					<label><input type="checkbox" name="c" value="Back-End"> Back-End &nbsp;</label>
					<label><input type="checkbox" name="d" value="Front-End"> Front-End &nbsp;</label>
					<label><input type="checkbox" name="e" value="Full-Stack"> Full-Stack &nbsp;</label>
					<br><br><br>

					<h3>Nível:</h3>

					<label><input type="checkbox" name="f" value="1"> 1 &nbsp;</label>
					<label><input type="checkbox" name="g" value="2"> 2 &nbsp;</label>
					<label><input type="checkbox" name="h" value="3"> 3 &nbsp;</label>
					<label><input type="checkbox" name="i" value="4"> 4 &nbsp;</label>
					<label><input type="checkbox" name="j" value="5"> 5 &nbsp;</label>
					<br><br><br>
					<center><label><input type="submit" id="submit"> &nbsp; &nbsp; &nbsp; &nbsp; <a href="index2.php"><input type="button" value="Voltar" id="submit"></a></center>


				</form>
			</div>
			<br><br><br><hr><br>
		</body>
	</html>

	<?php

		if(!empty($_POST)){
			$total = 0;
			// Variável para saber quantas opções foram marcadas, e ser utilizada como um método para confirmar se o usuário cadastrado cumpre os requisitos da pesquisa;

			$nomes = array();
			// Variável para guardar os nomes das opções marcadas, e ser utilizada como um método para confirmar ou não a presença do mesmo nome em algum campo do usuário cadastrado;

			$vetores = array();
			// Variável para marcar quantas opções a pessoa cadastrada tem em comum com as opções marcadas para o filtro, onde se as quantidades forem iguais, o usuário em questão é um resultado;

			for ($i="a"; $i <= "j" ; $i++) { // Laço de repetição sendo usado com letras para achar os campos inputs;

				if (!empty($_POST[$i])) { // Caso o valor da input seja igual ao do laço de repetição, e não esteja vazio, a variável total será incrementada, e o valor será guardado na variável $nomes;

					$total++;
					$nomes[] = $_POST[$i];

				}
			}
			for ($i=0; $i < count($_SESSION["sexo"]) ; $i++) { // Variável de sessão "sexo" usada apenas como um parâmetro de quantidade;

				$vetores[$i] = 0; // Feito apenas para igualar todos os campos que serão usados a 0;
			}


			for ($i=0; $i < count($nomes) ; $i++) { // Laço for sendo feito para que tudo dentro dele seja aplicado a mesma quantidade de vezes que a quantidade de campos na variável $nomes;

				switch ($nomes[$i]) {
					case 'Masculino': // Caso no campo em questão da variável $nomes esteja como valor: "Masculino", ou seja, uma das opções que foram marcadas para filtro seja "Masculino", será feito:

						for ($j=0; $j < count($_SESSION["sexo"]) ; $j++){ // Laço for sendo feito para que tudo dentro dele seja aplicado a mesma quantidade de vezes que a quantidade de campos no vetor onde se está mantido as informações dos usuários cadastrados;

							if ($_SESSION["sexo"][$j] == $nomes[$i]) {// Caso o valor do campo do vetor que mantém as informações do usuário seja igual ao valor do campo do vetor que mantém as opções selecionadas, ocorrerá:

								$vetores[$j]++; // Incremento na variável onde se diz quantas das opções selecionadas o usuário cumpre;
							}
						}
						break; // Apenas reforçando que demorei um século para achar a maneira correta de fazer a lógica dessa P**** aqui, e que antes de eu encontrar, escrevi, apaguei e reescrevi essa merda várias vezes;

					case 'Feminino':

						for ($j=0; $j < count($_SESSION["sexo"]) ; $j++){

							if ($_SESSION["sexo"][$j] == $nomes[$i]) {
								$vetores[$j]++;
							}
							else{

							}
						}
						break;

					case 'Back-End':

						for ($j=0; $j < count($_SESSION["obj"]) ; $j++){

							if ($_SESSION["obj"][$j] == $nomes[$i]) {
								$vetores[$j]++;
							}
							else{

							}
						}
						break;

					case 'Front-End':

						for ($j=0; $j < count($_SESSION["obj"]) ; $j++){

							if ($_SESSION["obj"][$j] == $nomes[$i]) {
								$vetores[$j]++;
							}
							else{

							}
						}
						break;

					case 'Full-Stack':

						for ($j=0; $j < count($_SESSION["obj"]) ; $j++){

							if ($_SESSION["obj"][$j] == $nomes[$i]) {
								$vetores[$j]++;
							}
							else{

							}
						}
						break;

					case '1':

						for ($j=0; $j < count($_SESSION["lvl"]) ; $j++){

							if ($_SESSION["lvl"][$j] == $nomes[$i]) {
								$vetores[$j]++;
							}
							else{

							}
						}
						break;

					case '2':

						for ($j=0; $j < count($_SESSION["lvl"]) ; $j++){

							if ($_SESSION["lvl"][$j] == $nomes[$i]) {
								$vetores[$j]++;
							}
							else{

							}
						}
						break;

					case '3':

						for ($j=0; $j < count($_SESSION["lvl"]) ; $j++){

							if ($_SESSION["lvl"][$j] == $nomes[$i]) {
								$vetores[$j]++;
							}
							else{

							}
						}
						break;

					case '4':

						for ($j=0; $j < count($_SESSION["lvl"]) ; $j++){

							if ($_SESSION["lvl"][$j] == $nomes[$i]) {
								$vetores[$j]++;
							}
							else{

							}
						}
						break;

					case '5':

						for ($j=0; $j < count($_SESSION["lvl"]) ; $j++){

							if ($_SESSION["lvl"][$j] == $nomes[$i]) {
								$vetores[$j]++;
							}
							else{

							}
						}
						break;


					default:

						break;
				}
			}

			// A maioria das próximas linhas serão sobre tratamentos de erros que ocorreram após a lógica feita acima, onde a parte "bruta" foi concluída;


			// Explicação do porquê foi feito esse tratamento:
			if (isset($nomes[1])) {
				if ($nomes[0] == "Masculino" && $nomes[1] == "Feminino") {
					$total--;
				}
			}
			/*  O máximo de 'pontos' que um usuário cadastrado pode ter, é de 3, já que as "classes" se distinguem em:
					1- Sexo (Masculino / Feminino);
					2- Objetivo (Front-End / Back-End / Full-Stack);
					3- Nível (1 / 2 / 3 / 4 / 5);
				E o usuário cadastrado pode apenas ter apenas uma de cada classe;

				Mas, caso no filtro seja selecionado mais de uma opção em uma "classe",
				onde cada opção selecionada equivale a 1 ponto em $total,
				o valor final será maior que três, e caso ocorra, nenhum usuário será selecionado,
				já que o máximo de pontos de um usuário é 3;

				Então por conta disso, em todas as "classes", a cada uma opção selecionada a mais
				que o padrão, será retirado 1 ponto do valor de $total;

				O mesmo se aplica para os dois laços de decisão if abaixo;

			*/



			if (in_array("Front-End", $nomes) && in_array("Back-End", $nomes) && in_array("Full-Stack", $nomes)) {
				$total -= 2;
			}
			else if (in_array("Front-End", $nomes) && in_array("Back-End", $nomes) || in_array("Front-End", $nomes) && in_array("Full-Stack", $nomes) || in_array("Back-End", $nomes) && in_array("Full-Stack", $nomes)){
				$total -=1;
			}
			else{

			}

			$retirar = -1;
			if (in_array("1", $nomes)) {
				$retirar++;
			}
			if (in_array("2", $nomes)) {
				$retirar++;
			}
			if (in_array("3", $nomes)) {
				$retirar++;
			}
			if (in_array("4", $nomes)) {
				$retirar++;
			}
			if (in_array("5", $nomes)) {
				$retirar++;
			}
			if ($retirar != -1) {
				$total -= $retirar;
			}

			$permite = 0;

			for ($i=0; $i < count($_SESSION["lvl"]) ; $i++) {  // Código criado para impedir a criação do tabeçalho da tabela quando não se tiver usuários que cumpram os requisitos dos filtros;
				if ($vetores[$i] == $total) {
					$permite++; // Caso seja incrementado pelo menos uma vez, significa que existe pelo menos um usuário que cumpre o requisito dos filtros selecionados;
				}
			}

			if ($permite != 0) { // Caso exista pelo menos um usuário como resultado na pesquisa, será feito o tabeçalho da tabela;
				echo "<center><h1>Resultado da pesquisa:</h1></center><br><br><table align='center'>
						<tr bgcolor='lightgrey' align='center'>
							<td>Nome</td>
							<td>Sexo</td>
							<td>E-mail</td>
							<td>Objetivo</td>
							<td>Nível</td>
						</tr>";
			}
			else{
				echo "<center><h1>Nenhum usuário cumpre os requisitos</h1></center>"; // Caso contrário, será dito isso;
			}

			// O código abaixo apenas irá printar os usuários que tiverem os pontos iguais ao $total, juntamente com seus atributos, é a mesma coisa que o começo desse código, láááá em cima;

			for ($i=0; $i < count($_SESSION["lvl"]) ; $i++) {

				if ($permite > 0) {

					if ($vetores[$i] == $total) {

							if ($_SESSION["sexo"][$i] == "Masculino") {
								echo "<tr bgcolor='lightgreen'>
											<td width='200'>".$_SESSION["nome"][$i]."</td>
											<td width='120'>".$_SESSION["sexo"][$i]."</td>
											<td width='150'>".$_SESSION["email"][$i]."</td>
											<td width='200'>".$_SESSION["obj"][$i]."</td>
											<td width='40'>".$_SESSION["lvl"][$i]."</td>
									</tr>";
							}
					}

				}
			}

			for ($i=0; $i < count($_SESSION["lvl"]) ; $i++) {

				if ($permite > 0) {

					if ($vetores[$i] == $total) {

							if ($_SESSION["sexo"][$i] == "Feminino") {
								echo "<tr bgcolor='hotpink'>
											<td width='200'>".$_SESSION["nome"][$i]."</td>
											<td width='120'>".$_SESSION["sexo"][$i]."</td>
											<td width='150'>".$_SESSION["email"][$i]."</td>
											<td width='200'>".$_SESSION["obj"][$i]."</td>
											<td>".$_SESSION["lvl"][$i]."</td>
									</tr>";
							}
					}

				}
			}



			echo "</table><br>";
		}
	}

?>