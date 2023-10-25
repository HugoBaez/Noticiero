<?php

    include("conexion.php");

    $nombre = $_REQUEST['nom'];
    $apellidop = $_REQUEST['ap'];
    $apellidom = $_REQUEST['am'];
    $fecha=$_REQUEST['fecha'];
    $mail = $_REQUEST['mail'];
	$user = $_REQUEST['user'];
    $pass = $_REQUEST['pass'];
    print("$fecha");


    $link = Conectar();#Se realiza la conexion
    $query = "SELECT USUARIO FROM usuarios WHERE USUARIO = '".$user."'";

    
    $consulta = mysqli_query($link,$query); #Se verifica la conexion y se hace la consulta

    $datos = mysqli_num_rows($consulta); #valida cuanto datos regreso la consulta
    print("$datos");
    if(!empty($nombre))
    {
       if ($datos == 0) {
            $query2= "INSERT INTO detalles_usuarios(NOMBRE,APELLIDO_PATERNO,APELLIDO_MATERNO,CORREO,FECHA_NACIMIENTO) VALUES('$nombre','$apellidop','$apellidom','$mail','$fecha')";
            print("$query2");
            mysqli_query($link,$query2);
        
            $query2= "INSERT INTO usuarios (USUARIO,PASSWORD) VALUES('$user','$pass')";
            mysqli_query($link,$query2);
            header("location:registro.php?error=0");
        }
        if ($datos == 1) {
            //print("<br> Error al consultar la base de datos, contactar con el Administrador");
            header("location:registro.php?error=1");
        }
        elseif ($datos > 1) {
            //print("<br> El Usuario no existe");
            header("location:registro.php?error=2");
        }
    
    }
    else
    {
        header("location:registro.php");
    }
    


?>