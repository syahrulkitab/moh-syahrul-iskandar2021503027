<?php
$act = isset($_GET['act']) ? $_GET['act'] : null;
$kode = isset($_GET['id_petugas']) ? $_GET['id_petugas'] : null; 

if($act == 'edit') {
    $url = base_url() . "index.php?page=santri&act=update";
    if($kode){
        $query = $db->query("SELECT * FROM induk_santri WHERE id_petugas = '$kode'");
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
    <input type="hidden" name="id_petugas_old" id="id_petugas" value="<?php echo isset($row) ? $row['id_petugas'] : ''; ?>">
        <div class="mb-3">
            <label for="id_petugas">Id Santri</label>
            <input type="text" class="form-control" name="id_petugas" id="id_petugas" value="<?php echo isset($row) ? $row['id_petugas'] : ''; ?>">
        </div>
        <div class="mb-3">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" name="nama" id="nama" value="<?php echo isset($row) ? $row['nama'] : ''; ?>">
        </div>
        <div class="mb-3">
            <label for="data_santri">data_santri</label>
            <input type="text" class="form-control" name="data_santri" id="data_santri" value="<?php echo isset($row) ? $row['data_santri'] : ''; ?>">
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
