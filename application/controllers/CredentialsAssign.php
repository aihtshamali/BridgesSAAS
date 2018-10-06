<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class CredentialsAssign extends CI_Controller {

	 function  __construct() {
        parent::__construct();
        $this->load->model('CredentialsAssign_model');
        $this->load->model('hr_m');
	
    }
	
	public function index()
	{
		$userid = 1;
		$data['user_list'] = $this->CredentialsAssign_model->get_user();
		$data['emp'] = $this->hr_m->newgetEmployee($userid);
		$this->load->helper('form');
		$this->load->view('CredentialsAssign_view',$data);
	}

	public function Get_Employee()
	{
		$id = $this->input->post('id');
		return redirect('/Employee_reg/emp_module_1/'.$id);
	}


}?>