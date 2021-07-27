<?php
  
$categorias = ['infantil', 'adolescente', 'adulto'];

//print_r($categorias);

$nome = $_POST['nome'];
$idade = $_POST['idade'];

if(empty($nome)){
    echo 'O nome não pode ser Vazio';
    return;
}

if(strlen($nome) < 3){
    echo 'O nome deve conter no mínimo 3 caracteres';
    return;
}

if(strlen($nome) > 40){
    echo 'O nome não poder ter mais do que 40 caracteres';
    return;
}

if(!is_numeric($idade)){
    echo 'Digite uma idade válida';
    return;
}

if($idade >= 6 && $idade <= 12){
    echo 'Infantil';
    echo '<br><hr>';
    
    echo 'O nadador '.$nome." pertence a categoria ".$categorias[0];
}else if($idade >= 13 && $idade <= 18){
    echo 'Adolescente';
    echo '<br><hr>';
echo 'O nadador '.$nome." pertence a categoria ".$categorias[1];    
}else{
    echo 'Adulto';
    echo '<br><hr>';
    echo 'O nadador '.$nome." pertence a categoria ".$categorias[2];
}


