
        <?php
        //cerramos la sesion creada en caso de que la variable sal sea a si
        if($_GET['sal'] == 'si'){
            session_start();
            session_destroy();
            header("Location:formulario.php");
        }
        ?>
