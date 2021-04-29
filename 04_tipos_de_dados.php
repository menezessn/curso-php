<?php
//escalares

//string

$nome = "texto aqui";
var_dump($nome); //informações da variável
if(is_string($nome)): //retorna true se for string
    echo "É uma string";
else:
    echo "Não é uma string";
endif;

echo"<hr>";

//int
$idade = 27;
var_dump($idade);
if(is_int($idade)):
    echo "é inteiro";
else:
    echo "Não é inteiro";
endif;

//float
$altura = 1.77;
var_dump($altura);
if(is_float($altura)):
    echo "é float";
else:
    echo "Não é float";
endif;

//boolean
$admin = true;
var_dump($altura);
if(is_bool($altura)):
    echo "é boolean";
else:
    echo "Não é boolean";
endif;

//compostos

$carros = array("gol", "uno", "Camaro", 12, 20.6, true);
var_dump($carros);

//object
class Cliente {
    public $nome;
    public function atribuirNome($nome){

        $this->$nome = $nome;

    }
}

$cliente = new Cliente();
$cliente->atribuirNome('Rodrigo');
var_dump($cliente);

//especiais

$cidade = null;
var_dump($cidade);

