<!DOCTYPE html>
<html>
	<head>
		<title>Exercício Vetor - 2</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="assets/style.css">
	</head>

	<body>
		<div class="form">

			<h1>JONHY'S - CORPORATION</h1>

			<form method="POST" action="up.php">
				
				Nome <br>
				<input type="text" name="nome" required="">

				<br><br>	
				
				Sexo <br>
				<select name="sexo" id="" required>
					<option value="0">Masculino</option>
					<option value="1">Feminino</option>
				</select>
						
				<br><br>
				
				E-mail <br>
				<input type="email" name="email" required placeholder="example@example.com">

				<br><br>

				Objetivo:<br>
				<label> <input type="radio" name="obj" value="Front-End" required> Front-End </label> <br>
				<label> <input type="radio" name="obj" value="Back-End" required> Back-End </label> <br>
				<label> <input type="radio" name="obj" value="Full-Stack" required> Full-Stack </label> <br>
				
				<br><br>

				De acordo com o objetivo, defina seu nível de experiência: <br>

				<center><input type="range" name="lvl" min="1" max="5" required> <br>
				1 &nbsp;&nbsp;&nbsp; 2 &nbsp;&nbsp;&nbsp; 3 &nbsp;&nbsp;&nbsp; 4 &nbsp;&nbsp;&nbsp; 5</center>

				<br><br>

				<input type="submit" value="Enviar"> &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="exibir.php"> <input type="button" value="Exibir"> </a>				
				<br> <br> <br>
			</form>

		</div>

	</body>
</html>