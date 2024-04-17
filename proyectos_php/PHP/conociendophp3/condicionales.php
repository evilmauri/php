<!DOCTYPE html>
<html>
    <head>
    <title> Condicionales PHP </title>
    <meta charset="utf8">
    </head>
    <body>
        <?php
        //declaramos las variables
        $x=3;
        $y=6;
        //La variable x es menor  o igual a 5 y la variable y es diferente a 7,
        //sera veradero.
        $result=($x <= 5 and $y <> 7);
        //si el valor result es verdadero se cumple
        if($result == true){
            echo 'Se cumple la condicion';
        }else{
            //si es false nose cumple
            echo 'No se cumple la condicion';
        }
        ?>
    </body>
</html>