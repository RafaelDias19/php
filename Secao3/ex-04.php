<?php

$nome = "Bruna";

function teste(){
    global $nome;
    echo "função 1: ";
    echo $nome;
}
teste();

function teste2(){
    $nome = "João";
    echo "<br/>";
    echo "função 2: ";
    echo $nome;
}
teste2();


?>