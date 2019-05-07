<?php

// function teste($callback){
//     $callback();
// }

// teste(function(){
//     echo "ok";
// });


$fn = function($a){
    var_dump($a);
};

$fn("oi");
?>