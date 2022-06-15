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

    if(isset($_POST['boton_alimentos'])) {
        seleccionar_menu("alimentos");
    }
    
    if(isset($_POST['boton_bebidas'])) {
        seleccionar_menu("bebidas");
    }

    ?>