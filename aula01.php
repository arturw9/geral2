<?php

$idade = 30;
$altura = 1.81;
$nome = "Artur Fidelis";
$casado = true;

$numero = 50;

define('CONFIG', 1500);

// echo CONFIG;

function calc(){
    global $numero;
    echo $numero;
}

$cadastro = array("cliente1" => "Artur", "cliente2" => "Ricardo");
$cadastro1 = array(
    "cliente1" => array(
        "nome" => "Artur",
        "idade" => "23",
),
    "cliente2" => array(
        "nome" => "Ricardo",
        "idade" => "30",
),

);

// var_dump($cadastro1);
 echo $cadastro1["cliente1"]["nome"];

 ?>