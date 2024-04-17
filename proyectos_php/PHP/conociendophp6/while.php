<!DOCTYPE html>
<html>
    <head>
    <title> While/Mientras </title>
    <meta charset="utf8">
    </head>
    <body>
        <?php
        //declaramos la variable
        $numeros = 0;
        //mientras la variable sea menor que 10 se realizara las sentencias correspondientes
        while($numeros < 20){
            echo 'numero = '.$numeros.'</br>';
            //la instruccion ++ sera incrementado en 1
            //el ciclo volvera a repetirse hasta que la variable numero sea igual a 10
            $numeros++;
        }
        //tener en cuenta no crear estructuras repetitivas que se ejecuten infinitamente
        ?>
    </body>
</html>