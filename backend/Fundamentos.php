<?php
// Incrustar php
echo"Hola Mundo \n";
$myString ="Cadena de texto";
echo $myString . "\n";
//Concatenar
echo $myString . "\n";
echo gettype($myString) . "\n";
//tipado dinamico
$myString = 13;
echo gettype($myString) . "\n";
$myInt = 12;
$myInt = 12 + 5;
//Solo cambia el valor cuando se asigna
echo $myInt . "\n";
//float
$myFloat = 12.5;
echo $myFloat . "\n";
//double
$myDouble = .5;
echo $myDouble . "\n";
//Al ser un lenguaje de tipado dinamico, no es necesario convertir todas las variables a un mismo tipo
echo $myDouble + $myFloat . "\n";
//PHP imprime 1 si es true y nada si es false
$myBool = false;
echo $myBool . "\n";
$myBool = true;
echo $myBool . "\n";

?>