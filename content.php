<?php
if(!isset($_GET['page'])) {
    ?>
    <div class="card">
            <div class="card-header">
                Beranda
            </div>
            <div class="card-body">
                <h5 class="card-title">Selamat Datang Di Pembuatan KTS</h5>
                <p class="card-text">Silahkan klik menu diatas untuk mengelola content</p>
            </div>
        </div>
    <?php
}
else {
    $page = $_GET['page'];
    $rootFolder = 'app/';
    $ext = ".php";
    if(!isset($_GET['act'])) {
        $end_point = '/list_';
        include $rootFolder . $page . $end_point . $page . $ext;
    }
    else {
        $act = $_GET['act'];
        if ($act == 'input' || $act == 'edit') {
            $end_point = '/form_';
            include $rootFolder . $page . $end_point . $page . $ext;
        }
        elseif($act == 'save' || $act == 'update' || $act == 'hapus') {
            $end_point = '/controller_';
            include $rootFolder . $page . $end_point . $page . $ext;
        }
    }
}
