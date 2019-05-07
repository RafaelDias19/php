<?php

function soma(int ...$valores):string{
    return array_sum($valores);
}

echo var_dump(soma (2,2));
echo "<p>";
echo soma (2.4,7);
echo "<p>";
echo soma (1.5,3.9,5,87);
echo "<p>";
?>