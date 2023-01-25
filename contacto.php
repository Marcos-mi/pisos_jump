<?php
ini_set("display_errors", 1);
ini_set("display_startup_errors",1);
error_reporting(E_ALL);
$pg = "contacto";



if($_POST){
    if($_POST){
        $nombre = $_POST["txtNombre"];
        $correo = $_POST["txtCorreo"];
        $asunto = $_POST["txtAsunto"];
        $mensaje = $_POST["txtMensaje"];
    
        // Varios destinatarios
        $para = "pisosjump@gmail.com";
        $titulo = 'Recibiste un mensaje desde tu Web';
    
        // mensaje
        $cuerpo = "
        Nombre: $nombre <br>
        Correo: $correo <br>
        Telefono: $asunto <br>
        Mensaje: $mensaje
        ";
    
        // Para enviar un correo HTML, debe establecerse la cabecera Content-type
        $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
        $cabeceras .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
    
        // Cabeceras adicionales
        $cabeceras .= 'To: info@pisosjump.com' . "\r\n";
        $cabeceras .= 'From: info@pisojump.com' . "\r\n";
    
        // Enviarlo
        mail($para, $titulo, $cuerpo, $cabeceras);
        header("Location: index.php");
    }
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Contacto</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700;800;900&display=swap" rel="stylesheet"> 
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a9448b5173.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="img/logo_dos.ico" type="image/x-icon">
</head>

<body>
<?php include_once"menu.php" ?> 
    
    <div class="container-fluid page-header d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5 mb-5">
        <h1 class="display-4 text-white mb-3 mt-0 mt-lg-5">Contacto</h1>
        <div class="d-inline-flex text-white">
            <p class="m-0"><a class="text-white" href="index.php">Inicio</a></p>
            <p class="m-0 px-2">/</p>
            <p class="m-0">Contacto</p>
        </div>
    </div>
    <main>
        <div class="container-fluid py-5">
            <div class="container">
                <div class="text-center">
                    <small class="bg-primary text-white text-uppercase font-weight-bold text-center px-1">Formulario de contacto</small>
                    <h1 class="mt-2 mb-5">Por cualquier consulta, no dude en comunicarse con nosotros.</h1>
                </div>
                <div class="row">
                    <div class="col-md-5">
                        <div class="d-flex align-items-center border mb-3 p-4">
                            <i class="fa fa-2x fa-map-marker-alt text-primary mr-3"></i>
                            <div class="d-flex flex-column">
                                <h5 class="font-weight-bold">Ubicación</h5>
                                <p class="m-0">Buenos Aires, Argentina</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center border mb-3 p-4">
                            <i class="fa fa-2x fa-envelope-open text-primary mr-3"></i>
                            <div class="d-flex flex-column">
                                <h5 class="font-weight-bold">Correo electrónico</h5>
                                <p class="m-0">pisosjump@gmail.com</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center border mb-3 mb-md-0 p-4">
                            <i class="fas fa-2x fa-phone-alt text-primary mr-3"></i>
                            <div class="d-flex flex-column">
                                <h5 class="font-weight-bold">Teléfono:</h5>
                                <p class="m-0">1159275923</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">

                        <div class="contact-form">
                            <form  method="post">
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="control-group">
                                            <input type="text" class="form-control p-4" id="txtNombre" name="txtNombre" placeholder="Nombre" required="required" data-validation-required-message="Ingresé su nombre" />
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="control-group">
                                            <input type="email" class="form-control p-4" id="txtCorreo" name="txtCorreo" placeholder="Correo electrónico" required="required" data-validation-required-message="Ingresé su correo electronico" />
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <input type="text" class="form-control p-4" id="txtAsunto" placeholder="Asunto" name="txtAsunto" required="required" data-validation-required-message="Ingresé el asunto" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <textarea class="form-control" rows="5" id="txtMensaje" placeholder="Mensaje"  name="txtMensaje" required="required" data-validation-required-message="Escriba su mensaje"></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div>
                                    <button class="btn btn-primary font-weight-semi-bold px-4" style="height: 50px;" type="submit" id="btnEnviar" name="btnEnviar">Enviar Mensaje</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- Footer-->
   
    <?php include_once"footer.php" ?>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>

    <script src="js/main.js"></script>
</body>


</html>