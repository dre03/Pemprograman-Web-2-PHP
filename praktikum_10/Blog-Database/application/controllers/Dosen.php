<?php
    class Dosen extends CI_Controller {

        public function index() {
            
            $this->load->model('dosen_model', 'dsn');
            

            $list_dsn = $this->dsn->getAll();

            $data['list_dsn'] = $list_dsn;

            $this->load->view('layout/header');
            $this->load->view('layout/sidebar');
            $this->load->view('dosen/index', $data);
            $this->load->view('layout/footer');


        }
        public function create(){
            $data["judul"]="Form Kelola Dosen";
            $this->load->view('layout/header');
            $this->load->view('layout/sidebar');
            $this->load->view('dosen/create', $data);
            $this->load->view('layout/footer');
        }

        public function save(){
            $this->load->model('dosen_model','dsn');
            $this->dsn->nidn = $this->input->post('nidn');
            $this->dsn->nama = $this->input->post('nama');
            $this->dsn->gender = $this->input->post('gender');
            $this->dsn->tmp_lahir = $this->input->post('tmp_lahir');
            $this->dsn->tgl_lahir = $this->input->post('tgl_lahir');
            $this->dsn->pendidikan = $this->input->post('pendidikan');

            $data['dsn'] = $this->dsn;
            $data["judul"]="Form Kelola Dosen";
            $this->load->view('layout/header');
            $this->load->view('layout/sidebar');
            $this->load->view('dosen/view', $data);
            $this->load->view('layout/footer');
        }

    }
?>