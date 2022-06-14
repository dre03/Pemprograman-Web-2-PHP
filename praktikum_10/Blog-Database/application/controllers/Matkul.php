<?php
    class Matkul extends CI_Controller{

        public function index(){

            $this->load->model('matkul_model', 'matkul');


            $list_matkul = $this->matkul->getAll();

            $data['list_matkul'] = $list_matkul;

            $this->load->view('layout/header');
            $this->load->view('layout/sidebar');
            $this->load->view('matkul/index', $data);
            $this->load->view('layout/footer');

        }
    }

?>