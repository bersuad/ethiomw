<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FrontController extends MY_Controller {
	function __construct()
	  {
	    parent::__construct();
	    $this->load->database();
	    $this->load->model('criminal_model');
<<<<<<< HEAD
			$this->load->model('setting_model');
=======
<<<<<<< HEAD
			$this->load->model('setting_model');
=======
>>>>>>> 985f3f7a903ca11b74eae8fd99c9d3d3fc9280b3
>>>>>>> 9e0b8bc0a59448ee068b493e71d9055cf9b2fd60
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
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 9e0b8bc0a59448ee068b493e71d9055cf9b2fd60
   public function filterData()
   {
    $setting_id=$_GET['setting_id'];
    $type=$_GET['type'];

   }
<<<<<<< HEAD
=======
=======
>>>>>>> 985f3f7a903ca11b74eae8fd99c9d3d3fc9280b3
>>>>>>> 9e0b8bc0a59448ee068b493e71d9055cf9b2fd60
		public function index()
		  {
		// $this->session->sess_destroy();
		    $this->load->view('included/header');
		    $data['pagination']=$this->paginationRuleWantedList();
		    $set = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 9e0b8bc0a59448ee068b493e71d9055cf9b2fd60
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
<<<<<<< HEAD
		    $data['pagination']=$this->paginationRuleWantedListMostWanted();
=======
		    $data['pagination']=$this->paginationRuleWantedList();
>>>>>>> 9e0b8bc0a59448ee068b493e71d9055cf9b2fd60
		    $set = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
			$data['list'] = substr(str_shuffle($set), 0, 4);
			$data['crime_type']=$this->setting_model->sql($this->setting_model->getCrimeType());
			$data['location']=$this->setting_model->sql($this->setting_model->getRegion());

			$data['year']=$this->criminal_model->sql($this->criminal_model->filterYearOfCriminalRegistered());
		    $this->data=$data;
		    $this->load->view('pages/top_most_wanted',$data);
<<<<<<< HEAD
=======
=======
			$data['list'] = substr(str_shuffle($set), 0, 4);
		    $this->data=$data;
		    $this->load->view('pages/index',$data);
>>>>>>> 985f3f7a903ca11b74eae8fd99c9d3d3fc9280b3
>>>>>>> 9e0b8bc0a59448ee068b493e71d9055cf9b2fd60
		    $this->load->view('included/footer');
		  }
		function crimeReport()
		{
<<<<<<< HEAD
			$accuser_photo=$this->imageValidation($_FILES['accuser_photo'],"upload/accuser/");
      $date=date('m d Y H:i');
=======
<<<<<<< HEAD
			$accuser_photo=$this->imageValidation($_FILES['accuser_photo'],"upload/accuser/");
      $date=date('m d Y H:i');
=======
			 $secret = '6Lc7e34UAAAAAE_DZE1z2M5XRLb1Pp29YlrPblsO';
			 $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secret . '&response=' . $_POST['g-recaptcha-response']);
			 $responseData = json_decode($verifyResponse);
						 
			$date=date('m d Y H:i');
>>>>>>> 985f3f7a903ca11b74eae8fd99c9d3d3fc9280b3
>>>>>>> 9e0b8bc0a59448ee068b493e71d9055cf9b2fd60
			$data=array(
				'contact_name_crime'=>$this->input->post('contact_name_crime'),
				'contact_phone_crime'=>$this->input->post('contact_phone_crime'),
				'contact_email_crime'=>'',
				'accuser_name'=>$this->input->post('accuser_name'),
<<<<<<< HEAD
				'accuser_photo'=>$accuser_photo,
=======
<<<<<<< HEAD
				'accuser_photo'=>$accuser_photo,
=======
>>>>>>> 985f3f7a903ca11b74eae8fd99c9d3d3fc9280b3
>>>>>>> 9e0b8bc0a59448ee068b493e71d9055cf9b2fd60
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
<<<<<<< HEAD


=======
<<<<<<< HEAD


=======
			// }
			// else{
			//   echo '201';
			// }
>>>>>>> 985f3f7a903ca11b74eae8fd99c9d3d3fc9280b3
>>>>>>> 9e0b8bc0a59448ee068b493e71d9055cf9b2fd60
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
<<<<<<< HEAD
		$set = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$data['list'] = substr(str_shuffle($set), 0, 4);
=======
<<<<<<< HEAD
		$set = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
			  $data['list'] = substr(str_shuffle($set), 0, 4);
=======
>>>>>>> 985f3f7a903ca11b74eae8fd99c9d3d3fc9280b3
>>>>>>> 9e0b8bc0a59448ee068b493e71d9055cf9b2fd60
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
<<<<<<< HEAD
	$by_value=$_GET['by_value'];
	$type=$_GET['type'];
	$ofset=($page==0?0:($page-1) * 12);
	$fugitive=$this->criminal_model->sql($this->criminal_model->viewCriminalPosted($ofset,$by_value,$type,null));
=======
<<<<<<< HEAD
	$by_value=$_GET['by_value'];
	$type=$_GET['type'];
	$ofset=($page==0?0:($page-1) * 10);
	$fugitive=$this->criminal_model->sql($this->criminal_model->viewCriminalPosted($ofset,$by_value,$type));
=======
	$ofset=($page==0?0:($page-1) * 10);
	$fugitive=$this->criminal_model->sql($this->criminal_model->viewCriminalPosted($ofset));
>>>>>>> 985f3f7a903ca11b74eae8fd99c9d3d3fc9280b3
>>>>>>> 9e0b8bc0a59448ee068b493e71d9055cf9b2fd60
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
