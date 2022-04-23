<?php
class Bmi 
{
    public $berat, $tinggi;

    function __construct($berat,$tinggi)
    {
        $this->berat = $berat;
        $this->tinggi = $tinggi;
    }
    function nilaiBmi()
    {
        $tgi_bdn = $this->tinggi / 100;
        $this->bmi = $this->berat / ($tgi_bdn * $tgi_bdn);
        return $this->bmi;
    }

    function statusBmi()
    {
        if($this->nilaiBmi() < 18.5) {
            return "Kekurangan berat badan";
        }elseif ($this->nilaiBmi() >= 18.5 && $this->nilaiBmi() <= 24.9) {
            return "Normal (Ideal)";
        }elseif ($this->nilaiBmi() >= 25.0 && $this->nilaiBmi() <= 29.9) {
            return "Kelebihan berat badan";
        }elseif ($this->nilaiBmi() >= 30.0&& $this->nilaiBmi() <= 35.9) {
            return "Obesitas 1";
        }elseif($this->nilaiBmi() >= 40.0){
            return "Obesitas 2";
        }
    }
}

// $obj = new Bmi(50,155);
// echo $obj->nilaiBmi()."\n";
// echo $obj->statusBmi();