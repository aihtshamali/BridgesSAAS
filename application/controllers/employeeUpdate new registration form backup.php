<?php

/**
* 
*/
class employeeUpdate extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
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

	function index(){
		$data['employee'] = $this->user_m->getuser();
		//print_r($data);
		//exit();
		$this->load->view('employeeView',$data);
	}

	function getEmployee($userid){
		$this->load->model('hr_m');
		$data["userid"] = $userid;
		//$data["emp"]= $this->hr_m->getuser($userid);
		
		$data["clu"]= $this->hr_m->getrank();
		$data["ran"]= $this->hr_m->getcluster();
		$data["des"]= $this->hr_m->getdesignation();
		$data['emp'] = $this->hr_m->getEmployee($userid);
		//print_r($data['emp']);
		$this->load->view('employeeCVedit', $data);
	}

	function empUpdate(){
		$timings = $this->input->post('timeIn')."-".$this->input->post('timeOut');
		$userid=$this->input->post('userid');
		//echo $userid;
		//exit();
		$data = array(
                    'career'=>$this->input->post('career'),
                    'objective' => $this->input->post('objective'),
                    
                    'firstname' => $this->input->post('fname'),
                    'lastname' => $this->input->post('lname'),
                    'gender' => $this->input->post('emp_gender'),
                    'marital_status' => $this->input->post('marital_status'),
                    'dependance'=>$this->input->post('dependance'),
                    
					'p_email' => $this->input->post('emp_email'),
                    'contact_no' => $this->input->post('emp_phone'),
                    
                    'website' => $this->input->post('emp_website'),
                    'address' => $this->input->post('address'),
                    'add_nationality' => $this->input->post('nationality'),
                    'res_country' => $this->input->post('country'),
                    
                    'title'=>$this->input->post('title'),
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
                    'emp_code' => $this->input->post('empCode'),
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
                    'academic_club_role' => $this->input->post('a-club-role'),
                    'emp_code' => $this->input->post('empCode'),
                    
                    'emergency_person_name   ' => $this->input->post('pname'),
                    'relationship_to_person' => $this->input->post('relationship'),
                    // 'eoccupation' => $this->input->post('eoccupation'),
                    'emergency_contact_1' => $this->input->post('contact1'),
                    'emergency_person_address_1' => $this->input->post('address1'),
                    'e_email' => $this->input->post('e-email'),
                    'e_city' => $this->input->post('city'),*/
                    'userid' => $this->input->post('userid')
                    );
		//$this->agent->referrer();
		//exit;
		$this->hr_m->empUpdate($userid, $data);
		redirect('employeeUpdate');
	}

	function inActiveUser($userid){
		if($this->hr_m->inActiveUser($userid)){
			redirect('employeeUpdate');
		}
		else{
			echo "Ooops!<br> An error occurred <br> Please try again latter!!!!!";
		}
	}
	
	

	function activeUsers($status){
		$data['employee'] = $this->hr_m->active($status);
		$this->load->view('employeeView',$data);
	}
}

?>