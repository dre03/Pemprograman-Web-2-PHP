<?php
    class Mahasiswa{
        var $nim;
        var $nama;
        var $prodi;
        var $thn_angkata;
        var $ipk;
        
        function __construct($nim, $nama){
            $this->nim = $nim;
            $this->nama = $nama;
        }
        function Predikat($ipk){
            if($this->ipk < 2.0){
                return "Cukup";
            }
            elseif($this->ipk >= 2.0 && $this->ipk < 3.0){
                return "Baik";
            }
            elseif($this->ipk >= 3.0 && $this->ipk < 3.75){
                return "Memuaskan";
            }
            elseif($this->ipk >= 3.75 && $this->ipk <= 4){
                return "Cum Laude";
            }
        }
    }

    $mahasiswa1 = new Mahasiswa($nim, $nama, $ipk);
    $mahasiswa1->nim = "0110221111";
    $mahasiswa1->nama = "Andre Apriyana";
    $mahasiswa1->prodi = "TI";
    $mahasiswa1->thn_angkatan = "2021";
    $mahasiswa1->ipk = 4.0;
    $mahasiswa1->Predikat($ipk);

    $mahasiswa2 = new Mahasiswa($nim, $nama, $ipk);
    $mahasiswa2->nim = "0110221222";
    $mahasiswa2->nama = "Ahmad Ruli";
    $mahasiswa2->prodi = "SI";
    $mahasiswa2->thn_angkatan = "2021";
    $mahasiswa2->ipk = 3.75 ;
    $mahasiswa2->Predikat($ipk);

    $mahasiswa3 = new Mahasiswa($nim, $nama, $ipk);
    $mahasiswa3->nim = "0110221333";
    $mahasiswa3->nama = "Sari Aulia";
    $mahasiswa3->prodi = "SI";
    $mahasiswa3->thn_angkatan = "2021";
    $mahasiswa3->ipk = 3.35 ;
    $mahasiswa3->Predikat($ipk);

    $mahasiswa4 = new Mahasiswa($nim, $nama, $ipk);
    $mahasiswa4->nim = "0110221444";
    $mahasiswa4->nama = "Hasan Rawali";
    $mahasiswa4->prodi = "TI";
    $mahasiswa4->thn_angkatan = "2021";
    $mahasiswa4->ipk = 3.0 ;
    $mahasiswa4->Predikat($ipk);
?>