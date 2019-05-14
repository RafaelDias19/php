<?php

interface Veiculo{

    public function acelerar($velocidade);
    public function freiar($velocidade);
    public function trocarMArcha($marcha);

}

abstract class Automovel implements Veiculo{

    public function acelerar($velocidade){
        echo "O veiculo acelerou até $velocidade km/h.";
    }

    public function freiar($velocidade)
    {
        echo "O veiculo freiou até $velocidade km/h.";
    }

    public function trocarMArcha($marcha)
    {
        echo "O veiculo engatou a marcha $marcha.";
    }


}


?>