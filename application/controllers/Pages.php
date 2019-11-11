<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function index()
	{
		$this->load->view('included/header');
		$this->load->view('pages/index');
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

	public function add_new_wanted()
	{
		$this->load->view('included/admin/header.php');
		$this->load->view('pages/admin/add_new_wanted');
		$this->load->view('included/admin/footer.php');		
	}

	public function all_reported()
	{
		$this->load->view('included/admin/header.php');
		$this->load->view('pages/admin/all_report');
		$this->load->view('included/admin/footer.php');		
	}

	public function setting()
	{
		$this->load->view('included/admin/header.php');
		$this->load->view('pages/admin/setting');
		$this->load->view('included/admin/footer.php');		
	}

	public function crime_report()
	{
		$this->load->view('included/admin/header.php');
		$this->load->view('pages/admin/crime_report');
		$this->load->view('included/admin/footer.php');		
	}

	public function comment()
	{
		$this->load->view('included/admin/header.php');
		$this->load->view('pages/admin/comment');
		$this->load->view('included/admin/footer.php');		
	}
}
