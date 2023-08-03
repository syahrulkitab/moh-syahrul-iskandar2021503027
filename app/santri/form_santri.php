<?php
$act = isset($_GET['act']) ? $_GET['act'] : null;
$kode = isset($_GET['id_induk']) ? $_GET['id_induk'] : null; 

if($act == 'edit') {
    $url = base_url() . "index.php?page=santri&act=update";
    if($kode){
        $query = $db->query("SELECT * FROM induk_santri WHERE id_induk = '$kode'");
        $row = $query->fetch_array();
    }
    else {
        echo "<script>
        alert('Parameter kode tidak valid');
        window.location.href='" . base_url() . "index.php?page=santri';
    </script>";
    }
}
else {
    $url = base_url() . "index.php?page=santri&act=save";
}
?>
        <div class="card">
    <div class="card-header">
    Input Data Prodi
    </div>
<div class="card-body">
<form action="<?php echo $url; ?>" method="post">
    <input type="hidden" name="id_induk_old" id="id_induk" value="<?php echo isset($row) ? $row['id_induk'] : ''; ?>">
        <div class="mb-3">
            <label for="id_induk">Id Santri</label>
            <input type="text" class="form-control" name="id_induk" id="id_induk" value="<?php echo isset($row) ? $row['id_induk'] : ''; ?>">
        </div>
        <div class="mb-3">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" name="nama" id="nama" value="<?php echo isset($row) ? $row['nama'] : ''; ?>">
        </div>
        <div class="mb-3">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" name="alamat" id="alamat" value="<?php echo isset($row) ? $row['alamat'] : ''; ?>">
        </div>
        <div class="mb-3">
            <label for="asrama">Asrama</label>
            <input type="text" class="form-control" name="asrama" id="asrama" value="<?php echo isset($row) ? $row['asrama'] : ''; ?>">
        </div>
        <div class="mb-3">
            <label for="pendidikan">Pendidikan</label>
            <input type="text" class="form-control" name="pendidikan" id="pendidikan" value="<?php echo isset($row) ? $row['pendidikan'] : ''; ?>">
        </div>
        <div class="mb-3">
            <a class="btn btn-danger btn-sm float-start" href="list_santri.php">
                <i class="fa-solid fa-circle-arrow-left"></i>
                Kembali</button>
            </a>
            <button class= "btn btn-primary btn-sm float-end" type="submit">
                <i class="fa-regular fa-floppy-disk"></i>
                Simpan Data
            </button>
        </div>
    </form> 
</div>
</div>
