<!DOCTYPE html>
<html>
    <head>
    <title> Hacer/Mientras </title>
    <meta charset="utf8">
    </head>
    <body>
        <?php
        //declaramos la variable
        $numeros= 0;
        //se evalua la condicion
        do{
            echo 'Numero= '.$numeros.'</br>';
            $numeros++;
            //se ejecuta nuevamente
        }while($numeros < 20 );
        ?>
    </body>
</html>