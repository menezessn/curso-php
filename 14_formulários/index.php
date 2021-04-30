<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="dados.php" method="GET">
    Nome: <input type="text" name="nome"> <br>
    Email: <input type="email" name="email" id=""> <br>
    <input type="submit" value="Enviar" name="Enviar">
    </form>

    <a href="dados.php?nome=marcelo&email=marcelo%40gmail.com">Enviar dados</a>

</body>


</html>