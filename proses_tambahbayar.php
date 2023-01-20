<?php
include 'koneksi.php';

  $bulan   = $_POST['bulan'];
  $nominal     = $_POST['nominal'];
 


                  $query = "INSERT INTO bayar VALUES ('','$bulan', '$nominal')";
                  $result = mysqli_query($koneksi, $query);
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                           " - ".mysqli_error($koneksi));
                  } else {
                    echo "<script>alert('Data berhasil ditambah.');window.location='bayar.php';</script>";
                  }

            ?>