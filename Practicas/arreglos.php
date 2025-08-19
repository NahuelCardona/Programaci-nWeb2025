<?php
$arregloVacio=[];

#$arregloVacio [2] = 'algo';
#var_dump($arregloVacio);

#Para comprobar si un valor existe en un array, puedes usar in_array()
#Para contar elementos en un arreglo PHP, se puede utilizar la función count().
#Para comprobar si un valor existe en un array, puedes usar in_array(). Para buscar un elemento y obtener su clave (índice), puedes usar array_search().

$planetas=[];
$planetas[0] = 'Marte';
#var_dump($planetas);
$planetas[1] = 'tierra';
#var_dump($planetas);
$planetas[2] = 'Venus';
#var_dump($planetas);

foreach ($planetas as $planeta) {
    echo $planeta.'<br>' ;
}
?>






