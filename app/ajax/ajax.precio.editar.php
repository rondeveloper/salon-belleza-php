<?php
$codigo_precio = $_GET['codigo_precio'];
include "../items/DB.php";
$consulta_select_precio= "SELECT * FROM precio WHERE `ID_PRECIO`='$codigo_precio'";
$resultado = mysqli_query($conexion, $consulta_select_precio);
if (mysqli_num_rows($resultado) == 0) {
  echo 'el cliente no fue encontrado';
} else {
  $datos_precio = mysqli_fetch_array($resultado);
?>
<form class="row g-3" method="post" action="">
            <div class="card border-primary mb-3 mx-auto" style="max-width: 1000px">
              <div class="card-header bg-transparent border-primary text-primary display-4">
                Precio
              </div>
              <div class="card-body text-primary">
                <div class="row">
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Id Usuario</label>
                    <input placeholder="Id Usuario" type="text" class="form-control" id="inputPassword4" name="id-usuario" required value="<?=$datos_precio['ID_USUARIO']?>" />
                </div>
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Id Servicio</label>
                    <input placeholder="Id Servicio" type="text" class="form-control" id="inputPassword4" name="id-servicio" required value="<?=$datos_precio['ID_SERVICIO']?>" />
                </div>
                  <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Precio</label>
                    <input placeholder="Precio" type="text" class="form-control" id="inputPassword4" name="precio" required value="<?=$datos_precio['PRECIO']?>"/>
                  </div>
                </div>
              </div>
              <div class="card-footer bg-transparent border-primary">
                <div class="col-12">
                  <input type="hidden" name="editar-precio" value="true" />
                   <input type="hidden" name="id-precio" value="<?php echo $datos_precio['ID_PRECIO']; ?>"/>
                  <button type="submit" class="btn btn-primary mx-auto d-block">
                    Editar Precio
                  </button>
                </div>
              </div>
            </div>
          </form>
<?php
}
?>