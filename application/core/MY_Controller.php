<?php

//require_once(APPPATH.'controllers/Auth.php');

class MY_Controller extends CI_Controller {
	function __construct() {
		parent::__construct();
		// error_reporting(0);
		// $this->load->library('form_validation','session');
		$this->load->database();
		$this->load->model('criminal_model');
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
	}
	public function validationToLogin($username,$password)
	{
		$check=$this->criminal_model->sql("
	  select crdoc_data->>'admin_email' as admin_email,
	  crdoc_data->>'admin_password' as admin_password,
	  crdoc_data->>'admin_phone' as admin_phone,
	  crdoc_id as admin_id,
	  crdoc_data->>'admin_image' as admin_image,
	  crdoc_data->>'admin_status' as admin_status,
	  crdoc_data->>'created_date' as created_date,
	  crdoc_data->>'admin_name' as admin_name from criminal_document
	  where crdoc_data->>'type'='admin' and crdoc_data->>'admin_email' ='$username' and
	  crdoc_data->>'admin_password'='$password'");
		return $check;
	}
	public function validationToAddNewUser($username,$password)
	{
		$check=$this->criminal_model->sql("
	  select crdoc_data->>'admin_email' as admin_email,
	  crdoc_data->>'admin_password' as admin_password,
	  crdoc_data->>'admin_phone' as admin_phone,
	  crdoc_id as admin_id,
	  crdoc_data->>'admin_image' as admin_image,
	  crdoc_data->>'admin_status' as admin_status,
	  crdoc_data->>'created_date' as created_date,
	  crdoc_data->>'admin_name' as admin_name from criminal_document
	  where crdoc_data->>'type'='admin' and crdoc_data->>'admin_email' ='$username' or
	  crdoc_data->>'admin_password'='$password'");
		return $check;
	}
	function imageCheckEdit($id,$criminal_image,$type,$folder)
  {
    if($type=='criminal'){

      $get=$this->criminal_model->sql("select crdoc_data->>'criminal_image' as image from criminal_document where crdoc_id=$id");
    }
    else{
      $get=$this->criminal_model->sql("select crdoc_data->>'admin_image' as image from criminal_document where crdoc_id=$id");

    }
    $image=basename($criminal_image['name']);
    $image=str_replace(' ','|',$image);
    $path = explode(".",$image);
    $path = $path[count($path)-1];
    $path_ext=strtolower($path);
    if($path_ext=='png'||$path_ext=='jpg'||$path_ext=='jpeg'||$path_ext=='gif')
    {
      $image=$folder.uniqid(rand()).".".$path;
      if(move_uploaded_file($criminal_image['tmp_name'],$image))
      {
      return $image;
      }
      else
      {
        return;
      }
    }
    else
    {
      return $get[0]->image;
     }
     }
	public function paginationRuleWantedList()
	{
		$page=$this->criminal_model->sql($this->criminal_model->countWantedList());
		$limit=10;
		$arrested_count=ceil($page[0]->arrested_count/$limit);
		$posted_count=ceil($page[0]->posted_count/$limit);
		$data['posted_count']=$posted_count;
		$data['arrested_count']=$arrested_count;
	return $data;
	}
	public function ArrestedAndPostedCriminal()
	{
		$page=$this->criminal_model->sql($this->criminal_model->countWantedList());

		$data['posted_count']=$page[0]->posted_count;
		$data['arrested_count']=$page[0]->arrested_count;
	return $data;
	}
	function imageValidation($criminal_image,$folder)
  {
    $image=basename($criminal_image['name']);
    $image=str_replace(' ','|',$image);
    $path = explode(".",$image);
    $path = $path[count($path)-1];
    $path_ext=strtolower($path);
    if($path_ext=='png'||$path_ext=='jpg'||$path_ext=='jpeg'||$path_ext=='gif')
    {
      $image=$folder.uniqid(rand()).".".$path;
      if(move_uploaded_file($criminal_image['tmp_name'],$image))
      {
      return $image;
      }
      else
      {
        return;
      }
    }
    else
    {
      return;
     }
     }


}
