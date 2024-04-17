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
                
            
            <br><h1 text-align='center'>PRODUCTOS EXISTENTES</h1><br>
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
                  echo '<td width=20%>'.$result['stock'].'</td>';
                  echo '<td width=20%>'.$result['proveedor'].'</td>';
                  echo '<td width=20%>'.$result['fecha_ingreso'].'</td>';
                  echo "</tr>";
                }
                 echo "</table></br>";
            ?>

            <form action="" method="post" text-align='center'>

                <div class="campo">
                    <label name="rut">Rut personal que retira:</label>
                    <input name='rut' type="text">
                </div>

                <div class="campo">
                    <label name="codigo">Código del producto:</label>
                    <input name='codigo' type="text">
                </div>

                <div class="campo">
                    <label name="cantidad">Cantidad:</label>
                    <input name='cantidad' type="text">
                </div>

                <div class="campo">
                    <label name="fecha">Fecha entrega:</label>
                    <input name='fecha' type="date">
                </div>
                
                <div class="botones">
                    <input name='agregar' type="submit" value="Agregar">
                </div>
                
            </form>

            

                 <!--Completar el Código que se requerirá a continuación--> 
                 <!--Se verifica que la variable del boton submit este creada y se requiere:
                 Recuperar las variables con los datos ingresados. 
                 Descontar la cantidad ingresada al stock existente del producto a retirar.
                 Insertar los datos ingresados en la tabla "entregas" de la base de datos. 
                 Redirigir el flujo a esta misma página para visualizar la actualización del stock.-->    

            <?php 
                
               //verificamos el boton submit 
                if (isset($_POST['agregar'])) {
                    //recuperamos las variables
                    $rut = $_POST['rut'];
                    $codigo = $_POST['codigo'];
                    $cantidad = $_POST['cantidad'];
                    $fecha = $_POST['fecha'];
                    //realizamos la consulta para verificar el codigo del producto                    
                    $consulta = mysqli_num_rows(mysqli_query($conexion, "SELECT * FROM productos WHERE cod_producto = '$codigo'"));
                    if($consulta <= 0){
                        echo "<p align='center'>No existe el codigo del producto</p></br>";
                    }else{
                        //realizar otra consulta para verificar el numero de casillas
                        $consulta1 = mysqli_fetch_array(mysqli_query($conexion, "SELECT * FROM productos WHERE cod_producto = '$codigo'"));
                        //restamos la cantidad
                        $stock = $consulta1['stock']-$cantidad;
                        //modificacion del stock
                        $descontar = mysqli_query($conexion,"UPDATE productos SET stock = '$stock' WHERE cod_producto = '$codigo'");
                        //inserta el registro de entrega
                        $insertar = "INSERT INTO entregas (rut, cod_producto, cantidad, fecha_entrega) VALUES ('$rut', '$cod_producto', '$cantidad', '$fecha_entrega')";
                        //ejcutar otra consulta
                        $ejecutar = mysqli_query($conexion, $insertar);
                        //redireccion
                        header("Location:realizar_entrega.php"); 
                    }



                }
             ?>
                
        </div>
    </body>
</html> 