<?php

$link = new PDO("mysql:host=localhost;dbname=miniloja2017", "root", "");
$link->exec("SET NAMES utf8");

$query = $link ->prepare("select * from produtos where descricao like :valor");
$query ->bindValue(':valor', '%castanha%');

$query ->execute();

$resultado = $query -> fetchAll(PDO::FETCH_ASSOC);

foreach ($resultado as $result) {
    echo '<br>';
    echo $result['descricao'] . ' - ' . $result['preco'];
}

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


//echo "<pre>";
//var_dump($resultado);
//echo "</pre>";

?>