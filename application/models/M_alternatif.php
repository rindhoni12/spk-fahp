<?php defined('BASEPATH') OR exit('No direct script access allowed');

class m_alternatif extends CI_Model
{
    private $_table = "tbl_alternatif";

    public $id_alternatif;
    public $kode_alternatif;
    public $nama_alternatif;
    public $kec_alternatif;

    public function rules()
    {
        return [
            ['field' => 'kode_alternatif',
            'label' => 'Kode Alternatif',
            'rules' => 'required|is_unique[tbl_alternatif.kode_alternatif]'],

            ['field' => 'nama_alternatif',
            'label' => 'Nama Alternatif',
            'rules' => 'required'],

            ['field' => 'kec_alternatif',
            'label' => 'Kecamatan Alternatif',
            'rules' => 'required'],
        ];
    }

    public function rulesupdate()
    {
        return [
            ['field' => 'kode_alternatif',
            'label' => 'Kode Alternatif',
            'rules' => 'required'],

            ['field' => 'nama_alternatif',
            'label' => 'Nama Alternatif',
            'rules' => 'required'],

            ['field' => 'kec_alternatif',
            'label' => 'Kecamatan Alternatif',
            'rules' => 'required'],
        ];
    }

    public function getAll()
    {
        $query=$this->db->query("SELECT * FROM tbl_alternatif ORDER BY CAST(SUBSTRING(kode_alternatif, LOCATE('A',kode_alternatif)+1) AS SIGNED) ASC");
        return $query->result();

        // return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_alternatif" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_alternatif = uniqid();
        $this->kode_alternatif = $post["kode_alternatif"];
        $this->nama_alternatif = $post["nama_alternatif"];
        $this->kec_alternatif = $post["kec_alternatif"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_alternatif = $post["id"];
        $this->kode_alternatif = $post["kode_alternatif"];
        $this->nama_alternatif = $post["nama_alternatif"];
        $this->kec_alternatif = $post["kec_alternatif"];
        return $this->db->update($this->_table, $this, array('id_alternatif' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_alternatif" => $id));
    }

    public function reset()
    {
        return $this->db->empty_table($this->_table);
    }

    // function hitung_alternatif(){
    //     $this->db->from('tbl_alternatif');
    //     return $num_rows = $this->db->count_all_results();
    // }
}