<?php
$nome = "Rafael";

echo $nome;
echo "<br/>";
var_dump($nome);
echo "<br/>";
unset($nome);
echo "<br/>";

if(isset($nome)){
    echo $nome;
}
else{
    echo "variável limpa!";
}
echo "<br/><br/>";

$nome = "Rafael";
$sobrenome = "Dias";

$nomeCompleto = $nome ." ". $sobrenome;

echo $nomeCompleto;
?>