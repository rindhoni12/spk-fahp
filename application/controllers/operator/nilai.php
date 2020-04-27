<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Nilai extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("m_nilai");
        $this->load->model('m_login');
        // $this->load->model("m_alternatif");
        // $this->load->model("m_kriteria");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["tbl_nilai"] = $this->m_nilai->getAll();
        
        $this->load->view("operator/nilai/v_daftar", $data);
    }

    public function tambah()
    {
        if($this->m_login->is_role() != "operator"){
			redirect(site_url('login'));
		}
        $data['data_alternatif'] = $this->m_nilai->getAlternatif();
        $data['data_kode'] = $this->m_nilai->getkodeKriteria();
        $data['data_param'] = $this->m_nilai->getparamKriteria();

            // $i=0;
            // foreach($data['data_param'] as $row)
            // { 
            //     $data[$i]['arr_nil2'] = (explode (',', $row->nilai_param));
            //     $data[$i]['arr_par2'] = (explode (',', $row->param_kriteria));
            //     // $arr_nil = (explode (',', $row->nilai_param));
            //     // $arr_par = (explode (',', $row->param_kriteria));
            //     $i++;
            //     // echo '<option value="'.$row->kode_alternatif.'">'.$row->kode_alternatif.' - '.$row->nama_alternatif.'</option>';
            // }

        $nilai = $this->m_nilai;
        $validation = $this->form_validation;
        $validation->set_rules($nilai->rules());

        if ($validation->run()) {
            $nilai->save();
            $this->session->set_flashdata('success', 'Data nilai berhasil ditambah');
            redirect(site_url('operator/nilai'));
        }

        //print_r($data['data_kode'][0]);
        //print_r($data['data_param']);
        // print_r($arr_nil);
        // print_r($arr_par);
        // print_r($data[0]['arr_nil2']);
        // print_r($data[0]['arr_par2']);
        // print_r($data[1]['arr_nil2']);
        // print_r($data[1]['arr_par2']);
        // print_r($data[2]['arr_nil2']);
        // print_r($data[2]['arr_par2']);
        // print_r($data[3]['arr_nil2']);
        // print_r($data[3]['arr_par2']);
        //print_r($data['data_param']);
        $this->load->view("operator/nilai/v_tambah", $data);
    }

    public function ubah($id = null)
    {
        if($this->m_login->is_role() != "operator"){
			redirect(site_url('login'));
		}
        if (!isset($id)) redirect('operator/nilai');
        
        $nilai = $this->m_nilai;
        $validation = $this->form_validation;
        $validation->set_rules($nilai->rules());

        if ($validation->run()) {
            $nilai->update();
            $this->session->set_flashdata('success', 'Data nilai berhasil diubah');
            redirect(site_url('operator/nilai'));
        }

        $data["nilai"] = $nilai->getById($id);
        if (!$data["nilai"]) show_404();
        
        $this->load->view("operator/nilai/v_ubah", $data);
    }

    public function delete($id=null)
    {
        if($this->m_login->is_role() != "operator"){
			redirect(site_url('login'));
		}
        if (!isset($id)) show_404();
        
        if ($this->m_nilai->delete($id)) {
            redirect(site_url('operator/nilai'));
        }
    }

}