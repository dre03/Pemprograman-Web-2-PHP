<?php
require_once 'class_bmipasien.php';
//create 3 default objects
$obj = new BmiPasien("Andre Apriyana", 18, "Laki-Laki", "Bogor", 55, 169);
$obj2 = new BmiPasien("Rani Novita", 20, "Perempun", "Surabaya", 64, 155);
$obj3 = new BmiPasien("Rizki Rafino", 15, "Laki-Laki", "Jakarta", 38, 145);

//convert to array
$array = [$obj, $obj2, $obj3];

if (isset($_POST['submit'])) {
  $nama = $_POST["name_lengkap"];
  $umur = $_POST["umur"];
  $jk = $_POST["gender"];
  $domisili = $_POST['domisili'];
  $berat = $_POST['brt_bdn'];
  $tinggi = $_POST['tgi_bdn'];

  $data = new BmiPasien($nama, $umur, $jk, $domisili, $berat, $tinggi);

  //store data to array 
  // array_push($array,$data);
  $array[] = $data;
}
?>
<?php
include_once "header.php";
?>
<!-- Main Sidebar Container -->
<?php include_once "sidebar.php"; ?>
<!-- Content Header -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Body Mass Index (BMI)</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Layout</a></li>
            <li class="breadcrumb-item active">Fixed Layout</li>
          </ol>
        </div>
      </div>
    </div>
  </section>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="jumbotron bg-info">
          <h2 class="font-weight-bold">
            Ayo Hitung BMI (IMT) Anda
          </h2>
          <p>
            Gunakan kalkulator ini untuk memeriksa Indeks Massa Tubuh (IMT) dan mengecek apakah berat badan Anda ideal atau tidak. Anda juga dapat menggunakannya untuk memeriksa indeks massa tubuh anak.
          </p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header bg-info">
            <span class="font-weight-bold">Hitung Indeks Massa Tubuh</span>
          </div>
          <div class="card-body">
            <form action="index_bmi.php" method="POST">
              <div class="form-group row">
                <label class="col-2 col-form-label" for="name">Nama Lengkap</label>
                <div class="col-10">
                  <input id="name" name="name_lengkap" placeholder="Masukan Nama Anda" type="text" class="form-control" required="required">
                </div>
              </div>
              <div class="form-group row">
                <label for="umur" class="col-2 col-form-label">Umur</label>
                <div class="col-10">
                  <input id="umur" name="umur" placeholder="Masukan Umur Anda" type="number" class="form-control" required="required">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-2">Jenis Kelamin</label>
                <div class="col-10">
                  <div class="custom-control custom-radio custom-control-inline">
                    <input name="gender" id="gender_0" type="radio" class="custom-control-input" value="Laki-Laki" required="required">
                    <label for="gender_0" class="custom-control-label">Laki-Laki</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                    <input name="gender" id="gender_1" type="radio" class="custom-control-input" value="Perempuan" required="required">
                    <label for="gender_1" class="custom-control-label">Perempuan</label>
                  </div>
                </div>
              </div>
              <div class="form-group row">
                <label for="domisili" class="col-2 col-form-label">Kota Domisili</label>
                <div class="col-10">
                  <input id="domisili" name="domisili" placeholder="Masukan Domisili Anda" type="text" class="form-control" required="required">
                </div>
              </div>
              <div class="form-group row">
                <label for="brt_bdn" class="col-2 col-form-label">Berat Badan</label>
                <div class="col-10">
                  <input id="brt_bdn" name="brt_bdn" placeholder="Masukan Berat Badan Anda" type="number" class="form-control" required="required">
                </div>
              </div>
              <div class="form-group row">
                <label for="tinggi_badan" class="col-2 col-form-label">Tinggi Badan</label>
                <div class="col-10">
                  <input id="tgi_bdn" name="tgi_bdn" placeholder="Masukan Tinggi Badan Anda" type="number" class="form-control" required="required">
                </div>
              </div>
              <div class="form-group row">
                <div class="offset-5 col-7">
                  <button name="submit" type="submit" value="Hitung" class="btn btn-danger">Hitung</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header bg-info">
            <span class="font-weight-bold">Daftar Data Indeks Massa Tubuh</span>
          </div>

          <div class="card-body">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nama Lengkap</th>
                  <th scope="col">Umur</th>
                  <th scope="col">Jenis Kelamin</th>
                  <th scope="col">Kota Domisili</th>
                  <th scope="col">Berat (kg)</th>
                  <th scope="col">Tinggi (cm)</th>
                  <th scope="col">BMI</th>
                  <th scope="col">Status</th>
                </tr>
              </thead>
              <tbody>
                <?php $i = 1;
                foreach ($array as $a) : ?>
                  <tr>
                    <td><?= $i++; ?></td>
                    <td><?= $a->pasien->nama; ?></td>
                    <td><?= $a->pasien->umur; ?></td>
                    <td><?= $a->pasien->jk; ?></td>
                    <td><?= $a->pasien->domisili; ?></td>
                    <td><?= $a->berat; ?> kg</td>
                    <td><?= $a->tinggi; ?> cm</td>
                    <td><?= number_format($a->nilaiBmi(), 1); ?></td>
                    <td><?= $a->statusBmi(); ?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include_once "footer.php";?>