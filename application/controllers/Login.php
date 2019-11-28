<?php
class Login extends MY_Controller
{
function __construct()
  {
    parent::__construct();
    $this->load->database();
    $this->load->model('criminal_model');
    $this->load->helper(array('form', 'url'));
    $this->load->library('form_validation');
    $this->load->library('session');
  }

public function index()
  {
    $this->load->view('pages/admin/login');

  }
  function login(){
  $username=$this->input->post('username');
  $password=hash_hmac('sha256', $this->input->post('password'), '');
  $check=$this->validationToLogin($username,$password);
  if($check){
    $this->session->set_userdata('admin_id',$check[0]->admin_id);
    $this->session->set_userdata('admin_name',$check[0]->admin_name);
    $this->session->set_userdata('admin_phone',$check[0]->admin_phone);
    $this->session->set_userdata('admin_status',$check[0]->admin_status);
    $this->session->set_userdata('created_date',$check[0]->created_date);
    $this->session->set_userdata('username',$check[0]->admin_email);
    $this->session->set_userdata('password',$check[0]->admin_password);
    $this->session->set_userdata('image',$check[0]->admin_image);
    echo '200';
      }
  else{
    echo '201';
  }
  }
}
?>
