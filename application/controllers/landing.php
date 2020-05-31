<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing extends CI_Controller {

	public function index()
	{
		$this->load->model("m_landing");
		$data["tbl_alternatif"] = $this->m_landing->getAllAlternatif();
		$data["tbl_kriteria"] = $this->m_landing->getAllKriteria();

		$data["tbl_bobot"] = $this->m_landing->hitung_ternormalisasi();
    $data["tbl_nilaiakhir"] = $this->m_landing->getAllNilai();


		$this->load->view('v_landing', $data);
	}
}
