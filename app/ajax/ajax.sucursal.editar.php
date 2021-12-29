<?php
$codigo_sucursal= $_GET['codigo_sucursal'];
include "../items/DB.php";
$consulta_select_sucursal= "SELECT * FROM sucursal WHERE `ID_SUCURSAL`='$codigo_sucursal'";
$resultado = mysqli_query($conexion, $consulta_select_sucursal);
if (mysqli_num_rows($resultado) == 0) {
  echo 'el cliente no fue encontrado';
} else {
  $datos_sucursal= mysqli_fetch_array($resultado);
?>
 <form class="row g-3" method="post" action="">
            <div class="card border-primary mb-3 mx-auto" style="max-width: 1000px">
              <div class="card-header bg-transparent border-primary text-primary display-4">
                Sucursal
              </div>
              <div class="card-body text-primary">
                <div class="row">
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Id Usuario</label>
                    <input placeholder="Id Usuario" type="text" class="form-control" id="inputPassword4" name="id-usuario" required value="<?=$datos_sucursal['ID_USUARIO']?>" disabled />
                  </div>
                  <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Sucursal</label>
                    <input placeholder="Sucursal" type="text" class="form-control" id="inputPassword4" name="sucursal"  value="<?=$datos_sucursal['SUCURSAL']?>"required />
                  </div>
                  <div class="col-md-6">
                    <label for="inputAddress" class="form-label">Direccion</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="Direccion" name="direccion"  value="<?=$datos_sucursal['DIRECCION']?>"/>
                  </div>
                  <div class="col-md-6">
                    <label for="inputAddress" class="form-label">Email</label>
                    <input type="email" class="form-control" id="inputAddress" placeholder="Email"  value="<?=$datos_sucursal['E-MAIL']?>"name="email" />
                  </div>
                  <div class="col-md-6">
                    <label for="inputAddress" class="form-label">Telefono</label>
                    <input type="number" class="form-control" id="inputAddress" placeholder="Telefono" name="telefono" value="<?=$datos_sucursal['TELEFONO']?>" required />
                  </div>
                  <div class="col-md-6">
                    <label for="inputAddress" class="form-label">Horario</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="Horario"  value="<?=$datos_sucursal['HORARIO']?>" name="horario" />
                  </div>
                </div>
              </div>
              <div class="card-footer bg-transparent border-primary">
                <div class="col-12">
                   <input type="hidden" name="id-sucursal" value="<?php echo $datos_sucursal['ID_SUCURSAL']; ?>"/>
                  <input type="hidden" name="editar-sucursal" value="true" />
                  <button type="submit" class="btn btn-primary mx-auto d-block">
                    Editar Sucursal
                  </button>
                </div>
              </div>
            </div>
          </form>
<?php
}
?>