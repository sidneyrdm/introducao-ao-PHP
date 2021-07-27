<?php

session_start();

$categorias = ['infantil', 'adolescente', 'adulto'];

//print_r($categorias);

$nome = $_POST['nome'];
$idade = $_POST['idade'];

if(empty($nome)){
    $_SESSION['mensagem-de-erro'] = "O nome não pode ser Vazio";
    header('location: index.php');
    return;
}else if(strlen($nome) < 3){
    $_SESSION['mensagem-de-erro'] = "O nome não pode conter menos de 3 caracteres";
    header('location: index.php');
    return;
}else if(strlen($nome) > 40){
    $_SESSION['mensagem-de-erro'] = 'O nome não poder ter mais do que 40 caracteres';
    header('location: index.php');
    return;
  }else if(!is_numeric($idade)){
    $_SESSION['mensagem-de-erro'] = 'Digite uma idade válida';
    header('location: index.php');
    return;
}



if($idade >= 6 && $idade <= 12){
    echo 'Infantil';
    echo '<br><hr>';
    $_SESSION['mensagem-de-sucesso'] = 'O nadador '.$nome." pertence a categoria ".$categorias[0];
    header('location: index.php');
    return;
}else if($idade >= 13 && $idade <= 18){
    echo 'Adolescente';
    echo '<br><hr>';
    $_SESSION['mensagem-de-sucesso'] = 'O nadador '.$nome." pertence a categoria ".$categorias[1];    
    header('location: index.php');
    return;
}else if($idade > 18 && $idade <= 110){
    echo 'Adulto';
    echo '<br><hr>';
    $_SESSION['mensagem-de-sucesso'] = 'O nadador '.$nome." pertence a categoria ".$categorias[2];
    header('location: index.php');
    return;
}else{
    echo '<br><hr>';
    $_SESSION['mensagem-de-sucesso'] = $nome." está fora do range de idade para ser nadador";
    header('location: index.php');
    return;
    }


