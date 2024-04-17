<!DOCTYPE html>
<html>
    <head>
    <title> Insertar PHP en codigo HTML </title>
    <meta charset="utf8">
    </head>
    <body>
        <?php
        $norte = 5;
        $centro = 4;
        $sur = 6;
        $total_regiones = $norte+$centro+$sur;
        $Texto = "Chile esta dividido en : ";

        echo "$Texto $total_regiones Regiones
        </br></br>";
        echo "$norte en el norte. </br> $centro en el centro. </br> $sur en el sur. ";

        ?>
    </body>
</html>