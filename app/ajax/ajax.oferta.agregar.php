<form class="row g-3" method="post" action="">
            <div class="card border-primary mb-3 mx-auto" style="max-width: 1000px">
              <div class="card-header bg-transparent border-primary text-primary display-4">
                Oferta
              </div>
              <div class="card-body text-primary">
                <div class="row">
                  <div class="col-md-6">
                    <input type="hidden" name="id-usuario" value="1" />
                    <input type="hidden" name="id-servicio" value="1" />
                    <label for="inputPassword4" class="form-label">Oferta</label>
                    <input placeholder="Oferta" type="text" class="form-control" id="inputPassword4" name="oferta" required />
                  </div>
                  <div class="col-md-6">
                    <label for="inputAddress" class="form-label">Precio Oferta</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="Precio Oferta" name="precio_oferta" />
                  </div>
                </div>
              </div>
              <div class="card-footer bg-transparent border-primary">
                <div class="col-12">
                  <input type="hidden" name="agregar-oferta" value="true" />
                  <button type="submit" class="btn btn-primary mx-auto d-block">
                    Agregar Oferta
                  </button>
                </div>
              </div>
            </div>
          </form>