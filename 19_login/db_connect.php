<?php
//Conexão com o banco de dados
$servername = 'localhost';
$username = "root";
$password = '';
$db_name = 'sistemalogin';
$porta = "3307";
 
$connect = mysqli_connect($servername, $username, $password, $db_name, $porta);

if(mysqli_connect_error()){
    echo "Falha na conexão: ". mysqli_connect_error();
}