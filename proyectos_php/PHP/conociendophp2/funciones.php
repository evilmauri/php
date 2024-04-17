<!DOCTYPE html>
<html>
    <head>
        <title>Funciones PHP</title>
        <meta charset="utf8">
        <body>
            <?php
            //declaracion de la funcion
            function mostrarTexto($texto){
                echo '<strong>El texto a mostrar es gracias a: </strong>';
                echo $texto;
            };
            //llamado de la funcion.
            mostrarTexto('Mauricio Gonzalez');
            ?>
        </body>

    </head>

</html>