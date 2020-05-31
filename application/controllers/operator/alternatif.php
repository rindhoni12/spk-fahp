<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Alternatif extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("m_alternatif");
        $this->load->model('m_login');
        $this->load->library('form_validation');
    }

    public function index()
    {
        if($this->m_login->logged_id() != TRUE)
		{
            redirect(site_url('login'));
		}
        $data["tbl_alternatif"] = $this->m_alternatif->getAll();
        // $data['num_results'] = $this->m_alternatif->hitung_alternatif();
        $this->load->view("operator/alternatif/v_daftar", $data);
    }

    public function tambah()
    {
        if($this->m_login->is_role() != "operator"){
			redirect(site_url('login'));
		}
        $alternatif = $this->m_alternatif;
        $validation = $this->form_validation;
        $validation->set_rules($alternatif->rules());

        if ($validation->run()) {
            $alternatif->save();
            $this->session->set_flashdata('success', 'Data alternatif berhasil ditambah');
            redirect(site_url('operator/alternatif'));
        }

        $this->load->view("operator/alternatif/v_tambah");
    }

    public function ubah($id = null)
    {
        if($this->m_login->is_role() != "operator"){
			redirect(site_url('login'));
		}
        if (!isset($id)) redirect('operator/alternatif');
        
        $alternatif = $this->m_alternatif;
        $validation = $this->form_validation;
        $validation->set_rules($alternatif->rules());

        if ($validation->run()) {
            $alternatif->update();
            $this->session->set_flashdata('success', 'Data alternatif berhasil diubah');
            redirect(site_url('operator/alternatif'));
        }

        $data["alternatif"] = $alternatif->getById($id);
        if (!$data["alternatif"]) show_404();
        
        $this->load->view("operator/alternatif/v_ubah", $data);
    }

    public function delete($id=null)
    {
        if($this->m_login->is_role() != "operator"){
			redirect(site_url('login'));
		}
        if (!isset($id)) show_404();
        
        if ($this->m_alternatif->delete($id)) {
            redirect(site_url('operator/alternatif'));
        }
    }

    public function reset()
    {
        if($this->m_login->is_role() != "operator"){
			redirect(site_url('login'));
		}
        
        if ($this->m_alternatif->reset()) {
            redirect(site_url('operator/alternatif'));
        }
    }
}