<?php

namespace aula01;
class Caneta
{
    var $modelo;
    var $cor;
    var $ponta;
    var $carga;
    var $tampada;

    function rabiscar()
    {
        if ($this->tampada) {
            echo "<p>A caneta está tampada, não posso rabiscar!</p>";
        } else {
            echo "Estou rabiscando";
        }
    }

    function tampar()
    {
        $this->tampada = true;
    }

    function destampar()
    {
        $this->tampada = false;
    }
}

?>