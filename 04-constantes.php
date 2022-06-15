<?php

/*Las constantes son hermanas de las variables, también son contenedores que guardan información 
para usarse en la ejecución de un programa, pero la principal diferentica reside en que son muy “celosas” 
y no cambian su información, a excepción de las llamadas constantes mágicas. Una vez que se ha definido 
el valor de una constante, éste no puede cambiar por el resto de la ejecución del programa. */

define("MI_CONSTANTE", "este_es_mi_valor"); //En primer termino se define el nombre de la constante, y despues el valor)
$callConstant = MI_CONSTANTE; //Se agrega una variable con la constante Mi Constante sin comillas
echo $callConstant; //regresa este_es_mi_valor

/*Para declarar una constante se utiliza la función define(), luego entre los paréntesis se nombra la constante,
 como etiqueta y para identificaciónse deben nombrar las constantes con mayúsculas, con las mismas reglas de las 
 variables, pero sin el signo $ y finalmente se le asigna el valor.

En el ejemplo creamos una variable que utiliza el valor de la constante, volvemos a ver que no tiene el signo 
de $ al momento de la asignació<n class=""></n>
*/
echo "</br>";
echo "<h2>Práctica de constantes</h2>";
define ('MI_MASCOTA', 'Gatos rojos');
    echo 'Mi mascota favorita son los '. MI_MASCOTA."\n";
echo "</br>";
echo "Código: </br>";
echo "define ('MI_MASCOTA', 'Gatos rojos');\r\necho 'Mi mascota favorita son los '. MI_MASCOTA;";
?>