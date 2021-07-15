<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document Title</title>
     <link rel="stylesheet" href="<?php echo base_url('/css/bootstrap.min.css') ?>">
</head>
<body>
    <div class="container mt-5">

       <h1>Lista de Marcas</h1>
       <a href="<?php echo base_url('/marcas/create/') ?>" class="btn btn-primary" >Nueva marca</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Activo</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>

  <?php foreach ($lista as $list): //recorre el listado de la respuesta y lo muestra ?>
								  <tr>
								      <td scope="col"><?php echo $list['ma_id'] ?></th>
								      <td scope="col"><?php echo $list['ma_nombre'] ?></th>
								      <td scope="col"><?php echo $list['ma_active'] ?></th>

								      <td scope="col">
								      <a href="<?php echo base_url('/marcas/edit/' . $list['ma_id']) ?>" class="btn btn-info" >Editar</a>
								      <a href="<?php echo base_url('/marcas/delete/' . $list['ma_id']) ?>" class="btn btn-warning" >Borrar</a>
								      </td>
								    </tr>
								    <?php endforeach;?>
  </tbody>
</table>


</div>
   <script src="<?php echo base_url('/js/bootstrap.min.js') ?>"></script>
</body>
</html>