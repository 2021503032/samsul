    <br><div class="card">
  <div class="card-header">
    Data Guru Qiroatuna
  </div>
  <div class="card-body">
  <a class="btn btn-primary btn-sm" href="<?php echo base_url(). 'index.php?page=guru&act=input'; ?>">
            <i class="fa-solid fa-circle-plus"></i> Tambah Data
        </a>
        <?php 
        $query = $db->query("SELECT * FROM guru");
        ?>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>No</th>
                <th>ID GURU</th>
                <th>ID MAPEL</th>
                <th>NAMA GURU</th>
                <th>ALAMAT</th>
                <th>AKSI</th>
            </tr>
            </thead>
            <tbody>
                <?php
                $no = 1; 
                while ($row = $query->fetch_array()) 
                {
                ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $row ['id_guru']; ?></td>
                    <td><?= $row ['id_mapel']; ?></td>
                    <td><?= $row ['nama_guru']; ?></td>
                    <td><?= $row ['alamat_guru']; ?></td>
                    <td>
                        <a class="btn btn-outline-success btn-sm" href="<?php base_url(); ?>index.php?page=guru&act=edit&id_guru=<?php echo $row['id_guru']; ?>"> <i class="fa-regular fa-pen-to-square"></i> Ubah</a> | 
                        <a class="btn btn-outline-danger btn-sm" href="<?php base_url(); ?>index.php?page=guru&act=hapus&id_guru=<?php echo $row['id_guru']; ?>"> <i class="fa-solid fa-trash-can"></i> Hapus</a>
                    </td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
  </div>
</div>