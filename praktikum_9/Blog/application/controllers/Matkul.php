<?php
    class Matkul extends CI_Controller{

        public function index(){
            $this->load->model('matkul_model', 'matkul1');
            $this->matkul1->nama = 'B.indonesia';
            $this->matkul1->sks = 3;
            $this->matkul1->kode = 'bi004';

            $this->load->model('matkul_model', 'matkul2');
            $this->matkul2->nama = 'P.WEB';
            $this->matkul2->sks = 4;
            $this->matkul2->kode = 'pw005';


            $list_matkul = [$this->matkul1, $this->matkul2];

            $data['list_matkul'] = $list_matkul;

            $this->load->view('layout/header');
            $this->load->view('layout/sidebar');
            $this->load->view('matkul/index', $data);
            $this->load->view('layout/footer');

        }
    }

?>