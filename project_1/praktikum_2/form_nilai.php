<?php 

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Nilai Siswa</title>
  </head>
  <body>
      <div class="container bg-info mt-3 rounded">
          <div class="row">
              <div class="col mt-5">
                  <h3 class="text-center p-3 text-white">Form Nilai Mahasiswa</h3>
              <form action="form_nilai.php" method="POST">
                    <div class="form-group row">
                        <label for="name" class="col-4 col-form-label text-white">Nama Lengkap</label> 
                        <div class="col-8">
                        <input id="name" name="nama" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="matkul" class="col-4 col-form-label text-white">Matkul</label> 
                        <div class="col-8">
                        <select id="matkul" name="mata_kuliah" class="custom-select">
                            <option value="DDP">Dasar Dasar Pemprograman</option>
                            <option value="BDI">Basis Data I</option>
                            <option value="WEBI">Pemprograman Web I</option>
                        </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nilai_uts" class="col-4 col-form-label text-white">Nilai UTS</label> 
                        <div class="col-8">
                        <input id="nilai_uts" name="nilai_uts" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nilai_uas" class="col-4 col-form-label text-white">Nilai UAS</label> 
                        <div class="col-8">
                        <input id="nilai_uas" name="nilai_uas" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nilai_tugas" class="col-4 col-form-label text-white">Nilai Tugas/Praktikum</label> 
                        <div class="col-8">
                        <input id="niali_tugas" name="nilai_tugas" type="text" class="form-control">
                        </div>
                    </div> 
                    <div class="form-group row">
                        <div class="offset-4 col-8 text-center">
                        <input name="proses" type="submit" value="Simpan" class="btn btn-danger">
                        </div>
                    </div>
                </form>
                <?php 
                    $proses = $_POST["proses"];
                    $nama_siswa  = $_POST["nama"];
                    $mata_kuliah = $_POST["mata_kuliah"];
                    $nilai_uts   = $_POST["nilai_uts"];
                    $nilai_uas   = $_POST["nilai_uas"];
                    $nilai_tugas = $_POST["nilai_tugas"];

                    echo "Proses : ".$proses;
                    echo "<br>Nama Lengkap : ".$nama_siswa;
                    echo "<br>Mata Kuliah : ".$mata_kuliah;
                    echo "<br>Nilai UTS : ".$nilai_uts;
                    echo "<br>Nilai UAS : ".$nilai_uas;
                    echo "<br>Nilai Tugas / Praktikum : ".$nilai_tugas;
                ?>
              </div>
          </div>
      </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
  </body>
</html>