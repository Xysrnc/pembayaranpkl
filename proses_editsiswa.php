<?php
include 'koneksi.php';

  $id = $_POST['id'];

  $id_sekolah = $_POST['id_sekolah'];
  $nama     = $_POST['nama'];
  $alamat     = $_POST['alamat'];

                   $query  = "UPDATE siswa SET id_sekolah = '$id_sekolah',nama = '$nama',alamat = '$alamat' WHERE nisn = '$id'";
                    $result = mysqli_query($koneksi, $query);
                    if(!$result){
                        die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                             " - ".mysqli_error($koneksi));
                    } else {
                      echo "<script>alert('Data berhasil diubah.');window.location='siswa.php';</script>";
                    }
              
        
        ?>
