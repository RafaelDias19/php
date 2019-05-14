<?php

namespace Cliente;

class Cadastro extends \Cadastro{
    public function registrarVenda(){
        echo "<p>Foi registrada uma venda para o cliente " . $this->getNome();
    }
}

?>