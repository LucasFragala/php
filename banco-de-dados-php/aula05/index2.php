<?php 
    $pdo = new PDO('mysql:host=localhost;dbname=modulo_8','root','wab12345678');

    $sql =$pdo->prepare("SELECT * FROM posts");
    $sql->execute();

    $info = $sql->fetchAll(); //pegar todas as informações buscadas pela Querry

    //Puxar dado da tabela

    foreach ($info as $key => $value){
        $categoria_id = $value['id'];
        echo 'Exibindo posts de: '.$value['nome'];
        echo '<br/>';
        $sql =$pdo->prepare("SELECT * FROM posts WHERE categoria_id = $categoria_id");
        $sql->execute();
        $infoPosts = $sql->fetchAll();
        foreach ($infoPosts as $key => $value){
            echo 'Titulo: '.$value['titulo'];
            echo '<br/>';
            echo 'Noticias: '.$value['conteudo'];
            echo '<hr/>';
        }    
    }    


?>