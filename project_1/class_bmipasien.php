<?php
require_once 'class_bmi.php';
require_once 'class_pasien.php';

class BmiPasien extends Bmi
{
    public $pasien;

    function __construct($nama,$umur,$jk,$domisili,$berat,$tinggi)
    {
        parent::__construct($berat,$tinggi);
        $this->pasien = new Pasien($nama,$umur,$jk,$domisili);
    }
}
?>