<?php 
    $act = $_GET['act'];

    if ($act == 'save') {
        $id_guru = $_POST['id_guru'];
        $id_mapel = $_POST['id_mapel'];
        $nama = $_POST['nama_guru'];
        $alamat = $_POST['alamat_guru'];
    
        $query = $db->query("INSERT INTO guru (id_guru, id_mapel, nama_guru, alamat_guru)
                            VALUES ('$id_guru', '$id_mapel', '$nama', '$alamat')");
    
    
    
        if ($query) {
            echo "<script>
                 alert('Data Berhasil Di Tambhkan');
                 window.location.href='". base_url() ."index.php?page=guru';
                  </script>";
        } else {
            echo "<script>
                  alert ('Data Gagal Di tambahkan');
                  window.location.href='". base_url() ."index.php?page=guru&act=input';
                  </script>";
        }
    }
    elseif ($act == 'update') {
        $id_guru_old = $_POST['id_guru_old'];
        $id_guru = $_POST['id_guru'];
        $id_mapel = $_POST['id_mapel'];
        $nama_guru = $_POST['nama_guru'];
        $alamat_guru = $_POST['alamat_guru'];

        $query = $db->query("UPDATE guru SET id_guru = '$id_guru', 
                                             id_mapel = '$id_mapel', 
                                             nama_guru = '$nama_guru',
                                             alamat_guru = '$alamat_guru'
                                             WHERE id_guru = '$id_guru_old'");
        
        if ($query) {
            echo "<script>
                 alert('Data Berhasil Di Ubah');
                 window.location.href='". base_url() ."index.php?page=guru';
                  </script>";
        } else {
            echo "<script>
                  alert ('Data Gagal Di Ubahs');
                  window.location.href='". base_url() ." index.php?page=guru';
                  </script>";
        }
    }
    elseif ($act == 'hapus') {
        $id_guru = $_GET['id_guru'];
        $query = $db->query("DELETE FROM guru WHERE id_guru = '$id_guru'");
        if ($query) {
            echo "<script>
                 alert('Data Berhasil Di Hapus');
                 window.location.href='". base_url() ."index.php?page=guru';
                  </script>";
        } else {
            echo "<script>
                  alert ('Data Gagal Di Hapus');
                  window.location.href='". base_url() ."index.php?page=guru';
                  </script>";
        }
    }
    else {
        echo "<script>
        alert ('Maaf, Parameter anda tidak valid');
        window.location.href='list_guru.php';
        </script>";   
    }
?>