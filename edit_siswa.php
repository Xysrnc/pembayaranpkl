<?php
include 'koneksi.php';

  if (isset($_GET['id'])) {
    $id = ($_GET["id"]);

    $query = "SELECT * FROM siswa,sekolah,bayar where siswa.nisn='$id' AND siswa.id_sekolah=sekolah.id_sekolah AND siswa.id_bayar=bayar.id_bayar";
    $result = mysqli_query($koneksi, $query);

    if(!$result){
      die ("Query Error: ".mysqli_errno($koneksi).
         " - ".mysqli_error($koneksi));
    }
  
    $data = mysqli_fetch_assoc($result);
       if (!count($data)) {
          echo "<script>alert('Data tidak ditemukan pada database');window.location='siswa.php';</script>";
       }
  } else {
    echo "<script>alert('Masukkan data id.');window.location='siswa.php';</script>";
  }         
  ?>
<!DOCTYPE html>
<html>
  <head>
    <title>EDIT SISWA</title>
   
  </head>
<body>
 
  <?php
  
  include ('tampilan/header.php');
  include ('tampilan/sidebar.php');
  include ('tampilan/footer.php');
?>

<div class="main-content bg-primary">
        <section class="section">
          <div class="section-header">
            <h1>EDIT SISWA</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="bayar.php">Data Siswa</a></div>
              <div class="breadcrumb-item text-primary">Edit Siswa</div>
            </div>
          </div>
          <div class="row">
              <div class="col-12">
                <div class="card">
                  </div>
                  <div class="card-body bg-primary">
                    <div class="row mt-4">
                      <div class="col-12 col-lg-8 offset-lg-2">
                        <div class="wizard-steps">
                          <div class="wizard-step wizard-step-active">
                            <div class="wizard-step-icon">
                              <i class="fas fa-users"></i>
                            </div>
                            <div class="wizard-step-label">
                              Formulir Siswa
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <form class="wizard-content mt-2" method="post" action="proses_editsiswa.php">
                      <div class="wizard-pane">
                         <input name="id" value="<?php echo $data['nisn']; ?>" hidden />
                         <div class="form-group row align-items-center">
                          <label class="col-md-4 text-md-right text-white">NISN</label>
                          <div class="col-lg-4 col-md-6">
                            <input name="nisn" value="<?php echo $data['nisn']; ?>"  disabled="" />
                          </div>
                        </div> 
                        <div class="form-group row align-items-center">
                          <label class="col-md-4 text-md-right text-white">NAMA</label>
                          <div class="col-lg-4 col-md-6">
                              <input type="text" name="nama" value="<?php echo $data['nama']; ?>" required=""/>
                          </div>
                        </div>
                           <div class="form-group row align-items-center">
                          <label class="col-md-4 text-md-right text-white">SEKOLAH</label>
                          <div class="col-lg-4 col-md-6">
                             <select name="id_sekolah">
                                    
                                    <?php
                                    $idbarangyangdipilih=$data['id_sekolah']; 
                                    
                                    $query = "SELECT * FROM sekolah ORDER BY nama_sekolah ASC";
                                    $result = mysqli_query($koneksi, $query);
                                    
                                    if(!$result){
                                      die ("Query Error: ".mysqli_errno($koneksi).
                                         " - ".mysqli_error($koneksi));
                                    }

                                    $no = 1; 
                                    while($row = mysqli_fetch_assoc($result))
                                    {
                                    ?>
                                  <option value="<?php echo $row['id_sekolah']; ?>" <?php if($row['id_sekolah']=="$idbarangyangdipilih"){?> selected="selected" <?php } ?>><?php echo $row['nama_sekolah']; ?></option>
                               <?php
                                      $no++; 
                                    }
                                    ?>
                            </select>
                          </div>
                        </div>
                           <div class="form-group row align-items-center">
                          <label class="col-md-4 text-md-right text-white">ALAMAT</label>
                          <div class="col-lg-4 col-md-6">
                              <input type="text" name="alamat" value="<?php echo $data['alamat']; ?>" required=""/>
                          </div>
                        </div>
                           <div class="form-group row align-items-center">
                          <label class="col-md-4 text-md-right text-white">TAHUN MASUK</label>
                          <div class="col-lg-4 col-md-6">
                             <select name="tahun" disabled="">
                                    
                                    <?php
                                    $idbarangyangdipilih=$data['id_bayar']; 
                                    $query = "SELECT * FROM bayar ORDER BY bulan ASC";
                                    $result = mysqli_query($koneksi, $query);
                                    if(!$result){
                                      die ("Query Error: ".mysqli_errno($koneksi).
                                         " - ".mysqli_error($koneksi));
                                    }

                                    $no = 1; 
                                    while($row = mysqli_fetch_assoc($result))
                                    {
                                    ?> 
                                  <option value="<?php echo $row['id_bayar']; ?>" <?php if($row['id_bayar']=="$idbarangyangdipilih"){?> selected="selected" <?php } ?>><?php echo $row['bulan']; ?></option>
                               <?php
                                      $no++;
                                    }
                                    ?>
                            </select>
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="col-md-4"></div>
                          <div class="col-lg-4 col-md-6 text-right">
                            <button type="submit" class="btn btn-icon icon-right btn-primary">UBAH SISWA<i class="fas fa-arrow-right"></i></button>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
      
    </div>
    </div>