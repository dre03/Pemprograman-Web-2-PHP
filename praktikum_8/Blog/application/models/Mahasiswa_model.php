<?php

// BUat class
    class Mahasiswa_model extends CI_Model{
        // buat stuktur datanya
        public $id, $nim, $nama, $gender, $tmp_lahir, $tgl_lahir, $ipk;
        // buat method/ fungsinya
        public function Predikat(){
            //kondisin ? true : false
            $predikat = ($this->ipk >= 3.75)?"Cumlaude" : "Baik";
            return $predikat;
        }
    }

?>