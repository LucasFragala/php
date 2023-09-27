<?php 
    $pdo = new PDO('mysql:host=localhost;dbname=modulo_8','root','wab12345678');

    $sql =$pdo->prepare("SELECT * FROM posts");
    $sql->execute();
    
    $info = $sql->fetchAll(); //pegar todas as informações buscadas pela Querry
  
    //Puxar dado da tabela
    /*
    foreach ($info as $key => $value){
        echo 'Titulo: '.$value['titulo'];
        echo '<br/>';
        echo 'Noticia: '.$value['conteudo'];
        echo '<hr/>';
    }
    */
    foreach ($info as $key => $value){
        echo 'Titulo: '.$value['titulo'];
        echo '<br/>';
        echo 'Noticia: '.$value['conteudo'];
        echo '<hr/>';
    }
?>