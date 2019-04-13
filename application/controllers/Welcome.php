<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function dashboard()
	{
		$data = [];
		$data['content'] = $this->load->view('template/backend/dashboard','',true);
		$this->load->view('template/master', $data);
	}
}
