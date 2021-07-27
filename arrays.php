<?php


echo "<h1>Estudo de ARRAYS com índice em PHP</h1>";

/*
$frutas = array("maca", "laranja");

array_push($frutas, "Melancia");

echo "<pre>";

print_r($frutas);
echo "<br>";
var_dump($frutas);

echo "</pre>";

foreach($frutas as $fruta){
    echo "<br>";
    echo $fruta;
}
*/

echo "<hr>";
echo "<h1>Arrays Associativos</h1 >";

$clientes[0] = array('nome' => 'Sidney Brito', 'fone' => '81986489432');
$clientes[1] = array('nome' => 'Edward Callen', 'fone' => '9894156198552');
$clientes[2] = array('nome' => 'Jacob Lobato', 'fone' => '789616416548');


echo '<table border ="2">';
echo '<tr>';
  echo '<td>Nome</td>';
  echo '<td>Fone</td>';
  
echo '</tr>';

foreach ($clientes as $cliente){
    echo '<tr>';
    
    echo '<td>';
    echo $cliente['nome'];
    echo '</td>';
    echo '<td>';
    echo $cliente['fone'];
    echo '</td>';    
    
    echo '</tr>';
}
echo '</table>';

/*
echo "<pre>";
print_r($clientes);
echo "<br>";
var_dump($clientes);
echo "<br>";

 * echo "</pre>";

foreach ($clientes as $cliente){
    echo $cliente;
    echo "<br>";    
}*/


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

