 <!--Completar el Código que se requerirá a continuación-->
 <!--Recuperar las variables con los datos ingresados en el formulario. 
  Validar que el rut ingresado no se encuantre en la base de datos.
  Si ya existe un registro vinculado al rut ingresado:
	 Redirigir a crear_personal y entregar mensaje.
  Si no existe:
	 Insertar datos en tabla correspondiente.
	 Redirigir a crear_personal y mostrar mensaje.
Si las contraseñas no existen redirigir a crear_personal y mostrar mensaje. --> 	
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Registro a la base de datos</title>
</head>
<body>
<?php
include ('conexion.php');

if($_POST['contrasena1'] == $_POST['contrasena2']){
    //declaramos las variables
    $rut = $_POST['rut'];
    $nombre = $_POST ['nombre'];
    $apellido = $_POST['apellido'];
    $cargo = $_POST['cargo'];
    $contraseña = md5($_POST['contrasena2']);
    //realizamos la consulta a la base de datos
    $consulta = "INSERT INTO personal(rut,nombre,apellido,cargo,contraseña) VALUES ('$rut', '$nombre', '$apellido', '$cargo', ' $contraseña')";
    //ejecutamos la conexion
    $ejecutar = mysqli_query($conexion, $consulta)or die("No se pudo crear el registro");
    //validamos la creacion del personal
    header("Location:crear_personal.php?valida=si");
}else{
    //en caso de error
    header("Location:crear_personal.php?errornea=si");
}
?>
    
</body>
</html>