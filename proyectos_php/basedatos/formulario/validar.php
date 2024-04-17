<!DOCTYPE html>
<html>
    <head>
    <title> Validando Datos </title>
    <meta charset="utf8">
    </head>
    <body>
        <?php
        //incluir la conexion a base de datos
        include('conexion.php');
        //declaramos las variables con el metodo POST
        $usuario = $_POST['usuario'];
        $pass = $_POST['pass'];
        //ejecutamos una consulta para comprobar los datos ingresados
        $consulta = "SELECT * FROM registros WHERE rut = '$usuario' AND contraseña = '$pass'";
        $ejecutar = mysqli_query($conexion, $consulta);
        //la funcion nos devuelve la cantidad de filas que coinciden con la condicion de la consulta
        $resul = mysqli_num_rows($ejecutar);
        //esto quiere decir que si la tabla de la base de datos contiene un fila(regitros)
        //que contenga los datos ingresado devolvera el valor 1 y sera guardado en la variable $resul
        if($resul > 0){
        while($resul = mysqli_fetch_array($ejecutar)){
            echo $resul['rut'].'-'.$resul['nombre'].'-'.$resul['apellido'].'-'.$resul['email'].'-'.$resul['contraseña'];
        }
        }else{
            //Por si los datos no coinciden, funcion header nos permite redireccionar el flujo del programa a la URL
            header("Location:formulario.php?error=si");
        }
        ?>
    </body>
</html>


