<?php

$pessoas = array();
array_push($pessoas, array(
    'nome'=> 'Rafael',
    'idade'=>22
));

array_push($pessoas, array(
    'nome'=> 'Colin',
    'idade'=>20
));

echo json_encode($pessoas);

?>