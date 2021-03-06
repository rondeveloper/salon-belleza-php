<?php
session_start();
include "app/items/DB.php";
include "app/items/variables.php";
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Salon de Belleza</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/style.css" />
  <link rel="shortcut icon" href="assets/imagenes/salon-de-belleza-el-ayudante.png" type="image/x-icon" />
  <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
  <nav role="navegacion" class="nav-responsive">
    <div id="menuToggle"><input type="checkbox" />
      <span></span>
      <span></span>
      <span></span>
      <ul id="menu">
        <div class="dropdown ">
          <div class="el_ayudante" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
          </div>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <?php
            if (isset($_GET['tog'])) {
            ?>
              <li>
                <a class="dropdown-item text-primary" href="<?= $_dominio ?>/admin.php" type="button" class="btn btn-primary btn-lg px-5"><i class='bx bx-cog bx-flashing fs-3'></i> Administrador de Usuario </a>
              </li>
              <li>
                <a class="dropdown-item text-danger" href="#" onclick="cerrar_session()"><i class='bx bxs-exit bx-flashing fs-3'></i> CERRAR SESION</a>
              </li>
            <?php
            } else {
            ?>
              <li>
                <a class="dropdown-item text-primary" href="<?= $_dominio ?>/login.php" type="button" class="btn btn-primary btn-lg px-5"><i class='bx bx-cog bx-flashing fs-3'></i> Administrador de Usuario </a>
              </li>
            <?php
            }
            ?>
          </ul>
        </div>
        <li class="bp"><a href="#inicio">Inicio</a></li>
        <li class="bp"><a href="#servicios">Servicios</a></li>
        <li class="bp"><a href="#precios">Precios</a></li>
        <li class="bp"><a href="#citas">Cita</a></li>
        <li class="bp"><a href="#ofertas">Ofertas</a></li>
        <li class="bp"><a href="#sucursales">Sucursales</a></li>
        <li class="bp"><a href="#fotos">Fotos de Trabajo</a></li>
        <li class="bp"><a href="#informacion">Informacion</a></li>
      </ul>
    </div>
  </nav>
  <header>
    <nav class="mb-5">
      <ul>
        <div class="dropdown ">
          <div class="el_ayudante" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
          </div>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <?php
            if (isset($_GET['tog'])) {
            ?>
              <li>
                <a class="dropdown-item text-primary" href="<?= $_dominio ?>/admin.php" type="button" class="btn btn-primary btn-lg px-5"><i class='bx bx-cog bx-flashing fs-3'></i> Administrador de Usuario </a>
              </li>
              <li>
                <a class="dropdown-item text-danger" href="#" onclick="cerrar_session()"><i class='bx bxs-exit bx-flashing fs-3'></i> CERRAR SESION</a>
              </li>
            <?php
            } else {
            ?>
              <li>
                <a class="dropdown-item text-primary" href="<?= $_dominio ?>/login.php" type="button" class="btn btn-primary btn-lg px-5"><i class='bx bx-cog bx-flashing fs-3'></i> Administrador de Usuario </a>
              </li>
            <?php
            }
            ?>
          </ul>
        </div>
        <li><a href="#inicio">Inicio</a></li>
        <li><a href="#servicios">Servicios</a></li>
        <li><a href="#precios">Precios</a></li>
        <li><a href="#citas">Cita</a></li>
        <li><a href="#ofertas">Ofertas</a></li>
        <li><a href="#sucursales">Sucursales</a></li>
        <li><a href="#fotos">Fotos de Trabajo</a></li>
        <li><a href="#informacion">Informacion</a></li>
      </ul>
    </nav>
  </header>

  <div class="main-bg_image"></div>
  <main id="inicio">
    <div class="main-text overflow-auto">
      <h1 class="fw-bold">Los Mejores Servicios A Tu Alcance</h1>
      <p class="main-p">
        El Ayudante es un espacio ??nico con m??s de 100 metros cuadrados
        dedicados a la belleza y el arte. Nos gusta sorprender, siempre de la
        mano de los mejores artistas y dise??adores. Una vez entras en el
        espacio, el universo de El Ayudante te dan la bienvenida. Las obras de
        arte cubren las paredes del sal??n convirtiendo tu visita en una
        experiencia que combina belleza y cultura. Las obras expuestas cambian
        con frecuencia convirtiendo cada visita en una nueva experiencia
        art??stica.
      </p>
      <h1 class="fw-bold">El que hacer Extra</h1>
      <p class="main-p">
        No hay nada m??s gratificante que dejarse mimar por nuestros
        profesionales mientras contemplas arte. Al fondo del sal??n encontramos
        nuestro precioso jard??n, un pulm??n de paz franqueado por nuestro
        Magnolio centenario. El lugar id??neo para tomar un t?? de Aveda despu??s
        de disfrutar de nuestros tratamientos en el spa del sal??n.
      </p>
    </div>
    <div class="main-image"></div>
  </main>
  <section id="servicios">
    <div class="section-h1">Servicios "El Ayudante"</div>
    <article class="section-article_1">
      <div>
        <h3>Corte de Cabello Unisex</h3>
        <div class="article-imagen_1 transform-scale"></div>
      </div>
      <div>
        <h3>Tintes</h3>
        <div class="article-imagen_2 transform-scale"></div>
      </div>
      <div>
        <h3>Mechas</h3>
        <div class="article-imagen_3 transform-scale"></div>
      </div>
      <div>
        <h3>Manicure</h3>
        <div class="article-imagen_4 transform-scale"></div>
      </div>
      <div>
        <h3>Pedicure</h3>
        <div class="article-imagen_5 transform-scale"></div>
      </div>
      <div>
        <h3>Alicer con Keratina</h3>
        <div class="article-imagen_6 transform-scale"></div>
      </div>
      <div>
        <h3>Botox</h3>
        <div class="article-imagen_7 transform-scale"></div>
      </div>
      <div>
        <h3>Limpieza Facial</h3>
        <div class="article-imagen_8 transform-scale"></div>
      </div>
      <div>
        <h3>Masajes de Relajacion</h3>
        <div class="article-imagen_9 transform-scale"></div>
      </div>
      <div>
        <h3>Masajes Anti Estres</h3>
        <div class="article-imagen_10 transform-scale"></div>
      </div>
      <div>
        <h3>Masajes Reductores</h3>
        <div class="article-imagen_11 transform-scale"></div>
      </div>
      <div>
        <h3>Extension de pesta&ntilde;as</h3>
        <div class="article-imagen_12 transform-scale"></div>
      </div>
      <div>
        <h3>Chocolaterapia</h3>
        <div class="article-imagen_13 transform-scale"></div>
      </div>
    </article>
  </section>
  <section id="precios">
    <div class="section-h1">Precios Salon de Belleza "El Ayudante"</div>
    <table>
      <thead>
        <th>Servicio</th>
        <th>Precio</th>
      </thead>
      <tbody>

        <?php
        $consulta_select_ser = "SELECT * FROM servicio s INNER JOIN precio p ON s.ID_PRECIO=p.ID_PRECIO ORDER BY s.`ID_SERVICIO` ASC";
        $resultado_consulta_ser = mysqli_query($conexion, $consulta_select_ser);
        while ($datos_servicio = mysqli_fetch_array($resultado_consulta_ser)) {
        ?>
          <tr>
            <td><?= $datos_servicio['SERVICIO'] ?></td>
            <td><?= $datos_servicio['PRECIO'] ?></td>
          </tr>
        <?php
        }
        ?>

      </tbody>
    </table>
  </section>
  <section id="citas">
    <div class="section-h1">Cita</div>
    <div class="formulario">
      <form>
        <div>
          <label>Nombre</label>
          <input type="text" placeholder="Nombre" />
          <hr />
        </div>
        <div>
          <label>Servicio</label>
          <input type="text" placeholder="Servicio" />
          <hr />
        </div>
        <div>
          <label>Fecha</label>
          <input type="date" placeholder="Fecha" />
          <hr />
        </div>
        <div>
          <label>nota: no hay devoluciones</label>
          <input type="button" value="Comprar" />
        </div>
      </form>
    </div>
  </section>
  <section id="ofertas">
    <div class="section-h1">Ofertas de Salon de Belleza "El Ayudante"</div>
    <div class="section-ofertas">
      <div>
        <h3>Oferta Navide&ntilde;a del Mes de Diciembre</h3>
        <div class="section-img_navidena"></div>
        <p>
          Por esta Navidad encontraras ofertas navide&ntilde;as del Salon de
          Belleza "El Ayudante". Para lucir bien con tu familia el cual te
          desea Feliz Navidad y prospero a&ntilde;o nuevo
        </p>
        <div>
          <h4>Oferta 1 - Corte de Cabello Unisex</h4>
          <p>Por esta navidad el costo es 15BOB</p>
        </div>
        <div>
          <h4>Oferta 2 - Tintes</h4>
          <p>Por esta navidad el costo es 25BOB</p>
        </div>
        <div>
          <h4>Oferta 3 - Mechas</h4>
          <p>Por esta navidad el costo es 20BOB</p>
        </div>
        <div>
          <h4>Oferta 4 - Extension de pesta??as</h4>
          <p>Por esta navidad el costo es 10BOB</p>
        </div>
      </div>
      <div>
        <div>
          <h4>oferta 1</h4>
          <div class="oferta-1"></div>
        </div>
        <div>
          <h4>oferta 2</h4>
          <div class="oferta-2"></div>
        </div>
        <div>
          <h4>oferta 3</h4>
          <div class="oferta-3"></div>
        </div>
        <div>
          <h4>oferta 4</h4>
          <div class="oferta-4"></div>
        </div>
      </div>
    </div>
  </section>
  <section id="sucursales">
    <div class="section-h1">Sucursales "El Ayudante"</div>
    <div class="section-sucursal">
      <div>
        <h2>Sucursal de la calle Aladin</h2>
        <div class="section-sucursal_1"></div>
        <p>Av. Aladin #5108 | Tel: 8904-0884 / 5861-8601</p>
        <h3>HORARIOS</h3>
        <p>Lunes a Domingo de 10 a 20hs</p>
      </div>
      <div>
        <h2>Sucursal de la calle Talento</h2>
        <div class="section-sucursal_2"></div>
        <p>Av. Talento #8108 | Tel: 8123-0884 / 5234-8601</p>
        <h3>HORARIOS</h3>
        <p>Lunes a Domingo de 10 a 20hs</p>
      </div>
      <div>
        <h2>Sucursal de la calle Amo</h2>
        <div class="section-sucursal_3"></div>
        <p>Av. Amo #1208 | Tel: 3454-0884 / 5861-8601</p>
        <h3>HORARIOS</h3>
        <p>Lunes a Domingo de 10 a 20hs</p>
      </div>
      <div>
        <h2>Sucursal de la calle Servier</h2>
        <div class="section-sucursal_4"></div>
        <p>Av. Servier #3458 | Tel:5674-0884 / 5456-8601</p>
        <h3>HORARIOS</h3>
        <p>Lunes a Domingo de 10 a 20hs</p>
      </div>
      <div>
        <h2>Sucursal de la calle Genio</h2>
        <div class="section-sucursal_5"></div>
        <p>Av. Genio #6708 | Tel: 8904-0884 / 5678-8601</p>
        <h3>HORARIOS</h3>
        <p>Lunes a Domingo de 10 a 20hs</p>
      </div>
      <div>
        <h2>Sucursal de la calle Fiel</h2>
        <div class="section-sucursal_6"></div>
        <p>Av. Fiel #8908 | Tel: 789-0884 / 8908-8601</p>
        <h3>HORARIOS</h3>
        <p>Lunes a Domingo de 10 a 20hs</p>
      </div>
    </div>
  </section>
  <section id="fotos">
    <div class="section-h1">Fotos de Trabajo</div>
    <div class="section-fotos_trabajo">
      <p class="text-center mt-5 pt-5 lead">Foto de Aladin</p>
      <div class="foto-1"></div>
      <p class="text-center mt-5 pt-5 lead">Foto de Talento</p>
      <div class="foto-2"></div>
      <p class="text-center mt-5 pt-5 lead">Foto de Amo</p>
      <div class="foto-3"></div>
      <p class="text-center mt-5 pt-5 lead">Foto de Servier</p>
      <div class="foto-4"></div>
      <p class="text-center mt-5 pt-5 lead">Foto de Genio</p>
      <div class="foto-5"></div>
      <p class="text-center mt-5 pt-5 lead">Foto de Fiel</p>
      <div class="foto-6"></div>
    </div>
  </section>
  <section id="informacion">
    <div class="section-h1">Informacion de "El Ayudante"</div>
    <ol>
      <li><a href="" target="_blank">Aviso Legal</a></li>
      <li><a href="" target="_blank">Politica de Privacidad</a></li>
      <li><a href="" target="_blank">Licencia</a></li>
      <li><a href="" target="_blank">Publicidad</a></li>
    </ol>
  </section>
  <footer>
    <div class="footer">
      <div>
        <p>
          Salon de Belleza "El Ayudante" esta Abierto a la gente del mundo
          desde 1923
        </p>
      </div>
      <div class="footer-text">
        El Primer Salon de Belleza en la Tierra
      </div>
      <div>Un proyecto para <a href="#"> &nbsp;API soft </a> &nbsp;pasantia</div>
      <div class="footer-text-2">
        <p>Copyright &copy; 2021</p>
      </div>
      <div class="footer-text-3">
        <p>Siguenos</p>
        <div class="conectate"></div>
      </div>
    </div>
    </div>
  </footer>
  <script src="assets/js/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script>
    function cerrar_session() {
      fetch('<?= $_dominio ?>/app/ajax/ajax.app.cerrar.php')
        .then(response => response.text())
        .then(data => {
          window.location = 'login.php'
        })
    }
  </script>
</body>

</html>