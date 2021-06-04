	
	<?php

		session_start();

		if (!isset($_SESSION["quant"])) {

		}
		else{
			if ($_SESSION["quant"] == 0) {
				echo "<script>alert('Resolva o problema!!'); window.location='nobreak.php';</script>";
			}
		}

	?>


<!DOCTYPE html>
<html>
	<head>
		<title>Login - 2°DS Tarde</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="assets\css\sty.css">
	</head>

	<body>
		<div class="container">
			
			<div class="container_int">
				
				<form method="POST" action="">
					
					Login
					<br>

					<input type="text" name="login" required="">

					<br><br><br>

					Senha
					<br>

					<input type="password" name="senha" required="">

					<br><br><br>

					<input type="checkbox" name="">Continuar conectado

					<br><br>

					<input type="submit" name="" value="Confirmar">

				</form>

			</div>

		</div>
	</body>
</html>


<?php

	if (!empty($_POST)) {
		

		$_SESSION["nome"] = "Administrador";
		$_SESSION["senha"] = "1234";
		

		$_SESSION["nome2"] = $_POST["login"];
		$_SESSION["senha2"] = $_POST["senha"];
		
		if (!isset($_SESSION["quant"])) {
		
			$_SESSION["quant"] = 2;

		}

		if ($_SESSION["nome"] == $_SESSION["nome2"] && $_SESSION["senha"] == $_SESSION["senha2"]) {
			echo "<script> window.location='enquete.php';</script>";
		}
		else if ($_SESSION["quant"] == 0) {
			echo "<script> window.location='nobreak.php';</script>";
		}
		else{
			$_SESSION["quant"]--;
			echo "<script> alert('Usuário ou Senha incorretos');</script>";
		}
		
	}

?>