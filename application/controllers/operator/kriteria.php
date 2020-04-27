<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Kriteria extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("m_kriteria");
        $this->load->model('m_login');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["tbl_kriteria"] = $this->m_kriteria->getAll();
        // $data['num_results'] = $this->m_kriteria->hitung_kriteria();
        // print_r($data["tbl_kriteria"]);
        $this->load->view("operator/kriteria/v_daftar", $data);
    }

    public function tambah()
    {
        if($this->m_login->is_role() != "operator"){
			redirect(site_url('login'));
		}
        $kriteria = $this->m_kriteria;
        $validation = $this->form_validation;
        $validation->set_rules($kriteria->rules());

        if ($validation->run()) {
            $kriteria->save();
            $this->session->set_flashdata('success', 'Data kriteria berhasil ditambah');
            redirect(site_url('operator/kriteria'));
        }

        $this->load->view("operator/kriteria/v_tambah");
    }

    public function ubah($id = null)
    {
        if($this->m_login->is_role() != "operator"){
			redirect(site_url('login'));
		}
        if (!isset($id)) redirect('operator/kriteria');
        
        $kriteria = $this->m_kriteria;
        $validation = $this->form_validation;
        $validation->set_rules($kriteria->rules());

        if ($validation->run()) {
            $kriteria->update();
            $this->session->set_flashdata('success', 'Data kriteria berhasil diubah');
            redirect(site_url('operator/kriteria'));
        }

        $data["kriteria"] = $kriteria->getById($id);
        if (!$data["kriteria"]) show_404();
        
        $this->load->view("operator/kriteria/v_ubah", $data);
    }

    public function delete($id=null)
    {
        if($this->m_login->is_role() != "operator"){
			redirect(site_url('login'));
		}
        if (!isset($id)) show_404();
        
        if ($this->m_kriteria->delete($id)) {
            redirect(site_url('operator/kriteria'));
        }
    }
}