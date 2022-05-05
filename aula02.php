<?php
//Operadores
$valor = 10;
$valor += 5;
//echo $valor;


$nome = "Ricardo";
$nome .="Artur";
//echo $nome;

$valor1 = 10;
$valor2 = 5;

if ($valor1 !== $valor2){
//    echo "$valor1 não é igual ao $valor2";
}
($valor1 == $valor2) ? $resultado = true : $resultado = false;
//var_dump($resultado);
$v1 = 11;
$v2 = $v1++;
//echo $v1.'-'.$v2;

$v1 = true;
$v2 = true;
//var_dump(!($v2));

$nome = 'Ricardo ';
$sobrenome = 'Artur';
echo $nome.$sobrenome;