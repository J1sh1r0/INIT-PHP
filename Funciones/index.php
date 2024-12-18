<?php

$resultado = 1;

echo "Marca de tiempo:" . time() . "<br>";
echo "Raiz cuadrada de 9:" . sqrt(9) . "<br>";
echo "Numero aleatorio entre 90 y 100: " . rand(90, 100) . "<br>";
echo "Numero pi: " . pi() . "<br>";

for ($i=1; $i <= 9 ; $i++) { 
    $resultado = $resultado * $i;
}
echo "El factorial de 9 es: " . $resultado;
