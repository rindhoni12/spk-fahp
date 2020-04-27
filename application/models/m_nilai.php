<?php defined('BASEPATH') OR exit('No direct script access allowed');

class m_nilai extends CI_Model
{
    private $_table = "tbl_nilai";

    public $id_nilai;
    public $kode_alternatif;
    public $nilai;

    public function rules()
    {
        return [
            ['field' => 'kode_alternatif',
            'label' => 'Kode_alternatif',
            'rules' => 'required'],

            // ['field' => 'nilai',
            // 'label' => 'Nilai',
            // 'rules' => 'required'],
        ];
    }

    function getAlternatif()
    {
        /*
        $query = $this->db->get('location');

        foreach ($query->result() as $row)
        {
            echo $row->description;
        }*/

        // $query = $this->db->query('SELECT kode_alternatif, nama_alternatif FROM tbl_alternatif');
        $query = $this->db->query('SELECT * FROM tbl_alternatif');

        return $query->result();

        //echo 'Total Results: ' . $query->num_rows();
    }

    function getkodeKriteria()
    {
        $query = $this->db->query('SELECT kode_kriteria FROM tbl_kriteria');
        // $query = $this->db->query('SELECT * FROM tbl_kriteria');
        return $query->result();
    }

    function getparamKriteria()
    {
        // $query = $this->db->query('SELECT * FROM tbl_kriteria');
        $query = $this->db->query('SELECT nilai_param, param_kriteria FROM tbl_kriteria');
        return $query->result();
        
        
        // foreach ($query as $key => $value) {
        // $value['kode_kriteria'];
        // explode(',',$value['nilai_param']);
        // explode(',',$value['param_kriteria']);
        // }
        // return $query->result();
        // return $query->result();
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_nilai" => $id])->row();
    }

    public function save()
    {
        $arr_nilai = implode(",", $this->input->post('nilai[]'));

        $post = $this->input->post();
        $this->id_nilai = uniqid();
        $this->kode_alternatif = $post["kode_alternatif"];
        $this->nilai = $arr_nilai;
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_alternatif = $post["id"];
        $this->kode_alternatif = $post["kode_alternatif"];
        $this->nilai = $post["nilai"];
        return $this->db->update($this->_table, $this, array('id_nilai' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_nilai" => $id));
    }
}