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
    <?php include_once "require.php" ?>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    
</body>
</html>