

<?php
//incluimos la conexion a la base de datos
include('conexion.php');

//dependera de un usuario y contraseña
$usuario = $_POST['usuario'];
$pass = md5($_POST['pass']);

//realizamos la consulta a la base de datos
$consulta = "SELECT * FROM personal WHERE rut = '$usuario' AND contraseña = '$pass'";
//ejecutamos la conexion y la consulta a nuestra base de atos
$ejecutar = mysqli_query($conexion, $consulta);
//mediante result ejecutaremos el numero de tablas
$resul = mysqli_num_rows($ejecutar) ;
if ($resul > 0) {

		session_start();
		$result = mysqli_fetch_array($ejecutar);
		$_SESSION['activo'] = true;
		$_SESSION['usuario'] = $usuario;
		$_SESSION['cargo']=$result['cargo'];
        $_SESSION['nombre']=$result['nombre'];
        $_SESSION['apellido']=$result['apellido'];
	      //cargos de los cuales se podra iniciar sesion
		if ($result['cargo'] == 'Admin') {
			header("Location:principalAdmin.php");
			

		}else if ($result['cargo'] == 'Bodega') {
			header("Location:principalBodega.php");
			
		}

}else{
	//en caso de que no existan las credenciales nos mostr
	header("Location:login.php?error=si");
}

?>


