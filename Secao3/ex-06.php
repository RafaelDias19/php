<?php

$nome1 ='agnes maria';
$nome2 ="breno gabriel";

echo "Olá $nome1<p/>";
echo "Olá $nome2<p/>";
echo 'Olá $nome1<p/>';

//---------------------------------------//
echo strtoupper($nome1);
echo "<p/>$nome1";
echo "<br/>";
echo ucwords($nome1);
echo "<br/>";
echo ucfirst($nome2);

$nomeMaiusc =strtoupper($nome1);
echo "<br/>";
echo $nomeMaiusc;
//---------------------------------------//

$empresa = "Hcode";

$empresa = str_replace("o","0", $empresa);
$empresa = str_replace("e","3", $empresa);
echo "<br/>";
echo "<br/>";
echo $empresa;

//---------------------------------------//
echo "<br/>";
echo "<br/>";
$frase = "A repetição é a mãe da retenção.";

$palavra = "mãe";

$q = strpos($frase,$palavra);
echo "----";
echo $q;
echo "----";
echo "<p/>";
$texto = substr($frase, 0, $q);

var_dump($texto);

$texto2 = substr($frase,$q + strlen($palavra),strlen($frase));

echo "<br/>";

var_dump($texto2);



?>