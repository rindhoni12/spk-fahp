<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("m_pengguna");
        $this->load->model("m_login");
        // $this->load->library('fahp_perhitungan');
        $this->load->library('form_validation');
        // if($this->m_login->is_role() != "administrator"){
		// 	redirect(site_url('login'));
		// }
    }

    public function index()
    {
        if($this->m_login->is_role() != "administrator"){
			redirect(site_url('login'));
		}
        // $data['hasil_pengguna'] = $this->fahp_perhitungan->hitung_pengguna();
        $data["tbl_user"] = $this->m_pengguna->getAll();
        // $data['hasil_administrator'] = $this->fahp_perhitungan->hitung_administrator();
		// $data['hasil_operator'] = $this->fahp_perhitungan->hitung_operator();
        $this->load->view("admin/pengguna/v_daftar", $data);
    }

    public function tambah()
    {
        if($this->m_login->is_role() != "administrator"){
			redirect(site_url('login'));
		}
        $pengguna = $this->m_pengguna;
        $validation = $this->form_validation;
        $validation->set_rules($pengguna->rules());

        if ($validation->run()) {
            $pengguna->save();
            $this->session->set_flashdata('success', 'Data pengguna berhasil ditambah');
            redirect(site_url('admin/pengguna'));
        }

        $this->load->view("admin/pengguna/v_tambah");
    }

    public function ubah($id = null)
    {
        if($this->m_login->is_role() != "administrator"){
			redirect(site_url('login'));
		}
        if (!isset($id)) redirect('admin/pengguna');
    
        $pengguna = $this->m_pengguna;
        $validation = $this->form_validation;
        $validation->set_rules($pengguna->rulesupdate());

        if ($validation->run()) {
            $pengguna->update();
            $this->session->set_flashdata('success', 'Data pengguna berhasil diubah, lakukan login ulang untuk melihat perubahan');
            redirect(site_url('admin/pengguna'));
        }

        $data["pengguna"] = $pengguna->getById($id);
        if (!$data["pengguna"]) show_404();
        
        $this->load->view("admin/pengguna/v_ubah", $data);
    }

    public function delete($id=null)
    {
        if($this->m_login->is_role() != "administrator"){
			redirect(site_url('login'));
		}
        if (!isset($id)) show_404();
        
        if ($this->m_pengguna->delete($id)) {
            redirect(site_url('admin/pengguna'));
        }
    }

    public function ubah_profil()
    {
        if($this->m_login->logged_id() != TRUE)
		{
            redirect(site_url('login'));
		}
        $pengguna = $this->m_pengguna;
        $validation = $this->form_validation;
        $validation->set_rules($pengguna->rulesupdateprofil());

        if ($validation->run()) {
            $pengguna->update_profil();
            $this->session->set_flashdata('success', 'Profil pengguna login berhasil diubah, lakukan login ulang untuk melihat perubahan');
            redirect(site_url('ubah_profil'));
        }

        $this->load->view("admin/pengguna/v_ubahprofil");
    }

}