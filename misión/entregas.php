<?php
include ('sesion.php');
?>


<!DOCTYPE html> 
<html>
	<head>
		<meta charset="UTF-8"/>
		<title>Entregas</title>
		<link type="text/css" href="estilo.css" rel="stylesheet">

	</head>

	<body>
		<div class="contenedor">
			<div class= "encabezado">
	        	<div class="izq">
	        		<p>Bienvenido/a:<br></p>
	        		<?php echo $_SESSION['nombre'].' '.$_SESSION['apellido']; ?>
	        	</div>

	            <div class="centro">
	            	<a href=principalBodega.php><img src='imagenes/home.png'><br>Home</a>
	            </div>
	            
	            <div class="derecha">
	                <a href="salir.php?sal=si"><img src="imagenes/cerrar.png"><br>Salir</a>
	            </div>
	        </div>

			<h1 text-align='center'>ENTREGAS REALIZADAS</h1>
			<br><br>
			<?php
				include('conexion.php');

				$consulta="SELECT * FROM entregas";
				$ejecutar=mysqli_query($conexion,$consulta);
		
				echo "<table  width='80%' align='center'><tr>";	         	  
				echo "<th width='20%'>RUT</th>";
				echo "<th width='20%'>CÓDIGO DEL PRODUCTO</th>";
				echo "<th width='20%'>CANTIDAD</th>";
				echo "<th width='20%'>FECHA DE ENTREGA</th>";
				echo  "</tr>"; 
		
				while($result=mysqli_fetch_array($ejecutar)){	
	          	
		          echo "<tr>";	         	  
				  echo '<td width=20%>'.$result['rut'].'</td>';
				  echo '<td width=20%>'.$result['cod_producto'].'</td>';
				  echo '<td width=20%>'.$result['cantidad'].'</td>';
				  echo '<td width=20%>'.$result['fecha_entrega'].'</td>';
				  echo "</tr>";
				}
			 	echo "</table></br>";
			?>

	</body>
</html>