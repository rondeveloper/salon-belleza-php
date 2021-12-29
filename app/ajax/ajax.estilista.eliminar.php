<?php
$codigo_estilista = $_GET['codigo_estilista'];
include "../items/DB.php";
$consulta_select_estilista= "SELECT * FROM estilista WHERE `ID_estilista`='$codigo_estilista'";
$resultado = mysqli_query($conexion,$consulta_select_estilista);
if (mysqli_num_rows($resultado) == 0) {
  echo 'el cliente no fue encontrado';
} else {
  $datos_estilista = mysqli_fetch_array($resultado);
?>
  <form class="row g-3" method="post" action="" onsubmit="
  
return confirm('Esta seguro de eliminar el registro?')
">
    <div class="card border-danger mb-3 mx-auto" style="max-width: 1000px">

      <div class="card-body text-danger">
        <div class="row">
        <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Estilista</label>
                    <input placeholder="Estilista" type="text" class="form-control" id="inputPassword4" name="estilista" required value="<?=$datos_estilista['NOMBRE']?>" />
                  </div>
                  <div class="col-md-6">
                    <label for="inputAddress" class="form-label">Turno</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="Turno" name="turno" value="<?=$datos_estilista['TURNO']?>" />
                  </div>
                  <div class="col-md-6">
                    <label for="inputAddress" class="form-label">Cargo</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="Cargo" name="cargo" value="<?=$datos_estilista['CARGO']?>" />
                  </div>
                  <div class="col-md-6">
                    <label for="inputAddress" class="form-label">Sueldo</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="Sueldo" name="sueldo" required value="<?=$datos_estilista['SUELDO']?>" />
                  </div>
                  <div class="col-md-6">
                    <label for="inputAddress" class="form-label">Email</label>
                    <input type="email" class="form-control" id="inputAddress" placeholder="Email" name="email" value="<?=$datos_estilista['E-MAIL']?>" />
                  </div>
                  <div class="col-md-6">
                    <label for="inputAddress2" class="form-label">Telefono</label>
                    <input type="number" size="11" class="form-control" id="inputAddress2" placeholder="Telefono" name="telefono" required value="<?=$datos_estilista['TELEFONO']?>" />
                  </div>
                  <div class="col-md-6">
                    <label for="inputAddress2" class="form-label">Telefono-2</label>
                    <input type="number" size="11" class="form-control" id="inputAddress2" placeholder="Telefono-2" name="telefono-2" value="<?=$datos_estilista['TELEFONO-2']?>" />
                  </div>
                </div>
      </div>
      <div class="card-footer bg-transparent border-danger">
        <div class="col-12">
        <input type="hidden" name="eliminar-estilista" value="true"/>
        <input type="hidden" name="id-estilista" value="<?php echo $datos_estilista['ID_ESTILISTA']; ?>"/>
          <button type="submit" class="btn btn-danger mx-auto d-block">
            Eliminar Estilista
          </button>
        </div>
      </div>
    </div>
  </form>
<?php
}
?>