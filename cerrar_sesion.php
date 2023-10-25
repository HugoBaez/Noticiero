<?php

    session_start();
    session_destroy();
    //echo("<script>alert('Se ha cerrado la sesion')</script>");
    header('Location:index.php');

?>  