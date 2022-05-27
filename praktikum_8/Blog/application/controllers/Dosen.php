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

            $this->load->view('header');
            $this->load->view('dosen/index', $data);
            $this->load->view('footer');


        }
    }

?>