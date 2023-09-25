<h1>Abstract e Self</h1>

<h2>Abstract</h2>

<p>Abstract é uma classe que só pode ser herdada, não pode ser instanciada</p>
<p>Tanto para classe quanto para função. A classe deve ser extendida e a função deve ser instanciada na classe que a herdou</p>
<p>Exemplo 1: Classe abstrata sendo herdada por outra classe</p>
<hr>
<?php  
    abstract class Teste{
        public function func1(){
            echo'chamando funcao1';
        }
    }

    class Principal extends Teste{

    }

    $principal = new Principal();
    $principal->func1();

?>
<hr>
<p>Exemplo 2: Função abstrata sendo instanciada na classe que a herdou</p>
<hr>
<?php  
    abstract class Teste2{
        public function func1(){
            echo'chamando funcao1';
            echo '<br/>';
        }
        abstract function func2();
    }

    class Principal2 extends Teste2{
        public function func2(){
            echo 'Exemplo 2';
        }
    }

    $principal = new Principal2();
    $principal->func1();
    $principal->func2();

?>
<hr>

<h2>Self</h2>
<p>Self: Serve para chamar uma função estática dentro da própria classe:</p>
<hr>
<?php 
    class Principal3{
        static function func3(){
            echo 'Chamando função estática com modo SELF.';
        }
        public function funcao(){
            self::func3();
        }

    }

    $principal3 = new Principal3;
    $principal3->funcao();

?>
<hr>

