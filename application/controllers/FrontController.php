<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FrontController extends MY_Controller {
	function __construct()
	  {
	    parent::__construct();
	    $this->load->database();
	    $this->load->model('criminal_model');
			$this->load->model('setting_model');
	    $this->load->helper(array('form', 'url'));
	    $this->load->library('form_validation');
	    // $this->load->model('admin/order_model');

	  }

	  	public function generate_pin()
	  	{
	  		$set = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	  		$pin = substr(str_shuffle($set), 0,4);
	  		echo $pin;
	  		return true;
	  	}
   public function filterData()
   {
    $setting_id=$_GET['setting_id'];
    $type=$_GET['type'];

   }
		public function index()
		  {
		// $this->session->sess_destroy();
		    $this->load->view('included/header');
		    $data['pagination']=$this->paginationRuleWantedList();
		    $set = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
			  $data['list'] = substr(str_shuffle($set), 0, 4);
				$data['crime_type']=$this->setting_model->sql($this->setting_model->getCrimeType());
				$data['location']=$this->setting_model->sql($this->setting_model->getRegion());
				$data['year']=$this->criminal_model->sql($this->criminal_model->filterYearOfCriminalRegistered());

		    $this->data=$data;
		    $this->load->view('pages/index',$data);
		    $this->load->view('included/footer');
		  }
		public function topMostWanted()
		  {
		// $this->session->sess_destroy();
		    $this->load->view('included/header');
		    $data['pagination']=$this->paginationRuleWantedList();
		    $set = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
			$data['list'] = substr(str_shuffle($set), 0, 4);
			$data['crime_type']=$this->setting_model->sql($this->setting_model->getCrimeType());
			$data['location']=$this->setting_model->sql($this->setting_model->getRegion());

			$data['year']=$this->criminal_model->sql($this->criminal_model->filterYearOfCriminalRegistered());
		    $this->data=$data;
		    $this->load->view('pages/top_most_wanted',$data);
		    $this->load->view('included/footer');
		  }
		function crimeReport()
		{
			$accuser_photo=$this->imageValidation($_FILES['accuser_photo'],"upload/accuser/");
      $date=date('m d Y H:i');
			$data=array(
				'contact_name_crime'=>$this->input->post('contact_name_crime'),
				'contact_phone_crime'=>$this->input->post('contact_phone_crime'),
				'contact_email_crime'=>'',
				'accuser_name'=>$this->input->post('accuser_name'),
				'accuser_photo'=>$accuser_photo,
				'crime_type'=>$this->input->post('crime_type'),
				'city'=>$this->input->post('city'),
				'subcity'=>$this->input->post('subcity'),
				'report_crime'=>$this->input->post('report_crime'),
				'status'=>'0',
				'report_date'=>$date,
				'type'=>"crime");
				$data=json_encode($data);
				$insert=$this->criminal_model->insert(array('crdoc_data'=>$data));
				if($insert){
					echo '200';
				}
				else{
					echo '201';
				}


		}
		function saveComment()
		{
			$date=date('m d Y H:i');
			$data=array(
				'comment_email'=>$this->input->post('comment_email'),
				'comment_message'=>$this->input->post('comment_message'),
				'status'=>'0',
				'comment_date'=>$date,
				'type'=>"comment");
				$data=json_encode($data);
				$insert=$this->criminal_model->insert(array('crdoc_data'=>$data));
				if($insert){
					echo '200';
				}
				else{
					echo '201';
				}
		}
	public function get_single_view()
	{
		$crdoc_id=$_GET['id'];
		if($crdoc_id){
		$this->load->view('included/header');
		$data['criminal_posted']=$this->criminal_model->sql($this->criminal_model->viewCriminalPostedFrontSide());
		$data['single_fugitive']=$this->criminal_model->sql($this->criminal_model->viewSingleCriminalPosted($crdoc_id));
		$set = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
			  $data['list'] = substr(str_shuffle($set), 0, 4);
     $this->data=$data;
		 if($data['single_fugitive']){
		$this->load->view('pages/single_view',$data);
		$this->load->view('included/footer');
	}
	else{
		redirect('pages/error');
	}
	}
	else{
		redirect('login');
	}
	}
	public function error()
	{
		$this->load->view('included/header');
		$this->load->view('errors/error');
		$this->load->view('included/footer');
	}

public function getFugitive()
{
	$page=$_GET['page'];
	$by_value=$_GET['by_value'];
	$type=$_GET['type'];
	$ofset=($page==0?0:($page-1) * 10);
	$fugitive=$this->criminal_model->sql($this->criminal_model->viewCriminalPosted($ofset,$by_value,$type));
	echo json_encode($fugitive);
}
public function fugitiveReporter($value='')
{
$insert=$this->criminal_model->fugitiveReporter($this->input->post());
if($insert)
{
	echo '200';
}
else{
	echo '201';
}
}

}
