<link rel="shortcut icon" type="image/icon" href="assets/imagenes/salon-de-belleza-el-ayudante.png"/>
<?php
session_start();
include "app/items/variables.php";
include "app/items/DB.php";
$mensaje="";
if (isset($_POST["username"]) && isset($_POST["password"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $consulta_select_login = "SELECT * FROM usuario WHERE `USUARIO`='$username' AND `CONTRASENA`='$password' LIMIT 1";
    $resultado = mysqli_query($conexion, $consulta_select_login);
    $datos_login = mysqli_num_rows($resultado);
    if($datos_login==1){
        $_SESSION['token-usuario']=true;
        $mensaje ="<div class='alert alert-success mx-auto mt-5 text-uppercase text-center' style='z-index:8;'> usuario auntentificado</div>";
        echo "<script> 
          setTimeout(() => {
              window.location='admin.php'
          },1500)
        </script>";
    }else{
        $mensaje= "<div class='alert alert-danger mx-auto mt-5 text-uppercase text-center'> acceso denegado</div>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Inicio de Sesion</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">   
    <link rel="stylesheet" href="https://www.markuptag.com/bootstrap/5/css/bootstrap.min.css">
    <style>
        .btn-login{
            background-color: #006791; border:#006791;
        }
        .btn-login:hover{
            background-color:#f5b102 ; border:#006791;
        }
        .bg-login{
            background-image: url("assets/imagenes/salon-de-belleza-el-ayudante.png");
    background-size: contain;
    background-repeat: no-repeat;
    background-position: center 43px ;

        }
        .login-form{
            width: 50vw;
        }
        </style>
</head>
<body>
    <div class="container  ">
        <div class="row bg-login mx-auto">
            <div class="col mt-5">
                <div class="login-form mt-5 p-4 rounded mx-auto" style="background: rgba(14,151,193, 0.62);">
                    <form action="" method="post" class="row g-3" style="color: #006791; ">
                        <?=$mensaje?>
                        <h4 class="text-center" >Ingreso de Usuario</h4>
                        <div class="col-12">
                            <label>Nombre de usuario</label>
                            <input type="text" name="username" class="form-control" placeholder="Nombre de usuario">
                        </div>
                        <div class="col-12">
                            <label>Contraseña</label>
                            <input type="password" name="password" class="form-control" placeholder="Contraseña">
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-login btn-dark mx-auto d-block hover" >Ingresar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center"><a href="<?=$_dominio?>/index.php?page=access" class="text-decoration-none">Ir a la web: Salon Belleza</a></div>
    <div class="text-center fw-bolder text-dark pt-5 mt-5">Para la Pasantia de ApiSoft:<br>Usuario:Salon<br>Password:123</div>
    <script src="https://www.markuptag.com/bootstrap/5/js/bootstrap.bundle.min.js"></script>
</body>
</html>