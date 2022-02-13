<?php 

    $pdo = new PDO('mysql:host=localhost;dbname=modulo08', 'root', '');

    $id = 3;

    $sql = $pdo->prepare("UPDATE `clientes` SET nome='Mario', sobrenome='Da Silva' WHERE id = ". $id);
    

    if($sql->execute()){
        echo 'cliente atualizado com sucesso!';
    }

?>