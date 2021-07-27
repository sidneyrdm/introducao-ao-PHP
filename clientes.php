<?php require './listaClientes.php';?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Meu Projeto PHP</title>
    </head>
   
    <body>
        <h3>Listagem De Clientes</h3>
        <hr>
        <table border = "1">
            <tr>
                <td>Nome</td>
                <td>Fone</td>
            </tr>
            
    <?php foreach($clientes as $cliente): ?>
            <tr>
                <td><?php echo $cliente['nome']?></td>
                <td><?php echo $cliente['fone']?></td>
            </tr>
    <?php endforeach; ?>
        </table>
    </body>
</html>
