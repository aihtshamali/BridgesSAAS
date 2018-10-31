<?php

class User_m extends CI_Model {

	public $rules = array(

		'email' => array(

			'field' => 'email',

			'label' => 'Email', 

			'rules' => 'trim|required|valid_email'

			),

		'password' => array(

			'field' => 'password', 

			'label' => 'Password', 

			'rules' => 'trim|required'

			)

		);



	function __construct() {

		parent::__construct();

	}

	function getUserRoles($userId){
		$this->db->select("bm_roles.name AS Role");
		$this->db->join('bm_assigned_roles','bm_assigned_roles.role_id= bm_roles.id','inner');
		$this->db->where(array('user_id' => $userId));
		$res=  $this->db->get('bm_roles')->result();

		$pretty = array();
		foreach ($res as $id => $obj)
			$pretty[]= $obj->Role;

		return $pretty;
	}

	function getUserPermissions($userId){
		$this->db->select("bm_roles_permission.name AS Permission");

		$this->db->join('bm_assigned_roles','bm_assigned_roles.role_id= bm_roles.id','inner');
		$this->db->join('bm_roles_permission_map','bm_roles_permission_map.role_id= bm_roles.id','inner');
		$this->db->join('bm_roles_permission','bm_roles_permission.id=bm_roles_permission_map.permission_id','inner');

		$this->db->where(array('user_id' => $userId));
		$res= $this->db->get('bm_roles')->result();

		$pretty = array();
		foreach ($res as $id => $obj)
			$pretty[]= $obj->Permission;

		return $pretty;
	}

	public function newlogin($user, $pass) {

		//bm_assigned_roles.role_id,bm_roles.name as role_name,bm_assigned_roles.user_id,
		$this->db->select('newba_users.email,newba_users.id,newba_users.password,newba_users.fname as firstname,newba_users.lname as lastname,newbm_user_details.job_title as usertype');

		$this->db->where(array('email' => $user));

		$this->db->where(array('password' => $pass));

		$this->db->join('newbm_user_details','newba_users.id=newbm_user_details.userid','left');

		$user = $this->db->get('newba_users')->row();

		// print_r($user);exit;

		if (count($user)) {

			$data = array(
				'id' => $user->id,
				'email' => $user->email,
				'name' => $user->firstname,
				'loggedin' => TRUE,
                'usertype'=> "", //Director

				'Roles' => $this->getUserRoles($user->id),
				'Permissions' => $this->getUserPermissions($user->id),
			);

		}



		$this->session->set_userdata($data);

		//var_dump($_SESSION); exit;

		return TRUE;

	}

	

//  Corporate Profile



	public function updatefooter($data,$id){

		$this->db->where('id', $id);

		$this->db->set('project_location', $data);

		return $this->db->update('newbm_user_details');

	}

	

	public function addcompany($data)

	{

		$this->db->insert('jb_company_details', $data);

		return $this->db->insert_id();	

	}

	public function addequipment($data)

	{

		$this->db->insert('bm_equipments', $data);

		//return $this->db->insert_id();	

	}

	public function savejob($data)

	{

		$this->db->insert('jb_jobs', $data);

		return true;	

	}

	public function addemergency($userid,$data)

	{

		$this ->db->where('userid',$userid);		

	 	//$this ->db->where('date',$date);		

	 	$this->db->update('newbm_user_details',$data);

	}

	public function editequipment($data,$id)

	{

		$this ->db->where('id',$id);		

	 	//$this ->db->where('date',$date);		

	 	$this->db->update('bm_equipments',$data);

	}

	public function login($user, $pass) {

		$this->db->where(array('email' => $user));

		$this->db->where(array('password' => $this->hash($pass)));

		$user = $this->db->get('ba_users')->row();

		

		if (count($user)) {

			$data = array(

				'id' => $user->id,

				'email' => $user->email,

				'name' => $user->name,

				'usertype' => $user->usertype,

				'loggedin' => TRUE

				);

		}



		$this->session->set_userdata($data);

		//var_dump($_SESSION); exit;

		return TRUE;

	}



	public function login1(){

		$user = $this->get_by(array(

			'email' => $this->input->post('email'),

			'password' => $this->hash($this->input->post('password')),

			), 'ba_users', TRUE);



		if (count($user)) {

			//Login

			$data = array (

				//'username' => $user->username,

				//'lname' => $user->lastname,

				'email' => $user->email,

				'id' => $user->id,

				'name' => $user->name,

				'lname' => $user->lname,

				'usertype' => $user->usertype,

				'loggedin' => TRUE,

				'image' => $user->image

				);

			$this->session->set_userdata($data);

		}

	}



	public function logout(){

		$this->session->sess_destroy();

	}



	public function loggedin(){

		return (bool) $this->session->userdata('loggedin');

	}



	public function hash($string){

		return hash('sha512', $string . config_item('encryption_key'));

	}

	

public function get($id = NULL, $single = FALSE){



		if ($id != NULL) {

			$filter = $this->_primary_filter;

			$id = $filter($id);

			$this->db->where($this->_primary_key, $id);

		 	$method = 'row';

		}

		elseif ($single == TRUE) {

		 	$method = 'row';

		 } 

		else {

			$method = 'result';

		}



		return $this->db->get($this->_table_name)->$method();

	}

	public function getuser(){

		

		$this->db->select('bm_user_details.*, bm_ranks.name as rankn , bm_cluster.name as clustern ,bm_designation.name as desn, bm_projects.project_title as pro, bm_levels.level_name as lev');

		$this->db->join('bm_projects', 'bm_projects.id = bm_user_details.hired_for_project', 'left');

		$this->db->join('bm_levels', 'bm_levels.level_id = bm_user_details.Level', 'left');

		$this->db->join('bm_ranks', 'bm_ranks.id = bm_user_details.rankid', 'left');

		$this->db->join('bm_cluster', 'bm_cluster.id = bm_user_details.clusterid', 'left');

		$this->db->join('bm_designation', 'bm_designation.id = bm_user_details.designationid', 'left');

		$this->db->where('bm_user_details.status', 1);

		

		$return = $this->db->get('bm_user_details')->result();

		//echo "<pre>";var_dump($return); exit;

		return $return;

		

		

		

		

		

	}



	public function newgetuser(){

		

		$this->db->select('newbm_user_details.*,newba_users.*, bm_ranks.name as rankn , bm_cluster.name as clustern ,bm_designation.name as desn, bm_projects.project_title as pro');

		$this->db->join('bm_projects', 'bm_projects.id = newbm_user_details.hired_for_project', 'left');

		$this->db->join('newba_users', 'newba_users.id = newbm_user_details.userid', 'left');

		$this->db->join('bm_ranks', 'bm_ranks.id = newbm_user_details.rankid', 'left');

		$this->db->join('bm_cluster', 'bm_cluster.id = newbm_user_details.clusterid', 'left');

		$this->db->join('bm_designation', 'bm_designation.id = newbm_user_details.designationid', 'left');

		$this->db->where('newbm_user_details.status', 1);

		$this->db->order_by("newbm_user_details.userid", "asc"); 



		$return = $this->db->get('newbm_user_details')->result();

		// echo "<pre>";var_dump($return); exit;

		return $return;

		

		

		

		

		

	}



	public function getequipments($id)

	{

		$this->db->select('bm_equipments.*');

		

		$this->db->where('bm_equipments.user_id', $id);

		$return = $this->db->get('bm_equipments')->result();

		//echo "<pre>";var_dump($return); exit;

		return $return;	

	}

	

	public function getuserinactive(){

		

		$this->db->select('bm_user_details.*, bm_ranks.name as rankn , bm_cluster.name as clustern ,bm_designation.name as desn, bm_projects.project_title as pro, bm_levels.level_name as lev');

		$this->db->join('bm_projects', 'bm_projects.id = bm_user_details.hired_for_project', 'left');

		$this->db->join('bm_levels', 'bm_levels.level_id = bm_user_details.Level', 'left');

		$this->db->join('bm_ranks', 'bm_ranks.id = bm_user_details.rankid', 'left');

		$this->db->join('bm_cluster', 'bm_cluster.id = bm_user_details.clusterid', 'left');

		$this->db->join('bm_designation', 'bm_designation.id = bm_user_details.designationid', 'left');

		$this->db->where('bm_user_details.status', 0);

		

		$return = $this->db->get('bm_user_details')->result();

		//echo "<pre>";var_dump($return); exit;

		return $return;

		

		

		

		

		

	}

	public function getuserbyid($id){

		

		$this->db->select('bm_user_details.*, bm_ranks.name as rankn , bm_cluster.name as clustern ,bm_designation.name as desn, bm_projects.project_title as pro, bm_levels.level_name as lev');

		$this->db->join('bm_projects', 'bm_projects.id = bm_user_details.hired_for_project', 'left');

		$this->db->join('bm_levels', 'bm_levels.level_id = bm_user_details.Level', 'left');

		$this->db->join('bm_ranks', 'bm_ranks.id = bm_user_details.rankid', 'left');

		$this->db->join('bm_cluster', 'bm_cluster.id = bm_user_details.clusterid', 'left');

		$this->db->join('bm_designation', 'bm_designation.id = bm_user_details.designationid', 'left');

		$this->db->where('bm_user_details.status', 1);

		$this->db->where('bm_user_details.userid', $id);

		$return = $this->db->get('bm_user_details')->result();

		//echo "<pre>";var_dump($return); exit;

		return $return;

	}
	public function saveOfferHistory($data){
		$this->db->insert('fhk_offer_history', $data);
		$id = $this->db->insert_id();
		return $id;
	}

	public function getDetailedUserWithProject($id){
		$this->db->select('*');

		$this->db->from('newbm_user_details');
		$this->db->join('bm_projects', 'bm_projects.id = newbm_user_details.hired_for_project', 'left');
		$this->db->join('newba_users', 'newba_users.id = newbm_user_details.userid', 'left');

		$this->db->join('bm_ranks', 'bm_ranks.id = newbm_user_details.rankid', 'left');
		$this->db->join('bm_cluster', 'bm_cluster.id = newbm_user_details.clusterid', 'left');
		$this->db->join('bm_designation', 'bm_designation.id = newbm_user_details.designationid', 'left');

		//$this->db->where('newbm_user_details.status', 1);
		$this->db->where('newbm_user_details.userid', $id);

		$return = $this->db->get()->row();
		unset($return->password);

		return $return;
	}

	public function newgetuserbyid($id){

		

		$this->db->select('newbm_user_details.*,newbm_user_details.hired_on, bm_ranks.name as rankn , bm_cluster.name as clustern ,bm_designation.name as desn, bm_projects.*, newba_users.*');

		$this->db->join('bm_projects', 'bm_projects.id = newbm_user_details.hired_for_project', 'left');

		$this->db->join('newba_users', 'newba_users.id = newbm_user_details.userid', 'left');

		

		$this->db->join('bm_ranks', 'bm_ranks.id = newbm_user_details.rankid', 'left');

		$this->db->join('bm_cluster', 'bm_cluster.id = newbm_user_details.clusterid', 'left');

		$this->db->join('bm_designation', 'bm_designation.id = newbm_user_details.designationid', 'left');

		$this->db->where('newbm_user_details.status', 1);

		$this->db->where('newbm_user_details.userid', $id);

		$return = $this->db->get('newbm_user_details')->row();

		// echo "<pre>";var_dump($return); exit;

		return $return;

		

		

		

		

		

	}



	public function getuseremergency($userid)

	{

		$this->db->select('newbm_user_details.*');

		

		$this->db->where('newbm_user_details.userid', $userid);

		$return = $this->db->get('newbm_user_details')->row();

		//echo "<pre>";var_dump($return); exit;

		return $return;

		

		

		

	}

	public function getuserbiometric($userid)

	{

		$this->db->select('newbm_user_details.*,newba_users.*');

		$this->db->join('newba_users', 'newba_users.id = newbm_user_details.userid', 'left');

		$this->db->where('newbm_user_details.userid', $userid);

		$return = $this->db->get('newbm_user_details')->row();

		//echo "<pre>";var_dump($return); exit;

		return $return;

		

		

		

	}



	public function get_by($where){

		$this->db->where($where);

		return $this->db->get('ba_users', FALSE);

	}



	public function get_from($where, $table_name = NULL){

		$this->db->where($where);

		return $this->db->get($table_name);

	}



	public function get_list($where, $sort, $single = FALSE){

		$this->db->where($where);

		$this->db->select($sort);

		return $this->get(NULL, $single);

	}



	

	public function delete($id){

		$filter = $this->_primary_key;



		if(!$id) {

			return FALSE;

		}

		$this->db->where($this->_primary_key);

		$this->db->limit(1);

		$this->db->delete($this->_table_name);

	}	



	public function insert_user($data)

	{

		$this->db->insert('ba_users', $data);

		$userid = $this->db->insert_id();

		return $userid;

	}

	public function new_insert_user($data)

	{

		$this->db->insert('newba_users', $data);

		//$userid = $this->db->sel('');

		return $data['id'];

	}



	public function change_pass_m($email, $xpass, $newpass)

	{

		$this->db->where(array('email' => $email));

		$this->db->where(array('password' => $this->hash($xpass)));

		$user = $this->db->get('ba_users')->row();



		if (count($user)) {

			$password = $this->hash($newpass);

			$this->db->set('password', $password);

			$this->db->where(array('email' => $email));

			if($this->db->update('ba_users')){

			echo "Password Changed Successfully.";

			}

		}

		else{

			echo "Some error occurred! Please try again later.";

			}

	}





	public function save_com_letter($data)

	{

		// echo "dd"; die;

		$this->db->insert('bm_letter', $data);

	}

}