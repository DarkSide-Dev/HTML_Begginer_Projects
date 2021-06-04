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

<html> 
    <head>
        <title>Resultado - 2°DS Tarde</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="assets\css\resultados.css">
    </head>

    <?php
        session_start();

        if (isset($_SESSION["nome2"])) {
		
		}

		else{
			echo "<script> alert('Faça o login antes de acessar a área de votos !!'); window.location='index.php';</script>";
		}
        
        if (!isset($_SESSION["armor1"])) {
            echo "<script>alert('NENHUM VOTO COMPUTADO - VOTE EM PELO MENOS UMA ARMADURA'); window.location='enquete.php';</script>";
        }

        $tot = $_SESSION["armor1"] + $_SESSION["armor2"] + $_SESSION["armor3"] + $_SESSION["armor4"];
    ?>

    <body>
        <div class="container">
            <br>

            <div class="container_int">

                <div class="a1">

                    <img src="assets/img/1.png" alt="" height="300"><br>
                    <?php
                        echo $_SESSION["armor1"];
                        echo " PONTOS&nbsp;-&nbsp;". number_format((($_SESSION["armor1"] * 100) / $tot),2). "%";
                    ?>

                </div>

                <div class="a1">

                    <img src="assets/img/2.png" alt="" height="300"><br>
                    <?php
                        echo $_SESSION["armor2"];
                        echo " PONTOS&nbsp;-&nbsp;". number_format((($_SESSION["armor2"] * 100) / $tot),2). "%";
                    ?>

                </div>

                <div class="a1">

                    <img src="assets/img/3.png" alt="" height="300"><br>
                    <?php
                        echo $_SESSION["armor3"];
                        echo " PONTOS&nbsp;-&nbsp;". number_format((($_SESSION["armor3"] * 100) / $tot),2). "%";
                    ?>

                </div>

                <div class="a1">

                    <img src="assets/img/4.png" alt="" height="300"><br>
                    <?php
                        echo $_SESSION["armor4"];
                        echo " PONTOS&nbsp;-&nbsp;". number_format((($_SESSION["armor4"] * 100) / $tot),2). "%";
                    ?>

                </div>
                
            </div>
            <br><br> 
            <a href="enquete.php"><button>Voltar</button></a>
        </div>
    </body>
</html>