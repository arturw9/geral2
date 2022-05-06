<?php

$valor = 10;

if($valor == 10):
//    echo 'O valor é igual a 10';
elseif ($valor > 10):
//    echo "O valor é maior que 10";
else:
//    echo "O valor é menor que 10";
endif;

$contador = 1;
//while ($contador <= 10){
//    echo $contador.PHP_EOL;
//    $contador++;
//}

do{
//    echo $contador.PHP_EOL;
    $contador++;
} while ($contador <= 10);

 for ($num=1; $num <=10; $num++){
     if ($num == 5) continue;
     echo $num.PHP_EOL;
 }

 //foreach = para cada
 $nome = array("Artur", "Andrade", "Fidelis");
 foreach ($nome as $item){
//     echo $item.PHP_EOL;
 }

//foreach = para cada
$nome = array("nome1"=>"Artur", "nome2"=>"Andrade", "nome3"=>"Fidelis");
foreach ($nome as $chave => $valor){
//    echo $chave."-".$valor.PHP_EOL;
}

//switch = alterne
$valor = 10;
switch ($valor){
    case 10:
        echo "valor é 10";
        break;
    case 15:
        echo "valor é 15";
        break;
    case 20:
        echo "valor é 20";
        break;
    default:
        echo "Valor não reconhecido";
}