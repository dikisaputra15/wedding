<?php

class Dashboard extends CI_Controller{

	public function index()
	{
		if (!$this->session->userdata('email')) {
	         redirect('auth/login');
	      }else{
			$data['title'] = 'Dashboard';
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar');
			$this->load->view('dashboard');
			$this->load->view('templates/footer');
		}
	}
}