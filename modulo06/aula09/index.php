<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulário</title>
</head>
<body>

    <?php 
        /*@ suprime mensagens de alerta e erro
        $nome = @$_GET['nome'];
        $email = @$_GET['email'];

        if (isset($_GET['acao'])){
            $nome = $_GET['nome'];
            $email = $_GET['email'];
            echo $nome .'<br>'. $email;
        }
        */

        /*if (isset($_POST['acao'])){
            echo $_POST['numero1']+$_POST['numero2'];
        }*/

        if (isset($_POST['acao'])){
            foreach ($_POST['valor'] as $key => $valueArray){
                echo $key ."=>".$valueArray .'<br>';
            }
        }
    ?>

    <form method="post">
        <!--<input type="text" name="numero1">
        <input type="text" name="numero2">
        <input type="submit" name="acao" value="enviar"> -->


        <!--valor[] é passado como array -->
        <input type="checkbox" name="valor[]" value="10">10
        <input type="checkbox" name="valor[]" value="20">20
        <input type="checkbox" name="valor[]" value="30">30
        <input type="checkbox" name="valor[]" value="40">40
        <input type="checkbox" name="valor[]" value="50">50
        <input type="submit" name="acao" value="enviar"> 

    </form>
</body>
</html>