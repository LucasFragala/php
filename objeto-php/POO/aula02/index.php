<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aula 02</title>
</head>
<body>
<pre>
    <?php
//exemplo
    use aula02\Caneta02;

require_once 'Caneta02.php';
$c1 = new Caneta02;
$c1->cor = "Azul";
$c1->modelo = "BIC";

$c1->destampar();
$c1->rabiscar();


?>
</pre>
</body>
</html>