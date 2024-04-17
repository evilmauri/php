<!-- Conexión a la base de datos,
codificación de caracteres,
seleccion de base de datos. -->
<?php 


$conexion = mysqli_connect("localhost", "root", "") or  die("no conectado");
echo "Conexion exitosa </br>";


mysqli_select_db($conexion, "gestion_bodega") or die("Base de Datos no encontrada </br>");
echo "Base de datos encontrada </br>";

 ?>