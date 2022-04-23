<?php 
    class PersegiPanjang{
        public $panjang;
        public $lebar;

        public function __construct($panjang, $lebar){
            $this->panjang = $panjang;
            $this->lebar = $lebar;
        }

        function cariLuas(){
            return $this->panjang * $this->lebar;
        }

        function cariKeliling(){
            return 2 * ($this->panjang * $this->lebar);
        }
    }
$Pesegi1 = new PersegiPanjang($panjang,$lebar);
echo "Luas Persegi Panjang adalah : ".$Pesegi1->cariLuas();
echo "<br>keliling Persegi Panjang adalah :".$Pesegi1->cariKeliling();


?>