<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Employee_reg extends CI_Controller {

	 function  __construct() {
        parent::__construct();

        $this->load->helper('fhk_authorization_helper');
        $this->load->model("SharedModel");

        $this->load->model('Employee_model');
		$this->load->model('hr_m');
		$this->load->model('user_m');
		$this->load->library('session');
		if ($this->user_m->loggedin() == FALSE) {
			$this->session->set_userdata('page_url', current_url());
			  redirect('user/');
		}else
			return true;

    }
	public function check(){
		 $name_array = array();
        $count = count($_FILES['userfile']['size']);
        foreach($_FILES as $key=>$value)
        for($s=0; $s<=$count-1; $s++) {
        $_FILES['userfile']['name']=$value['name'][$s];
        $_FILES['userfile']['type']    = $value['type'][$s];
        $_FILES['userfile']['tmp_name'] = $value['tmp_name'][$s];
        $_FILES['userfile']['error']       = $value['error'][$s];
        $_FILES['userfile']['size']    = $value['size'][$s];
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']    = '100';
            $config['max_width']  = '1024';
            $config['max_height']  = '768';
        $this->load->library('upload', $config);
        $this->upload->do_upload();
        $data = $this->upload->data();
        $name_array[] = $data['file_name'];
            }
            $names= implode(',', $name_array);
            // print_r($names);exit;
     $this->load->database();
            $db_data = array(
                             'name'=> $names);
        $this->db->insert('img',$db_data);


            exit;
	}
	public function index()
	{

		$this->load->view('insert_employee');
	}
	public function checklist()
	{

		$this->load->view('checklist');
	}
	public function emp_module_2_view()
	{

		$this->load->view('emp_module_2_view_final');
	}
	public function emp_module_3_view()
	{

		$this->load->view('emp_module_3_view_final');
	}
	public function emp_module_4_view()
	{

		$this->load->view('emp_module_4_view_final');
	}
	public function emp_module_5_view()
	{

		$this->load->view('emp_module_5_view_final');
	}



	public function update_employee()
	{
		$emp_id=$this->input->post('emp_id');
		$name=$this->input->post('name');
		$cnic=$this->input->post('cnic');
		$address=$this->input->post('address');
		$last_name=$this->input->post('last_name');
		$biomet_id=$this->input->post('biomet_id');
		$date_of_birth=$this->input->post('date_of_birth');
		$picture=$_FILES['picture']['name'];
		$picture1=$_FILES['picture1']['name'];
		$picture2=$_FILES['picture2']['name'];
		$picture3=$_FILES['picture3']['name'];
		//Check whether user upload picture
		if(!empty($_FILES['picture']['name']))
		{
			$config['upload_path'] = 'uploads/';
			$config['allowed_types'] = 'jpg|jpeg|png|gif';
			$config['file_name'] = $_FILES['picture']['name'];
			//Load upload library and initialize configuration
			$this->load->library('upload',$config);
			if($this->upload->do_upload('picture'))
			{
				$uploadData = $this->upload->data();
				//echo '<pre>';print_r($uploadData);
				$picture = $uploadData['file_name'];
			}
			else
			{
				echo "picture name not found";
			}
		}

		if(!empty($_FILES['picture2']['name']))
		{
			$config['upload_path'] = 'uploads/';
			$config['allowed_types'] = 'jpg|jpeg|png|gif';
			$config['file_name'] = $_FILES['picture2']['name'];
			//Load upload library and initialize configuration
			$this->load->library('upload',$config);
			if($this->upload->do_upload('picture2'))
			{
				$uploadData = $this->upload->data();
				//echo '<pre>';print_r($uploadData);
				$picture2 = $uploadData['file_name'];
			}
			else
			{
				echo "picture name not found picture2";
			}
		}
		else
		{
			echo "picture is not picture2";
		}

		if(!empty($_FILES['picture1']['name']))
		{
			$config['upload_path'] = 'uploads/';
			$config['allowed_types'] = 'jpg|jpeg|png|gif';
			$config['file_name'] = $_FILES['picture1']['name'];
			//Load upload library and initialize configuration
			$this->load->library('upload',$config);
			if($this->upload->do_upload('picture1'))
			{
				$uploadData = $this->upload->data();
				//echo '<pre>';print_r($uploadData);
				$picture1 = $uploadData['file_name'];
			}
			else
			{
				echo "picture name not found picture2";
			}
		}
		else
		{
			echo "picture is not picture2";
		}

		if(!empty($_FILES['picture3']['name']))
		{
			$config['upload_path'] = 'uploads/';
			$config['allowed_types'] = 'jpg|jpeg|png|gif';
			$config['file_name'] = $_FILES['picture3']['name'];
			//Load upload library and initialize configuration
			$this->load->library('upload',$config);
			if($this->upload->do_upload('picture3'))
			{
				$uploadData = $this->upload->data();
				//echo '<pre>';print_r($uploadData);
				$picture3 = $uploadData['file_name'];
			}
			else
			{
				echo "picture name not found";
			}
		}
		else
		{
			echo "picture is not found999";
		}

		$this->db->where('emp_id', $emp_id);
		$dbdata = array(
		  "name" => $name,
		  "last_name" => $last_name,
		  "cnic" => $cnic,
		  "biomet_id" => $biomet_id,
		  "date_of_birth" => $date_of_birth,
		  "address" => $address,
		  'emp_image' => $picture,
		  'emp_cnic_scan' => $picture3,
		  'previous_employee_payslip' => $picture2,
		  'original_document_copy' => $picture1
		);
		// echo "<pre>"; print_r($dbdata); die;
		$this->db->update('insert_employee', $dbdata);
	}

	public function update_employee_emergency()
	{
		$emp_id=$this->input->post('current_user_id');
		$emergency_name=$this->input->post('emergency_name');
		$emergency_relation=$this->input->post('emergency_relation');
		$emergency_address=$this->input->post('emergency_address');
		$emergency_phone=$this->input->post('emergency_phone');

		$this->db->where('emp_id', $emp_id);
		$dbdata = array(
		  "emergency_name" => $emergency_name,
		  "emergency_relation" => $emergency_relation,
		  "emergency_address" => $emergency_address,
		  "emergency_phone" => $emergency_phone
		);
		$this->db->update('insert_employee', $dbdata);
	}

	public function update_employee_on_boarding_position()
	{
		$emp_id=$this->input->post('current_user_id');
		$boarding_position_project=$this->input->post('boarding_position_project');
		$on_boarding_title_by_project=$this->input->post('on_boarding_title_by_project');
		$on_boarding_level_by_project=$this->input->post('on_boarding_level_by_project');
		// $boarding_position_jd_level=$this->input->post('boarding_position_jd_level');
		// $boarding_position_grade=$this->input->post('boarding_position_grade');
		$boarding_position_sg_sal=$this->input->post('boarding_position_sg_sal');
		$boarding_position_ac_sal=$this->input->post('boarding_position_ac_sal');
		$boarding_position_shift=$this->input->post('boarding_position_shift');
		$boarding_position_break=$this->input->post('boarding_position_break');
		$boarding_position_dt_emp=$this->input->post('boarding_position_dt_emp');
		$boarding_position_uniform=$this->input->post('boarding_position_uniform');
		$boarding_position_office=$this->input->post('boarding_position_office');
		$boarding_position_pass=$this->input->post('boarding_position_pass');
		$boarding_position_softco=$this->input->post('boarding_position_softco');
		// $boarding_position_docs=$this->input->post('boarding_position_docs');

		$this->db->where('emp_id', $emp_id);
		$dbdata = array(
		  "project" => $boarding_position_project,
		  "title" => $on_boarding_title_by_project,
		  "selected_level" => $on_boarding_level_by_project,
		  // "jd_by_level" => $boarding_position_jd_level,
		  // "grade" => $boarding_position_grade,
		  "suggested_salary" => $boarding_position_sg_sal,
		  "actual_salary" => $boarding_position_ac_sal,
		  "shift" => $boarding_position_shift,
		  "break" => $boarding_position_break,
		  "date_employeed" => $boarding_position_dt_emp,
		  "uniform" => $boarding_position_uniform,
		  "office" => $boarding_position_office,
		  "passwords_list" => $boarding_position_pass,
		  "softcopies" => $boarding_position_softco,
		  // "documents" => $boarding_position_docs
		);
		// echo "<pre>"; print_r($dbdata); die;
		$this->db->update('insert_employee', $dbdata);
	}

	public function insert_emp_data()
	{
		// echo 's'; die;
		$picture = '';
		//print_r($this->input->post()); die;
		$name=$this->input->post('emp_name');
		$Lastname=$this->input->post('emp_last');
		$designation=$this->input->post('emp_des');
		$picture=$_FILES['picture']['name'];
		//print_r($_FILES);die;

			// echo "one"; die;

            //Check whether user upload picture
            if(!empty($_FILES['picture']['name']))
			{
				// echo "one"; die;
                $config['upload_path'] = 'uploads/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = $_FILES['picture']['name'];
                // echo "<pre>"; print_r($config); die;
                //Load upload library and initialize configuration
                $this->load->library('upload',$config);
                // $this->upload->initialize($config);

                if($this->upload->do_upload('picture')){
					// echo "two"; die;
                    $uploadData = $this->upload->data();
                    $picture = $uploadData['file_name'];
					// echo $picture; die;
                }
				else
				{
                    //$picture = '';
					echo "picture name not found";
                }
            }
			else
			{
                //$picture = '';
				echo "picture is not found999";
            }


		// $image=$this->input->post('emp_image');
		$data=array(
		'name' => $name,
		'last_name' => $Lastname,
		'designation' => $designation,
		'emp_image' => $picture
		);
		// echo "<pre>"; print_r($data); die;
		$inserted = $this->employee_model->add_emp($data);

}
function view_employee1()
	{
		// echo "ss"; die;
		$this->db->select('emp_id, name, emp_image,designation');
	$this->db->from('insert_employee');

	$query = $this->db->get();

	 $pic['data'] = $query->result_array();
	 $this->load->view('view_employee', $pic);
	 // echo '<pre>';
	 // print_r($pic);
	 // exit;
	}
	function view_employee()
	{
		// echo "ss"; die;
		$this->db->select('userid, initials, upload_picture,job_title');
	$this->db->from('newbm_user_details');

	$query = $this->db->get();

	 $pic['data'] = $query->result_array();
	 $this->load->view('view_employee', $pic);
	 // echo '<pre>';
	 // print_r($pic);
	 // exit;
	}

	function emp_blog($taskid){
		$this->load->model('user_m');
		if($this->user_m->loggedin() == TRUE){
			$data['messages']=$this->Employee_model->getblogData($taskid);
			$data['id']=$data['messages'][0]->created_for;
			$data['committee_members']=$this->Employee_model->getCommitteeMembers($taskid);
			$data['users']=$this->Employee_model->getAllActiveUsers($taskid);
			$data['session_userid']=$this->session->userdata['id'];
			$this->load->view('blog_view',$data);
		}
		else{
			$this->session->set_userdata('page_url', current_url());
		 	redirect('user/?id='.$id);
		}
		// print_r($id);exit;
	}
	function AddgrievanceCommittee(){
		$data=array(
			'post_id'=>$this->input->post('post_id'),
			'user_id'=>$this->input->post('commiteePerson_id')
			);
		$this->Employee_model->AddgrievanceCommittee($data);
		redirect($_SERVER['HTTP_REFERER']);

	}
	function NewBLogEntry(){
		$data=array(
				'name'=>$this->input->post('name'),
				'created_for'=>$this->input->post('created_for')
		);
		$this->Employee_model->newPost($data);
		redirect($_SERVER['HTTP_REFERER']);
	}
	function grievance_blog($userid){
		$this->load->model('user_m');
		if($this->user_m->loggedin() == TRUE){
			$data['grievance']=$this->Employee_model->getGrievanceData($userid);
			$data['id']=$userid;
			$data['session_userid']=$this->session->userdata['id'];
			$this->load->view('grievance_view',$data);
		}
		else{
			$this->session->set_userdata('page_url', current_url());
		 	redirect('user/?id='.$id);
		}
	}
	function newMessage(){
		$post_id=$this->input->post('post_id');
		$message=$this->input->post('message');
		$userid=$this->input->post('Sessionuser_id');
		$forUser=$this->input->post('Foruser');
		if(empty($this->Employee_model->getblogData($forUser)))
		{

			$data1=array(
				'name'=>'Post Created for'.$forUser,
				'created_for'=>$forUser
				);
				$post_id=$this->Employee_model->newPost($data1);
				print_r(json_encode(array('post_id' => $post_id)));
		}
		$data=array(
			'message'=>$message,
			'user_id'=>$userid,
			'post_id'=>$post_id
			);
		// print_r($data);exit;
			$this->Employee_model->SendMessage($data,$userid);

		// redirect($_SERVER['HTTP_REFERER']);
	}
	public function getLatestMessage(){
		$post_id=$this->input->post('post_id');
		// echo $post_id;
		print_r( json_encode($this->Employee_model->getLatestMessage($post_id)));
	}

	function sendJson($json) {
 		return $this->output
         ->set_content_type('application/json')
         ->set_status_header(200)
         ->set_output($json);
 	}
	public function emp_module_20181029($id=null) {

		//no id is provided and user is not logged in
		/*
		if($id===null) {
			if(($id=fhkCheckAuthentication()) === null) return;
		}*/

		//if requested id is other than logged in user then check role permissions
		if($id!==fhkCheckAuthentication())
			fhkAuthPageExtended(null, ["canViewProfiles", "canDoEverything"], $this);

		$data['id']=$id;

		$data["emp"]= $this->Employee_model->getUserData($id);
		$data["details"]= $this->Employee_model->getUserDetailed($id);
		$data["oldCv"]= $this->Employee_model->getArchieveCvData($id);
		$data["oldOffer"]= $this->Employee_model->getArchieveOfferData($id);

		//var_dump($data["oldCv"]); echo "<br/><br/>";
		//var_dump($data["oldOffer"]); die();
		$this->load->view('emp_module_20181029', $data);
	}

	//add "id" in "opt" array if table contains primary key named other than "id"
	public function detailsCRUD(){
		$post= json_decode(file_get_contents("php://input"));
		$operation= $post->operation;
		$data= $post->data;

		$table= "newbm_user_details";
		$opt = array('id' => "id");
		$id= $data->id;
		unset($data->id);

		if($operation=="list")
			sendJson($this->Employee_model->genericRead($table));
		else if($operation=="show")
			sendJson($this->Employee_model->genericShow($table, $id, $opt));
		else if($operation=="delete")
			$this->Employee_model->genericDelete($table, $id, $opt);
		else if($operation=="add") {
			if($id!=null) {
				$msg= $this->Employee_model->genericUpdate($table, $data, $id, $opt);
				$this->sendJson('{"flag": "updated", "err": '. json_encode($msg));
			}
			else
				$this->Employee_model->genericCreate($table, $data);
		}
	}

	function saveOfferHistory(){
		$post= json_decode(file_get_contents("php://input"));
		//die(json_encode($post));
		return $this->Employee_model->setArchieveOffer($post->id, $post->user_id, $post->description, $post->status, $post->additional, $post->notes);
	}

	function saveUserPrimaryData() {
		$id = $this->input->post('id');
		$id = ($id==""? null: $id);

		$newGuy= $this->Employee_model->setUserPrimaryData($id, $this->input->post('fname'), $this->input->post('mid_name'),$this->input->post('lname'), $this->input->post('email'), $this->input->post('contact'), $this->input->post('phone'), $this->input->post('emailOther'), $this->input->post('notes'));

		if($newGuy!=null)
			$this->sendJson('{"flag": "created", "redirect":"'. base_url('Employee_reg/emp_module_20181029/'.$newGuy).'"}');
		else
			$this->sendJson('{"flag": updated}');
	}

    function ArchiveCV() {
    	//get previous
    	//$id = $this->input->post('id');
    	//$oldCv = $this->Employee_model->getUserCurrentCv($id);
    	//if($oldCv!=null) $this->Employee_model->setArchieveCv($id, $oldCv->upload_cv);
    	//$this->SaveCv();
		redirect (base_url("Employee_reg/emp_module_20181029/".$id));
	}

	function deleteCV($id, $red){
		$this->Employee_model->clrArchieveCv($id);
		redirect (base_url("Employee_reg/emp_module_20181029/".$red));
	}

	function emp_module_1($id = null)
	{
		fhkAuthPageExtended(null, ["canViewProfiles", "canDoEverything"], $this);
		//print_r($this->session->userdata("email"));exit;
		//if($this->session->userdata('id')==$id || $this->session->userdata('usertype') == "Director" || $this->session->userdata('usertype') == "HR"){

		$this->load->model('the_bridg_employee');
		$data['equipments']=$this->the_bridg_employee->getEquipments($id);
		// print_r($data['equipments']);exit;
		$this->load->library('word');//load librerry as usual
		$data['id']=$id;
		//$data["userid"] = $userid;//  by juniaid nees to be changed
		// $data["emp"]= $this->hr_m->newgetuser($id);//new tables
		$data["emp"]= $this->Employee_model->newgetuser_row($id);//new tables
		$data["clu"]= $this->hr_m->getrank();
		$data["ran"]= $this->hr_m->getcluster();
		$data["des"]= $this->hr_m->getdesignation();
		$data["project"]= $this->Employee_model->get_projects();
		$data["levels"]= $this->Employee_model->get_levels();
		$data["office"]= $this->Employee_model->get_offices();
		$data["user_details"]= $this->Employee_model->get_user_details($id);
		$data["user_benefits"]= $this->Employee_model->get_user_benefits($id);
		$data["user_letters"]= $this->Employee_model->get_user_letter($id);
		$data["user_letter_img"]= $this->Employee_model->get_user_letterimg($id);
		$data['socials']=$this->hr_m->getUserSocialAssigned($id);
		$data["user_img"]= $this->Employee_model->get_user_cvimg($id);
		$data["shifts"]= $this->Employee_model->get_shifts();
		$data["grades"]= $this->Employee_model->get_grades();
		$data["expertise"]= $this->Employee_model->get_expertise();
		$data["user_project_title"]= $this->Employee_model->get_user_project($id);
		$data["users_project_title"]= $this->Employee_model->get_users_projects();
		$data["exit_procedure"]=$this->Employee_model->getexit_procedures($id);
		$data["employee_history"]=$this->Employee_model->getEmployee_history($id);
		$data["employee_history_onboard"]=$this->Employee_model->getOnboardById($id);
		// print_r($data["employee_history_onboard"]);exit;
		$this->load->view('emp_module_1_view_final',$data);

		//}
		//else
			//$this->load->view('unauthorized');
			// echo 'YOU ARE NOT AUTHORIZED FOR THIS PAGE';

		//$this->load->view('emp_module_1_view_jobs',$employee);//for blue caaan(jobs)
	}


	public function bio_id($id)
	{
		// $this->load->model('the_bridg_employee');
		$data['id'] = $id;
		$data["emp"]= $this->Employee_model->newgetuser_row($id);//new tables
		$data["card_data"]= $this->Employee_model->get_id_card($id);
		$data["project"]= $this->Employee_model->get_projects();
		$data["levels"]= $this->Employee_model->get_levels();
		$data["des"]= $this->hr_m->getdesignation();
		$data["user_details"]= $this->Employee_model->get_user_details($id);
		$data["user_project_title"]= $this->Employee_model->get_user_project($id);
		$data["shifts"]= $this->Employee_model->get_shifts();
		$this->load->view('bio_id' , $data);
	}
	public function Facultybio_id($id)
	{
		// $this->load->model('the_bridg_employee');
		$data['id'] = $id;
		$data["emp"]= $this->Employee_model->newgetuser_row($id);//new tables
		$data["card_data"]= $this->Employee_model->get_id_card($id);
		$data["project"]= $this->Employee_model->get_projects();
		$data["levels"]= $this->Employee_model->get_levels();
		$data["des"]= $this->hr_m->getdesignation();
		$data['faculty']= 'Admin_Faculty';
		$data["user_details"]= $this->Employee_model->get_user_details($id);
		$data["user_project_title"]= $this->Employee_model->get_user_project($id);
		$data["shifts"]= $this->Employee_model->get_shifts();
		$this->load->view('bio_id' , $data);
	}

	public function temp_id($id)
	{
		// $this->load->model('the_bridg_employee');
		$data['id'] = $id;
		$data["emp"]= $this->Employee_model->newgetuser_row($id);//new tables
		$data["card_data"]= $this->Employee_model->get_temp_card($id);
		$data["project"]= $this->Employee_model->get_projects();
		$data["levels"]= $this->Employee_model->get_levels();
		$data["des"]= $this->hr_m->getdesignation();
		$data["user_details"]= $this->Employee_model->get_user_details($id);
		$data["user_project_title"]= $this->Employee_model->get_user_project($id);
		$data["shifts"]= $this->Employee_model->get_shifts();
		$this->load->view('temp_id' , $data);
	}

	public function folder_title($id)
	{
		// $this->load->model('the_bridg_employee');
		$data['id'] = $id;
		$data["emp"]= $this->Employee_model->newgetuser_row($id);//new tables
		$data["card_data"]= $this->Employee_model->get_id_card($id);
		$data["project"]= $this->Employee_model->get_projects();
		$data["levels"]= $this->Employee_model->get_levels();
		$data["des"]= $this->hr_m->getdesignation();
		$data["user_details"]= $this->Employee_model->get_user_details($id);
		$data["user_project_title"]= $this->Employee_model->get_user_project($id);
		$data["shifts"]= $this->Employee_model->get_shifts();

		$this->load->view('folder_title' , $data);
	}


	public function save_bio_id()
	{
		$id = $this->input->post('User_id');
		$data =$this->input->post();
		$this->Employee_model->save_id_card($id,$data);
		// return redirect('Employee_reg/bio_id/'.$id);
		return redirect($_SERVER['HTTP_REFERER']);
	}

	public function save_temp_id()
	{
		$id = $this->input->post('User_id');
		$data =$this->input->post();
		$this->Employee_model->save_temp_card($id,$data);
		return redirect('Employee_reg/bio_id/'.$id);
	}

	// public function save_file()
	// {
	// 	echo $id = $this->input->post('id');
	// 	// echo "<br><br>";
	// 	echo  $field_name = $this->input->post('field_name');
	// 	echo  $name = $this->input->post('name');
		// echo "<br><br>";
		// $file = $this->input->post('file');

		// echo $field_name_data=$this->doupload('uploads/',$name,false,$id);
		// exit();
		// $data = array(
		// 	'userid' => $id,
		// 	$field_name => $field_name_data );
		// $this->Employee_model->save_form($id, $data);

	// }


	function saveEmployeeImages(){
		// print_r($_POST);
		// $id = $this->input->post('id');
		// $name=$this->input->post('file_name');
		// print_r($this->input->post($name));
		$uploaded=$this->doupload('uploads/',$this->input->post('name'),false,$this->input->post('userid'));
		// print_r($uploaded);
		$data = array(
			'userid' => $this->input->post('userid'),
			$this->input->post('name') => $uploaded
		);
		print_r($data);
		print_r($this->Employee_model->save_form($this->input->post('userid'), $data));

	}
	function form_14(){

		// print_r($this->input->post('upload_picture'));


		$id = $this->input->post('id');
		 // $upload_picture=$this->doupload('uploads/','upload_picture',false,$id);

		 // $upload_degree=$this->doupload('uploads/','upload_degree',false,$id);

		 // $upload_cnic=$this->doupload('uploads/','upload_cnic',false,$id);

		 // $upload_payslip_prev=$this->doupload('uploads/','upload_payslip_prev',false,$id);

		 // $upload_reference_letter= $this->doupload('uploads/','upload_reference_letter',false,$id);

		 // $upload_cnic_back= $this->doupload('uploads/','upload_cnic_back',false,$id);

		// exit()
		// $target_dir = "<php echo base_url(); >uploads/";
		// if ($upload_picture== null || $upload_degree == null || $upload_cnic == null || $upload_payslip_prev== null
		// 	|| $upload_reference_letter == null || $upload_cnic_back=null
		// 	|| $upload_picture== $target_dir || $upload_degree == $target_dir || $upload_cnic == $target_dir || $upload_payslip_prev== $target_dir || $upload_reference_letter == $target_dir || $upload_cnic_back == $target_dir)
		//  {
		// 	$user_details= $this->Employee_model->get_user_details($id);
		// 	if ($upload_picture== null || $upload_picture== $target_dir  ){
		// 		$upload_picture = $user_details->upload_picture;
		// 	}
		// 	if ( $upload_degree== null || $upload_degree== $target_dir  ){
		// 		$upload_degree = $user_details->upload_degree;
		// 	}
		// 	if ( $upload_cnic == null || $upload_cnic == $target_dir ){
		// 		$upload_cnic = $user_details->upload_cnic;
		// 	}
		// 	if ( $upload_payslip_prev == null  ||  $upload_payslip_prev == $target_dir){
		// 		$upload_payslip_prev = $user_details->upload_payslip_prev;
		// 	}
		// 	if ($upload_reference_letter == null || $upload_reference_letter == $target_dir) {
		// 		$upload_reference_letter = $user_details->upload_reference_letter;
		// 	}
		// 	if ($upload_cnic_back == null || $upload_cnic_back == $target_dir) {
		// 		$upload_cnic_back = $user_details->upload_cnic_back;
		// 	}
		// }

		$fname = $this->input->post('fname');
		$lname = $this->input->post('lname');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$initials = $this->input->post('initials');
		$cnic_no = $this->input->post('cnic_no');
		$contact_no = $this->input->post('contact_no');
		$reference_letter_textarea = $this->input->post('reference_letter_textarea');
		$reference_letter_input = $this->input->post('reference_letter_input');
		$address = $this->input->post('address');
		$payslip_remarks = $this->input->post('payslip_remarks');
		$date_of_birth = $this->input->post('date_of_birth');
		$address_g_map = $this->input->post('address_g_map');


		$this->Employee_model->Save_Name($id, $fname , $lname,$email,$password);
		$data = array(
			'userid' => $id,
			'initials' => $initials,
			'cnic_no' => $cnic_no,
			'contact_no' => $contact_no,
			'reference_letter_textarea' => $reference_letter_textarea,
			'reference_letter_input' => $reference_letter_input,
			'address' => $address,
			// 'upload_picture' => $upload_picture,
			// 'upload_degree' => $upload_degree,
			// 'upload_cnic' => $upload_cnic,
			// 'upload_payslip_prev' => $upload_payslip_prev,
			// 'upload_reference_letter' => $upload_reference_letter,
			'payslip_remarks' => $payslip_remarks,
			'date_of_birth' => $date_of_birth ,
			// 'upload_cnic_back' => $upload_cnic_back ,
			'address_g_map' => $address_g_map

			 );
		$this->Employee_model->save_form($id, $data);
		// return redirect('Employee_reg/emp_module_1/'.$id);

	}

	function form_15(){

		$id = $this->input->post('id');

		$emergency_person_name = $this->input->post('emergency_person_name');
		$relationship_to_person = $this->input->post('relationship_to_person');
		$emergency_contact_1 = $this->input->post('emergency_contact_1');
		// $emergency_contact_2 = $this->input->post('emergency_contact_2');
		$emergency_person_address_1 = $this->input->post('emergency_person_address_1');
		// $emergency_person_address_2 = $this->input->post('emergency_person_address_2');

		$data = array(
			'userid' => $id,
			'emergency_person_name' => $emergency_person_name,
			'relationship_to_person' => $relationship_to_person,
			'emergency_contact_1' => $emergency_contact_1,
			// 'emergency_contact_2' => $emergency_contact_2,
			'emergency_person_address_1' => $emergency_person_address_1,
			// 'emergency_person_address_2' => $emergency_person_address_2,
			 );
		$this->Employee_model->save_form($id, $data);
		// return redirect('Employee_reg/emp_module_1/'.$id);

	}

	function form_16(){

		// print_r($this->input->post());exit;
		$id = $this->input->post('id');
		$project_location = $this->input->post('project_location');
		$job_description = $this->input->post('job_description');
		$suggested_salary = $this->input->post('suggested_salary');
		$actual_salary = $this->input->post('actual_salary');
		$shift_id = $this->input->post('shift_id');
		$hired_on = $this->input->post('hired_on');
		$uniform = $this->input->post('uniform');
		// $office_id = $this->input->post('office_id');
		$office = $this->input->post('office');
		$job_title=$this->input->post('job_title');
		$login_share = $this->input->post('login_share');
		$paperwork_share = $this->input->post('paperwork_share');
		$remarks = $this->input->post('remarks');
		$hired_for_project = $this->input->post('hired_for_project');


		$data = array(
			'userid' => $id,
			'project_location' => $project_location,
			'job_description' => $job_description,
			'suggested_salary' => $suggested_salary,
			'actual_salary' => $actual_salary,
			'time_in' => $this->input->post('time_in'),
			'time_out' => $this->input->post('time_out'),
			'break_in' => $this->input->post('break_in'),
			'break_out' => $this->input->post('break_out'),
			'add_on_1' => $this->input->post('add_on_1'),
			'add_on_2' => $this->input->post('add_on_2'),
			'add_on_3' => $this->input->post('add_on_3'),
			'add_on_4' => $this->input->post('add_on_4'),
			'hired_on' => $hired_on,
			'job_title' => $job_title,
			'uniform' => $uniform,
			'add_responsibilities' => $this->input->post('add_responsibility'),
			'user_description_id' => $this->input->post('user_description_id'),
			'office' => $office,
			'login_share' => $login_share,
			'paperwork_share' => $paperwork_share,
			'remarks' => $remarks,
			'hired_for_project' => $hired_for_project
			);
		$this->Employee_model->save_form($id, $data);
		// return redirect('Employee_reg/emp_module_1/'.$id);

	}


public function doupload($targetdir,$fieldName,$required,$id){

	$returnFile;

	$target_file=null;
    // $target_dir =   "".base_url() . "companyJobsImages/";

    $target_dir =   "".base_url() . $targetdir;
	$fn =$_FILES[$fieldName]["name"];
	$fn = preg_replace("/[^a-zA-Z0-9._]+/","",$fn);
	if($fn){
		$fn=$id.'_'.$fn;
		$target_file = $target_dir . basename($fn);
	}
	else{
		$target_file = null;
	}
	//print_r($target_file);
	// echo $fn;

	  //  exit;
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

	// Check if image file is a actual image or fake image
	        $config['upload_path'] = $targetdir;
	        $config['allowed_types'] = '*';
	        $config['file_name'] = $fn;
	        $config['max_filename'] = '255';
	        $config['overwrite'] = TRUE;
	        $config['encrypt_name'] = FALSE;
	        $config['file_ext_tolower'] = TRUE;
	        $config['max_size'] = '1403024'; //8 MB
	 	// 	$filename = $_FILES[$fieldName]['name'];
			// print_r($fieldname);
			// list($width, $height) = getimagesize($fn);
			// print_r($width.' '.$height);
			// if ($width >= $height)
			// {
			//     $config['width'] = 800;
			// }
			// else
			// {
			//     $config['height'] = 800;
			// }
			// $config['master_dim'] = 'auto';


	        if (isset($_FILES[$fieldName]['name'])) {
	            if (0 < $_FILES[$fieldName]['error']) {
	            	if ($required == true) {
	                echo 'Error during file upload' . $_FILES[$fieldName]['error'];
	                // return null;
	            	}
	            } else {

	                if (file_exists( $targetdir. $_FILES[$fieldName]['name'])) {
	                    echo 'File already exists : '.$targetdir . $_FILES[$fieldName]['name'];
	                    return null;
	                } else {
	                    $this->load->library('upload', $config);
	                    if (!$this->upload->do_upload($fieldName)) {
	                        echo $this->upload->display_errors();
	                    } else {
	                    //     // $table = 'filename';


	                        // 'image' => $_FILES['dp']['name']

	                        // );
	                        // $this->db->where('userid', $id);
	                    }
	                }
	            }

	            $targetdir = null;
	            $fieldName= null;
	            $required= null;
	            $id= null;
	            // unset($targetdir);
	            // unset($fieldName);
	            // unset($required);
	            // unset($id);
	            return $fn;
	        } else {
	            echo 'Please choose a file';
	            // print_r('Please choose a file');
	            // exit();
	        }
    }

    //everything same as SaveCV except last cv is pushed to cv_archieve

	function SaveCV()
	{
		//var_dump('uploads/'.$_FILES["userfileCV"]["name"]); die();
		$id = $this->input->post('id');	//
		$userid = $this->input->post('user');

		//var_dump($_POST); die();
		$uploadedCV=$this->doupload('uploads/','userfileCV',true,$userid);
		//echo $uploadedCV; exit();
		//will be stored to both primary and archive
		$this->Employee_model->setArchieveCv($id, $userid, 'uploads/'.$uploadedCV);
		$response = $this->Employee_model->Save_Emp_CV($userid , 'uploads/'.$uploadedCV);
		redirect (base_url("Employee_reg/emp_module_20181029/".$userid));
	}

	function SaveCVImg()
	{
		$id = $this->input->post('id');
		$uploadedCVimg=$this->doupload('uploads/','userfileCVimg',true,$id);
		echo $uploadedCVimg;
		// print_r($uploadedCV);
		// exit();
		// echo $uploadedCV;
		$response = $this->Employee_model->Save_Emp_CV_Img($id , $uploadedCVimg);
		// echo $response;
		// echo $response;
	}

	function SaveletterImg()
	{
		$id = $this->input->post('id');
		$uploadedletterimg=$this->doupload('uploads/','userletterimg',true,$id);
		echo $uploadedletterimg;
		$response = $this->Employee_model->Save_Emp_Letter_Img($id , $uploadedletterimg);
	}
	function SaveletterResponseImg()
	{
		$id = $this->input->post('id');
		$uploadedletterimg=$this->doupload('uploads/responseLetter/','userletterResponseimg',true,$id);
		echo $uploadedletterimg;
		$response = $this->Employee_model->Save_Emp_Letter_Response_Img($id , $uploadedletterimg);
	}




	public function DeleteCVImg()
	{
		$id = $this->input->post('id');
		$this->Employee_model->delete_cv_img($id);

	}

	public function DeleteletterImg()
	{
		$id = $this->input->post('id');
		$this->Employee_model->delete_letter_img($id);

	}

	public function DeleteImg()
	{
		$id = $this->input->post('id');
		$field_name = $this->input->post('field_name');
		$data = array(
			'userid' => $id,
			$field_name => ''
			 );
		$this->Employee_model->save_form($id, $data);
	}


	function SaveHrPolicy()
	{
		$id = $this->input->post('userid');
		echo $id;
		// $uploadedCV=$this->doupload('uploads/CovenantEStaff/','uploadCovenantEStaff',true,$id);
		$uploadedCV=$this->doupload('uploads/hrPolices/','uploadHr',true,$id);

		echo $uploadedCV;
		$response = $this->Employee_model->Save_Emp_HrPolicy($id , $uploadedCV);
	}

	function SaveCovenantEStaff()
	{
		$id = $this->input->post('userid');
		echo $id;
		$uploadedCV=$this->doupload('uploads/CovenantEStaff/','uploadCovenantEStaff',true,$id);

		echo $uploadedCV;
		$response = $this->Employee_model->Save_Emp_CovenantEStaff($id , $uploadedCV);
	}

	function Savedegree_collection_letter()
	{
		$id = $this->input->post('userid');
		echo $id;
		$Savedegree_collection_letter=$this->doupload('uploads/degree_collection_letter/','degree_collection_letter',true,$id);
		echo $Savedegree_collection_letter;
		$response = $this->Employee_model->Savedegree_collection_letter($id , $Savedegree_collection_letter);
	}


	function uploadOffer()
	{
		$id = $this->input->post('userid');
		echo $id;
		$uploadedOffer=$this->doupload('uploads/offerletter_img/','upload_offer',true,$id);
		echo $uploadedOffer;
		$response = $this->Employee_model->Save_OfferLetter($id , $uploadedOffer);
	}
	function Resignationletter()
	{
		$id = $this->input->post('userid');
		// echo $id;
		$resignation_letter=$this->doupload('uploads/resignation_letter/','resignation_letter',true,$id);
		echo $resignation_letter;
		$response = $this->Employee_model->Save_ResignationLetter($id,$resignation_letter);
	}
	function saveSettlement()
	{
		$id = $this->input->post('userid');
		echo $id;
		$settlement_letter=$this->doupload('uploads/','SettlementUpload',true,$id);
		echo $settlement_letter;
		$response = $this->Employee_model->save_settlement($id , $settlement_letter);
	}
	function settlementOffer($id)
	{
		$this->load->model('user_m');
		$data['employee']=$this->user_m->newgetuserbyid($id);
		$data['settlement_letter']=$this->Employee_model->getSettlementLetter();
		$this->load->view('settlement_letter',$data);
	}
	function settlementOfferUrdu($id)
	{
		$this->load->model('user_m');
		$data['employee']=$this->user_m->newgetuserbyid($id);
		$data['settlement_letter']=$this->Employee_model->getSettlementLetterUrdu();
		$this->load->view('settlement_letterUrdu',$data);
	}
	function saveSettlementLetter($id=null){
			$data=array(
				$this->input->post('field_name')=>$this->input->post('content'),

			);
		if($id==null){
			echo $this->Employee_model->saveSettlementLetter($data);
		}elseif($id!=null){

			echo $this->Employee_model->UpdateSettlementLetter($data,$id);
		}
	}
	function saveSettlementLetterUrdu($id=null){
		$data=array(
				$this->input->post('field_name')=>$this->input->post('content'),

			);
		if($id==null){
			echo $this->Employee_model->saveSettlementLetterUrdu($data);
		}elseif($id!=null){

			echo $this->Employee_model->UpdateSettlementLetterUrdu($data,$id);
		}
	}

	function delete_employee($id, $data)
	{
		$this->db->where('id', $id);
		$this->db->delete('insert_employee');
		redirect('welcome/view_employee');
	}
	function offer($id)
	{
		$this->load->model('user_m');
		$data['employee']=$this->user_m->newgetuserbyid($id);
		$this->load->view('offer',$data);
	}

	function offer_letter($id)
	{
		// $this->load->model('user_m');
		// $data['employee']=$this->user_m->newgetuserbyid($id);
		$this->load->view('offer_letter');
		// $this->load->view('offer',$data);
	}

	function saveOffer($user_id=null)
	{
		if($user_id != null)
		{
			$content= $this->input->post('fileContent');
			file_put_contents("uploads/offerletters/".$user_id.".html", $content);
			echo base_url()."uploads/offerletters/".$user_id.".html";
		}
		else
		echo "Ooops!<br> An error occurred <br> Please try again later!!!!!";
	}

	function saveofferSign()
	{
		$data = $this->input->post('imagedata');
		$filename = 'uploads/offerempSign/'.$this->input->post('userid').'-'.$this->input->post('emp_num').'.png';
		//Need to remove the stuff at the beginning of the string
		$data = substr($data, strpos($data, ",")+1);
		$data = base64_decode($data);
		$imgRes = imagecreatefromstring($data);
		$fullUrl = base_url().'/'.$filename;
		if($imgRes !== false && imagepng($imgRes, $filename) === true)
		echo "<img src='{$fullUrl}' alt='Signature'/>";
	}

	public function offermade($id)
	{
		$this->load->model('user_m');
		$data['employee']=$this->user_m->newgetuserbyid($id);
		$this->load->view('offermade',$data);
	}

	function reoffer_letter($id)
	{
		// $this->load->model('user_m');
		// $data['employee']=$this->user_m->newgetuserbyid($id);
		$this->load->view('reoffer_letter');
		// $this->load->view('offer',$data);
	}

	// public function hrPolices($userId = null)
	// {
		/////// $this->load->model('hr_m');
		////// print_r();
		// if($userId != null){
		// $data = array('user_id' => $userId);
		// $this->load->view('hrPolices', $data);
		// }else
			// echo "Ooops!<br> An error occurred <br> Please try again latter!!!!!";
	// }
	// public function hrPolices()
	// {
		// $this->load->view('hrPolices');
	// }

/*	public function hrPolices($userId = null)
	{
		if($userId != null)
		{
			$data = array('user_id' => $userId);
			$this->load->view('hrPolices', $data);
		}
		else
			echo "Ooops!<br> An error occurred <br> Please try again latter!!!!!";
	}


	public function hrPolicySignSave($userId = null, $signNum = null)
	{
		$data = array('user_id' => $userId, 'signNum' => $signNum);
		$this->load->view('hrPolices_sign_save', $data);
	}

	public function hrPolicyContentSave()
	{
		$content_id= $this->input->post('content_id');
		$content= $this->input->post('content');
		$this->load->model('hr_m');
		$this->hr_m->updateHrPolicyContent($content_id, $content);
	}

	public function saveHrPolicy($user_id= null)
	{
		if($user_id != null){
			$content= $this->input->post('fileContent');
			file_put_contents("uploads/hrPolices/".$user_id.".html", "<html><head><title>HR Polices</title><link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'></head><body><center><div style='text-align: left; width: 700px;'>".$content."</div></center></body></html>");
			echo base_url()."uploads/hrPolices/".$user_id.".html";
		}else
			echo "Ooops!<br> An error occurred <br> Please try again latter!!!!!";

	}
*/
	// function insert_module_1()
	// {
	// 	// echo 's'; die;
	// 	$cv='';
	// 	$offer_leter='';
	// 	   $cv=$_FILES['cv']['name'];
	// 	   $salary=$this->input->post('salary');
	// 	   $leaves=$this->input->post('leaves');
	// 	   $offer_leter=$_FILES['offer_leter']['name'];
	// 	   $ename=$this->input->post('name_e');
	// 	   $fname=$this->input->post('fname');
	// 	   $email=$this->input->post('email');
	// 	   $cel=$this->input->post('cel');
	// 	   $experience=$this->input->post('experience');
	// 	   $bio_id=$this->input->post('bio_id');

	// 	   if(!empty($_FILES['cv']['name'] && $_FILES['offer_leter']['name']))
	// 		{
	// 			// echo "one"; die;
 //                $config['upload_path'] = 'uploads/';
 //                $config['allowed_types'] = 'jpg|jpeg|png|gif';
 //                $config['file_name'] = $_FILES['cv']['name'];
 //                $config['file_name'] = $_FILES['offer_leter']['name'];
 //                // echo "<pre>"; print_r($config); die;
 //                //Load upload library and initialize configuration
 //                $this->load->library('upload',$config);
 //                // $this->upload->initialize($config);

 //                if($this->upload->do_upload('cv') && $this->upload->do_upload('offer_leter')){
	// 				// echo "two"; die;
 //                    $uploadData = $this->upload->data();
 //                    $picture = $uploadData['file_name'];
	// 				// echo $picture; die;
 //                }
	// 			else
	// 			{
 //                    //$picture = '';
	// 				echo "picture name not found";
 //                }
 //            }
	// 		else
	// 		{
 //                //$picture = '';
	// 			echo "picture is not found999";
 //            }
	// 	   $data=array(
	// 	   'cv' => $cv,
	// 	   'salary'=>$salary,
	// 	   'leaves'=>$leaves,
	// 	   'offer_leter' => $offer_leter,
	// 	   'e_name'=>$ename,
	// 	   'e_fname'=>$fname,
	// 	   'e_email'=>$email,
	// 	   'e_cell'=>$cel,
	// 	   'experience'=>$experience,
	// 	   'bio_id'=>$bio_id,
	// 	   );
	// 	   // echo "<pre>"; print_r($data); die;
	// 	   $inserted = $this->employee_model->add_module_1($data);
	// 	$this->session->set_flashdata('msg', 'Data Inserted Successfully');
	// 	redirect('welcome/emp_module_1');
	// }

	// public function update_employee_on_boarding_position_pro()
	// {
	// 	$emp_id=$this->input->post('current_user_id');
	// 	// $boarding_position_project=$this->input->post('on_boarding_by_position_project_pro');
	// 	// $boarding_position_jd_level=$this->input->post('boarding_position_jd_level');
	// 	// $boarding_position_grade=$this->input->post('boarding_position_grade');
	// 	$boarding_position_sg_sal=$this->input->post('boarding_position_sg_sal');
	// 	$boarding_position_ac_sal=$this->input->post('boarding_position_ac_sal');
	// 	$boarding_position_shift=$this->input->post('boarding_position_shift');
	// 	$boarding_position_break=$this->input->post('boarding_position_break');
	// 	$boarding_position_dt_emp=$this->input->post('boarding_position_dt_emp');
	// 	$boarding_position_uniform=$this->input->post('boarding_position_uniform');
	// 	$boarding_position_office=$this->input->post('boarding_position_office');
	// 	$boarding_position_pass=$this->input->post('boarding_position_pass');
	// 	$boarding_position_softco=$this->input->post('boarding_position_softco');
	// 	$boarding_position_level=$this->input->post('boarding_position_level');
	// 	$boarding_position_title=$this->input->post('boarding_position_title');
	// 	// $boarding_position_docs=$this->input->post('boarding_position_docs');

	// 	// $this->db->where('emp_id', $emp_id);
	// 	$dbdata = array(
	// 	  // "projects" => $boarding_position_project,
	// 	  // "jd_by_level" => $boarding_position_jd_level,
	// 	  // "grade" => $boarding_position_grade,
	// 	  "user_id" => $emp_id,
	// 	  "suggested_salary" => $boarding_position_sg_sal,
	// 	  "actual_salary" => $boarding_position_ac_sal,
	// 	  "shift" => $boarding_position_shift,
	// 	  "break" => $boarding_position_break,
	// 	  "date_employeed" => $boarding_position_dt_emp,
	// 	  "uniform" => $boarding_position_uniform,
	// 	  "office" => $boarding_position_office,
	// 	  "password" => $boarding_position_pass,
	// 	  "softcopies" => $boarding_position_softco,
	// 	  "selected_level" => $boarding_position_level,
	// 	  "title" => $boarding_position_title,
	// 	  // "documents" => $boarding_position_docs
	// 	);
	// 	// echo "<pre>"; print_r($dbdata); die;
	// 	$this->db->insert('employment_history', $dbdata);
	// 	redirect('welcome/emp_module_1');
	// }
	// function view_employee_history()
	// {

		// $emp_id = $this->uri->segment(3);
		// $this->db->select('*');
		// $this->db->where('emp_id', $emp_id);
		// $this->db->from('employment_history');
		// $query = $this->db->get();
		// $employee['data1'] = $query->result_array();
		// $this->load->view('emp_module_1_view',$employee);

	// }
	// function bio_employee_id($id)
	// {
	// // echo "dddd"; die;

	// 	// $emp_id = $this->uri->segment(3);
	// 	$emp_id =$id;


	// 	// $this->db->select('newba_users.*','newbm_user_details.*');
	// 	$this->db->join('newbm_user_details', 'newbm_user_details.userid = newba_users.id', 'left');

	// 	$this->db->where('userid', $emp_id);

	// 	$query=$this->db->get('newba_users')->row();
	// 	$employee['data'] = $query;
	// 	//print_r($employee);

	// 	$this->load->view('bio_met_id',$employee);

	// }

	function letterFormat($id=null){
		fhkAuthPage(null, ["canSeeLetterFormat", "canDoEverything"]);
		if($id != null)
			{
				$data['letter'] = $this->Employee_model->getLetterData($id);
			// print_r('sadfasdf');exit;
				$this->load->view('letter_format', $data);

			}
		else
			{
				$this->load->view('letter_format');
			}
	}
	function View_letterFormat(){
		fhkAuthPage(null, ["canSeePreviousLetters", "canDoEverything"]);
		$data['letter_formats']=$this->Employee_model->list_letter_format();
		$this->load->view('View_letterFormat',$data);
	}
	function form_letter_format(){
		$data=array(
			'headingContent' => $this->input->post('headingContent'),
			'descriptionContent' => $this->input->post('descriptionContent')
		);
		echo $this->Employee_model->form_letter_format($data);
	}
	function Updateform_letter_format(){
		print_r($_POST);
		$data=array(
			'headingContent' => $this->input->post('headingContent'),
			'descriptionContent' => $this->input->post('descriptionContent')
		);
		echo $this->Employee_model->Updateform_letter_format($data,$this->input->post($id
		));
	}
	function exit_procedure(){
		$userid=$this->input->post('userid');
		echo $userid;
		$checkedByDirector=$this->input->post('checkedByDirector');
		if($this->input->post('checkedByDirector')!='1'){
			$checkedByDirector=0;
		}
		$data=array(
			'date_out'=>$this->input->post('date_out'),
			'id_card_collected'=>$this->input->post('exit_id_card_collected'),
			'uniform_collected'=>$this->input->post('exit_uniform_collected'),
			'equipment_collected'=>$this->input->post('exit_equipment_collected'),
			'office_spaceNkeys'=>$this->input->post('exit_office_space_collected'),
			'advance_loan'=>$this->input->post('exit_advances_collected'),
			'securities'=>$this->input->post('exit_securities_collected'),
			'userid'=>$userid,
			'password'=>$this->input->post('password_exit_collected'),
			'paperwork'=>$this->input->post('exit_paperwork_collected'),
			'emp_data_biometric'=>$this->input->post('exit_biometrics_collected'),
			'remarks'=>$this->input->post('comments_and_remarks'),
			'checkedByDirector'=>$checkedByDirector
			);
		if($this->Employee_model->getexit_procedures($userid)){
			$this->Employee_model->updateexit_procedures($data,$userid);
		}
		else
			$this->Employee_model->exit_procedures($data);
	}
	// function update_employee_on_boarding_exit()
	// {
	// 	$emp_id=$this->input->post('current_user_id');
	// 	$exit_id_card_collected1=$this->input->post('exit_id_card_collected1');
	// 	$exit_uniform_collected1=$this->input->post('exit_uniform_collected1');
	// 	$exit_equipment_collected1=$this->input->post('exit_equipment_collected1');
	// 	$exit_office_space_collected1=$this->input->post('exit_office_space_collected1');
	// 	$exit_advances_collected1=$this->input->post('exit_advances_collected1');
	// 	$exit_securities_collected1=$this->input->post('exit_securities_collected1');
	// 	$exit_paperwork_collected1=$this->input->post('exit_paperwork_collected1');
	// 	$exit_biometrics_collected1=$this->input->post('exit_biometrics_collected1');
	// 	$password_exit_collected1=$this->input->post('password_exit_collected1');
	// 	$this->db->where('emp_id', $emp_id);
	// 	$dbdata = array(
	// 	  "id_card_collected" => $exit_id_card_collected1,
	// 	  "uniform_collected" => $exit_uniform_collected1,
	// 	  "equipment_collected" => $exit_equipment_collected1,
	// 	  "office_space_collected" => $exit_office_space_collected1,
	// 	  "advances_collected" => $exit_advances_collected1,
	// 	  "securities_collected" => $exit_securities_collected1,
	// 	  "paperwork_collected" => $exit_paperwork_collected1,
	// 	  "biometrics_collected" => $exit_biometrics_collected1,
	// 	  "password_exit" => $password_exit_collected1
	// 	);
	// 	// print_r($dbdata); die;
	// 	$this->db->update('insert_employee', $dbdata);
	// }
}
