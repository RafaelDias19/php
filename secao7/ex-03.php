<?php

$a = 10;

function troca($c){
    $c += 50;
    return $c;
}

echo troca($a);
echo "<br>";
echo $a;

echo "<br>";
echo "<br>";
echo "<br>";
$b = 10;

function trocar2(&$b){
    $b += 50;
    return $b;
}

echo trocar2($b);
echo "<br>";
echo $b;

?>