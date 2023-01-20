<?php
include 'koneksi.php';

  $nisn   = $_POST['nisn'];
  $nama    = $_POST['nama'];
  $id_sekolah   = $_POST['id_sekolah'];
  $alamat    = $_POST['alamat'];
  $tahun     = $_POST['tahun'];


                  $query = "INSERT INTO siswa VALUES ('$nisn', '$nama', '$id_sekolah', '$alamat', '$tahun')";
                  $result = mysqli_query($koneksi, $query); 
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                           " - ".mysqli_error($koneksi));
                  } else {
                    echo "<script>alert('Data berhasil ditambah.');window.location='siswa.php';</script>";
                  }

            ?>