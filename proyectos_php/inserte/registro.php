
        <?php
        //Incluir siempre al principio la conexion a base de datos
        include('conexion.php');
        //Confirmacion de la contraseña la cual valida si son identicas la contraseña1 y la contraseña2
        if($_POST['contrasena1'] == $_POST['contrasena2']){
            //Declaramos las variables 
            $rut = $_POST['rut'];
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $email = $_POST['email'];
            $contraseña = md5($_POST['contrasena2']);
            //Relizamos la consulta a la base de datos con sus respectivas variables
            $consulta = "INSERT INTO registros (rut,nombre,apellido,email,contraseña) VALUES ('$rut', '$nombre', '$apellido', '$email', '$contraseña')";
            //Ejecutamos la conexion a la base de datos
            $ejecutar = mysqli_query($conexion,$consulta)or die("No se pudo crear el registro");
            //Validamos el formulario en caso de que sea correcto
            header("Location: formulario.php?valida=si");
        }else {
            //si es erroneo
            header("Location:formulario.php?errornea=si");
        }
        ?>
