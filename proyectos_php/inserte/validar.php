<?php
        //incluir la conexion a base de datos
    include('conexion.php');
        //declaramos las variables con el metodo POST
    $usuario = $_POST['usuario'];
    $pass = md5($_POST['pass']);
        //ejecutamos una consulta para comprobar los datos ingresados
    $consulta = "SELECT * FROM registros WHERE rut = '$usuario' AND contraseña = '$pass'";
    $ejecutar = mysqli_query($conexion, $consulta);
        //la funcion nos devuelve la cantidad de filas que coinciden con la condicion de la consulta
    $resul = mysqli_num_rows($ejecutar);
        //esto quiere decir que si la tabla de la base de datos contiene un fila(regitros)
        //que contenga los datos ingresado devolvera el valor 1 y sera guardado en la variable $resul
    if($resul > 0){
            //creamos la sesion dependiendo si los datos existen en la base de datos
        session_start();
        //Se crean las variables superglobales con valor booleano true
    $_SESSION['activo'] = true;
        //valor de la variable $usuario que corresponde al rut ingresado
    $_SESSION['usuario'] = $usuario;
    if($usuario == '194130678'){
            header("Location:eliminar.php");
    }else if($usuario == '194126743'){
            header("Location:modificar.php");
    }else if($usuario == '153204209'){
            header("Location:mostrar.php");
    }
        
}else{
            //Por si los datos no coinciden, funcion header nos permite redireccionar el flujo del programa a la URL
            header("Location:formulario.php?error=si");
}
?>