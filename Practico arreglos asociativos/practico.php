<?php
 $videojuego=[
    "titulo" => " The Legend of Zelda ",
    "precio" => 50,
    "año"    => 1986,
    "consola" => "NES"
 ];

$videojuego["unidades en stock"]=10;
$videojuego["está en venta"]=true;


foreach ($videojuego as $videojuegos) {
    echo $videojuegos.'<br>' ;
}

$Inventario=[
        "The Legend Of Zelda" => [ 
        "precio" => 50,
        "año"    => 1986,
        "consola" => "NES",
        "unidades en stock" => 15,
        "está en venta" => true
        ],

        "Super Mario Broos. 3" =>[
        "precio" => 45,
        "año"    => 1988,
        "consola" => "NES",
        "unidades en stock" => 15,
        "está en venta" => true
        ],

        "Chrono trigger" => [
        "precio" => 80,
        "año"    => 1995,
        "consola" => "SNES",
        "unidades en stock" => 5,
        "está en venta" => true
        ]
];


    echo $Inventario["Chrono trigger"]["precio"];
?>