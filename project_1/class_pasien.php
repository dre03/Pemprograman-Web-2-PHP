<?php
class Pasien
{
    public $nama,$umur,$jk,$domisili;

    function __construct($nama,$umur,$jk,$domisili)
    {
        $this->nama = $nama;
        $this->umur = $umur;
        $this->jk = $jk;
        $this->domisili = $domisili;
    }
}