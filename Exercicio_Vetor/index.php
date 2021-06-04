<?php

	for ($i=0; $i < 50 ; $i++) { 
		
		$vetor[] = rand(1,69);

	}

	$quant_par = 0;
	$quant_impar = 0;

	foreach ($vetor as $key => $value) {

		echo "". $key + 1 ." --> $value <br><br>";

		if ($value%2 == 0) {
			$quant_par++;
		}
		else{
			$quant_impar++;
		}
	}

	echo "Quantidade de números pares: $quant_par<br>Quantidade de números ímpares: $quant_impar<br><hr><br>";

	$total = 0;

	foreach ($vetor as $key) {

		$total += $key;
	}

	echo "Total da soma de todos os números é: $total<br><hr><br>";




?>