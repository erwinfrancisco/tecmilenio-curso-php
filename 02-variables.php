<?php

// Strings
$nombre = "Erwin Flores"."</br>";
echo $nombre;

// Se pueden reasignar las variables
$nombre = "Kaely Pantoja"."</br>";
echo "Ahora imprime este nombre:$nombre";

$su_nombre =$nombre;
echo "Impresión de variable '$su_nombre'"."</br>";

// Variables numéricas

$var1 = 50;
$var2 = 15.5;

echo "Resultado var1= ".$var1."</br>";
echo "Resultado var2= ".$var2."</br>";
echo "El resultado de var1 * var 2 = ".($var1 * $var2)."</br>";

// Arrays

$pelotas_beisbol = array('Wilson', 'Spalding', 'Nike', 'Adidas');
echo "</br>";
print_r($pelotas_beisbol);
echo "</br>El resultado No. 3 es: ".$pelotas_beisbol[3];

// Array de 2 dimensiones

$camisas_deportivas = array
 (
 array("Wilson",200, 24), //array #1
 array("Nike",350, 13),   //array #2
 array("Adidas",400, 43)  //array #3
 );
echo "</br>";
echo('<pre>');
print_r($camisas_deportivas);
echo('</pre>');
echo "</br>";
echo "Marca: ".$camisas_deportivas[0][0].": En stock: ".$camisas_deportivas[0][1].", vendidas: ".$camisas_deportivas[0][2];
  //Devuelve -> Wilson:En stock:200,vendidas:24
?>