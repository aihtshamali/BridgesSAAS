<?php 
class Taskmanagement extends CI_Controller {

	function __construct() {
		parent::__construct();

		$this->load->helper('fhk_authorization_helper');	//for authorization
		$this->load->model('Taskmanagement_m','taskmanagement_m');
		$this->load->model('user_m');
		$this->load->library('session');
		$this->load->helper('form');
		$this->load->library('form_validation');
	}
	
	function index() {
		if(($id=fhkCheckAuthentication())!==null)
			redirect('taskmanagement/Navigation');
		else
			redirect('user');
	}
	
	function Navigation() {
		fhkAuthPage(null, null);
		$data['newsletter']=$this->taskmanagement_m->getLatestNewsLetter();
		$this->load->view('Navigation.php',$data);
	}

	function taskManager() {	

		fhkAuthPage(null, null);
		$activityid = $this->input->get('id');
		$data['getTools'] =  $this->taskmanagement_m->getAllData('*', 'bm_tools', array('clusterid' => $activityid));

// print_r($this->session->userdata('usertype'));
		// if ($this->session->userdata('usertype') == "Director") {
			$data['activities'] =  $this->taskmanagement_m->get_activities($activityid);
				$x = 0;
				foreach ($data['activities'] as $activity) {
					if(fhkCheckAuthPermission(["canViewAllTasks", "canDoEverything"]))
						$data['activities'][$x] = $this->taskmanagement_m->get_activity_tasks($activity['id']);
					else
						$data['activities'][$x] = $this->taskmanagement_m->get_activity_tasks_new($activity['id'],$_SESSION['id']);
					$y=0;

					foreach ($data['activities'][$x] as $details) {
						if(fhkCheckAuthPermission(["canViewAllTasks", "canDoEverything"]))
							$n[$details['taskid']] = $this->taskmanagement_m->get_assigned_tasks($details['taskid']);
						else
							$n[$details['taskid']] = $this->taskmanagement_m->newget_assigned_tasks($details['taskid'],$_SESSION['id']);
						array_push($data['activities'][$x][$y], $n[$details['taskid']]);
						$y++;
			}
				$x++;
			}
			
				$clusterid = $this->input->get('id');
			
				$data['bm_tools'] = $this->taskmanagement_m->get_title($clusterid);
				$data['template'] = 'taskmanagement';
				$data['activityid'] = $activityid;
				$data['activity2'] = $this->taskmanagement_m->get_activities($activityid);

				$data['header'] = $this->taskmanagement_m->get_header($activityid);
				$data['clusterData'] = $this->taskmanagement_m->getAllClusters();
				// print_r($data['header']);exit;

				$this->load->view('include/template',$data);

		//  Starting Commenting by Aihtsham

		// } else {
		// 	$data['activities'] =  $this->taskmanagement_m->get_activities($activityid);
		// 	$x = 0;
		// 	foreach ($data['activities'] as $activity) {
		// 		$data['activities'][$x] = $this->taskmanagement_m->get_activity_tasks_new($activity['id'], $this->session->userdata('id'));

		// 		$y=0; 
		// 		foreach ($data['activities'][$x] as $details) {
		// 			$n[$details['taskid']] = $this->taskmanagement_m->newget_assigned_tasks($details['taskid']);
					
		// 			array_push($data['activities'][$x][$y], $n[$details['taskid']]);
		// 			$y++;
		// 	}
		// 	//echo"<pre>"; print_r($data['activities']); exit;
		// 	$x++;
		// }
		// $score = 0;
		// $ratings = $this->get_task_rating();
		// $z = 0;
		// foreach ($ratings as $rating) {
		// 	$data['rate'][$z] = $rating;
		// 		foreach ($rating as $rate) {
		// 			$score += $rate['rating'];
		// 			}
		// 	$data['rate'][$z]['score'] = $score / 6;
		// 	$z++;
		// } //echo "<pre>";print_r($data['rate']); exit;
		// $clusterid = $this->input->get('id');
		// 	$data['bm_tools'] = $this->taskmanagement_m->get_title($clusterid);
		// 	$data['template'] = 'taskmanagement-new';
		// 	$data['activityid'] = $activityid;
		// 	$data['activity2'] = $this->taskmanagement_m->get_activities($activityid);
		// 	$data['header'] = $this->taskmanagement_m->newget_header($activityid);

		// 	$this->load->view('include/template',$data);


		// }
// Ending Bracket
		// var_dump($this->taskmanagement_m->get_tools());
		// exit;
	}

	public function index1() {
		$clusters = $this->input->post('brand[]');
		// print_r($clusters);
	}
/*aaa*/
	public function testing() {
		$data['template'] = 'aaa';
		$this->load->view('include/template',$data);
	}
/*aaa ends here*/

	public function get_task_form() {
		$data['users'] = $this->taskmanagement_m->get_users();
		
		$data['cluster1'] = $this->taskmanagement_m->get_clusters(1);
		$data['cluster2'] = $this->taskmanagement_m->get_clusters(2);
		$data['cluster3'] = $this->taskmanagement_m->get_clusters(3);
		$data['cluster4'] = $this->taskmanagement_m->get_clusters(4);
		$data['cluster5'] = $this->taskmanagement_m->get_clusters(5);

		$data['template'] = 'form';
		$this->load->view('include/template',$data);
	}

	public function create_task() {
		fhkAuthPage(null, ["canAddNewTask", "canDoEverything"]);
		// echo "<pre>";
		// var_dump($_REQUEST); exit;
		$clusterid = $this->input->post('clusterid');
		//print_r($_REQUEST); exit;
		$data = array(
			'taskname' => $this->input->post('task_title'),
			'taskdescription' => $this->input->post('task_description'),
			'taskstatus' => 'Pending',
			'ongoing' => $this->input->post('ongoing'),
			'startdate' => $this->input->post('start_date'),
			'enddate' => $this->input->post('end_date'),
			'createdby' => $this->session->userdata('id'),
			'effort'  => $this->input->post('effort'),
			'reccuring' => $this->input->post('reccuring')
			);

		$taskid = $this->taskmanagement_m->create_task($data);
		
		//Clusters
		$x = 0;
		if(isset($_POST["employeeID"]) && is_array($_POST["employeeID"])){ 
		    foreach($_POST["employeeID"] as $key => $value){
		    	$role = $_POST['sRole'][$x];
		        $this->add_user_to_task($taskid, $value, $role);
		        $x++;
		    }
		}

		//connect task to sub categories
		foreach($_POST["cluster-selected"] as $cluster)
			$this->add_cluster($taskid, $cluster);

	    /*for ($i=1; $i <= 5 ; $i++) 
	    { */
	    	/*
	    	if(isset($_POST['cluster-1'])){
			foreach($_POST["cluster-1"] as $cluster)
				$this->add_cluster($taskid, $cluster);
			}
			if(isset($_POST["cluster-2"])){
			foreach($_POST["cluster-2"] as $cluster)
				$this->add_cluster($taskid, $cluster);
			}
			if(isset($_POST["cluster-3"])){
			foreach($_POST["cluster-3"] as $cluster)
				$this->add_cluster($taskid, $cluster);
			}
			if(isset($_POST["cluster-4"])){
			foreach($_POST["cluster-4"] as $cluster)
				$this->add_cluster($taskid, $cluster);
			}
			if(isset($_POST["cluster-5"])){
			foreach($_POST["cluster-5"] as $cluster)
				$this->add_cluster($taskid, $cluster);		
			}*/
	    //}	
		//die("END");
		redirect(base_url().'taskmanagement/taskmanager/?id='.$clusterid, 'refresh'); 
	}

	public function view_task($id) {
		$data['task'] = $this->taskmanagement_m->get_task($id);
	
		$data['assigned'] = $this->taskmanagement_m->get_task_assigned($id);
		$data['cluster1'] = $this->taskmanagement_m->get_clusters(1);
		$data['cluster2'] = $this->taskmanagement_m->get_clusters(2);
		$data['cluster3'] = $this->taskmanagement_m->get_clusters(3);
		$data['cluster4'] = $this->taskmanagement_m->get_clusters(4);
		$data['cluster5'] = $this->taskmanagement_m->get_clusters(5);

		$data['selecterdclusters1'] = $this->taskmanagement_m->get_task_clusters(1);
		$data['selecterdclusters2'] = $this->taskmanagement_m->get_task_clusters(2);
		$data['selecterdclusters3'] = $this->taskmanagement_m->get_task_clusters(3);
		$data['selecterdclusters4'] = $this->taskmanagement_m->get_task_clusters(4);
		$data['selecterdclusters5'] = $this->taskmanagement_m->get_task_clusters(5);

		$data['template'] = 'task-view';
		$this->load->view('include/template',$data);
	}

	public function get_all_tasks() {
		$id = $this->session->userdata('id');
		$tasks = $this->taskmanagement_m->get_all_tasks($id);

		foreach ($tasks as $task) {
			$data['tasks'] = $this->taskmanagement_m->get_task_details();
		}
		var_dump($data['tasks']);
	}

	public function get_user_initials() {
		$id = $_POST['id'];
		echo json_encode($this->taskmanagement_m->newget_user_initials($id));
	}
	public function get_designation() {
		$id = $_POST['id'];
		echo json_encode($this->taskmanagement_m->get_designation($id));
	}

	public function add_user_to_task($taskid, $userid, $role) 
	{
		$data = array(
					'userid' => $userid,
					'taskid' => $taskid,
					'role' => $role
					);

		$this->taskmanagement_m->add_user_to_task($data);
	}

	public function delete_user_from_task($task, $user) {
		$this->taskmanagement_m->delete_user_from_task($task, $user);
	}

	public function create_cluster(){
		fhkAuthPage(null, ["canCreateNewCluster", "canDoEverything"]);
		$this->taskmanagement_m->newCluster($_POST["clustername"]);
		redirect(base_url().'taskmanagement/manager/?id=1', 'refresh');
	}

	private function add_cluster($task, $cluster) {
		$this->taskmanagement_m->add_cluster(array(
			'taskid' => $task,
			'task_clusterid' => $cluster
			));
	}

	public function deleteTask($task) 
	{	
		$this->taskmanagement_m->remove_Tasks($task);
	}

	public function update_task()
	{	
		fhkAuthPage(null, ["canUpdateTask", "canDoEverything"]);
		$data   = array(
					'taskname'        => $this->input->post('task_title'),
					'taskdescription' => $this->input->post('task_description'),
					'taskstatus'      => 'Pending',
					'ongoing'         => $this->input->post('ongoing'),
					'startdate'       => $this->input->post('start_date'),
					'enddate'         => $this->input->post('end_date'),
					'createdby'       => $this->session->userdata('id'),
					'effort'		  => $this->input->post('effort'),
					'reccuring'		  => $this->input->post('reccuring')
					);
		
		$taskid = $this->taskmanagement_m->updateTask($_POST["taskId1"] , $data);
		
		//Clusters
		$x = 0;
		if(isset($_POST["employeeID"]) && is_array($_POST["employeeID"]))
		{ 
		    foreach($_POST["employeeID"] as $key => $value)
		    {	
		    	$bFlag =  $this->taskmanagement_m->check_task('id', 'bm_tasks_assigned',  array('taskid' => $taskid, 'userid' => $value) );

		    	if ($bFlag == FALSE)
		    	{	
					$role = $_POST['sRole'][$x];
					$this->add_user_to_task($taskid, $value, $role);
					
		    	}
		    	$x++;
		    }
		}

		//remove previous records
		$this->taskmanagement_m->remove('bm_tasks_clusters', array('taskid' => $taskid));

		foreach($_POST["cluster-selected"] as $cluster) {
			$bFlag =  $this->taskmanagement_m->check_task('task_cluster_id', 'bm_tasks_clusters',  array('taskid' => $taskid, 'task_clusterid' => $cluster) );

			if ($bFlag == FALSE)
				$this->add_cluster($taskid, $cluster);
		}
			
			/*
		if(isset($_POST["cluster-1"]))
		{	
			foreach($_POST["cluster-1"] as $cluster)
			{

				$bFlag =  $this->taskmanagement_m->check_task('task_cluster_id', 'bm_tasks_clusters',  array('taskid' => $taskid, 'task_clusterid' => $cluster) );

				if ($bFlag == FALSE)
					$this->add_cluster($taskid, $cluster);
								
			}	
			

		}	

		if(isset($_POST["cluster-2"]))
		{
			foreach($_POST["cluster-2"] as $cluster)
			{

				$bFlag =  $this->taskmanagement_m->check_task('task_cluster_id', 'bm_tasks_clusters',  array('taskid' => $taskid, 'task_clusterid' => $cluster) );

				if ($bFlag == FALSE)
					$this->add_cluster($taskid, $cluster);
								
			}	
			

		}	


		if(isset($_POST["cluster-3"]))
		{
			foreach($_POST["cluster-3"] as $cluster)
			{

				$bFlag =  $this->taskmanagement_m->check_task('task_cluster_id', 'bm_tasks_clusters',  array('taskid' => $taskid, 'task_clusterid' => $cluster) );

				if ($bFlag == FALSE)
					$this->add_cluster($taskid, $cluster);
								
			}	
			

		}	


		if(isset($_POST["cluster-4"]))
		{
			foreach($_POST["cluster-4"] as $cluster)
			{

				$bFlag =  $this->taskmanagement_m->check_task('task_cluster_id', 'bm_tasks_clusters',  array('taskid' => $taskid, 'task_clusterid' => $cluster) );

				if ($bFlag == FALSE)
					$this->add_cluster($taskid, $cluster);
								
			}	
			

		}	

		if(isset($_POST["cluster-5"]))
		{
			foreach($_POST["cluster-5"] as $cluster)
			{

				$bFlag =  $this->taskmanagement_m->check_task('task_cluster_id', 'bm_tasks_clusters',  array('taskid' => $taskid, 'task_clusterid' => $cluster) );

				if ($bFlag == FALSE)
					$this->add_cluster($taskid, $cluster);
								
			}	
			

		}*/

	   return TRUE;
	}

	public function task2($id) 
	{	
		$data['task']               = $this->taskmanagement_m->get_task($id);
		$data['getMsgs']            = $this->taskmanagement_m->get_comments($id);
		$data['clussternumber']     = $activityid = $this->input->get('id');
		
		$data['assigned']           = $this->taskmanagement_m->get_task_assigned($id);
		$data['cluster1']           = $this->taskmanagement_m->get_clusters(1);
		$data['cluster2']           = $this->taskmanagement_m->get_clusters(2);
		$data['cluster3']           = $this->taskmanagement_m->get_clusters(3);
		$data['cluster4']           = $this->taskmanagement_m->get_clusters(4);
		$data['cluster5']           = $this->taskmanagement_m->get_clusters(5);

		$data['selecterdclusters1'] = $this->taskmanagement_m->get_task_clusters(1);
		$data['selecterdclusters2'] = $this->taskmanagement_m->get_task_clusters(2);
		$data['selecterdclusters3'] = $this->taskmanagement_m->get_task_clusters(3);
		$data['selecterdclusters4'] = $this->taskmanagement_m->get_task_clusters(4);
		$data['selecterdclusters5'] = $this->taskmanagement_m->get_task_clusters(5);
	//echo "<pre>"; var_dump($data['assigned']); exit;

		$data['template'] = 'task2';
		$this->load->view('include/template',$data);
	}

	function saveMsg() 
	{
		$bFlag =  $this->taskmanagement_m->check_task('id', 'newba_users',  array('id' => $this->input->post('userId')) );

		if($bFlag == TRUE)
		{
			$sData = array("taskid"  => $this->input->post('taskId'),
						   "userid"  => $this->input->post('userId'),
						   "msg"     => $this->input->post('msg')
					 	  );	
			$bConfirm = $this->taskmanagement_m->insertMsg($sData);

			if($bConfirm)
				echo $bConfirm;
			else
				echo "FALSE"; 		
		}	
		else
			echo "FALSE";

	}
	
	function saveAttach() 
	{	
		$taskid = $this->input->post('taskid');
		// var_dump($taskid); exit();		
		$userId    = $this->session->userdata('id');
        $username  = $this->session->userdata('name');

        $bFlag =  $this->taskmanagement_m->check_task('id', 'newba_users',  array('id' => $userId) );

		if($bFlag == TRUE)
		{
			$config['upload_path']    = IMAGE_DIR_PATH;
	        $config['allowed_types']  = 'gif|jpg|png|pdf|doc|docx|xls|xlsx|ppt|pptx';
	        $config['max_size']       = 10000;
	        $config['max_width']      = 10024;
	        $config['max_height']     = 7068;
	        $config['encrypt'] 		  = TRUE;

	        $this->load->library('upload', $config);   

	        if ( ! $this->upload->do_upload('attachFile'))
	            echo "FALSE|-|".strip_tags($this->upload->display_errors());

	        else
	        {
	         
	            $ImageData  = array('upload_data' => $this->upload->data());
	    	    $image_name = $ImageData['upload_data']['file_name'];
	          

				$sData = array("taskid"  => $this->input->post('taskid'),
							   "userid"  => $userId,
							   "msg"     => $image_name,
							   "type"    => 1,
						 	  );
				// var_dump($image_name);
				$bConfirm = $this->taskmanagement_m->insertMsg($sData);

				if($bConfirm)
					echo "TRUE|-|".$image_name;
				else
					echo "FALSE|-|Could not enter into the db please try again."; 		
			
	           
	        }

		}
		else
		echo "FALSE";
		

	}

	function getAssignedUser() 
	{	 
        $userId  = $this->input->post('userId');
        $data['assignedUsers'] = $this->taskmanagement_m->newget_task_assigned_user($userId, $this->input->post('taskId'));

        $data['SessionUserData'] = $this->taskmanagement_m->newget_task_assigned_user($this->session->userdata('id'), $this->input->post('taskId'));
        if($data['SessionUserData']==''||$data['SessionUserData']==null){
        	if($this->session->userdata('usertype') == "Director")
	        	$data['SessionUserRole']='Director';
        }else
	        $data['SessionUserRole']=$data['SessionUserData']->role;    
		$this->load->view('assigned_user',$data);
	
	}


	function getTaskEvaluation() 
	{
        $data['iUserId']        = $this->input->post('userId');
        $data['sRole']          = $this->input->post('role');
        $data['clustername']    = $this->input->post('clustername');
        $data['iTaskId']        = $this->input->post('taskid');
        // $data['evaluationText'] = $this->taskmanagement_m->getAll('bm_tasks_evaluation');
        $data['evaluationText'] = $this->taskmanagement_m->getByCluster('bm_tasks_evaluation',$data['clustername']);
        // echo '<pre>';print_r($data['evaluationText']);exit;
        $data['evaluation']     = $this->taskmanagement_m->getEvaluationData($data['iTaskId'], $data['iUserId']);
        $data['taskEvaluation'] = $this->taskmanagement_m->newget_task_assigned_user($data['iUserId'], $data['iTaskId']);

       // $data['designation']    = $this->taskmanagement_m->get_task_assigned_user($data['iUserId'], $data['iTaskId']);

		$this->load->view('evaluation',$data);
	
	}
	function DeleteEvalutionData($id){

		return $this->taskmanagement_m->DeleteEvalutionData($id);
	}


	function saveEvaluateTask()
    {   
     //       echo "<pre>";
     //       var_dump($_POST); 
		   // exit;
		 $task_Date=  date('Y-m-d', strtotime($this->input->post("evalutaion_date")));
		   //If new Comment added 
           if ($this->input->post("sectionnewCount") > 0 && !empty($this->input->post("sectionnewCount")) ) 
           {
           		 for ($i=1; $i <= $this->input->post("section1Count"); $i++) 
        		 {  
        		 	
        		 if($this->session->userdata('usertype') == "Director")
				 {

        		 	if ( $this->taskmanagement_m->check_task('id', 'bm_tasks_evaluation', array('id' => $this->input->post("section1textId".$i), 'sectionid' => 1)) === FALSE) 
        		 	{
        		 		$data = array("title" => $this->input->post("section1text".$i),
        		                      "sectionid" => 1,
        		                  	   "cluster_id"=>$this->input->post('clusterId'));

	        			$taskid = $this->taskmanagement_m->insertData('bm_tasks_evaluation', $data );
        		 	}
        		 	else
        		 	{
        		 		$data = array("title" => $this->input->post("section1text".$i),
        		                       "sectionid" => 1,
        		                  	   "cluster_id"=>$this->input->post('clusterId'));
        				$this->taskmanagement_m->updateData('bm_tasks_evaluation', array("id" => $this->input->post("section1textId".$i)),  $data );
        		 	}
        		 }
        		 	if ( $this->taskmanagement_m->check_task('id', ' bm_tasks_rating', array('evaluationid' => $this->input->post("section1textId".$i), 'global' => 1, 'taskid' => $this->input->post('iTaskId'), 'userid' => $this->input->post('iUserId') ,'created'=> $task_Date)) === TRUE)
        		 	{
        		 		// echo 'sdf';
        		 		$data2 = array("rating" => $this->input->post("section1Option".$i),
        		               "userid" => $this->input->post("iUserId"),
        		               "taskid" => $this->input->post("iTaskId"),
        		               "evaluationid" => $this->input->post("section1textId".$i),
        		               "global" => 1,
        		               "created" => $task_Date
        		               );

        				$this->taskmanagement_m->updateData('bm_tasks_rating', array("evaluationid" => $this->input->post("section1textId".$i), "userid" => $this->input->post("iUserId")),  $data2);
        		 	}
        		 	else
        		 	{
        		 		$data2 = array("rating" => $this->input->post("section1Option".$i),
	        		               "userid" => $this->input->post("iUserId"),
	        		               "taskid" => $this->input->post("iTaskId"),
	        		               "evaluationid" => ((!empty($this->input->post("section1textId".$i))) ? $this->input->post("section1textId".$i) : $taskid ),
	        		               "global" => 1,
	        		               "created" => $task_Date
	        		               );
	        			$taskid = $this->taskmanagement_m->insertData('bm_tasks_rating', $data2 );
        		 	}	
        		}
           }

           
		   
		   
		   
		   
		   
		   if ($this->input->post("section1Count") > 0 && !empty($this->input->post("section1Count")) ) 
           {
           		 for ($i=1; $i <= $this->input->post("section1Count"); $i++) 
        		 {  
        		 	
        		 if($this->session->userdata('usertype') == "Director" || $this->session->userdata('usertype') == "Monitor" || $this->session->userdata('usertype') == "HR")
				 {

        		 	if ( $this->taskmanagement_m->check_task('id', 'bm_tasks_evaluation', array('id' => $this->input->post("section1textId".$i), 'sectionid' => 1)) === FALSE) 
        		 	{
        		 		$data = array("title" => $this->input->post("section1text".$i),
        		                      "sectionid" => 1,
        		                  	   "cluster_id"=>$this->input->post('clusterId'));
	        			$taskid = $this->taskmanagement_m->insertData('bm_tasks_evaluation', $data );
        		 	}
        		 	else
        		 	{
        		 		$data = array("title" => $this->input->post("section1text".$i),
        		                       "sectionid" => 1,
        		                  	   "cluster_id"=>$this->input->post('clusterId'));
        		 		// print_r($data);
        				$this->taskmanagement_m->updateData('bm_tasks_evaluation', array("id" => $this->input->post("section1textId".$i)),  $data );
        		 	}
        		 }
        		 	if ( $this->taskmanagement_m->check_task('id', 'bm_tasks_rating', array('evaluationid' => $this->input->post("section1textId".$i), 'global' => 1, 'taskid' => $this->input->post('iTaskId'), 'userid' => $this->input->post('iUserId') ,'created'=> $task_Date)) === TRUE)
        		 	{
        		 		$data2 = array("rating" => $this->input->post("section1Option".$i),
        		               "userid" => $this->input->post("iUserId"),
        		               "taskid" => $this->input->post("iTaskId"),
        		               "evaluationid" => $this->input->post("section1textId".$i),
        		               "global" => 1,
        		               "created" => $task_Date
        		               );

        				$this->taskmanagement_m->updateData('bm_tasks_rating', array("evaluationid" => $this->input->post("section1textId".$i), "userid" => $this->input->post("iUserId")),  $data2);
        		 	}
        		 	else
        		 	{
        		 		$data2 = array("rating" => $this->input->post("section1Option".$i),
	        		               "userid" => $this->input->post("iUserId"),
	        		               "taskid" => $this->input->post("iTaskId"),
	        		               "evaluationid" => ((!empty($this->input->post("section1textId".$i))) ? $this->input->post("section1textId".$i) : $taskid ),
	        		               "global" => 1,
	        		               "created" => $task_Date
	        		               );
	        			$taskid = $this->taskmanagement_m->insertData('bm_tasks_rating', $data2 );
        		 	}	
        		}
           }

           //section2 monitor

           if ( $this->input->post("section2Count") > 0 && !empty($this->input->post("section2Count")) ) 
           {
           		 for ($i=1; $i <= $this->input->post("section2Count"); $i++) 
        		 {  
        		 if($this->session->userdata('usertype') == "Director"){
        		 	if ( $this->taskmanagement_m->check_task('id', 'bm_tasks_evaluation', array('id' => $this->input->post("section2textId".$i), 'sectionid' => 2)) === FALSE) 
        		 	{
        		 		$data = array("title" => $this->input->post("section2text".$i),
        		                      "sectionid" => 2,
        		                  	   "cluster_id"=>$this->input->post('clusterId'));
	        			$taskid = $this->taskmanagement_m->insertData('bm_tasks_evaluation', $data );
        		 	}
        		 	else
        		 	{
        		 		$data = array("title" => $this->input->post("section2text".$i),
        		                       "sectionid" => 2,
        		                  	   "cluster_id"=>$this->input->post('clusterId'));
        				$this->taskmanagement_m->updateData('bm_tasks_evaluation', array("id" => $this->input->post("section2textId".$i)),  $data );
        		 	}
        		}	
        		 	if ($this->taskmanagement_m->check_task('id', ' bm_tasks_rating', array('evaluationid' => $this->input->post("section2textId".$i), 'global' => 2, 'userid' => $this->input->post('iUserId') ,'created'=> $task_Date)) === TRUE) 
        		 	{
        		 		$data2 = array("rating" => $this->input->post("section2Option".$i),
        		               "userid" => $this->input->post("iUserId"),
        		               "taskid" => $this->input->post("iTaskId"),
        		               "evaluationid" => $this->input->post("section2textId".$i),
        		               "global" => 2,
        		               "created" => $task_Date
        		               );
        				$this->taskmanagement_m->updateData('bm_tasks_rating', array("evaluationid" => $this->input->post("section2textId".$i), "userid" => $this->input->post("iUserId")),  $data2 );
        		 	}
        		 	else
        		 	{
        
        		 		$data2 = array("rating" => $this->input->post("section2Option".$i),
	        		               "userid" => $this->input->post("iUserId"),
	        		               "taskid" => $this->input->post("iTaskId"),
	        		               "evaluationid" => ((!empty($this->input->post("section2textId".$i))) ? $this->input->post("section2textId".$i) : $taskid ),
	        		               "global" => 2,
	        		               "created" => $task_Date
	        		               );
	        			$taskid = $this->taskmanagement_m->insertData('bm_tasks_rating', $data2 );
        		 	}	



        		 }
           }
           //section2


           //section3 company

           if ( $this->input->post("section3Count") > 0 && !empty($this->input->post("section3Count")) ) 
           {
           		 for ($i=1; $i <= $this->input->post("section3Count"); $i++) 
        		 {  
        		 	
        		if($this->session->userdata('usertype') == "Director"){	
        		 	if ( $this->taskmanagement_m->check_task('id', 'bm_tasks_evaluation', array('id' => $this->input->post("section3textId".$i), 'sectionid' => 3)) === FALSE) 
        		 	{
        		 		$data = array("title" => $this->input->post("section3text".$i),
        		                      "sectionid" => 3,
        		                  	   "cluster_id"=>$this->input->post('clusterId'));

	        			$taskid = $this->taskmanagement_m->insertData('bm_tasks_evaluation', $data );
        		 	}
        		 	else
        		 	{
        		 		$data = array("title" => $this->input->post("section3text".$i),
        		                       "sectionid" => 3,
        		                  	   "cluster_id"=>$this->input->post('clusterId'));

        				$this->taskmanagement_m->updateData('bm_tasks_evaluation', array("id" => $this->input->post("section3textId".$i)),  $data );

        		 	}	
        		}

        		 	if ( $this->taskmanagement_m->check_task('id', ' bm_tasks_rating', array('evaluationid' => $this->input->post("section3textId".$i), 'global' => 3, 'userid' => $this->input->post('iUserId') ,'created'=> $task_Date)) === TRUE) 
        		 	{

        		 		$data2 = array("rating" => $this->input->post("section3Option".$i),
        		               "userid" => $this->input->post("iUserId"),
        		               "taskid" => $this->input->post("iTaskId"),
        		               "evaluationid" => $this->input->post("section3textId".$i),
        		               "global" => 3,
        		               "created" => $task_Date
        		               );

        				$this->taskmanagement_m->updateData('bm_tasks_rating', array("evaluationid" => $this->input->post("section3textId".$i), "userid" => $this->input->post("iUserId")),  $data2 );
        		 		
        		 	}
        		 	else
        		 	{
        
        		 		$data2 = array("rating" => $this->input->post("section3Option".$i),
	        		               "userid" => $this->input->post("iUserId"),
	        		               "taskid" => $this->input->post("iTaskId"),
	        		               "evaluationid" => ((!empty($this->input->post("section3textId".$i))) ? $this->input->post("section3textId".$i) : $taskid ),
	        		               "global" => 3,
	        		               "created" => $task_Date
	        		               );
	        			$taskid = $this->taskmanagement_m->insertData('bm_tasks_rating', $data2 );
        		 	}	



        		 }
           }

           //section3



           //section4 rank
           // TODO
           if ( $this->input->post("section4Count") > 0 && !empty($this->input->post("section4Count")) ) 
           {
           		 for ($i=1; $i <= $this->input->post("section4Count"); $i++) 
        		 {  
        		 	
        		if($this->session->userdata('usertype') == "Director"){ 	
        		 	if ( $this->taskmanagement_m->check_task('id', 'bm_tasks_evaluation', array('id' => $this->input->post("section4textId".$i), 'sectionid' => 4)) === FALSE) 
        		 	{
        		 		$data = array("title" => $this->input->post("section4text".$i),
        		                      "sectionid" => 4,
        		                      "userid" => $this->input->post('userid'),
        		                  	   "cluster_id"=>$this->input->post('clusterId'));

	        			$taskid = $this->taskmanagement_m->insertData('bm_tasks_evaluation', $data );
        		 	}
        		 	else
        		 	{
        		 		$data = array("title" => $this->input->post("section4text".$i),
        		                       "sectionid" => 4,
          		                       "userid" => $this->input->post('userid'),
        		                  	   "cluster_id"=>$this->input->post('clusterId'));

        				$this->taskmanagement_m->updateData('bm_tasks_evaluation', array("id" => $this->input->post("section4textId".$i)),  $data );

        		 	}	
        		}

        		 	if ( $this->taskmanagement_m->check_task('id', ' bm_tasks_rating', array('evaluationid' => $this->input->post("section4textId".$i), 'global' => 4, 'userid' => $this->input->post('iUserId') ,'created'=> $task_Date)) === TRUE) 
        		 	{

        		 		$data2 = array("rating" => $this->input->post("section4Option".$i),
        		               "userid" => $this->input->post("iUserId"),
        		               "taskid" => $this->input->post("iTaskId"),
        		               "evaluationid" => $this->input->post("section4textId".$i),
        		               "global" => 4,
        		               "created" => $task_Date
        		               );

        				$this->taskmanagement_m->updateData('bm_tasks_rating', array("evaluationid" => $this->input->post("section4textId".$i), "userid" => $this->input->post("iUserId")),  $data2 );
        		 		
        		 	}
        		 	else
        		 	{
        
        		 		$data2 = array("rating" => $this->input->post("section4Option".$i),
	        		               "userid" => $this->input->post("iUserId"),
	        		               "taskid" => $this->input->post("iTaskId"),
	        		               "evaluationid" => ((!empty($this->input->post("section4textId".$i))) ? $this->input->post("section4textId".$i) : $taskid ),
	        		               "global" => 4,
	        		               "created" => $task_Date
	        		               );
	        			$taskid = $this->taskmanagement_m->insertData('bm_tasks_rating', $data2 );
        		 	}	



        		 }
           }

           //section4


            


    }

	function addTask() 
	{
		$data['clusterid'] = $this->input->get('id');
		//echo $this->input->get('id'); exit;
        $data['users'] = $this->taskmanagement_m->newget_users();
		
		/*
		$data['cluster1'] = $this->taskmanagement_m->get_clusters(1);
		$data['cluster2'] = $this->taskmanagement_m->get_clusters(2);
		$data['cluster3'] = $this->taskmanagement_m->get_clusters(3);
		$data['cluster4'] = $this->taskmanagement_m->get_clusters(4);
		$data['cluster5'] = $this->taskmanagement_m->get_clusters(5);
		*/
		$data['clusterCurrent'] = $this->taskmanagement_m->get_clusters($data['clusterid']);

		//var_dump($data['clusterCurrent']); die();
		$this->load->view('addtask', $data);
	
	}


	function editTask() {	
		$taskId = $this->input->post("taskId");
		$data['clusterId'] = $this->input->post("clusterId");

		$data['task'] = $this->taskmanagement_m->get_task($taskId);
		$data['users'] = $this->taskmanagement_m->newget_users();
		$data['assigned'] = $this->taskmanagement_m->newget_task_assigned($taskId);

		$data['clusterCurrent'] = $this->taskmanagement_m->get_clusters($data['clusterId']);
		$data['selectedClusters'] = $this->taskmanagement_m->get_task_clusters($taskId);
		
		//$data['template'] = 'edit-form';
		//var_dump($data); die();
		$this->load->view('edit-form',$data);
        
		
	}
	//anees
	function get_task_rating()
	{
		$evaluations = $this->taskmanagement_m->get_task_evaluation();
		$x = 0;
		foreach ($evaluations as  $evaluation) 
		{
			
			$rating[$x] = $this->taskmanagement_m->get_task_rating($evaluation['id']);
			$x++;
		}

		return $rating;
	}
 
	function getUserPerformance() 
	{	
        $userId                  = $this->input->post('userId');
        $data['userPerformance'] = $this->taskmanagement_m->getUserPerformanceCurrentMonth($userId);
    
    	//var_dump($data); die("END");
		$this->load->view('performance', $data);
	
	}
	//for caan new task assigned
	function testpro()
	{
		$this->load->view('testpro');
	}

	function payslip_getUserPerformance() 
	{	
        $userId                  = $this->input->post('userId');
        $data['userPerformance'] = $this->taskmanagement_m->getUserPerformance($userId);
        //var_dump($data); die();
		$this->load->view('payslip_performance', $data);
	
	}

	function addActivity()
	{
		fhkAuthPage(null, ['canAddNewActivity', "canDoEverything"]);
		$activityData = array("clusterid" => $this->input->post("clusterid"),
							  "title" => $this->input->post("activityTitle"),
							  "levelid" => 1

							 );
		// print_r($activityData);

		$bFlag        = $this->taskmanagement_m->insertData('bm_clusters_details', $activityData);

		if($bFlag != FALSE)
			redirect('taskmanagement/taskManager/?id='.$this->input->post("clusterid"));

	}

	public function editTaskPopup()
	{
		//var_dump($this->input->post("taskId")); var_dump($this->input->post("clusterId")); exit;
		fhkAuthPage(null, null);

		$taskId    = $this->input->post("taskId");
		$data['clusterId'] = $clusterId = $this->input->post("clusterId");

		$data['task']               = $this->taskmanagement_m->get_task($taskId);
		$data['id'] = $taskId;

		$data['getMsgs']            = $this->taskmanagement_m->get_comments($taskId);
		
		$data['clussternumber']     = $activityid = $clusterId;
		
		$data['assigned']           = $this->taskmanagement_m->newget_task_assigned($taskId);
		//echo"<pre>";print_r($data['assigned']);
		//exit();
		$data['cluster1']           = $this->taskmanagement_m->get_clusters(1);
		$data['cluster2']           = $this->taskmanagement_m->get_clusters(2);
		$data['cluster3']           = $this->taskmanagement_m->get_clusters(3);
		$data['cluster4']           = $this->taskmanagement_m->get_clusters(4);
		$data['cluster5']           = $this->taskmanagement_m->get_clusters(5);

		$data['selecterdclusters1'] = $this->taskmanagement_m->get_task_clusters(1);
		$data['selecterdclusters2'] = $this->taskmanagement_m->get_task_clusters(2);
		$data['selecterdclusters3'] = $this->taskmanagement_m->get_task_clusters(3);
		$data['selecterdclusters4'] = $this->taskmanagement_m->get_task_clusters(4);
		$data['selecterdclusters5'] = $this->taskmanagement_m->get_task_clusters(5);

		$this->load->view('edit-task',$data);

	}

	function addResource() {	
		fhkAuthPage(null, ['canAddNewResource', "canDoEverything"]);
		$resourceData = array("clusterid" => $this->input->post("clusterId"),
							  "title"     => $this->input->post("resourceTitle"),
							  "link"      => $this->input->post("resourceLink"),
							  "userid"    => $this->session->userdata['id']
							 );
		// var_dump($resourceData);
		// exit();
		$bFlag        = $this->taskmanagement_m->insertData('bm_tools', $resourceData);
		if($bFlag != FALSE)
			redirect('taskmanagement/taskManager/?id='.$this->input->post("clusterId"));
	}

	public function t_status() {
		fhkAuthPage(null, ["canSetCompleteStatus", "canDoEverything"]);
		//var_dump($_REQUEST['userid']); exit;
		$taskid = $_REQUEST['userid'];
		$status = array("taskstatus" => $_REQUEST['status']); 
		//$this->taskmanagement_m->t_status_update($taskid, $status);
		$response = $this->taskmanagement_m->updateData('bm_tasks', array("task_id" => $taskid), $status);
		if ($response) {
			echo "TRUE";
		}
		else {
			echo "FALSE";
		}
	}

	function editBmTaskPopup() {
		fhkAuthPage(null, ["canEditActivity", "canDoEverything"]);
		$bFlag = $this->taskmanagement_m->updateData('bm_clusters_details', array("id" => $this->input->post("bmTaskId")), array("title" => $this->input->post("taskTitle")));		
		//print_r($bFlag);exit;
		redirect('taskmanagement/taskManager/?id='.$this->input->post("editTaskclusterId"));
	}

	function delete_task() {
		fhkAuthPage(null, ["canDeleteTask", "canDoEverything"]);	
		if($this->taskmanagement_m->delete_clusters($this->input->post('taskid')) == TRUE) {
			$this->taskmanagement_m->detele_assigned_users($this->input->post('taskid'));
			$this->taskmanagement_m->delete_task($this->input->post('taskid'));
			echo "TRUE";
		}

	}

	function delete_assigned_user() {
		echo $this->input->post('userid');
		echo $this->input->post('taskid');
		$this->taskmanagement_m->delete_assigned_user($this->input->post('userid'), $this->input->post('taskid'));
		echo "TRUE";
		echo $this->input->post('userid');
		echo $this->input->post('taskid');
	}

	function update_header() {
		$data = array(	'impact' => $this->input->post('impact'),
						'outcomeo' => $this->input->post('outcomeo'),
						'outcomes' => $this->input->post('outcomes')
			);

		$this->taskmanagement_m->update_header($data, $this->input->post('clusterid'));
	}

	function get_attendance_new($id) {
		var_dump($this->taskmanagement_m->get_attendance_new($id));
	}

	// Zain
	function getAttendance() 
	{	
        $userId                  = $this->input->post('userId');
        $data['userPerformance'] = $this->taskmanagement_m->getUserPerformance($userId);
    
		$month = isset($_GET['month']) ? $_GET['month'] : date('m');
		$year = isset($_GET['year']) ? $_GET['year'] : date('Y');
		//$user_id = isset($_GET['user_id']) ? $_GET['user_id'] : 9;
		$this->load->model('attendance_model');
		$chart = $this->attendance_model->by_user($year, $month, $userId);
		$days = cal_days_in_month(CAL_GREGORIAN, 03, 2017);
	
		//var_dump($chart); die();
			foreach($chart as $day){
				
				$sunday = date_create($day->date);
				$sunday = $sunday->format('D');
				$late = date_diff(date_create($day->time_in), date_create($day->check_in));
				//print_r($late->format('%R%i'));echo "<br>";
				$late = $late->format('%R%i') + ($late->format('%R%h') * 60);
				//print_r($late);
				$day1 = date_create($day->date);
				if ($day->check_in == "00:00:00" && $sunday == "Sun") {
					continue;
				} elseif ($day->check_in == "00:00:00") {
					continue;
				} 
				/*
				elseif($day->relexation ==1) {
					$data['attendance'][$day1->format('j')] = "relaxation-".$day->reason;
					
				}*/elseif ($late < 0) {
					$data['attendance'][$day1->format('j')] = "intime";
				} elseif ($late <= 15) {
					$data['attendance'][$day1->format('j')] = "intime";
				} elseif ($late >= 15 && $late <= 59) {
					$data['attendance'][$day1->format('j')] = "late15";
				} elseif ($late >= 60 && $late <= 179) {
					$data['attendance'][$day1->format('j')] = "latehr";
				} elseif ($late >= 180 && $late <= 299 ) {
					$data['attendance'][$day1->format('j')] = "half";
				} elseif ($late >= 400) {
					$data['attendance'][$day1->format('j')] = "absent";
				} else {
					$data['attendance'][$day1->format('j')] = "absent";
				}
			}

			//var_dump($data1);

		// for($i=1;$i<=$days;$i++)
		// {
				
		// }

		$this->load->view('attendance', $data);
	}
function attendance_Data(){
        // print_r($this->input->post());
     $userId = $this->input->post('userId');
     $data['userPerformance'] = $this->taskmanagement_m->getUserPerformance($userId);
     $data['attendance_leave']=$this->taskmanagement_m->getLeaveData($userId);

    $month = isset($_GET['month']) ? $_GET['month'] : date('m');
    $year = isset($_GET['year']) ? $_GET['year'] : date('Y');
    // print_r($month);
    // exit;
    // //$user_id = isset($_GET['user_id']) ? $_GET['user_id'] : 9;
    $this->load->model('attendance_model');
    
// Month changed
  $data['public_holidays']=$this->attendance_model->getPublicHolidays(date('Y-'.$month.'-',strtotime('-1 months')));
      $chart = $this->attendance_model->by_user($year, $month, $userId);
    // echo'<pre>';print_r($chart);
    // exit();
    $days = cal_days_in_month(CAL_GREGORIAN, 03, 2017);
  	$data['userid']=$userId;
      foreach($chart as $day){
        //echo"<pre>";        
        $sunday = date_create($day->date);
        $sunday = $sunday->format('D');
        $late = date_diff(date_create($day->time_in), date_create($day->check_in));
        //print_r($late->format('%R%i'));echo "<br>";
        $late = $late->format('%R%i') + ($late->format('%R%h') * 60);
        //print_r($late);
        $day1 = date_create($day->date);
        
        if ($day->project_title ==  "The Bridges School" && $sunday == "Sat") {
          $data['attendance'][$day1->format('j')] = "sunday";
        }
        elseif ($sunday == "Sun") {
          $data['attendance'][$day1->format('j')] = "sunday";
        } elseif ($day->check_in == "00:00:00") {
          continue;
        } elseif ($late < 0) {
          $data['attendance'][$day1->format('j')] = "intime";
        } elseif ($late <= 15) {
          $data['attendance'][$day1->format('j')] = "intime";
        } elseif ($late >= 15 && $late <= 59) {
          $data['attendance'][$day1->format('j')] = "late15";
        } elseif ($late >= 60 && $late <= 179) {
          $data['attendance'][$day1->format('j')] = "latehr";
        } elseif ($late >= 180 && $late <= 299 ) {
          $data['attendance'][$day1->format('j')] = "half";
        } elseif ($late >= 400) {
          $data['attendance'][$day1->format('j')] = "absent";
        } else {
          $data['attendance'][$day1->format('j')] = "absent";
        }
      }
      // echo '<pre>';var_dump($data);
    // for($i=1;$i<=$days;$i++)
    // {
        
    // }

    $this->load->view('payslip_attendance', $data); 
}


	function payslip_getAttendanceSpecific(){

		$userId = $this->input->post('userId');
		$month = $this->input->post('month');
		$year = $this->input->post('year');
		
		if($month<10)
			$month="0".$month;
		
		$data['year']=$year;
		$data['month']=$month;

		$data['date'][0]=$year;
		$data['date'][1]=$month;
		$data['date'][2]= cal_days_in_month(CAL_GREGORIAN, (int) $month, (int) $year);

		//var_dump($data['date']); die();
		$data['userPerformance'] = $this->taskmanagement_m->getUserPerformanceSpecific($userId, $month, $year);

		//FIX: monthly
    	$data['attendance_leave']= $this->taskmanagement_m->getLeaveDataSpecific($userId, $month, $year);

		//var_dump($data['attendance_leave']); //die();
		$this->load->model('attendance_model');
		$this->load->model('Salaryslip_m');

		$data['userdetails'] = $this->Salaryslip_m->newpayslip($userId);
		
		$data['public_holidays']=$this->attendance_model->getPublicHolidays('-'.$month.'-');
		
    	$chart = $this->attendance_model->by_user($year, $month, $userId);

    	//var_dump($month); exit;
		$data['remainingholidays']=$this->attendance_model->userget_remaining_holiday($userId);

		//$month=date('m',strtotime('-1 months'));
		//$days = cal_days_in_month(CAL_GREGORIAN, $month, $year);

		//var_dump($chart); //die();
		$data['userid']=$userId;
			foreach($chart as $day){
				$sunday = date_create($day->date);
				$sunday = $sunday->format('D');

				//var_dump($day); die();
				$late = date_diff(date_create($day->time_in), date_create($day->check_in));
				$late = $late->format('%R%i') + ($late->format('%R%h') * 60);
				$day1 = date_create($day->date);
				
				
				if ($day->isSatOff==1 && $sunday == "Sat") {
					$data['attendance'][$day1->format('j')] = "sunday";
				}
				elseif ($sunday == "Sun") {
					$data['attendance'][$day1->format('j')] = "sunday";
				} elseif ($day->check_in == "00:00:00") {
					continue;
				} elseif ($late < 0) {
					$data['attendance'][$day1->format('j')] = "intime";
				} elseif ($late <= 15) {
					$data['attendance'][$day1->format('j')] = "intime";
				} elseif ($late >= 15 && $late <= 59) {
					$data['attendance'][$day1->format('j')] = "late15";
				} elseif ($late >= 60 && $late <= 179) {
					$data['attendance'][$day1->format('j')] = "latehr";
				} elseif ($late >= 180 && $late <= 299 ) {
					$data['attendance'][$day1->format('j')] = "half";
				} elseif ($late >= 400) {
					$data['attendance'][$day1->format('j')] = "absent";
				} else {
					$data['attendance'][$day1->format('j')] = "absent";
				}
			}

		$this->load->view('payslip_attendance', $data);	
	}

	function payslip_getAttendance() 
	{	
		//$month = $this->input->post('month');
		//$year = $this->input->post('year');

        $userId                  = $this->input->post('userId');
		$data['userPerformance'] = $this->taskmanagement_m->getUserPerformance($userId);
    	$data['attendance_leave']=$this->taskmanagement_m->getLeaveData($userId);

		$month = isset($_GET['month']) ? $_GET['month'] : date('m');
		
		$year = isset($_GET['year']) ? $_GET['year'] : date('Y');
		$data['mont']=null;	

		if($month==01 || $month==1)
		{
			$year=$year-1;
		}

		// print_r($year);
		// exit;

		// //$user_id = isset($_GET['user_id']) ? $_GET['user_id'] : 9;
		$this->load->model('attendance_model');
		$this->load->model('Salaryslip_m');
		$data['userdetails'] = $this->Salaryslip_m->newpayslip($userId);

		
// Month changed
		//date('-m-',strtotime('-1 months'))
		$data['public_holidays']=$this->attendance_model->getPublicHolidays('-'.$month.'-');

    	// print_r($data['public_holidays']);exit;
    	$chart = $this->attendance_model->by_user($year, $month, $userId);

		//
		$data['remainingholidays']=$this->attendance_model->userget_remaining_holiday($userId);
			$month=date('m',strtotime('-1 months'));
		$days = cal_days_in_month(CAL_GREGORIAN, $month, $year);
		// print_r($days);exit;
		$data['userid']=$userId;
			foreach($chart as $day){
				//echo"<pre>";				
				$sunday = date_create($day->date);
				// print_r($sunday);
				$sunday = $sunday->format('D');
				$late = date_diff(date_create($day->time_in), date_create($day->check_in));
				//print_r($late->format('%R%i'));echo "<br>";
				$late = $late->format('%R%i') + ($late->format('%R%h') * 60);
				// echo '<pre>';print_r($late);
				$day1 = date_create($day->date);
				
				if ($day->project_title == 	"The Bridges School" && $sunday == "Sat") {
					$data['attendance'][$day1->format('j')] = "sunday";
				}
				elseif ($sunday == "Sun") {
					$data['attendance'][$day1->format('j')] = "sunday";
				} elseif ($day->check_in == "00:00:00") {
					continue;
				} elseif ($late < 0) {
					$data['attendance'][$day1->format('j')] = "intime";
				} elseif ($late <= 15) {
					$data['attendance'][$day1->format('j')] = "intime";
				} elseif ($late >= 15 && $late <= 59) {
					$data['attendance'][$day1->format('j')] = "late15";
				} elseif ($late >= 60 && $late <= 179) {
					$data['attendance'][$day1->format('j')] = "latehr";
				} elseif ($late >= 180 && $late <= 299 ) {
					$data['attendance'][$day1->format('j')] = "half";
				} elseif ($late >= 400) {
					$data['attendance'][$day1->format('j')] = "absent";
				} else {
					$data['attendance'][$day1->format('j')] = "absent";
				}
			}
			// print_r($data['attendance']);exit;
			// print_r($month);exit;
		$data['year']=$year;
		$data['month']=$month;
		// print_r($month);exit;
		
		$this->load->view('payslip_attendance', $data);
	}
	
	
	
	
	
	function payslip_getAttendancecurrent() 
	{	
        $userId                  = $this->input->post('userId');
		$data['userPerformance'] = $this->taskmanagement_m->getUserPerformance($userId);
    
		$month = isset($_GET['month']) ? $_GET['month'] : date('m');
		$month=$month+1;
		$year = isset($_GET['year']) ? $_GET['year'] : date('Y');
		//$user_id = isset($_GET['user_id']) ? $_GET['user_id'] : 9;
		$this->load->model('attendance_model');
		$chart = $this->attendance_model->by_user($year, $month, $userId);
		//print_r($chart);
		//exit();
		$days = cal_days_in_month(CAL_GREGORIAN, 03, 2017);
	
			foreach($chart as $day){
				//echo"<pre>";				
				$sunday = date_create($day->date);
				$sunday = $sunday->format('D');
				$late = date_diff(date_create($day->time_in), date_create($day->check_in));
				//print_r($late->format('%R%i'));echo "<br>";
				$late = $late->format('%R%i') + ($late->format('%R%h') * 60);
				//print_r($late);
				$day1 = date_create($day->date);
				
				if ($day->project_title == 	"The Bridges School" && $sunday == "Sat") {
					$data['attendance'][$day1->format('j')] = "sunday";
				}
				elseif ($sunday == "Sun") {
					$data['attendance'][$day1->format('j')] = "sunday";
				} elseif ($day->check_in == "00:00:00") {
					continue;
				} elseif ($late < 0) {
					$data['attendance'][$day1->format('j')] = "intime";
				} elseif ($late <= 15) {
					$data['attendance'][$day1->format('j')] = "intime";
				} elseif ($late >= 15 && $late <= 59) {
					$data['attendance'][$day1->format('j')] = "late15";
				} elseif ($late >= 60 && $late <= 179) {
					$data['attendance'][$day1->format('j')] = "latehr";
				} elseif ($late >= 180 && $late <= 299 ) {
					$data['attendance'][$day1->format('j')] = "half";
				} elseif ($late >= 400) {
					$data['attendance'][$day1->format('j')] = "absent";
				} else {
					$data['attendance'][$day1->format('j')] = "absent";
				}
			}
			//var_dump($data1);
		// for($i=1;$i<=$days;$i++)
		// {
				
		// }

		$this->load->view('payslip_attendance', $data);
	}
	
	
	
	
	
	
	
	

	function update_role() {
		$data = array('role' => $this->input->post('role'));
		$this->taskmanagement_m->update_role($this->input->post('userid'), $this->input->post('taskid'), $data);
		return trim(TRUE);
	}

	function test() {
		echo "<pre>";
		var_dump($this->taskmanagement_m->check_comments(7,198));
	}

	public function delete_resources()
	{
		if ($this->taskmanagement_m->delete_resources($this->input->post('toolid'))) {
			echo trim(1);
		}
		
	}

	function del_activity(){
		fhkAuthPage(null, ["canDeleteActivity", "canDoEverything"]);
		if ($this->taskmanagement_m->del_activity($this->input->post('activityid'))) {
			echo trim(1);
		}
		else{ 
			echo trim(0);
		}
	}

	function apply_leave() {
		$date = date('Y-m-d', mktime(0, 0, 0, date('m'), $this->input->post('date'), date('Y')));
		if($this->taskmanagement_m->apply_leave($date, $this->input->post('reason'))) {
			echo trim(TRUE);
		}
	}

	public function editResources()
	{
		fhkAuthPage(null, ["canEditResource", "canDoEverything"]);
		$id = $this->input->post('id');
		$toolid = $this->input->post('toolid');
		$data = array(
			'title' => $this->input->post('title'),
			'link' => $this->input->post('link')
			);
		if($this->taskmanagement_m->editResources_m($toolid,$data)){
			redirect('taskmanagement/taskManager/?id='.$id );	
		}
	}

}
