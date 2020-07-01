<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Peta extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_login');
		
		if($this->m_login->is_role() != "administrator"){
			redirect(site_url('login'));
		}
	}

	public function index()
	{
		$this->load->view("admin/peta/v_peta");
	}
}