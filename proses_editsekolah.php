<?php
include 'koneksi.php';
  $id = $_POST['id'];

  $nama_sekolah          = $_POST['nama_sekolah'];
  $jurusan     = $_POST['jurusan'];

  
                    $query  = "UPDATE sekolah SET nama_sekolah = '$nama_sekolah' WHERE id_sekolah = '$id'";
                    $result = mysqli_query($koneksi, $query);
                    $query  = "UPDATE sekolah SET jurusan ='$jurusan' WHERE id_sekolah = '$id'";
                    $result = mysqli_query($koneksi, $query);
                    if(!$result){
                        die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                             " - ".mysqli_error($koneksi));
                    } else {
                      echo "<script>alert('Data berhasil diubah.');window.location='sekolah.php';</script>";
                    }
              
			  
			  ?>
