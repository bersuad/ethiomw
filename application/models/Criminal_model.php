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
<<<<<<< HEAD
 
	$get_user="select case when(crdoc_data->>'admin_name' is not null) then crdoc_data->>'admin_name' else null end as admin_name,
	case when(crdoc_data->>'admin_phone' is not null) then crdoc_data->>'admin_phone' else null end   as admin_phone,
	case when(crdoc_data->>'admin_email' is not null) then crdoc_data->>'admin_email' else null end as admin_email,
	case when(crdoc_data->>'admin_image' is not null) then crdoc_data->>'admin_image' else null end as admin_image,
	case when(crdoc_data->>'created_date' is not null) then crdoc_data->>'created_date' else null end as created_date,
	case when(crdoc_data->>'admin_password' is not null) then crdoc_data->>'admin_password'else null end as admin_password,
	crdoc_id as crdoc_id,
	case when(crdoc_data->>'admin_status' is not null) then crdoc_data->>'admin_status' else null end as admin_status
	 from criminal_document where case when (crdoc_data->>'type' is not null) then crdoc_data->>'type' else null end='admin' and
	  case when(crdoc_data->>'admin_status' is not null) then crdoc_data->>'admin_status' else null end='0';";
	 return $get_user;
	}
	function viewActiveUser(){
	$get_user="select case when(crdoc_data->>'admin_name' is not null) then crdoc_data->>'admin_name' else null end as admin_name,
	case when(crdoc_data->>'admin_phone' is not null) then crdoc_data->>'admin_phone' else null end   as admin_phone,
	case when(crdoc_data->>'admin_email' is not null) then crdoc_data->>'admin_email' else null end as admin_email,
	case when(crdoc_data->>'admin_image' is not null) then crdoc_data->>'admin_image' else null end as admin_image,
	case when(crdoc_data->>'created_date' is not null) then crdoc_data->>'created_date' else null end as created_date,
	case when(crdoc_data->>'admin_password' is not null) then crdoc_data->>'admin_password'else null end as admin_password,
	crdoc_id as crdoc_id,
	case when(crdoc_data->>'admin_status' is not null) then crdoc_data->>'admin_status' else null end as admin_status
	 from criminal_document where case when (crdoc_data->>'type' is not null) then crdoc_data->>'type' else null end='admin' and
	  case when(crdoc_data->>'admin_status' is not null) then crdoc_data->>'admin_status' else null end='1';";

	// $get_user="select crdoc_data->>'admin_name' as admin_name,
	// crdoc_data->>'admin_phone' as admin_phone,
	// crdoc_data->>'admin_email' as admin_email,
	// crdoc_data->>'admin_image' as admin_image,
	// crdoc_data->>'created_date' as created_date,
	// crdoc_data->>'admin_password' as admin_password,
	// crdoc_id as crdoc_id,
	// crdoc_data->>'admin_status' as admin_status
	//  from criminal_document where crdoc_data->>'type'='admin' and crdoc_data->>'admin_status'='0';";
	 return $get_user;
	}
	// function viewActiveUser(){
	// $get_user="select crdoc_data->>'admin_name' as admin_name,
	// crdoc_data->>'admin_phone' as admin_phone,
	// crdoc_data->>'admin_email' as admin_email,
	// crdoc_data->>'admin_image' as admin_image,
	// crdoc_data->>'created_date' as created_date,
	// crdoc_data->>'admin_password' as admin_password,
	// crdoc_id as crdoc_id,
	// crdoc_data->>'admin_status' as admin_status
	//  from criminal_document where crdoc_data->>'type'='admin' and crdoc_data->>'admin_status'='1';";
 
	//  return $get_user;
	// }
=======
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
>>>>>>> 9e0b8bc0a59448ee068b493e71d9055cf9b2fd60


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

<<<<<<< HEAD
 
  function viewCriminalArrested($ofset,$suspects_id){
		if($suspects_id){
			$where="where case when(crdoc_data->>'type'='criminal' is not null) then crdoc_data->>'type'='criminal' else null end   and
			 case when(crdoc_data->>'criminal_status' is not null) then crdoc_data->>'criminal_status' else null end ='0' and crdoc_id=$suspects_id";
		}
		else{
			$where="where case when(crdoc_data->>'type'='criminal' is not null) then crdoc_data->>'type'='criminal' else null end   and
			 case when(crdoc_data->>'criminal_status' is not null) then crdoc_data->>'criminal_status' else null end ='0'";
		}
  $get_criminal="select case when(crdoc_data->>'criminal_name' is not null) then crdoc_data->>'criminal_name' else null end as criminal_name,
  case when(st.setting_data->>'setting_crime_name' is not null) then st.setting_data->>'setting_crime_name' else null end as criminal_type,
  case when(crdoc_data->>'criminal_gender' is not null) then crdoc_data->>'criminal_gender' else null end as criminal_gender,
  crdoc_id as crdoc_id,
  case when(crdoc_data->>'criminal_birthdate' is not null) then crdoc_data->>'criminal_birthdate' else null end as criminal_birthdate,
  case when(crdoc_data->>'criminal_eye_color' is not null) then crdoc_data->>'criminal_eye_color' else null end as criminal_eye_color,
  case when(crdoc_data->>'criminal_height' is not null) then crdoc_data->>'criminal_height' else null end as criminal_height,
  case when(crdoc_data->>'criminal_nationality' is not null) then crdoc_data->>'criminal_nationality' else null end as criminal_nationality,
  case when(crdoc_data->>'criminal_state_ofcase' is not null) then crdoc_data->>'criminal_state_ofcase' else null end as criminal_state_ofcase,
  case when(crdoc_data->>'criminal_identifier' is not null) then crdoc_data->>'criminal_identifier' else null end as criminal_identifier,
  case when(crdoc_data->>'criminal_description' is not null) then crdoc_data->>'criminal_description' else null end as criminal_description,
  case when(crdoc_data->>'criminal_status' is not null) then crdoc_data->>'criminal_status' else null end as criminal_status,
  case when(crdoc_data->>'criminal_language' is not null) then crdoc_data->>'criminal_language' else null end as criminal_language,
  case when(crdoc_data->>'criminal_image' is not null) then crdoc_data->>'criminal_image' else null end as criminal_image,
  case when(crdoc_data->>'criminal_reward' is not null) then crdoc_data->>'criminal_reward' else null end as criminal_reward,
  case when(crdoc_data->>'criminal_date' is not null) then crdoc_data->>'criminal_date' else null end as criminal_date
   from criminal_document join setting as st on
   st.setting_id=case when((criminal_document.crdoc_data->>'criminal_type')::int is not null)
	 then (criminal_document.crdoc_data->>'criminal_type')::int else null end ".$where."
	  order by crdoc_id desc limit 10 offset $ofset;";
	 return $get_criminal;
  }
function filterYearOfCriminalRegistered(){
	$get_year="select count(crdoc_id) as year_no,
  date_part('year',case when((crdoc_data->>'criminal_date')::date is not null) then (crdoc_data->>'criminal_date')::date else null end ) as criminal_date
   from criminal_document where case when(crdoc_data->>'type' is not null) then crdoc_data->>'type' else null end='criminal' and
    case when(crdoc_data->>'criminal_status' is not null) then crdoc_data->>'criminal_status' else null end='1' group by criminal_date order by criminal_date desc;";
	 return $get_year;
}
 //  function viewCriminalPosted($ofset,$by_value,$type,$suspects_id){
	// 	if(!$suspects_id){
	// 	if($type=='crime'){
	// 		if($by_value=='all'){
	// 			$where="case when(crdoc_data->>'type'='criminal' is not null) then crdoc_data->>'type'='criminal' else null end  and
	// 			case when(crdoc_data->>'criminal_status' is not null) then crdoc_data->>'criminal_status' else null end ='1'";
	// 		}
	// 		else{
	// 		$where="case when(crdoc_data->>'criminal_type' is not null) then crdoc_data->>'criminal_type' else null end ='$by_value'";
	// }}
	// else if($type=='year'){
	// 	if($by_value=='all'){
	// 		$where="case when(crdoc_data->>'type'='criminal' is not null) then crdoc_data->>'type'='criminal' else null end  and
	// 		case when(crdoc_data->>'criminal_status' is not null) then crdoc_data->>'criminal_status' else null end ='1'";
	// 	}
	// 	else{
	// 		$where="date_part('year',case when((crdoc_data->>'criminal_date')::date is not null) then
	// 		(crdoc_data->>'criminal_date')::date else null end)='$by_value'";
	// 	}


  
 
// function filterYearOfCriminalRegistered(){
// 	$get_year="select count(crdoc_id) as year_no,
//   date_part('year',(crdoc_data->>'criminal_date')::date) as criminal_date
//    from criminal_document where crdoc_data->>'type'='criminal' and crdoc_data->>'criminal_status'='1' group by criminal_date order by criminal_date desc;";
// 	 return $get_year;
// }
function viewCriminalPosted($ofset,$by_value,$type,$suspects_id){
    if(!$suspects_id){
    if($type=='crime'){
      if($by_value=='all'){
        $where="case when(crdoc_data->>'type'='criminal' is not null) then crdoc_data->>'type'='criminal' else null end  and
        case when(crdoc_data->>'criminal_status' is not null) then crdoc_data->>'criminal_status' else null end ='1'";
      }
      else{
      $where="case when(crdoc_data->>'criminal_type' is not null) then crdoc_data->>'criminal_type' else null end ='$by_value'";
  }}
  else if($type=='year'){
    if($by_value=='all'){
      $where="case when(crdoc_data->>'type'='criminal' is not null) then crdoc_data->>'type'='criminal' else null end  and
      case when(crdoc_data->>'criminal_status' is not null) then crdoc_data->>'criminal_status' else null end ='1'";
    }
    else{
      $where="date_part('year',case when((crdoc_data->>'criminal_date')::date is not null) then
      (crdoc_data->>'criminal_date')::date else null end)='$by_value'";
    }


  }
  else if($type=='name'){
    $by_value=strtolower($by_value);
    $where="case when(lower(crdoc_data->>'criminal_name') is not null) then
    lower(crdoc_data->>'criminal_name') else null end  like '%$by_value%'";

  }
  else{
$where="case when(crdoc_data->>'type'='criminal' is not null) then crdoc_data->>'type'='criminal' else null end  and
case when(crdoc_data->>'criminal_status' is not null) then crdoc_data->>'criminal_status' else null end ='1'";
  }
}
else{
  $where="crdoc_id=$suspects_id";
}
  $get_criminal="select case when(crdoc_data->>'criminal_name' is not null) then crdoc_data->>'criminal_name' else null end as criminal_name,
  case when(st.setting_data->>'setting_crime_name' is not null) then st.setting_data->>'setting_crime_name' else null end as criminal_type,
  case when(crdoc_data->>'criminal_gender' is not null) then crdoc_data->>'criminal_gender' else null end as criminal_gender,
  crdoc_id as crdoc_id,
  case when(crdoc_data->>'criminal_birthdate' is not null) then crdoc_data->>'criminal_birthdate' else null end as criminal_birthdate,
  case when(crdoc_data->>'criminal_eye_color' is not null) then crdoc_data->>'criminal_eye_color' else null end as criminal_eye_color,
  case when(crdoc_data->>'criminal_height' is not null) then crdoc_data->>'criminal_height' else null end as criminal_height,
  case when(crdoc_data->>'criminal_nationality' is not null) then crdoc_data->>'criminal_nationality' else null end as criminal_nationality,
  case when(crdoc_data->>'criminal_state_ofcase' is not null) then crdoc_data->>'criminal_state_ofcase' else null end as criminal_state_ofcase,
  case when(crdoc_data->>'criminal_identifier' is not null) then crdoc_data->>'criminal_identifier' else null end as criminal_identifier,
  case when(crdoc_data->>'criminal_description' is not null) then crdoc_data->>'criminal_description' else null end as criminal_description,
  case when(crdoc_data->>'criminal_status' is not null) then crdoc_data->>'criminal_status' else null end as criminal_status,
  case when(crdoc_data->>'criminal_language' is not null) then crdoc_data->>'criminal_language' else null end as criminal_language,
  case when(crdoc_data->>'criminal_image' is not null) then crdoc_data->>'criminal_image' else null end as criminal_image,
  case when(crdoc_data->>'criminal_reward' is not null) then crdoc_data->>'criminal_reward' else null end as criminal_reward,
  case when(crdoc_data->>'criminal_date' is not null) then crdoc_data->>'criminal_date' else null end as criminal_date
   from criminal_document join setting as st on
   st.setting_id=case when((criminal_document.crdoc_data->>'criminal_type')::int is not null) then (criminal_document.crdoc_data->>'criminal_type')::int else null end
   where case when(crdoc_data->>'type'='criminal' is not null) then crdoc_data->>'type'='criminal' else null end   and
   case when(crdoc_data->>'criminal_status' is not null) then crdoc_data->>'criminal_status' else null end ='1' and (".$where.") order by crdoc_id desc limit 10 offset $ofset;";
   return $get_criminal;
  }
  function viewCriminalPostedFrontSide(){
  $get_criminal="select case when(crdoc_data->>'criminal_name' is not null) then crdoc_data->>'criminal_name' else null end as criminal_name,
  case when(st.setting_data->>'setting_crime_name' is not null) then st.setting_data->>'setting_crime_name' else null end as criminal_type,
  case when(crdoc_data->>'criminal_gender' is not null) then crdoc_data->>'criminal_gender' else null end as criminal_gender,
  crdoc_id as crdoc_id,
  case when(crdoc_data->>'criminal_birthdate' is not null) then crdoc_data->>'criminal_birthdate' else null end as criminal_birthdate,
  case when(crdoc_data->>'criminal_eye_color' is not null) then crdoc_data->>'criminal_eye_color' else null end as criminal_eye_color,
  case when(crdoc_data->>'criminal_height' is not null) then crdoc_data->>'criminal_height' else null end as criminal_height,
  case when(crdoc_data->>'criminal_nationality' is not null) then crdoc_data->>'criminal_nationality' else null end as criminal_nationality,
  case when(crdoc_data->>'criminal_state_ofcase' is not null) then crdoc_data->>'criminal_state_ofcase' else null end as criminal_state_ofcase,
  case when(crdoc_data->>'criminal_identifier' is not null) then crdoc_data->>'criminal_identifier' else null end as criminal_identifier,
  case when(crdoc_data->>'criminal_description' is not null) then crdoc_data->>'criminal_description' else null end as criminal_description,
  case when(crdoc_data->>'criminal_status' is not null) then crdoc_data->>'criminal_status' else null end as criminal_status,
  case when(crdoc_data->>'criminal_language' is not null) then crdoc_data->>'criminal_language' else null end as criminal_language,
  case when(crdoc_data->>'criminal_image' is not null) then crdoc_data->>'criminal_image' else null end as criminal_image,
  case when(crdoc_data->>'criminal_reward' is not null) then crdoc_data->>'criminal_reward' else null end as criminal_reward,
  case when(crdoc_data->>'criminal_date' is not null) then crdoc_data->>'criminal_date' else null end as criminal_date
   from criminal_document join setting as st on
   st.setting_id=case when((criminal_document.crdoc_data->>'criminal_type')::int is not null) then (criminal_document.crdoc_data->>'criminal_type')::int else null end
	 where case when(crdoc_data->>'type'='criminal' is not null) then crdoc_data->>'type'='criminal' else null end   and
	 case when(crdoc_data->>'criminal_status' is not null) then crdoc_data->>'criminal_status' else null end ='1'  order by crdoc_id desc;";
	 return $get_criminal;
  }
  function viewSingleCriminalPosted($crdoc_id){
  $get_criminal="select case when(crdoc_data->>'criminal_name' is not null) then crdoc_data->>'criminal_name' else null end as criminal_name,
  case when(st.setting_data->>'setting_crime_name' is not null) then st.setting_data->>'setting_crime_name' else null end as criminal_type,
  case when(crdoc_data->>'criminal_gender' is not null) then crdoc_data->>'criminal_gender' else null end as criminal_gender,
  crdoc_id as crdoc_id,
  case when(crdoc_data->>'criminal_birthdate' is not null) then crdoc_data->>'criminal_birthdate' else null end as criminal_birthdate,
  case when(crdoc_data->>'criminal_eye_color' is not null) then crdoc_data->>'criminal_eye_color' else null end as criminal_eye_color,
  case when(crdoc_data->>'criminal_height' is not null) then crdoc_data->>'criminal_height' else null end as criminal_height,
  case when(crdoc_data->>'criminal_nationality' is not null) then crdoc_data->>'criminal_nationality' else null end as criminal_nationality,
  case when(crdoc_data->>'criminal_state_ofcase' is not null) then crdoc_data->>'criminal_state_ofcase' else null end as criminal_state_ofcase,
  case when(crdoc_data->>'criminal_identifier' is not null) then crdoc_data->>'criminal_identifier' else null end as criminal_identifier,
  case when(crdoc_data->>'criminal_description' is not null) then crdoc_data->>'criminal_description' else null end as criminal_description,
  case when(crdoc_data->>'criminal_status' is not null) then crdoc_data->>'criminal_status' else null end as criminal_status,
  case when(crdoc_data->>'criminal_language' is not null) then crdoc_data->>'criminal_language' else null end as criminal_language,
  case when(crdoc_data->>'criminal_image' is not null) then crdoc_data->>'criminal_image' else null end as criminal_image,
  case when(crdoc_data->>'criminal_reward' is not null) then crdoc_data->>'criminal_reward' else null end as criminal_reward,
  case when(crdoc_data->>'criminal_date' is not null) then crdoc_data->>'criminal_date' else null end as criminal_date
   from criminal_document join setting as st on
   st.setting_id=case when((criminal_document.crdoc_data->>'criminal_type')::int is not null) then (criminal_document.crdoc_data->>'criminal_type')::int else null end
   where case when(crdoc_data->>'type'='criminal' is not null) then crdoc_data->>'type'='criminal' else null end   and
   case when(crdoc_data->>'criminal_status' is not null) then crdoc_data->>'criminal_status' else null end ='1' and
   crdoc_id=$crdoc_id order by crdoc_id desc;";
   return $get_criminal;
 }


 


	function changeStatusCriminal($crdoc_id)
	{
 
		  $get_criminal="select case when(crdoc_data->>'criminal_name' is not null) then crdoc_data->>'criminal_name' else null end as criminal_name,
  case when(st.setting_data->>'setting_crime_name' is not null) then st.setting_data->>'setting_crime_name' else null end as criminal_type,
  case when(crdoc_data->>'criminal_gender' is not null) then crdoc_data->>'criminal_gender' else null end as criminal_gender,
  crdoc_id as crdoc_id,
  case when(crdoc_data->>'criminal_birthdate' is not null) then crdoc_data->>'criminal_birthdate' else null end as criminal_birthdate,
  case when(crdoc_data->>'criminal_eye_color' is not null) then crdoc_data->>'criminal_eye_color' else null end as criminal_eye_color,
  case when(crdoc_data->>'criminal_height' is not null) then crdoc_data->>'criminal_height' else null end as criminal_height,
  case when(crdoc_data->>'criminal_nationality' is not null) then crdoc_data->>'criminal_nationality' else null end as criminal_nationality,
  case when(crdoc_data->>'criminal_state_ofcase' is not null) then crdoc_data->>'criminal_state_ofcase' else null end as criminal_state_ofcase,
  case when(crdoc_data->>'criminal_identifier' is not null) then crdoc_data->>'criminal_identifier' else null end as criminal_identifier,
  case when(crdoc_data->>'criminal_description' is not null) then crdoc_data->>'criminal_description' else null end as criminal_description,
  case when(crdoc_data->>'criminal_status' is not null) then crdoc_data->>'criminal_status' else null end as criminal_status,
  case when(crdoc_data->>'criminal_language' is not null) then crdoc_data->>'criminal_language' else null end as criminal_language,
  case when(crdoc_data->>'criminal_image' is not null) then crdoc_data->>'criminal_image' else null end as criminal_image,
  case when(crdoc_data->>'criminal_reward' is not null) then crdoc_data->>'criminal_reward' else null end as criminal_reward,
  case when(crdoc_data->>'criminal_date' is not null) then crdoc_data->>'criminal_date' else null end as criminal_date
   from criminal_document join setting as st on
   st.setting_id=case when((criminal_document.crdoc_data->>'criminal_type')::int is not null) then (criminal_document.crdoc_data->>'criminal_type')::int else null end
   where case when(crdoc_data->>'type'='criminal' is not null) then crdoc_data->>'type'='criminal' else null end and
     crdoc_id=$crdoc_id order by crdoc_id desc;";
return $get_criminal;

	}
 
// 	function viewFugitiveReportDashboard($ofset,$suspects_id){
// 		if($suspects_id){
// 		$where="where case when(crdoc_data->>'type' is not null) then crdoc_data->>'type'
// 		else null end='report' and
// 		case when(crdoc_data->>'status' is not null) then crdoc_data->>'status' else null end='0' and
// 		case when(crdoc_data->>'fugitive_id' is not null) then crdoc_data->>'fugitive_id'
// 		 else null end='$suspects_id'";
// 		}
// 		else{
// 			$where="where case when(crdoc_data->>'type' is not null) then crdoc_data->>'type'
// 			else null end='report' and
// 			case when(crdoc_data->>'status' is not null) then crdoc_data->>'status' else null end='0'
// 			 order by crdoc_id desc limit 10 offset $ofset";
// 		}
// }
  function viewFugitiveReportDashboard($ofset,$suspects_id){
    if($suspects_id){
    $where="where case when(crdoc_data->>'type' is not null) then crdoc_data->>'type'
    else null end='report' and
    case when(crdoc_data->>'status' is not null) then crdoc_data->>'status' else null end='0' and
    case when(crdoc_data->>'fugitive_id' is not null) then crdoc_data->>'fugitive_id'
     else null end='$suspects_id'";
    }
    else{
      $where="where case when(crdoc_data->>'type' is not null) then crdoc_data->>'type'
      else null end='report' and
      case when(crdoc_data->>'status' is not null) then crdoc_data->>'status' else null end='0'
       order by crdoc_id desc limit 10 offset $ofset";
    }
  $get_user="select crdoc_data->>'fugitive_id' as fugitive_id,
  crdoc_data->>'reporter_name' as reporter_name,
  crdoc_data->>'reporter_email' as reporter_email,
  crdoc_data->>'reporter_phone' as reporter_phone,
  crdoc_data->>'detail_crime_reporter' as detail_crime_reporter,
  crdoc_data->>'reported_date' as reported_date,
  crdoc_data->>'status' as status
  from criminal_document ".$where.";";
   return $get_user;
  }
 
	function viewNewCrimeReport($start_date,$end_date,$crime_type){
		if($crime_type=='all' or !$crime_type){
			$where="case when(crdoc_data->>'report_date' is not null) then crdoc_data->>'report_date' else null end  >='$start_date' and
      case when(crdoc_data->>'report_date' is not null) then crdoc_data->>'report_date' else null end <='$end_date'";
		}
		else{
			$where="case when(crdoc_data->>'report_date' is not null) then crdoc_data->>'report_date' else null end  >='$start_date' and
      case when(crdoc_data->>'report_date' is not null) then crdoc_data->>'report_date' else null end <='$end_date' and
			case when(crdoc_data->>'crime_type' is not null) then crdoc_data->>'crime_type' else null end='$crime_type'";
		}
		$get_crime="select case when(crdoc_data->>'report_crime' is not null) then crdoc_data->>'report_crime' else null end as report_crime,
	  case when(crdoc_data->>'contact_name_crime' is not null) then crdoc_data->>'contact_name_crime' else null end as contact_name_crime,
	  case when(crdoc_data->>'contact_phone_crime' is not null) then crdoc_data->>'contact_phone_crime' else null end as contact_phone_crime,
	  case when(crdoc_data->>'accuser_name' is not null) then crdoc_data->>'accuser_name' else null end as accuser_name,
		case when(crdoc_data->>'accuser_photo' is not null) then crdoc_data->>'accuser_photo' else null end as accuser_photo,
	  case when(stcrime.setting_data->>'setting_crime_name' is not null) then stcrime.setting_data->>'setting_crime_name' else null end as crime_type,
	  case when(st.setting_data->>'setting_region_name' is not null) then st.setting_data->>'setting_region_name' else null end as city,
	  case when(crdoc_data->>'subcity' is not null) then crdoc_data->>'subcity' else null end as subcity,
          case when(crdoc_data->>'status' is not null) then crdoc_data->>'status' else null end as status,
	 crdoc_id as crdoc_id,
	  case when(crdoc_data->>'report_date' is not null) then crdoc_data->>'report_date' else null end as report_date
	   from criminal_document
	   join setting st on
	   case when((criminal_document.crdoc_data->>'city')::int is not null) then (criminal_document.crdoc_data->>'city')::int else null end=st.setting_id
	   left join setting as stcrime on
	   case when((criminal_document.crdoc_data->>'crime_type')::int is not null) then (criminal_document.crdoc_data->>'crime_type')::int else null end=stcrime.setting_id
      where case when(crdoc_data->>'type' is not null) then crdoc_data->>'type' else null end ='crime' and (".$where.")
      order by case when(crdoc_data->>'status' is not null) then crdoc_data->>'status' else null end, crdoc_id desc;";
		 return $get_crime;
	}
	function takeSuspectsName($name){
   $name=strtolower($name);
		$where="case when(lower(crdoc_data->>'criminal_name') is not null) then
		lower(crdoc_data->>'criminal_name') else null end  like '%$name%'";
    $get_criminal="select case when(crdoc_data->>'criminal_name' is not null) then
		crdoc_data->>'criminal_name' else null end as criminal_name,
	   crdoc_id as crdoc_id
	 from criminal_document  where case when(crdoc_data->>'type'='criminal' is not null) then
	 crdoc_data->>'type'='criminal' else null end and (".$where.");";
	 return $get_criminal;
}
function viewNewCrimeReportAlert($ofset){
		$get_crime="select case when(crdoc_data->>'report_crime' is not null) then crdoc_data->>'report_crime' else null end as report_crime,
	  case when(crdoc_data->>'contact_name_crime' is not null) then crdoc_data->>'contact_name_crime' else null end as contact_name_crime,
	  case when(crdoc_data->>'contact_phone_crime' is not null) then crdoc_data->>'contact_phone_crime' else null end as contact_phone_crime,
	  case when(crdoc_data->>'accuser_name' is not null) then crdoc_data->>'accuser_name' else null end as accuser_name,
		case when(crdoc_data->>'accuser_photo' is not null) then crdoc_data->>'accuser_photo' else null end as accuser_photo,
	  case when(stcrime.setting_data->>'setting_crime_name' is not null) then stcrime.setting_data->>'setting_crime_name' else null end as crime_type,
	  case when(st.setting_data->>'setting_region_name' is not null) then st.setting_data->>'setting_region_name' else null end as city,
	  case when(crdoc_data->>'subcity' is not null) then crdoc_data->>'subcity' else null end as subcity,
          case when(crdoc_data->>'status' is not null) then crdoc_data->>'status' else null end as status,
	 crdoc_id as crdoc_id,
	  case when(crdoc_data->>'report_date' is not null) then crdoc_data->>'report_date' else null end as report_date
	   from criminal_document
	   join setting st on
	   case when((criminal_document.crdoc_data->>'city')::int is not null) then (criminal_document.crdoc_data->>'city')::int else null end=st.setting_id
	   left join setting as stcrime on
	   case when((criminal_document.crdoc_data->>'crime_type')::int is not null) then (criminal_document.crdoc_data->>'crime_type')::int else null end=stcrime.setting_id
      where case when(crdoc_data->>'type' is not null) then crdoc_data->>'type' else null end ='crime'

		 order by case when(crdoc_data->>'status' is not null) then crdoc_data->>'status' else null end, crdoc_id desc limit 10 offset $ofset;";
		 return $get_crime;
	}
	// function fetchNewcrime($crdoc_id){
	// 	$get_crime="select case when(crdoc_data->>'report_crime' is not null) then crdoc_data->>'report_crime' else null end as report_crime,
	//   case when(crdoc_data->>'contact_name_crime' is not null) then crdoc_data->>'contact_name_crime' else null end as contact_name_crime,
	//   case when(crdoc_data->>'contact_email_crime' is not null) then crdoc_data->>'contact_email_crime' else null end as contact_email_crime,
	//   case when(crdoc_data->>'contact_phone_crime' is not null) then crdoc_data->>'contact_phone_crime' else null end as contact_phone_crime,
	//   case when(crdoc_data->>'accuser_name' is not null) then crdoc_data->>'accuser_name' else null end as accuser_name,
	// 	case when(crdoc_data->>'accuser_photo' is not null) then crdoc_data->>'accuser_photo' else null end as accuser_photo,
	//   case when(crdoc_data->>'crime_type' is not null) then crdoc_data->>'crime_type' else null end as crime_type,
	//   case when(crdoc_data->>'city' is not null) then crdoc_data->>'city' else null end as city,
	//   case when(crdoc_data->>'subcity' is not null) then crdoc_data->>'subcity' else null end as subcity,
 //          case when(crdoc_data->>'status' is not null) then crdoc_data->>'status' else null end as status,
	//  crdoc_id as crdoc_id,
	//   case when(crdoc_data->>'report_date' is not null) then crdoc_data->>'report_date' else null end as report_date
	//    from criminal_document
	//     where case when(crdoc_data->>'type' is not null) then crdoc_data->>'type' else null end ='crime' and crdoc_id=$crdoc_id;";


=======
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
<<<<<<< HEAD
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
=======

  function viewCriminalPosted($ofset){
  $get_criminal="select crdoc_data->>'criminal_name' as criminal_name,
>>>>>>> 985f3f7a903ca11b74eae8fd99c9d3d3fc9280b3
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
<<<<<<< HEAD
  crdoc_data->>'criminal_image' as criminal_image,
  crdoc_data->>'criminal_reward' as criminal_reward,
  crdoc_data->>'criminal_date' as criminal_date
   from criminal_document join setting as st on st.setting_id=(criminal_document.crdoc_data->>'criminal_type')::int
	 where crdoc_data->>'type'='criminal'  and
	 crdoc_data->>'criminal_status'='1' and (".$where.") order by crdoc_id desc limit 10 offset $ofset;";
=======
  crdoc_data->>'criminal_type' as criminal_type,
  crdoc_data->>'criminal_image' as criminal_image,
  crdoc_data->>'criminal_reward' as criminal_reward,
  crdoc_data->>'criminal_date' as criminal_date
   from criminal_document where crdoc_data->>'type'='criminal' and
	 crdoc_data->>'criminal_status'='1' order by crdoc_id desc limit 10 offset $ofset;";
>>>>>>> 985f3f7a903ca11b74eae8fd99c9d3d3fc9280b3
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
>>>>>>> 9e0b8bc0a59448ee068b493e71d9055cf9b2fd60
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
<<<<<<< HEAD
 
=======
>>>>>>> 9e0b8bc0a59448ee068b493e71d9055cf9b2fd60
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
<<<<<<< HEAD
 
		$get_crime="select  case when(crdoc_data->>'comment_email' is not null) then crdoc_data->>'comment_email' else null end as comment_email,
	  case when(crdoc_data->>'comment_message' is not null) then crdoc_data->>'comment_message' else null end as comment_message,
	  case when(crdoc_data->>'comment_date' is not null) then crdoc_data->>'comment_date' else null end as comment_date,
	  case when(crdoc_data->>'status' is not null) then crdoc_data->>'status' else null end as status,
	  case when(crdoc_data->>'type' is not null) then crdoc_data->>'type' else null end  as type
	   from criminal_document
	   where case when(crdoc_data->>'type' is not null) then crdoc_data->>'type' else null end='comment' and crdoc_id=$crdoc_id";

=======
>>>>>>> 9e0b8bc0a59448ee068b493e71d9055cf9b2fd60
		$get_crime="select crdoc_data->>'comment_email' as comment_email,
	  crdoc_data->>'comment_message' as comment_message,
	  crdoc_data->>'comment_date' as comment_date,
	  crdoc_data->>'status' as status,
	  crdoc_data->>'type' as type
	   from criminal_document where crdoc_data->>'type'='comment' and crdoc_id=$crdoc_id";
<<<<<<< HEAD
 
=======
>>>>>>> 9e0b8bc0a59448ee068b493e71d9055cf9b2fd60
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
<<<<<<< HEAD
 
		$get_comment="select  case when(crdoc_data->>'comment_email' is not null) then crdoc_data->>'comment_email' else null end as comment_email,
	  case when(crdoc_data->>'comment_message' is not null) then crdoc_data->>'comment_message' else null end as comment_message,
	  case when(crdoc_data->>'comment_date' is not null) then crdoc_data->>'comment_date' else null end as comment_date,
	  case when(crdoc_data->>'status' is not null) then crdoc_data->>'status' else null end as status,
	  case when(crdoc_data->>'type' is not null) then crdoc_data->>'type' else null end  as type,
		crdoc_id,
	  case when(crdoc_data->>'comment_date' is not null) then crdoc_data->>'comment_date' else null end  as comment_date
	   from criminal_document
	   where case when(crdoc_data->>'type' is not null) then crdoc_data->>'type' else null end='comment'
		  order by case when(crdoc_data->>'status' is not null) then crdoc_data->>'status' else null end,crdoc_id desc limit 10 offset $ofset;";

=======
>>>>>>> 9e0b8bc0a59448ee068b493e71d9055cf9b2fd60
		$get_comment="select crdoc_data->>'comment_message' as comment_message,
	  crdoc_data->>'comment_email' as comment_email,
	  crdoc_data->>'comment_date' as comment_date,
	  crdoc_id as crdoc_id,
	  crdoc_data->>'status' as status
	   from criminal_document where crdoc_data->>'type'='comment' order by crdoc_data->>'status',crdoc_id desc limit 10 offset $ofset;";
<<<<<<< HEAD
 
=======
>>>>>>> 9e0b8bc0a59448ee068b493e71d9055cf9b2fd60
		 return $get_comment;
	}
	function allCrimeReportCount()
	{
<<<<<<< HEAD
	 $count="select count(crdoc_id) as crime_count from criminal_document
    where date_part('year',case when((crdoc_data->>'report_date')::date is not null) then (crdoc_data->>'report_date')::date else null end)=date_part('year',NOW()) and
    case when(crdoc_data->>'type' is not null) then crdoc_data->>'type' else null end='crime';";
    return $count;
=======
		$count="select count(crdoc_id) as crime_count from criminal_document
		where date_part('year',(crdoc_data->>'report_date')::date)=date_part('year',NOW()) and
		crdoc_data->>'type'='crime';";
		return $count;
>>>>>>> 9e0b8bc0a59448ee068b493e71d9055cf9b2fd60
	}
	function allCrimeReportCountPagination()
	{
		$count="select count(crdoc_id) as crime_count from criminal_document
<<<<<<< HEAD
 
		where case when(crdoc_data->>'type' is not null) then crdoc_data->>'type' else null end='crime';";
 
=======
		where crdoc_data->>'type'='crime';";
>>>>>>> 9e0b8bc0a59448ee068b493e71d9055cf9b2fd60
		return $count;
	}
	function allCommentCountPagination()
	{
		$count="select count(crdoc_id) as comment_count from criminal_document
<<<<<<< HEAD
 
		where case when(crdoc_data->>'type' is not null) then crdoc_data->>'type' else null end='comment';";
 
=======
		where crdoc_data->>'type'='comment';";
>>>>>>> 9e0b8bc0a59448ee068b493e71d9055cf9b2fd60
		return $count;
	}
	function allCommentCount()
	{
		$count="select count(crdoc_id) as comment_count from criminal_document
<<<<<<< HEAD
 
		where date_part('year',case when((crdoc_data->>'comment_date')::date is not null) then (crdoc_data->>'comment_date')::date else null end)=date_part('year',NOW()) and
		 case when(crdoc_data->>'type' is not null) then crdoc_data->>'type' else null end='comment';";
 
=======
		where date_part('year',(crdoc_data->>'comment_date')::date)=date_part('year',NOW()) and
		 crdoc_data->>'type'='comment';";
>>>>>>> 9e0b8bc0a59448ee068b493e71d9055cf9b2fd60
		return $count;
	}
	function countFugitiveReport()
	{
		$count="select count(crdoc_id) as report_count from criminal_document
<<<<<<< HEAD
 
		where case when(crdoc_data->>'type' is not null) then crdoc_data->>'type' else null end='report';";
		return $count;
	}
function countNewCrime(){
	$get="select count(crdoc_id) as crime_count from criminal_document
	where  case when(crdoc_data->>'type' is not null) then crdoc_data->>'type' else null end ='crime' and
	case when(crdoc_data->>'status' is not null) then crdoc_data->>'status' else null end='0'";
	return $get;
}
function unreadComment(){
	$get="
	select count(crdoc_id) as comment_count from criminal_document
	where  case when(crdoc_data->>'type' is not null) then crdoc_data->>'type' else null end='comment' and
	 case when(crdoc_data->>'status' is not null) then crdoc_data->>'status' else null end='0';";
	return $get;
}
  function countWantedList()
  {
    $count="select count(1) filter(where case when(crdoc_data->>'criminal_status' is not null) then crdoc_data->>'criminal_status' else null end='0') as arrested_count,
      count(1) filter(where case when(crdoc_data->>'criminal_status' is not null) then crdoc_data->>'criminal_status' else null end='1') as posted_count from criminal_document
     where case when(crdoc_data->>'type' is not null)then crdoc_data->>'type' else null end='criminal';";
    return $count;
  }
  	function countWantedListMostWanted()
	{
		$count="select  count(1) filter(where case when(crdoc_data->>'criminal_status' is not null) then crdoc_data->>'criminal_status' else null end='1') as mw_count from criminal_document
		where case when(crdoc_data->>'type' is not null) then crdoc_data->>'type' else null end='criminal' and 
    case when(crdoc_data->'criminal_reward' is not null) then crdoc_data->'criminal_reward' else null end is not null;";
		return $count;
	}


	function allCriminalCount()
	{
		$count="select count(crdoc_id) as criminal_count from criminal_document
 
		where date_part('year',case when((crdoc_data->>'criminal_date')::date is not null) then (crdoc_data->>'criminal_date')::date else null end)=date_part('year',NOW()) and
		case when(crdoc_data->>'type' is not null) then crdoc_data->>'type' else null end='criminal';";
		return $count;
	}

	public function get_no_crimes()
  {
 
    $query ="SELECT count(case when((criminal_document.crdoc_data->> 'city')::int is not null)
            then (criminal_document.crdoc_data->> 'city')::int else null end),
              case when(st.setting_data->>'setting_region_name' is not null) then st.setting_data->>'setting_region_name' else null end as city
              from criminal_document join setting as st on st.setting_id=case when((criminal_document.crdoc_data->> 'city')::int is not null)
            then (criminal_document.crdoc_data->> 'city')::int else null end
               where case when(crdoc_data->>'type' is not null) then crdoc_data->>'type' else null end ='crime' and
                date_part('year',case when((crdoc_data->>'report_date')::date is not null) then (crdoc_data->>'report_date')::date else null end)=date_part('year',NOW())
              group by  city;";

 
=======
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
<<<<<<< HEAD


  public function get_no_crimes()
  {
    $query ="SELECT
              count(crdoc_data->> 'crime_type') ,
              crdoc_data->>'city' as city
              from criminal_document where crdoc_data->>'type' ='crime'
              group by  city";
>>>>>>> 9e0b8bc0a59448ee068b493e71d9055cf9b2fd60

    $b = $this->db->query($query);

    return $b->result_array();
  }

  public function get_crime_category()
  {
<<<<<<< HEAD
 
    $query ="SELECT count(st.setting_id) ,
            case when(st.setting_data->>'setting_crime_name' is not null) then st.setting_data->>'setting_crime_name' else null end as crime_type
            from criminal_document
            join setting as st on st.setting_id=case when((criminal_document.crdoc_data->> 'crime_type')::int is not null)
            then (criminal_document.crdoc_data->> 'crime_type')::int else null end
             where case when(crdoc_data->>'type' ='crime' is not null) then crdoc_data->>'type' ='crime' else null end and
             case when(crdoc_data->> 'crime_type' is not null) then crdoc_data->> 'crime_type' else null end  != '' and 
              date_part('year',case when((crdoc_data->>'report_date')::date is not null) then (crdoc_data->>'report_date')::date else null end)=date_part('year',NOW())

            group by  crime_type;";

 
=======
    $query ="SELECT 
            count(crdoc_data->> 'crime_type') ,
            crdoc_data->>'crime_type' as crime_type 
            from criminal_document where crdoc_data->>'type' ='crime' and crdoc_data->> 'crime_type' != ''
            group by  crime_type";
>>>>>>> 9e0b8bc0a59448ee068b493e71d9055cf9b2fd60

    $b = $this->db->query($query);

    return $b->result_array();
  }
<<<<<<< HEAD
 
  function dashboardByGenderWantedArrested(){
$get="select count(1) filter(where case when(crdoc_data->>'criminal_gender' is not null) then crdoc_data->>'criminal_gender' else null end='Male') as male,
count(1) filter(where case when(crdoc_data->>'criminal_gender' is not null) then crdoc_data->>'criminal_gender' else null end='Female') as female
 from criminal_document where case when (crdoc_data->>'type' is not null) then crdoc_data->>'type' else null end='criminal' and
   date_part('year',case when((crdoc_data->>'criminal_date')::date is not null) then (crdoc_data->>'criminal_date')::date else null end)=date_part('year',NOW());";
 return $get;
  }
  function dashboardByAge(){
$get=" select count(1) filter(where case when(crdoc_data->>'criminal_birthdate' is not null) then crdoc_data->>'criminal_birthdate' else null end='10-20 Years') as years_10_20,
 count(1) filter(where case when(crdoc_data->>'criminal_birthdate' is not null) then crdoc_data->>'criminal_birthdate' else null end='20-30 Years') as years_20_30,
 count(1) filter(where case when(crdoc_data->>'criminal_birthdate' is not null) then crdoc_data->>'criminal_birthdate' else null end='30-40 Years') as years_30_40,
 count(1) filter(where case when(crdoc_data->>'criminal_birthdate' is not null) then crdoc_data->>'criminal_birthdate' else null end='40-50 Years') as years_40_50,
 count(1) filter(where case when(crdoc_data->>'criminal_birthdate' is not null) then crdoc_data->>'criminal_birthdate' else null end='50-60 Years') as years_50_60,
 count(1) filter(where case when(crdoc_data->>'criminal_birthdate' is not null) then crdoc_data->>'criminal_birthdate' else null end='60-70 Years') as years_60_70,
 count(1) filter(where case when(crdoc_data->>'criminal_birthdate' is not null) then crdoc_data->>'criminal_birthdate' else null end='70-80 Years') as years_70_80,
 count(1) filter(where case when(crdoc_data->>'criminal_birthdate' is not null) then crdoc_data->>'criminal_birthdate' else null end='Above 80 Years') as years_above_80
 from criminal_document where case when (crdoc_data->>'type' is not null) then crdoc_data->>'type' else null end='criminal' and
  date_part('year',case when((crdoc_data->>'criminal_date')::date is not null) then (crdoc_data->>'criminal_date')::date else null end)=date_part('year',NOW());";
 return $get;
  }
  function dashboardSuspectsByCrimeType(){
    $get=" SELECT count(st.setting_id) ,
case when(st.setting_data->>'setting_crime_name' is not null) then st.setting_data->>'setting_crime_name' else null end as crime_type
from criminal_document
join setting as st on st.setting_id=case when((criminal_document.crdoc_data->> 'criminal_type')::int is not null)
then (criminal_document.crdoc_data->> 'criminal_type')::int else null end
where case when(crdoc_data->>'type' ='criminal' is not null) then crdoc_data->>'type' ='criminal' else null end  and
 date_part('year',case when((crdoc_data->>'criminal_date')::date is not null) then (crdoc_data->>'criminal_date')::date else null end)=date_part('year',NOW())
group by  crime_type;";
return $get;
  }


 
 
=======
=======
>>>>>>> 985f3f7a903ca11b74eae8fd99c9d3d3fc9280b3
>>>>>>> 9e0b8bc0a59448ee068b493e71d9055cf9b2fd60
}
?>
