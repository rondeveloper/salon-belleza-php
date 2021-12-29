<?php
session_start();
include "app/items/variables.php";
if (!isset($_SESSION['token-usuario'])) {
    header('Location: login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="assets/css/estilo.css">
    <link rel="shortcut icon" type="image/icon" href="assets/imagenes/salon-de-belleza-el-ayudante.png" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body id="body-pd">
    <header class="header shadow-sm" style="height: 48px;" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle" style="color: #ffad01"></i> </div>
        <div class="dropdown ">
            <div class="admin" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
            </div>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <li><a class="dropdown-item text-danger" href="#" onclick="cerrar_session()"><i class='bx bxs-exit bx-flashing fs-3'></i> CERRAR SESION</a></li>
            </ul>
        </div>
    </header>
    <div class="l-navbar" id="nav-bar" style="background-color: #006791;">

        <nav class="nav flex-row">
            <div>
                <?php
                include "app/items/item.menu.php";
                ?>
            </div>
            <a href="index.php?tog=palanca" class="nav_link text-light fw-bolder fs-6"><i class='bx bx-log-out nav_icon fs-4'></i><span class="nav_name ">Ir a la web: Salon Belleza</span></a>
        </nav>
    </div>
    <div class="height-100">
        <?php
        include "app/items/DB.php";
        if (isset($_GET["page"])) {
            $page = $_GET["page"];
            if (file_exists("app/pages/" . $page . '.php')) {
                include "app/pages/" . $page . '.php';
            }
        } else {
            include "app/pages/usuario.php";
        }
        ?>
    </div>
    <script src="assets/js/script.js"></script>
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