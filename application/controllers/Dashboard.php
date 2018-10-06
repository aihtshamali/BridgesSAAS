<?php

class Dashboard extends CI_Controller {
	
	function index() {
		$data['template'] = 'dashboard';
		$this->load->view('include/template',$data);
	}
}