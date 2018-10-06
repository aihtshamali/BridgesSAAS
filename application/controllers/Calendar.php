<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Calendar extends CI_Controller {

	public function _construct(){
	}

	public function index(){
		$this->load->model('attendance_model');
		$data['holidays']=$this->attendance_model->getAllHolidays();
		$this->load->view('school_calendar',$data);
	}

}
