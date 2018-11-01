<?php
class Caan extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('user_m');
		$this->load->model('hr_m');
		$this->data['meta_title'] = 'Bridges';
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model('user_m');

		//Login Check
		
	}
	function front()
	{
		$this->load->view('front');	
	}

	function index($userid = NULL) 
	{
		$this->load->model('user_m');
		$this->load->model('hr_m');
				 
			
			
			//$this->load->model('user_m');
		//$data['employee']=$this->user_m->getuser();
		$data['employee']=$this->user_m->newgetuser();
		//print_r($data);
		//foreach($data as $emp)
		//{
		//echo $emp->firstname;
		//
		//echo json_encode($data);
		//}
		//exit();
		//$this->load->view('caan',$data);
		
		
		if($userid != NULL)
		{
			//echo $userid;
			$this->hr_m->inActiveUser($userid);
				redirect('Caan/index');
		}
		//print_r($data);
		//foreach($data as $emp)
		//{
		//echo $emp->firstname;
		//
		//echo json_encode($data);
		//}
		//exit();
		$this->load->view('caan',$data);
	}

	function emergency($userid)
	{
		$data['emp']=$this->user_m->getuseremergency($userid);
		$this->load->view('emergency',$data);

	}
	function biometric($userid)
	{
		$data['emp']=$this->user_m->getuserbiometric($userid);
		$this->load->view('biometric',$data);

	}
	public function printevidence($userid)
	{
		$data['emp']=$this->user_m->getuserbiometric($userid);
		$this->load->view('printevidence',$data);		
	}
	function addemergencycontact($userid)

	{
		print_r($this->input->post());
		//$this->user_m->addemergency($data);
		$data = array(
                    'emergency_person_name'=>$this->input->post('name'),
                    'relationship_to_person' => $this->input->post('relation'),                    
                    'emergency_contact_1' => $this->input->post('contact'),
                    'emergency_person_address_1' => $this->input->post('address'),
                    'e_email'=>$this->input->post('email'),
					'e_city'=>$this->input->post('city'),
                    );
		$this->user_m->addemergency($userid,$data);
		redirect('caan/index');
	}
	
	function caaninactive($userid = NULL) 
	{
		$this->load->model('user_m');
		$this->load->model('hr_m');
		$data['employee']=$this->user_m->getuserinactive();
		//print_r($data);
		//foreach($data as $emp)
		//{
		if($userid != NULL)
		{
			//echo $userid;
			$this->hr_m->inActiveUser($userid);
				redirect('Caan/caaninactive');
		}
		
		//echo $emp->firstname;
		//
		//echo json_encode($data);
		//}
		//exit();
		$this->load->view('caaninactive',$data);
	}
	

	public function senddata()
	{
		if($_POST){
		if(isset($_POST))
		{
			$data['name']=$this->input->post('name');

		}
	}
	else
		$data['name']="ali";

		$this->load->view('senddata',$data);
	}
	public function ajax()
	{
		$this->input->post('name');

	}
	
	public function modal()
	{
		$type=$this->input->post('type');
		echo $type;
	}
	public function offermade($id)
	{
		$this->load->model('user_m');
		$data['employee']=$this->user_m->newgetuserbyid($id);
		//print_r($data);
		//foreach($data as $emp)
		//{
		//echo $emp->firstname;
		//
		//echo json_encode($data);
		//}
		//exit();
		$this->load->view('offermade',$data);
	}
	
	
	
	function getEmployee($userid){
		$this->load->model('hr_m');
		$data["userid"] = $userid;
		//$data["emp"]= $this->hr_m->getuser($userid);
		
		$data["clu"]= $this->hr_m->getrank();
		$data["ran"]= $this->hr_m->getcluster();
		$data["des"]= $this->hr_m->getdesignation();
		$data['emp'] = $this->hr_m->newgetEmployee($userid);
		//print_r($data['emp']);
		$this->load->view('employeeCVeditcaan', $data);
	}

	function empUpdate(){
		$timings = $this->input->post('timeIn')."-".$this->input->post('timeOut');
		$userid=$this->input->post('userid');
		//echo $userid;
		//exit();
		
$target_dir =   "".base_url() . "photos/";
        

$target_file = $target_dir . basename($_FILES["dp"]["name"]);
//print_r($target_file);

//print_r($this->input->post());
//    exit;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
   
    $config['upload_path'] = 'photos/';
        $config['allowed_types'] = '*';
        $config['max_filename'] = '255';
        $config['encrypt_name'] = FALSE;
        $config['max_size'] = '1024'; //1 MB
 
        if (isset($_FILES['dp']['name'])) {
            if (0 < $_FILES['dp']['error']) {
                echo 'Error during file upload' . $_FILES['file']['error'];
            } else {
                if (file_exists('photos/' . $_FILES['dp']['name'])) {
                    echo 'File already exists : photos/' . $_FILES['dp']['name'];
                } else {
                    $this->load->library('upload', $config);
                    if (!$this->upload->do_upload('dp')) {
                        echo $this->upload->display_errors();
                    } else {
                    //     // $table = 'filename';

                                         
                        // 'image' => $_FILES['dp']['name']
                      
                        // );
                        // $this->db->where('userid', $id);                        
                    }
                }
            }
        } else {
            echo 'Please choose a file';
        }


		$data = array(
                    'career'=>$this->input->post('career'),
                    'objective' => $this->input->post('objective'),
                    'upload_picture'=>$target_file,
                    
                    'gender' => $this->input->post('emp_gender'),
                    'marital_status' => $this->input->post('marital_status'),
                    'dependance'=>$this->input->post('dependance'),
                    
					'cnic_no'=>$this->input->post('cnic'),
                    'contact_no' => $this->input->post('emp_phone'),
                    
                    'website' => $this->input->post('emp_website'),
                    'address' => $this->input->post('address'),
                    'add_nationality' => $this->input->post('nationality'),
                    'res_country' => $this->input->post('country'),
                    
                    'job_title'=>$this->input->post('title'),
                    'rankid'=>$this->input->post('ran'),
                    'clusterid'=>$this->input->post('clu'),
                    'designationid'=>$this->input->post('des'),
                    'initials'=>$this->input->post('initials'),
                   // 'designationid'=$this->input->post(),
                    //'designationid'=$this->input->post(),
                    'time_out' => $this->input->post('timeOut'),
                    'time_in' => $this->input->post('timeIn'),
                    'hired_for_project' => $this->input->post('hired-for'),
                    'age' => $this->input->post('age'),
                    'actual_salary' => $this->input->post('salary'),
                    'hired_on' => $this->input->post('hired-on'),
                    /*'userid' => $this->input->post('userid'),
                    'initials' => $this->input->post('initials'),                    
                    'hired_for_project' => $this->input->post('hired-for'),
                    'cluster' => $this->input->post('cluster'),
                    'placement_level' => $this->input->post('placement-level'),
                    'title' => $this->input->post('title'),
                    'designation' => $this->input->post('designation'),
                    'possible_salary' => $this->input->post('possible-salary'),
                    'actual_salary' => $this->input->post('actual-salary'),
                    'step' => $this->input->post('step'),
                    'hired_on' => $this->input->post('hired-on'),
                    'shift' => $this->input->post('shift'),
                    'timings' => $this->input->post('timeIn')." ".$this->input->post('timeOut'),
                    'curricular_unit' => $this->input->post('c-unit'),
                    'academic_club' => $this->input->post('a-club'),
                    'academic_club_role' => $this->input->post('a-club-role'),*/
                    
                    
                    /*'emergency_person_name   ' => $this->input->post('pname'),
                    'relationship_to_person' => $this->input->post('relationship'),
                    // 'eoccupation' => $this->input->post('eoccupation'),
                    'emergency_contact_1' => $this->input->post('contact1'),
                    'emergency_person_address_1' => $this->input->post('address1'),
                    'e_email' => $this->input->post('e-email'),
                    'e_city' => $this->input->post('city'),*/
                    'userid' => $userid
                    );
		$data2=array(
			'fname'=>$this->input->post('fname'),
			'lname'=>$this->input->post('lname'),
			'email'=>$this->input->post('email')
			);
		// echo'<pre>';print_r($data);
		//$this->agent->referrer();
		// exit;
		$this->hr_m->newempUpdate($userid, $data);
		redirect('caan/index');
	}
	function saveofferSign(){
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
	 
	function saveOffer($user_id=null){
		if($user_id != null) {
			$content= $this->input->post('fileContent');
			print_r($content);
			file_put_contents("uploads/offerletters/".$user_id.".html", $content);
			echo base_url()."uploads/offerletters/".$user_id.".html";
		} else
			echo "Ooops!<br> An error occurred <br> Please try again later!!!!!";
	}

	function savePromotion($user_id=null){
				if($user_id != null){
			$content= $this->input->post('fileContent');
			file_put_contents("uploads/Promotionletters/".$user_id.".html", $content);
			echo base_url()."uploads/Promotionletters/".$user_id.".html";
		}else
			echo "Ooops!<br> An error occurred <br> Please try again later!!!!!";

	}
	function saveExperience($user_id=null){
				if($user_id != null){
			$content= $this->input->post('fileContent');
			file_put_contents("uploads/experience_letter/".$user_id.".html", $content);
			echo base_url()."uploads/experience_letter/".$user_id.".html";
		}else
			echo "Ooops!<br> An error occurred <br> Please try again later!!!!!";

	}
	
// TODO 
	function offer($id) {
		if(file_exists('uploads/offerletters/'.$id.'.html'))
			$this->load->view("../../uploads/offerletters/$id.html");

		$this->load->model('user_m');
		$this->load->model('Employee_model');

		$data["project"]= $this->Employee_model->get_projects();
		$data["user_project_title"]= $this->Employee_model->get_user_project($id);
		$data['emp']=$this->user_m->getDetailedUserWithProject($id);

		//var_dump($data["emp"]); die();

		$data['id']=$id;
		
		$this->load->view('offer',$data);
	}
	function Experience_letter($id) 
	{

		if(file_exists('uploads/experience_letter/'.$id.'.html')){
				$this->load->view("../../uploads/experience_letter/".$id.".html");
		}
		$this->load->model('user_m');
		$this->load->model('Employee_model');
		$data["project"]= $this->Employee_model->get_projects();
		$data["user_project_title"]= $this->Employee_model->get_user_project($id);
		$data['employee']=$this->user_m->newgetuserbyid($id);
		$data['id']=$id;
		$this->load->view('experience_letter',$data);
	}

	function updatefooter($id){
		$this->load->model('user_m');
		$this->user_m->updatefooter($this->input->post('data'),$id);

	}
	function cv($userid = NULL)

	{
		$data['emp'] = $this->hr_m->newgetEmployee($userid);
		
		
		
		//print_r($data);
		$this->load->view('caancv',$data);
	}
	


	function cvuploaded()
	{
			$target_dir =   "".base_url() . "cvs/";
        

$target_file = $target_dir . basename($_FILES["cv"]["name"]);

print_r($target_file);
//exit;
$userid=$this->input->post('uid');
//echo $userid;
//exit;
//print_r($this->input->post());
//    exit;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
   
    	$config['upload_path'] = 'cvs/';
        $config['allowed_types'] = '*';
        $config['max_filename'] = '65535';
        $config['encrypt_name'] = FALSE;
        $config['max_size'] = '65535'; //1 MB
 
        if (isset($_FILES['cv']['name'])) {
            if (0 < $_FILES['cv']['error']) {
                echo 'Error during file upload' . $_FILES['file']['error'];
            } else {
                if (file_exists('cvs/' . $_FILES['cv']['name'])) {
                    echo 'File already exists : cvs/' . $_FILES['cv']['name'];
                } else {
                    $this->load->library('upload', $config);
                    if (!$this->upload->do_upload('cv')) {
                        echo $this->upload->display_errors();
                    } else {
                    //     // $table = 'filename';

                                         
                        // 'image' => $_FILES['dp']['name']
                      
                        // );
                        // $this->db->where('userid', $id);                        
                    }
                }
            }
        } else {
            echo 'Please choose a file';
        }

			$data = $target_file;
		




		echo "Record Added";
	$this->hr_m->newaddcv($data,$userid);
	$this->index();
	}

	public function benefits($userid)
	{

		$data['emp'] = $this->hr_m->newgetEmployee($userid);
		$this->load->helper('form');
		$this->load->view('benefits',$data);
	}

	public function savebenefit($userid = null)
	{
		$config['upload_path']   = 'uploads/benefitDocs/'; 
        $config['allowed_types'] = '*';
        $config['max_filename'] = '2555';
        $config['encrypt_name'] = FALSE;
        $config['max_size'] = '30000'; //1 MB
          
			 
		for ($i=0; $i <= $this->input->post('fieldNum'); $i++) {
				
			$this->load->library('upload', $config);
			
			if ( !$this->upload->do_upload('form'.$i)) {
        		//echo $this->upload->display_errors();
        		$filePath = null;
     		}	
     		else{
        		$upload_data = $this->upload->data(); 
     			$filePath = base_url().$config['upload_path'].$upload_data['file_name'];
     		}

			$insurance=$this->input->post('insurance'.$i);
			$since=$this->input->post('since'.$i);
			//$form=$this->input->post('form['.$i.']');
			$cost=$this->input->post('cost'.$i);
			$bridges=$this->input->post('bridges'.$i);
			$employee=$this->input->post('employee'.$i);
			
			$data=array(
				'userid'=>$userid,
				'insurance'=> $this->input->post('insurance'.$i),
				'since'=>$this->input->post('since'.$i),
				'form'=>$filePath,
				'cost'=>$this->input->post('cost'.$i),
				'bridges'=>$this->input->post('bridges'.$i),
				'employee'=>$this->input->post('employee'.$i)
			);

			$dataYearly= $arrayName = array(
				'user_id' => $userid, 
				'changed' => date("Y-m-d"),
				'benefit_name' => $this->input->post('insurance'.$i),
				'cost' => $this->input->post('cost'.$i),
				'company' => $this->input->post('bridges'.$i),
			);

			$this->hr_m->insertBenefits($data);
			$this->hr_m->insertBenefitsYearly($dataYearly);
			//and add yearly, note insurance type will stack together

			redirect("caan/benefits/$userid");
		}
// print_r($userid);exit;
		$data['emp'] = $this->hr_m->newgetEmployee($userid);
		// print_r($data['emp']);exit;
		$this->load->helper('form');
		$this->load->view('benefits',$data);
	}
	
	
	function delete($id){
		$this->user_m->delete($id);
	}

	function logout() {
		$this->user_m->logout();
		redirect('user/');
	}

	function get_emp_details($id) {
		return $employees = $this->user_m->get_employee_details(array('ba_users.id' => $id));
	}

	public function registerEmployee()
	{
		$this->load->view('register-employee');
	}

		
	
	
	
	function inActiveUserfromcaan($userid){
		if($this->hr_m->inActiveUser($userid)){
			
			
			
			$this->load->model('user_m');
		$data['employee']=$this->user_m->getuser();
		//print_r($data);
		//foreach($data as $emp)
		//{
		//echo $emp->firstname;
		//
		//echo json_encode($data);
		//}
		//exit();
		//$this->load->view('caan',$data);
		$this->index();
		}
		else{
			echo "Ooops!<br> An error occurred <br> Please try again latter!!!!!";
		}
	}
	
	
	function inActiveUserfromcaan2($userid){
		if($this->hr_m->inActiveUser($userid)){
			
			
			
			$this->load->model('user_m');
		$data['employee']=$this->user_m->getuserinactive();
		//print_r($data);
		//foreach($data as $emp)
		//{
		//echo $emp->firstname;
		//
		//echo json_encode($data);
		//}
		//exit();
		//$this->load->view('caaninactive',$data);
		
		}
		else{
			echo "Ooops!<br> An error occurred <br> Please try again latter!!!!!";
		}
	}
	
	
	function ActiveUserfromcaan($userid){
		if($this->hr_m->inActiveUser($userid)){
			
			
			
			$this->load->model('user_m');
		$data['employee']=$this->user_m->getuserinactive();
		//print_r($data);
		//foreach($data as $emp)
		//{
		//echo $emp->firstname;
		//
		//echo json_encode($data);
		//}
		//exit();
		$this->load->view('caaninactive',$data);
		
		
		}
		else{
			echo "Ooops!<br> An error occurred <br> Please try again latter!!!!!";
		}
	}

	public function change_pass()
	{
		$data['email'] = $this->session->userdata['email'];
		$this->load->view('change-pass', $data);
	}

	public function hrPolices($userId = null)
	{
		
		// $this->load->model('hr_m');
		// print_r();
		if($userId != null){
		$this->load->model('Employee_model');
		$this->load->model('hr_m');
		$data['user']=$this->Employee_model->get_user_details($userId);
		$data["emp"]= $this->hr_m->newgetuser($userId);//new tables
		$data['user_id']= $userId;
		$this->load->view('hrPolices', $data);
		}else
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
	// CHANGES
	public function degree_collection_letter($userId = null)
	{
		
		if($userId != null){
			$this->load->model('Employee_model');
			$this->load->model('hr_m');
			$data['user']=$this->Employee_model->get_user_details($userId);
			$data["emp"]= $this->hr_m->newgetuser($userId);//new tables
			$data['user_id']= $userId;
			$this->load->view('degree_collection_letter', $data);
		}else
			echo "Ooops!<br> An error occurred <br> Please try again latter!!!!!";
	}
	public function CovenantEStaff($userId = null)
	{
		
		// $this->load->model('hr_m');
		// print_r();
		if($userId != null){
		$this->load->model('Employee_model');
		$this->load->model('hr_m');
		$data['user']=$this->Employee_model->get_user_details($userId);
		$data["emp"]= $this->hr_m->newgetuser($userId);//new tables
		$data['user_id']= $userId;
		$this->load->view('CovenantEStaff', $data);
		}else
			echo "Ooops!<br> An error occurred <br> Please try again latter!!!!!";
	}

	public function CovenantEStaffSignSave($userId = null, $signNum = null)
	{
		$data = array('user_id' => $userId, 'signNum' => $signNum);
		$this->load->view('empSigncovenant', $data);
	}

	public function CovenantEStaffContentSave()
	{
		$content_id= $this->input->post('content_id');
		$content= $this->input->post('content');
		$this->load->model('hr_m');
		$this->hr_m->updateCovenantEStaffContent($content_id, $content);
	}

	public function saveCovenantEStaff($user_id= null)
	{
		if($user_id != null){
			$content= $this->input->post('fileContent');
			file_put_contents("uploads/CovenantEStaff/".$user_id.".html", "<html><head><title>HR Polices</title><link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'></head><body><center><div style='text-align: left; width: 700px;'>".$content."</div></center></body></html>");
			echo base_url()."uploads/CovenantEStaff/".$user_id.".html";
		}else
			echo "Ooops!<br> An error occurred <br> Please try again latter!!!!!";

	}


	// chnages

	public function assignedequipments($id)
	{
		$data['equipments']=$this->user_m->getequipments($id);
		$data['user']=$this->user_m->newgetuserbyid($id);
		$this->load->view('assignequipments',$data);
	}
	public function addequipment( $id = NULL)
	{
		
		$data=array(
			'user_id'=>$this->input->post('id'),
			'equipment'=>$this->input->post('equipment'),
			'assigned_to'=>$this->input->post('assigned')
		);
		if($id)
		{
			$this->user_m->editequipment($data,$id);	
		}
		else
		{
			$this->user_m->addequipment($data);
		}
		$this->assignedquipments($this->input->post('id'));

	}

}
