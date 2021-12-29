          <form class="row g-3" method="post" action="">
            <div class="card border-primary mb-3 mx-auto" style="max-width: 1000px">
              <div class="card-header bg-transparent border-primary text-primary display-4">
                Sucursal
              </div>
              <div class="card-body text-primary">
                <div class="row">
                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Id Usuario</label>
                    <input placeholder="Id Usuario" type="text" class="form-control" id="inputPassword4" name="id-usuario" required />
                  </div>
                  <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Sucursal</label>
                    <input placeholder="Sucursal" type="text" class="form-control" id="inputPassword4" name="sucursal" required />
                  </div>
                  <div class="col-md-6">
                    <label for="inputAddress" class="form-label">Direccion</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="Direccion" name="direccion" />
                  </div>
                  <div class="col-md-6">
                    <label for="inputAddress" class="form-label">Email</label>
                    <input type="email" class="form-control" id="inputAddress" placeholder="Email" name="email" />
                  </div>
                  <div class="col-md-6">
                    <label for="inputAddress" class="form-label">Telefono</label>
                    <input type="number" class="form-control" id="inputAddress" placeholder="Telefono" name="telefono" required />
                  </div>
                  <div class="col-md-6">
                    <label for="inputAddress" class="form-label">Horario</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="Horario" name="horario" />
                  </div>
                </div>
              </div>
              <div class="card-footer bg-transparent border-primary">
                <div class="col-12">
                  <input type="hidden" name="agregar-sucursal" value="true" />
                  <button type="submit" class="btn btn-primary mx-auto d-block">
                    Agregar Sucursal
                  </button>
                </div>
              </div>
            </div>
          </form>