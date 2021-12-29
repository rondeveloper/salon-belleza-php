<?php
$codigo_oferta = $_GET['codigo_oferta'];
include "../items/DB.php";
$consulta_select_oferta= "SELECT * FROM ofertas WHERE `ID_OFERTA`='$codigo_oferta'";
$resultado = mysqli_query($conexion,$consulta_select_oferta);
if (mysqli_num_rows($resultado) == 0) {
  echo 'el cliente no fue encontrado';
} else {
  $datos_oferta = mysqli_fetch_array($resultado);
?>
  <form class="row g-3" method="post" action="" onsubmit="
  
return confirm('Esta seguro de eliminar el registro?')
">
    <div class="card border-danger mb-3 mx-auto" style="max-width: 1000px">

      <div class="card-body text-danger">
        <div class="row">
        <div class="col-md-6">
                    <input type="hidden" name="id-usuario" value="<?=$datos_oferta['ID_USUARIO']?>" />
                    <input type="hidden" name="id-servicio" value="<?=$datos_oferta['ID_SERVICIO']?>" />
                    <label for="inputPassword4" class="form-label">Oferta</label>
                    <input placeholder="Oferta" type="text" class="form-control" id="inputPassword4" name="oferta" required value="<?=$datos_oferta['OFERTA']?>"/>
                  </div>
                  <div class="col-md-6">
                    <label for="inputAddress" class="form-label">Precio Oferta</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="Precio Oferta" name="precio_oferta" value="<?=$datos_oferta['PRECIO_OFERTA']?>"/>
                  </div>
                </div>
      </div>
      <div class="card-footer bg-transparent border-danger">
        <div class="col-12">
        <input type="hidden" name="eliminar-oferta" value="true"/>
        <input type="hidden" name="id-oferta" value="<?php echo $datos_usuario['ID_OFERTA']; ?>"/>
          <button type="submit" class="btn btn-danger mx-auto d-block">
            Eliminar Oferta
          </button>
        </div>
      </div>
    </div>
  </form>
<?php
}
?>