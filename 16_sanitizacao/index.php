<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

//array de eros
    $erros = array();

    //sanitize
    $nome = filter_input(INPUT_POST, "nome" , FILTER_SANITIZE_SPECIAL_CHARS);
 

    $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
    if (!filter_var( $idade, FILTER_VALIDATE_INT)){
        $erros[] = "Idade precisa ser um inteiro";
    } 

    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    if (!filter_var( $email, FILTER_VALIDATE_EMAIL)){
        $erros[] = "EMAIL INVÁLIDO";
    } 

    $url = filter_input(INPUT_POST, 'url', FILTER_SANITIZE_URL);
    if (!filter_var( $url, FILTER_VALIDATE_URL)){
        $erros[] = "URL inválida";
    } 

    if(!empty($erros)){
        foreach ($erros as $erro){
            echo $erro . "<br>";
        }
    } else {
        echo "Dados enviados!";
    }



?>
    
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    Nome: <input type="text" name="nome" id=""> <br>
    Idade: <input type="text" name="idade"> <br>
    Email: <input type="text" name="email"> <br>
    URL: <input type="text" name="url" id=""> <br>
    <button type="submit" name="enviarFormulario"> Enviar </button>
    
    
    </form>

</body>
</html>