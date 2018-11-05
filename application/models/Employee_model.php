<?php
class Employee_model extends CI_Model {

	public function genericCreate($table, $data) {
			$this->db->insert($table, $data);
			return $this->db->insert_id();
	}
	public function genericRead($table) {
		$this->db->select('*');
		$this->db->from($table);
		return $this->db->get()->result();
	}
	public function genericShow($table, $id, $opt) {
		$this->db->select('*');
		$this->db->from($table);
		if(isset($opt["id"]))
			$this->db->where($opt["id"], $id);
		else
			$this->db->where('id',$id);
		return $this->db->get()->row();
	}
	public function genericUpdate($table, $data, $id, $opt) {
		if(isset($opt["id"]))
			$this->db->where($opt["id"], $id);
		else
			$this->db->where('id',$id);
		$this->db->update($table, $data);
		if($this->db->affected_rows() == 0)
			return $this->db->last_query();
			//return $this->db->error();
		else
			return null;
	}
	public function genericDelete($table, $id, $opt) {
		if(isset($opt["id"]))
			$this->db->where($opt["id"], $id);
		else
			$this->db->where('id',$id);
		return $this->db->delete($table);
	}

	//get a user from user table and associated details.
	public function getUserData($id) {
		$this->db->select('*');
		//$this->db->join('newbm_user_details','newbm_user_details.userid=newba_users.id','left');
		$this->db->where('newba_users.id',$id);
		return $this->db->get('newba_users')->row();
	}

	public function getUserDetailed($id) {
		$this->db->select('id, initials, cnic_no, gender, marital_status, dependance, address, homeAddress, citizenship, nativeLanguage, hobies, socialCapital, uniqueAboutCandidate, uniqueDescription');
		$this->db->where('newbm_user_details.userid',$id);
		return $this->db->get('newbm_user_details')->row();
	}

	public function setUserPrimaryData($id, $fName, $midName, $lname, $email, $contact, $phone, $emailOther, $notes){

		$dataoffer= array ('fname' => $fName, 'mid_name' => $midName, 'lname' => $lname, 'email' => $email, 'notes' => $notes, 'contact' => $contact, 'phone' => $phone, 'emailOther' => $emailOther);

		//var_dump($id); die();
		if($id==null) {
			//var_dump("Created"); die();
			$this->db->insert('newba_users', $dataoffer);
			return $this->db->insert_id();
		} else {
			//var_dump("Upadted"); die();
			$this->db->where('id', $id);
			$this->db->update('newba_users', $dataoffer);
			return null;
		}
	}

	public function getUserCurrentCv($id) {
		$this->db->select('newbm_user_details.upload_cv');
		$this->db->from("newbm_user_details");
		$this->db->where('newbm_user_details.userid',$id);
		return $this->db->get()->row();
	}

	public function getArchieveCvData($id) {
		$this->db->select('*');
		$this->db->from("fhk_cv_archive");
		$this->db->where('user_id',$id);
		$this->db->order_by('dated', 'DESC');
		return $this->db->get()->result();
	}

	public function setArchieveCv($id, $user, $url) {
		$data=array(
			'user_id' => $user,
			'link' => $url,
		);
		if($id==null) {
			$this->db->insert('fhk_cv_archive', $data);
		} else {
			$this->db->where('id', $id);
			$this->db->update('fhk_cv_archive', $data);
		}
	}

	public function clrArchieveCv($id) {
		$this->db->where('id', $id);
		return $this->db->delete('fhk_cv_archive');
	}

	public function getArchieveOfferData($id) {
		$this->db->from("fhk_offer_history");
		$this->db->where('user_id',$id);
		$this->db->order_by('created_at', 'ASC');
		return $this->db->get()->result();
	}

	//edit and save with same function
	public function setArchieveOffer($id, $user_id, $description, $status, $additional, $notes){
		$dataoffer= array (
			'user_id' => $user_id,
			'description' => $description,
			'status' => $status,
			'notes' => $notes,
			'additional' => $additional,
			'updated_at' => date('Y-m-d G:i:s')
		);

		if($id==null || $id<0) {
			$this->db->insert('fhk_offer_history', $dataoffer);
			return $this->db->insert_id();
		} else {
			$this->db->where('id', $id);
			//$this->db->set('user_id', 3);
			return $this->db->update('fhk_offer_history', $dataoffer);
			//return $this->db->update('fhk_offer_history');
		}
	}

	public function add_emp($data)
	{
		// echo "dd"; die;
		$this->db->insert('insert_employee', $data);
	}
	public function add_module_1($data)
	{
		// echo "dd"; die;
		$this->db->insert('tbl_module_1', $data);
	}
	public function getOnboardById($id){
		$this->db->where('userid',$id);
		return $this->db->get('onboarding_history')->result();

	}
	public function newgetuser_row($userid)
	{
		// $this->db->select('newba_users.*');
		$this->db->where('id', $userid);
		return $this->db->get('newba_users')->row();
	}
	public function getAllActiveUsers(){
		$this->db->select('newba_users.*, newbm_user_details.status');
		$this->db->join('newbm_user_details','newbm_user_details.userid=newba_users.id','left');
		$this->db->where('newbm_user_details.status',1);
		return $this->db->get('newba_users')->result();
	}
	public function form_letter_format($data){
		return $this->db->insert('form_letter_format',$data);
	}
	public function Updateform_letter_format($data,$id){
		$this->db->where('id',$id);
		return $this->db->update('form_letter_format',$data);
	}

	public function list_letter_format(){
       return $this->db->get('form_letter_format')->result();
	}
	public function getLetterData($id){
		$this->db->where('id',$id);
		return $this->db->get('form_letter_format')->row();
	}

	public function get_id_card($userid)
	{
		$this->db->where('User_id', $userid);
		return $this->db->get('bm_idcard')->row();
	}

	public function get_temp_card($userid)
	{
		$this->db->where('User_id', $userid);
		return $this->db->get('bm_tempcard')->row();
	}

	public function get_user_details($userid)
	{
		$this->db->where('userid', $userid);
		return $this->db->get('newbm_user_details')->row();
	}

	public function get_user_project($userid)
	{
		$this->db->where('userid', $userid);
		return $this->db->get('bm_user_description')->row();
	}
	public function get_users_projects()
	{
		$this->db->select('bm_levels.level_name,bm_user_description.*');
		$this->db->join('bm_levels','bm_user_description.level_id=bm_levels.id','left');
		return $this->db->get('bm_user_description')->result();
	}


	public function get_user_benefits($userid)
	{
		$this->db->where('userid', $userid);
		return $this->db->get('bm_emp_benefits')->result();
	}

	public function get_user_letter($userid)
	{
		$this->db->where('userid', $userid);
		return $this->db->get('bm_letter')->result();
	}


	public function get_user_cvimg($userid)
	{
		$this->db->where('userid', $userid);
		return $this->db->get('bm_cinic')->result();
	}

	public function get_user_letterimg($userid)
	{
		$this->db->where('userid', $userid);
		return $this->db->get('bm_newletter_pic')->result();
	}

	public function delete_cv_img($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('bm_cinic');
	}

	public function delete_letter_img($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('bm_newletter_pic');
	}

	public function get_shifts()
	{
		return $this->db->get('bm_shifts')->result();
	}
	public function get_grades()
	{
		return $this->db->get('bm_grades')->result();
	}
	public function get_expertise()
	{
		return $this->db->get('bm_expertise')->result();
	}
	public function get_projects()
	{
		return $this->db->get('bm_projects')->result();
	}
	public function get_levels()
	{
		return $this->db->get('bm_levels')->result();
	}

	public function get_offices()
	{
		return $this->db->get('bm_office')->result();
	}
	public function saveSettlementLetter($data){
		return $this->db->insert('bm_settlement_letter',$data);

	}
	public function saveSettlementLetterUrdu($data){
		return $this->db->insert('bm_settlement_letter_urdu',$data);

	}
	public function UpdateSettlementLetterUrdu($data,$id){
		$this->db->where('id',$id);
		return $this->db->update('bm_settlement_letter_urdu',$data);

	}
	public function UpdateSettlementLetter($data,$id){
		$this->db->where('id',$id);
		return $this->db->update('bm_settlement_letter',$data);

	}
	public function getSettlementLetter(){
		return $this->db->get('bm_settlement_letter')->row();

	}
	public function getSettlementLetterUrdu(){
		return $this->db->get('bm_settlement_letter_urdu')->row();

	}

	public function save_form($userid , $data){
		$this->db->where('userid',$userid);
		 $q = $this->db->get('newbm_user_details');

		   if ( $q->num_rows() > 0 )
		   {
		      $this->db->where('userid',$userid);
		      print_r($this->db->update('newbm_user_details',$data));
		   } else {
		      $this->db->INSERT('newbm_user_details',$data);
		   }
	}

	public function save_id_card($userid , $data)
	{
		$this->db->where('User_id',$userid);

		$q = $this->db->get('bm_idcard');

		   if ( $q->num_rows() > 0 )
		   {
		      $this->db->where('User_id',$userid);
		      $this->db->update('bm_idcard',$data);
		   } else {
		      $this->db->INSERT('bm_idcard',$data);
		   }
	}

	public function save_temp_card($userid , $data)
	{
		$this->db->where('User_id',$userid);

		$q = $this->db->get('bm_tempcard');

		   if ( $q->num_rows() > 0 )
		   {
		      $this->db->where('User_id',$userid);
		      $this->db->update('bm_tempcard',$data);
		   } else {
		      $this->db->INSERT('bm_tempcard',$data);
		   }
	}

	public function Save_Name($userid , $fname , $lname,$email,$password){
		 $data = array(
		 	'id' =>  $userid,
		 	'fname' => $fname,
		 	 'lname' => $lname,
		 	 'email'=>$email,
		 	 'password'=>$password
		 	  );

		$this->db->where('id',$userid);
		 $q = $this->db->get('newba_users');

		   if ( $q->num_rows() > 0 )
		   {
		      $this->db->where('id',$userid);
		      $this->db->update('newba_users',$data);
		   } else {
		      $this->db->INSERT('newba_users',$data);
		   }
	}

	public function Save_Emp_CV($id , $cv ){
		 	$data = array(
		 	'userid' =>  $id,
		 	'upload_cv' => $cv);

		$this->db->where('userid',$id);
		 $q = $this->db->get('newbm_user_details');

		   if ( $q->num_rows() > 0 )
		   {
		      $this->db->where('userid',$id);
		     return $this->db->update('newbm_user_details',$data);
		   } else {
		     return $this->db->INSERT('newbm_user_details',$data);
		   }
	}

	public function Save_Emp_CV_Img($id , $cv ){
		 	$data = array(
		 	'userid' =>  $id,
		 	'cnic' => $cv);
		     return $this->db->INSERT('bm_cinic',$data);
	}


	public function Save_Emp_Letter_Img($id , $letter ){
		 	$data = array(
		 	'userid' =>  $id,
		 	'pic_name' => $letter);
		 	$this->db->where('userid',$id);
		 $q = $this->db->get('bm_newletter_pic');

		   if ( $q->num_rows() > 0 )
		   {
		      $this->db->where('userid',$id);
		     return $this->db->update('bm_newletter_pic',$data);
		   } else {
		     return $this->db->INSERT('bm_newletter_pic',$data);
		   }
		     // return $this->db->INSERT('bm_newletter_pic',$data);
	}
	public function Save_Emp_Letter_Response_Img($id , $letter ){
		 	$data = array(
		 	'userid' =>  $id,
		 	'response_image' => $letter);
		 $this->db->where('userid',$id);
		 $q = $this->db->get('bm_newletter_pic');

		   if ( $q->num_rows() > 0 )
		   {
		      $this->db->where('userid',$id);
		     return $this->db->update('bm_newletter_pic',$data);
		   } else {
		     return $this->db->INSERT('bm_newletter_pic',$data);
		   }
	}

	public function Savedegree_collection_letter($id , $degree_collection_letter ){
		 	$data = array(
		 	'userid' =>  $id,
		 	'degree_collection_letter' => $degree_collection_letter);

		$this->db->where('userid',$id);
		 $q = $this->db->get('newbm_user_details');

		   if ( $q->num_rows() > 0 )
		   {
		      $this->db->where('userid',$id);
		     return $this->db->update('newbm_user_details',$data);
		   } else {
		     return $this->db->INSERT('newbm_user_details',$data);
		   }
	}

	public function Save_Emp_CovenantEStaff($id , $CovenantEStaff ){
		 	$data = array(
		 	'userid' =>  $id,
		 	'CovenantEStaff' => $CovenantEStaff);

		$this->db->where('userid',$id);
		 $q = $this->db->get('newbm_user_details');

		   if ( $q->num_rows() > 0 )
		   {
		      $this->db->where('userid',$id);
		     return $this->db->update('newbm_user_details',$data);
		   } else {
		     return $this->db->INSERT('newbm_user_details',$data);
		   }
	}

	public function Save_Emp_HrPolicy($id , $hrpolicy ){
		 	$data = array(
		 	'userid' =>  $id,
		 	'hr_policy' => $hrpolicy);

		$this->db->where('userid',$id);
		 $q = $this->db->get('newbm_user_details');

		   if ( $q->num_rows() > 0 )
		   {
		      $this->db->where('userid',$id);
		     return $this->db->update('newbm_user_details',$data);
		   } else {
		     return $this->db->INSERT('newbm_user_details',$data);
		   }
	}



	public function Save_OfferLetter($id , $offer_letter ){
		 	$data = array(
		 	'userid' =>  $id,
		 	'upload_offerLetter' => $offer_letter);

		$this->db->where('userid',$id);
		 $q = $this->db->get('newbm_user_details');

		   if ( $q->num_rows() > 0 )
		   {
		      $this->db->where('userid',$id);
		     return $this->db->update('newbm_user_details',$data);
		   } else {
		     return $this->db->INSERT('newbm_user_details',$data);
		   }
	}
	public function Save_ResignationLetter($id , $resignation_letter ){
		 	$data = array(
		 	'userid' =>  $id,
		 	'resignation_letter' => $resignation_letter);

		$this->db->where('userid',$id);
		 $q = $this->db->get('newbm_user_details');

		   if ( $q->num_rows() > 0 )
		   {
		      $this->db->where('userid',$id);
		     return $this->db->update('newbm_user_details',$data);
		   } else {
		     return $this->db->INSERT('newbm_user_details',$data);
		   }
	}
	public function save_settlement($id , $settlement ){
		 	$data = array(
		 	'userid' =>  $id,
		 	'upload_settlement_letter' => $settlement);

		$this->db->where('userid',$id);
		 $q = $this->db->get('newbm_user_details');

		   if ( $q->num_rows() > 0 )
		   {
		      $this->db->where('userid',$id);
		     return $this->db->update('newbm_user_details',$data);
		   } else {
		     return $this->db->INSERT('newbm_user_details',$data);
		   }
	}
	public function exit_procedures($data){
		$this->db->insert('bm_exit_details',$data);
	}
	public function updateexit_procedures($data,$id){
		$this->db->where('userid',$id);
		$this->db->update('bm_exit_details',$data);
	}

	public function getexit_procedures($id){
		$this->db->where('userid',$id);
		return $this->db->get('bm_exit_details')->row();
	}
	public function getEmployee_history($id){
		$this->db->where('userid',$id);
		return $this->db->get('promotion_history')->result();
	}
	public function getblogData($taskid){
		$this->db->select('bm_post_messages.*,bm_blog_posts.id as post_id,bm_blog_posts.*,newba_users.*');
		$this->db->join('bm_post_messages','bm_post_messages.post_id=bm_blog_posts.id','left');
		$this->db->join('newba_users','newba_users.id=bm_post_messages.user_id','left');
		$this->db->where('bm_blog_posts.id',$taskid);
		$this->db->order_by('bm_post_messages.created_at', "ASC");
		$result=$this->db->get('bm_blog_posts')->result();
		return $result;
	}
	public function AddgrievanceCommittee($data){
		$this->db->insert('grievance_blog_committee',$data);
		return $this->db->insert_id();

	}
	public function getCommitteeMembers($taskid){
		$this->db->select('bm_blog_posts.id as post_id,bm_blog_posts.created_for,newba_users.*,newba_users.id as userid,grievance_blog_committee.*');
		$this->db->join('grievance_blog_committee','grievance_blog_committee.post_id=bm_blog_posts.id','left');
		$this->db->join('newba_users','newba_users.id=grievance_blog_committee.user_id','left');
		$this->db->where('bm_blog_posts.id',$taskid);
		$this->db->order_by('grievance_blog_committee.created_at', "DESC");
		$result=$this->db->get('bm_blog_posts')->result();
		return $result;
	}
	public function getGrievanceData($created_for){
		$this->db->select('bm_blog_posts.*,bm_blog_posts.id as post_id,newba_users.*');
		$this->db->join('newba_users','newba_users.id=bm_blog_posts.created_for','left');
		$this->db->where('bm_blog_posts.created_for',$created_for);
		$this->db->order_by('bm_blog_posts.created_at', "ASC");
		$result=$this->db->get('bm_blog_posts')->result();
		return $result;
		// print_r($result);exit;
	}
	public function getLatestMessage($post_id){
		$this->db->select('bm_post_messages.*,bm_blog_posts.id as post_id,newba_users.*');
		$this->db->join('bm_blog_posts','bm_post_messages.post_id=bm_blog_posts.id','left');
		$this->db->join('newba_users','newba_users.id=bm_post_messages.user_id','left');
		$this->db->where('bm_blog_posts.id',$post_id);
		$this->db->order_by('bm_post_messages.created_at', "DESC");
		$result=$this->db->get('bm_post_messages')->row();
		return $result;
	}
	public function newPost($data){
		$this->db->insert('bm_blog_posts',$data);
		return $this->db->insert_id();
	}
	public function SendMessage($data,$userid){

         return $this->db->insert('bm_post_messages',$data);
	}
}
?>
