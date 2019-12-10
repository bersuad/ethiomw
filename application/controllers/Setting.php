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
<<<<<<< HEAD
    $this->load->library('user_agent');
    // $this->load->model('admin/order_model');
    $this->load->library('session');
    if(!$this->session->userdata('admin_id')){
      redirect('login');
=======
    // $this->load->model('admin/order_model');
    $this->load->library('session');
    if(!$this->session->userdata('admin_id')){
      redirect('/');
>>>>>>> 9e0b8bc0a59448ee068b493e71d9055cf9b2fd60
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
<<<<<<< HEAD
  function languageChanging($lang){
    // $this->session->unset_userdata('lang');
    $this->session->set_userdata('lang',$lang);
    redirect($_SERVER['HTTP_REFERER']);
  }
  public function updateLocation()
  {
    $get=$this->setting_model->sql($this->setting_model->getSingleRegion($this->input->post('setting_id')));
   $update=$this->setting_model->updateLocation($get,$this->input->post());
   if($update){
     $this->session->set_userdata('success','You have successfully updated the location!');
    redirect('city-settings');
   }
   else{
     $this->session->set_userdata('error','It is not updated, try again!');
     redirect('city-settings');

   }
  }
  public function udpateCrimeType()
  {
    $get=$this->setting_model->sql($this->setting_model->getSingleCrimeType($this->input->post('setting_id')));
   $update=$this->setting_model->udpateCrimeType($get,$this->input->post());
   if($update){
     $this->session->set_userdata('success','You have successfully updated the crime category!');
    redirect('page-settings');
   }
   else{
     $this->session->set_userdata('error','It is not updated, try again!');
     redirect('page-settings');

   }
  }
=======
>>>>>>> 9e0b8bc0a59448ee068b493e71d9055cf9b2fd60
  public function changeStatusCrimeType()
  {
    $id=$_GET['id'];
    $status=$_GET['status'];
    $get=$this->setting_model->sql($this->setting_model->getSingleCrimeType($id));
<<<<<<< HEAD
    $update=$this->setting_model->changeStatusCrimeType($get,$status,$id);
=======
    $update=$this->setting_model->updateCrimeType($get,$status,$id);
>>>>>>> 9e0b8bc0a59448ee068b493e71d9055cf9b2fd60
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
<<<<<<< HEAD
    $update=$this->setting_model->changeStatusLocation($get,$status,$id);
=======
    $update=$this->setting_model->updateRegion($get,$status,$id);
>>>>>>> 9e0b8bc0a59448ee068b493e71d9055cf9b2fd60
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
