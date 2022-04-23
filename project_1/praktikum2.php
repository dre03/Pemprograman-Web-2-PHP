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
            <h1>Peraktikum 2</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Layout</a></li>
              <li class="breadcrumb-item active">Fixed Layout</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="container mt-3">
            <h2>Selamat Datang Teman</h2>
              <?php include_once "./praktikum_2/form_belanja.php";?>
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>

<?php 
    include_once "footer.php";
?>