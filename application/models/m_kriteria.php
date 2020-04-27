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
            'label' => 'Kode_kriteria',
            'rules' => 'required'],

            ['field' => 'nama_kriteria',
            'label' => 'Nama_kriteria',
            'rules' => 'required'],
        ];
    }

    public function getAll()
    {
        $this->db->from($this->_table);
        $this->db->order_by('kode_kriteria', 'ASC');
        $query = $this->db->get(); 
        return $query->result();
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
        $post = $this->input->post();
        $this->id_kriteria = $post["id"];
        $this->kode_kriteria = $post["kode_kriteria"];
        $this->nama_kriteria = $post["nama_kriteria"];
        return $this->db->update($this->_table, $this, array('id_kriteria' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_kriteria" => $id));
    }

    // function hitung_kriteria(){
    //     $this->db->from('tbl_kriteria');
    //     return $num_rows = $this->db->count_all_results();
    // }

    
}