<?php

$a = 5;
$b = 5;

/*echo "Primer parrafo <br>";

if ($a < $b) {
    echo "Segundo parrafo <br>";
}else{
    echo "Segundo parrafo editado <br>";
}
echo "Tercer parrafo <br>";

if ($a > $b) {
    echo"El valor de a es mayor que el valor de b <br>";
}elseif($a < $b){
    echo "El valor de a es menor que el valor de b <br>";
}else{
    echo "El valor de a es igual que el valor de b <br>";
}*/

$valor = $a > $b ? 'mayor' : ( $a < $b ? 'menor' : 'igual');

echo "El valor de a es $valor que el valor de b";