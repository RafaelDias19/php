<?php

class Documento{

    private $numero;

    public function getNumero(){
        return $this->numero;
    }

    public function setNumero($numero){
        $this->numero = $numero;
    }

}

$cpf = new Documento();
$cpf->setNumero("3213456734-85");

var_dump($cpf->getNumero());

?>