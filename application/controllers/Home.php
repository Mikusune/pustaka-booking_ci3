<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();
		$this->load->model('Nasigoreng');
	}

	public function index()
	{
		$queryAllNasigoreng = $this->Nasigoreng->getDataNasigoreng();
		$DATA = array('queryAllNasigoreng' => $queryAllNasigoreng);
		$this->load->view('home', $DATA);
	}

	public function halaman_tambah() 
	{
		$this->load->view('halaman_tambah_nasgor');
	}

	public function halaman_edit($kdadmin)
	{
		$queryNasigorengDetail = $this->M_Mahasiswa->getDataMahasiswaDetail();
		$DATA = array('queryNasigorengDetail' => $queryNasigorengDetail);
		$this->load->view('halaman_edit_nasgor', $DATA);
	}

	public function fungsiTambah()
	{
		$kdadmin = $this->input->post('kdadmin');
		$nmadmin = $this->input->post('nmadmin');
		$Notelp = $this->input->post('Notelp');
        $password = $this->input->post('password');

		$ArrInsert = array(
			'kdadmin' => $nmadmin,
			'nmadmin' => $nmadmin,
			'Notelp' => $Notelp,
            'password' => $password
		);

		$this->Nasigoreng->insertDataNasigoreng($ArrInsert);
		redirect(base_url(''));

	}

	public function fungsiEdit()
	{
		$kdadmin = $this->input->post('kdadmin');
		$nmadmin = $this->input->post('nmadmin');
		$Notelp = $this->input->post('Notelp');

		$ArrUpdate = array(
			'nmadmin' => $nmadmin,
			'Notelp' => $Notelp
		);

		$this->Nasigoreng->updateDataNasigoreng($kdadmin, $ArrUpdate);
		redirect(base_url(''));

	}

	public function fungsiDelete($kdadmin)
	{
		$this->Nasigoreng->deleteDataNasigoreng($kdadmin);
		redirect(base_url(''));
	}
}