<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $edad = intval($_POST["edad"]);
    if($edad >= 11 && $edad <= 19){
        echo "Calificas para la promoción";
    
    }else{
        echo "No calificas para la promoción";
    }
} else {
    echo "Error de solicitud.";
}

?>