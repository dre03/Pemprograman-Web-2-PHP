<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mahasiswa extends CI_Controller {

	public function index()
    // fungsi : menampilka seluruh data
	{
		// Load model
        $this->load->model('mahasiswa_model', 'mhs');

        // simpn objek kedalam array
        $list_mhs = $this->mhs->getAll();

        // sipin data untuk dikirim view

        $data['list_mhs'] = $list_mhs;


        //untuk mengirim data + menampilkan ke view
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('mahasiswa/index', $data);
        $this->load->view('layout/footer');

	}
}
?>