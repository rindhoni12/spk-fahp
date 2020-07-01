<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class m_login extends CI_Model
{
    //fungsi cek session
    function logged_id()
    {
        return $this->session->userdata('user_id');
    }

    function is_role()
    {
        return $this->session->userdata('role');
    }

    //fungsi check login
    function check_login($table, $field1, $field2)
    {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where($field1);
        $this->db->where($field2);
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() == 0) {
            return FALSE;
        } else {
            return $query->result();
        }
    }

    // function hitung_administrator(){
    //     // $this->db->select('role');
    //     // $this->db->get_where('tbl_user', array('role' => 'administrator'));
    //     // return $num_rows = $this->db->count_all_results();

    //     $query=$this->db->query("SELECT COUNT(role) as jumlah_administrator FROM `tbl_user` WHERE role='administrator'");
    //     return $query->row();

    // }

    // function hitung_operator(){
    //     // $this->db->select('role');
    //     // // $this->db->from('tbl_user');
    //     // $this->db->get_where('tbl_user', array('role' => 'operator'));
    //     // return $num_rows = $this->db->count_all_results();

    //     $query=$this->db->query("SELECT COUNT(role) as jumlah_operator FROM `tbl_user` WHERE role='operator'");
    //     return $query->row();
    // }
}