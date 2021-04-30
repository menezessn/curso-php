<?php

function exibirNome($nome){

echo "Meu nome é $nome";

}
exibirNome("Marcelo");

echo "<hr>";

function calcularMedia($nome, $n1, $n2, $n3, $n4){

    $media = ($n1 + $n2 + $n3+ $n4) / 4;
    if($media>=7){
        echo "$nome foi aprovado com a media $media";
    } else {
        echo "$nome foi reprovado";
    
    }

}
calcularMedia("bob", 7,5,9,10);


