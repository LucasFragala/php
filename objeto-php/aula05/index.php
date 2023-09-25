<?php   
include('interface1.php');
class teste implements Interface1{

    public function print($par){
        echo $par;
    }

}
$teste = new Teste;
$teste->print('Olá Mundo');

?>