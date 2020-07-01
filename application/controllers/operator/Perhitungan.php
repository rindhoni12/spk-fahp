<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Perhitungan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_login');
        $this->load->model("m_kriteria");
        $this->load->library('fahp_perhitungan');
        
        if($this->m_login->is_role() != "operator"){
			redirect(site_url('login'));
		}
    }

    public function nilai_si()
    {
        $data["tbl_kriteria"] = $this->fahp_perhitungan->getAllKriteria();
        $this->load->view("operator/perhitungan/v_nilaisi", $data);
    }

    public function nilai_v()
    {
        $data['hasil_v'] = $this->fahp_perhitungan->hitung_v();
        $this->load->view("operator/perhitungan/v_nilaiv", $data);
    }
    
    public function nilai_d()
    {
        $data['hasil_d'] = $this->fahp_perhitungan->hitung_d();
        $this->load->view("operator/perhitungan/v_nilaid", $data);
    }

    public function nilai_bobot()
    {
        $data['hasil_bobot'] = $this->fahp_perhitungan->hitung_d();
        $this->load->view("operator/perhitungan/v_nilaibobot", $data);
    }

    public function nilai_ternormalisasi()
    {
        $data['hasil_ternormalisasi'] = $this->fahp_perhitungan->hitung_ternormalisasi();
        $this->load->view("operator/perhitungan/v_nilaiternormalisasi", $data);
    }
}

    // public function nilai_ternormalisasi()
    // {
    //     $data['hasil_ternormalisasi'] = $this->m_perhitungan->hitung_ternormalisasi();
    //     $this->load->view("admin/perhitungan/v_nilaiternormalisasi", $data);
    // }

    // public function hasil_ranking()
    // {
    //     $bobot = $this->nilai_ternormalisasi($data);
    //     // $data['hasil_ternormalisasi'] = $this->m_perhitungan->hitung_ternormalisasi();
    //     // $this->load->view("admin/perhitungan/v_nilaiternormalisasi", $data);
    //     $this->load->view("admin/ranking/v_ranking", $bobot);
    // }