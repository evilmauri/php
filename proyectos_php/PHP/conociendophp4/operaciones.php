<!DOCTYPE html>
<html>
    <head>
    <title> Operaciones </title>
    <meta charset="utf8">
    </head>
    <body>
        <?php
        //declaramos la funcion
        function operaciones($var1, $var2, $var3){
            //creamos una variable
            $resultado = 0;
            //si la variable2 hace el llamado de la funcion, suma, resta o division
            if($var2 == "+"){
                $resultado = $var1 + $var3;
                echo "El resultado de: $var1 + $var3 = ";
            }else if($var2 == "-"){
                $resultado = $var1 - $var3;
                echo "El resultado de: $var1 - $var3 = ";
            }else if($var2 == "/"){
                $resultado = $var1 / $var3;
                echo "El resultado de: $var1 / $var3 = ";
            }
            //variable de retorno
            return $resultado;
        }
        //Mostrara los valores de la variables var1 y var3
        $r = operaciones(12, "/", 3);
        echo "$r </br>";
        $r2 = operaciones(20, "-", 4);
        echo "$r2 </br>";
        $r3 = operaciones($r, "+", $r2);
        echo "$r3 </br>";
        ?>
    </body>
</html>