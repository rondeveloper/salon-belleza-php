<div class="nav_list" >
    <a href="admin.php?page=usuario" class="nav_link my-0 <?= activeMenu('usuario') ?>">
        <h4 class="fw-bolder fs-2 my-1"><i class='bx bx-group nav_icon bx-flashing fs-3'></i> Usuarios</h4>    </a>
    <a href="admin.php?page=sucursal" class="nav_link my-0 <?= activeMenu('sucursal') ?>">
    <h4 class="fw-bolder fs-2 my-1"><i class='bx bxs-business bx-flashing fs-3'></i> Sucursales</h4>
    </a>
    <a href="admin.php?page=servicio"class="nav_link my-0">
    <h4 class="<?= activeMenu('servicio') ?> fw-bolder fs-2 my-1"><i class='bx bx-server bx-flashing fs-3'></i> Servicios</h4>
    </a>
    <a href="admin.php?page=precio" class="nav_link my-0 <?= activeMenu('precio') ?>">
    <h4 class="fw-bolder fs-2 my-1"><i class='bx bx-dollar bx-flashing fs-3'></i> Precios</h4>
    </a>
    <a href="admin.php?page=oferta" class="nav_link my-0 <?= activeMenu('oferta') ?>">
    <h4 class="fw-bolder fs-2 my-1"><i class='bx bxs-offer bx-flashing fs-3'></i> Ofertas</h4>
    </a>
    <a href="admin.php?page=estilista" class="nav_link my-0 <?= activeMenu('estilista') ?>">
    <h4 class="fw-bolder fs-2 my-1"><i class='bx bx-cut bx-flashing fs-3'></i> Estilistas</h4>
    </a>
    <a href="admin.php?page=cliente" class="nav_link my-0 <?= activeMenu('cliente') ?>">
    <h4 class="fw-bolder fs-2 my-1"><i class='bx bx-spreadsheet bx-flashing fs-3' ></i> Cliente</h4>
    </a>
    <a href="admin.php?page=cita" class="nav_link my-0 <?= activeMenu('cita') ?>">
    <h4 class="fw-bolder fs-2 my-1"><i class='bx bx-body bx-flashing fs-3' ></i> Cita</h4>
    </a>
    <a href="admin.php?page=agenda" class="nav_link my-0 <?= activeMenu('agenda') ?>">
    <h4 class="fw-bolder fs-2 my-1"><i class='bx bx-user-check bx-flashing fs-3'></i> Agenda</h4>
    </a>
</div>

<?php

function activeMenu($opcion_menu){
    if(isset($_GET['page']) && $opcion_menu==$_GET['page']){
        return "active text-info";
    }else{
        return " text-light";
    }
}
