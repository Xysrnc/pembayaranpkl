<?php
  include('koneksi.php');
  
?>
<!DOCTYPE html>
<html>
  <head>
    <title>TAMBAH SISWA</title>
   
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
            <h1>TAMBAH SISWA</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item text-primary"><a href="siswa.php">Data Siswa</a></div>
              <div class="breadcrumb-item text-primary">Tambah Siswa</div>
            </div>
          </div>
          <div class="row">
              <div class="col-12">
                <div class="card bg-primary">
                  </div>
                  <div class="card-body bg-primary">
                    <div class="row mt-4">
                      <div class="col-12 col-lg-8 offset-lg-2">
                        <div class="wizard-steps">
                          <div class="wizard-step wizard-step-active">
                            <div class="wizard-step-icon">
                              <i class="fas fa-school"></i>
                            </div>
                            <div class="wizard-step-label">
                              Formulir siswa
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <form class="wizard-content mt-2" method="post" action="proses_tambahsiswa.php">
                      <div class="wizard-pane">
                        <div class="form-group row align-items-center">
                          <label class="col-md-4 text-md-right text-white">NISN</label>
                          <div class="col-lg-4 col-md-6">
                            <input type="text" name="nisn" class="form-control">
                          </div>
                        </div>
                         <div class="form-group row align-items-center">
                          <label class="col-md-4 text-md-right text-white">NAMA</label>
                          <div class="col-lg-4 col-md-6">
                            <input type="text" name="nama" class="form-control">
                          </div>
                        </div>
                         <div class="form-group row align-items-center">
                          <label class="col-md-4 text-md-right text-white">ID SEKOLAH</label>
                          <div class="col-lg-4 col-md-6">
                             <select  class="form-control" name="id_sekolah">
                             <option value="not_option"> silahkan pilih sekolah</option>
                              <?php
                                  
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
                             <option value="<?php echo $row['id_sekolah']; ?>"><?php echo $row['nama_sekolah']; ?></option>
                             <?php
                                    $no++; 
                                  }
                                  ?>
                             </select>
                                    
                                  </div>
    
                                </div>
                        </div>
                        <div class="form-group row align-items-center">
                          <label class="col-md-4 text-md-right text-white">ALAMAT</label>
                          <div class="col-lg-4 col-md-6">
                            <input type="text" name="alamat" class="form-control">
                          </div>
                          </div>
                        <div class="form-group row align-items-center">
                          <label class="col-md-4 text-md-right text-white">TAHUN MASUK</label>
                          <div class="col-lg-4 col-md-6">
                             <select  class="form-control" name="tahun">
                             <option selected>--pilih tahun--</option>
                             <option value="2022">2022</option>
                              <?php
                                  $query = "SELECT * FROM bayar ORDER BY tahun ASC";
                                  $result = mysqli_query($koneksi, $query);
                                  if(!$result){
                                    die ("Query Error: ".mysqli_errno($koneksi).
                                       " - ".mysqli_error($koneksi));
                                  }

                                  $no = 1;
                                  while($row = mysqli_fetch_assoc($result))
                                  {
                                  ?>
                             <option value="<?php echo $row['id_bayar']; ?>"><?php echo $row['tahun']; ?></option>
                             <?php
                                    $no++;
                                  }
                                  ?>
                             </select>
                                    
                                  </div>
                          </div>
                        </div>
                        <h3>pramudita ahmad</h3>
                        <button class="btn btn-primary">p</button>
                        <div class="form-group row">
                               
                           <div class="col-lg-4 col-md-6 text-right">
                            <button type="submit" class="btn icon-right btn-primary">TAMBAH SISWA<i class="fas fa-arrow-right"></i></button>
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