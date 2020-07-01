<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_login');
		// $this->load->model('m_kriteria');
		// $this->load->model('m_alternatif');
		$this->load->library('fahp_perhitungan');
		
		if($this->m_login->is_role() != "administrator"){
			redirect(site_url('login'));
		}
	}

	public function index()
	{
		$data["tbl_alternatif"] = $this->fahp_perhitungan->getAllAlternatif();
		$data['hasil_kriteria'] = $this->fahp_perhitungan->hitung_kriteria();
		$data['hasil_alternatif'] = $this->fahp_perhitungan->hitung_alternatif();
		// $this->load->view("admin/alternatif/v_daftar", $data);
		// $data['hasil_administrator'] = $this->m_login->hitung_administrator();
		// $data['hasil_operator'] = $this->m_login->hitung_operator();
		$data['hasil_administrator'] = $this->fahp_perhitungan->hitung_administrator();
		$data['hasil_operator'] = $this->fahp_perhitungan->hitung_operator();

		$this->load->view("admin/v_beranda", $data);
		// if($this->m_login->logged_id())
		// {
		// 	$this->load->view("admin/v_beranda", $data);
		// }

		// else{
		// 	redirect(site_url('login'));
		// }
	}

	// public function logout()
	// {
	// 	$this->session->sess_destroy();
	// 	redirect(site_url('login'));
	// }

	// public function beranda()
	// {
	// 	$data['data_kriteria'] = $this->m_kriteria->tampil_kriteria();
	// 	$this->load->view('admin', $data);
	// }

}