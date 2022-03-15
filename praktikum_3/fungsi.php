<?php
    // Cara membuat Fungsi 
    // function namafungsi (paraeter){
    //     tulis kode di sini
    // }
    
    function luaspersegi($sisi){
        $rumus = $sisi * $sisi;
        return $rumus;
    }
        echo "Hasilnya adalah : " . luaspersegi(10);
        echo "<br>";

    function nama(){
        echo "Nama saya adalah Andre apriyana";
        echo "<br>";
    }

    nama();


    // function mengunakan parameter
    // parameter defaulf

    function perkenalan($nama = " Apriyana"){
        echo "Perkenalkan nama saya : " . $nama;
    }

    perkenalan();
    echo "<br>";
    echo "<br>";
    echo "<br>";


    // hitung luas 
    function hitungluas($jari){
        $phi = 3.14;
        $luaslingkaran = $phi * $jari * $jari;
        return $luaslingkaran;

    }

    echo hitungluas(10);
    echo hitungluas(14);
    echo hitungluas(21);

?>