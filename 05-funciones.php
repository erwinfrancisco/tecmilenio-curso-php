<?php
echo "<h2>Funciones</h2></br>";
echo "<h3>Ejemplo No1:</h3></br><hr>";

function miFecha()
  {
    return date("l F j Y");
  } 
  echo miFecha();

  /*
l -> Representación textual completa del día de la semana.
F -> Representación textual completa del mes.
j -> Día del mes sin 0.  
Y -> Representación de 4 dígitos del año. 

Resultado >>> Thursday June 9 2022
*/

// Ejercicio 1
echo "<hr></br>";
function test() {
    static $count = 0; // asi es...esta es la variable estatica
    $count++; //ya vimos operadores, ¿que hace este?
    echo $count;
 }
 test(); //ejecuta!

 //Ejercicio 2
 echo "<hr></br>";
function test2() {
    static $count = 0; // asi es...esta es la variable estatica
    $count +=4; //ya vimos operadores, ¿que hace este?
    echo $count;
 }
 test2(); //ejecuta!

?>