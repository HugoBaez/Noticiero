<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="css/Login.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Playfair&#43"; Display: 700,900amp; display="swap">
    <link rel="icon" type="image/png" href="img/icon.png">
    <title>Login</title>
</head>
<body>
    <!--Inicio de Cabecera -->
    <header>
        <div class="cabecera">
            <div class="p-3">
                <a href="javascript:location.reload()" class="enlace"><img src="img/logo.png" class="logo"></a>
            </div>
           
        </div>
    </header>
    
 <!--Fin de Cabecera -->
    <!--Login-->
    <div class="container marco">
        <div class="marcoB">
                <div class="row">
                    <div class="col-12">
                        <form action="validar.php" method="post" class="needs-validation" novalidate>
                            <div class="separacionB">
                                <label class="label-login"><h2>Inicia sesión</h2></label>
                            </div>
                            
                            <div class="form-group input-group mb-2 separacion">
                                <input type="text" class="form-control" name="user" placeholder="Usuario" required>
                                <div class="invalid-feedback ">Complete el campo.</div>
                            </div>

                            <div class="form-group input-group mb-2 separacion">
                                <input type="password" class="form-control" name="pass" placeholder="Contraseña" required>
                                <div class="invalid-feedback ">Complete el campo.</div>
                            </div>
                            
                            

                            <div class="d-grid separacionB">
                                <input type="submit"  class="btn boton mb-2" value="Iniciar sesión"> 
                
                            </div>
                            <div class="form-check col-0">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                  <p>Recuérdame</p>
                                </label>
                            </div>
                            <?php
                                 if(isset($_REQUEST['err']))
                                 {
                                     $err=$_REQUEST['err'];
                                    if($err == 1)
                                    {
                                        //echo("<script>alert('El usuario no exite') </script>");
                                        print("<div class='alert alert-danger'>El usuario no exite</div>");
                                    }
                                    if($err == 2)
                                    {
                                        //echo("<script>alert('Error al consultar la base de datos, contactar al Administrador') </script>");
                                        print("<div class='alert alert-danger'>Error al consultar la base de datos, contactar al Administrador</div>");
                                    }
                                    if($err == 3)
                                    {
                                        print("<div class='alert alert-danger'>Contraseña Incorrecta</div>");
                                    }
                                    if($err == 4)
                                    {
                                        print("<div class='alert alert-danger'>Trato de ingresar a una pagina restringida</div>");
                                    }
                                 }
                               
                            ?>
                            <div class="texto separacion">
                               ¿Primera vez aquí? <a href="registro.php" class="enlace">Registrate ahora</a>
                            </div>
                             <!--Agregar despues
                            <div class="contraseña col-12">
                                <a href="#" class="enlace ">Olvidó Contraseña ?</a>
                            </div>-->
                        </form>
                    </div>
                </div>
        </div>
        <br><br>
    </div>
    <!--Fin Login-->
    <!--Inicio Pie de Pagina-->
    <footer class="text-center text-white" style="background-color: #1C252F;">
    <div class="container p-4 pb-0 mt-5">
      <section class="mb-4">


        <a class="btn btn-outline-light btn-floating m-1" href="https://www.facebook.com/" role="button"><i class="bi bi-facebook"></i></i></a>


        <a class="btn btn-outline-light btn-floating m-1" href="https://twitter.com/" role="button"><i class="bi bi-twitter"></i></i></a>


        <a class="btn btn-outline-light btn-floating m-1" href="https://www.google.com/" role="button"><i class="bi bi-google"></i></i></a>


        <a class="btn btn-outline-light btn-floating m-1" href="https://www.instagram.com/" role="button"><i
            class="bi bi-instagram"></i></i></a>


        <a class="btn btn-outline-light btn-floating m-1" href="https://mx.linkedin.com/" role="button"><i class="bi bi-linkedin"></i></i></a>
      </section>

    </div>

    <div class="text-center p-3" style="background-color: #141b24">
      © 2022 Copyright:
      <a class="text-white" href="javascript:location.reload()">notivica.com</a>
    </div>
  </footer>
   <!--Fin Pie de Pagina-->
    
     <!--Script para validar-->
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function () {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function (form) {
            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
                }

                form.classList.add('was-validated')
            }, false)
            })
        })()
    </script>
    <!--Script para validar-->
    <script type="text/javascript" src="css/bootstrap/js/bootstrap.bundle.js"></script>
</body>
</html>