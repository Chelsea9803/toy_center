<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="<?php echo base_url('/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('/css/main.css') ?>">

</head>
<body>
        <div class="container">
            <div class="row>">
                <div class="col bg">

                </div>
                <div class="col">
                    <div class="text-end">
                        <img src="img/Logo.png" width ="48" alt="">
                    </div>    
                    <h2 class="fw-bold text-center py-5">Bienvenido</h2>

                    <!-- LOGIN -->
                    <form action="#">
                        <div class="mb-4">
                            <label for="email" class="form-label">Correo electrónico</label>
                            <input type="email" class="form-control" name="email">
                        </div>
                        <div class="mb-4">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password">
                        </div>
                        <div class="mb-4 form-check">
                            <input type="checkbox" name="connected" class="form-check-input">
                            <label for="connected" class="form-check-label">Mantenerme conectado</label>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
                        </div>

                        <div class="my-3">
                            <span>¿No tienes cuenta? <a href="#"> Regístrate</a></span> <br>
                            <span><a href="#">Recuperar Contraseña</a></span>
                        </div>
                    </form>

                   <!-- LOGIN CON REDES SOCIALES --> 
                   <div class="container w-100 my-5">
                       <div class="row text-center">
                           <div class="col-12">Iniciar Sesión Con</div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <button class="btn btn-outline-primary w-100 my-1">
                                    <div class="row align-items-center">
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
                                    <div class="row align-items-center">
                                        <div class="col-2">
                                            <img src="img/Google.png" width="32" alt="">
                                        </div>

                                        <div class="col-10 text-center">
                                            Google
                                        </div>
                                    </div>
                                </button>





                </div>
            </div>
        </div>




    <script src="<?php echo base_url('/js/bootstrap.min.js') ?>"></script>
</body>
</html>