<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belanja Yu</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="container bg-success mt-5 rounded">
	<div class="row">
        <div class="col-md-9 p-2">
            <h3 class="text-center text-white">Form Belanja</h3>
            <form action="form_belanja.php" method="POST">
            <div class="form-group row">
                <label for="text" class="col-2 col-form-label text-white">Customer</label> 
                <div class="col-8">
                <input id="text" name="customer" type="text" class="form-control" Required>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-2 text-white">Pilih Produk</label> 
                <div class="col-8">
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="produk" id="name_0" type="radio" class="custom-control-input" value="tv"> 
                    <label for="name_0" class="custom-control-label text-white">TV</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="produk" id="name_1" type="radio" class="custom-control-input" value="kulkas"> 
                    <label for="name_1" class="custom-control-label text-white">Kulkas</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="produk" id="name_2" type="radio" class="custom-control-input" value="mesin_cuci"> 
                    <label for="name_2" class="custom-control-label text-white">Mesin Cuci</label>
                </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-2 col-form-label text-white">Jumlah</label> 
                <div class="col-8">
                <input id="jml" name="jml" value="" type="number" class="form-control" Required>
                </div>
            </div> 
            <div class="form-group row">
                <div class="offset-4 col-8">
                <button name="proses" value="simpan" type="submit" class="btn btn-warning text-white font-weight-bold">Submit</button>
                </div>
            </div>
            </form>
		</div>
		<div class="col-md-3">
        <div class="list-group">
				<p class="list-group-item bg-warning text-white fw-bold">Daftar Harga</p>
				<div class="list-group-item">
                    Tv : 4.200.000
				</div>
				<div class="list-group-item">
                    Kulkas : 3.100.000
				</div>
                <div class="list-group-item">
                    Mesin Cuci : 3.800.000
				</div>
                <p class="list-group-item bg-warning text-white fw-bold">Harga dapat berubah setiap</p>
			</div>
		</div>
        <div class="row">
            <div class="col-md-12 ">
            <?php
                    $proses = $_POST["proses"];
                    $Customer = $_POST["customer"];
                    $produk = $_POST["produk"];
                    $jumlah = $_POST["jml"];

                    if($produk == "tv"){
                        $harga = 4200000 * $jumlah;
                    }
                    elseif($produk == "kulkas"){
                        $harga = 3100000 * $jumlah;
                    }
                    elseif ($produk == "mesin_cuci") {
                        $harga = 3800000 * $jumlah;
                    }

                    echo "Nama Customer : ".$Customer;
                    echo "<br>Produk Pilihan : ".$produk;
                    echo "<br>Jumlah Beli : ".$jumlah;
                    echo "<br>Harga Total : ". $harga;
                ?>
            </div>
        </div>
	</div>
</div>
</body>
</html>