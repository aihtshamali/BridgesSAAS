<?php

class Taskmanagement_m extends CI_Model {

	
	public function getLatestNewsLetter(){
		$bridge_mae = $this->load->database('bridge_mae', TRUE);
		// $bridge_mae->select('newsletter.*');
		$bridge_mae->order_by('id', 'DESC');
		return $bridge_mae->get('newsletter')->row();
	}

	public function get_users() {

		$this->db->select('id, firstname, lastname, userid, designation');

		$result = $this->db->get('bm_user_details')->result_array();

		return $result;
	}

	public function newget_users() {

		$this->db->select('newba_users.id as id,  newba_users.fname as firstname, newba_users.lname as lastname,newbm_user_details.status, newbm_user_details.userid, newbm_user_details.hired_for_project as designation, bm_user_description.job_title as job_title');

		$this->db->join('newba_users','newbm_user_details.userid = newba_users.id','left');

		$this->db->join('bm_user_description','bm_user_description.userid = newbm_user_details.userid','left');

		$this->db->where('newbm_user_details.status',1);

		

		$result = $this->db->get('newbm_user_details')->result_array();

		// echo"<pre>";print_r($result);exit;

		return $result;	

	}

	public function newget_user($id) {

		$this->db->select('newba_users.*');

		$this->db->where('id',$id);

		// print_r($id);

		$result = $this->db->get('newba_users')->row();

		// echo"<pre>";print_r($result);exit;

		return $result;

	}





	public function create_task($data) {

		$this->db->insert('bm_tasks',$data);

		return $this->db-> insert_id();

	}

	public function DeleteEvalutionData($id){

		$this->db->where('id',$id);

		return $this->db->delete('bm_tasks_evaluation');

	}

	public function getAllClusters(){
		
		/*
		$this->db->select($feild_name);
    	$this->db->from($table_name);
    	$this->db->where($condtion);
    	$query = $this->db->get();
    	return $query->result_array();
		*/

		$this->db->select('id, clustername');
		$this->db->from("bm_clusters");
		$query = $this->db->get();

    	return $query->result_array();
	}

	public function get_clusters($id) {

		$this->db->where(array('clusterid' => $id));

		$this->db->select('id, title');

		$result = $this->db->get('bm_clusters_details');

		$return = array();

		if($result->num_rows() > 0) {

			foreach($result->result_array() as $row) {

				$return[$row['id']] = $row['title'];

			}

		}

		return $return;

	}





	public function addLeave($data){

 	// print_r($data);exit;

		return $this->db->insert('bm_attendance_leave',$data);	

	}

	public function addMonetized($data){

 	// print_r($data);exit;

		return $this->db->insert('bm_after_monetized',$data);	

	}

	public function getMonetizedOn($id,$mon){

		$this->db->where('userid',$id);

		$this->db->like('date' ,date('Y-'.$mon));

		$result= $this->db->get('bm_after_monetized')->row();

		return $result;

	}



	public function SaveRemainingLeave($data){

		$this->db->insert('bm_remaining_holidays',$data);

		return $this->db->insert_id();		

	}

	public function GetRemainingLeave($id){

		$this->db->where('userid',$id);

		$result= $this->db->get('bm_remaining_holidays')->row();

		return $result;

	}

	public function UpdateRemainingLeave($id,$data){

		$this->db->where('userid',$id);

		return $this->db->update('bm_remaining_holidays',$data);

 	 // return $this->db->update_id();		

	}



	public function updateLeave($data,$id,$date){

		$this ->db->where('userid',$id);		

		$this ->db->where('date',$date);		

		$this->db->update('bm_attendance_leave',$data);

	}

	public function getLeaveDataOfId($id){

		$this ->db->where('id',$id);

		$result= $this->db->get('bm_attendance_leave')->row();	

		return $result;

	}

	public function getLeaveDataOn($id,$date){

	// print_r($date);exit;

		$this->db->select('bm_attendance_leave.*,bm_remaining_holidays.holidays as holidays');

		$this->db->join('bm_remaining_holidays','bm_remaining_holidays.userid = bm_attendance_leave.userid','left');

		$this->db->where('bm_attendance_leave.userid',$id);

		$this ->db->where('date',$date);

		$result= $this->db->get('bm_attendance_leave')->row();	

	// print_r($result);

		return $result;

	}

	public function getHoliday($id,$mon){

		$this->db->select('bm_attendance_leave.*,bm_remaining_holidays.holidays as holidays');

		$this->db->join('bm_remaining_holidays','bm_remaining_holidays.userid = bm_attendance_leave.userid','left');

		$this->db->where('bm_attendance_leave.userid',$id);

		$this->db->like('date' ,date('Y-'.$mon));

		$this->db->where('status',1);

		return $this->db->get('bm_attendance_leave')->result();

	}

	public function getLeaveDataSpecific($id, $month, $year){

		$this->db->select('bm_attendance_leave.*,bm_remaining_holidays.holidays as holidays');

		$this->db->join('bm_remaining_holidays','bm_remaining_holidays.userid = bm_attendance_leave.userid','left');

		$this->db->where('bm_attendance_leave.userid',$id);
		$this->db->like('date', date($year.'-'.$month), 'after');

		$this->db->order_by('id', 'DESC');

		$result= $this->db->get('bm_attendance_leave')->result();

		return $result;

	}

	public function getLeaveData($id){

		$this->db->select('bm_attendance_leave.*,bm_remaining_holidays.holidays as holidays');

		$this->db->join('bm_remaining_holidays','bm_remaining_holidays.userid = bm_attendance_leave.userid','left');

		$this->db->where('bm_attendance_leave.userid',$id);

		$this->db->order_by('id', 'DESC');

		$result= $this->db->get('bm_attendance_leave')->result();

		return $result;

	}

	public function AllLeaveData(){

	// $this->db->where('userid',$id);

		$this->db->select('bm_attendance_leave.*,bm_remaining_holidays.holidays as holidays');

		$this->db->join('bm_remaining_holidays','bm_remaining_holidays.userid = bm_attendance_leave.userid','left');

		$this->db->order_by('bm_attendance_leave.id', 'DESC');

		$result= $this->db->get('bm_attendance_leave')->result();

	 // echo "<pre>";var_dump($result);exit;



		return $result;

	}

	public function AllLeaveDataMon($month,$year){

	// $this->db->where('userid',$id);

	// $dat=date('Y-'.$month);

	// print_r($dat);exit;

	// $result=$this->db->query("SELECT bm_attendance_leave.*, count(case when bm_attendance_leave.status like '1' then 1 end) as approved, 

 //    count(case when bm_attendance_leave.status like '0' or bm_attendance_leave.status like '-1'  then 1 end) as unapproved 

	// FROM bm_attendance_leave

	// WHERE bm_attendance_leave.date like '".$dat."-%'")->result();

	// $this->db->select('bm_attendance_leave.* apd_dump_persistent_resources(oid)oved');

		$this->db->select('bm_attendance_leave.*,bm_remaining_holidays.holidays as holidays');

		$this->db->join('bm_remaining_holidays','bm_remaining_holidays.userid = bm_attendance_leave.userid','left');

		$this->db->like('date' ,date($year.'-'.$month));

		$this->db->order_by('bm_attendance_leave.created_at', 'DESC');

	// $this->db->groupBy('bm_attendance.status');

		$result= $this->db->get('bm_attendance_leave')->result();



		return $result;

	}

	public function getLeaveDataMon($id,$mon){

		$this->db->select('bm_attendance_leave.*,bm_remaining_holidays.holidays as holidays');

		$this->db->join('bm_remaining_holidays','bm_remaining_holidays.userid = bm_attendance_leave.userid','left');

		$this->db->like('date' ,date('Y-'.$mon));

		$this->db->where('bm_attendance_leave.userid',$id);

		$this->db->order_by('bm_attendance_leave.id', 'DESC');

		$result= $this->db->get('bm_attendance_leave')->result();



		return $result;

	}







	public function get_user_initials($id) {

		$this->db->where(array('userid' => $id));

		$this->db->select('bm_user_details.userid, bm_user_details.initials, bm_user_details.designation, bm_projects.project_title');

		$this->db->join('bm_user_details', 'bm_user_details.hired_for_project = bm_projects.id');

		$result = $this->db->get('bm_projects')->row();

		// echo "<pre>";var_dump($result);

		return $result;

	}

	public function newget_user_initials($id) {

		$this->db->where(array('userid' => $id));

		$this->db->select('newbm_user_details.userid, newbm_user_details.initials, newbm_user_details.job_title as , bm_projects.project_title ');

		$this->db->join('newbm_user_details', 'newbm_user_details.hired_for_project = bm_projects.id');

		// $this->db->join('bm_user_description','bm_user_description.userid = userid','left');



		$result = $this->db->get('bm_projects')->row();

		// echo "<pre>";var_dump($result);

		return $result;

	}

	public function get_designation($id) {

		$this->db->where(array('userid' => $id));

		$result = $this->db->get('bm_user_description')->row();

		// echo "<pre>";var_dump($result);

		return $result;

	}



	public function add_user_to_task($data) {

		$this->db->insert('bm_tasks_assigned', $data);

		return TRUE;

	}



	public function delete_user_from_task($task, $user) {

		$this->db->where(array(

			'taskid' => $task,

			'userid' => $user

			));

		$this->db->delete('bm_tasks_assigned');

		return TRUE;

	}

	public function newCluster($clusterName){
		return $this->db->insert('bm_clusters', array(
			"clusterName" => $clusterName
		));
	}

	public function add_cluster($data) {
		return $this->db->insert('bm_tasks_clusters',$data);
	}

	public function get_task($id) {

		$this->db->where(array('task_id' => $id));

		return $this->db->get('bm_tasks')->row();

	}



	public function get_task_clusters($id) {

		$this->db->where(array('taskid' => $id));

		//$this->db->select('clusterid');

		$result = $this->db->get('bm_tasks_clusters');



		$return = array();

		if($result->num_rows() > 0) {

			foreach($result->result_array() as $row) {

				$return[$row['task_cluster_id']] = $row['task_clusterid'];

			}

		}



		return $return;

	}



	public function get_assigned_list($id) {

		$this->db->where(array('taskid' => $id));

		return $this->db->get('bm_tasks_assigned')->result();

	}



	public function get_task_assigned($id) {

		$this->db->where(array('taskid' => $id));

		$this->db->join('bm_user_details', 'bm_user_details.userid = bm_tasks_assigned.userid');

		return $this->db->get('bm_tasks_assigned')->result();

	}

	public function newget_task_assigned($id) {

		$this->db->select('bm_tasks_assigned.*,newbm_user_details.*,bm_user_description.job_title as designation,newba_users.fname as firstname,newba_users.lname as lastname,');

		$this->db->where(array('taskid' => $id));

		$this->db->join('newbm_user_details', 'newbm_user_details.userid = bm_tasks_assigned.userid');

		$this->db->join('newba_users', 'newbm_user_details.userid = newba_users.id');

		$this->db->join('bm_user_description','bm_user_description.userid = newba_users.id','left');

		$this->db->where('newbm_user_details.status',1);

		

		//$this->db->order_by("role", "Monitor","Team member","Team Leader");

		return $this->db->get('bm_tasks_assigned')->result();

	}



	public function get_task_assigned_user($id, $taskid) {

		//var_dump($id); var_dump($taskid); exit;

		$this->db->where(array('bm_tasks_assigned.userid' => $id,

			'bm_tasks_assigned.taskid' => $taskid));

		$this->db->join('bm_user_details', 'bm_user_details.userid = bm_tasks_assigned.userid');

		return $this->db->get('bm_tasks_assigned')->row();

	}

	public function newget_task_assigned_user($id, $taskid) {

		// var_dump($id); var_dump($taskid); exit;	

		$this->db->select('bm_tasks_assigned.*,newbm_user_details.*,newba_users.fname as firstname,newba_users.lname as lastname,bm_user_description.job_title as designation');

		$this->db->where(array('bm_tasks_assigned.userid' => $id,

			'bm_tasks_assigned.taskid' => $taskid));

		$this->db->join('newbm_user_details', 'newbm_user_details.userid = bm_tasks_assigned.userid');

		$this->db->join('bm_user_description','bm_user_description.userid = newbm_user_details.userid','left');

		$this->db->join('newba_users', 'newba_users.id = newbm_user_details.userid');

		$this->db->where('newbm_user_details.status',1);

		

		// echo '<pre>';var_dump($this->db->get('bm_tasks_assigned')->row());exit;

		return $this->db->get('bm_tasks_assigned')->row();

	}



	public function get_all_tasks($id) {

		$this->db->where(array('userid' => $id));

		$this->db->select('taskid');

		return $this->db->get('bm_tasks_assigned')->result_array();

	}



	public function get_task_details($taskid) {

		$this->db->where(array('taskid' => $taskid));

		return $this->db->get('bm_tasks_assigned')->result();

	}   



	public function get_task_detail($taskid) {

		$this->db->where(array('bm_tasks.task_id' => $taskid));

		$this->db->join('bm_tasks_clusters' , 'bm_tasks_clusters.taskid = bm_tasks.task_id');

		$this->db->join('bm_tasks_assigned' , 'bm_tasks_assigned.taskid = bm_tasks.task_id');

		$this->db->join('bm_clusters_details' , 'bm_clusters_details.id = bm_tasks_clusters.clusterid');

		$this->db->join('bm_clusters' , 'bm_clusters.id = bm_clusters_details.clusterid');

		return $this->db->get('bm_tasks')->row();

	}  



	public function remove_Tasks($iId)

	{	

		if($this->session->userdata('usertype') == "Cordinator" || $this->session->userdata('usertype') == "Director" || $this->session->userdata('usertype') == "Admin" )

		{



			// remove tasks from bm_tasks_assigned table

			$this->db->delete('bm_tasks_assigned', array('taskid' => $iId));



			// remove tasks from bm_tasks_clusters table

			$this->db->delete('bm_tasks_clusters', array('taskid' => $iId));



			// remove tasks from bm_tasks table

			$this->db->delete('bm_tasks', array('id' => $iId));

		}	

		else

			return FALSE;



	} 



	function updateTask($iId,$sData)

	{

		$this->db->where('task_id', $iId);

		$this->db->update('bm_tasks', $sData);

		return $iId;

	}



	function check_task($feild_name, $table_name, $condtion)

    {	//var_dump($feild_name); var_dump($table_name);  var_dump($condtion); exit; 

    	$this->db->select($feild_name);

    	$this->db->from($table_name);

    	$this->db->where($condtion);

    	$query = $this->db->get();

		// var_dump($query);exit;



    	if( $query->num_rows() > 0)

    		return TRUE;



    	else

    		return FALSE;

    }



    public function insertMsg($sData) 

    {	

    	$this->db->insert('task_comments',$sData);

    	return $this->db->insert_id();

    }



    function getAll($table_name)

    {

    	$this->db->select("*");

    	$this->db->from($table_name);

    	$query = $this->db->get();

    	return $query->result_array();

    }

    function getbyCluster($table_name,$where)

    {

    	$this->db->select("*");

    	$this->db->where('cluster_id',$where);
	  // $this->db->where('sectionid','2');

    	$this->db->from($table_name);

    	$query = $this->db->get();

    	return $query->result_array();

    }



    function get_db_value($feild_name, $table_name, $condtion)

    {

    	$this->db->select($feild_name);

    	$this->db->from($table_name);

    	$this->db->where($condtion);

	    // print_r($feild_name);

	    // print_r($table_name);

	    // print_r($condtion);
    	$this->db->order_by('id','DESC');
    	return $this->db->get()->row($feild_name);

    }



    function getAllData($feild_name, $table_name, $condtion)

    {	

    	$this->db->select($feild_name);

    	$this->db->from($table_name);

    	$this->db->where($condtion);

    	$query = $this->db->get();

    	return $query->result_array();

    }



    public function insertData($table_name, $sData) 

    {

		// echo 'insert';



    	// print_r($sData);

    	$this->db->insert($table_name, $sData);

    	return $this->db->insert_id();

    }





    function updateData($table_name, $iId, $sData)

    {

		// echo 'updated';

		// print_r($sData);

    	$this->db->where($iId);

    	$this->db->update($table_name, $sData);

    	return $iId;

    }



    public function getEvaluationData($taskId, $userId) 

    {

    	$this->db->select("bm_tasks_evaluation.id, bm_tasks_evaluation.title, bm_tasks_evaluation.sectionid, bm_tasks_rating.id AS rating_id, bm_tasks_rating.userid, bm_tasks_rating.taskid, bm_tasks_rating.rating, bm_tasks_rating.evaluationid, bm_tasks_rating.global ");

    	$this->db->where(array('bm_tasks_rating.taskid' => $taskId,

    		'bm_tasks_rating.userid' => $userId));

    	$this->db->join('bm_tasks_evaluation', 'bm_tasks_evaluation.id = bm_tasks_rating.evaluationid');

    	return $this->db->get('bm_tasks_rating')->result_array();

    }



    public function get_activities($clusterid) {

    	$this->db->where(array('bm_clusters_details.clusterid' => $clusterid));

		//$this->db->join('bm_tasks_clusters', 'bm_tasks_clusters.task_clusterid = bm_clusters_details.id');

		// $this->db->join('bm_tools', 'bm_tools.clusterid = bm_clusters_details.clusterid');

    	$results =  $this->db->get('bm_clusters_details')->result_array();

	//var_dump($results); exit;

    	return $results;

    }



    public function get_activity_tasks($activityid) {

    	$this->db->where(array('task_clusterid' => $activityid, 'bm_tasks.active' => '1'));

		//$this->db->join('bm_tasks_assigned', 'bm_tasks_assigned.taskid = bm_tasks_clusters.taskid');

    	$this->db->order_by('taskname', 'ASC');

    	$this->db->join('bm_tasks', 'bm_tasks.task_id = bm_tasks_clusters.taskid');

    	$this->db->join('bm_clusters_details', 'bm_clusters_details.id = bm_tasks_clusters.task_clusterid');

    	return $this->db->get('bm_tasks_clusters')->result_array();

    }



    public function get_activity_tasks_new($activityid, $userId) {

    	$this->db->where(array('task_clusterid' => $activityid, 'bm_tasks_assigned.userid' => $userId));

    	$this->db->join('bm_tasks_assigned', 'bm_tasks_assigned.taskid = bm_tasks_clusters.taskid');

    	$this->db->join('bm_tasks', 'bm_tasks.task_id = bm_tasks_clusters.taskid');

    	$this->db->join('bm_clusters_details', 'bm_clusters_details.id = bm_tasks_clusters.task_clusterid');
    	// $this->db->where('bm_tasks_assigned.userid',$userid);

    	return $this->db->get('bm_tasks_clusters')->result_array();



    }	

	// public function newget_activity_tasks_new($activityid, $userId) {

	// 	$this->db->where(array('task_clusterid' => $activityid, 'bm_tasks_assigned.userid' => $userId));

	// 	$this->db->join('bm_tasks_assigned', 'bm_tasks_assigned.taskid = bm_tasks_clusters.taskid');

	// 	$this->db->join('bm_tasks', 'bm_tasks.task_id = bm_tasks_clusters.taskid');

	// 	$this->db->join('bm_clusters_details', 'bm_clusters_details.id = bm_tasks_clusters.task_clusterid');

	// 	return $this->db->get('bm_tasks_clusters')->result_array();



	//}



    public function get_assigned_tasks($taskid) {

    	$this->db->where(array('taskid' => $taskid));

    	$this->db->select('bm_tasks_assigned.*, bm_user_details.initials, bm_user_details.firstname, bm_user_details.lastname');

    	$this->db->join('bm_user_details', 'bm_user_details.userid = bm_tasks_assigned.userid');

    	$return =  $this->db->get('bm_tasks_assigned')->result_array();

		//echo "<pre>";

		//var_dump($return); exit;

    	return $return;

    }

    public function newget_assigned_tasks($taskid,$userid) {

    	$this->db->where(array('taskid' => $taskid));

    	$this->db->select('bm_tasks_assigned.*, newbm_user_details.initials, newba_users.fname as firstname, newba_users.lname as lastname , newbm_user_details.status');

    	$this->db->join('newbm_user_details', 'newbm_user_details.userid = bm_tasks_assigned.userid');

    	$this->db->join('newba_users', 'newbm_user_details.userid = newba_users.id','left');

    	$this->db->where('newbm_user_details.status',1);
    	// $this->db->where('bm_tasks_assigned.userid',$userid);
    	$return =  $this->db->get('bm_tasks_assigned')->result_array();

		//echo "<pre>";

		//var_dump($return); exit;

    	return $return;

    }



    public function get_comments($where) {

    	$this->db->where(array('taskid' => $where));

    	$query = $this->db->get('task_comments');

    	return $query->result();

    }

	// Zain

    public function get_tools() {

    	$this->db->where(array('clusterid' => $this->session->userdata('')));

		//$this->db->join('bm_tasks_assigned', 'bm_tasks_assigned.taskid = bm_tasks_clusters.taskid');

    	$this->db->join('bm_clusters', 'bm_clusters.id = bm_tools.clusterid');

    	return $this->db->get('bm_tools')->result_array();



    }

	// End



    public function remove($table_name, $condtion) 

    {

    	$this->db->where($condtion);

    	$this->db->delete($table_name);

    	return TRUE;

    }



	//anees

    public function get_task_evaluation()

    {	

    	$this->db->where(array('sectionid' => '1'));

		//$this->db->where(array('clusterid' => $this->session->userdata('')));

		//$this->db->join('bm_tasks_assigned', 'bm_tasks_assigned.taskid = bm_tasks_clusters.taskid');

		//$this->db->join('bm_tasks_evaluation', 'bm_tasks_evaluation.id = bm_tasks_rating.evaluationid');

    	return $this->db->get('bm_tasks_evaluation')->result_array();

    }	



    public function get_task_rating($evaluationid)

    {

    	$this->db->where(array('evaluationid' => $evaluationid));

    	return $this->db->get('bm_tasks_rating')->result_array();

    }



    public function get_assigned_tasks_percentage($taskid, $userid, $role) 

    {	

		//echo $userid;

    	$percentage = array();

    	for ($i=0; $i <2 ; $i++) 

    	{ 

    		if($i==0) {

    			$this->db->where( array('taskid' => $taskid,

    				'global' => 1,

    				'userid' => $userid));

    		} else {

    			$this->db->where(array('global' => '3',

    				'userid' => $userid));

    		}

    		$this->db->select('SUM(rating) AS rating_count');

    		$query        =  $this->db->get('bm_tasks_rating')->result_array();

    		$result       = $query[0]["rating_count"];

			//$percentage[] = $result;

    		if ($i == 0) {

    			$percentage[] = $result/3;

    		} else {

    			$percentage[] = $result/5;

    		}

    	}



    	if (trim($role) == 'Monitor') {

    		$this->db->where(array('global' => 2,

    			'userid' => $userid,

    			'taskid' => $taskid));

    		$this->db->select('SUM(rating) AS rating_count');

    		$query        =  $this->db->get('bm_tasks_rating')->result_array();

    		$result       = $query[0]["rating_count"];

			//echo $this->db->count_all_results();echo "-";

    		$percentage[2] = $result/3;

    	}

		//var_dump($percentage);		



    	$sColors = $percentage;

    	$colors  = array();



    	foreach ($sColors as  $color) 

    	{	

    		if ($color == 0) {

    			$colors[] = '#b2aeae';

    		}

    		elseif ($color > 0 && $color <= 10) {

    			$colors[] = '#BF0F00';

    		}

    		elseif ($color > 10 && $color <= 20) {				

    			$colors[] = '#C33600';	

    		}

    		elseif ($color > 20 && $color <= 30) {				

    			$colors[] = '#C75F00';



    		}

    		elseif ($color > 30 && $color <= 40) {				

    			$colors[] = '#CB8900';



    		}

    		elseif ($color > 40 && $color <= 50) {				

    			$colors[] = '#CFB500';



    		}

    		elseif ($color > 50 && $color <= 60) {				

    			$colors[] = '#C5D400';



    		}

    		elseif ($color > 60 && $color <= 70) {				

    			$colors[] = '#9ED800';



    		}

    		elseif ($color > 70 && $color <= 80) {				

    			$colors[] = '#76DC00';



    		}

    		elseif ($color > 80 && $color <= 90) {				

    			$colors[] = '#4CE000';



    		}

    		elseif ($color > 90 && $color <= 100) {

    			$colors[] = '#21E500';

    		}

    		elseif ($color > 100) {

    			$colors[] = '#21E500';

    		}



    	}





    	return $colors;



    }

    public function getUserPerformanceSpecific($iUserId, $month, $year){

		if($month<10)
			$month="0".$month;

    	//die("DATE: " . date("$year-$month-t" ));
    	$date = @explode("-", date("$year-$month-t" ));

    	$tot = cal_days_in_month(CAL_GREGORIAN, $date[1], $date[0]);
		// print_r($date);

    	for ($i=1; $i <= $tot ; $i++) {
    		$dayz = $i;
    		if($i<10)
				$dayz="0".$dayz;
    		$currentDays = date("$date[0]-$date[1]-$dayz");

    		$this->db->where(array('userid' => $iUserId, 'created' => $currentDays));

    		$this->db->select('id, rating, created, SUM(rating) AS rating_count, count(*) AS count');

    		$this->db->order_by('id','DESC');

    		$query =  $this->db->get('bm_tasks_rating')->result_array();

    		if($query[0]["created"] != NULL)
    			$performance[$i] = $query[0]["rating_count"]/$query[0]["count"];
    		else
    			$performance[$i] = "empty";

    	}
    	return $performance;
    }

    public function getUserPerformanceCurrentMonth($iUserId)

    {	
	
		$date = @explode("-", date("Y-m-t" ));    	
    	return $this->getUserPerformanceSpecific($iUserId, $date[1], $date[0]);

    	/*
    	$date = @explode("-", date("Y-m-t" ));
		// print_r($date);

    	for ($i=1; $i < $date[2]+1; $i++) 

    	{ 	

			// $currentDays = date("Y-m-$i", strtotime('-1 months'));

    		$currentDays = date("Y-m-$i");
    		$this->db->where(array('userid' => $iUserId, 'created' => $currentDays));
    		$this->db->select('id, rating, created, SUM(rating) AS rating_count, count(*) AS count');
    		$this->db->order_by('id','DESC');

    		$query =  $this->db->get('bm_tasks_rating')->result_array();

		   // echo "<pre>";	print_r($query);

    		if($query[0]["created"] != NULL)

    			$performance[$i] = $query[0]["rating_count"]/$query[0]["count"];

    		else

    			$performance[$i] = "empty";

    	}



		// echo "<pre>"; var_dump($performance); //exit;

    	return $performance;
    	*/

    }

	// public function getData($table,$data){

	// 	$this->db->where('userid',$data->userid);

	// 	$this->db->where('taskid',$data->taskid);

	// 	$this->db->where('evaluationid',$data->evaluationid);

	// 	$this->db->where('global',$data->global);

	// 	$this->db->where('created',$data->created);

	// 	$query= $this->db->get($table)->result();

	// 	print_r($query);

	// }

    public function getUserPerformance($iUserId)

    {	



		// $performance = array();

    	$date = @explode("-", date("Y-m-t", strtotime('-1 months') ));
    	return $this->getUserPerformanceSpecific($iUserId, $date[1], $date[0]);
		// $date = @explode("-", date("Y-m-t" ));

		// print_r($date);

/*
    	for ($i=1; $i < $date[2]+1; $i++) 

    	{ 	

    		$currentDays = date("Y-m-$i", strtotime('-1 months'));

			// $currentDays = date("Y-m-$i");



    		$this->db->where(array('userid' => $iUserId, 'created' => $currentDays));

    		$this->db->select('id, rating, created, SUM(rating) AS rating_count, count(*) AS count');

    		$query    =  $this->db->get('bm_tasks_rating')->result_array();



    		if($query[0]["created"] != NULL)

    			$performance[$i] = $query[0]["rating_count"]/$query[0]["count"];

    		else

    			$performance[$i] = "empty";

    	}



		// echo "<pre>"; var_dump($performance); exit;

    	return $performance;
    	*/

    }



    public function get_title($clusterid){

    	$this->db->where(

    		array('clusterid' => $clusterid,

					// 'userid' => $this->session->userdata['id']

    			)

    		);

    	$query = $this->db->get('bm_tools')->result_array();

    	return $query;

    }

    public function rating_percen($taskid_new){

    	$global = 1;

    	$taskid = $taskid_new;

    	$color ='#DDD';

		//echo $taskid; exit;

    	$this->db->select("COUNT(rating) as Rating, SUM(rating) as r_sum");

    	$this->db->where('taskid', $taskid);

    	$this->db->where('global', $global);

    	$row = $this->db->get('bm_tasks_rating')->result_array();

    	$rating = $row[0]['Rating'];

    	$r_sum = $row[0]['r_sum'];



    	if ($rating > 0) {

    		$percentage = $r_sum/$rating;

    		if ($percentage >=0 && $percentage<=10) {

    			$color='#BF0F00';

    		}

    		elseif ($percentage >=10 && $percentage<=20) {

    			$color='#C33600';

    		}

    		elseif ($percentage >=20 && $percentage<=30) {

    			$color='#C75F00';

    		}

    		elseif ($percentage >=30 && $percentage<=40) {

    			$color='#CB8900';

    		}

    		elseif ($percentage >=40 && $percentage<=50) {

    			$color='#CFB500';

    		}

    		elseif ($percentage >=50 && $percentage<=60) {

    			$color='#C5D400';

    		}

    		elseif ($percentage >=60 && $percentage<=70) {

    			$color='#9ED800';

    		}

    		elseif ($percentage >=70 && $percentage<=80) {

    			$color='#76DC00';

    		}

    		elseif ($percentage >=80 && $percentage<=90) {

    			$color='#4CE000';	

    		}

    		elseif ($percentage >=90 && $percentage<=100) {

    			$color='#21E500';

    		}

    	}

    	return $color;

    }



    public function check_rating_exists($taskid, $userid, $global) 

    {

		//var_dump($taskid); var_dump($userid); exit;

    	$this->db->where(array('taskid' => $taskid,

    		'userid' => $userid,

    		'global' => $global));

		//return $this->db->get('bm_tasks_rating')->row();



    	$query = $this->db->get('bm_tasks_rating');



    	if( $query->num_rows() > 0)

    		return TRUE;

    	else

    		return FALSE;



    }



    public function get_task_counts($userid) {

    	$this->db->where(array('userid' => $userid));

    	$tasks = $this->db->get('bm_tasks_assigned')->result_array();

    	$pending = 0;

    	foreach ($tasks as $task) {

    		$this->db->where(array(	'task_id' => $task['id'],

								//i did to check can be reverted   'taskstatus' => 'completed'

    			));

    		$this->db->select('task_id');

    		$result = $this->db->get('bm_tasks')->result_array();

    		//var_dump(count($result->toArray())); die();

    		if(count($result) > 0)

    			$pending++;

    	}



    	$ongoing = 0;

    	foreach ($tasks as $task) {

    		$this->db->where(array(	'task_id' => $task['id'],

    			'enddate' => '0000-00-00'));

    		$this->db->select('task_id');

    		$result = $this->db->get('bm_tasks')->result_array();

    		if(count($result) > 0)

    			$ongoing++;

    	}



    	$score = 0;

    	foreach ($tasks as $task) {

    		$this->db->where(array(	'task_id' => $task['id']));

    		$this->db->select('effort');

    		$result = $this->db->get('bm_tasks')->row();

    	}

    	if (isset($result) ) {

    		$score += $result->effort;



    	}

		//return print_r($result); 

    	return $pending." of ".count($tasks) . " - Ongoing Tasks: ".$ongoing ." - Effort Score: ". $score;

    }



    public function color($percentage){



    	if($percentage == 200) {

    		$color = '#000';

    	}

    	elseif ($percentage < 0) {

    		$color='#BF0F00';

    	}

    	elseif ($percentage >=0 && $percentage<=10) {

    		$color='#BF0F00';

    	}

    	elseif ($percentage >=10 && $percentage<=20) {

    		$color='#C33600';

    	}

    	elseif ($percentage >=20 && $percentage<=30) {

    		$color='#C75F00';

    	}

    	elseif ($percentage >=30 && $percentage<=40) {

    		$color='#CB8900';

    	}

    	elseif ($percentage >=40 && $percentage<=50) {

    		$color='#CFB500';

    	}

    	elseif ($percentage >=50 && $percentage<=60) {

    		$color='#C5D400';

    	}

    	elseif ($percentage >=60 && $percentage<=70) {

    		$color='#9ED800';

    	}

    	elseif ($percentage >=70 && $percentage<=80) {

    		$color='#76DC00';

    	}

    	elseif ($percentage >=80 && $percentage<=90) {

    		$color='#4CE000';	

    	}

    	else {

    		$color='#21E500';

    	}



    	return $color;

    }



    function get_distinct_db_value($feild_name, $table_name, $condtion)

    {	

    	$this->db->distinct();

    	$this->db->select($feild_name);

    	$this->db->from($table_name);

    	$this->db->where($condtion);

    	$query =  $this->db->get()->result_array();

    	return count($query);

    }



    function delete_clusters($taskid) {

    	$this->db->where(array('taskid' => $taskid));

    	$this->db->delete('bm_tasks_clusters');

    	return TRUE;

    }



    function detele_assigned_users ($taskid) {

    	$this->db->where(array('taskid' => $taskid));

    	$this->db->delete('bm_tasks_assigned');

    	return TRUE;

    }



    function delete_task ($taskid) {

    	$this->db->where(array('task_id' => $taskid));

    	$this->db->update('bm_tasks', array('active' => '0'));

    	return TRUE;

    }



    function delete_assigned_user($userid, $taskid) {

    	$this->db->where(array('userid' => $userid,

    		'taskid' => $taskid));

    	$this->db->delete('bm_tasks_assigned');

    	return TRUE;

    }



    function update_header($data, $clusterid) {

    	$this->db->where(array('clusterid' => $clusterid));

    	$this->db->set($data);

    	$this->db->update('bm_clusters_info');

    	return TRUE;

    }


    //no longer used
    function get_header($id) {

    	$this->db->where(array('clusterid' => $id));

    	$this->db->join('bm_clusters', 'bm_clusters.id = bm_clusters_info.clusterid');

    	return $this->db->get('bm_clusters_info')->row();

    }

    function newget_header($id) {

    	$this->db->where(array('clusterid' => $id));

    	$this->db->join('bm_cluster', 'bm_cluster.id = bm_clusters_info.clusterid');

    	return $this->db->get('bm_clusters_info')->row();

    }



    function get_attendance_new($id) {

    	$this->db->where(array('id' => $id));

    	return $this->db->get('bm_attendance')->result();

    }



    public function color_reverse($percentage){



    	if($percentage == 200) {

    		$color = '#000';

    	}

    	elseif ($percentage < 0) {

    		$color='#BF0F00';

    	}

    	elseif ($percentage >=0 && $percentage<=10) {

    		$color='#21E500';

    	}

    	elseif ($percentage >=10 && $percentage<=20) {

    		$color='#4CE000';

    	}

    	elseif ($percentage >=20 && $percentage<=30) {

    		$color='#76DC00';

    	}

    	elseif ($percentage >=30 && $percentage<=40) {

    		$color='#9ED800';

    	}

    	elseif ($percentage >=40 && $percentage<=50) {

    		$color='#C5D400';

    	}

    	elseif ($percentage >=50 && $percentage<=60) {

    		$color='#CFB500';

    	}

    	elseif ($percentage >=60 && $percentage<=70) {

    		$color='#CB8900';

    	}

    	elseif ($percentage >=70 && $percentage<=80) {

    		$color='#C75F00';

    	}

    	elseif ($percentage >=80 && $percentage<=90) {

    		$color='#C33600';	

    	}

    	else {

    		$color='#BF0F00';

    	}



    	return $color;

    }



    function check_comments($userid, $taskid){



    	$date = new DateTime("now");

    	$curr_date = $date->format('Y-m-d');



    	$yesterday = date('Y-m-d', strtotime("-1 days"));



    	$daybefore = date('Y-m-d', strtotime("-2 days"));



    	$this->db->where(array('userid' => $userid,

    		'taskid' => $taskid));

    	$this->db->order_by('created', 'DESC');

    	$result = $this->db->get('task_comments')->row();



    	if(isset($result)) {

    		$date = new DateTime($result->created);

    		$date = $date->format('Y-m-d');

    	}

    	if (!isset($result)) {

    		return 5;

    	} elseif ($date == $curr_date) {

    		return trim(1);

    	} elseif($date == $yesterday) {

    		return trim(2);

    	} elseif ($date == $daybefore) {

    		return trim(3);

    	} elseif ($date !== NULL) {

    		return trim(4);

    	} 	

    }



    function update_role($userid, $taskid, $data) {

    	$this->db->where(array('userid' => $userid,

    		'taskid' => $taskid));

    	$this->db->set($data);

    	$this->db->update('bm_tasks_assigned');

    	return trim(TRUE);

    }



    function recurring_tasks() {

    	$results = $this->db->get_where('bm_tasks', array('reccuring' => 1))->result();

    	foreach ($results as $result) {

    		$date = date_add(new DateTime($result->startdate), date_interval_create_from_date_string("1 month"));

    		print_r($result->startdate);

    		return date_format($date,"Y-m-d");

    	}

    }



    public function delete_resources($toolid)

    {

    	$this->db->where('toolid',$toolid);

    	$this->db->delete('bm_tools');

    	return trim(1);

    }

    function del_activity($activityid){



    	$this->db->db_debug=FALSE;

    	$this->db->where('id',$activityid);

    	if($this->db->delete('bm_clusters_details')){

    		return TRUE;

    	}

    	else{

			// echo "error";

    		return FALSE;

    	}

    }



    function apply_leave($date, $reason) {

		//$this->db->where(array('userid' => $this->session->userdata('id'),'date' => $date));

    	$data = array('reason1' => $reason,

    		'userid' => $this->session->userdata('id'),

    		'date' => $date);

    	$this->db->insert('bm_attendance_leave', $data);

    	return TRUE;

    }



    public function editResources_m($toolid,$data)

    {

    	$this->db->where('toolid',$toolid);

    	return $this->db->update('bm_tools',$data); 

    }

}

