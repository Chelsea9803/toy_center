<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="<?php echo base_url('/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('/css/main.css') ?>">
    <link href="https://fonts.googleapis.com/css2?family=Spartan:wght@300;600&display=swap" rel="stylesheet">
     
</head>
<body class="bg-light">
<section>
        <div class="row g-0">
            <div class="col-lg-7 d-none d-lg-block">
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="carousel-item PortadaLogin1 min-vh-100 active">
                        <div class="carousel-caption d-none d-md-block">
                        </div>
                      </div>
                      <div class="carousel-item PortadaLogin2 min-vh-100">
                        <div class="carousel-caption d-none d-md-block">
                        </div>
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only"></span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only"></span>
                    </a>
                  </div>
            </div>
            <div class="col-lg-5 bg-light d-flex flex-column align-items-end min-vh-100">

                <div class="align-self-center w-100 px-lg-5 py-lg-4 p-4">
                <h1 class="font-weight-bold mb-4">Regístrate</h1> 
                 
                <form class="mb-5">
                    <div class="mb-4">
                      <label for="exampleInputEmail1" class="form-label font-weight-bold">Email</label>
                      <input type="email" class="form-control bg-light-x border-0" id="exampleInputEmail1" placeholder="Ingresa tu email" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-4">
                      <label for="exampleInputPassword1" class="form-label font-weight-bold">Contraseña</label>
                      <input type="password" class="form-control bg-light-x border-0 mb-2" placeholder="Ingresa tu contraseña" id="exampleInputPassword1">
                      <a href="" id="emailHelp" class="form-text text-muted text-decoration-none">¿Has olvidado tu contraseña?</a>
                    </div>
                    <div class="form-row mb-2">
                            <div class="form-group col-md-6">
                                <label class="font-weight-bold">Nombre <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Tu nombre">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="font-weight-bold">Apellido <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Tu apellido">
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label class="font-weight-bold">Correo electrónico <span class="text-danger">*</span></label>
                            <input type="email" class="form-control" placeholder="Ingresa tu correo electrónico">
                        </div>
                        <div class="form-group mb-3">
                            <label class="font-weight-bold">Contraseña <span class="text-danger">*</span></label>
                            <input type="password" class="form-control" placeholder="Ingresa una contraseña">
                        </div>
                        <div class="form-group mb-5">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label text-muted">Al seleccionar esta casilla aceptas nuestro aviso de privacidad y los términos y condiciones</label>
                            </div>
                        </div>
                    <button type="submit" class="btn btn-primary w-100">Iniciar sesión</button>
                  </form>

                <!-- LOGIN CON REDES SOCIALES-->
                <div class="row">
                    <div class="col">
                       <button class="btn btn-outline-primary w-100 my-1">
                           <div class ="row align-items-center">
                               <div class="col-2">
                                   <img src="img/Fb.png" width="32" alt="">
                                </div> 
                                <div class="col-10 text-center">
                                    Facebook
                                </div>
                            </div>
                        </button>
                    </div>
                    <div class="col">
                        <button class="btn btn-outline-danger w-100 my-1">
                           <div class ="row align-items-center">
                               <div class="col-2">
                                   <img src="img/Google.png" width="32" alt="">
                                </div> 
                                <div class="col-10 text-center">
                                    Google
                                </div>
                            </div>
                        </button>    
                    </div>  
                <div class="text-center px-lg-5 pt-lg-3 pb-lg-4 p-4 mt-auto w-100">
                    <p class="d-inline-block mb-0">¿Todavia no tienes una cuenta?</p> <a href="#">Crea una ahora</a>
                </div>
            </div>
        </div>
      </section>

    <script src="<?php echo base_url('/js/bootstrap.min.js') ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>
</html>