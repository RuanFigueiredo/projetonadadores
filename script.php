<?php

$categorias = [];
$categorias[] = "Infantil";
$categorias[] = "Adolescente";
$categorias[] = "Adulto";

$nome =$_POST['nome'];
$idade = $_POST['idade'];

var_dump($nome);
var_dump($idade);


if($idade >= 6 && $idade <= 12 ){
    for($i=2; $i < count($cagegorias);$i++){
        if($categorias[$i]=="infantil");
        echo "o nadador". $nome. "compete na categoria infantil";
    }
}
else if ($idade >=13 && $idade<=18){
    for($i=2; $i < count($cagegorias);$i++){
        if($categorias[$i]=="adolescente");
        echo "o nadador". $nome. "compete na categoria adolescente";
    }
}else {
    echo "a pessoa".$nome."compete na categoria adulto";
}
