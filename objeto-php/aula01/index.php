<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 01 - PHP</title>
</head>
<body>
<h1>ORIENTAÇÃO A OBJETOS NO PHP OU OOP</h1>

<p>Objetos, são classes que criamos e nelas contém atributos e funções;</p>
<p>Ex: classe Pessoa</p> 
<p>Pode conter atributos como: Nome, Idade, Peso</p>
<p>E Funções como: Crescer(), Comer(), Dormir()</p>
<p>Private: função que não pode ser chamada diretamente. Para evocar uma função privada pode se utilizar "$this->" + "nome da função" dentro de uma public function.</p>
</body>
</html>

<?php 
    class Pessoa{
        //Objeto Pessoa
        //Exemplo

        private $nome = 'Lucas';
        private $idade = '28';
        private $peso = '70 Kg';

        public function crescer() {
            echo 'estou crescendo';
            $this->comer();

        }

        private function comer() {
            echo 'estou comendo';
            
        }
    }

    //Instanciar
    $pessoa = new Pessoa;
    $pessoa2 = new Pessoa;

    $pessoa->crescer();
    
?>