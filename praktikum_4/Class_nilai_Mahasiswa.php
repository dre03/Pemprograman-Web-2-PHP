<?php
    class NilaiMahasiswa{
        public $nama;
        public $matakuliah;
        public $nilai;
        public $nim;


        function __construct($nama,$matakuliah, $nilai, $nim){
            $this->nama = $nama;
            $this->matakuliah = $matakuliah;
            $this->nilai = $nilai;
            $this->nim = $nim;
        }

        function hitungNilai(){
            return $this->nilai;
        }

        function grade(){
            if ($this->nilai > 56){
                return "Anda Lulus <br>";
            }
            else {
                return "Anda Tidak Lulus <br>";
            }
        }

        function predikat(){
            if($this->nilai >= 85 && $this->nilai <= 100){
                return " Predkat anda A";
            }
            elseif($this->nilai >= 70 && $this->nilai <= 84){
                return " Predkat anda B";
            }
            elseif($this->nilai >= 56 && $this->nilai <= 69){
                return " Predkat anda C";
            }
            elseif($this->nilai >= 36 && $this->nilai <= 55){
                return " Predkat anda D";
            }
            elseif($this->nilai >= 0 && $this->nilai <= 35){
                return " Predkat anda E";
            }
            else{
                return " Predkat anda I";
            }
        }
    }

    $mahasiswa1 = new NilaiMahasiswa($nama, $matakuliah, $nilai , $nim);
    echo $mahasiswa1->nama . "<br>";
    echo $mahasiswa1->matakuliah ."<br>";
    echo $mahasiswa1->nim . "<br>";
    echo $mahasiswa1->grade();
    echo $mahasiswa1->predikat();

?>