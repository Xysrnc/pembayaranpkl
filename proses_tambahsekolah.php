<?php
include 'koneksi.php';

  $nama_sekolah             = $_POST['nama_sekolah'];
  $jurusan     = $_POST['jurusan'];
 


                  $query = "INSERT INTO sekolah VALUES ('','$nama_sekolah', '$jurusan')";
                  $result = mysqli_query($koneksi, $query);
                  
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                           " - ".mysqli_error($koneksi));
                  } else {
                    echo "<script>alert('Data berhasil ditambah.');window.location='sekolah.php';</script>";
                  }

            ?>