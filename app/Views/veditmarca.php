<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document Title</title>
    <link rel="stylesheet" href="<?php echo base_url() ?>/css/bootstrap.css">
</head>
<body>
    <div class="container mt-5">
        <h1>EDITAR MARCA</h1>


        <br>
        <div class="row">
            <div class="col-lg-6">
            <form action="<?php echo site_url('/marcas/update') ?>" method="post">
            <div class="form-group">
            <label >Nombre</label><br>
            <input type="text" id="nombre" value="<?php echo $marca['ma_nombre']; ?>" name="nombre" class="form-control"><br>
            <label >Activo</label><br>
            <select id="activo" value="<?php echo $marca['ma_active']; ?>" name="activo" class="form-control">
            <option value="<?php echo $marca['ma_active']; ?>"><?php echo $marca['ma_active']; ?></option>
            <option value="SI">SI</option>
            <option value="NO">NO</option>
            </select>
            <br>
            <input type="hidden" id="idmarca" name="idmarca" value="<?php echo $marca['ma_id']; ?>" >
            <input type="submit" value="editar" class="btn btn-danger">
            </form>
            </div>

            </div>
            <div class="col-lg-6">

            </div>
        </div>

    </div>



<script src="<?php echo base_url() ?>/js/bootstrap.js"></script>
</body>
</html>