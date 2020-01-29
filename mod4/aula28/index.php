<?php
//Aula 28 - Variáveis compostas

$pares = array(0, 2, 4, 6, 8);

$variavel = array(
	"nome" => "Severino",
	"sobrenome" => "Joaquim",
	"idade" => 80,
	"sexo" => "masculino"
);

echo $variavel["nome"];
echo "<hr>";
echo $pares[2];
echo "<hr>";
print_r($variavel);
echo "<hr>";
print_r($pares);
 ?>