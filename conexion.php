<?php

    function Conectar()
    {
        $servername = 'localhost';
		$database = 'noticiero';
		$username = 'root';
		$password = '';

		//conexion

		if (!($conn = mysqli_connect($servername, $username, $password)))
		{
			print("Error en la conexion <br>");
			exit();
		}
		else
		{
			print("Conexion exitosa. <br>");
		}
        print("<br>");

        //Selecionar BD
        if (!mysqli_select_db($conn, $database))
		{
			print("Error al seleccionar la BD <br>");
			exit();
		}
		else
		{
			print("Base de Datos Seleccionada <br>");
		}

		return $conn;

    }
?>