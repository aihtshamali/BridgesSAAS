<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Hr_Dashboard extends CI_Controller {

	 function  __construct() {
        parent::__construct();
        $this->load->model('Hr_Dashboard_model');
	
    }
	
	public function index()
	{
		$data['user_list'] = $this->Hr_Dashboard_model->get_user();
		$this->load->view('Hr_Dashboard_view',$data);
	}

	public function Get_Employee()
	{
		$id = $this->input->post('id');
		return redirect('/Employee_reg/emp_module_1/'.$id);
	}


}?>