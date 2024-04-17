
        <?php
        //La funcion start, con ella creamos la sesion
        session_start();
        //si la sesion no esta creada, intentara crearlo si no puede, verificara que la variable activo es falsa
        if(!$_SESSION["activo"]){
            header("Location:salir.php?sal=si");
        }
        ?>
