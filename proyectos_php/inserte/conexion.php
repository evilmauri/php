<?php

$conexion = mysqli_connect("localhost", "root", "")
or  die("no conectado </br>");

mysqli_select_db($conexion,"registro_usuarios") or die("Base de Datos no encontrada </br>");

?>