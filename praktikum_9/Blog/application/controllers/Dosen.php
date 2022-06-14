<?php
    class Dosen extends CI_Controller {

        public function index() {
            
            $this->load->model('dosen_model', 'dsn1');
            $this->dsn1->id = 1;
            $this->dsn1->nidn = 31928314;
            $this->dsn1->nama = 'Zaki';
            $this->dsn1->gender = 'L';
            $this->dsn1->tmp_lahir = 'Jakarta';
            $this->dsn1->tgl_lahir = '02-10-2001';
            $this->dsn1->pendidikan = 'S2';

            $this->load->model('dosen_model', 'dsn2');
            $this->dsn2->id = 2;
            $this->dsn2->nidn = 9727463;
            $this->dsn2->nama = 'Rani';
            $this->dsn2->gender = 'P';
            $this->dsn2->tmp_lahir = 'Bogor';
            $this->dsn2->tgl_lahir = '02-10-2002';
            $this->dsn2->pendidikan = 'S1';

            $list_dsn = [$this->dsn1, $this->dsn2];

            $data['list_dsn'] = $list_dsn;

            // $this->load->view('header');
            // $this->load->view('dosen/index', $data);
            // $this->load->view('footer');
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