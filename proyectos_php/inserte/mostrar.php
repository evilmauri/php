<?php
include ('sesion.php');
?>

<!DOCTYPE html> 
<html>
<head>
	<meta charset="UTF-8"/>
	<title>formulario Mostrar PERSONAL</title>
	<link type="text/css" href="estilo.css" rel="stylesheet">

</head>

<body>
	<p>Bienvenido:</p>
	<?php echo $_SESSION['usuario']; ?></br>
	<a href="salir.php?sal=si">Cerrar Sesion</a>
	<h1 text-align='center'>REGISTROS EXISTENTES</h1>
	<br><br>
	<?php
	//incluimos nuestra conexion
	include('conexion.php');
	//realizamos la consulta
	$consulta="SELECT * FROM registros";
	//se ejecuta la conexion con la consulta
	$ejecutar=mysqli_query($conexion, $consulta);

	echo "<table width='80%' text-align='center><tr>";
	echo "<th width='20%'>RUT</th>";
	echo "<th width='20%'>NOMBRE</th>";
	echo "<th width='20%'>APELLIDO</th>";
	echo "<th width='20%'>EMAIL</th>";
	echo "</tr>";

	while($result=mysqli_fetch_array($ejecutar)){
		//Obtenemos los datos de la tabla "registros" y mostrara la tabla en HTML
		echo "<tr>";
		echo '<td width=20%>'.$result['rut'].'</td>';
		echo '<td width=20%>'.$result['nombre'].'</td>';
		echo '<td width=20%>'.$result['apellido'].'</td>';
		echo '<td width=20%>'.$result['email'].'</td>';
		echo "</tr>";
	}
	echo "</table></br>";

	
	?>

</body>
</html>