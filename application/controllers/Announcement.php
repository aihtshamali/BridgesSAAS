<?php
class Announcement extends Frontend_Controller {
	function __construct(){
		parent::__construct();
		//$this->load->model('user/user_m');
	}

	function index($data = NULL) {
			$this->load->view('user/announcement', $data);
		}

	function details() {
		$salaryRange = $this->input->post('salaryRange');		
		}
}
