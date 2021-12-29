<?php
  if (isset($_POST['agregar-precio'])) {
    $id_usuario = $_POST['id-usuario'];
    $id_servicio = $_POST['id-servicio'];
    $precio = $_POST['precio'];
    $consulta_insert_precio = "INSERT INTO precio
    (`ID_USUARIO`, `ID_SERVICIO`, `PRECIO`) 
    VALUES 
    ('$id_usuario', '$id_servicio', '$precio')";
     $resultado = mysqli_query($conexion, $consulta_insert_precio);
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
        HAY UN ERROR: <?= $consulta_insert_precio . mysqli_error($conexion) ?>.
      </div>
    <?php
    }
  }
  if (isset($_POST['editar-precio'])) {
    $id_precio = $_POST['id-precio'];
    $id_usuario = $_POST['id-usuario'];
    $id_servicio = $_POST['id-servicio'];
    $precio = $_POST['precio'];
    $consulta_update_precio = "UPDATE precio SET  
    `ID_USUARIO`='$id_usuario', `ID_SERVICIO`='$id_servicio',
     `PRECIO`='$precio'
    WHERE `ID_PRECIO`='$id_precio' LIMIT 1 ";
    $resultado = mysqli_query($conexion,$consulta_update_precio);
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
        HAY UN ERROR: <?= $consulta_update_precio . mysqli_error($conexion) ?>.
      </div>
  <?php
    }
  }
  if (isset($_POST['eliminar-precio'])) {
    $id_precio = $_POST['id-precio'];
    $consulta_delete_precio = "DELETE FROM precio WHERE `ID_PRECIO`='$id_precio' LIMIT 1 ";
    $resultado = mysqli_query($conexion,  $consulta_delete_precio );
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
        HAY UN ERROR: <?=$consulta_delete_precio  . mysqli_error($conexion) ?>.
      </div>
  <?php
    }
  }
  ?>
  <div class="d-flex justify-content-between">
    <h4 class="text-primary fw-bolder fs-2 my-0">Precios <i class='bx bx-dollar bx-flashing fs-3'></i></h4>
    <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#exampleModal-4" onclick="precio_datos_modal_agregar() ">
      Agregar Precio
    </button>
  </div>
  <div class="modal fade" id="exampleModal-4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Salon de Belleza</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" id="precio_datos_modal_agregar">
        </div>
      </div>
    </div>
  </div>
  <?php
 $consulta_select_precio= "SELECT * FROM precio ORDER BY `ID_PRECIO` ASC";
$precio_resultado_consulta = mysqli_query($conexion,$consulta_select_precio);
?>
<hr>
<table class="table table-striped table-light table-hover table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Id_Servicio</th>
      <th scope="col">Precio</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $precio_contar = 1;
    while ($datos_precio = mysqli_fetch_array($precio_resultado_consulta)) {
    ?>
      <tr>
        <th scope="row"><?= $precio_contar ?></th>
        <td class="text-center"><?php echo $datos_precio['ID_SERVICIO']; ?></td>
        <td><?php echo $datos_precio['PRECIO']; ?></td>
        <td class="">
          <div class="d-flex ">
          <button onclick="mostrar_datos_precio_modal_editar(<?php echo $datos_precio['ID_PRECIO']; ?>)" class="btn btn-outline-info" id="btn_editar" type="button" data-bs-toggle="modal" data-bs-target="#modal-editar-precio">
            <i class='bx bx-edit nav_icon'>Editar</i>
          </button>
          &nbsp;
          <button onclick="mostrar_datos_precio_modal_eliminar(<?php echo $datos_precio['ID_PRECIO']; ?>)" class="btn btn-outline-danger" id="btn_editar" type="button" data-bs-toggle="modal" data-bs-target="#modal-eliminar-precio">
            <i class='bx bx-trash nav_icon'>Eliminar</i>
          </button>
         </div>
        </td>
      </tr>
    <?php 
    $precio_contar++;
    }
    ?>
  </tbody>
</table>
<div class="modal fade" id="modal-editar-precio" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Precio</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body fs-6" id="body_modal_editar_precio"></div>
    </div>
  </div>
</div>

<div class="modal fade" id="modal-eliminar-precio" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Eliminar Precio</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body fs-6" id="body_modal_eliminar_precio"></div>
    </div>
  </div>
</div>
<script>

function mostrar_datos_precio_modal_editar(id_precio) {
  precio_body_modal_editar = document.getElementById('body_modal_editar_precio')
  fetch('<?=$_dominio?>/app/ajax/ajax.precio.editar.php?codigo_precio=' + id_precio)
    .then(response => response.text())
    .then(data => {
      precio_body_modal_editar.innerHTML = data
    })
}

function mostrar_datos_precio_modal_eliminar(id_precio) {
  precio_body_modal_eliminar = document.getElementById('body_modal_eliminar_precio')
  fetch('<?=$_dominio?>/app/ajax/ajax.precio.eliminar.php?codigo_precio=' + id_precio)
    .then(response => response.text())
    .then(data => {
      precio_body_modal_eliminar.innerHTML = data
    })
}

function precio_datos_modal_agregar() {
  precio_body_modal_agregar = document.getElementById('precio_datos_modal_agregar')
  fetch('<?=$_dominio?>/app/ajax/ajax.precio.agregar.php')
    .then(response => response.text())
    .then(data => {
      precio_body_modal_agregar.innerHTML = data
    })
}
</script>