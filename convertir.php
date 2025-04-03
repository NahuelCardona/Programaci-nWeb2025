<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
$valorDolar = 40;
$cantidadPesos= floatval($_POST["pesos"]); ;
$cantidadDolares=$cantidadPesos/ $valorDolar;
echo "Resultado de la conversión ";
echo "$cantidadPesos pesos equivalen a  $cantidadDolares dolares.";
}else{
    echo "Error de soliciud.";
}
?>