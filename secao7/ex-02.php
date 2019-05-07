<?php

function ola($texto = "Mundo",$saudacao = "Bom dia"){
    return "Olá $texto! $saudacao<p>";
}

echo ola();
echo ola("Rafael");
echo ola("Carol","Boa tarde");
echo ola("Aninha", "Boa Noite");
?>