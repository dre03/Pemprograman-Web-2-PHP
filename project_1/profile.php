<?php
    include_once "header.php";
?>
  <!-- Main Sidebar Container -->
  <?php include_once "sidebar.php";?>
  <!-- Content Header -->
  <div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Profile</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">User Profile</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="card card-primary card-outline">
            <div class="card-body box-profile">
              <div class="text-center">
                <img class="profile-user-img img-fluid img-circle"
                     src="dist/img/avatar5.png"
                     alt="User profile picture">
              </div>

              <h3 class="profile-username text-center">Andre Apriyana</h3>

              <p class="text-muted text-center">Software Engineer</p>

              <ul class="list-group list-group-unbordered mb-3">
                <li class="list-group-item">
                    <b>NIM</b> <a class="float-right">0110221111</a>
                </li>
                <li class="list-group-item">
                    <b>Prodi</b> <a class="float-right">Teknik Informatika</a>
                </li>
                <li class="list-group-item">
                    <b>Kelas</b> <a class="float-right">TI04</a>
                </li>
              </ul>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

          <!-- About Me Box -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">About Me</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <strong><i class="fas fa-book mr-1"></i> Education</strong>

              <p class="text-muted">
                Sekolah Tinggi Teknologi Terpadu Nurul Fikri
              </p>

              <hr>

              <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

              <p class="text-muted">Leuwiliang, Kab.Bogor</p>

              <hr>

              <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>

              <p class="text-muted">
                <span class="tag tag-danger">UI Design,</span>
                <span class="tag tag-primary">Bootstrap,</span>
                <span class="tag tag-success">Coding,</span>
                <span class="tag tag-info">Javascript,</span>
                <span class="tag tag-warning">PHP</span>
              </p>

              <hr>

              <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>

              <p class="text-muted">Teruslah Berjuang sehingga apa yang kamu impikan itu akan tercapai, Ingat janagn malas!!!</p>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="card">
            <div class="card-body">
              <div class="tab-content">
                <div class="active tab-pane" id="activity">
                  <!-- Post -->
                  <div>
                    <div>
                        <p class="fw-bold text-primary font-weight-bold">Experience</p>
                    </div>
                    <!-- /.user-block -->
                    <p>
                    Seorang programmer, yang dapat mengembangkan solusi dengan efisien. Tertarik mengembangkan karier di perusahaan yang berfokus pada CGI dengan memanfaatkan keahlian programming yang sudah dimiliki untuk mengembangkan aplikasi virtual, augmented untuk mendukung perusahaan bersaing dengan generasi mendatang.
                    </p>
                    <ul>
                        <li>Mengembangkan 10 aplikasi dalam 1 tahun bekerja.</li>
                        <li>Melakukan supervisi terhadap 10 anggota tim dalam melakukan testing, review dan analisis.</li>
                        <li>Mengembangkan alat test automation yang dapat mempercepat kinerja sampai dengan 50%.</li>
                        <li>Memimpin rapat dengan tim bisnis, tim technical dan stakeholder terkait.</li>
                    </ul>  
                  </div>
                    <hr>
                    <div>
                    <div>
                        <p class="fw-bold text-primary font-weight-bold">organization</p>
                    </div>
                    <!-- /.user-block -->
                    <ul>
                        <li>Linux NF</li>
                        <li>NETS NF</li>
                        <li>GenQuran</li>
                    </ul>
                  </div>
                    <hr>
                </div>            
                <!-- /.tab-pane -->
              </div>
              <!-- /.tab-content -->
            </div><!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>

<?php
    include_once "footer.php";
?>