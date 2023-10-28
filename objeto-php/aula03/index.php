<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Final class, heranças, protected</title>
</head>
<body>
    <h1>Final class, heranças, protected</h1>
    <h2>Final class</h2>
    <p>Uma classe que não pode ser herdada</p>
    <h2>Herança</h2>
    <p>Quando uma classe herda, extende todos os métodos e atributos de outra. Utilizando "extends", o que não é possível de realizar com uma "final class"</p>
    <p>No exemplo abaixo, a class Pai herda o método da class Filha. Sendo possível utilizar em um novo objeto tanto o método de Pai quanto de Filha.</p>

    <?php 
    //Exemplo
    class Filha{

        public function printHello(){
            echo 'Hello';
        }

        }

    class Pai extends Filha{
        public function printBye(){
            echo "Bye";
        } 
    }       

        $pai = new Pai;
        $pai->printHello();
        echo '<hr/>';
        $pai->printBye();    
        
    

?>

    <h2>Protected Function</h2>
    <p>A função Protected, diferente da private, pode ser chamada diretamente por uma classe que herde ela.</p>

<?php 

    class Filha2{
        protected function funcaoTeste(){
            echo 'chamando função teste';
            echo '<hr/>';
        }

        public function printHello2(){
            echo 'Hello again';
            echo '<hr/>';
        }
    }

    class Pai2 extends Filha2{
        public function printBye2(){
            echo 'Bye again';
            echo '<hr/>';
            $this->funcaoTeste();
        }
    }

    $pai2 = new Pai2;
    $pai2->printHello2();
    $pai2->printBye2();
    

?>
</body>
</html>

