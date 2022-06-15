<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    <h1>Array</h1><hr>
    <?php

    $personas = array('Erwin', 'Keily', 'Kaely', 'Bryan', 'Fátima', 'Imelda', 'Pedro');
    
    echo "<pre>";
    print_r($personas);
    echo "</pre>";

    echo "Hay : " . count($personas) . " personas en el array";

    ?>

<h1>Navegación en el Array</h1><hr>
    <?php

    // Se puede utilizar el ciclo for o la función foreach

    foreach($personas as $persona){
        echo $persona . "</br>";
    }

    ?>

<h1>Navegación en el Array con keyvalue</h1><hr>
    <?php

$personas = array('Erwin' => 38, 'Keily' => 9, 'Kaely' => 34, 'Bryan' =>31, 'Fátima' => 34, 'Imelda' => 63, 'Pedro' => 31);

    foreach($personas as $key => $value){
        echo $key . " tiene " . $value . " años" . "</br>";
    }

    // tambien se puede hacer de esta manera

    foreach($personas as $key => $value){
        echo "$key tiene $value";
    }

    ?>

<h1>Manejo de strings</h1><hr>
    <?php
    
    $cadena = "Los colores";
    $cadena_sin_espacios = "      Los colores  ";

    echo strlen($cadena); // imprime el numero de caracteres
    echo "</br>";
    echo strlen(ltrim($cadena_sin_espacios)); //sin espacios de lado izquierdo
    echo "</br>";
    echo strlen(rtrim($cadena_sin_espacios)); //sin espacios de lado derecho
    echo "</br>";
    echo strlen(trim($cadena_sin_espacios)); //sin espacios de ningun lado

    ?>
<h1>Funciones para imprimir</h1><hr>
    <?php
    
    $nombre = "Erwin Francisco";
    printf("Mi nombre es %s", $nombre); //para imprimir con preformateo tipo python

    $mensaje = "</br> Los Cuadernos";

    echo strtoupper($mensaje); //Función para cambiar a mayusculas
    echo strtolower($mensaje); //Función para cambiar a minusculas
    print_r(explode(' ', $nombre)); //separar palabras de una cadena de texto


    ?>
</body>
</html>