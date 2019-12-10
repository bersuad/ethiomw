<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class API extends MY_Controller {
	function __construct()
	  {
	    parent::__construct();
	    $this->load->database();
	    $this->load->model('criminal_model');
	    $this->load->helper(array('form', 'url'));
	    $this->load->library('form_validation');
			$this->load->library('session');

	  }
		public function redundencyRequest()
		{
			$data['new_crime_text']=$this->alertNewCrime();
			$data['new_crime_count']=$this->newCrimeCount();
			echo json_encode($data);
		}
		function countCommentNewCrime()
		{
	$crime=$this->criminal_model->sql("
	select count(crdoc_id) as crime_count from criminal_document
<<<<<<< HEAD
	where  case when(crdoc_data->>'type' is not null) then crdoc_data->>'type' else null end='crime' and
	case when(crdoc_data->>'status' is not null) then crdoc_data->>'status' else null end ='0';");
	$comment=$this->criminal_model->sql("
	select count(crdoc_id) as comment_count from criminal_document
	where  case when(crdoc_data->>'type' is not null) then crdoc_data->>'type' else null end ='comment' and
	case when(crdoc_data->>'status' is not null) then crdoc_data->>'status' else null end ='0';");
=======
	where  crdoc_data->>'type'='crime' and crdoc_data->>'status'='0' ;");
	$comment=$this->criminal_model->sql("
	select count(crdoc_id) as comment_count from criminal_document
	where  crdoc_data->>'type'='comment' and crdoc_data->>'status'='0';");
>>>>>>> 9e0b8bc0a59448ee068b493e71d9055cf9b2fd60
	$data['crime']=$crime[0]->crime_count;
	$data['comment']=$comment[0]->comment_count;
	echo json_encode($data);
		}
		public function newCrimeCount()
		{
<<<<<<< HEAD
			$criminal_report=$this->criminal_model->sql($this->criminal_model->countNewCrime());
			$criminal_report=$criminal_report[0]->crime_count;
=======
			$criminal_report=$this->criminal_model->sql($this->criminal_model->countFugitiveReport());
			$criminal_report=$criminal_report[0]->report_count;
>>>>>>> 9e0b8bc0a59448ee068b493e71d9055cf9b2fd60
			return $criminal_report;
		}
		public function alertNewCrime()
		{
<<<<<<< HEAD
		$crime=$this->criminal_model->sql($this->criminal_model->viewNewCrimeReportAlert(0));
		$data='';
		$i=1;
foreach($crime as $row){
	if($i<=10){
=======
		$crime=$this->criminal_model->sql($this->criminal_model->viewNewCrimeReport(0));
		$data='';
		$i=1;
foreach($crime as $row){

	if($i<=4){
>>>>>>> 9e0b8bc0a59448ee068b493e71d9055cf9b2fd60
	$data.='<div class="container content" style="max-width: 230px; color: #444;">';
	$data.='<div class="blog">';
	$data.='<div class="blog-pargraph">';
	$data.='<h6><i class="fa fa-user fa-sm"></i> <label style="color: #000;">Reporter Name: '.ucwords($row->contact_name_crime).'</label></h6>';
	$data.='<h6><i class="fa fa-phone fa-sm"></i> <label style="color: #000;">Reporter Phone: '.$row->contact_phone_crime.'</label></h6>';
	$data.='<h6><i class="fa fa-user fa-sm"></i> <label style="color: #000;">Accuser Name: '.ucwords($row->accuser_name).'</label></h6>';
	$data.='<h6><i class="icon icon_cone_alt"></i> <label style="color: #000;">Crime Type: '.ucwords($row->crime_type).'</label></h6>';
	$data.='<h6><label style="color: #000;">Message: '.substr($row->report_crime,0,100).'...</label></h6>';
	// if(date('Y')==date('Y',strtotime($row->report_date))){
	$date = explode(' ',$row->report_date);
	$newformat = date('h:i A',strtotime($date[3]));
// $datecast=$date[0].'/'.$date[1].'/'.$date[2];
	$data.='<h6 style="float:right"><i style="color: #000;">'.($date[2]==date('Y')?$newformat:$row->report_date).'</i>';

	if($row->status=='0'){
  $data.=' <i data-id='.$row->crdoc_id.' class="icon icon_lock_alt to_seen seen'.$row->crdoc_id.'" style="color:green;cursor:auto" title="Unseen"></i>';
	}
	else{
  $data.=' <i class="fa fa-eye" style="color:green" title="Seen"></i>';
	}
	$data.='</h6>';
	$data.='</div>';
	$data.='</div></div><hr>';
}
$i++;
}
$data.='<div style="max-width:400px" class=" center-block">';
$data.='<a class="btn btn-info btn-lg btn-block" href='.base_url('all-crime-report?ofset=1').'>View Detail</a>';
$data.='</div>';
return $data;
		}


}
