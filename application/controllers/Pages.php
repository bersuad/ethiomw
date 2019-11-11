<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function index()
	{
		$this->load->view('included/header');
		$this->load->view('index');
		$this->load->view('included/footer');
	}

	public function single_view()
	{
		$this->load->view('included/header');
		$this->load->view('pages/single_view');
		$this->load->view('included/footer');
	}
	public function admin()
	{
		$this->load->view('included/admin/header.php');
		$this->load->view('pages/admin/admin');
		$this->load->view('included/admin/footer.php');
	}

	public function all_wanted_list()
	{
		$this->load->view('included/admin/header.php');
		$this->load->view('pages/admin/all_wanted_list');
		$this->load->view('included/admin/footer.php');		
	}
}
