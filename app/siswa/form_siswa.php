<?php 

$act = isset($_GET['act']) ? $_GET['act'] : false;
$kode = isset($_GET['id_siswa']) ? $_GET['id_siswa'] : false;

if ($act == 'edit') {
    $url = base_url() . "index.php?page=siswa&act=update";
    if ($kode) {
        $query = $db->query("SELECT * FROM siswa WHERE id_siswa = '$kode'");
        $row = $query->fetch_array();
    }else {
        echo "<script>
             alert('Parameter Kode Guru Tidak Valid');
             window.location.href='".base_url()."index.php?page=siswa';
              </script>";
    }
}else {
    $url = base_url() . "index.php?page=siswa&act=save";
}
?>
<br><div class="card">
  <div class="card-header">
    Input Data Siswa
  </div>
  <div class="card-body">

  
  <form action="<?php echo $url; ?>" method="post">
        <input type="hidden" name="id_siswa_old" id="id_siswa_old" value="<?php echo isset($row) ? $row ['id_siswa'] : '';  ?>">
            <br><div class="mb-3">
                <label for="id_siswa">ID SISWA</label>
                <input type="text" class="form-control" name="id_siswa" id="id_siswa" value="<?php echo isset($row) ? $row ['id_siswa'] : '';  ?>">
            </div>
            <div class="mb-3">
                <label for="id_guru">ID GURU</label>
                <input type="text" class="form-control" name="id_guru" id="id_guru" value="<?php echo isset($row) ? $row ['id_guru'] : '';  ?>">
            </div>
            <div class="mb-3">
                <label for="id_mapel">NAMA SISWA</label>
                <input type="text" class="form-control" name="nama_siswa" id="id_mapel" value="<?php echo isset($row) ? $row ['nama_siswa'] : '';  ?>">
            </div>
            <div class="mb-3">
                <label for="id_mapel">NAMA KELAS</label>
                <input type="text" class="form-control" name="nama_kelas" id="id_mapel" value="<?php echo isset($row) ? $row ['nama_kelas'] : '';  ?>">
            </div>
            <div class="mb-3">
                <label for="id_mapel">ALAMAT SISWA</label>
                <input type="text" class="form-control" name="alamat_siswa" id="id_mapel" value="<?php echo isset($row) ? $row ['alamat_siswa'] : '';  ?>">
            </div>
            <div class="mb-3">
                <a href="list_siswa.php" class="btn btn-danger btn-sm float-start"><i class="fa-solid fa-backward"></i> Kembali</a>
                <button class="btn btn-primary btn-sm float-end" type="submit"> <i class="fa-regular fa-floppy-disk"></i> Simpan Data</button>
            </div>
        </form>
   
  </div>
</div>