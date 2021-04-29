<?php
$nome = "Marcelo";
$a = 1;
$b = 2;
$c=3;
function exibeNome() {
    global $nome; //define como variavel global
    echo $nome;

}

exibeNome();

echo"<hr>";

function exibeCidade(){
    global $cidade;
    $cidade = "Rio de Janeiro";//escopo local

}

exibeCidade();
echo $cidade;

echo "<hr>";

function soma(){

   echo $GLOBALS['a']+$GLOBALS['b']+$GLOBALS['c'];

}

soma();


