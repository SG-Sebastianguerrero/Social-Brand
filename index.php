<?php


 ?>


<!DOCTYPE html>
<html lang="es">
    <head>
        <link rel="stylesheet" href="php/registro_usuario.php">
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Social Brand</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- Third party plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">Social Brand</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">Acerca de nosotros</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#services">Servicios</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#registrate">registrate</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Contactanos</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="pages/ingresar.php">Ingresar</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-10 align-self-end">
                        <h1 class="text-uppercase text-white font-weight-bold">Conoce nuestros servicios de crecimiento para tu empresa</h1>
                        <hr class="divider my-4" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-white-75 font-weight-light mb-5">A través de nuestro apoyo podrás maximizar tus ganancias y dar de una forma más efectiva el mensaje que quieras dar a tus clientes</p>
                        <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Conoce más</a>
                    </div>
                </div>
            </div>
        </header>
        <!-- About-->
        <section class="page-section bg-primary" id="about" style="
    background-color: var(--orange);">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="text-white mt-0">¡Tenemos todo lo que necesitas !</h2>
                        <hr class="divider light my-4" />
                        <p class="text-white-50 mb-4">Inicia con nosotros y podrás acceder a ser atendido por nuestros talentosos desarrolladores y
                          diseñadores gráficos que con ayuda de impulsores de marketing, CEO y un enorme equipo de trabajo a tu disposición para tu
                          crecimiento empresarial podremos crear juntos paginas web, logos y campañas publicitarias y porque no todas.</p>
                        <a class="btn btn-light btn-xl js-scroll-trigger" href="#services">Comienza ahora!</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services-->
        <section class="page-section" id="services" >
            <div class="container">
                <h2 class="text-center mt-0">A tu Servicio</h2>
                <hr class="divider my-4" />
                <div class="row">
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <i class="fas fa-4x fa-gem text-primary mb-4"></i>
                            <h3 class="h4 mb-2">Marca personal</h3>
                            <p class="text-muted mb-0">Podemos ayudarte con la creación de logos o con la creación de tu identidad empresarial.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <i class="fas fa-4x fa-laptop-code text-primary mb-4"></i>
                            <h3 class="h4 mb-2">Paginas Web</h3>
                            <p class="text-muted mb-0">Podemos ayudarte con al creación de paginas web informativas sobre tus servicios.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <i class="fas fa-4x fa-globe text-primary mb-4"></i>
                            <h3 class="h4 mb-2">Publicidad</h3>
                            <p class="text-muted mb-0">Te ayudamos con campañas publicitarias para llegar a más personas.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <i class="fas fa-4x fa-heart text-primary mb-4"></i>
                            <h3 class="h4 mb-2">Hecho con amor</h3>
                            <p class="text-muted mb-0">Trabajamos con personas apasionadas de la misma forma lo son nuestros resultados.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Registrate-->
      <section id="registrate" class="registro">
            <div class="estilo-registro">
            <form action="php/registro_usuario.php" class="form"  method="POST">
            <h2 class="text-center mt-0">Registrate</h2>
                  <p>Tipo documento:
                      <select name="tipo_documento" required>
                        <option value="1" size="20">CC</option>
                        <option value="2">PASAPORTE</option>
                        <option value="3">NIT</option>
                      </select>
                  </p>

                  <p>Documento <input type="text" name="documento" size="40" placeholder="Ingresa tu documento " required></p>

                  <p>Primer Nombre   <input type="text" name="pnombre" size="40" required placeholder="Ingresa tu Primer Nombre"></p>
                  <p>Segundo Nombre  <input type="text" name="snombre" size="40"  placeholder="Ingresa tu Segundo Nombre (Opcional)"></p>
                  <p>Primer Apellido <input type="text" name="papellido" size="40" required placeholder="Ingresa tu Primer Apellido "></p>
                  <p>Segundo Apellido<input type="text" name="sapellido" size="40" required placeholder="Ingresa tu Segundo Apellido "></p>

                  <p>Correo: <input type="text" name="correo" size="40" required placeholder="Ingresa tu email"></p>
                  <p>Correo Secundario: <input type="text" name="correo_secundario" size="40" placeholder="Ingresa otro email (Opcional)"></p>
                  <p>Contraseña: <input type="password" name="contrasena" size="40" required placeholder="Crea tu contraseña"></p>
                  <p>Verificar Contraseña: <input type="password" name="verificar_contrasena" size="40" required placeholder="Confirma tu contraseña"></p>
                  <p>Telefono fijo: <input type="text" name="telefono_fijo" size="40" required placeholder="telefono fijo de contacto"></p>
                  <p>Numero Celular: <input type="text" name="celular" size="40" required placeholder="telefono para Whatsapp"></p>

                    <input type="submit" name="register" value="Enviar" onclick="confirmacion()">
                    <script language="JavaScript">
                         function confirmacion(){
                             alert("Registro exitoso");
                         }
                    </script>
              </form>
          </div>
     </section>
        <!-- Call to action-->
        <section class="page-section bg-dark text-white">
            <div class="container text-center">
                <h2 class="mb-4">Conoce más sobre nuestros programadores</h2>
                <a class="btn btn-light btn-xl" href="https://sg-sebastianguerrero.github.io/Curriculum-Vitae/">Visita nuestros proyectos!</a>
            </div>
        </section>
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="mt-0">Contactanos</h2>
                        <hr class="divider my-4" />
                        <p class="text-muted mb-5">Estas listo para iniciar un proyecto con nosotros ? llamanos o escribenos al correo y te responderemos lo más pronto posible!</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
                        <i class="fas fa-phone fa-3x mb-3 text-muted"></i>
                        <div>+57 315-2122261</div>
                    </div>
                    <div class="col-lg-4 mr-auto text-center">
                        <i class="fas fa-envelope fa-3x mb-3 text-muted"></i>
                        <!-- Make sure to change the email address in BOTH the anchor text and the link target below!-->
                        <a class="d-block" href="mailto:Social-Brand@innova.com">Social-Brand@innova.com</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="bg-light py-5">
            <div class="maded"><div class="small text-center text-muted"> 2020 author maded by SG-SebastianGuerrero</div></div>
            <!-- <img class="madedby" src="../assets/img/bg-masthead.jpg" > -->

        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
