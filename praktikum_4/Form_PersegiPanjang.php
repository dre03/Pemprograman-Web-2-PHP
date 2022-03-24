<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum ke 4</title>
</head>
<body style="background : #ACB992">
    <div class="form">
        <h2>Hitung Luas dan keliling Persegi Panjang</h2>
        <form action="Form_PersegiPanjang.php" method="POST">
            <span>Panjang</span> <input type="number" id="panjang" name="panjang"><br><br>
            <span>Lebar</span><input type="number" id="lebar" name="lebar" style="margin-left: 20px;"><br><br>
            <input name="proses" type="submit" value="Hitung" style="margin-left: 100px;">
        </form>
    <?php
        
        $panjang = $_POST["panjang"];
        $lebar = $_POST["lebar"];

        if($panjang && $lebar){
            require_once "class_PersegiPanjang.php";
        }
    ?>
    </div>
</body>
</html>