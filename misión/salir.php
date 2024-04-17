
<!-- Verifica que la variable sal sea igual a si.
cierra la sesión. 
Redirige el flujo a la pagina del login --> 
<?php 

if ($_GET['sal']=='si'){

	session_start();
	session_destroy(); //cerrar sesion
	header("Location:login.php");

}
 ?>