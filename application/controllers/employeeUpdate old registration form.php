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
		$data['emp'] = $this->hr_m->getEmployee($userid);
		$this->load->view('employeeEdit', $data);
	}

	function empUpdate($userid){
		$timings = $this->input->post('timeIn')."-".$this->input->post('timeOut');
		//echo $this->input->post('firstName');
		//echo "hey";
		//exit;
		$data = array( 
			'firstname' => $this->input->post('firstName'),
			'lastname' => $this->input->post('lastName'),
			'gender' => $this->input->post('empGender'),
			'cnic_no' => $this->input->post('cnic'),
			'emp_code' => $this->input->post('empCode'),
			'date_of_birth' => $this->input->post('empDob'),
			'p_email' => $this->input->post('empEmail'),
			'contact_no' => $this->input->post('empPhone'),
			'home_phone' => $this->input->post('homePhone'),
			'address' => $this->input->post('address'),
			'hired_for_project' => $this->input->post('hiredForProject'),
			'status' => $this->input->post('status'),
			'cluster' => $this->input->post('cluster'),
			'rankid'=>$this->input->post('ran'),
            'clusterid'=>$this->input->post('clu'),
            'designationid'=>$this->input->post('des'),
			'placement_level' => $this->input->post('placement-level'),
			'title' => $this->input->post('title'),
			'step' => $this->input->post('title'),
			'actual_salary' => $this->input->post('actual-salary'),
			'designation' => $this->input->post('designation'),
			'Descripter' => $this->input->post('descripter'),
			'hired_on' => $this->input->post('hired-on'),
			'work_experience' => $this->input->post('workExp'),
			'professional_industry' => $this->input->post('professionalIndustry'),
			'functional_area' => $this->input->post('functionalArea'),
			'career_level' => $this->input->post('careeLevel'),
			'shift' => $this->input->post('shift'),
			'timings' => $timings,
			'time_in' => $this->input->post('timeIn'),
			'time_out' => $this->input->post('timeOut'),
            'userid' => $this->input->post('userid'),
			'emergency_person_name' => $this->input->post('pname'),
			'relationship_to_person' => $this->input->post('relationship'),
			'emergency_contact_1' => $this->input->post('contact1'),
			'emergency_person_address_1' => $this->input->post('address1'),
			'e_email' => $this->input->post('e-email'),
			);
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