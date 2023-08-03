        <div class="card">
    <div class="card-header">
        Data Santri
    </div>
    <div class="card-body">
    <a class="btn btn-primary btn-sm" href="<?php echo base_url() . 'index.php?page=santri&act=input';?>">
        <i class="fa-solid fa-square-plus"></i>
        Tambah Data
    </a>
    <?php
    $query = $db->query("SELECT * FROM induk_santri");
    ?>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>No</th>
            <th>Id Santri</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Asrama</th>
            <th>Pendidikan</th>
            <th>Act</th>
        </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
                while($row = $query->fetch_array()){
                    ?>
                        <tr>
                            <td><?php echo $no++;?></td> 
                            <td><?php echo $row['id_induk'];?></td>
                            <td><?php echo $row['nama'];?></td>
                            <td><?php echo $row['alamat'];?></td>
                            <td><?php echo $row['asrama'];?></td>
                            <td><?php echo $row['pendidikan'];?></td>
                            <td><a class="btn btn-outline-success btn-sm" href="<?php echo base_url(); ?>index.php?page=santri&act=edit&id_induk=<?php echo $row['id_induk']; ?>"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a class="btn btn-outline-danger btn-sm" href="<?php echo base_url(); ?>index.php?page=santri&act=hapus&id_induk=<?php echo $row['id_induk']; ?>"><i class="fa-solid fa-trash-can"></i></a>
                            </td>
                        </tr>
                    <?php
                }
            ?>
        </tbody>
    </table>
    </div>
</div>

    
    