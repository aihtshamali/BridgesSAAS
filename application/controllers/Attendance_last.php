<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Attendance extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('attendance_model', 'attendance');
	}
	
	public function index()
	{
		$date = isset($_POST['date']) ? : date('Y-m-d');
		$data['attendace_log'] = $this->attendance->get_log($date);
		$this->load->view('attendance-view', $data);
	}

	public function get()
	{
		$date = isset($_POST['date']) ? : date('Y-m-d');
		$data['attendace_log'] = $this->attendance->get_log($date);
		$this->load->view('attendance-view', $data);
	}
	
	public function import()
	{	//phpinfo();
		$this->load->view('attendance-import');
		
		if(isset($_POST["import"]))
		{
			$filename=$_FILES["file"]["tmp_name"];
			
			if($_FILES["file"]["size"] > 0)
			{
				//$records = file_get_contents($filename);
				$lines = file($filename, FILE_IGNORE_NEW_LINES);
				$check_ins = array();
				$check_out = array();
				//print_r( $lines );
				foreach($lines as $n => $line)
				{
					if($n > 0)
					{
						strtok($line, 'M');
						$state = strtok(null);
						$line = str_replace('  ',' ',$line);
						//echo $line.'<br>';
						$records = explode(' ', $line);
						if(!empty($records[1]))
						{
							$user_id = $records[1];
							$date = date('Y-m-d H:i:s', strtotime($records[2]));
							$time = date('Y-m-d H:i', strtotime($records[2].' '.$records[3].' '.$records[4]));
							$type = str_replace(' ','',str_replace('/','-',strtolower($state)));
							$logged = $this->attendance->has_logged($user_id, $date);
							//print_r($logged);
							if($type == 'c-in' && !in_array($user_id, $check_ins))
							{
								if(empty($logged))
								{
									if($this->attendance->check_in($user_id, $time))
									{
										array_push($check_ins, $user_id);
										echo 'User:'.$user_id.', Time:'.$time.', Status:Check In Saved<br>';
									}
									else
									{
										echo 'User:'.$user_id.', Time:'.$time.', Status:Check In <span style="color:red">Error</span><br>';
									}
								}
							}
							elseif(!in_array($user_id, $check_out) && in_array($user_id, $check_ins) && $type != 'c-in')
							{
								if(!empty($logged))
								{
									$id = $logged->id;
									
									if($this->attendance->check_out($id, $user_id, $time))
									{
										array_push($check_out, $user_id);
										echo 'User:'.$user_id.', Time:'.$time.', Status:Check Out Saved<br>';
										//echo 'User:'.$user_id.', Time:'.$time.', Status: '.$type.'<br>';	
									}
									else
									{
										echo 'User:'.$user_id.', Time:'.$time.', Status:Check Out <span style="color:red">Error</span><br>';
									}
								}
								else
								{
									echo 'User:'.$user_id.', Time:'.$time.', Status: '.$type.' Not Checked In<br>';
								}
							}
						}
					}
				}
				
				if(!empty($check_ins) || !empty($chekc_out))
				{
					echo 'Excel File has been successfully Imported';
				}
				else
				{
					echo '<span style="color:red">No record updated becuase the file was empty or all the users has been logged already.</span>';
				}
				
			}
			else
			{
				echo 'Invalid File:Please Upload Excel File';
			}
		}

	}
}
