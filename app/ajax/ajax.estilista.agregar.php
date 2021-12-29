
          <form class="row g-3" method="post" action="">
            <div class="card border-primary mb-3 mx-auto" style="max-width: 1000px">
              <div class="card-header bg-transparent border-primary text-primary display-4">
                Estilista
              </div>
              <div class="card-body text-primary">
                <div class="row">
                  <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Estilista</label>
                    <input placeholder="Estilista" type="text" class="form-control" id="inputPassword4" name="estilista" required />
                  </div>
                  <div class="col-md-6">
                    <label for="inputAddress" class="form-label">Turno</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="Turno" name="turno" />
                  </div>
                  <div class="col-md-6">
                    <label for="inputAddress" class="form-label">Cargo</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="Cargo" name="cargo" />
                  </div>
                  <div class="col-md-6">
                    <label for="inputAddress" class="form-label">Sueldo</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="Sueldo" name="sueldo" required />
                  </div>
                  <div class="col-md-6">
                    <label for="inputAddress" class="form-label">Email</label>
                    <input type="email" class="form-control" id="inputAddress" placeholder="Email" name="email" />
                  </div>
                  <div class="col-md-6">
                    <label for="inputAddress2" class="form-label">Telefono</label>
                    <input type="number" size="11" class="form-control" id="inputAddress2" placeholder="Telefono" name="telefono" required />
                  </div>
                  <div class="col-md-6">
                    <label for="inputAddress2" class="form-label">Telefono-2</label>
                    <input type="number" size="11" class="form-control" id="inputAddress2" placeholder="Telefono-2" name="telefono-2" />
                  </div>
                </div>
              </div>
              <div class="card-footer bg-transparent border-primary">
                <div class="col-12">
                <input type="hidden" name="id-usuario" value="1" />
                    <input type="hidden" name="id-sucursal" value="1"/>
                  <input type="hidden" name="agregar-estilista" value="true" />
                  <button type="submit" class="btn btn-primary mx-auto d-block">
                    Agregar Estilista
                  </button>
                </div>
              </div>
            </div>
          </form>