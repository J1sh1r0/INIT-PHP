<?php

$i = 1;
$base = 2;
$exp = 5;
$resultado = 1;
$filas = 10;
$nombres = ['Dominic', 'Adrian','Adamaris','Dannas'];



while ($i <= 10){
    echo "Hola mundo WHILE $i <br>";
    $i++;
}
echo "Has salido del bucle WHILE <br>";

do{
    echo "Hola mundo DO WHILE $i <br>";
    $i++;
}while ($i <= 10);
echo "Has salido del bucle DO WHILE <br>";

while ($i <= $exp) {
    $resultado = $resultado * $base;
    $i++;
}
echo "El valor es $base elevado a la $exp es: $resultado <br>";
echo "Has salido del bucle WHILE <br>";

for ($i = 0; $i <= $exp; $i++){
    $resultado = $resultado * $base;
}
echo "El valor es $base elevado a la $exp es: $resultado <br>";
echo "Has salido del bucle FOR <br>";

//*
//** 
//*** 

for ($i = 1; $i <= $filas; $i++){
    for ($j = 1; $j <= $i; $j++){
        echo "*";
    }
    echo "<br>";
}

foreach ($nombres as $indice => $nombre) {
    echo $nombre . "se encontraba el indice $indice <br>";
}