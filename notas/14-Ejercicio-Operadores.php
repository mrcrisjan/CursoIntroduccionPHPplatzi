<?php

// Calcula el resultado de 32+3 y 3(2+3). Escribe el procedimiento 
// que empleaste en la sección de discusiones.

echo "Ejercicio 1 <br/>";

$var1 = 32;
$var2 = 3;
$var3 = 2;

$suma1 = $var1 + $var2;
$suma2 = $var2 * ($var3 + $var2);

echo "Resultado suma 1: $suma1 <br/>";
echo "Resultado suma 2: $suma2 <br/>";

echo "Ejercicio 2 <br/>";

/*
Tomando en cuenta que tenemos una variable llamada $valor, escribe en 
la sección de discusiones ¿Cómo sería un condicional para las 
siguientes opciones?

$valor es mayor que 5 pero menor que 10
$valor es mayor o igual a 0 pero menor o igual a 20
$valor es igual a “10” asegurando que el tipo de dato sea cadena
$valor es mayor a 0 pero menor a 5 o es mayor a 10 pero menor a 15
*/

$valor = "";

if ( 5 < $valor && $valor < 10 ) {
    //the code
};

if ( 0 <= $valor && $valor <= 20 ){
    //the code
};

if ( $valor === "10" ){
    //the code
};

if ( (0 < $valor && $valor < 5) || ( 10 < $valor && $valor < 15 ) ) {
    //the code
};

?>