<?php
    require_once "class_Mahasiswa.php";

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Datar Mahasiswa</title>
  </head>
  <body>
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">WEB02</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    REVIEW PHP
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    REVIEW OOP
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
                </li>
                <li class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="" aria-label="Search">
                    <button class="btn btn-outline-danger" type="submit">Submit</button>
                </li>
            </ul>
            <div class="d-flex flex-row-reverse bd-highlight">
                <div class="p-2 bd-highlight">Dropdown</div>
                <div class="p-2 bd-highlight">Login</div>
            </div>
        </div>
    </nav>
    <div class="d-flex bd-highlight mb-3">
        <div class="p-2 bd-highlight fw-bold">Show
            <input type="number" style="width:50px">
    </div>
    <div class="p-2 bd-highlight fw-bold">entries</div>
        <div class="ms-auto p-2 bd-highlight fw-bold">Search :</div>
        <input class="mt-2" type="search" style="width: 100px; height : 30px" >
    </div>
        <!-- Table  -->
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                    <th scope="col">NO</th>
                    <th scope="col">NIM</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Prodi</th>
                    <th scope="col">Angkatan</th>
                    <th scope="col">IPK</th>
                    <th scope="col">Predikat</th>
                    <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">1</th>
                    <td><?php echo $mahasiswa1->nim;?></td>
                    <td><?php echo $mahasiswa1->nama;?></td>
                    <td><?php echo $mahasiswa1->prodi;?></td>
                    <td><?php echo $mahasiswa1->thn_angkatan;?></td>
                    <td><?php echo $mahasiswa1->ipk;?></td>
                    <td><?php echo $mahasiswa1->Predikat($ipk);?></td>
                    <td>Edit</td>
                    </tr>
                    <tr>
                    <th scope="row">2</th>
                    <td><?php echo $mahasiswa2->nim;?></td>
                    <td><?php echo $mahasiswa2->nama;?></td>
                    <td><?php echo $mahasiswa2->prodi;?></td>
                    <td><?php echo $mahasiswa2->thn_angkatan;?></td>
                    <td><?php echo $mahasiswa2->ipk;?></td>
                    <td><?php echo $mahasiswa2->Predikat($ipk);?></td>
                    <td>Edit</td>
                    </tr>
                    <tr>
                    <th scope="row">3</th>
                    <td><?php echo $mahasiswa3->nim;?></td>
                    <td><?php echo $mahasiswa3->nama;?></td>
                    <td><?php echo $mahasiswa3->prodi;?></td>
                    <td><?php echo $mahasiswa3->thn_angkatan;?></td>
                    <td><?php echo $mahasiswa3->ipk;?></td>
                    <td><?php echo $mahasiswa3->Predikat($ipk);?></td>
                    <td>Edit</td>
                    </tr>
                    <tr>
                    <th scope="row">4</th>
                    <td><?php echo $mahasiswa4->nim;?></td>
                    <td><?php echo $mahasiswa4->nama;?></td>
                    <td><?php echo $mahasiswa4->prodi;?></td>
                    <td><?php echo $mahasiswa4->thn_angkatan;?></td>
                    <td><?php echo $mahasiswa4->ipk;?></td>
                    <td><?php echo $mahasiswa4->Predikat($ipk);?></td>
                    <td>Edit</td>
                    </tr>  
                </tbody>
            </table>
            <div class="d-flex bd-highlight">
                <div class="p-2 flex-grow-1 bd-highlight">Showing 1 to 4 of 4 entries</div>
                <div class="p-2 bd-highlight">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link text-black" href="#">Previous</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link bg-light text-black" href="#">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link text-black" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <hr>

            <div>
                <span class = "fw-bold">Lab Pemprograman Lanjutan</span><br>
                <span>Dosen : Sirojul Munir, S.Si, M.Kom</span><br>
                <span>STT-NF - Kampus B</span>
            </div>
            
        </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>