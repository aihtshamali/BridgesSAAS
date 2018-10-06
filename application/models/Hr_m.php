<?php
class Hr_m extends CI_Model {


	public function get_cities(){
		$states = array('2723', '2724', '2725', '2726', '2727', '2728', '2729');
		$this->db->select('id,name');
		$this->db->where_in('state_id', $states);
		$query = $this->db->get('bm_cities')->result();
		foreach ($query as $row) {
          $cities[$row->id] = $row->name;
      }
      return $cities;
	}
	public function newget_users()
	{
		$sql = "SELECT * FROM `newba_users`";
		$query = $this->db->query($sql);
		return $result = $query->result();
	}
	public function insertusernew($data)
	{
		
	}
	public function insertUser($data){
		//var_dump($data); 
		$this->db->insert('bm_user_details', $data);
		$id = $this->db->insert_id();
		return $id;
	}
	public function getJobDescription($id){
		$this->db->where('userid',$id);
		return $this->db->get('bm_user_description')->row();
	}
	public function getrank()
	{	

		$rank = $this->db->get('bm_ranks')->result(); 	
		return $rank;
	}
	
	public function getcluster()
	{	//var_dump($id);
		
		$cluster = $this->db->get('bm_cluster')->result(); 
		
		return $cluster;
	}
	public function insertCluster($data)
	{	//var_dump($id);
		
		 $this->db->insert('bm_cluster',$data); 
		
	}
	public function insertSocial($data)
	{	//var_dump($id);
		
		 $this->db->insert('bm_social_platforms',$data); 
		
	}
	public function updateSocial($id,$data)
	{	//var_dump($id);
		$this->db->where('id',$id);
		 $this->db->update('bm_social_platforms',$data); 
		
	}
	public function getSocial($id)
	{	
		// print_r($id);
		$this->db->where('id',$id);
		return $this->db->get('bm_social_platforms')->row(); 
		
	}
	public function deleteSocial($id,$data)
	{	//var_dump($id);
		$this->db->where('id',$id);
		 $this->db->delete('bm_social_platforms'); 
		
	}
	
	public function getdesignation()
	{	//var_dump($id);
		
		$designation = $this->db->get('bm_designation')->result(); 
		
		return $designation;
	}
	
	public function NewSocialAssigned($data){
		$this->db->insert('bm_social_passwords',$data);
	}
	public function UpdateSocialAssigned($id,$data){
		$this->db->where('id',$id);
		$this->db->update('bm_social_passwords',$data);
	}
	public function DeleteSocialAssigned($id){
		$this->db->where('id',$id);
		$this->db->delete('bm_social_passwords');
	}
	public function SocialAssigned(){
		$this->db->select('bm_social_passwords.*,bm_social_platforms.name as platform, newba_users.fname as user');
		$this->db->join('newba_users','bm_social_passwords.assigned_to=newba_users.id','left');
		$this->db->join('bm_social_platforms','bm_social_passwords.social_platform_id=bm_social_platforms.id','left');
		return	$this->db->get('bm_social_passwords')->result();
	}
	public function getSocialAssigned($id){
		$this->db->select('bm_social_passwords.*,bm_social_platforms.name as platform, newba_users.fname as user');
		$this->db->where('bm_social_passwords.id',$id);
		$this->db->join('newba_users','bm_social_passwords.assigned_to=newba_users.id','left');
		$this->db->join('bm_social_platforms','bm_social_passwords.social_platform_id=bm_social_platforms.id','left');
	    return	$this->db->get('bm_social_passwords')->row();
	}
	public function getUserSocialAssigned($id){
		$this->db->select('bm_social_passwords.*,bm_social_platforms.name as platform, newba_users.fname as user');
		$this->db->where('bm_social_passwords.assigned_to',$id);
		$this->db->join('newba_users','bm_social_passwords.assigned_to=newba_users.id','left');
		$this->db->join('bm_social_platforms','bm_social_passwords.social_platform_id=bm_social_platforms.id','left');
	    return	$this->db->get('bm_social_passwords')->result();
	}
	public function getSocialPlatforms(){
		return $this->db->get('bm_social_platforms')->result();
	}
	public function getActiveSocialPlatforms(){
		$this->db->where('status','1');
		return $this->db->get('bm_social_platforms')->result();
	}
	public function get_user($id)
	{	//var_dump($id);
		$this->db->select('userid');
		$this->db->where('id', $id);
		$userid = $this->db->get('bm_user_details')->result(); 
		$userid = $userid[0];
		$id = $userid->userid;
		return $id;
	}
	public function updateLevel($data,$id){
		$this->db->where('id',$id);
			$this->db->set('level_name',$data);
			return $this->db->update('bm_levels');	
	}
	public function updateposition($data,$id){
		$this->db->where('id',$id);
			$this->db->set('name',$data);
			return $this->db->update('bm_positions');	
	}
	public function updateSalary($data,$id){
		$this->db->where('id',$id);
			return $this->db->update('bm_positions',$data);	
	}
	public function updatecluster($data,$id){
		$this->db->where('id',$id);
			$this->db->set('name',$data);
			return $this->db->update('bm_cluster');	
	}



	public function insert_employee_profile($data){
		return $this->db->insert('bm_users_details', $data);
	}

	public function insert_work_exp($data3){
		return $this->db->insert('bm_users_experience', $data3);
	}

	public function insert_edu($data4){
		return $this->db->insert('bm_users_education', $data4);
	}

	public function insert_skills($data5){
		return $this->db->insert('bm_users_skills', $data5);
	}
	public function insert_certifications($data6)
	{
		return $this->db->insert('bm_users_certifications', $data6);
	}

	public function insert_why($data7){
		return $this->db->insert('bm_users_others', $data7);
	}

	public function insert_emergency_contact($data)
	{
		return $this->db->insert('bm_users_emergency_person', $data);
	}

	public function insert_organization_info($data){
		return $this->db->insert('bm_users_org_info', $data);
	}

	public function emp_profile(){
		$this->db->select('*');
		$this->db->from('bm_users_details');
		$this->db->join('ba_users','ba_users.id=bm_users_details.userid');
		$this->db->where('ba_users.status', 1);
		return $emp_profile = $this->db->get()->result();
	}

	public function emp_deactive()
	{
		return $emp_deactive = $this->db->get('bm_users_details')->result();
	}

	public function emp_profile1($userid){
		// $this->db->select('name,phone,gender,maritalstatus,dob,email,city,country,nationalities,numofdep,website,careerobj,jobobj,address');
		$this->db->where('userid',$userid);
		return $emp_profile1 = $this->db->get('bm_users_details')->result();
	}

	public function work_exp($userid){
		$this->db->where('userid', $userid);
		return $work_exp = $this->db->get('bm_users_experience')->result();
	}

	public function education($userid){
		$this->db->where('userid', $userid);
		return $education = $this->db->get('bm_users_education')->result();
	}

	public function skills($userid)
	{
		$this->db->where('userid', $userid);
		return $skills =$this->db->get('bm_users_skills')->result();
	}

	public function certification($userid)
	{
		$this->db->where('userid', $userid);
		return $certification = $this->db->get('bm_users_certifications')->result();
	}

	public function hobbies($userid)
	{
		$this->db->where('userid', $userid);
		return $hobbies = $this->db->get('bm_users_others')->result();
	}

	public function org_info($userid)
	{
		$this->db->where('userid', $userid);
		return $org_info = $this->db->get('bm_users_org_info')->result();
	}
	public function getuser($userid)
	{
		$this->db->where('id', $userid);
		return $org_info = $this->db->get('ba_users')->result();
	}
	public function newgetuser($userid)
	{	
		// $this->db->select('newba_users.*');
		$this->db->where('id', $userid);
		return $this->db->get('newba_users')->result();
	}
	
	public function updatenewbausers($userid,$data)
	{
	$this->db->where('id', $userid);
		return $this->db->update('newba_users',$data);
	}
	public function emergency_contact($userid)
	{
		$this->db->where('userid', $userid);
		return $emergency_contact = $this->db->get('bm_users_emergency_person')->result();
	}


	public function update_employee_profile($emp,$userid)
	{
		$user = $this->db->where('userid', $userid)->get('bm_users_details')->result();

		if(count($user) > 0){
			$this->db->where('userid', $userid);
		return $this->db->update('bm_users_details', $emp);
		}
		else 
		{
		 return $this->db->insert('bm_users_details', $emp);
		}
	}

	public function update_work_exp($work_exp,$userid)
	{
		$user = $this->db->where('userid', $userid)->get('bm_users_experience')->result();
		if(count($user) > 0){
		$this->db->where('userid', $userid);
		return $this->db->update(' bm_users_experience',$work_exp);
		}
		else 
		{
		 return	$this->db->insert('bm_users_experience', $work_exp);
		}
	}

	public function update_edu($edu,$userid)
	{
		$user = $this->db->where('userid', $userid)->get('bm_users_education')->result();
		if(count($user) > 0){
			$this->db->where('userid', $userid);
		return	$this->db->update('bm_users_education', $edu);
		}
		else 
		{
		 return	$this->db->insert('bm_users_education', $edu);	
		}
	}

	public function update_skills($skills, $userid)
	{
		$user = $this->db->where('userid', $userid)->get('bm_users_skills')->result();
		 if(count($user)){
		$this->db->where('userid', $userid);
		return $this->db->update('bm_users_skills',$skills);
		}
		else 
		{
		 return	$this->db->insert('bm_users_skills', $skills);
		}
	}
	public function update_certifications($userid,$cert)
	{
		$user = $this->db->where('userid', $userid)->get('bm_users_certifications')->result();
		 if(count($user)){
		$this->db->where('userid', $userid);
		return $this->db->update('bm_users_certifications',$cert);
		}
		else 
		{
		 return	$this->db->insert('bm_users_certifications', $cert);
		}
	}

	public function update_hobs($userid,$hob_ref_why){
		$user = $this->db->where('userid', $userid)->get('bm_users_others')->result();
		 if(count($user)){
		$this->db->where('userid', $userid);
		return $this->db->update('bm_users_others',$hob_ref_why);
		}
		else 
		{
		 return	$this->db->insert('bm_users_others', $hob_ref_why);
		}
	}

	public function update_organization_info($org_info,$userid)
	{
		$user = $this->db->where('userid', $userid)->get('bm_users_org_info')->result();
		 if(count($user)){
		$this->db->where('userid', $userid);
		return $this->db->update('bm_users_org_info',$org_info);
		}
		else {
			return $this->db->insert('bm_users_org_info', $org_info);
		}
	}

	public function update_emergency_contact($emgr,$userid)
	{

		$user = $this->db->where('userid', $userid)->get('bm_users_emergency_person')->result();
		 if(count($user)){
		$this->db->where('userid', $userid);
		return $this->db->update('bm_users_emergency_person',$emgr);
		}
		else {
			return $this->db->insert('bm_users_emergency_person', $emgr);
		}
	}
// personal hash
	public function hash($string){
		return hash('sha512', $string . config_item('encryption_key'));
	}

	function getEmployeeInfo($active=NULL){
		if (!isset($active)) {
			$active = 1;
		}
			$this->db->select('bm_user_details.*, bm_ranks.name as rankn , bm_cluster.name as clustern ,bm_designation.name as desn, bm_projects.project_title as pro, bm_levels.level_name as lev');

			$this->db->join('bm_cluster','bm_user_details.clusterid=bm_cluster.id');
			$this->db->join('bm_ranks','bm_user_details.rankid=bm_ranks.id');
			$this->db->join('bm_designation','bm_user_details.designationid=bm_designation.id');
			$this->db->where('status', $active);
		return $this->db->get('bm_user_details')->result();
	}

	public function getEmployee($userid)
	{
		$this->db->where('userid', $userid);
		$user = $this->db->get('bm_user_details')->row();
		return $user;
	}
	public function get_user_designation($userid)
	{	
		$this->db->select('bm_levels.level_name,bm_user_description.*');
		$this->db->join('bm_levels','bm_user_description.level_id=bm_levels.id','left');
		$this->db->where('bm_user_description.userid',$userid);
		return $this->db->get('bm_user_description')->row();
	}
	public function getEmployeePromotion($id){
		$this->db->select('newbm_user_details.userid as userid,newbm_user_details.project_location,newbm_user_details.actual_salary,
			bm_user_description.position_id,bm_user_description.cluster_id,bm_user_description.id as user_description_id,bm_user_description.level_id,
			newbm_user_details.job_title,bm_user_description.project_id,
			newbm_user_details.time_in,newbm_user_details.time_out,newbm_user_details.break_in,newbm_user_details.break_out,
			newbm_user_details.paperwork_share,newbm_user_details.remarks');
		$this->db->join('bm_user_description','bm_user_description.id=newbm_user_details.user_description_id','left');
		$this->db->where('newbm_user_details.userid',$id);	
		return $this->db->get('newbm_user_details')->row_array();
	}
	public function getEmployeeReOnboarding($id){
		$this->db->select('newbm_user_details.userid as userid,newbm_user_details.project_location,newbm_user_details.hired_on,newbm_user_details.actual_salary,
			bm_user_description.position_id,bm_user_description.cluster_id,bm_user_description.id as user_description_id,bm_user_description.level_id,
			newbm_user_details.job_title,bm_user_description.project_id,
			newbm_user_details.time_in,newbm_user_details.time_out,newbm_user_details.break_in,newbm_user_details.break_out,
			newbm_user_details.paperwork_share,newbm_user_details.remarks');
		$this->db->join('bm_user_description','bm_user_description.id=newbm_user_details.user_description_id','left');
		$this->db->where('newbm_user_details.userid',$id);	
		return $this->db->get('newbm_user_details')->row_array();
	}
	public function AddToPromotionHistory($data){
		$this->db->insert('promotion_history',$data);
	}
	public function getexit_procedureDate($id){
		$this->db->select('date_out');
		$this->db->where('userid',$id);
		return $this->db->get('bm_exit_details')->row();
	}
	public function getOnboardById($id){
		$this->db->where('userid',$id);
		return $this->db->get('onboarding_history')->row();	
	}
	public function AddToOnboardingHistory($data,$id){
		$this->db->insert('onboarding_history',$data);
		$this->db->update('onboarding_history',$this->getexit_procedureDate($id));
	}
	public function newgetEmployee($userid)
	{
	$this->db->select('newbm_user_details.*,newba_users.*, bm_ranks.name as rankn , bm_cluster.name as clustern ,bm_designation.name as desn,newba_users.fname as firstname, newba_users.lname as lastname');
		
		$this->db->join('newba_users', 'newba_users.id = newbm_user_details.userid', 'left');
		$this->db->join('bm_ranks', 'bm_ranks.id = newbm_user_details.rankid', 'left');
		$this->db->join('bm_cluster', 'bm_cluster.id = newbm_user_details.clusterid', 'left');
		$this->db->join('bm_designation', 'bm_designation.id = newbm_user_details.designationid', 'left');
		$this->db->where('newbm_user_details.userid', $userid);

		
		$return = $this->db->get('newbm_user_details')->row();
		//echo "<pre>";var_dump($return); exit;
		return $return;
	}
	function empUpdate($userid,$data){
		$this->db->where('userid',$userid);
		return $this->db->update('bm_user_details', $data);
	}

	function newempUpdate($userid,$data){
		$this->db->where('userid',$userid);
		// echo '<pre>';print_r($data);exit;;
		return $this->db->update('newbm_user_details', $data);
	}
	public function newempUpdatebausers($userid, $data2)
	{
		$this->db->where('id',$userid);
		return $this->db->update('newba_users', $data2);	
	}
	public function addemergency($userid, $data)
	{
		$this->db->where('userid',$userid);
		return $this->db->update('newbm_user_details', $data);	
	}
	public function addposition($userid, $data)
	{
		$this->db->where('userid',$userid);
		return $this->db->update('newbm_user_details', $data);	
	}

	function addEmployee($data){
		return $this->db->insert('bm_user_details',$data);
	}
	function addEmployeeNew($data){
		return $this->db->insert('newbm_user_details',$data);
	}

	public function newaddcv($data,$userid)
	{
		$this->db->where('userid',$userid);
			$this->db->set('upload_cv',$data);
			return $this->db->update('newbm_user_details');

	}
	public function addnew($data){
		return $this->db->insert('bm_user_details',$data);
	}
public function newaddnew($data){
		return $this->db->insert('newbm_user_details',$data);
	}
	public function inActiveUser($userid){
		
		$this->db->select('status');
		$this->db->where('userid',$userid);
		$status = $this->db->get('bm_user_details')->row();

		if($status->status){
			$this->db->where('userid',$userid);
			$this->db->set('status',0);
			return $this->db->update('bm_user_details');
		}
		else{
			$this->db->where('userid',$userid);
			$this->db->set('status',1);
			return $this->db->update('bm_user_details');
		}
			

	}
	public function newinActiveUser($userid){
		
		$this->db->select('status');
		$this->db->where('userid',$userid);
		$status = $this->db->get('newbm_user_details')->row();

		if($status->status){
			$this->db->where('userid',$userid);
			$this->db->set('status',0);
			return $this->db->update('newbm_user_details');
		}
		else{
			$this->db->where('userid',$userid);
			$this->db->set('status',1);
			return $this->db->update('newbm_user_details');
		}
			

	}

	function newactive($status){
		$this->db->where('newbm_user_details.status',$status);
		$this->db->join('newba_users','newba_users.id=newbm_user_details.userid');
		$this->db->order_by("userid", "asc"); 
		return $this->db->get('newbm_user_details')->result();
	}

	function getHrPolicyContent($content_id){
		return $this->db->get_where('bm_hr_policy', array('content_id' => $content_id))->row()->content;
	}

	function getCovenantPolicyContent($content_id){
		return $this->db->get_where('bm_CovenantE_Staff', array('content_id' => $content_id))->row()->content;
	}


	
	public function updateHrPolicyContent($content_id= null, $content= null)
	{
		$this->db->where('content_id', $content_id);
		$this->db->update('bm_hr_policy', array('content' => $content));
	}

	public function updateCovenantEStaffContent($content_id= null, $content= null)
	{
		$this->db->where('content_id', $content_id);
		$this->db->update('bm_CovenantE_Staff', array('content' => $content));
	}
	
	//get functions are defined in salaryslip_m for some reason
	public function insertBenefits($data)
	{
		$this->db->insert('bm_emp_benefits', $data);
		$id = $this->db->insert_id();
		return $id;
	}

	public function insertBenefitsYearly($data) {
		
		//check for existing yearly record, stack benefit name and yearly bonuses
		$q= $this->db->where(array(
			'user_id' => $data['user_id'],
			'benefit_name' => $data['benefit_name'])
		)->like("changed", date("Y-m"))->get('bm_emp_benefits_yearly');

		//if no rows were fetched then just insert the data
		if ($q->num_rows() < 1)
			return $this->db->INSERT('bm_emp_benefits_yearly',$data);

		//Get the record data
		$q=$q->row();

		$data['cost']=$data['cost'] + $q->cost;
		$data['company']=$data['company'] + $q->company;

		return $this->db->where(array(
			'user_id' => $data['user_id'],
			'benefit_name' => $data['benefit_name'])
		)->like("changed", date("Y-m"))->update('bm_emp_benefits_yearly',$data);
	}

	public function savetitlePage_data($data)
	{

		$this->db->insert('bm_user_description', $data);		
		return $this->db->insert_id();
		
	}
	public function updatetitlePage_data($data,$id)
	{
		 $this->db->where('userid', $id);
		$this->db->update('bm_user_description', $data);		
		return $this->db->insert_id();
		
	}
	public function gettitlePage_data($id)
	{
		$this->db->where('userid', $id);		
		return $this->db->get('bm_user_description')->row();		
		
	}
	public function getAlltitlePage_data()
	{
				
		return $this->db->query('SELECT  `bm_user_description`.*,  bm_cluster.name as cluster_name , bm_positions.name  as position_name, bm_levels.level_name  as level_name,bm_projects.project_title as project_name  FROM bm_user_description LEFT JOIN bm_cluster on bm_user_description.cluster_id=bm_cluster.id LEFT JOIN bm_positions on bm_user_description.position_id=bm_positions.id LEFT JOIN bm_levels on bm_user_description.level_id=bm_levels.id LEFT JOIN bm_projects on bm_user_description.project_id=bm_projects.id')->result();
		
	}
	public function getProjects(){
		return $this->db->get('bm_projects')->result();
	}
	public function insertPosition($data){
		 $this->db->insert('bm_positions',$data);
	}
	public function getLevels(){
		return $this->db->get('bm_levels')->result();
	}
	public function getPosition(){
		return $this->db->get('bm_positions')->result();
	}
	public function getUserDescriptionData($id){
		return $this->db->query('SELECT  `bm_user_description`.*,  bm_cluster.name as cluster_name , bm_positions.name  as position_name, bm_levels.level_name  as level_name,bm_projects.project_title as project_name  FROM bm_user_description LEFT JOIN bm_cluster on bm_user_description.cluster_id=bm_cluster.id LEFT JOIN bm_positions on bm_user_description.position_id=bm_positions.id LEFT JOIN bm_levels on bm_user_description.level_id=bm_levels.id LEFT JOIN bm_projects on bm_user_description.project_id=bm_projects.id
			where bm_user_description.userid='.$id.'
			')->row();
	}


	public function addadditions($data){
		return $this->db->insert('bm_addon',$data);
	}

	public function user_additional($userid,$month,$year)
	{
		return $this->db->query(
			'SELECT SUM(amount)as amount FROM `bm_addon` WHERE userid="'.$userid.'" AND mounth LIKE "'.$year.'-'.$month.'%"
			')->row();
	
	}
	public function GetPaymentVouchers(){
		return $this->db->get('bm_payment_voucher')->result();
	}
	public function GetPaymentVoucher($id){
		$this->db->where('id',$id);
		return $this->db->get('bm_payment_voucher')->row();
	}
	public function insertPaymentVoucher($data){
		$this->db->insert('bm_payment_voucher',$data);
	}
	public function updatePaymentVoucher($id,$data){
		$this->db->where('id',$id);
		$this->db->update('bm_payment_voucher',$data);
	}



}

?>