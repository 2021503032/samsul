<?php 

$act = isset($_GET['act']) ? $_GET['act'] : false;
$kode = isset($_GET['id_guru']) ? $_GET['id_guru'] : false;

if ($act == 'edit') {
    $url = base_url() . "index.php?page=guru&act=update";
    if ($kode) {
        $query = $db->query("SELECT * FROM guru WHERE id_guru = '$kode'");
        $row = $query->fetch_array();
    }else {
        echo "<script>
             alert('Parameter Kode Guru Tidak Valid');
             window.location.href='".base_url()."index.php?page=guru';
              </script>";
    }
}else {
    $url = base_url() . "index.php?page=guru&act=save";
}
?>
<br><div class="card">
  <div class="card-header">
    Input Data Guru
  </div>
  <div class="card-body">

  
  <form action="<?php echo $url; ?>" method="post">
        <input type="hidden" name="id_guru_old" id="id_gur_old" value="<?php echo isset($row) ? $row ['id_guru'] : '';  ?>">
            <br><div class="mb-3">
                <label for="id_guru">ID GURU</label>
                <input type="text" class="form-control" name="id_guru" id="id_guru" value="<?php echo isset($row) ? $row ['id_guru'] : '';  ?>">
            </div>
            <div class="mb-3">
                <label for="id_mapel">ID MAPEL</label>
                <input type="text" class="form-control" name="id_mapel" id="id_mapel" value="<?php echo isset($row) ? $row ['id_mapel'] : '';  ?>">
            </div>
            <div class="mb-3">
                <label for="id_mapel">NAMA GURU</label>
                <input type="text" class="form-control" name="nama_guru" id="id_mapel" value="<?php echo isset($row) ? $row ['nama_guru'] : '';  ?>">
            </div>
            <div class="mb-3">
                <label for="id_mapel">ALAMAT GURU</label>
                <input type="text" class="form-control" name="alamat_guru" id="id_mapel" value="<?php echo isset($row) ? $row ['alamat_guru'] : '';  ?>">
            </div>
            <div class="mb-3">
                <a href="list_guru.php" class="btn btn-danger btn-sm float-start"><i class="fa-solid fa-backward"></i> Kembali</a>
                <button class="btn btn-primary btn-sm float-end" type="submit"> <i class="fa-regular fa-floppy-disk"></i> Simpan Data</button>
            </div>
        </form>
   
  </div>
</div>