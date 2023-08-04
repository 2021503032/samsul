    <br><div class="card">
  <div class="card-header">
    Data Mapel Qiroatuna
  </div>
  <div class="card-body">
  <a class="btn btn-primary btn-sm" href="<?php echo base_url(). 'index.php?page=mapel&act=input'; ?>">
            <i class="fa-solid fa-circle-plus"></i> Tambah Data
        </a>
        <?php 
        $query = $db->query("SELECT * FROM mapel");
        ?>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>No</th>
                <th>ID MAPEL</th>
                <th>ID_GURU</th>
                <th>NAMA MAPEL</th>
                <th>NAMA PENGAJAR</th>
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
                    <td><?= $row ['id_mapel']; ?></td>
                    <td><?= $row ['id_guru']; ?></td>
                    <td><?= $row ['nama_mapel']; ?></td>
                    <td><?= $row ['nama_pengajar']; ?></td>
                    <td>
                        <a class="btn btn-outline-success btn-sm" href="<?php base_url(); ?>index.php?page=mapel&act=edit&id_mapel=<?php echo $row['id_mapel']; ?>"> <i class="fa-regular fa-pen-to-square"></i> Ubah</a> | 
                        <a class="btn btn-outline-danger btn-sm" href="<?php base_url(); ?>index.php?page=mapel&act=hapus&id_mapel=<?php echo $row['id_mapel']; ?>"> <i class="fa-solid fa-trash-can"></i> Hapus</a>
                    </td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
  </div>
</div>