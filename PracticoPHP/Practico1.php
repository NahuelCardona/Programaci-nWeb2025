<?php

$tripulantes =[
    "Luis",
    "BENJA",
    "Nahuel",
    "Pepito"
];

function añadirTripulante($nombre, &$arreglo) {
    $arreglo[]=$nombre;
}

añadirTripulante("jose",$tripulantes);

function evacuartripulante( & $arreglo){
    $cantidad= count($arreglo);
    $posicion= $cantidad-1;

unset($tripulante[$posicion]);

}

function verificartripulante(& $tripulacion){
    
    foreach ($tripulantes as $tripulación) {
    echo $tripulación.'<br>' ;
};

}

foreach ($tripulantes as $tripulación) {
    echo $tripulación.'<br>' ;
};



?>