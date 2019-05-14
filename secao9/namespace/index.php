<?php

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Italo Barbosa");
$cad->setEmail("italoide10@gmail.com");
$cad->setSenha("123654963");

 echo $cad;

 $cad->registrarVenda();
?>