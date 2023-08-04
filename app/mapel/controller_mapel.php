<?php 
    $act = $_GET['act'];

    if ($act == 'save') {
        $id_mapel = $_POST['id_mapel'];
        $id_guru = $_POST['id_guru'];
        $nama_mapel = $_POST['nama_mapel'];
        $nama_pengajar = $_POST['nama_pengajar'];
    
        $query = $db->query("INSERT INTO mapel (id_mapel, id_guru, nama_mapel, nama_pengajar)
                            VALUES ('$id_mapel', '$id_guru', '$nama_mapel', '$nama_pengajar')");
    
    
    
        if ($query) {
            echo "<script>
                 alert('Data Berhasil Di Tambhkan');
                 window.location.href='". base_url() ."index.php?page=mapel';
                  </script>";
        } else {
            echo "<script>
                  alert ('Data Gagal Di tambahkan');
                  window.location.href='". base_url() ."index.php?page=mapel&act=input';
                  </script>";
        }
    }
    elseif ($act == 'update') {
        $id_mapel_old = $_POST['id_mapel_old'];
        $id_mapel = $_POST['id_mapel'];
        $id_guru = $_POST['id_guru'];
        $nama_mapel = $_POST['nama_mapel'];
        $nama_pengajar = $_POST['nama_pengajar'];

        $query = $db->query("UPDATE mapel SET id_mapel = '$id_mapel', 
                                             id_guru = '$id_guru', 
                                             nama_mapel = '$nama_mapel',
                                             nama_pengajar = '$nama_pengajar'
                                             WHERE id_mapel = '$id_mapel_old'");
        
        if ($query) {
            echo "<script>
                 alert('Data Berhasil Di Ubah');
                 window.location.href='". base_url() ."index.php?page=mapel';
                  </script>";
        } else {
            echo "<script>
                  alert ('Data Gagal Di Ubah');
                  window.location.href='". base_url() ." index.php?page=mapel';
                  </script>";
        }
    }
    elseif ($act == 'hapus') {
        $id_mapel = $_GET['id_mapel'];
        $query = $db->query("DELETE FROM mapel WHERE id_mapel = '$id_mapel'");
        if ($query) {
            echo "<script>
                 alert('Data Berhasil Di Hapus');
                 window.location.href='". base_url() ."index.php?page=mapel';
                  </script>";
        } else {
            echo "<script>
                  alert ('Data Gagal Di Hapus');
                  window.location.href='". base_url() ."index.php?page=mapel';
                  </script>";
        }
    }
    else {
        echo "<script>
        alert ('Maaf, Parameter anda tidak valid');
        window.location.href='list_mapel.php';
        </script>";   
    }
?>