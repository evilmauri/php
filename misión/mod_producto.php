<?php
include ('sesion.php');
?>


<!DOCTYPE html> 
<html>
	<head>
		<meta charset="UTF-8"/>
		<title>Modificar producto</title>
		<link type="text/css" href="estilo.css" rel="stylesheet">

	</head>

	<body>
		<div class="contenedor">
			<div class= "encabezado">
				<div class="izq">
					<p>Bienvenido/a:<br></p>
					<?php 
					 error_reporting(E_ALL  ^  E_NOTICE  ^  E_WARNING ^E_DEPRECATED );
					echo $_SESSION['nombre'].' '.$_SESSION['apellido']; ?>
				</div>

				<div class="centro">

					<?php
						
						if ($_SESSION['cargo']=='Admin') {
								echo "<a href=principalAdmin.php><center><img src='imagenes/home.png'><br>Home<center></a>";
						}else {
								echo "<a href=principalBodega.php><img src='imagenes/home.png'><br>Home</a>";
						}
	       			?> 
				</div>
				
				<div class="derecha">
					<!-- La siguiente línea corresponde al links con imagen para finalizar sesión, que redirige a la página salir.php con la varible "sal=si" que destruye la sesión y nos 
					muestra la pagina del login. -->
					<a href="salir.php?sal=si"><img src="imagenes/cerrar.png"><br>Salir</a>
				</div>
			</div>
			<br><h1 text-align="center">PRODUCTOS EXISTENTES</h1><br>
			<?php
				include('conexion.php');

				$consulta="SELECT * FROM productos";
				$ejecutar=mysqli_query($conexion,$consulta);
			
				echo "<table  width='80%' align='center'><tr>";	         	  
				echo "<th width='10%'>CODIGO PRODUCTO</th>";
				echo "<th width='20%'>DESCRIPCIÓN</th>";
				echo "<th width='10%'>STOCK</th>";
				echo "<th width='20%'>PROVEEDOR</th>";
				echo "<th width='20%'>FECHA DE INGRESO</th>";
				echo  "</tr>"; 
			
				while($result=mysqli_fetch_array($ejecutar)){	
		          	
		          echo "<tr>";	         	  
				  echo '<td width=10%>'.$result['cod_producto'].'</td>';
				  echo '<td width=20%>'.$result['descripcion'].'</td>';
				  echo '<td width=20%>'. $result['stock'].'</td>';
				  echo '<td width=20%>'.$result['proveedor'].'</td>';
				  echo '<td width=20%>'.$result['fecha_ingreso'].'</td>';
				  echo "</tr>";
				}
				echo "</table></br>";
			?>


			<div class="encabezado">
	                <h1>Modificar producto</h1>
	        </div>

	        <div class="formulario">

	            <form name="actualizar" method="post" action="" enctype="application/x-www-form-urlencoded">
	           		<div class="campo">
	               		<p>Para actualizar el stock de un producto ingresa el código del producto y la cantidad que deseas agregar. Para quitar deber ingresar la cantidad anteponiendo el signo menos (-) a la cantidad</p><br><br>

	                    <label name="Seleccionar">Ingresa el código del producto que deseas actualizar:</label>
			 			<input name='seleccionar' type="text" required>
	                </div>

	                <div class="campo">
	                    <div class="en-linea izquierdo">
	                        <label for="descrip">Stock:</label>
	                        <input type="number" name="stock" required/>
	                    </div>

	                    <div class="en-linea">
	                        <label for="apellido">Stock:</label>
	                        <input type="submit" name="actualiza" value="Actualizar" required/>
	                    </div>
	                </div>

	            </form>

	         <!--Completar el Código que se requerirá a continuación--> 	

					<!--Se realiza la verificación del boton sumbit "actualiza" y se requiere:
					Recuperar las variables con los valores ingresados.
					Actualizar stock del producto seleccionado.
	            	Redirigir a la misma página para visualizar los cambios. -->

					<?php 

					if (isset($_POST['actualiza'])) {
						$seleccionar = $_POST['seleccionar'];
						$stock = $_POST['stock'];
						$consulta1 = mysqli_fetch_array(mysqli_query($conexion,"SELECT * FROM productos WHERE cod_producto = '$seleccionar'"));
						$stock = $stock+$consulta1['stock'];
						$consulta2 = "UPDATE productos SET stock = '$stock' WHERE cod_producto = '$seleccionar'";
						$ejecutar = mysqli_query($conexion, $consulta2);

						header("Location:mod_producto.php");

					
					}

					 ?>
	            	


	            <form name="modificar" method="post" action="" enctype="application/x-www-form-urlencoded">

	                <div class="campo">
	                    <label name="Seleccionar">Ingresa el código del producto que deseas modificar:</label>
			 			<input name='seleccionar' type="text" required>
	                </div>

	                <div class="campo">
	                    <label for="descrip">Descripción:</label>
	                    <input type="text" name="descripcion" required/>
	                </div>

	                <div class="campo">
	                    <label for="cargo">Proveedor:</label>
		                <input type="text" name="proveedor" required/>
	                </div>

	                <div class="campo">
	                    <label for="cargo">Fecha ingreso:</label>
		                <input type="date" name="fecha" required/>
	                </div>

	                <div class="botones">
	                    <input type="submit" name="modificar" value="Modificar"/>
					</div>
				</form>

				
				
				 <!--Completar el Código que se requerirá a continuación--> 
				 <!--Se realiza la verificación del boton submit "modificar" y se requiere:	
				 Recuperar las variables con los valores ingresados.
				 Realizar modificación de datos en la tabla correspondiente. 
				 Redirigir el flujo a esta misma página para visualizar los cambios-->
				<?php 
				//verificacion del boton submit
					if (isset($_POST['modificar'])) {
						//recuperamos las variables
						$seleccionar = $_POST['seleccionar'];
						$descripcion = $_POST['descripcion'];
						$proveedor = $_POST['proveedor'];
						$fecha = $_POST['fecha'];
						//generamos la consulta a la base de datos
						$consulta = "UPDATE productos SET descripcion = '$descripcion', proveedor = '$proveedor', fecha_ingreso = '$fecha' WHERE cod_producto = '$seleccionar'";
						//Ejecutamos la consulta
						$ejecutar = mysqli_query($conexion, $consulta);
						//nos redirecciona a la misma
						header("Location:mod_producto.php");
					
                	}
					
						
				?>

			</div>
		</div>
	</body>
</html>