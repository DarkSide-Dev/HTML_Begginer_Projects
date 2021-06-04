<?php

//Criar vetor

$vet_nomes = array();
$vet_nomes[0] = "Luan";
$vet_nomes[1] = "João";

//$vet_nomes =  array ("Luan", "João");



echo $vet_nomes[0]; // Exibir um específico

echo "<hr>";

print_r($vet_nomes); // Visualizar todos os nomes

echo "<hr>";

var_dump($vet_nomes); // Visualisa tudo dentro do objeto

echo "<hr>";

count($vet_nomes); // Função para contar quantos cadastros há no vetor

echo "<hr>";



// Verificar se existe valor no vetor

if (in_array("Luan", $vet_nomes)) {
	echo "Existe o nome LUAN, AQUELE LINDO";
}
else
{
	echo "Nome Não encontrado";
}

echo "<hr>";



//Ler todos os dados usando FOR

for ($i=0; $i < count($vet_nomes); $i++) { 
	echo "Nome: $vet_nomes[$i]<br>";
}

echo "<hr>";


//Ler todos os dados usando FOREACH

foreach ($vet_nomes as $value) {
	echo "Nome: $value<br>";
}

echo "<hr>";


// Outra forma de criar vetor - usando associação

$vet_produtos =  array();
$vet_produtos["nome"]= "feijão";
$vet_produtos["nome"]= 10;
$vet_produtos["nome"]= 7.99;

foreach ($vet_produtos as $key => $value) {
	echo "$key : $value<br>";
}

echo "<hr>";

?>