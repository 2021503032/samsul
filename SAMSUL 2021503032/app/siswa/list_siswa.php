    <br><div class="card">
  <div class="card-header">
    Data Siswa Qiroatuna
  </div>
  <div class="card-body">
  <a class="btn btn-primary btn-sm" href="<?php echo base_url(). 'index.php?page=siswa&act=input'; ?>">
            <i class="fa-solid fa-circle-plus"></i> Tambah Data
        </a>
        <?php 
        $query = $db->query("SELECT * FROM siswa");
        ?>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>No</th>
                <th>ID SISWA</th>
                <th>ID_GURU</th>
                <th>NAMA SISWA</th>
                <th>NAMA KELAS</th>
                <th>ALAMAT SISWA</th>
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
                    <td><?= $row ['id_siswa']; ?></td>
                    <td><?= $row ['id_guru']; ?></td>
                    <td><?= $row ['nama_siswa']; ?></td>
                    <td><?= $row ['nama_kelas']; ?></td>
                    <td><?= $row ['alamat_siswa']; ?></td>
                    <td>
                        <a class="btn btn-outline-success btn-sm" href="<?php base_url(); ?>index.php?page=siswa&act=edit&id_siswa=<?php echo $row['id_siswa']; ?>"> <i class="fa-regular fa-pen-to-square"></i> Ubah</a> | 
                        <a class="btn btn-outline-danger btn-sm" href="<?php base_url(); ?>index.php?page=siswa&act=hapus&id_siswa=<?php echo $row['id_siswa']; ?>"> <i class="fa-solid fa-trash-can"></i> Hapus</a>
                    </td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
  </div>
</div>