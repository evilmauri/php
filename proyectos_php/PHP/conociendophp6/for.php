<!DOCTYPE html>
<html>
    <head>
    <title> Desde/FOR </title>
    <meta charset="utf8">
    </head>
    <body>
        <?php
        //si se cumple la condicion que se realice la sentencia
        //en caso contrario solo se ejecutara justo despues del cierre del for
        //la diferencia con for es que define el valor inicial y el incremento en la misma instruccion
        for($numeros = 0; $numeros < 10; $numeros++){
            echo 'Numeros = '.$numeros.'</br>';
        }
        ?>
    </body>
</html>