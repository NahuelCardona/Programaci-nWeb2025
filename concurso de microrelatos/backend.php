<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $cantidadPalabra= $_POST['texto'];
    $arregloPalabras= explode(" ",$cantidadPalabra);
    print_r($arregloPalabras);

    count($cantidadPalabra);
    print_r($cantidadPalabra);
    if($cantidadPalabra > 700){
        
    }

}
?>