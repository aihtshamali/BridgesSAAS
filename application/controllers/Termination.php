<?php

class Termination extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('user_m');
		$this->load->model('hr_m');
		$this->data['meta_title'] = 'Bridges';
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model('user_m');

		
		
	}

	function saveofferSign(){
		$data = $this->input->post('imagedata');
		$filename = 'uploads/terminationSign/'.$this->input->post('userid').'-'.$this->input->post('emp_num').'.png';
		//Need to remove the stuff at the beginning of the string
		$data = substr($data, strpos($data, ",")+1);
		$data = base64_decode($data);
		$imgRes = imagecreatefromstring($data);
		$fullUrl = base_url().'/'.$filename;
		if($imgRes !== false && imagepng($imgRes, $filename) === true)
		    echo "<img src='{$fullUrl}' alt='Signature'/>";

	}	
			
	function saveOffer($user_id=null){
		$filename = $user_id.'_1';

		$i = 1;
		while ( $i<= 100) {
			 if (!file_exists("uploads/termination/".$user_id.'_'.$i.".html" )) {
			 	$filename = $user_id.'_'.$i;
			 	break;
			 }
		   $i++;
		}

				if($user_id != null){
			$content= $this->input->post('fileContent');
			file_put_contents("uploads/termination/".$filename.".html", $content);
			echo base_url()."uploads/termination/".$filename.".html";
		}else
			echo "Ooops!<br> An error occurred <br> Please try again later!!!!!";

	}
	
	function Letter($id) 
	{
	
		$this->load->model('user_m');
		$data['employee']=$this->user_m->newgetuserbyid($id);
		$this->load->view('termination',$data);
	}
	function updatefooter($id){
		$this->load->model('user_m');
		$this->user_m->updatefooter($this->input->post('data'),$id);

	}
	
	
	function get_emp_details($id) {
		return $employees = $this->user_m->get_employee_details(array('ba_users.id' => $id));
	}

	public function saveletterdb()
	{
		 $id = $this->input->post('id');
		 $subject = $this->input->post('subject');
		 $file_name = $this->input->post('file_name');
		 $date = date('Y-m-d');
		 $data = array(
		 		'userid' => $id,
		 		'filename' => $file_name,
		 		'subject' => $subject,
		 		'date' => $date
		 	);
		 $this->user_m->save_com_letter($data);
		 
	}





}

		
	
