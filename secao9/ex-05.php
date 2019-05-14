<?php

// class Pessoa{

//     public $nome = "Rasmus Potter";
//     protected $idade = "45";
//     private $senha = "1234567890";

//     public function verDados(){

//         echo $this->nome . "<br>";
//         echo $this->idade . "<br>";
//         echo $this->senha . "<br>";

//     }

// }

// $objeto = new Pessoa();

// // echo $objeto->nome . "<br>";

// $objeto->verDados();

class Pessoa{

    public $nome = "Rasmus Potter";
    protected $idade = "45";
    private $senha = "1234567890";

    public function verDados(){

        echo $this->nome . "<br>";
        echo $this->idade . "<br>";
        echo $this->senha . "<br>";

    }

}

class Programador extends Pessoa{



}


$objeto = new Programador();

// echo $objeto->nome . "<br>";

$objeto->verDados();



?>