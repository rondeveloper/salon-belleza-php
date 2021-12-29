<?php
$codigo_usuario = $_GET['codigo_usuario'];
include "../items/DB.php";
$consulta_select_usuario = "SELECT * FROM usuario WHERE `ID_USUARIO`='$codigo_usuario'";
$resultado = mysqli_query($conexion, $consulta_select_usuario);
if (mysqli_num_rows($resultado) == 0) {
  echo 'el cliente no fue encontrado';
} else {
  $datos_usuario = mysqli_fetch_array($resultado);
?>
  <form class="row g-3" method="post" action="" onsubmit="
  
return confirm('Esta seguro de eliminar el registro?')
">
    <div class="card border-danger mb-3 mx-auto" style="max-width: 1000px">

      <div class="card-body text-danger">
        <div class="row">
          <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Id Usuario</label>
            <input placeholder="Id Usuario" type="text" class="form-control" id="inputPassword4" name="id-usuario" value="<?= $datos_usuario['ID_USUARIO'] ?>" required/>
          </div>
          <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Usuario</label>
            <input placeholder="Usuario" type="text" class="form-control" id="inputPassword4" name="usuario" value="<?= $datos_usuario['USUARIO'] ?>" required />
          </div>
          <div class="col-md-6">
            <label for="inputAddress" class="form-label">Contrase&ntilde;a</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="Contrase&ntilde;a" name="contrasena" value="<?= $datos_usuario['CONTRASENA'] ?>" />
          </div>
          <div class="col-md-6">
            <label for="inputAddress" class="form-label">Email</label>
            <input type="email" class="form-control" id="inputAddress" placeholder="Email" name="email" value="<?= $datos_usuario['EMAIL'] ?>" />
          </div>
          <div class="col-md-6">
            <label for="inputAddress" class="form-label">Nombres</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="Nombres" name="nombres" required value="<?= $datos_usuario['NOMBRES'] ?>" />
          </div>
          <div class="col-md-6">
            <label for="inputAddress" class="form-label">Apellidos</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="Apellidos" name="apellidos" value="<?= $datos_usuario['APELLIDOS'] ?>" />
          </div>
          <div class="col-md-6">
            <label for="inputAddress2" class="form-label">Edad</label>
            <input type="number" size="11" class="form-control" id="inputAddress2" placeholder="Edad" name="edad" value="<?= $datos_usuario['EDAD'] ?>" required />
          </div>
          <div class="col-md-6">
            <label for="inputAddress2" class="form-label">Telefono</label>
            <input type="number" size="11" class="form-control" id="inputAddress2" placeholder="Telefono" name="telefono" required value="<?= $datos_usuario['TELEFONO'] ?>" />
          </div>
        </div>
      </div>
      <div class="card-footer bg-transparent border-danger">
        <div class="col-12">
          <input type="hidden" name="eliminar-usuario" value="true" />
          <button type="submit" class="btn btn-danger mx-auto d-block">
            Eliminar Usuario
          </button>
        </div>
      </div>
    </div>
  </form>
<?php
}
?>