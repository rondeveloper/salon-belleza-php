<form class="row g-3" method="post" action="">
            <div class="card border-primary mb-3 mx-auto" style="max-width: 1000px">
              <div class="card-header bg-transparent border-primary text-primary display-4">
                Servicio
              </div>
              <div class="card-body text-primary">
                <div class="row">
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Id Usuario</label>
                    <input placeholder="Id Usuario" type="text" class="form-control" id="inputPassword4" name="id-usuario" required />
                  </div>
                  <div class="col-md-6">
                    <label for="inputAddress" class="form-label">Id Precio</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="Id Precio" name="id-precio" />
                  </div>
                  <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Servicio</label>
                    <input placeholder="Servicio" type="text" class="form-control" id="inputPassword4" name="servicio" required />
                  </div>
                  <div class="col-md-6">
                    <label for="inputAddress" class="form-label">Especifico</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="Especifico" name="especifico" />
                  </div>
                  <div class="col-md-6">
                    <label for="inputAddress" class="form-label">Nota</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="Nota" name="nota" />
                  </div>
                </div>
              </div>
              <div class="card-footer bg-transparent border-primary">
                <div class="col-12">
                  <input type="hidden" name="agregar-servicio" value="true" />
                  <button type="submit" class="btn btn-primary mx-auto d-block">
                    Agregar Servicio
                  </button>
                </div>
              </div>
            </div>
          </form>