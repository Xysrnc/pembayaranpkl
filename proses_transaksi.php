<?php
include 'koneksi.php';

	  $id_petugas    = $_POST['id_petugas'];
  	$nisn          = $_POST['nisn'];
  	$tgl_bayar     = $_POST['tgl_bayar'];
  	$bulan_dibayar = $_POST['bulan_dibayar'];
  	$tahun_dibayar = $_POST['tahun_dibayar'];
  	$id_bayar       = $_POST['id_bayar'];
  	$jumlah_bayar  = $_POST['jumlah_bayar'];
  	
 


                  $query = "INSERT INTO transaksi VALUES ('','$id_petugas', '$nisn', '$tgl_bayar', '$bulan_dibayar', '$tahun_dibayar
                  ', '$id_bayar', '$jumlah_bayar')";
                  $result = mysqli_query($koneksi, $query);
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                           " - ".mysqli_error($koneksi));
                  } else {
                    echo "<script>alert('Data berhasil ditambah.');window.location='transaksi.php';</script>";
                  }

            ?>