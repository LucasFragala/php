<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 01 - PHP</title>
</head>
<body>
<h1>ORIENTAÇÃO A OBJETOS NO PHP OU OOP</h1>

<h2>Diferença entre Public, Private e Static</h2>

<p>Public: funciona em qualquer lugar</p>
<p>Private: só funciona dentro de uma classe</p>
<p>Static: Pode ser chamada a qualquer momento, sem precisar da classe</p> 

</body>
</html>

<?php 
    //incluir um script php, utiliza-se "include"
    include('exemplo.class.php');
    //Instaciar objeto
    $exemplo = new Exemplo();
    $exemplo->var2 = 'Lucas';

    $exemplo2 = new Exemplo;
    $exemplo2->var2 = 'Fragalá';

    echo $exemplo->var2;
    echo '<br/>';
    echo $exemplo2->var2;

    Exemplo::$var3 = 'Outra variável';
    echo '<br/>';
    echo Exemplo::$var3;

    
?>