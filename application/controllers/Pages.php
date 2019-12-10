<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends MY_Controller {
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
			$this->load->library('session');
			if(!$this->session->userdata('admin_id')){
<<<<<<< HEAD
				redirect('login');
			}
		$this->lang->load('information','amharic');
=======
				redirect('/');
			}
>>>>>>> 9e0b8bc0a59448ee068b493e71d9055cf9b2fd60
	  }
function addUser()
	{
		$check_image=$this->imageValidation($_FILES['admin_image'],"upload/admin/");
		$username=$this->input->post('admin_email');
		$password=$this->input->post('admin_password');
		$password=hash_hmac('sha256', $password, '');
		$check=$this->validationToAddNewUser($username,$password);
		if(!$check){
		$insert=$this->criminal_model->registerUser($this->input->post(),$check_image);
		if($insert){
			$this->session->set_userdata('success','You have successfully added the user!');
			echo '200';//ok
		}
		else{
			echo '201';//not ok
		}
	}
	else{
		echo '503';//response for username or password exist.
	}
	}
	public function editUser()
	{
$check_image=$this->imageCheckEdit($this->input->post('crdoc_id'),$_FILES['admin_image'],'admin',"upload/admin/");
$update=$this->criminal_model->editUser($this->input->post(),$check_image);
if($update){
	$this->session->set_userdata('success','You have successfully updated the user!');
	echo '200';
}
else{
	echo '201';
}
	}
	public function changePassword()
	{
$password=hash_hmac('sha256', $this->input->post('old_password'), '');
// echo $this->session->userdata('admin_id');die();
if($password==$this->session->userdata('password')){
$update=$this->criminal_model->changePassword($this->input->post());
if($update){
	echo '200';//ok
}
else{
	echo '201';//not ok
}
}
else{
	echo '503';//old password does not exist.
}
	}
	public function admin()
	{
<<<<<<< HEAD
		// $this->session->set_userdata('lang','eng');
		$data['crime_count']=$this->criminal_model->sql($this->criminal_model->allCrimeReportCount());
		$data['arrested']=$this->ArrestedAndPostedCriminal();
		$data['criminal_count']=$this->criminal_model->sql($this->criminal_model->allCriminalCount());
		// $data['fugitive']=$this->criminal_model->sql($this->criminal_model->viewFugitiveAddedDashboard());
		$ofset=0;
		// $suspects_id=null;
		// $data['reporter']=$this->viewFugitiveReportDashboard($ofset,$suspects_id);
		// print_r($data['criminal_count']);die();
=======
		$data['crime_count']=$this->criminal_model->sql($this->criminal_model->allCrimeReportCount());
		$data['arrested']=$this->ArrestedAndPostedCriminal();
		$data['criminal_count']=$this->criminal_model->sql($this->criminal_model->allCriminalCount());
		$data['fugitive']=$this->criminal_model->sql($this->criminal_model->viewFugitiveAddedDashboard());
		$ofset=0;
		$data['reporter']=$this->viewFugitiveReportDashboard($ofset);
<<<<<<< HEAD
		// print_r($data['criminal_count']);die();
=======
		// print_r($data['reporter']);die();
>>>>>>> 985f3f7a903ca11b74eae8fd99c9d3d3fc9280b3
>>>>>>> 9e0b8bc0a59448ee068b493e71d9055cf9b2fd60
		$this->data=$data;
		$this->load->view('included/admin/header.php');
		$this->load->view('pages/admin/admin',$data);
		$this->load->view('included/admin/footer.php');
	}
	public function paginationRuleReporter()
	{
		$page=$this->criminal_model->sql($this->criminal_model->countFugitiveReport());
<<<<<<< HEAD
		$limit=10;
=======
		$limit=4;
>>>>>>> 9e0b8bc0a59448ee068b493e71d9055cf9b2fd60
		$page=ceil($page[0]->report_count/$limit);
	return	$page;
	}

<<<<<<< HEAD
	public function viewFugitiveReportDashboard($ofset,$suspects_id)
	{
		$data=$this->criminal_model->sql($this->criminal_model->viewFugitiveReportDashboard($ofset,$suspects_id));
=======
	public function viewFugitiveReportDashboard($ofset)
	{
		$data=$this->criminal_model->sql($this->criminal_model->viewFugitiveReportDashboard($ofset));
>>>>>>> 9e0b8bc0a59448ee068b493e71d9055cf9b2fd60
		$report=array();
		foreach ($data as $row) {
			$info_fugitive=$this->criminal_model->sql($this->criminal_model->changeStatusCriminal($row->fugitive_id));
			foreach ($info_fugitive as $fugitive) {
				array_push($report,array(
					'fugitive_id'=>$row->fugitive_id,
					'reporter_name'=>$row->reporter_name,
					'reporter_email'=>$row->reporter_email,
					'reporter_phone'=>$row->reporter_phone,
					'detail_crime_reporter'=>$row->detail_crime_reporter,
					'reported_date'=>$row->reported_date,
					'status'=>$row->status,
					'criminal_image'=>$fugitive->criminal_image,
					'criminal_state_ofcase'=>$fugitive->criminal_state_ofcase,
					'criminal_name'=>$fugitive->criminal_name));
			}
		}
   return  json_decode(json_encode($report));
	}
	public function error()
	{
		$this->load->view('included/header');
		$this->load->view('errors/error');
		$this->load->view('included/footer');
	}
public function edit_wanted_list($crdoc_id=NULL)
{
	if($crdoc_id){
  $this->load->view('included/admin/header.php');
<<<<<<< HEAD
	$data['crime_type']=$this->setting_model->sql($this->setting_model->getCrimeType());

=======
>>>>>>> 9e0b8bc0a59448ee068b493e71d9055cf9b2fd60
	$data['criminal']=$this->criminal_model->sql($this->criminal_model->changeStatusCriminal($crdoc_id));
	$this->data=$data;
	$this->load->view('pages/admin/edit_wanted_list',$data);
	$this->load->view('included/admin/footer.php');
}
else{
	redirect('pages/error');
}
}
public function getFugitive()
{
	$fugitive=$this->criminal_model->sql($this->criminal_model->viewCriminalPosted());
	echo json_encode($fugitive);
}

	public function all_wanted_list()
	{
    $this->load->view('included/admin/header.php');
		$data['pagination']=$this->paginationRuleWantedList();
		if(isset($_GET['page']) and isset($_GET['which'])){
		$page=$_GET['page'];
		$which=$_GET['which'];
<<<<<<< HEAD
		if(isset($_GET['suspects_id'])){
			$suspects_id=$_GET['suspects_id'];
	    }
			else{
			$suspects_id=null;
			}
		$ofset=($page==0?0:($page-1) * 12);
		if($which=='posted'){
			$data['criminal_posted']=$this->criminal_model->sql($this->criminal_model->viewCriminalPosted($ofset,'all','all',$suspects_id));
			$data['criminal_arrested']=$this->criminal_model->sql($this->criminal_model->viewCriminalArrested(0,null));
		}
		else if($which=='arrested'){
			$data['criminal_posted']=$this->criminal_model->sql($this->criminal_model->viewCriminalPosted(0,'all','all',null));
			$data['criminal_arrested']=$this->criminal_model->sql($this->criminal_model->viewCriminalArrested($ofset,$suspects_id));
		}
		else{
			$data['criminal_posted']=$this->criminal_model->sql($this->criminal_model->viewCriminalPosted(0,'all','all',null));
			$data['criminal_arrested']=$this->criminal_model->sql($this->criminal_model->viewCriminalArrested(0,null));
		}
}
else{
	$data['criminal_posted']=$this->criminal_model->sql($this->criminal_model->viewCriminalPosted(0,'all','all',null));
	$data['criminal_arrested']=$this->criminal_model->sql($this->criminal_model->viewCriminalArrested(0,null));
=======
		$ofset=($page==0?0:($page-1) * 10);
		if($which=='posted'){
			$data['criminal_posted']=$this->criminal_model->sql($this->criminal_model->viewCriminalPosted($ofset));
			$data['criminal_arrested']=$this->criminal_model->sql($this->criminal_model->viewCriminalArrested(0));
		}
		else if($which=='arrested'){
			$data['criminal_posted']=$this->criminal_model->sql($this->criminal_model->viewCriminalPosted(0));
			$data['criminal_arrested']=$this->criminal_model->sql($this->criminal_model->viewCriminalArrested($ofset));
		}
		else{
			$data['criminal_posted']=$this->criminal_model->sql($this->criminal_model->viewCriminalPosted(0));
			$data['criminal_arrested']=$this->criminal_model->sql($this->criminal_model->viewCriminalArrested(0));
		}
}
else{
	$data['criminal_posted']=$this->criminal_model->sql($this->criminal_model->viewCriminalPosted(0));
	$data['criminal_arrested']=$this->criminal_model->sql($this->criminal_model->viewCriminalArrested(0));
>>>>>>> 9e0b8bc0a59448ee068b493e71d9055cf9b2fd60
}
    $this->data=$data;
		$this->load->view('pages/admin/all_wanted_list',$data);
		$this->load->view('included/admin/footer.php');
	}

	public function add_new_wanted()
	{
		$this->load->view('included/admin/header.php');
<<<<<<< HEAD
		$data['crime_type']=$this->setting_model->sql($this->setting_model->getCrimeType());
$this->data=$data;
		$this->load->view('pages/admin/add_new_wanted',$data);
		$this->load->view('included/admin/footer.php');
=======
		$this->load->view('pages/admin/add_new_wanted');
		$this->load->view('included/admin/footer.php');
<<<<<<< HEAD
>>>>>>> 9e0b8bc0a59448ee068b493e71d9055cf9b2fd60
	}
public function all_reported()
	{
		$this->load->view('included/admin/header.php');
		$page=$_GET['page'];
<<<<<<< HEAD
		if(isset($_GET['suspects_id'])){
			$suspects_id=$_GET['suspects_id'];
		}
		else{
			$suspects_id=null;
		}
		$ofset=($page==0?0:($page-1) * 10);
		$data['reporter']=$this->viewFugitiveReportDashboard($ofset,$suspects_id);
=======
		$ofset=($page==0?0:($page-1) * 4);
		$data['reporter']=$this->viewFugitiveReportDashboard($ofset);
>>>>>>> 9e0b8bc0a59448ee068b493e71d9055cf9b2fd60
		$data['pagination_page']=$this->paginationRuleReporter();
    $this->data=$data;
		$this->load->view('pages/admin/all_report',$data);
		$this->load->view('included/admin/footer.php');
	}
 public function account_user()
	{
		$this->load->view('included/admin/header.php');
		$data['suspend_user']=$this->criminal_model->sql($this->criminal_model->viewSuspendUser());
		$data['active_user']=$this->criminal_model->sql($this->criminal_model->viewActiveUser());
		$this->data=$data;
		$this->load->view('pages/admin/setting',$data);
		$this->load->view('included/admin/footer.php');
	}

	public function page_settings()
	{
		$this->load->view('included/admin/header.php');
		$data['crime_type_active']=$this->setting_model->sql($this->setting_model->getCrimeType());
		$data['crime_type_suspend']=$this->setting_model->sql($this->setting_model->getCrimeTypeSuspend());
		$this->data=$data;
		$this->load->view('pages/admin/page_setting',$data);
		$this->load->view('included/admin/footer.php');
	}

	public function city_settings()
	{
		$this->load->view('included/admin/header.php');
		$data['location_active']=$this->setting_model->sql($this->setting_model->getRegion());
		$data['location_suspend']=$this->setting_model->sql($this->setting_model->getRegionSuspend());
		$this->data=$data;
		$this->load->view('pages/admin/city_list',$data);
		$this->load->view('included/admin/footer.php');
	}

<<<<<<< HEAD
function getSomeCrimeReport(){
	$ofset=$_GET['ofset'];
	$ofset=($ofset-1) * 4;
	$data=$this->criminal_model->sql($this->criminal_model->viewNewCrimeReportAlert($ofset));
=======
=======
	}
public function all_reported()
	{
		$this->load->view('included/admin/header.php');
		$page=$_GET['page'];
		$ofset=($page==0?0:($page-1) * 4);
		$data['reporter']=$this->viewFugitiveReportDashboard($ofset);
		$data['pagination_page']=$this->paginationRuleReporter();
    $this->data=$data;
		$this->load->view('pages/admin/all_report',$data);
		$this->load->view('included/admin/footer.php');
	}
 public function account_user()
	{
		$this->load->view('included/admin/header.php');
		$data['suspend_user']=$this->criminal_model->sql($this->criminal_model->viewSuspendUser());
		$data['active_user']=$this->criminal_model->sql($this->criminal_model->viewActiveUser());
		$this->data=$data;
		$this->load->view('pages/admin/setting',$data);
		$this->load->view('included/admin/footer.php');
	}
>>>>>>> 985f3f7a903ca11b74eae8fd99c9d3d3fc9280b3
function getSomeCrimeReport(){
	$ofset=$_GET['ofset'];
	$ofset=($ofset-1) * 4;
	$data=$this->criminal_model->sql($this->criminal_model->viewNewCrimeReport($ofset));
>>>>>>> 9e0b8bc0a59448ee068b493e71d9055cf9b2fd60
	echo json_encode($data);
}
function getSomeComment(){
	$ofset=$_GET['ofset'];
	$ofset=($ofset-1) * 4;
	$data=$this->criminal_model->sql($this->criminal_model->viewComment($ofset));
	echo json_encode($data);
}
	public function crime_report()
	{
		if(isset($_GET['ofset']) and $_GET['ofset'] ){
<<<<<<< HEAD
			$start_date=$this->input->post('start_date');
			$end_date=$this->input->post('end_date');
			$crime_type=$this->input->post('crime_type');
			if($start_date and $end_date){
				$start_date = date('m d Y H:i', strtotime($start_date . '00:00'));
				 $end_date = date('m d Y H:i', strtotime($end_date . '23:59'));
			}
			else{
				$start_date = date('m d Y 00:00');
        $end_date = date('m d Y 23:59');
			}
		$ofset=$_GET['ofset'];
		$ofset=($ofset-1) * 10;
		$this->load->view('included/admin/header.php');
		$data['crime']=$this->criminal_model->sql($this->criminal_model->viewNewCrimeReport($start_date,$end_date,$crime_type));

=======
		$ofset=$_GET['ofset'];
		$ofset=($ofset-1) * 10;
		$this->load->view('included/admin/header.php');
		$data['crime']=$this->criminal_model->sql($this->criminal_model->viewNewCrimeReport($ofset));
>>>>>>> 9e0b8bc0a59448ee068b493e71d9055cf9b2fd60
		$pagination=$this->criminal_model->sql($this->criminal_model->allCrimeReportCountPagination());
		$limit=10;
		$page=ceil($pagination[0]->crime_count/$limit);
		$data['pagination']=$page;
<<<<<<< HEAD
		$data['crime_type']=$this->setting_model->sql($this->setting_model->getCrimeType());
		$data['selected_value']=$crime_type;
=======
>>>>>>> 9e0b8bc0a59448ee068b493e71d9055cf9b2fd60
		$this->data=$data;
		$this->load->view('pages/admin/crime_report',$data);
		$this->load->view('included/admin/footer.php');
	}
	else{
		redirect('pages/error');
	}
	}
<<<<<<< HEAD
	public function takeSuspectsName()
	{
	$name=$_GET['term'];
	$get_name=$this->criminal_model->sql($this->criminal_model->takeSuspectsName($name));
	$i=0;
	foreach ($get_name as $name) {
		$data[$i]['label']=$name->criminal_name;
		$data[$i]['id']=$name->crdoc_id;
	$i++;
	}
  echo json_encode($data);
	}
=======
>>>>>>> 9e0b8bc0a59448ee068b493e71d9055cf9b2fd60
public function comment()
	{
		if(isset($_GET['ofset']) and $_GET['ofset'] ){
		$ofset=$_GET['ofset'];
		$ofset=($ofset-1) * 10;
		$this->load->view('included/admin/header.php');
		$pagination=$this->criminal_model->sql($this->criminal_model->allCommentCountPagination());
		$data['comment']=$this->criminal_model->sql($this->criminal_model->viewComment($ofset));
		$limit=10;
		$page=ceil($pagination[0]->comment_count/$limit);
		$data['pagination']=$page;
		$this->data=$data;
		$this->load->view('pages/admin/comment',$data);
		$this->load->view('included/admin/footer.php');
<<<<<<< HEAD
	}
	else{
		redirect('pages/error');

	}
}


	public function graph_data(){
		$data=$this->criminal_model->get_no_crimes();
		print_r($data);
		return true;
=======
<<<<<<< HEAD
>>>>>>> 9e0b8bc0a59448ee068b493e71d9055cf9b2fd60
	}
	else{
		redirect('pages/error');

	}
}


	public function graph_data(){
		$data=$this->criminal_model->get_no_crimes();
		print_r($data);
		return true;
=======
>>>>>>> 985f3f7a903ca11b74eae8fd99c9d3d3fc9280b3
	}
	else{
		redirect('pages/error');

	}
}
}
