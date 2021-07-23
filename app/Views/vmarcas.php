<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de marcas</title>
     <link rel="stylesheet" href="<?php echo base_url('/css/bootstrap.min.css') ?>">
     <link rel="stylesheet" href="<?php echo base_url('/css/main.css') ?>">
     <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

</head>
<body>
    <div class="container mt-5">

       <h1>lista de marcas</h1>
       <a href="<?php echo base_url('/marcas/create/') ?>" class="btn btn-primary" >Nueva marca</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nombre</th>
      <th scope="col">activo</th>
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
								      <a href="<?php echo base_url('/marcas/edit/' . $list['ma_id']) ?>" class="btn btn-warning" >Editar</a>
								      <a onclick=deleteMa(<?php echo $list['ma_id'] ?>); href="#"  class="btn btn-danger" >Borrar</a>
								      </td>
								    </tr>
								    <?php endforeach;?>
  </tbody>
</table>


</div>
   <script src="<?php echo base_url('/js/bootstrap.min.js') ?>"></script>
   <script src="<?php echo base_url('custom/vmarcas.js'); ?>"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>

</body>
</html>