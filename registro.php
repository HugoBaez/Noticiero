
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Resgistro</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="bootstrap/bootstrap-icons.css">
        <link rel="stylesheet" type="text/css" href="css/estilos.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Playfair&#43"; Display: 700,900amp; display="swap">
        <link rel="icon" type="image/png" href="img/icon.png">
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
     <!--Inicio de formulario para registro -->
        <div class="container">
            <div class="principal">
                <div class="row justify-content-center m-3">
                    <h2>Registro</h2>
                    <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <form action="registrar.php" method="post" class="needs-validation" novalidate>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                    <label class="form-label campo">Nombre</label>
                                    <input class="form-control" type="text" name="nom" placeholder="Nombre" pattern="[a-zA-Z]+" required>
                                    
                                    <div class="invalid-feedback">Ingrese correctamente su nombre</div>  
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                    <label class="form-label campo col-6">Apellido Paterno</label>
                                    <input class="form-control" type="text" name="ap" placeholder="Apellido Paterno" pattern="[a-zA-Z]+" required>

                                    <div class="invalid-feedback">Ingrese correctamente su apellido paterno</div>   
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                    <label class="form-label campo">Apellido Materno</label>
                                    <input class="form-control" type="text" name="am" placeholder="Apellido Materno" pattern="[a-zA-Z]+" required>

                                    <div class="invalid-feedback">Ingrese correctamente su apellido materno</div>   
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                    <label class="form-label campo">Fecha de nacimiento</label>
                                    <input class="form-control" type="date" name="fecha"  required>

                                    <div class="invalid-feedback">Complete el campo</div>  
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                    <label class="form-label campo">Correo Electronico</label>
                                    <input class="form-control" type="email" name="mail" placeholder="correo@correo.com" required>

                                    <div class="invalid-feedback">Ingrese correctamente su correo</div> 
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                    <label class="form-label campo">Usuario</label>
                                    <input class="form-control" type="text" name="user" placeholder="Usuario" required>
                                    <div class="invalid-feedback">Complete el campo.</div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                    <label class="form-label campo">Contraseña</label>
                                    <input class="form-control" type="password" name="pass" placeholder="Contraseña" required>
                                    <div class="invalid-feedback">Complete el campo.</div> 
                                </div>
                            </div>
                             
                            
                            <br>
                            <?php
                                if(isset($_REQUEST['error']))
                                {
                                    $error=$_REQUEST['error'];
                                    
                                   if($error == 0)
                                    {

                                        //echo("<script>alert('Se ha registrado con exito ') </script>");
                                        print("<div class='alert alert-success'>Se ha registrado con exito</div>");

                                    }
                                    if($error == 1)
                                    {
                                        //echo("<script>alert('Error, ya exite el usuario ingresado')  </script>");
                                        print("<div class='alert alert-danger'>Error, ya exite el usuario ingresado </div>");

                                    }
                                    if($error == 2)
                                    {
                                        print("<div class='alert alert-danger'>Error con la base de datos consulta la adaministrador </div>");
                                    }
                                }

                            ?>
                            <hr>
                    
                            <div class="row justify-content-center container">

                                <input type="submit" onclick="mialerta();" class="btn btn-success boton p-3 m-3 col-xs-4 col-sm-10 col-md-4 col-lg-4 value="Registrar"> 
                                <a href="index.php" class="btn btn-danger boton p-3 m-3 col-xs-4 col-sm-10 col-md-4 col-lg-4">Salir</a>  
                            </div>

                        </form>
                  
                </div>
            </div>
        </div>
     </div>
     <!--Fin de formulario para registro -->

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
    

    <script>
        //Posiblementes se quite
        function mialerta() {  
            alert("Validación de datos");
        } 
    </script>

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

    <script type="text/javascript" src="css/bootstrap/js/bootstrap.bundle.js"></script>
    </body>
</html> 