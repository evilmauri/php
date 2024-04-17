<!DOCTYPE html>
<html>
    <head>
    <title> Eliminacion a Base de Datos </title>
    <meta charset="utf8">
    </head>
    <body>
	<?php
include('conexion.php');

$usuario = $_POST['usuario'];
$pass = md5($_POST['pass']);

$consulta = "SELECT * FROM registros WHERE rut = '$usuario' AND contraseña = '$pass'";

$ejecutar = mysqli_query($conexion, $consulta);

$resul = mysqli_num_rows($ejecutar);

if ($resul > 0) {
		session_start();

		$_SESSION['activo'] = true;
		$_SESSION['usuario'] = $usuario;

		if ($usuario == '194130678') {
			header("Location:eliminar.php");

		}else if ($usuario == '153204209') {
			header("Location:modificar.php");

		}else if ($usuario == '123456789') {
			header("Location:mostrar.php");
		}

}else{
	header("Location:formulario.php?error=si");
}
        
        ?>
    </body>
</html>