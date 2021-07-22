<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
        <link rel="stylesheet" href="<?php echo base_url('/css/bootstrap.min.css') ?>">
        <link rel="stylesheet" href="<?php echo base_url('/css/main.css') ?>">
    </head>
    <body> 
<!-- Carousel -->
<div id="mainSlider" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/Portada1.png" class="d-block w-100" alt="" height="400">
    </div>
    <div class="carousel-item">
      <img src="img/Portada2.png" class="d-block w-100" alt="" height="400">
    </div>
    <div class="carousel-item">
      <img src="img/Portada3.png" class="d-block w-100" alt="" height="400">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#mainSlider" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#mainSlider" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

    <!-- Ribbon -->
    <div id="ribbon" class="container-fluid">
        <div id="bienvenida" class="container w-50 px-5">

            <div class="row align-items-center">
                <div class="col-sm p-3">
                    <img src="img/Imagen16.png" class="w-75 mx-auto d-block" alt="" width="750">
                </div>

                <div class="col-sm p-3 text-light text-center">
                    <h1 class="text-warning h1"> Bienvenido a </h1>
                    <h4 class="h2 text-shadow"> La juguetería </h4>
                </div>
            </div>
        </div>
    </div>
    <!-- Separador ribbon -->
    <div id="separator-ribbon">
        <div class="content bg-warning"></div>
    </div>

    <!-- Más vendido -->

    <div id="games">
        <div class="container-md p-5">
            <div class="row pt-5">

                <h3 class="text-center pb-5 pt-5 h1"><br>Juguetes</h3>
            </div>

            <div class="row" id="warpCartas">

            <?php //print_r($lista);?>



             <?php foreach ($lista as $list): //recorre el listado de la respuesta y lo muestra ?>
<?php

        $name    = $list['prd_nombre'];
        $empresa = $list['ma_id'];
        $price   = number_format($list['prd_price'], 0);
        $id      = $list['prd_id'];
        $image   = $list['url_prod'];
        $marca   = $list['ma_nombre'];

    echo '<div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
																          <div class="card w-100 card-border mb-5">
																                  <img src="img/' . $image . '" class="card-img-top" alt="...">
																                  <div class="card-body">
																                      <h5 class="card-title" id="tittle">' . $name . ' </h5> 
																                      <p class="card-text" id="empresa">Nombre empresa: ' . $marca . '</p>
																                      <p class="card-text" id="precio">Precio: $ ' . $price . '</p>
																                      <p class="card-text" id="codigo">Identificador: ' . $id . '</p>
																                  </div>
																              </div>
																          </div>';?>

<!--(' . $marca . ')-->
																	          <?php endforeach;?>

              </div>
          </div>
      </div>

      <script src="<?php echo base_url('/js/bootstrap.min.js') ?>"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
      
    </body>
</html>


