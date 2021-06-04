<!-- Sessão PHP
Variáveis de Sessão (valores armazenados no servidor)
Variáveis de Cookies (valores armazenados no usuário)

Cookies -> Valores armazenados em variáveis que não são perdidos

Para retirar um valor da sessão, se deve fazer através de:

- Destruir a sessão
- Excluir a variável de sessão
- Navegador fechado

---------------------------------------------------------------------
/ / / / / / / / / / / / / / / / / / / / / / / / / / / / / / / / / / /
---------------------------------------------------------------------
/ / / / / / / / / / / / / / / / / / / / / / / / / / / / / / / / / / /
---------------------------------------------------------------------
/ / / / / / / / / / / / / / / / / / / / / / / / / / / / / / / / / / /
---------------------------------------------------------------------

Sempre antes de usar a sessão, se deve iniciar(ligar):

-- session_start(); // apenas uma vez na página

Declarar variável de sessão:

-- $_SESSION["Nome_variavel"] = "Joao";
-- $_SESSION["Nome_variavel2"] = 325;
-- $_SESSION["Nome_variavel3"] = $_POST["txtnome"];

Excluir uma variável de sessão:

-- unset($_SESSION["Nome_variavel"])

Excluir todas as variáveis de sessão:

-- session_destroy();

Verificar se uma variável de sessão existe:

-- isset() - Verifica se existe
-- empty() - Verifica se está vazio
	
	if(isset($_SESSION["Nome_variavel"])){

		echo "existe";
	}

	else if(!isset($_SESSION["Nome_variavel"])){

		echo "não existe";
	} -->

<!DOCTYPE html>
<html>
	<head>
		<title>Exemplo Bootstrap</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	</head>

	<body>
		<div class="container">

			<div class="row">
				
				<div class="col-12">
					
					Linha 1 - Coluna 1 ----  
					<a href="pagina2.php" class="btn btn-primary">Página 2</a>
					<a href="pagina3.php" class="btn btn-secondary">Página 3</a>
					<a href="sair.php" class="btn btn-danger">Sair</a>

				</div>

				<br><br>

				<div class="col-12">
					
					<div class="alert alert-primary" role="alert">
						
					  <?php

                       session_start();
                         if (!isset($_SESSION["nome"])) {
		
		                   echo "Usuário logado: Nenhum";

	                     }
	                     else{

	                     	echo "Usuário logado: " . $_SESSION["nome"];
	                     }
                       

					  ?>
					</div>
					
				</div>

			</div>

			<div class="row">

				<div class="col">
					
					Linha 2 - Coluna 1
					<form method="POST" action="pagina2.php">

						<div class="form-group">

							<label>Nome:</label>
							<input type="text" name="nome" class="form-control" placeholder="Informe seu nome" required="">

						</div>

						<div class="form-group">

							<label>Senha:</label>
							<input type="password" name="senha" class="form-control" placeholder="Informe sua senha" required="">

						</div>

						<input type="submit" name="" class="btn btn-danger">

					</form>

				</div>
				

			</div>

		</div>
	</body>
</html>