<?php
    include("conexion.php");

	$user = $_REQUEST['user'];
    $pass = $_REQUEST['pass'];


    $link = Conectar();#Se realiza la conexion

    $query = "SELECT USUARIO, PASSWORD FROM usuarios WHERE USUARIO = '".$user."'";

    
    $consulta = mysqli_query($link,$query); #Se verifica la conexion y se hace la consulta

    $datos = mysqli_num_rows($consulta); #valida cuanto datos regreso la consulta

    if ($datos == 1) {
        while ($fila = mysqli_fetch_row($consulta)) {

            if ($fila[1]==$pass) {

                session_start();
                $_SESSION['usuario']=$fila[0];
                header("location:noticias.php");
            }
            else{
                header("location:index.php?err=3");
            }
            
        }
    }
    if ($datos > 1) {
        //print("<br> Error al consultar la base de datos, contactar con el Administrador");
        header("location:index.php?err=2");
    }
    elseif ($datos == 0) {
        //print("<br> El Usuario no existe");
        header("location:index.php?err=1");
    }




?>