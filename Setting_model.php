<?php
class Setting_model extends MY_Model {
	public function __construct()
	{
         parent::__construct();
        $this->table       = 'setting';
        $this->primary_key = 'setting_id';
	}

  function getCrimeType(){
		$get_setting="select setting_data->>'setting_crime_name' as setting_crime_name,
		setting_data->>'setting_crime_description' as setting_crime_description,
		setting_data->>'setting_type' as setting_type,
		setting_data->>'setting_status' as setting_status,
		setting_id as setting_id,
		setting_data->>'setting_registered_date' as setting_registered_date
		 from criminal_document where crdoc_data->>'setting_type'='crime' and crdoc_data->>'setting_status'='1';";
		 return $get_setting;
  }
	function registerCrimeType(){
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
  function updateCrimeType($get,$values,$status){
		$data=array(
			'setting_crime_name'=>$get[0]->setting_crime_name,
			'setting_crime_description'=>$get[0]->setting_crime_description,
			'setting_type'=>$get[0]->setting_type,
			'setting_status'=>($status=='1' or $status=='0'?$status:$get[0]->setting_status),
			'setting_registered_date'=>$get[0]->setting_registered_date
		);
	$data=json_encode($data);
	$update=$this->db->where('setting_id',$values['setting_id'])->update('setting',array('setting_data'=>$data));
	return $update;
  }

  function getSingleCrimeType($setting_id){
		$get_setting="select setting_data->>'setting_crime_name' as setting_crime_name,
		setting_data->>'setting_crime_description' as setting_crime_description,
		setting_data->>'setting_type' as setting_type,
		setting_data->>'setting_status' as setting_status,
		setting_id as setting_id,
		setting_data->>'setting_registered_date' as setting_registered_date
		 from criminal_document where setting_id=$setting_id;";
		 return $get_setting;
  }
  function updateRegion($get,$values,$status){
		$data=array(
			'setting_region_name'=>$get[0]->setting_region_name,
			'setting_city_or_region'=>$get[0]->setting_city_or_region,
			'setting_type'=>$get[0]->setting_type,
			'setting_status'=>($status=='1' or $status=='0'?$status:$get[0]->setting_status),
			'setting_registered_date'=>$get[0]->setting_registered_date
		);
	$data=json_encode($data);
	$update=$this->db->where('setting_id',$values['setting_id'])->update('setting',array('setting_data'=>$data));
  return $update;
  }
  function registerRegion(){
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
		$get_setting="select setting_data->>'setting_region_name' as setting_region_name,
		setting_data->>'setting_city_or_region' as setting_city_or_region,
		setting_data->>'setting_type' as setting_type,
		setting_data->>'setting_status' as setting_status,
		setting_id as setting_id,
		setting_data->>'setting_registered_date' as setting_registered_date
		 from criminal_document where crdoc_data->>'setting_type'='region' and crdoc_data->>'setting_status'='1';";
		 return $get_setting;
  }
  function getSingleRegion($setting_id){
		$get_setting="select setting_data->>'setting_region_name' as setting_region_name,
		setting_data->>'setting_city_or_region' as setting_city_or_region,
		setting_data->>'setting_type' as setting_type,
		setting_data->>'setting_status' as setting_status,
		setting_id as setting_id,
		setting_data->>'setting_registered_date' as setting_registered_date
		 from criminal_document where setting_id=$setting_id;";
		 return $get_setting;
  }

}
?>
