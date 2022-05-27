<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mahasiswa extends CI_Controller {

	public function index()

    // fungsi : menampilka seluruh data
	{
		// Load model
        $this->load->model('mahasiswa_model', 'mhs1');

        // peke class model
        $this->mhs1->id = 1;
        $this->mhs1->nim = 0110221112;
        $this->mhs1->nama = 'Andre';
        $this->mhs1->gender = 'L';
        $this->mhs1->tmp_lahir = 'Jakarta';
        $this->mhs1->tgl_lahir = '24-04-2003';
        $this->mhs1->ipk = 3.95;

        // buat objek 2
        // load modell + bikin objek
        $this->load->model('mahasiswa_model', 'mhs2');

        // pake class model + isi data
        $this->mhs2->id = 2;
        $this->mhs2->nim = 0110221233;
        $this->mhs2->nama = 'putri';
        $this->mhs2->tmp_lahir = 'Depok';
        $this->mhs2->tgl_lahir = '24-04-2001';
        $this->mhs2->gender = 'P';
        $this->mhs2->ipk = 3.35;

        // simpn objek kedalam array
        $list_mhs = [$this->mhs1, $this->mhs2];

        // sipin data untuk dikirim view

        $data['list_mhs'] = $list_mhs;


        //untuk mengirim data + menampilkan ke view
        $this->load->view('header');
        $this->load->view('mahasiswa/index', $data);
        $this->load->view('footer');

	}
}
?>