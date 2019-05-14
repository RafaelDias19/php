<?php

// function __autoload($nameClass){
//     require_once("$nameClass.php");
// }

function includeClass($nameClass){

    if (file_exists($nameClass.".php")===true)
        require_once($nameClass.".php");

}


spl_autoload_register("includeClass");
spl_autoload_register(function($nameClass){
    if(file_exists("abstract". DIRECTORY_SEPARATOR . $nameClass.".php")===true){
        require_once("abstract". DIRECTORY_SEPARATOR . $nameClass.".php");
    }
});


$carro = new DelRay();

$carro->acelerar(80);

?>