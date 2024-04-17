<?php
include ('sesion.php');
?>

<!DOCTYPE html> 
<html>
<head>
    <meta charset="UTF-8"/>
    <title>formulario modificar PERSONAL</title>
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

	echo "table width='80%' text-align='center><tr>";
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

		<div class="encabezado">
                <h1>Modificar registro</h1>
            </div>

            <div class="formulario">
                <form name="registro" method="post" action="" enctype="application/x-www-form-urlencoded">

                	<div class="campo">
                        <label name="Seleccionar">Ingresa el Rut del registro a modificar:</label>
		 				<input name='seleccionar' type="text" required>
                    </div>

                    <div class="campo">
                        <label for="rut">RUT:</label>
                        <input type="text" name="rut" required/>
                    </div>

                    <div class="campo">
                        <div class="en-linea izquierdo">
                            <label for="nombre">Nombre:</label>
                            <input type="text" name="nombre" required/>
                        </div>

                        <div class="en-linea">
                            <label for="apellido">Apellido:</label>
                            <input type="text" name="apellido" required/>
                        </div>
                    </div>

                    <div class="campo">
                        <label for="email">Correo electrónico:</label>
                        <input type="email" name="email" required/>
                    </div>

                    <div class="botones">
                        <input type="submit" name="modificar" value="Modificar"/>
					</div>
				</form>
			    <?php
                //campos del formulario para modificar
                //la funcion isset verifica si la variable a sido creada
                if(isset($_POST['modificar'])){
                    $seleccionar=$_POST['seleccionar'];
                    $rut = $_POST['rut'];
                    $nombre = $_POST['nombre'];
                    $apellido = $_POST['apellido'];
                    $email = $_POST['email'];
                    //se realizara la consulta a la base de datos
                    //agregamos la entrada para ingresar el rut a modificar
                    $consulta = "UPDATE registros SET rut = '$rut', nombre = '$nombre', apellido = '$apellido', email = '$email' WHERE rut = '$seleccionar'";
                    //ejecutamos la consulta
                    $ejecutar = mysqli_query($conexion, $consulta);

                    header("Location:modificar.php");
                };

                ?>
            

			    
			</div>
		</div>
</body>
</html>		