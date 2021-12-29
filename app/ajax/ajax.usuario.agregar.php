
<form class="row g-3" method="post" action="">
            <div class="card border-primary mb-3 mx-auto" style="max-width: 1000px">
              <div class="card-header bg-transparent border-primary text-primary display-4">
                Usuario
              </div>
              <div class="card-body text-primary">
                <div class="row">
                  <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Usuario</label>
                    <input placeholder="Usuario" type="text" class="form-control" id="inputPassword4" name="usuario" required />
                  </div>
                  <div class="col-md-6">
                    <label for="inputAddress" class="form-label">Contrase&ntilde;a</label>
                    <input type="password" class="form-control" id="inputAddress" placeholder="Contrase&ntilde;a" name="contrasena" />
                  </div>
                  <div class="col-md-6">
                    <label for="inputAddress" class="form-label">Email</label>
                    <input type="email" class="form-control" id="inputAddress" placeholder="Email" name="email" />
                  </div>
                  <div class="col-md-6">
                    <label for="inputAddress" class="form-label">Nombres</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="Nombres" name="nombres" required />
                  </div>
                  <div class="col-md-6">
                    <label for="inputAddress" class="form-label">Apellidos</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="Apellidos" name="apellidos" />
                  </div>
                  <div class="col-md-6">
                    <label for="inputAddress2" class="form-label">Edad</label>
                    <input type="number" size="11" class="form-control" id="inputAddress2" placeholder="Edad" name="edad" required />
                  </div>
                  <div class="col-md-6">
                    <label for="inputAddress2" class="form-label">Telefono</label>
                    <input type="number" size="11" class="form-control" id="inputAddress2" placeholder="Telefono" name="telefono" required />
                  </div>
                </div>
              </div>
              <div class="card-footer bg-transparent border-primary">
                <div class="col-12">
                  <input type="hidden" name="agregar-usuario" value="true" />
                  <button type="submit" class="btn btn-primary mx-auto d-block">
                    Agregar Usuario
                  </button>
                </div>
              </div>
            </div>
          </form>