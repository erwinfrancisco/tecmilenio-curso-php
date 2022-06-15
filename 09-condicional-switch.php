<?php

$page = "Fuck";

switch($page){

    case "Home";
    echo "Es correcto estás en Home";
    break;
    case "Galería";
    echo "Estas en galería no en Home";
    break;
    default:
    echo "Lo siento " . $page . " es una Sentencia desconocida";
}

?>