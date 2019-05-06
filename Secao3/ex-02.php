<?php
//tipos

$nome ="Rafael";
$site = 'www.google.com';

$ano=1998;
$salario = 5050.98;
$bloqueado = false;

//--------------------------------//
$frutas = array("abacaxi","laranja","manga");

echo $frutas[2];

$nascimento = new DateTime();
echo "<p>";
var_dump($nascimento);

echo "<p>";
//--------------------------------//

$arquivo = fopen("ex-01.php","r");

var_dump($arquivo);

echo "<p>";

$nulo=NULL;
$vazia="";


?>