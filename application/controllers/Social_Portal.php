<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Social_Portal extends CI_Controller {

	 function  __construct() {
        parent::__construct();
        $this->load->model('Social_model');
	
    }
	
	public function index()
	{
		
		$this->load->view('social_portal_view');
	}


}?>