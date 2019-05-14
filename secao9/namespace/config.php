<?php

spl_autoload_register(function($nameClass){

    $dirClass = "class";
    $filename = $dirClass . DIRECTORY_SEPARATOR . $nameClass . ".php";
    $filename = str_replace( (DIRECTORY_SEPARATOR === '/' ? '\\' : '/'), DIRECTORY_SEPARATOR, $filename);
    
    if(file_exists($filename)){
        require_once($filename);
    }
});

?>