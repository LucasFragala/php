<?php

namespace aula02;
class Caneta02
{
    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampada;

     function rabiscar()
    {
        if ($this->tampada) {
            echo "<p>A caneta está tampada, não posso rabiscar!</p>";
        } else {
            echo "Estou rabiscando";
        }
    }

    public function tampar()
    {
        $this->tampada = true;
    }

    public function destampar()
    {
        $this->tampada = false;
    }
}

?>