<?php defined('BASEPATH') OR exit('No direct script access allowed');

class m_kriteria extends CI_Model
{
    private $_table = "tbl_kriteria";

    public $id_kriteria;
    public $kode_kriteria;
    public $nama_kriteria;
    public $nilai_l;
    public $nilai_m;
    public $nilai_u;
    public $param_kriteria;

    public function rules()
    {
        return [
            ['field' => 'kode_kriteria',
            'label' => 'Kode Kriteria',
            'rules' => 'required'],

            ['field' => 'nama_kriteria',
            'label' => 'Nama Kriteria',
            'rules' => 'required'],

            ['field' => 'nilai_l',
            'label' => 'Nilai Lower (l)',
            'rules' => 'required'],

            ['field' => 'nilai_m',
            'label' => 'Nilai Middle (m)',
            'rules' => 'required'],

            ['field' => 'nilai_u',
            'label' => 'Nilai Upper (u)',
            'rules' => 'required'],

            // ['field' => 'nilai_param',
            // 'label' => 'Nilai Parameter',
            // 'rules' => 'required'],

            // ['field' => 'param_kriteria',
            // 'label' => 'Nama Parameter',
            // 'rules' => 'required']
        ];
    }

    public function getAll()
    {
        // $this->db->from($this->_table);
        // $this->db->order_by('kode_kriteria', 'ASC');
        // $query = $this->db->get(); 
        // return $query->result();
        $query=$this->db->query("SELECT * FROM tbl_kriteria ORDER BY CAST(SUBSTRING(kode_kriteria, LOCATE('K',kode_kriteria)+1) AS SIGNED) ASC");
        return $query->result();
        
        // return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_kriteria" => $id])->row();
    }

    public function save()
    {
        $arr_nilai = implode(",", $this->input->post('nilai_param'));
        $arr_param = implode(",", $this->input->post('param_kriteria'));

        $post = $this->input->post();
        $this->id_kriteria = uniqid();
        $this->kode_kriteria = $post["kode_kriteria"];
        $this->nama_kriteria = $post["nama_kriteria"];
        $this->nilai_l = $post["nilai_l"];
        $this->nilai_m = $post["nilai_m"];
        $this->nilai_u = $post["nilai_u"];
        $this->nilai_param = $arr_nilai;
        $this->param_kriteria = $arr_param;
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $arr_nilai = implode(",", $this->input->post('nilai_param'));
        $arr_param = implode(",", $this->input->post('param_kriteria'));

        $post = $this->input->post();
        $this->id_kriteria = $post["id"];
        $this->kode_kriteria = $post["kode_kriteria"];
        $this->nama_kriteria = $post["nama_kriteria"];
        $this->nilai_l = $post["nilai_l"];
        $this->nilai_m = $post["nilai_m"];
        $this->nilai_u = $post["nilai_u"];
        $this->nilai_param = $arr_nilai;
        $this->param_kriteria = $arr_param;
        return $this->db->update($this->_table, $this, array('id_kriteria' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_kriteria" => $id));
    }

    public function reset()
    {
        return $this->db->empty_table($this->_table);
    }

    // function hitung_kriteria(){
    //     $this->db->from('tbl_kriteria');
    //     return $num_rows = $this->db->count_all_results();
    // }

    
}