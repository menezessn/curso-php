<?php
//Arrays numéricos = indices inteiros
$carros = array("BMW", "Veloster", "Hilux");

$carros[] = "Amarok";
$carros[10]= "Ferrari";
print_r($carros);

//é possível definir o indice das arrays
$carros2 = array(1=>"BMW", 2=>"Veloster", 3=>"Hilux");

$clientes = ["Diego", "Arnaldo"];
echo "</br>";
print_r($clientes);
echo "</br>";
echo count($clientes);
//ou 
$totalClientes = count($clientes);

echo "</br>";

//foreach = para cada
foreach($carros as $valor){
    echo $valor . "</br>";
}

//arrays associativos

$pessoa = array("nome"=> "rodrigo", "idade"=> 12);
echo "</br>";

foreach($pessoa as $ind => $valor){
    echo $ind . ":".$valor. "</br>";
}

//Multidimensionais
$times= array ("cariocas" => array("vasco", "flamengo"),
"paulista" =>array('Santos', "Corinthians"));

echo "</br>". $times["cariocas"][0];
