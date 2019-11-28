<?php
error_reporting(0);
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Criminal extends MY_Controller
{
function __construct()
  {
    parent::__construct();
    $this->load->database();
    $this->load->model('criminal_model');
    $this->load->helper(array('form', 'url'));
    $this->load->library('form_validation');
    // $this->load->model('admin/order_model');
    $this->load->library('session');
    if(!$this->session->userdata('admin_id')){
      redirect('/');
    }
  }
  function updateCriminal()
  {
    $this->form_validation->set_rules($this->validationRules());
    $check_image=$this->imageCheckEdit($this->input->post('id'),$_FILES['criminal_image'],'criminal',"upload/fugitive/");
    if($this->form_validation->run() == true && $check_image)
    {
    $update=$this->criminal_model->updateCriminal($this->input->post(),$check_image);
    if($update)
    {
$this->session->set_userdata('success','Fugitive information has been edited successfully!');
redirect('pages/edit_wanted_list/'.$this->input->post('id'));
    }
    else
    {
      $this->session->set_userdata('error','Fugitive information is not edited!');
      redirect('pages/edit_wanted_list/'.$this->input->post('id'));
    }
    }
    else
    {
      $this->session->set_userdata('error','Fugitive information is not editedd!');
      redirect('pages/edit_wanted_list/'.$this->input->post('id'));
    }
  }

  public function changeStatusCriminal()
  {
    $crdoc_id=$_GET['crdoc_id'];
    $status=$_GET['status'];
  	$get=$this->criminal_model->sql($this->criminal_model->changeStatusCriminal($crdoc_id));
  if($get){
    $update=$this->criminal_model->updateCriminalStatus($get,$crdoc_id,$status);
    if($update){
      echo '200';
    }
    else{
      echo '201';
    }
  }

  }
  public function changeStatusCrime()
  {
    $crdoc_id=$_GET['crdoc_id'];
    $get=$this->criminal_model->sql($this->criminal_model->fetchNewcrime($crdoc_id));
    if($get){
    $changed=$this->criminal_model->changeStatusCrime($get,$crdoc_id);
    if($changed){
      echo '200';
    }
    else{
      echo '201';
    }
}
else{
  echo '201';
}
}
  public function changeStatusComment()
  {
    $crdoc_id=$_GET['crdoc_id'];
    $get=$this->criminal_model->sql($this->criminal_model->fetchNewComment($crdoc_id));
    if($get){
    $changed=$this->criminal_model->changeStatusComment($get,$crdoc_id);
    if($changed){
      echo '200';
    }
    else{
      echo '201';
    }
}
else{
  echo '201';
}

  }
  public function changeStatusUser()
  {
    $crdoc_id=$_GET['crdoc_id'];
    $status=$_GET['status'];
  	$get=$this->criminal_model->sql($this->criminal_model->getSingleUser($crdoc_id));
  if($get){
    $update=$this->criminal_model->changeStatusUser($get,$status,$crdoc_id);
    if($update){
      echo '200';
    }
    else{
      echo '201';
    }
  }

  }

  public function add_new_wanted()
  {
    $this->load->view('included/admin/header.php');
    $this->load->view('pages/admin/add_new_wanted');
    $this->load->view('included/admin/footer.php');
  }

  function registerCriminal()
  {
    $check_image=$this->imageValidation($_FILES['criminal_image'],"upload/fugitive/");
  $this->form_validation->set_rules($this->validationRules());
  if($this->form_validation->run() == true){
    if($check_image)
    {
  $insert=$this->criminal_model->registerCriminal($this->input->post(),$check_image);
  if($insert)
  {
    $this->session->set_userdata('success','Fugitive information is registered successfully!');
  redirect('add-new-wanted');
  }
  else
  {
    $this->session->set_userdata('error','Sorry, Fugitive information is not registered! try again.');
    $this->add_new_wanted();
//error if data is not registered perfectly
  }
}
else{
  $this->session->set_userdata('error','Sorry, Fugitive image is not uploaded! check maxsize and format of image.');
  $this->add_new_wanted();
}
  }
  else
  {
    $this->add_new_wanted();
//error for all validation
  }
  }
  function validationRules()
  {
    $config = array(
        array(
                'field' => 'criminal_name',
                'label' => 'Full Name',
                'rules' => 'required'
        ),

        array(
                'field' => 'criminal_type',
                'label' => 'Crime Type',
                'rules' => 'required'
        ),
        array(
                'field' => 'criminal_nationality',
                'label' => 'Nationality',
                'rules' => 'required'
        ),
        array(
                'field' => 'criminal_state_ofcase',
                'label' => 'State of case',
                'rules' => 'required'
        ),
        array(
                'field' => 'criminal_description',
                'label' => 'Description',
                'rules' => 'required'
        ),
        array(
                'field' => 'criminal_gender',
                'label' => 'Gender',
                'rules' => 'required'
        )
);
return $config;
  }



  function countCommentNewCrime()
  {
$crime=$this->criminal_model->sql("
select count(crdoc_id) as crime_count from criminal_document
where  crdoc_data->>'type'='crime' and crdoc_data->>'status'='0' ;");
$comment=$this->criminal_model->sql("
select count(crdoc_id) as comment_count from criminal_document
where  crdoc_data->>'type'='comment' and crdoc_data->>'status'='0';");
$criminal_report=$this->criminal_model->sql($this->criminal_model->countFugitiveReport());
$data['criminal_report']=$criminal_report[0]->report_count;
$data['crime']=$crime[0]->crime_count;
$data['comment']=$comment[0]->comment_count;
echo json_encode($data);
  }

}

?>
