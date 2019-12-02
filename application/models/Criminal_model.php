<?php
class Criminal_model extends MY_Model {
	public function __construct()
	{
         parent::__construct();
        $this->table       = 'criminal_document';
        $this->primary_key = 'crdoc_id';
	}

  function registerCriminal($values,$check_image){
    $data=array(
      'criminal_name'=>$values['criminal_name'],
      'criminal_gender'=>$values['criminal_gender'],
      'criminal_birthdate'=>$values['criminal_birthdate'],
      'criminal_eye_color'=>$values['criminal_eye_color'],
      'criminal_height'=>$values['criminal_height'],
      'criminal_nationality'=>$values['criminal_nationality'],
      'criminal_state_ofcase'=>$values['criminal_state_ofcase'],
      'criminal_identifier'=>$values['criminal_identifier'],
      'criminal_description'=>$values['criminal_description'],
      'criminal_language'=>$values['criminal_language'],
			'criminal_reward'=>$values['criminal_reward'],
      'criminal_image'=>$check_image,
      'criminal_type'=>$values['criminal_type'],
			'criminal_date'=>date('m d Y H:i'),
      'criminal_status'=>'1',
      'type'=>'criminal'
  );
	$data=json_encode($data);
  $insert=$this->db->insert('criminal_document',array('crdoc_data'=>$data));
	return $insert;

  }
  function updateCriminalStatus($get,$crdoc_id,$status){
		$data=array(
  'criminal_name'=>$get[0]->criminal_name,
  'criminal_gender'=>$get[0]->criminal_gender,
  'criminal_birthdate'=>$get[0]->criminal_birthdate,
  'criminal_eye_color'=>$get[0]->criminal_eye_color,
  'criminal_height'=>$get[0]->criminal_height,
  'criminal_nationality'=>$get[0]->criminal_nationality,
  'criminal_state_ofcase'=>$get[0]->criminal_state_ofcase,
  'criminal_identifier'=>$get[0]->criminal_identifier,
  'criminal_description'=>$get[0]->criminal_description,
  'criminal_language'=>$get[0]->criminal_language,
  'criminal_reward'=>$get[0]->criminal_reward,
  'criminal_image'=>$get[0]->criminal_image,
  'criminal_type'=>$get[0]->criminal_type,
  'criminal_date'=>$get[0]->criminal_date,
  'criminal_status'=>$status,
  'type'=>'criminal'
);

  $data=json_encode($data);
  $change_status=$this->db->where('crdoc_id',$crdoc_id)->update('criminal_document',array('crdoc_data'=>$data));
	return $change_status;

  }
  function fugitiveReporter($values){
    $data=array(
      'reporter_name'=>$values['reporter_name'],
      'reporter_phone'=>$values['reporter_phone'],
      'reporter_email'=>$values['reporter_email'],
      'detail_crime_reporter'=>$values['detail_crime_reporter'],
      'fugitive_id'=>$values['crdoc_id'],
    	'reported_date'=>date('m d Y H:i'),
      'status'=>'0',
      'type'=>'report'
  );

  $data=json_encode($data);
  $insert=$this->db->insert('criminal_document',array('crdoc_data'=>$data));
	return $insert;

  }
  function registerUser($values,$check_image){
		$password=hash_hmac('sha256', $values['admin_password'], '');
    $data=array(
      'admin_name'=>$values['admin_name'],
      'admin_phone'=>$values['admin_phone'],
      'admin_email'=>$values['admin_email'],
      'admin_password'=>$password,
      'admin_image'=>$check_image,
			'created_date'=>date('m d Y H:i'),
      'admin_status'=>'1',
      'type'=>'admin'
  );

  $data=json_encode($data);
  $insert=$this->db->insert('criminal_document',array('crdoc_data'=>$data));
	return $insert;

  }
  function editUser($values,$check_image){
    $data=array(
      'admin_name'=>$values['admin_name'],
      'admin_phone'=>$values['admin_phone'],
      'admin_email'=>$values['admin_email'],
      'admin_password'=>$values['admin_password'],
      'admin_image'=>$check_image,
			'created_date'=>$values['created_date'],
      'admin_status'=>$values['admin_status'],
      'type'=>'admin'
  );
  $data=json_encode($data);
  $update=$this->db->where('crdoc_id',$values['crdoc_id'])->update('criminal_document',array('crdoc_data'=>$data));
	return $update;
  }
	function changePassword($values){
		$password=hash_hmac('sha256', $values['new_password'], '');
    $data=array(
      'admin_name'=>$this->session->userdata('admin_name'),
      'admin_phone'=>$this->session->userdata('admin_phone'),
      'admin_email'=>$this->session->userdata('username'),
      'admin_password'=>$password,
      'admin_image'=>$this->session->userdata('image'),
			'created_date'=>$this->session->userdata('created_date'),
      'admin_status'=>$this->session->userdata('admin_status'),
      'type'=>'admin'
  );
  $data=json_encode($data);
  $update=$this->db->where('crdoc_id',$this->session->userdata('admin_id'))->update('criminal_document',array('crdoc_data'=>$data));
	return $update;
  }
  function changeStatusUser($values,$status,$crdoc_id){
    $data=array(
      'admin_name'=>$values[0]->admin_name,
      'admin_phone'=>$values[0]->admin_phone,
      'admin_email'=>$values[0]->admin_email,
      'admin_password'=>$values[0]->admin_password,
      'admin_image'=>$values[0]->admin_image,
			'created_date'=>$values[0]->created_date,
      'admin_status'=>$status,
      'type'=>'admin'
  );
  $data=json_encode($data);
  $update=$this->db->where('crdoc_id',$crdoc_id)->update('criminal_document',array('crdoc_data'=>$data));
	return $update;
  }
	function getSingleUser($crdoc_id){
	$get_user="select crdoc_data->>'admin_name' as admin_name,
	crdoc_data->>'admin_phone' as admin_phone,
	crdoc_data->>'admin_email' as admin_email,
	crdoc_data->>'admin_image' as admin_image,
	crdoc_data->>'created_date' as created_date,
	crdoc_data->>'admin_password' as admin_password,
	crdoc_id as crdoc_id,
	crdoc_data->>'admin_status' as admin_status
	 from criminal_document where crdoc_id=$crdoc_id;";
	 return $get_user;
	}
	function viewSuspendUser(){
	$get_user="select crdoc_data->>'admin_name' as admin_name,
	crdoc_data->>'admin_phone' as admin_phone,
	crdoc_data->>'admin_email' as admin_email,
	crdoc_data->>'admin_image' as admin_image,
	crdoc_data->>'created_date' as created_date,
	crdoc_data->>'admin_password' as admin_password,
	crdoc_id as crdoc_id,
	crdoc_data->>'admin_status' as admin_status
	 from criminal_document where crdoc_data->>'type'='admin' and crdoc_data->>'admin_status'='0';";
	 return $get_user;
	}
	function viewActiveUser(){
	$get_user="select crdoc_data->>'admin_name' as admin_name,
	crdoc_data->>'admin_phone' as admin_phone,
	crdoc_data->>'admin_email' as admin_email,
	crdoc_data->>'admin_image' as admin_image,
	crdoc_data->>'created_date' as created_date,
	crdoc_data->>'admin_password' as admin_password,
	crdoc_id as crdoc_id,
	crdoc_data->>'admin_status' as admin_status
	 from criminal_document where crdoc_data->>'type'='admin' and crdoc_data->>'admin_status'='1';";
	 return $get_user;
	}


  function updateCriminal($values,$image_check){
  $data=array(
      'criminal_name'=>$values['criminal_name'],
      'criminal_gender'=>$values['criminal_gender'],
      'criminal_birthdate'=>$values['criminal_birthdate'],
      'criminal_eye_color'=>$values['criminal_eye_color'],
      'criminal_height'=>$values['criminal_height'],
      'criminal_nationality'=>$values['criminal_nationality'],
      'criminal_state_ofcase'=>$values['criminal_state_ofcase'],
      'criminal_identifier'=>$values['criminal_identifier'],
      'criminal_description'=>$values['criminal_description'],
      'criminal_language'=>$values['criminal_language'],
      'criminal_reward'=>$values['criminal_reward'],
      'criminal_image'=>$image_check,
      'criminal_type'=>$values['criminal_type'],
			'criminal_date'=>$values['criminal_date'],
			'criminal_status'=>$values['criminal_status'],
      'type'=>'criminal'
      );

  $data=json_encode($data);
  $update=$this->db->where('crdoc_id',$values['id'])->update('criminal_document',array('crdoc_data'=>$data));
	return $update;
  }

  function viewCriminalArrested($ofset){
  $get_criminal="select crdoc_data->>'criminal_name' as criminal_name,
  crdoc_data->>'criminal_gender' as criminal_gender,
	crdoc_id as crdoc_id,
  crdoc_data->>'criminal_birthdate' as criminal_birthdate,
  crdoc_data->>'criminal_eye_color' as criminal_eye_color,
  crdoc_data->>'criminal_height' as criminal_height,
  crdoc_data->>'criminal_nationality' as criminal_nationality,
  crdoc_data->>'criminal_state_ofcase' as criminal_state_ofcase,
  crdoc_data->>'criminal_identifier' as criminal_identifier,
  crdoc_data->>'criminal_description' as criminal_description,
  crdoc_data->>'criminal_status' as criminal_status,
  crdoc_data->>'criminal_language' as criminal_language,
  crdoc_data->>'criminal_type' as criminal_type,
  crdoc_data->>'criminal_image' as criminal_image,
  crdoc_data->>'criminal_reward' as criminal_reward,
  crdoc_data->>'criminal_date' as criminal_date
   from criminal_document where crdoc_data->>'type'='criminal'
	 and crdoc_data->>'criminal_status'='0' order by crdoc_id desc limit 10 offset $ofset;";
	 return $get_criminal;
  }
function filterYearOfCriminalRegistered(){
	$get_year="select count(crdoc_id) as year_no,
  date_part('year',(crdoc_data->>'criminal_date')::date) as criminal_date
   from criminal_document where crdoc_data->>'type'='criminal' and crdoc_data->>'criminal_status'='1' group by criminal_date order by criminal_date desc;";
	 return $get_year;
}
  function viewCriminalPosted($ofset,$by_value,$type){
		if($type=='crime'){
			$where="crdoc_data->>'criminal_type'='$by_value'";
	}
	else if($type=='year'){
  $where="date_part('year',(crdoc_data->>'criminal_date')::date)='$by_value'";

	}
	else if($type=='name'){
		$by_value=strtolower($by_value);
		$where="lower(crdoc_data->>'criminal_name') like '%$by_value%'";

	}
	else{
$where="crdoc_data->>'type'='criminal'  and
crdoc_data->>'criminal_status'='1'";
	}
  $get_criminal="select crdoc_data->>'criminal_name' as criminal_name,
  st.setting_data->>'setting_crime_name' as criminal_type,
  crdoc_data->>'criminal_gender' as criminal_gender,
  crdoc_id as crdoc_id,
  crdoc_data->>'criminal_birthdate' as criminal_birthdate,
  crdoc_data->>'criminal_eye_color' as criminal_eye_color,
  crdoc_data->>'criminal_height' as criminal_height,
  crdoc_data->>'criminal_nationality' as criminal_nationality,
  crdoc_data->>'criminal_state_ofcase' as criminal_state_ofcase,
  crdoc_data->>'criminal_identifier' as criminal_identifier,
  crdoc_data->>'criminal_description' as criminal_description,
  crdoc_data->>'criminal_status' as criminal_status,
  crdoc_data->>'criminal_language' as criminal_language,
  crdoc_data->>'criminal_image' as criminal_image,
  crdoc_data->>'criminal_reward' as criminal_reward,
  crdoc_data->>'criminal_date' as criminal_date
   from criminal_document join setting as st on st.setting_id=(criminal_document.crdoc_data->>'criminal_type')::int
	 where crdoc_data->>'type'='criminal'  and
	 crdoc_data->>'criminal_status'='1' and (".$where.") order by crdoc_id desc limit 10 offset $ofset;";
	 return $get_criminal;
  }
  function viewCriminalPostedFrontSide(){
  $get_criminal="select crdoc_data->>'criminal_name' as criminal_name,
  crdoc_data->>'criminal_gender' as criminal_gender,
  crdoc_id as crdoc_id,
  crdoc_data->>'criminal_birthdate' as criminal_birthdate,
  crdoc_data->>'criminal_eye_color' as criminal_eye_color,
  crdoc_data->>'criminal_height' as criminal_height,
  crdoc_data->>'criminal_nationality' as criminal_nationality,
  crdoc_data->>'criminal_state_ofcase' as criminal_state_ofcase,
  crdoc_data->>'criminal_identifier' as criminal_identifier,
  crdoc_data->>'criminal_description' as criminal_description,
  crdoc_data->>'criminal_status' as criminal_status,
  crdoc_data->>'criminal_language' as criminal_language,
  crdoc_data->>'criminal_type' as criminal_type,
  crdoc_data->>'criminal_image' as criminal_image,
  crdoc_data->>'criminal_reward' as criminal_reward,
  crdoc_data->>'criminal_date' as criminal_date
   from criminal_document where crdoc_data->>'type'='criminal' and
	 crdoc_data->>'criminal_status'='1' order by crdoc_id desc;";
	 return $get_criminal;
  }
  function viewSingleCriminalPosted($crdoc_id){
  $get_criminal="select crdoc_data->>'criminal_name' as criminal_name,
  crdoc_data->>'criminal_gender' as criminal_gender,
  crdoc_id as crdoc_id,
  crdoc_data->>'criminal_birthdate' as criminal_birthdate,
  crdoc_data->>'criminal_eye_color' as criminal_eye_color,
  crdoc_data->>'criminal_height' as criminal_height,
  crdoc_data->>'criminal_nationality' as criminal_nationality,
  crdoc_data->>'criminal_state_ofcase' as criminal_state_ofcase,
  crdoc_data->>'criminal_identifier' as criminal_identifier,
  crdoc_data->>'criminal_description' as criminal_description,
  crdoc_data->>'criminal_status' as criminal_status,
  crdoc_data->>'criminal_language' as criminal_language,
  crdoc_data->>'criminal_type' as criminal_type,
  crdoc_data->>'criminal_image' as criminal_image,
  crdoc_data->>'criminal_reward' as criminal_reward,
  crdoc_data->>'criminal_date' as criminal_date,
  crdoc_data->>'criminal_status' as criminal_status
   from criminal_document where crdoc_data->>'type'='criminal' and crdoc_data->>'criminal_status'='1' and
	 crdoc_id=$crdoc_id order by crdoc_id desc;";
	 return $get_criminal;
  }
	function changeStatusCriminal($crdoc_id)
	{
		$get_criminal="select crdoc_data->>'criminal_name' as criminal_name,
	  crdoc_data->>'criminal_gender' as criminal_gender,
	  crdoc_data->>'criminal_birthdate' as criminal_birthdate,
	  crdoc_data->>'criminal_eye_color' as criminal_eye_color,
	  crdoc_data->>'criminal_height' as criminal_height,
	  crdoc_data->>'criminal_nationality' as criminal_nationality,
	  crdoc_data->>'criminal_state_ofcase' as criminal_state_ofcase,
	  crdoc_data->>'criminal_identifier' as criminal_identifier,
	  crdoc_data->>'criminal_description' as criminal_description,
	  crdoc_data->>'criminal_language' as criminal_language,
	  crdoc_data->>'criminal_type' as criminal_type,
	  crdoc_data->>'criminal_image' as criminal_image,
	  crdoc_data->>'criminal_reward' as criminal_reward,
	  crdoc_data->>'criminal_date' as criminal_date,
	  crdoc_data->>'criminal_status' as criminal_status,
	  crdoc_id as crdoc_id,
		crdoc_data->>'type' as type
	  from criminal_document where crdoc_data->>'type'='criminal' and
		 crdoc_id=$crdoc_id order by crdoc_id desc;";
return $get_criminal;

	}
	function viewFugitiveReportDashboard($ofset){
	$get_user="select crdoc_data->>'fugitive_id' as fugitive_id,
	crdoc_data->>'reporter_name' as reporter_name,
	crdoc_data->>'reporter_email' as reporter_email,
	crdoc_data->>'reporter_phone' as reporter_phone,
	crdoc_data->>'detail_crime_reporter' as detail_crime_reporter,
	crdoc_data->>'reported_date' as reported_date,
	crdoc_data->>'status' as status
	from criminal_document where crdoc_data->>'type'='report' and
	crdoc_data->>'status'='0' order by crdoc_id desc limit 4 offset $ofset;";
	 return $get_user;
	}
	function viewFugitiveAddedDashboard(){
	$get_user="select crdoc_data->>'criminal_name' as criminal_name,
  crdoc_data->>'criminal_gender' as criminal_gender,
  crdoc_id as crdoc_id,
  crdoc_data->>'criminal_birthdate' as criminal_birthdate,
  crdoc_data->>'criminal_eye_color' as criminal_eye_color,
  crdoc_data->>'criminal_height' as criminal_height,
  crdoc_data->>'criminal_nationality' as criminal_nationality,
  crdoc_data->>'criminal_state_ofcase' as criminal_state_ofcase,
  crdoc_data->>'criminal_identifier' as criminal_identifier,
  crdoc_data->>'criminal_description' as criminal_description,
  crdoc_data->>'criminal_status' as criminal_status,
  crdoc_data->>'criminal_language' as criminal_language,
  crdoc_data->>'criminal_type' as criminal_type,
  crdoc_data->>'criminal_image' as criminal_image,
  crdoc_data->>'criminal_reward' as criminal_reward,
  crdoc_data->>'criminal_date' as criminal_date
   from criminal_document where crdoc_data->>'type'='criminal' and
	 crdoc_data->>'criminal_status'='1' order by crdoc_id asc limit 4;";
	 return $get_user;
	}
	function viewNewCrimeReport($ofset){
		$get_crime="select crdoc_data->>'report_crime' as report_crime,
	  crdoc_data->>'contact_name_crime' as contact_name_crime,
	  crdoc_data->>'contact_phone_crime' as contact_phone_crime,
	  crdoc_data->>'accuser_name' as accuser_name,
	  crdoc_data->>'crime_type' as crime_type,
	  crdoc_data->>'city' as city,
	  crdoc_data->>'subcity' as subcity,
		crdoc_data->>'status' as status,
		crdoc_id as crdoc_id,
	  crdoc_data->>'report_date' as report_date
	   from criminal_document where crdoc_data->>'type'='crime'
		 order by crdoc_data->>'status',crdoc_id desc limit 10 offset $ofset;";
		 return $get_crime;
	}
	function fetchNewcrime($crdoc_id){
		$get_crime="select crdoc_data->>'report_crime' as report_crime,
	  crdoc_data->>'contact_name_crime' as contact_name_crime,
	  crdoc_data->>'contact_phone_crime' as contact_phone_crime,
	  crdoc_data->>'accuser_name' as accuser_name,
	  crdoc_data->>'crime_type' as crime_type,
	  crdoc_data->>'city' as city,
	  crdoc_data->>'subcity' as subcity,
		crdoc_data->>'status' as status,
		crdoc_data->>'contact_email_crime' as contact_email_crime,
		crdoc_id as crdoc_id,
	  crdoc_data->>'report_date' as report_date
	   from criminal_document where crdoc_data->>'type'='crime' and crdoc_id=$crdoc_id";
		 return $get_crime;
	}
	function changeStatusCrime($values,$crdoc_id)
	{
		$data=array(
			'report_crime'=>$values[0]->report_crime,
			'contact_name_crime'=>$values[0]->contact_name_crime,
			'contact_phone_crime'=>$values[0]->contact_phone_crime,
			'contact_email_crime'=>$values[0]->contact_email_crime,
			'accuser_name'=>$values[0]->accuser_name,
			'crime_type'=>$values[0]->crime_type,
			'city'=>$values[0]->city,
			'subcity'=>$values[0]->subcity,
			'report_date'=>$values[0]->report_date,
			'status'=>'1',
			'type'=>'crime'
		);
		$data=json_encode($data);
		$updt=$this->db->where('crdoc_id',$crdoc_id)->update('criminal_document',array('crdoc_data'=>$data));
		return $updt;
	}
	function fetchNewComment($crdoc_id){
		$get_crime="select crdoc_data->>'comment_email' as comment_email,
	  crdoc_data->>'comment_message' as comment_message,
	  crdoc_data->>'comment_date' as comment_date,
	  crdoc_data->>'status' as status,
	  crdoc_data->>'type' as type
	   from criminal_document where crdoc_data->>'type'='comment' and crdoc_id=$crdoc_id";
		 return $get_crime;
	}
	function changeStatusComment($values,$crdoc_id)
	{
  $data=array(
		'comment_email'=>$values[0]->comment_email,
		'comment_message'=>$values[0]->comment_message,
		'comment_date'=>$values[0]->comment_date,
		'status'=>'1',
		'type'=>$values[0]->type
	);
	$data=json_encode($data);
	$updt=$this->db->where('crdoc_id',$crdoc_id)->update('criminal_document',array('crdoc_data'=>$data));
	return $updt;
	}
	function viewComment($ofset){
		$get_comment="select crdoc_data->>'comment_message' as comment_message,
	  crdoc_data->>'comment_email' as comment_email,
	  crdoc_data->>'comment_date' as comment_date,
	  crdoc_id as crdoc_id,
	  crdoc_data->>'status' as status
	   from criminal_document where crdoc_data->>'type'='comment' order by crdoc_data->>'status',crdoc_id desc limit 10 offset $ofset;";
		 return $get_comment;
	}
	function allCrimeReportCount()
	{
		$count="select count(crdoc_id) as crime_count from criminal_document
		where date_part('year',(crdoc_data->>'report_date')::date)=date_part('year',NOW()) and
		crdoc_data->>'type'='crime';";
		return $count;
	}
	function allCrimeReportCountPagination()
	{
		$count="select count(crdoc_id) as crime_count from criminal_document
		where crdoc_data->>'type'='crime';";
		return $count;
	}
	function allCommentCountPagination()
	{
		$count="select count(crdoc_id) as comment_count from criminal_document
		where crdoc_data->>'type'='comment';";
		return $count;
	}
	function allCommentCount()
	{
		$count="select count(crdoc_id) as comment_count from criminal_document
		where date_part('year',(crdoc_data->>'comment_date')::date)=date_part('year',NOW()) and
		 crdoc_data->>'type'='comment';";
		return $count;
	}
	function countFugitiveReport()
	{
		$count="select count(crdoc_id) as report_count from criminal_document
		where crdoc_data->>'type'='report';";
		return $count;
	}

	function countWantedList()
	{
		$count="select count(1) filter(where crdoc_data->>'criminal_status'='0') as arrested_count,
count(1) filter(where crdoc_data->>'criminal_status'='1') as posted_count from criminal_document
		where crdoc_data->>'type'='criminal';";
		return $count;
	}
	function allCriminalCount()
	{
		$count="select count(crdoc_id) as criminal_count from criminal_document
		where date_part('year',(crdoc_data->>'criminal_date')::date)=date_part('year',NOW()) and
		crdoc_data->>'type'='criminal';";
		return $count;
	}


  public function get_no_crimes()
  {
    $query ="SELECT
              count(crdoc_data->> 'crime_type') ,
              crdoc_data->>'city' as city
              from criminal_document where crdoc_data->>'type' ='crime'
              group by  city";

    $b = $this->db->query($query);

    return $b->result_array();
  }

  public function get_crime_category()
  {
    $query ="SELECT 
            count(crdoc_data->> 'crime_type') ,
            crdoc_data->>'crime_type' as crime_type 
            from criminal_document where crdoc_data->>'type' ='crime' and crdoc_data->> 'crime_type' != ''
            group by  crime_type";

    $b = $this->db->query($query);

    return $b->result_array();
  }
}
?>
