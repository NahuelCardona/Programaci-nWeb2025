<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $cantidadCaracteres= $_POST['texto'];
    $arregloPalabras= explode(" ",$cantidadCaracteres);
    $cantidadDePalabras= count($arregloPalabras);
    
   
    if($cantidadDePalabras >100 ){
        echo"$cantidadCaracteres <br><br> El relato no cumple con uno de los requisitos debido a que <br> haz superado la cantidad maxima de palabras, vuelve a escribir otro texto. ";
    }else{
        echo " <br> El texto será evaluado por el jurado";
    }

    
   
}
?>