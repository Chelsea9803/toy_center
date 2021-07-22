<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Marca</title>
    <link rel="stylesheet" href="<?php echo base_url('/css/bootstrap.min.css') ?>">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container mt-5">
        <h1>NUEVA MARCA</h1>
        <br>
      
        <div class="row">
            <div class="col-lg-6">
            <form id="frmMarca" role="form">
            <div class="form-group">
            <label >Nombre</label><br>
            <input type="text"  id="ma_nombre" autofocus='ON' name="ma_nombre"  class="form-control"><br>
           <label >Activo</label><br>
            <select id="ma_active" name="ma_active"  class="form-control">
            <option value="SI">SI</option>
            <option value="NO">NO</option>
            </select><br>
           <input type="submit" value="guardar" class="btn btn-danger">
            </form>
            </div>

            </div>
            <div class="col-lg-6">

            </div>
        </div>

    </div>



<script src="<?php echo base_url('/js/bootstrap.min.js') ?>"></script>
<script src="<?php echo base_url('custom/vcreatemarca.js'); ?>"></script>
</body>
</html>