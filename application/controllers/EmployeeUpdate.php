<?php
class EmployeeUpdate extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();

        $this->load->helper('fhk_authorization_helper');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('hr_m');
		$this->load->model('user_m');
		$this->load->library('session');

		if ($this->user_m->loggedin() == FALSE) {
			redirect('user?id=1');
		}

		if ($this->session->userdata('usertype') == "Accountant" || "Director")  {
			return TRUE;
		}
		else{
			echo "You Don't have permissions to be here!!!";
			exit;
		}
	}

	function index()
	{
        fhkAuthPage(null, ["canViewEmployeeUpdateSheet", "canDoEverything"]);
		//$data['employee'] = $this->user_m->getuser();// oldtable
		$data['employee'] = $this->user_m->newgetuser();//new table
		// echo '<pre>';print_r($data);
		// exit();
		$this->load->view('employeeView',$data);
	}

	function getEmployee($userid)
	{
		$this->load->model('hr_m');
		$data["userid"] = $userid;
		$data["ran"]= $this->hr_m->getrank();
		$data["clu"]= $this->hr_m->getcluster();
		$data["des"]= $this->hr_m->getdesignation();
		$data['emp'] = $this->hr_m->newgetEmployee($userid);//new table
	
		$this->load->view('employeeCVedit', $data);
	}

	function empUpdate()
	{
		// echo '<pre>';print_r($this->input->post());exit;
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
                    'break_out' => $this->input->post('breakout'),
                    'break_in' => $this->input->post('breakin'),
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


		$this->hr_m->newempUpdate($userid, $data);//new table
		$this->hr_m->newempUpdatebausers($userid, $data2);//new table
		//$this->hr_m->empUpdate($userid, $data);old table
		redirect('employeeUpdate');
	}

	function inActiveUser($userid){
        fhkAuthPage(null, ["canChangeEmployeeActivation", "canDoEverything"]);
		if($this->hr_m->newinActiveUser($userid)){
			redirect('employeeUpdate');
		}
		else{
			echo "Ooops!<br> An error occurred <br> Please try again latter!!!!!";
		}
	}
	
	function activeUsers($status){
		$data['employee'] = $this->hr_m->newactive($status);
		$this->load->view('employeeView',$data);
	}
}

?>