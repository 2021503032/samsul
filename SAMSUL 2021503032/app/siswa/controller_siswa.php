<?php 
    $act = $_GET['act'];

    if ($act == 'save') {
        $id_siswa = $_POST['id_siswa'];
        $id_guru = $_POST['id_guru'];
        $nama_siswa = $_POST['nama_siswa'];
        $nama_kelas = $_POST['nama_kelas'];
        $alamat_siswa = $_POST['alamat_siswa'];
    
        $query = $db->query("INSERT INTO siswa (id_siswa, id_guru, nama_siswa, nama_kelas, alamat_siswa)
                            VALUES ('$id_siswa', '$id_guru', '$nama_siswa', '$nama_kelas', '$alamat_siswa')");
    
    
    
        if ($query) {
            echo "<script>
                 alert('Data Berhasil Di Tambhkan');
                 window.location.href='". base_url() ."index.php?page=siswa';
                  </script>";
        } else {
            echo "<script>
                  alert ('Data Gagal Di tambahkan');
                  window.location.href='". base_url() ."index.php?page=siswa&act=input';
                  </script>";
        }
    }
    elseif ($act == 'update') {
        $id_siswa_old = $_POST['id_siswa_old'];
        $id_siswa = $_POST['id_siswa'];
        $id_guru = $_POST['id_guru'];
        $nama_siswa = $_POST['nama_siswa'];
        $nama_kelas = $_POST['nama_kelas'];
        $alamat_siswa = $_POST['alamat_siswa'];

        $query = $db->query("UPDATE siswa SET id_siswa = '$id_siswa', 
                                             id_guru = '$id_guru', 
                                             nama_siswa = '$nama_siswa',
                                             nama_kelas = '$nama_kelas',
                                             alamat_siswa = '$alamat_siswa'
                                             WHERE id_siswa = '$id_siswa_old'");
        
        if ($query) {
            echo "<script>
                 alert('Data Berhasil Di Ubah');
                 window.location.href='". base_url() ."index.php?page=siswa';
                  </script>";
        } else {
            echo "<script>
                  alert ('Data Gagal Di Ubahs');
                  window.location.href='". base_url() ." index.php?page=siswa';
                  </script>";
        }
    }
    elseif ($act == 'hapus') {
        $id_siswa = $_GET['id_siswa'];
        $query = $db->query("DELETE FROM siswa WHERE id_siswa = '$id_siswa'");
        if ($query) {
            echo "<script>
                 alert('Data Berhasil Di Hapus');
                 window.location.href='". base_url() ."index.php?page=siswa';
                  </script>";
        } else {
            echo "<script>
                  alert ('Data Gagal Di Hapus');
                  window.location.href='". base_url() ."index.php?page=siswa';
                  </script>";
        }
    }
    else {
        echo "<script>
        alert ('Maaf, Parameter anda tidak valid');
        window.location.href='list_siswa.php';
        </script>";   
    }
?>