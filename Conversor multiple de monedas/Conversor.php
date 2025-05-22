<?php 
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $cantidad = intval (value: $_POST['cantidad']);
    $moneda = $_POST['moneda'];

   
        $valoresMonedas=[
        40,
        43,
        8,
        "hola"
    ];

        var_dump($valoresMonedas);
   
  
   $cantidadTotalDolares = $cantidad * $valoresMonedas[0];
     $cantidadTotalReales = $cantidad *$valoresMonedas[1] ;
     $cantidadTotalEuros = $cantidad * $valoresMonedas[2];
     echo "Conversión: ";

     if ($moneda == "USD") {
        echo "La cantidad de dolares es: " . $valoresMonedas[0];
     } else if ($moneda == "EUR") {
        echo "La cantidad de euros es: " . $valoresMonedas[1];
     } else if ($moneda == "BRL") {
        echo "La cantidad de reales es: " . $valoresMonedas[2];
     } else {
        echo "error";
     }
    

}

?>