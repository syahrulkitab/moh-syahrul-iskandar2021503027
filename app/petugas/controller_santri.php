<?php
$act = $_GET['act'];

if($act == 'save') {
    $id_petugas = $_POST['id_petugas'];
    $nama = $_POST['nama'];
    $data_santri = $_POST['data_santri'];

$query = $db->query("INSERT INTO induk_santri (id_petugas, nama, data_santri,)
            VALUES ('$id_petugas', '$nama', '$data_santri')");
if($query) {
    echo "<script>
        alert('Data Sukses disimpan');
        window.location.href='" . base_url() . "index.php?page=santri';
    </script>";
}
else {
    echo "<script>
        alert('Data Gagal disimpan');
        window.location.href='" . base_url() . "index.php?page=santri&act=input';
    </script>";
}
}
else if($act == 'update') {
    $id_petugas = $_POST['id_petugas'];
    $id_petugas_old = $_POST['id_petugas_old'];
    $nama = $_POST['nama'];
    $data_santri = $_POST['data_santri'];
    

    if (!empty($password)) {
        $password_fix = sha1($password);
        $query = $db->query("UPDATE induk_santri SET id_petugas = '$id_petugas',
                                                nama = '$nama',
                                                data_santri = '$data_santri',
                                        WHERE id_petugas= '$id_petugas_old'");
    } else {
        $query = $db->query("UPDATE induk_santri SET id_petugas = '$id_petugas',
                                                nama = '$nama',
                                                data_santri = '$data_santri',
                                        WHERE id_petugas= '$id_petugas_old'");
    }

    if($query) {
        echo "<script>
            alert('Data Sukses diubah');
            window.location.href='" . base_url() . "index.php?page=santri';
        </script>";
    }
    else {
        echo "<script>
            alert('Data Gagal diubah');
            window.location.href='" . base_url() . "index.php?page=santri';
        </script>";
    }
}
else if($act == 'hapus') {
    $id_petugas = $_GET['id_petugas'];
    $query = $db->query("DELETE FROM induk_santri WHERE id_petugas = '$id_petugas'");

    if($query) {
        echo "<script>
            alert('Data Sukses dihapus');
            window.location.href='" . base_url() . "index.php?page=santri';
        </script>";
    }
    else {
        echo "<script>
            alert('Data Gagal dihapus');
            window.location.href='" . base_url() . "index.php?page=santri';
        </script>";
    }

}
else {
    echo "<script>
        alert('Maaf, parameter Anda tidak valid');
        window.location.href='" . base_url() . "index.php?page=santri';
    </script>";
}

