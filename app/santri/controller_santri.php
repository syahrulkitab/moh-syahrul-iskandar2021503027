<?php
$act = $_GET['act'];

if($act == 'save') {
    $id_induk = $_POST['id_induk'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $asrama = $_POST['asrama'];
    $pendidikan = $_POST['pendidikan'];

$query = $db->query("INSERT INTO induk_santri (id_induk, nama, alamat, asrama, pendidikan)
            VALUES ('$id_induk', '$nama', '$alamat', '$asrama', '$pendidikan')");
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
    $id_induk = $_POST['id_induk'];
    $id_induk_old = $_POST['id_induk_old'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $asrama = $_POST['asrama'];
    $pendidikan = $_POST['pendidikan'];

    if (!empty($password)) {
        $password_fix = sha1($password);
        $query = $db->query("UPDATE induk_santri SET id_induk = '$id_induk',
                                                nama = '$nama',
                                                alamat = '$alamat',
                                                asrama = '$asrama',
                                                pendidikan = '$pendidikan'
                                        WHERE id_induk= '$id_induk_old'");
    } else {
        $query = $db->query("UPDATE induk_santri SET id_induk = '$id_induk',
                                                nama = '$nama',
                                                alamat = '$alamat',
                                                asrama = '$asrama',
                                                pendidikan = '$pendidikan'
                                        WHERE id_induk= '$id_induk_old'");
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
    $id_induk = $_GET['id_induk'];
    $query = $db->query("DELETE FROM induk_santri WHERE id_induk = '$id_induk'");

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

