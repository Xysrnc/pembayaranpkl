<?php
  include('koneksi.php');
  include ('tampilan/header.php');
  include ('tampilan/sidebar.php');
  include ('tampilan/footer.php');
?>
 <!-- Main Content -->
      <div class="main-content bg-primary">
        <section class="section">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="card card-statistic-2">
                <div class="card-stats">
                  <div class="card-stats-title">DATA SEKOLAH -
                    <div class="dropdown d-inline">
                      <a class="font-weight-600 dropdown-toggle" data-toggle="dropdown" href="#" id="orders-month">SMK</a>
                      <ul class="dropdown-menu dropdown-menu-sm">
                        <li class="dropdown-title">Pilih Sekolah</li>
                        <li><a href="sekolah.php" class="dropdown-item active">SMKN 1 BANJAR</a></li>
                        <li><a href="sekolah.php" class="dropdown-item active">SMKN 4 TASIKMALAYA</a></li>
                        <li><a href="sekolah.php" class="dropdown-item active">SMKN MANONJAYA</a></li>
                      </ul> 
                    </div>
                  </div>
                  <div class="card-stats-items">
                    <div class="card-stats-item">
                      <div class="card-stats-item-count">15</div>
                      <div class="card-stats-item-label">Siswa</div>
                    </div>
                    <div class="card-stats-item">
                      <div class="card-stats-item-count">12</div>
                      <div class="card-stats-item-label">Belum Lunas</div>
                    </div>
                    <div class="card-stats-item">
                      <div class="card-stats-item-count">3</div>
                      <div class="card-stats-item-label">Lunas</div>
                    </div>
                  </div>
                </div>
                <div class="card-icon shadow-info bg-primary">
                  <i class="fas fa-users"></i>
               
        </section>
      </div>
    </div>
  </div>
</body>
