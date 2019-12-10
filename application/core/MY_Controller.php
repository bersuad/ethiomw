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
<<<<<<< HEAD
	  select case when(crdoc_data->>'admin_email' is not null) then crdoc_data->>'admin_email' else null end as admin_email,
	  case when(crdoc_data->>'admin_password' is not null) then crdoc_data->>'admin_password' else null end as admin_password,
	  case when(crdoc_data->>'admin_phone' is not null) then crdoc_data->>'admin_phone' else null end as admin_phone,
	  crdoc_id as admin_id,
	  case when(crdoc_data->>'admin_image' is not null) then crdoc_data->>'admin_image' else null end as admin_image,
	  case when(crdoc_data->>'admin_status' is not null) then crdoc_data->>'admin_status' else null end as admin_status,
	  case when(crdoc_data->>'created_date' is not null) then crdoc_data->>'created_date' else null end as created_date,
	  case when(crdoc_data->>'admin_name' is not null) then crdoc_data->>'admin_name' else null end as admin_name
		from criminal_document
	  where case when(crdoc_data->>'type' is not null) then crdoc_data->>'type' else null end='admin' and
		case when(crdoc_data->>'admin_email' is not null) then crdoc_data->>'admin_email' else null end ='$username' and
	  case when(crdoc_data->>'admin_password' is not null) then crdoc_data->>'admin_password' else null end='$password'");
=======
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
>>>>>>> 9e0b8bc0a59448ee068b493e71d9055cf9b2fd60
		return $check;
	}
	public function validationToAddNewUser($username,$password)
	{
		$check=$this->criminal_model->sql("
<<<<<<< HEAD
		select case when(crdoc_data->>'admin_email' is not null) then crdoc_data->>'admin_email' else null end as admin_email,
	  case when(crdoc_data->>'admin_password' is not null) then crdoc_data->>'admin_password' else null end as admin_password,
	  case when(crdoc_data->>'admin_phone' is not null) then crdoc_data->>'admin_phone' else null end as admin_phone,
	  crdoc_id as admin_id,
	  case when(crdoc_data->>'admin_image' is not null) then crdoc_data->>'admin_image' else null end as admin_image,
	  case when(crdoc_data->>'admin_status' is not null) then crdoc_data->>'admin_status' else null end as admin_status,
	  case when(crdoc_data->>'created_date' is not null) then crdoc_data->>'created_date' else null end as created_date,
	  case when(crdoc_data->>'admin_name' is not null) then crdoc_data->>'admin_name' else null end as admin_name
		from criminal_document
	  where case when(crdoc_data->>'type' is not null) then crdoc_data->>'type' else null end='admin' and
		case when(crdoc_data->>'admin_email' is not null) then crdoc_data->>'admin_email' else null end ='$username' or
	  case when(crdoc_data->>'admin_password' is not null) then crdoc_data->>'admin_password' else null end='$password'");
=======
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
>>>>>>> 9e0b8bc0a59448ee068b493e71d9055cf9b2fd60
		return $check;
	}
	function imageCheckEdit($id,$criminal_image,$type,$folder)
  {
    if($type=='criminal'){

<<<<<<< HEAD
      $get=$this->criminal_model->sql("select
			case when(crdoc_data->>'criminal_image' is not null) then crdoc_data->>'criminal_image' else null end as image from criminal_document where crdoc_id=$id");
    }
    else{
      $get=$this->criminal_model->sql("select
			case when(crdoc_data->>'admin_image' is not null) then crdoc_data->>'admin_image' else null end as image from criminal_document where crdoc_id=$id");
=======
      $get=$this->criminal_model->sql("select crdoc_data->>'criminal_image' as image from criminal_document where crdoc_id=$id");
    }
    else{
      $get=$this->criminal_model->sql("select crdoc_data->>'admin_image' as image from criminal_document where crdoc_id=$id");
>>>>>>> 9e0b8bc0a59448ee068b493e71d9055cf9b2fd60

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
<<<<<<< HEAD
    {
        $page=$this->criminal_model->sql($this->criminal_model->countWantedList());
        $limit=12;
        $arrested_count=ceil($page[0]->arrested_count/$limit);
        $posted_count=ceil($page[0]->posted_count/$limit);
        $data['posted_count']=$posted_count;
        $data['arrested_count']=$arrested_count;
    return $data;
    }
    public function paginationRuleWantedListMostWanted()
	{
		$page=$this->criminal_model->sql($this->criminal_model->countWantedListMostWanted());
		$limit=12;
		$mw_count=ceil($page[0]->mw_count/$limit);
		$data['mw_count']=$mw_count;
		
=======
	{
		$page=$this->criminal_model->sql($this->criminal_model->countWantedList());
		$limit=10;
		$arrested_count=ceil($page[0]->arrested_count/$limit);
		$posted_count=ceil($page[0]->posted_count/$limit);
		$data['posted_count']=$posted_count;
		$data['arrested_count']=$arrested_count;
>>>>>>> 9e0b8bc0a59448ee068b493e71d9055cf9b2fd60
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
