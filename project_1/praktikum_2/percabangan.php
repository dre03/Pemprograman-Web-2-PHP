<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengkondisian</title>
</head>
<body>
    <form action="percabangan.php" method="POST">
        <input type="number" name="nilai" id="nilai">
        <input type="submit">
    </form>

    <?php 

    // menggunakan IF else

        $nilai = $_POST["nilai"];


        if($nilai >= 85 && $nilai <= 100){
            echo "Nilai Anda A";
        }
        elseif($nilai >= 70 && $nilai <= 84){
            echo "Nilai Anda B";
        }
        elseif($nilai >= 59 && $nilai <= 69){
            echo "Niali Anda C";
        }
        elseif($nilai >= 36 && $nilai <= 58){
            echo "Niali Anda D";
        }
        elseif($nilai >= 0 && $nilai <= 35){
            echo "Nilai Anda E";
        }
        else {
            echo "Nilai Tidak Ada";
        }    

        // Menggunakan Switch 


        // switch($nilai){
        //     case $nilai >= 85 && $nilai <= 100:
        //         echo "Sangat Memuaskan";
        //     break;
        //     case $nilai >= 70 && $nilai <= 84:
        //         echo "Memuaskan";
        //     break;
        //     case $nilai >= 59 && $nilai <= 69:
        //         echo "Cukup";
        //     break;
        //     case $nilai >= 36 && $nilai <= 58:
        //         echo "Kurang";
        //     break;
        //     case $nilai >= 0 && $nilai <= 35:
        //         echo "Sangat Kurang";
        //     break;
        //     default:
        //         echo "Nilai Tidak Ada";
        //     break;
        // }
    ?>

</body>
</html>