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
    <h1>Practica No.3 Include y Require </h1>
    <h2>Include_one y require_one</h2>
    <h2>Curso para el Desarrollo de páginas web</h2>
    <h3>Universidad Tec Milenio</h3>
    <hr>

    <i>Instrucciones:</i><br/><br/>
    <form method="POST">
        <button type="submit" name="boton_alimentos">A. Menú de Alimentos</button>
        <button type="submit" name="boton_bebidas">B. Menú de Bebidas</button>
    </form>
    <hr>

    <!-- Se puede utilizar require, include,  require_once o include_once -->
    <!-- Con esta simple acción, si el programa se encuentra con un include o un include_once que ya se ejecutó y se encuentra con otro igual, simplemente lo ignorará. Utilicemos entonces include_once como regla general.

Ahora bien, la diferencia entre include y require es simple. El comando include solamente intentará incluir el archivo que se le pidió. Independientemente si lo encuentra o no, el programa sigue adelante. La ejecución no se detiene, lo único a lo que podemos aspirar es a una advertencia por parte de PHP.

Por el contrario, para require es muy importante que el archivo que se le pide llegue y se instale en el programa. Si no lo encuentra detiene la ejecución y envía un mensaje de error fatal. La sintaxis es la misma, y al igual que con include, usaremos require_once en lugar del ordinario require. -->
    <?php include_once "require.php" ?>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    
</body>
</html>