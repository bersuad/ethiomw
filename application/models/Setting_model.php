<?php
class Setting_model extends MY_Model {
	public function __construct()
	{
         parent::__construct();
        $this->table       = 'setting';
        $this->primary_key = 'setting_id';
	}

  function getCrimeType(){
		$get_setting="select case when(setting_data->>'setting_crime_name' is not null) then setting_data->>'setting_crime_name'  else null end as setting_crime_name ,
		case when(setting_data->>'setting_crime_description' is not null) then setting_data->>'setting_crime_description' else null end as  setting_crime_description,
		case when(setting_data->>'setting_type' is not null) then setting_data->>'setting_type' else null end as setting_type,
		case when(setting_data->>'setting_status' is not null) then setting_data->>'setting_status' else null end as setting_status,
		setting_id as setting_id,
		case when (setting_data->>'setting_type' is not null) then setting_data->>'setting_type' else null end as setting_type,
		case when(setting_data->>'setting_registered_date' is not null) then setting_data->>'setting_registered_date' else null end as setting_registered_date
		 from setting
		 where case when (setting_data->>'setting_type' is not null) then setting_data->>'setting_type' else null end ='crime'  and
		 case when(setting_data->>'setting_status' is not null) then setting_data->>'setting_status' else null end ='1' order by setting_id desc;";
		 return $get_setting;
  }

	function getCrimeTypeSuspend(){
		$get_setting="select case when(setting_data->>'setting_crime_name' is not null) then setting_data->>'setting_crime_name'  else null end as setting_crime_name ,
		case when(setting_data->>'setting_crime_description' is not null) then setting_data->>'setting_crime_description' else null end as  setting_crime_description,
		case when(setting_data->>'setting_type' is not null) then setting_data->>'setting_type' else null end as setting_type,
		case when(setting_data->>'setting_status' is not null) then setting_data->>'setting_status' else null end as setting_status,
		setting_id as setting_id,
		case when (setting_data->>'setting_type' is not null) then setting_data->>'setting_type' else null end as setting_type,
		case when(setting_data->>'setting_registered_date' is not null) then setting_data->>'setting_registered_date' else null end as setting_registered_date
		 from setting
		 where case when (setting_data->>'setting_type' is not null) then setting_data->>'setting_type' else null end ='crime'  and
		 case when(setting_data->>'setting_status' is not null) then setting_data->>'setting_status' else null end ='0' order by setting_id desc;";
		 return $get_setting;
  }
	function registerCrimeType($values){
		$data=array(
			'setting_crime_name'=>$values['setting_crime_name'],
			'setting_crime_description'=>$values['setting_crime_description'],
			'setting_type'=>'crime',
			'setting_status'=>'1',
			'setting_registered_date'=>date('d-m-Y H:i')
		);
	$data=json_encode($data);
	$register=$this->db->insert('setting',array('setting_data'=>$data));
	return $register;
  }
  function updateCrimeType($get,$status,$id){
		$data=array(
			'setting_crime_name'=>$get[0]->setting_crime_name,
			'setting_crime_description'=>$get[0]->setting_crime_description,
			'setting_type'=>$get[0]->setting_type,
			'setting_status'=>$status,
			'setting_registered_date'=>$get[0]->setting_registered_date
		);
	$data=json_encode($data);
	$update=$this->db->where('setting_id',$id)->update('setting',array('setting_data'=>$data));
	return $update;
  }

  function getSingleCrimeType($setting_id){
		$get_setting="select case when(setting_data->>'setting_crime_name' is not null) then setting_data->>'setting_crime_name'  else null end as setting_crime_name ,
		case when(setting_data->>'setting_crime_description' is not null) then setting_data->>'setting_crime_description' else null end as  setting_crime_description,
		case when(setting_data->>'setting_type' is not null) then setting_data->>'setting_type' else null end as setting_type,
		case when(setting_data->>'setting_status' is not null) then setting_data->>'setting_status' else null end as setting_status,
		setting_id as setting_id,
		case when (setting_data->>'setting_type' is not null) then setting_data->>'setting_type' else null end as setting_type,
		case when(setting_data->>'setting_registered_date' is not null) then setting_data->>'setting_registered_date' else null end as setting_registered_date
		 from setting where setting_id=$setting_id;";
		 return $get_setting;
  }
  function updateRegion($get,$status,$id){
		$data=array(
			'setting_region_name'=>$get[0]->setting_region_name,
			'setting_city_or_region'=>$get[0]->setting_city_or_region,
			'setting_type'=>$get[0]->setting_type,
			'setting_status'=>$status,
			'setting_registered_date'=>$get[0]->setting_registered_date
		);
	$data=json_encode($data);
	$update=$this->db->where('setting_id',$id)->update('setting',array('setting_data'=>$data));
  return $update;
  }
  function registerRegion($values){
		$data=array(
			'setting_region_name'=>$values['setting_region_name'],
			'setting_city_or_region'=>$values['setting_city_or_region'],
			'setting_type'=>'region',
			'setting_status'=>'1',
			'setting_registered_date'=>date('d-m-Y H:i')
		);
	$data=json_encode($data);
	$register=$this->db->insert('setting',array('setting_data'=>$data));
  return $register;
  }
  function getRegion(){
		$get_setting="select case when(setting_data->>'setting_region_name' is not null) then  setting_data->>'setting_region_name' else null end as setting_region_name,
		case when(setting_data->>'setting_city_or_region' is not null) then setting_data->>'setting_city_or_region' else null end as setting_city_or_region,
		case when(setting_data->>'setting_type' is not null) then setting_data->>'setting_type' else null end as setting_type,
		case when(setting_data->>'setting_status' is not null) then setting_data->>'setting_status' else null end as setting_status,
		setting_id as setting_id,
		case when(setting_data->>'setting_registered_date' is not null) then setting_data->>'setting_registered_date' else null end as setting_registered_date
		 from setting
		 where case when(setting_data->>'setting_type' is not null) then setting_data->>'setting_type' else null end='region' and
		 case when(setting_data->>'setting_status' is not null) then setting_data->>'setting_status' else null end ='1' order by setting_id desc;";
		 return $get_setting;
  }
  function getRegionSuspend(){
		$get_setting="select case when(setting_data->>'setting_region_name' is not null) then  setting_data->>'setting_region_name' else null end as setting_region_name,
		case when(setting_data->>'setting_city_or_region' is not null) then setting_data->>'setting_city_or_region' else null end as setting_city_or_region,
		case when(setting_data->>'setting_type' is not null) then setting_data->>'setting_type' else null end as setting_type,
		case when(setting_data->>'setting_status' is not null) then setting_data->>'setting_status' else null end as setting_status,
		setting_id as setting_id,
		case when(setting_data->>'setting_registered_date' is not null) then setting_data->>'setting_registered_date' else null end as setting_registered_date
		 from setting
		 where case when(setting_data->>'setting_type' is not null) then setting_data->>'setting_type' else null end='region' and
		 case when(setting_data->>'setting_status' is not null) then setting_data->>'setting_status' else null end ='0' order by setting_id desc;";
		 return $get_setting;
  }
  function getSingleRegion($setting_id){
		$get_setting="select case when(setting_data->>'setting_region_name' is not null) then  setting_data->>'setting_region_name' else null end as setting_region_name,
		case when(setting_data->>'setting_city_or_region' is not null) then setting_data->>'setting_city_or_region' else null end as setting_city_or_region,
		case when(setting_data->>'setting_type' is not null) then setting_data->>'setting_type' else null end as setting_type,
		case when(setting_data->>'setting_status' is not null) then setting_data->>'setting_status' else null end as setting_status,
		setting_id as setting_id,
		case when(setting_data->>'setting_registered_date' is not null) then setting_data->>'setting_registered_date' else null end as setting_registered_date
		 from setting where setting_id=$setting_id;";
		 return $get_setting;
  }

}
?>
