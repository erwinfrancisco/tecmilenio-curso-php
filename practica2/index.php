<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" src="estilos.css" type="text/css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Practica 2</title>
</head>
<body>
    <h1>Practica No.2 </h1>
    <h2>Curso para el Desarrollo de páginas web</h2>
    <h3>Universidad Tec Milenio</h3>
    <hr>

    <i>Instrucciones:</i><br/><br/>
    <button onclick="menu_alimentos()">A. Menú de Alimentos</button>
    <button onclick="menu_bebidas()">B. Menú de Bebidas</button>
    <hr>

    <?php

    function seleccionar_menu($opcion){
        $opcion = $opcion;

    if($opcion == "alimentos"){
        $menu_alimentos = array("Salmón con esparragos", "Rib Eye con papa al horno", "Tacos de filete", "Tacos Gobernador", "Tostadas de salpicón", "Ostiones estilo Pueblo Viejo", "Molcajete de chicharrón de Rib Eye", "Arrachera con guacamole", "Hamburguesa Angus", "Guacamole especial");

        echo "<h2>Menú de alimentos: <br><hr></h2>";
        
        for($i = 0; $i <=9; ++$i){
            echo $i . ". " . $menu_alimentos[$i];
            echo "<br/>";
        };

    }elseif($opcion == "bebidas"){
        $menu_bebidas = array("Refrescos", "Agua de Jamaica", "Limonada", "Michelada", "Beermato", "Margarita de tamarindo", "Margarita de Piña", "Carajillo", "Mojito Cubano", "Café americano", "Cafe capuccino", "Botella de agua");

        echo "<h2>Menú de bebidas: <br><hr></h2>";
        
        for($i = 0; $i <=11; ++$i){
            echo $i . ". " . $menu_bebidas[$i];
            echo "<br/>";
        };
    }
    }

    ?>

    <script>
        function menu_alimentos(){
            var result ="<?php seleccionar_menu("alimentos"); ?>"
            document.write(result);
        }

        function menu_bebidas(){
            var result ="<?php seleccionar_menu("bebidas"); ?>"
            document.write(result);
        }
    </script>






    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    
</body>
</html>