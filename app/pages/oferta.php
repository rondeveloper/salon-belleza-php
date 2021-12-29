<?php
  if (isset($_POST['agregar-oferta'])) {
    $id_usuario = $_POST['id-usuario'];
    $id_servicio = $_POST['id-servicio'];
    $oferta = $_POST['oferta'];
    $precio_oferta = $_POST['precio_oferta'];
    $consulta_insert_oferta = "INSERT INTO ofertas
    (`ID_USUARIO`, `ID_SERVICIO`, `OFERTA`, `PRECIO_OFERTA`) 
    VALUES 
    ('$id_usuario', '$id_servicio', '$oferta', '$precio_oferta')";
     $resultado = mysqli_query($conexion, $consulta_insert_oferta);
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
        HAY UN ERROR: <?= $consulta_insert_oferta . mysqli_error($conexion) ?>.
      </div>
    <?php
    }
  }
  if (isset($_POST['editar-oferta'])) {
    $id_oferta = $_POST['id-oferta'];
    $id_usuario = $_POST['id-usuario'];
    $id_servicio = $_POST['id-servicio'];
    $oferta = $_POST['oferta'];
    $precio_oferta = $_POST['precio_oferta'];
    $consulta_update_oferta = "UPDATE ofertas SET  
    `ID_USUARIO`='$id_usuario', `ID_SERVICIO`='$id_servicio',
     `OFERTA`='$oferta', `PRECIO_OFERTA`='$precio_oferta'
    WHERE `ID_OFERTA`='$id_oferta' LIMIT 1 ";
    $resultado = mysqli_query($conexion,$consulta_update_oferta);
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
        HAY UN ERROR: <?= $consulta_update_oferta . mysqli_error($conexion) ?>.
      </div>
  <?php
    }
  }
  if (isset($_POST['eliminar-oferta'])) {
    $id_oferta = $_POST['id-oferta'];
    $consulta_delete_oferta = "DELETE FROM ofertas WHERE `ID_OFERTA`='$id_oferta' LIMIT 1 ";
    $resultado = mysqli_query($conexion,  $consulta_delete_oferta );
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
        HAY UN ERROR: <?=$consulta_delete_oferta  . mysqli_error($conexion) ?>.
      </div>
  <?php
    }
  }
  ?>
  
  <div class="d-flex justify-content-between">
    <h4 class="text-primary fw-bolder fs-2 my-0">Ofertas <i class='bx bxs-offer bx-flashing fs-3'></i></h4>
    <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#exampleModal-5" onclick="oferta_datos_modal_agregar()">
      Agregar Oferta
    </button>
  </div>
  <div class="modal fade" id="exampleModal-5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Salon de Belleza</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" id="oferta_datos_modal_agregar">
         </div>
      </div>
    </div>
  </div>
  <?php
 $consulta_select_oferta= "SELECT * FROM ofertas ORDER BY `ID_OFERTA` ASC";
$resultado_consulta_oferta = mysqli_query($conexion, $consulta_select_oferta);
?>
<hr>
<table class="table table-striped table-light table-hover table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Oferta</th>
      <th scope="col">Precio Oferta</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $oferta_contar = 1;
    while ($datos_oferta = mysqli_fetch_array($resultado_consulta_oferta)) {
    ?>
      <tr>
        <th scope="row"><?= $oferta_contar ?></th>
        <td class="text-center"><?php echo $datos_oferta['OFERTA']; ?></td>
        <td><?php echo $datos_oferta['PRECIO_OFERTA']; ?></td>
        <td class="">
          <div class="d-flex ">
          <button onclick="mostrar_datos_oferta_modal_editar(<?php echo $datos_oferta['ID_OFERTA']; ?>)" class="btn btn-outline-info" id="btn_editar" type="button" data-bs-toggle="modal" data-bs-target="#modal-editar">
            <i class='bx bx-edit nav_icon'>Editar</i>
          </button>
          &nbsp;
          <button onclick="mostrar_datos_oferta_modal_eliminar(<?php echo $datos_oferta['ID_OFERTA']; ?>)" class="btn btn-outline-danger" id="btn_editar" type="button" data-bs-toggle="modal" data-bs-target="#modal-eliminar">
            <i class='bx bx-trash nav_icon'>Eliminar</i>
          </button>
         </div>
        </td>
      </tr>
    <?php 
    $oferta_contar++;
    }
    ?>
  </tbody>
</table>
<div class="modal fade" id="modal-editar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Oferta</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body fs-6" id="body_modal_editar_oferta"></div>
    </div>
  </div>
</div>
<div class="modal fade" id="modal-eliminar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Eliminar Oferta</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body fs-6" id="body_modal_eliminar_oferta"></div>
    </div>
  </div>
</div>
<script>
    
    function mostrar_datos_oferta_modal_editar(id_oferta) {
      oferta_body_modal_editar = document.getElementById('body_modal_editar_oferta')
      fetch('<?=$_dominio?>/app/ajax/ajax.oferta.editar.php?codigo_oferta=' + id_oferta)
        .then(response => response.text())
        .then(data => {
          oferta_body_modal_editar.innerHTML = data
        })
    }

    function mostrar_datos_oferta_modal_eliminar(id_oferta) {
      oferta_body_modal_eliminar = document.getElementById('body_modal_eliminar_oferta')
      fetch('<?=$_dominio?>/app/ajax/ajax.oferta.eliminar.php?codigo_oferta=' + id_oferta)
        .then(response => response.text())
        .then(data => {
          oferta_body_modal_eliminar.innerHTML = data
        })
    }

    function oferta_datos_modal_agregar() {
      oferta_body_modal_agregar = document.getElementById('oferta_datos_modal_agregar')
      fetch('<?=$_dominio?>/app/ajax/ajax.oferta.agregar.php')
        .then(response => response.text())
        .then(data => {
          oferta_body_modal_agregar.innerHTML = data
        })
    }
</script>