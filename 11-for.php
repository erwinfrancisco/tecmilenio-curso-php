<?php

/*
for (variable_inicializada ; condicion_a_cumplir; expresion_modificadora) {
  código a ejecutar cada vez
}"
*/



for($i=1;$i<15;++$i){
    echo "<br/>Repetición No. " . $i . "<br/>";
};



echo "<hr/>";

$comida = array ("Pasta Arrabiata", "Filete de Atun", "Arrachera Tradicional","Pollo asado", "Tacos al pastor");

for ($i = 0; $i <= 4; ++$i){
    print_r("El menu es: ". $comida[$i] . "<br/>");
}

echo "El menu tiene " . count($comida) . " Platillos gourmet";
?>