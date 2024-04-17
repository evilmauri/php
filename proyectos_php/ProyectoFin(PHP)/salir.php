<?php
if ($_GET['sal']=='si') {
	session_start(); 
	session_destroy(); // Cerrar sesión
	header("Location:formulario.php");
	
}
?>