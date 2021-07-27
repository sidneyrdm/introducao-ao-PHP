<?php
  
$categorias = ['infantil', 'adolescente', 'adulto'];

//print_r($categorias);

$nome = 'Jonatas';
$idade = 19;

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

var_dump($idade);

//echo count($categorias);


