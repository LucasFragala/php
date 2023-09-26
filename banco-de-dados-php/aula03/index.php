<?php 
    $pdo = new PDO('mysql:host=localhost;dbname=modulo_8','root','wab12345678');
    //atualizando banco de dados por Query
    $id = 18;
    $sql = $pdo->prepare("UPDATE `clientes` SET nome='Mario',sobrenome='Da Silva' WHERE id=$id");

    if($sql->execute()){
        echo 'Meu cliente foi atualizado com sucesso';
    }
?>