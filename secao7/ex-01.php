<?php

function ola(){
    return "Oi Pessoal<br/>";
}

echo ola();
$frase = ola();

echo strlen($frase);

//---------------------------------------------------//
echo "<p/>";
function Salario(){
    return 980.90;
}


echo "Jose recebeu 3 salários: " . (Salario()*3);

?>