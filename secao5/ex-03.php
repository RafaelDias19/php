<?php

$json = '[{"nome":"Rafael","idade":22},{"nome":"Colin","idade":20}]';

$data = json_decode($json,true);

var_dump($data);

?>