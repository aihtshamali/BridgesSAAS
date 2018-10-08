<?php
class Admin extends CI_Controller {
	function __construct(){
		parent::__construct();

		$this->load->helper('fhk_authorization_helper');
		$this->load->model('user_m');
		$this->load->model('hr_m');
		$this->load->model('attendance_model');
		$this->load->model('admin_m');
		$this->data['meta_title'] = 'Bridges';
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('session');
		if ($this->user_m->loggedin() == FALSE) {
			 $this->session->set_userdata('page_url', current_url());
			redirect('user?id=1');
		}

		/*
		if ($this->session->userdata('usertype')  == "Director") {
			return TRUE;
		}
		else{
			// echo "Bus bohat daikh lee salary slips!!! ab jao khelo";
			// exit;
			return FALSE;
		}
		*/
	}
	public function AssignRole(){
		$data['roles']=$this->admin_m->getAllRoles();
		$data['users']=$this->attendance_model->newget_users();
		$this->load->view('roles',$data);
	}
	public function AssignedRoles(){
		fhkAuthPage(null, ["canViewRolesSheet", "canDoEverything"]);
		$data['AssignedRoles']=$this->admin_m->getAllAssignedRoles();
		$data['users']=$this->attendance_model->newget_users();
		$this->load->view('assigned_roles',$data);
	}
	public function AssignPermission(){
		fhkAuthPage(null, ["canAssignRoles", "canDoEverything"]);
		$data=array(
			'user_id'=>$this->input->post('user_id'),
			'role_id'=>$this->input->post('role_id')
			);
		$this->admin_m->insertAssignedPermission($data);
		redirect('Admin/AssignedRoles','refresh');

	}
	public function UpdateAssignedPermission(){
		fhkAuthPage(null, ["canEditRoles", "canDoEverything"]);
		$data=array(
			'user_id'=>$this->input->post('user_id'),
			'role_id'=>$this->input->post('role_id')
			);
		$this->admin_m->updateAssignedPermission($data,$this->input->post('id'));
		redirect('Admin/AssignedRoles','refresh');

	}		
	public function EditAssignedRole($id){
		$data['roles']=$this->admin_m->getAllRoles();
		$data['users']=$this->attendance_model->newget_users();
		$data['assigned_data']=$this->admin_m->getAssignedRole($id);
		$this->load->view('roles',$data);
	}
	public function DeleteAssignedRole($id){
		fhkAuthPage(null, ["canDeleteRoles", "canDoEverything"]);
		$this->admin_m->deleteAssignedPermission($id);
		redirect($_SERVER['HTTP_REFERER']);
	}
}

?>