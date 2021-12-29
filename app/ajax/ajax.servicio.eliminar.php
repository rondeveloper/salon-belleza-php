<?php
$codigo_servicio = $_GET['codigo_servicio'];
include "../items/DB.php";
$consulta_select_servicio= "SELECT * FROM servicio WHERE `ID_SERVICIO`='$codigo_servicio'";
$resultado = mysqli_query($conexion,$consulta_select_servicio);
if (mysqli_num_rows($resultado) == 0) {
  echo 'el cliente no fue encontrado';
} else {
  $datos_servicio = mysqli_fetch_array($resultado);
?>
  <form class="row g-3" method="post" action="" onsubmit="
  
return confirm('Esta seguro de eliminar el registro?')
">
    <div class="card border-danger mb-3 mx-auto" style="max-width: 1000px">

      <div class="card-body text-danger">
                <div class="row">
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Id Usuario</label>
                    <input placeholder="Id Usuario" type="text" class="form-control" id="inputPassword4" name="id-usuario" required value="<?=$datos_servicio['ID_USUARIO']?>"/>
                  </div>
                  <div class="col-md-6">
                    <label for="inputAddress" class="form-label">Id Precio</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="Id Precio" name="id-precio" value="<?=$datos_servicio['ID_PRECIO']?>"/>
                  </div>
                  <div class="col-md-6">
                   <label for="inputPassword4" class="form-label">Servicio</label>
                    <input placeholder="Servicio" type="text" class="form-control" id="inputPassword4" name="servicio" required value="<?=$datos_servicio['SERVICIO']?>" />
                  </div>
                  <div class="col-md-6">
                    <label for="inputAddress" class="form-label">Especifico</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="Especifico" name="especifico" value="<?=$datos_servicio['ESPECIFICO']?>" />
                  </div>
                  <div class="col-md-6">
                    <label for="inputAddress" class="form-label">Nota</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="Nota" name="nota" value="<?=$datos_servicio['NOTA']?>" />
                  </div>
                </div>                 
      </div>
      <div class="card-footer bg-transparent border-danger">
        <div class="col-12">
        <input type="hidden" name="eliminar-servicio" value="true"/>
        <input type="hidden" name="id-servicio" value="<?php echo $datos_servicio['ID_SERVICIO']; ?>"/>
       <button type="submit" class="btn btn-danger mx-auto d-block">
            Eliminar Servicio
          </button>
        </div>
      </div>
    </div>
  </form>
<?php
}
?>