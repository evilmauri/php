<!DOCTYPE html>
<html>
    <head>
    <title> Conexion a Base de Datos </title>
    <meta charset="utf8">
    </head>
    <body>
        <?php
        //generamos la conexion a nuestra base de datos
        $conexion = mysqli_connect("localhost", "root", "")
        //En caso de que no se conecte mostrar el siguiente mensaje
        or die("No conectado </br>");
        echo "Conexion exitosa </br>";
        mysqli_select_db($conexion,"registro_usuarios")
        or die("Base de datos no encontrada </br>");
        echo "Base de datos encontrada </br>";
        ?>
    </body>
</html>