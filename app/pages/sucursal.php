<?php
 include "app/items/DB.php";
  if (isset($_POST['agregar-sucursal'])) {
    $id_usuario = $_POST['id-usuario'];
    $sucursal = $_POST['sucursal'];
    $direccion= $_POST['direccion'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $horario= $_POST['horario'];
    $consulta_insert_sucursal = "INSERT INTO sucursal
    (`ID_USUARIO`, `SUCURSAL`, `DIRECCION`, `E-MAIL`, `TELEFONO`, `HORARIO`) 
    VALUES 
    ('$id_usuario', '$sucursal', '$direccion', '$email', '$telefono', '$horario')";
     $resultado = mysqli_query($conexion, $consulta_insert_sucursal );
    if ($resultado) {
  ?>
      <div class="alert alert-success mx-auto w-50 text-center alert-dismissible fade show" role="alert">
        <strong>EXITO!</strong> YA SE AGREGO CORRECTAMENTE
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    <?php
    } else {
    ?>
      <div class='alert alert-danger'>
        HAY UN ERROR: <?= $consulta_insert_sucursal  . mysqli_error($conexion) ?>.
      </div>
    <?php
    }
  }
  if (isset($_POST['editar-sucursal'])) {
    $id_sucursal = $_POST['id-sucursal'];
    $id_usuario = $_POST['id-usuario'];
    $sucursal = $_POST['sucursal'];
    $direccion= $_POST['direccion'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $horario= $_POST['horario'];
    $consulta_update_sucursal = "UPDATE sucursal SET  
    `ID_USUARIO`='$id_usuario', `SUCURSAL`='$sucursal',
     `DIRECCION`='$direccion', `E-MAIL`='$email', 
     `TELEFONO`='$telefono', `HORARIO`='$horario'
    WHERE `ID_SUCURSAL`='$id_sucursal' LIMIT 1 ";
    $resultado = mysqli_query($conexion,$consulta_update_sucursal);
    if ($resultado) {
    ?>
      <div class="alert alert-success mx-auto w-50 text-center alert-dismissible fade show" role="alert">
        <strong>EXITO!</strong> YA SE ACTUALIZO CORRECTAMENTE
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    <?php
    } else {
    ?>
      <div class='alert alert-danger'>
        HAY UN ERROR: <?= $consulta_update_sucursal . mysqli_error($conexion) ?>.
      </div>
  <?php
    }
  }
  if (isset($_POST['eliminar-sucursal'])) {
    $id_sucursal= $_POST['id-sucursal'];
    $consulta_delete_sucursal= "DELETE FROM sucursal WHERE `ID_SUCURSAL`='$id_sucursal' LIMIT 1 ";
    $resultado = mysqli_query($conexion,  $consulta_delete_sucursal );
    if ($resultado) {
    ?>
      <div class="alert alert-success mx-auto w-50 text-center alert-dismissible fade show" role="alert">
        <strong>EXITO!</strong> YA SE ELIMINO CORRECTAMENTE
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    <?php
    } else {
    ?>
      <div class='alert alert-danger'>
        HAY UN ERROR: <?=$consulta_delete_usuario  . mysqli_error($conexion) ?>.
      </div>
  <?php
    }
  }?>
  
  <div class="d-flex justify-content-between">
    <h4 class="text-primary fw-bolder fs-2 my-0">Sucursales <i class='bx bxs-business bx-flashing fs-3'></i></h4>
    <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#exampleModal-2" onclick="sucursal_datos_modal_agregar()">
      Agregar Sucursal
    </button>
  </div>
  <div class="modal fade" id="exampleModal-2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Salon de Belleza</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" id="sucursal_datos_modal_agregar">
        </div>
      </div>
    </div>
  </div>
  <?php
 $consulta_select_sucursal= "SELECT * FROM sucursal ORDER BY `ID_SUCURSAL` ASC";
$sucursal_resultado_consulta = mysqli_query($conexion,$consulta_select_sucursal);
?>
<hr>
<table class="table table-striped table-light table-hover table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Sucursal</th>
      <th scope="col">Direccion</th>
      <th scope="col">Email</th>
      <th scope="col">Telefono</th>
      <th scope="col">Horario</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sucursal_contar = 1;
    while ($datos_sucursal = mysqli_fetch_array($sucursal_resultado_consulta)) {
    ?>
      <tr>
        <th scope="row"><?= $sucursal_contar ?></th>
        <td class="text-center"><?php echo $datos_sucursal['SUCURSAL']; ?></td>
        <td><?php echo $datos_sucursal['DIRECCION']; ?></td>
        <td><?php echo $datos_sucursal['E-MAIL']; ?></td>
        <td><?php echo $datos_sucursal['TELEFONO']; ?></td>
        <td><?php echo $datos_sucursal['HORARIO']; ?></td>
        <td class="">
          <div class="d-flex ">
          <button onclick="mostrar_datos_sucursal_modal_editar(<?php echo $datos_sucursal['ID_SUCURSAL']; ?>)" class="btn btn-outline-info" id="btn_editar" type="button" data-bs-toggle="modal" data-bs-target="#modal-editar-sucursal">
            <i class='bx bx-edit nav_icon'>Editar</i>
          </button>
          &nbsp;
          <button onclick="mostrar_datos_sucursal_modal_eliminar(<?php echo $datos_sucursal['ID_SUCURSAL']; ?>)" class="btn btn-outline-danger" id="btn_editar" type="button" data-bs-toggle="modal" data-bs-target="#modal-eliminar-sucursal">
            <i class='bx bx-trash nav_icon'>Eliminar</i>
          </button>
         </div>
        </td>
      </tr>
    <?php 
    $sucursal_contar++;
    }
    ?>
  </tbody>
</table>
<div class="modal fade" id="modal-editar-sucursal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Sucursal</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body fs-6" id="body_modal_editar_sucursal"></div>
    </div>
  </div>
</div>

<div class="modal fade" id="modal-eliminar-sucursal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Eliminar Sucursal</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body fs-6" id="body_modal_eliminar_sucursal"></div>
    </div>
  </div>
</div>
<script>
    function mostrar_datos_sucursal_modal_editar(id_sucursal) {
      sucursal_body_modal_editar = document.getElementById('body_modal_editar_sucursal')
      fetch('<?=$_dominio?>/app/ajax/ajax.sucursal.editar.php?codigo_sucursal=' + id_sucursal)
        .then(response => response.text())
        .then(data => {
          sucursal_body_modal_editar.innerHTML = data
        })
    }

    function mostrar_datos_sucursal_modal_eliminar(id_sucursal) {
      sucursal_body_modal_eliminar = document.getElementById('body_modal_eliminar_sucursal')
      fetch('<?=$_dominio?>/app/ajax/ajax.sucursal.eliminar.php?codigo_sucursal=' + id_sucursal)
        .then(response => response.text())
        .then(data => {
          sucursal_body_modal_eliminar.innerHTML = data
        })
    }

    function sucursal_datos_modal_agregar() {
      sucursal_body_modal_agregar = document.getElementById('sucursal_datos_modal_agregar')
      fetch('<?=$_dominio?>/app/ajax/ajax.sucursal.agregar.php')
        .then(response => response.text())
        .then(data => {
          sucursal_body_modal_agregar.innerHTML = data
        })
    }
</script>