<?php

    date_default_timezone_set('America/Sao_Paulo');

    //constructor
    $pdo = new PDO('mysql:host=localhost;dbname=modulo08', 'root', '');

    if(isset($_POST['acao'])){
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $dataRegistro = date('Y-m-d H:i:s');
        //prevents sql injection
        $sql = $pdo->prepare("INSERT INTO `clientes` VALUES (null, ?, ?, ?)");
        
        //com o array, pdo tira todas as tags maliciosas e faz um insert seguro
        $sql->execute(array($nome, $sobrenome, $dataRegistro));

        echo 'cliente inserido com sucesso';

    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro no banco de dados</title>
</head>
<body>
    <form method="post"> 
        <input type="text" name="nome" required />
        <input type="text" name="sobrenome" required />
        
        <input type="submit" name="acao" value="Enviar" />
    </form>
</body>
</html>