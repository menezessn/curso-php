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

    // isset verifica se existe
    if(isset($_POST['enviarFormulario'])){
        //array de erros
        $erros = array();

        //validações
        if(!$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT)){
            $erros [] = "Idade precisa ser um número inteiro";
        }
        if(!$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)){
            $erros [] = "Email inválido";
        }
        if(!$peso = filter_input(INPUT_POST, 'peso', FILTER_VALIDATE_FLOAT)){
            $erros [] = "Peso precisa ser um número float";
        }
        if(!$ip = filter_input(INPUT_POST, 'ip', FILTER_VALIDATE_IP)){
            $erros [] = "IP inválido";
        }
        if(!$url = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL)){
            $erros [] = "URL inválida";
        }
        //empty veriifica se está vazio
        //exibindo mensagens
        if(!empty($erros)){
            foreach ($erros as $erro){
                echo "<li> $erro </li>";
            }
        } else {
            echo "Dados enviados!";
        }

    }

    ?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    Idade: <input type="text" name="idade"> <br>
    Email: <input type="text" name="email"> <br>
    Peso: <input type="text" name="peso" id=""> <br>
    IP: <input type="text" name="ip" id=""> <br>
    URL: <input type="text" name="url" id=""> <br>
    <button type="submit" name="enviarFormulario"> Enviar </button>
    
    
    </form>


</body>
</html>