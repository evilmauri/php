<!DOCTYPE html>
<html>
    <head>
    <title> Consultas a la Base de Datos </title>
    <meta charset="utf8">
    </head>
    <body>
        <?php
        //incluimos nuestra conexion a la base de datos
        include('conexion.php');
        //declaramos nuestra variable para dicha consulta
        //INSERTAR
        //$consulta = "INSERT INTO registros(rut,nombre,apellido,email,contraseña) VALUES ('206954239', 'Maximiliano', 'Vega', 'maxiveg@gmail.com', 'MC2024')";
        // $ejecutar = mysqli_query($conexion, $consulta) or die('Error al insertar datos');
        //echo "Se insertaron los datos correctamente";
        
        //ACTUALIZAR
        //$consulta = "UPDATE registros SET nombre = 'Luis', contraseña = 'LU2024', email = 'luisvega@gmail.com' WHERE rut = '206954239'";
        // $ejecutar = mysqli_query($conexion, $consulta) or die('Error al modificar los datos');
        //echo "Se modificaron los datos correctamente";
        
        //ELIMINAR
        //$consulta = "DELETE FROM registros WHERE rut = '206954239'";
        //$ejecutar = mysqli_query($conexion, $consulta) or die('Error al eliminar los datos');
        //echo "Se eliminaron los datos correctamente";

        //CONSULTA DE SELECCION
        $consulta = "SELECT * FROM registros";
        $ejecutar = mysqli_query($conexion, $consulta) or die("No se pudo realizar la consulta </br>");
        echo "Consulta exitosa </br>";
        //La funcion FETCH recupera los datos de un array asociativo
        //La sentencia WHILE recorremos todos los datos hasta que encuentre una fila vacia
        while($registro = mysqli_fetch_array($ejecutar)){
            echo $registro["rut"]." - ".$registro["nombre"]." - ".$registro["apellido"]." - ".$registro["email"].'</br>';
        }
        ?>
    </body>
</html>