<?php
class User extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('user_m');
		$this->data['meta_title'] = 'Bridges';
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model('user_m');

		//Login Check
		$exceptions_uris = array(
			'user',
			'user/logout',
			'user/forget',
			'user/registerEmployer',
			'user/registerEmployee',
			'user/announcement',
			'user/announcement/details',
			'user/Oauth',
			'user/registerEmp'
			);
		if (in_array(uri_string(), $exceptions_uris) == FALSE) {
			if ($this->user_m->loggedin() == FALSE) {
				 redirect('user/');
			}
		}
	}
	

	function index($data = NULL) 
	{

		if($this->input->get()){$id = $this->input->get('id');}
		else $id=1;
		// $data['emp']= $this->hr_m->newgetuser($id);//new tables
		//Form Validation
		$rules = $this->user_m->rules;
		$this->form_validation->set_rules($rules);
		
		//check if logged in at redirect to dashboard
		$dashboard = 'taskmanagement/?id='.$id;
		if(!empty($this->session->userdata('id'))) {
			//$this->load->view('dashboard/dashboard', $data);
		}
		//$this->user_m->loggedin() == FALSE || redirect($dashboard);
		// $this->load->library('user_agent');
		//Login
		if ($this->form_validation->run() == TRUE) {
			//Login & Redirect
			$user = $this->input->post('email');
			$pass = $this->input->post('password');

			if ($this->user_m->newlogin($user, $pass) == TRUE) {
				$this->load->helper('url');
				if($this->session->userdata('page_url')){
					$previousUrl=str_replace(base_url(),"",$this->session->userdata('page_url'));
					if(strpos($previousUrl, 'index.php/') !== false){
						$previousUrl=str_replace("index.php","",$previousUrl);
					}
					redirect($previousUrl);
				}
				else
					redirect($dashboard, $data);	// Previous Code
			}
			else {
				$this->session->set_flashdata('error','Username & Passsowrd mismatch');
				redirect ('user/', 'refresh');
			}
		}
		$this->load->view('login', $data);
	}

	function forget ($data = NULL) {
		//Form Validation
		$rules = $this->user_m->email_rules;
		$this->form_validation->set_rules($rules);

		//check if logged in at redirect to dashboard
		$dashboard = 'dashboard';
		$this->user_m->loggedin() == FALSE || redirect($dashboard);

		//get user
		$data['user'] = NULL;
		if ($this->form_validation->run() == TRUE) {
			$email = $this->input->post('email');
			$data['user'] = $this->user_m->newget_by(array('email' => $email));	
			if (!empty($data['user'])) {
				$this->session->set_flashdata('error', 'Email sent');
				redirect('user/forget', 'refresh');
			}
			else {
			$this->session->set_flashdata('error', 'Email not found');
			redirect('user/forget', 'refresh');
			}
		}
		$this->load->view('user/forget', $data);
	}

	
	function get ($data = NULL) {
		$users = $this->user_m->newget_by(array('username' => 'slim2'));
		var_dump($users);
	}

	function register1($data = NULL) {
		//$this->load->view('user/register', $data);
		$data = array(
			'email' => 'elephant@slim.com');
		$id = $this->user_m->save($data, 3);
		var_dump($id);
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
		 // $this->load->view('register');
		$this->load->view('register-employee');
	}

	public function registerEmp()
	{
		// $this->form_validation->set_rules('fname', 'First Name', 'trim|required|alpha');
		// $this->form_validation->set_rules('userid', 'UserID', 'required');
		// $this->form_validation->set_rules('lname', 'Last Name', 'trim|alpha');
		// $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[newba_users.email]');

		if ($this->form_validation->run() == TRUE) {
			redirect('user/registerEmployee','refresh');
			// $this->load->view('register-employee');
		}

		else{
			$data = array(
				'id'=>$this->input->post('userid'),
				'fname' => $this->input->post('fname'),
				'lname' => $this->input->post('lname'),
				'email' => $this->input->post('email'),
				'password' => $this->input->post('password')
				);
			$userid = $this->user_m->new_insert_user($data);
			
			// $this->session->set_userdata($data);
					
			redirect('employee_reg/emp_module_1/'.$userid); //chnage by f
			// redirect('http://bridges/bridgessms/Bridges_School_Software/bridge_emp_profile/welcome/emp_module_1/'.$userid ,"refresh");

			// $this->load->view('emp_module_1_view',$userid);
		}
	}
	public function afterreg($userid=null)
	{
			print_r($userid);exit;
			$useridd['id']=$userid; 
			$this->load->view('emp_module_1_view',$useridd);
	}
	public function registerEmpnew()
	{
		// $this->form_validation->set_rules('fname', 'First Name', 'trim|required|alpha');
		// $this->form_validation->set_rules('lname', 'Last Name');
		// $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[newba_users.email]');

		if ($this->form_validation->run() == FALSE) {
			// redirect('user/registerEmployee','refresh');
			$this->load->view('register-employee');
		}
		else{
			$data = array(
				'name' => $this->input->post('fname'),
				'lname' => $this->input->post('lname'),
				'email' => $this->input->post('email'),
				'password' => $this->input->post('password')
				);
			$userid = $this->user_m->insert_user($data);	
			redirect('hr/index/'.$userid);
		}
	}

	public function change_pass()
	{
		$data['email'] = $this->session->userdata['email'];
		$this->load->view('change-pass', $data);
	}

	public function pass_change_values()
	{
		// $this->form_validation->set_rules('xpass','Old Passsowrd', 'trim|required');
		// $this->form_validation->set_rules('newpass','New Passsowrd', 'trim|required');
		// $this->form_validation->set_rules('repass', 'Confirm Passsowrd', 'trim|required');

		// if ($this->form_validation->run() = FALSE) {
		// 	redirect('user/change-pass');

		$email = $this->session->userdata['email'];
		$xpass = $this->input->post('xpass');
		$newpass = $this->input->post('newpass');
		// $repass = $this->input->post('repass');
		return $this->user_m->change_pass_m($email, $xpass, $newpass);
	}
}
