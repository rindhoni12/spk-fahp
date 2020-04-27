<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        //load model m_login
        $this->load->model('m_login');
        // $this->load->model('m_pengguna');
    }

    public function index()
    {

        if($this->m_login->logged_id())
        {
            //jika memang session sudah terdaftar, maka redirect ke halaman admin
            // redirect("admin");
            if($this->session->userdata("role") == "administrator")
            {
                // redirect('admin');
                redirect(site_url('admin'));
            }
            else
            {
                redirect(site_url('operator'));
            }
        }
        
        else
        {
            //jika session belum terdaftar

            //set form validation
            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');

            //set message form validation
            $this->form_validation->set_message('required', '<div class="alert alert-danger bg-danger text-white border-0 fade show" role="alert" style="margin-top: 3px">
                <div class="header"><i class="fa fa-exclamation-circle"></i> {field} harus diisi</div></div>');

            //cek validasi
            if ($this->form_validation->run() == TRUE) 
            {
                //get data dari FORM
                $username = $this->input->post("username", TRUE);
                $password = MD5($this->input->post('password', TRUE));

                //checking data via model
                $checking = $this->m_login->check_login('tbl_user', array('username' => $username), array('password' => $password));

                //jika ditemukan, maka create session
                if ($checking != FALSE) 
                {
                    // $pengguna = $this->m_pengguna->_updateTerakhirLogin('id_user');
                    $this->_updateTerakhirLogin('tbl_user', array('username' => $username), array('password' => $password));

                    var_dump($id_user);
                    
                    foreach ($checking as $apps) {

                        $session_data = array(
                            'user_id'   => $apps->id_user,
                            'user_nama' => $apps->nama_user,
                            'user_name' => $apps->username,
                            'user_pass' => $apps->password,
                            'role'      => $apps->role,
                            'foto'      => $apps->foto,
                            'terakhir_login'      => $apps->login_terakhir,
                            'dibuat_tanggal' => $apps->tanggal_dibuat
                        );
                        //set session userdata
                        $this->session->set_userdata($session_data);
                        // $this->m_pengguna->_updateTerakhirLogin($id_user);

                        // $this->_updateTerakhirLogin($session_data->id_user);
                        // $pengguna = $this->m_pengguna->_updateTerakhirLogin('tbl_user', array('login_terakhir' => NOW()), array('username' => $username), array('password' => $password));

                        if($this->session->userdata("role") == "administrator")
                        {
                            redirect('admin');
                        }
                        else
                        {
                            redirect('operator');
                        }
                        
                        // redirect('admin');

                    }
                }

                else{
                    $data['error'] = '<div class="alert alert-danger bg-danger text-white border-0 fade show" role="alert" style="margin-top: 3px">
                        <div class="header"><i class="fa fa-exclamation-circle"></i> ERROR - username atau password salah!</div></div>';
                    $this->load->view('v_login', $data);
                }
            }
            
            else
            {
                $this->load->view('v_login');
            }
        }
    }

    public function logout()
	{
		$this->session->sess_destroy();
		redirect(site_url('login'));
    }

    // private function _updateTerakhirLogin($id_user){
    // $sql = "UPDATE tbl_user SET login_terakhir=now() WHERE username={$username} && password={password}";
    //     $this->db->query($sql);
    // }

    public function _updateTerakhirLogin($table, $field1, $field2)
    {
        // $NOW = date("Y-m-d H:i:s");
        $NOW = date("Y-m-d");
        $data = array(
            'login_terakhir' => $NOW
        );

        $this->db->set($data);
        $this->db->where($field1);
        $this->db->where($field2);
        $this->db->update($table);
    }
}