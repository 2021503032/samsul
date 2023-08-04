<?php 

$act = isset($_GET['act']) ? $_GET['act'] : false;
$kode = isset($_GET['id_mapel']) ? $_GET['id_mapel'] : false;

if ($act == 'edit') {
    $url = base_url() . "index.php?page=mapel&act=update";
    if ($kode) {
        $query = $db->query("SELECT * FROM mapel WHERE id_mapel = '$kode'");
        $row = $query->fetch_array();
    }else {
        echo "<script>
             alert('Parameter Kode Guru Tidak Valid');
             window.location.href='".base_url()."index.php?page=mapel';
              </script>";
    }
}else {
    $url = base_url() . "index.php?page=mapel&act=save";
}
?>
<br><div class="card">
  <div class="card-header">
    Input Data Mapel
  </div>
  <div class="card-body">

  
  <form action="<?php echo $url; ?>" method="post">
        <input type="hidden" name="id_mapel_old" id="id_mapel_old" value="<?php echo isset($row) ? $row ['id_mapel'] : '';  ?>">
            <br><div class="mb-3">
                <label for="id_mapel">ID MAPEL</label>
                <input type="text" class="form-control" name="id_mapel" id="id_mapel" value="<?php echo isset($row) ? $row ['id_mapel'] : '';  ?>">
            </div>
            <div class="mb-3">
                <label for="id_guru">ID GURU</label>
                <input type="text" class="form-control" name="id_guru" id="id_guru" value="<?php echo isset($row) ? $row ['id_guru'] : '';  ?>">
            </div>
            <div class="mb-3">
                <label for="id_mapel">NAMA MAPEL</label>
                <input type="text" class="form-control" name="nama_mapel" id="id_mapel" value="<?php echo isset($row) ? $row ['nama_mapel'] : '';  ?>">
            </div>
            <div class="mb-3">
                <label for="id_mapel">NAMA PENGAJAR</label>
                <input type="text" class="form-control" name="nama_pengajar" id="id_mapel" value="<?php echo isset($row) ? $row ['nama_pengajar'] : '';  ?>">
            </div>
            <div class="mb-3">
                <a href="list_mapel.php" class="btn btn-danger btn-sm float-start"><i class="fa-solid fa-backward"></i> Kembali</a>
                <button class="btn btn-primary btn-sm float-end" type="submit"> <i class="fa-regular fa-floppy-disk"></i> Simpan Data</button>
            </div>
        </form>
  </div>
</div>