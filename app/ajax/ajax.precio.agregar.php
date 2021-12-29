<form class="row g-3" method="post" action="">
            <div class="card border-primary mb-3 mx-auto" style="max-width: 1000px">
              <div class="card-header bg-transparent border-primary text-primary display-4">
                Precio
              </div>
              <div class="card-body text-primary">
                <div class="row">
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Id Usuario</label>
                    <input placeholder="Id Usuario" type="text" class="form-control" id="inputPassword4" name="id-usuario" required />
                </div>
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Id Servicio</label>
                    <input placeholder="Id Servicio" type="text" class="form-control" id="inputPassword4" name="id-servicio" required />
                </div>
                  <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Precio</label>
                    <input placeholder="Precio" type="text" class="form-control" id="inputPassword4" name="precio" required />
                  </div>
                </div>
              </div>
              <div class="card-footer bg-transparent border-primary">
                <div class="col-12">
                  <input type="hidden" name="agregar-precio" value="true" />
                  <button type="submit" class="btn btn-primary mx-auto d-block">
                    Agregar Precio
                  </button>
                </div>
              </div>
            </div>
          </form>