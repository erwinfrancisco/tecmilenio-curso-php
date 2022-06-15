<?php
// Operadores lógicos

/*
Los operadores son comandos matemáticos, de cadena, de comparación y lógicos usados para hacer operaciones con 
valores y variables. Por cuestiones de eficiencia, en este curso sólo usaremos los más comunes, no obstante es 
importante que tengas más nociones sobre ellos, por lo que puedes consultar aquí un listado completo de los 
operadores. Más adelante usarás algunos operadores que no se mencionan aquí, pero con la referencia en línea que
 puedes consultar no tendrás problema para identificarlos.

+	Addition	$x + $y	Sum of $x and $y	
-	Subtraction	$x - $y	Difference of $x and $y	
*	Multiplication	$x * $y	Product of $x and $y	
/	Division	$x / $y	Quotient of $x and $y	
%	Modulus	$x % $y	Remainder of $x divided by $y	
**	Exponentiation	$x ** $y	Result of raising $x to the $y'th power
*/

//Operación simple
echo 10 + 20; //regresa 30

$x = 5; //valor original de la variable

$x += 20; // agrega el valor de la derecha al valor de la variable
echo "</br>";
echo $x; //regresa 25

$x -= 10; //decrementa el valor de la derecha al valor de la variable
echo "</br>";
echo $x; // regresa 5
++$x; // incrementa el valor de la variable 1 unidad
--$x; // decrementa el valor de la variable 1 unidad   

echo "<hr>";

$_valor = 5; // asignamos un valor de 5 a la variable _valor
 echo $_valor; //regresa 5
 echo "<br>";
 if ($_valor == 5) echo "<h3>Es correcto!</h3>"; // Es correcto!
 // si _valor es exactamente igual a 5,
 // entonces escribe con header 3 Es correcto!

 /*
 ==

Es igual a...

X == 5

!=

No es igual a...

X != 5

>

Es mayor que...

X > 5

<

Es menor que...

X < 5

>=

Es mayor o igual que...

X >= 5

<=

Es menor o igual que...

X <= 5



 */

 //Asignación de valores en variables
 echo "</br>";
 $y = 10;
 $x += 10; //Incrementa el valor a la derecha de la variable
 $x -= 10; //Resta el valor a la derecha de la variable
++$x;     //Agrega 1 al valor de la variable
--$y;     //Resta 1 al valor de la variable

// OPERADOR HEREDOC <<<
/* 
reserva el espacio blanco y la indentación del texto donde se aplica. El constructor heredoc es 
<<<identificador contenido indetificador
*/

echo "</br>";
echo "Operador Heredoc</br>";
$author = "Albert Einstein";
echo <<<_END
La imaginación es
 más importante  que el
conocimiento
- $author.
_END; //Esta debe de aparecer al principio de la nueva linea y solo este comando

?>