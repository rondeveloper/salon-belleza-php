<?php
  if (isset($_POST['agregar-estilista'])) {
    $id_usuario = $_POST['id-usuario'];
    $id_sucursal = $_POST['id-sucursal'];
    $estilista = $_POST['estilista'];
    $turno = $_POST['turno'];
    $cargo= $_POST['cargo'];
    $sueldo = $_POST['sueldo'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $telefono_2 = $_POST['telefono-2'];
    $consulta_insert_estilista = "INSERT INTO estilista
    (`ID_USUARIO`, `ID_SUCURSAL`, `NOMBRE`, `TURNO`, `CARGO`, `SUELDO`, `E-MAIL`,`TELEFONO`, `TELEFONO-2`) 
    VALUES 
    ('$id_usuario', '$id_sucursal', '$estilista', '$turno', '$cargo', '$sueldo', '$email', '$telefono', '$telefono_2')";
     $resultado = mysqli_query($conexion, $consulta_insert_estilista);
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
        HAY UN ERROR: <?= $consulta_insert_estilista . mysqli_error($conexion) ?>.
      </div>
    <?php
    }
  }
  if (isset($_POST['editar-estilista'])) {
    $id_estilista = $_POST['id-estilista'];
    $id_usuario = $_POST['id-usuario'];
    $id_sucursal = $_POST['id-sucursal'];
    $estilista = $_POST['estilista'];
    $turno = $_POST['turno'];
    $cargo= $_POST['cargo'];
    $sueldo = $_POST['sueldo'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $telefono_2 = $_POST['telefono-2'];
    $consulta_update_estilista = "UPDATE estilista SET  
    `ID_USUARIO`='$id_usuario', `ID_SUCURSAL`='$id_sucursal',
     `NOMBRE`='$estilista', `TURNO`='$turno', `CARGO`='$cargo', `SUELDO`='$sueldo', `E-MAIL`='$email', `TELEFONO`='$telefono', `TELEFONO-2`='$telefono_2'
    WHERE `ID_ESTILISTA`='$id_estilista' LIMIT 1 ";
    $resultado = mysqli_query($conexion,$consulta_update_estilista);
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
        HAY UN ERROR: <?= $consulta_update_estilista . mysqli_error($conexion) ?>.
      </div>
  <?php
    }
  }
  if (isset($_POST['eliminar-estilista'])) {
    $id_estilista = $_POST['id-estilista'];
    $consulta_delete_estilista = "DELETE FROM estilista WHERE `ID_ESTILISTA`='$id_estilista' LIMIT 1 ";
    $resultado = mysqli_query($conexion,  $consulta_delete_estilista );
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
        HAY UN ERROR: <?=$consulta_delete_estilista  . mysqli_error($conexion) ?>.
      </div>
  <?php
    }
  }
  ?>
 
 <div class="d-flex justify-content-between">
    <h4 class="text-primary fw-bolder fs-2 my-0">Estilistas <i class='bx bx-cut bx-flashing fs-3'></i></h4>
    <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#exampleModal-6" onclick="estilista_datos_modal_agregar()">
      Agregar Estilista
    </button>
  </div>
  <div class="modal fade" id="exampleModal-6" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Salon de Belleza</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" id="estilista_datos_modal_agregar">
        </div>
      </div>
    </div>
  </div>
  <?php
 $consulta_select_estilista= "SELECT * FROM estilista ORDER BY `ID_ESTILISTA` ASC";
$resultado_consulta = mysqli_query($conexion, $consulta_select_estilista);
?>
<hr>
<table class="table table-striped table-light table-hover table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Estilista</th>
      <th scope="col">Turno</th>
      <th scope="col">Cargo</th>
      <th scope="col">Sueldo</th>
      <th scope="col">Email</th>
      <th scope="col">Telefono</th>
      <th scope="col">Telefono-2</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $estilista_contar = 1;
    while ($datos_estilista = mysqli_fetch_array($resultado_consulta)) {
    ?>
      <tr>
        <th scope="row"><?= $estilista_contar ?></th>
        <td class="text-center"><?php echo $datos_estilista['NOMBRE']; ?></td>
        <td><?php echo $datos_estilista['TURNO']; ?></td>
        <td><?php echo $datos_estilista['CARGO']; ?></td>
        <td><?php echo $datos_estilista['SUELDO']; ?></td>
        <td><?php echo $datos_estilista['E-MAIL']; ?></td>
        <td><?php echo $datos_estilista['TELEFONO']; ?></td>
        <td><?php echo $datos_estilista['TELEFONO-2']; ?></td>

        <td class="">
          <div class="d-flex ">
          <button onclick="mostrar_datos_estilista_modal_editar(<?php echo $datos_estilista['ID_ESTILISTA']; ?>)" class="btn btn-outline-info" id="btn_editar" type="button" data-bs-toggle="modal" data-bs-target="#modal-editar-estilista">
            <i class='bx bx-edit nav_icon'>Editar</i>
          </button>
          &nbsp;
          <button onclick="mostrar_datos_estilista_modal_eliminar(<?php echo $datos_estilista['ID_ESTILISTA']; ?>)" class="btn btn-outline-danger" id="btn_editar" type="button" data-bs-toggle="modal" data-bs-target="#modal-eliminar-estilista">
            <i class='bx bx-trash nav_icon'>Eliminar</i>
          </button>
         </div>
        </td>
      </tr>
    <?php 
    $estilista_contar++;
    }
    ?>
  </tbody>
</table>
<div class="modal fade" id="modal-editar-estilista" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Estilista</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body fs-6" id="body_modal_editar_estilista"></div>
    </div>
  </div>
</div>

<div class="modal fade" id="modal-eliminar-estilista" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Eliminar Estilista</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body fs-6" id="body_modal_eliminar_estilista"></div>
    </div>
  </div>
</div>
<script>function mostrar_datos_estilista_modal_editar(id_estilista) {
      estilista_body_modal_editar = document.getElementById('body_modal_editar_estilista')
      fetch('<?=$_dominio?>/app/ajax/ajax.estilista.editar.php?codigo_estilista=' + id_estilista)
        .then(response => response.text())
        .then(data => {
          estilista_body_modal_editar.innerHTML = data
        })
    }

    function mostrar_datos_estilista_modal_eliminar(id_estilista) {
      estilista_body_modal_eliminar = document.getElementById('body_modal_eliminar_estilista')
      fetch('<?=$_dominio?>/app/ajax/ajax.estilista.eliminar.php?codigo_estilista=' + id_estilista)
        .then(response => response.text())
        .then(data => {
          estilista_body_modal_eliminar.innerHTML = data
        })
    }

    function estilista_datos_modal_agregar() {
      estilista_body_modal_agregar = document.getElementById('estilista_datos_modal_agregar')
      fetch('<?=$_dominio?>/app/ajax/ajax.estilista.agregar.php')
        .then(response => response.text())
        .then(data => {
          estilista_body_modal_agregar.innerHTML = data
        })
    }</script>