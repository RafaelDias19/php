<?php

class Endereco{
    private $logradouro;
    private $numero;
    private $cidade;

    public function __construct($a,$b,$c){

        $this->logradouro = $a;
        $this->numero = $b;
        $this->cidade = $c;

    }

    public function __destruct(){
        echo "<p>";
        var_dump("Destruir");
    }

    public function __toString(){
        return $this->logradouro.", ".$this->numero." - ".$this->cidade;
    }

}

$meuEndereco = new Endereco("Rua 3","342","Manaus");

var_dump($meuEndereco);
echo "<p>";
echo $meuEndereco;


?>