<?php

function valoracion($nombre, $rating){
    echo "El $nombre tiene un raiting de $rating";
}

function concatenar(...$palabras){
    $resultado = "";
    foreach($palabras as $palabra){
        $resultado .= $palabra . " ";
    }
    echo $resultado;
}

concatenar('curso', 'php', '8', 'desde', 'cero'); 