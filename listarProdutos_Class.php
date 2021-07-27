<?php

require './DB.php';  

$conexao = new DB;

//com where
//$sql = "select * from produtos where descricao like :valor";

//sem where
$sql = "select * from produtos";
    

//$params = [':valor' => '%coca-cola%'];

//com where e parametros
//$conexao->executeSQL($sql, $params);

$conexao->executeSQL($sql);

$resultado = $conexao->listData();

/*
foreach ($resultado as $result) {
    echo '<br>';
    echo $result['descricao'] . ' - ' . $result['preco'];
}*/
echo '<h1>Listagem de produtos</h1>';
echo '<hr>';

echo '<table border ="2">';
echo '<tr>';
  echo '<td>Descricao</td>';
  echo '<td>Preço</td>';
  
echo '</tr>';

foreach ($resultado as $produto){
    echo '<tr>';
    
    echo '<td>';
    echo $produto['descricao'];
    echo '</td>';
    echo '<td>';
    echo $produto['preco'];
    echo '</td>';    
    
    echo '</tr>';
}
echo '</table>';

/*
echo "<pre>";
var_dump($resultado);
echo "</pre>";
*/
?>