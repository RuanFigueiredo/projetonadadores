<?php

$categorias = [];
$categorias[0] = "Infantil";
$categorias[1] = "Adolescente";
$categorias[2] = "Adulto";

$nome = $_POST['nome'];
$idade = $_POST['idade'];

if(empty($nome)){
    echo 'digite um nome para a pessoa';
    return;
}
if(strlen($nome)<3){
    echo 'o  nome tem que ter mais de 3 caracteres';
    return;
}
if(strlen($nome)> 11){
    echo 'o nome tem que ter menos que 11 caracteres';
    return;
}


//var_dump($nome);
//var_dump($idade);


if($idade >=6 && $idade <=12 ){
    for($i=2; $i < count($categorias);$i++){
        if($categorias[$i]==="infantil");
        echo "o nadador(a) ". $nome. " compete na categoria infantil";
    }
}
else if ($idade >=13 && $idade<=18){
    for($i=2; $i < count($categorias);$i++){
        if($categorias[$i]==="adolescente");
        echo "o nadador(a) ". $nome. " compete na categoria adolescente";
    }
}else {
    echo "o nadador(a) ".$nome." compete na categoria adulto";
}