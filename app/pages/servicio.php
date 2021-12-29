<?php
  if (isset($_POST['agregar-servicio'])) {
    $id_usuario = $_POST['id-usuario'];
    $id_precio = $_POST['id-precio'];
    $servicio = $_POST['servicio'];
    $especifico = $_POST['especifico'];
    $nota = $_POST['nota'];
    $consulta_insert_servicio = "INSERT INTO servicio
    (`ID_USUARIO`, `ID_PRECIO`, `SERVICIO`, `ESPECIFICO`, `NOTA`) 
    VALUES 
    ('$id_usuario', '$id_precio', '$servicio', '$especifico', '$nota')";
     $resultado = mysqli_query($conexion, $consulta_insert_servicio);
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
        HAY UN ERROR: <?= $consulta_insert_servicio . mysqli_error($conexion) ?>.
      </div>
    <?php
    }
  }
  if (isset($_POST['editar-servicio'])) {
    $id_servicio= $_POST['id-servicio'];
    $id_usuario = $_POST['id-usuario'];
    $id_precio = $_POST['id-precio'];
    $servicio = $_POST['servicio'];
    $especifico = $_POST['especifico'];
    $nota = $_POST['nota'];
    $consulta_update_servicio= "UPDATE servicio  SET  
    `ID_USUARIO`='$id_usuario', `ID_PRECIO`='$id_precio',
     `SERVICIO`='$servicio', `ESPECIFICO`='$especifico', 
     `NOTA`='$nota'
    WHERE `ID_SERVICIO`='$id_servicio'  ";
    $resultado = mysqli_query($conexion,$consulta_update_servicio);
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
        HAY UN ERROR: <?= $consulta_update_servicio. mysqli_error($conexion) ?>.
      </div>
  <?php
    }
  }
  if (isset($_POST['eliminar-servicio'])) {
    $id_servicio = $_POST['id-servicio'];
    $consulta_delete_servicio = "DELETE FROM servicio WHERE `ID_SERVICIO`='$id_servicio' LIMIT 1 ";
    $resultado = mysqli_query($conexion,  $consulta_delete_servicio );
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
        HAY UN ERROR: <?=$consulta_delete_servicio  . mysqli_error($conexion) ?>.
      </div>
  <?php
    }
  }?>
  <div class="d-flex justify-content-between">
    <h4 class="text-primary fw-bolder fs-2 my-0">Servicios <i class='bx bx-server bx-flashing fs-3'></i></h4>
    <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#exampleModal-3" onclick="servicio_datos_modal_agregar()">
      Agregar Servicio
    </button>
  </div>
  <div class="modal fade" id="exampleModal-3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Salon de Belleza</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" id="servicio_datos_modal_agregar">
          
        </div>
      </div>
    </div>
  </div>
  <?php
 $consulta_select_servicio= "SELECT * FROM servicio ORDER BY `ID_SERVICIO` ASC";
$servicio_resultado_consulta = mysqli_query($conexion,$consulta_select_servicio);
?>
<hr>
<table class="table table-striped table-light table-hover table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Servicio</th>
      <th scope="col">Especifico</th>
      <th scope="col">Nota</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $servicio_contar = 1;
    while ($datos_servicio = mysqli_fetch_array($servicio_resultado_consulta)) {
    ?>
      <tr>
        <th scope="row"><?= $servicio_contar ?></th>
        <td class="text-center"><?php echo $datos_servicio['SERVICIO']; ?></td>
        <td><?php echo $datos_servicio['ESPECIFICO']; ?></td>
        <td><?php echo $datos_servicio['NOTA']; ?></td>
        <td class="">
          <div class="d-flex ">
          <button onclick="mostrar_datos_servicio_modal_editar(<?php echo $datos_servicio['ID_SERVICIO']; ?>)" class="btn btn-outline-info" id="btn_editar" type="button" data-bs-toggle="modal" data-bs-target="#modal-editar-servicio">
            <i class='bx bx-edit nav_icon'>Editar</i>
          </button>
          &nbsp;
          <button onclick="mostrar_datos_servicio_modal_eliminar(<?php echo $datos_servicio['ID_SERVICIO']; ?>)" class="btn btn-outline-danger" id="btn_editar" type="button" data-bs-toggle="modal" data-bs-target="#modal-eliminar-servicio">
            <i class='bx bx-trash nav_icon'>Eliminar</i>
          </button>
         </div>
        </td>
      </tr>
    <?php 
    $servicio_contar++;
    }
    ?>
  </tbody>
</table>
<div class="modal fade" id="modal-editar-servicio" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Servicio</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body fs-6" id="body_modal_editar_servicio"></div>
    </div>
  </div>
</div>

<div class="modal fade" id="modal-eliminar-servicio" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Eliminar Servicio</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body fs-6" id="body_modal_eliminar_servicio"></div>
    </div>
  </div>
</div>
<script>
    function mostrar_datos_servicio_modal_editar(id_servicio) {
      servicio_body_modal_editar = document.getElementById('body_modal_editar_servicio')
      fetch('<?=$_dominio?>/app/ajax/ajax.servicio.editar.php?codigo_servicio=' + id_servicio)
        .then(response => response.text())
        .then(data => {
          servicio_body_modal_editar.innerHTML = data
        })
    }

    function mostrar_datos_servicio_modal_eliminar(id_servicio) {
      servicio_body_modal_eliminar = document.getElementById('body_modal_eliminar_servicio')
      fetch('<?=$_dominio?>/app/ajax/ajax.servicio.eliminar.php?codigo_servicio=' + id_servicio)
        .then(response => response.text())
        .then(data => {
          servicio_body_modal_eliminar.innerHTML = data
        })
    }

    function servicio_datos_modal_agregar() {
      servicio_body_modal_agregar = document.getElementById('servicio_datos_modal_agregar')
      fetch('<?=$_dominio?>/app/ajax/ajax.servicio.agregar.php')
        .then(response => response.text())
        .then(data => {
          servicio_body_modal_agregar.innerHTML = data
        })
    }
</script>