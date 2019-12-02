<?php
error_reporting(0);
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Setting extends MY_Controller
{
function __construct()
  {
    parent::__construct();
    $this->load->database();
    $this->load->model('criminal_model');
    $this->load->model('setting_model');
    $this->load->helper(array('form', 'url'));
    $this->load->library('form_validation');
    // $this->load->model('admin/order_model');
    $this->load->library('session');
    if(!$this->session->userdata('admin_id')){
      redirect('/');
    }
  }
  public function RegisterLocation()
  {
   $insert=$this->setting_model->registerRegion($this->input->post());
   if($insert){
     $this->session->set_userdata('success','You have successfully added the location!');
    redirect('city-settings');
   }
   else{
     $this->session->set_userdata('error','It is not added, try again!');
     redirect('city-settings');

   }
  }
  public function changeStatusCrimeType()
  {
    $id=$_GET['id'];
    $status=$_GET['status'];
    $get=$this->setting_model->sql($this->setting_model->getSingleCrimeType($id));
    $update=$this->setting_model->updateCrimeType($get,$status,$id);
    if($update){
      echo '200';
    }
    else{
      echo '201';
    }
  }
  public function changeStatusLocation()
  {
    $id=$_GET['id'];
    $status=$_GET['status'];
    $get=$this->setting_model->sql($this->setting_model->getSingleRegion($id));
    $update=$this->setting_model->updateRegion($get,$status,$id);
    if($update){
      echo '200';
    }
    else{
      echo '201';
    }
  }
  public function registerCrimeType()
  {
   $insert=$this->setting_model->registerCrimeType($this->input->post());
   if($insert){
     $this->session->set_userdata('success','You have successfully added the location!');
    redirect('page-settings');
   }
   else{
     $this->session->set_userdata('error','It is not added, try again!');
     redirect('page-settings');

   }
  }
}

?>
