<?php

session_start();//deve vir sempre antes do conteudo
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Inscrição</title>
</head>
<body>
    <p>FORMULÁRIO PARA INSCRIÇÃO DE COMPETIDORES</p>
    <hr>
    <form action = "script.php" method="post">
    <?php 
     $mensagemDSucesso = isset($_SESSION['mensagem-de-sucesso']) ? $_SESSION['mensagem-de-sucesso'] : '';
     if(!empty($mensagemDSucesso)){
         echo $mensagemDSucesso;
         session_destroy();
     }
    
    $mensagemDeErro = isset($_SESSION['mensagem-de-erro']) ? $_SESSION['mensagem-de-erro'] : '';
     if(!empty($mensagemDeErro)){
         echo $mensagemDeErro;
         session_destroy();
     }
    ?>
    <p>Seu Nome.: <Input type="text" name="nome" /></p>    
    <p>Sua Idade.: <Input type="text" name="idade" /></p>
    <p><Input type="submit" value="Enviar dados do competidor"/></p>
    </form>
</body>
</html>



