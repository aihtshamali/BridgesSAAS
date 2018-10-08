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

		$this->load->model('Attendance_model', 'attendance');

		$this->load->helper('fhk_authorization');
		$this->load->helper('form');

		$this->load->model('user_m');

		$this->load->library('session');

		if ($this->user_m->loggedin() == FALSE) {

			$this->session->set_userdata('page_url', current_url());

			redirect('user?id=1');

		}	



		if ($this->session->userdata('usertype') == "HR" || $this->session->userdata('usertype') == "Director") {

			return TRUE;

		}

		else{

			// $this->load->view('unauthorized');

			return false;

		}

	}

	

		public function UpdateAttendance(){

		

			if($this->input->post()){			

			$userid=$this->input->post('userid');

			$time=$this->input->post('time');

			$date=$this->input->post('date');

			$this->load->model('attendance_model');

			$this->attendance_model->updateattendance($userid,$time,$date);	

			}

			else{

				$this->load->view('UpdateTime');

			}

		 //TODO

	

	}





	public function index()

	{



	if($this->session->userdata('usertype')=="Director" || $this->session->userdata('usertype')=="HR" ){

      	



		if(isset($_POST["import"]))

		{

			// print_r($_FILES["file"]);

			// exit;

			$date = isset($_POST['cdate']) ? $_POST['cdate'] : date('Y-m-d');

			//$date = "";

			$filename=$_FILES["file"]["tmp_name"];

			$attendees = array();

			$staffMembers = $this->attendance->newget_users();

			$co=0;

			if($_FILES["file"]["size"] > 0)

			{

				$lines = file($filename, FILE_SKIP_EMPTY_LINES);//FILE_IGNORE_NEW_LINES

				$check_ins = array();	

				$check_out = array();

				// echo "<pre>";print_r( $lines );

				foreach($lines as $n => $line)

				{

					if($n > 0 && !empty($line))

					{

						strtok($line, 'M');

						$state = strtok(null);

						$line = str_replace('  ',' ',$line);

						$line = preg_replace('/\s/', ' ', $line);

						$line = trim($line);

						// echo $line.'<br>';

						$records = explode(' ', $line);

						if(!empty($records[0]))

						{

							$user_id = (int)$records[0];

							

							// print_r($records);exit;

							array_push($attendees, $user_id);

							$time = date('H:i', strtotime($records[2].' '.$records[3]));

							$type = str_replace('/','', strtolower($state));

							$type = str_replace(' ','', $type);

							$type = preg_replace('/\s/', '', $type);

							$logged = array();//$this->attendance->has_logged($user_id, $date);

							//echo $time;

							//exit(); 

							if(!in_array($user_id, $check_ins))

							{

								if(empty($logged))

								{



									if(!$this->attendance->has_logged($user_id,$date))

									{

										if($this->attendance->check_in($user_id, $date, $time))

										{

											// print_r("in");exit;	

											array_push($check_ins, $user_id);

										}

									}

									elseif($this->attendance->has_logged($user_id,$date))

									{

										if($this->attendance->updateCheck_in($user_id, $date, $time))

										{

											array_push($check_ins, $user_id);

										}

									}

								}	

							}



							// elseif(!in_array($user_id, $check_out) && in_array($user_id, $check_ins))

							elseif(!in_array($user_id, $check_out) || $records[4]=="C/Out")

							{

								// print_r($records[1]);

								// echo"<pre>";print_r($logged);

								if(!empty($logged) ||$records[4]=="C/Out" )

								{

									$dat=$records[1];

									$dat =date('Y-m-d', strtotime( $dat ));

									// print_r($date);

									// print_r($dat);

									// exit(); 

									if($this->attendance->has_logged($user_id,$date))

									{

										// echo"<pre>";print_r($this->attendance->has_logged($user_id,$date));

									if($this->attendance->check_out($user_id, $time,$dat))

									{



										array_push($check_out, $user_id);

										// echo "string<br>";

									}

									}

									elseif($this->attendance->has_logged($user_id,$date))

									{

									// $id = $logged->id;

									if($this->attendance->check_out( $user_id, $time,$dat))

									{

										array_push($check_out, $user_id);

										// echo "string1<br>";

									}

								}

								}

							}

						}

					}

					$co++;

				}

				//Log absentees

				foreach($staffMembers as $user)

				{

					$user_id = $user->id;

					//$date = isset($date) ? date('Y-m-d', strtotime($date)) : date('Y-m-d');

					$logged = $this->attendance->has_logged($user_id, $date);

					if(!in_array($user_id, $attendees) && empty($logged))

					{

					

					if(!$this->attendance->has_logged($user_id,$date)){

						if($this->attendance->check_in($user_id, $date))

						{

							array_push($check_ins, $user_id);

						}

					}

					elseif($this->attendance->has_logged($user_id,$date))

					{

						if($this->attendance->updateCheck_in($user_id, $date, $time))

						{

							array_push($check_ins, $user_id);

						}

					}



					}

				}

				

				if(!empty($check_ins) || !empty($check_out))

				{

					$data['success'] = 'Excel File has been successfully Imported';

				}

				else

				{

					$data['error'] = 'No record updated becuase the file was empty or all the users has been logged already.';

				}

			}

			else

			{

				$data['error'] = 'Invalid File:Please Upload Excel File';

			}

		}

		

		if(isset($_POST['supervise']))

		{

			$aid = $_POST['attendance_id'];

			if($_POST['relaxation'] == 'yes'){$relaxation = 1;}else{$relaxation = 0;}

			

			

			$reason = $_POST['reason'];

			//echo $reason;

			

			

			if(empty($aid) || empty($reason))

			{

				$data['error'] = 'Late reason required';

			}

			else

			{

				if($this->attendance->supervise($aid, $relaxation, $reason))

				{

					$data['success'] = 'Supervision saved successfully';

				}

				else

				{

					$data['error'] = 'Oops! Please try again';

				}

			}

		}

		

		$date = isset($_GET['date']) ? $_GET['date'] : date('Y-m-d');

		//$date = "2017-06-11";

		$data['attendace_log'] = $this->attendance->get_log($date);

		

		// echo"<pre>";print_r($data);

		// exit;

		$this->load->view('attendance-view', $data);

		}

		else

			$this->load->view('unauthorized');

	}

	

	public function updateHolidays($id){

		$data['holidayDetails']=$this->attendance->getHolidayById($id);

		$this->load->view('updateholidays',$data);

	}

	public function InsertAttendance(){

		// print_r($_POST);exit;

		

		$user_id=$this->input->post('userid');

		$date=$this->input->post('date');



		if(!$this->attendance->has_logged($user_id,$date))

		{

			$this->attendance->Newcheck_in($user_id, $date, $time,'1');

			

		}

		elseif($this->attendance->has_logged($user_id,$date))

		{

			$time=date("H:i:s", strtotime($this->input->post('time')));

			$this->attendance->NewupdateCheck_in($user_id, $date, $time,'1');

		}

		redirect($_SERVER['HTTP_REFERER']);

	}

	public function saveHolidays($id = NULL){

		// print_r($_POST);exit;

		// die()

		$data=array(

			'name'=>$this->input->post('name'),

			'description'=>$this->input->post('description'),

			'date'=>$this->input->post('date'),

			'status'=>$this->input->post('holiday[0]')

			);

		if($id)

		{

			$this->attendance->updateholidays($data,$id);

		}

		else

		{

			// print_r($this->input->post('holiday'));s

			// exit;



			for ($i=0;$i<sizeof($this->input->post('name'));$i++) {

					$dat=$this->input->post('year['.$i.']')."-".$this->input->post('month['.$i.']')."-".$this->input->post('day['.$i.']');

					$dat=date('Y-m-d', strtotime($dat));

					$data=array(

			'name'=>$this->input->post('name['.$i.']'),

			'description'=>$this->input->post('description['.$i.']'),

			'status'=>$this->input->post('holiday['.$i.']'),

			'date'=>$dat

			);

					// print_r($dat);exit;

			$this->attendance->saveHolidays($data);

			}



		}

		return redirect( base_url().'Attendance/publicholidays');

	}

	public function insertHolidays($id = NULL){

		if($id != NULL)

		{

		$data['holidayDetails']=$this->attendance->getHolidayById($id);

		$this->load->view('Insertholidays',$data);

		

		}

	else

	{

		$data['holidayDetails'] = NULL;

		$this->load->view('Insertholidays',$data);	



	}

	}



	public function publicholidays(){

		$data['holidays']=$this->attendance->getAllHolidays();

		$this->load->view('ShowHolidays',$data);

	}



	public function publicholidaysPrint(){

		$data['holidays']=$this->attendance->getAllHolidays();

		$this->load->view('ShowHolidaysPrint',$data);

	}









	public function chart()

	{

		$chart = array();

		

		for($i=10;$i<=31;$i++)

		{

			$timechart = '2017-01-'.sprintf('%02d', $i).' 09:15:00';

			//$this->attendance->check_in(10, $timechart);

		}

		

		$intime	= array();

		$absent = array();

		$leave	= array();

		$by15	= array();

		$by60	= array();

		$halfday= array();

		

		$month = isset($_GET['month']) ? $_GET['month'] : date('m');

		$year = isset($_GET['year']) ? $_GET['year'] : date('Y');

		$user_id = isset($_GET['user_id']) ? $_GET['user_id'] : 9;

		$chart = $this->attendance->by_user($year, $month, $user_id);

		$days = cal_days_in_month(CAL_GREGORIAN, 01, 2017);

		//$this->load->view('attendance-chart');

		foreach($chart as $day){

			$rollcal[date('d', strtotime($day->check_in))] = $day;

		}

		

		for($i=1;$i<=$days;$i++)

		{

			if(isset($rollcal[$i]))

			{

				$day = $rollcal[$i];

				//Arrival - Time when user checked in

				$check_in = strtotime(date('h:i', strtotime($day->check_in)));

				//Schedule - Check in Due on time

				$time_in = strtotime($day->time_in);

				//Late - Difference in Schedule& Arrival

				$late = $check_in-$time_in;

				//Current day of month 

				$today = date('d', strtotime($day->check_in));

				//If user was Absent

				if($check_in == 0)

				{

					//Leave - If absent facilitated

					if($day->relaxation == 1)

					{

						array_push($leave, $today);

					}

					//Mark Absent

					else

					{

						array_push($absent, $today);	

					}

				}

				//If checked in 15 minutes

				elseif($late < 900)

				{

					array_push($intime, $today);

					$status = 'On Time';

				}

				//If checked in later than 3 hours

				elseif($late >= 10800)

				{

					array_push($halfday, $today);

					$status = 'Late by Hour';

				}

				//If checked in later than an hour but not more than 3 hours

				elseif($late >= 3600)

				{

					array_push($by60, $today);

					$status = 'Late by Hour';

				}

				//If checked in later than 15 minutes but not more than an hour

				elseif($late >= 900)

				{

					array_push($by15, $today);

					$status = 'Late by 15';

				}			

			}

			else

			{

				/*$status = 'Absent';

				$relaxation = isset($day->relaxation) ? $day->relaxation : 0;

				//Leave - If absent facilitated

				if($relaxation == 1)

				{

					array_push($leave, $i);

				}

				//Mark Absent

				else

				{

					array_push($absent, $i);	

				}*/

			}

			//echo '<div>Date: '.$i.' => '.$status.'</div>';

		}

		

		$html = '<table class="table">

					<tr>';

		//Date Row

		$html .= '</tr><tr><th class="text-nowrap text-primary">Date</th>';

		for($i=1;$i<=$days;$i++)

		{

			$html .= '<td class="">'.sprintf('%02d', $i).'</td>';

		}

		//Intime Row

		$html .= '</tr><tr><th class="text-nowrap text-success">In Time</th>';

		for($i=1;$i<=$days;$i++)

		{

			if(in_array($i, $intime)){$class = 'atc_intime';}else{$class = '';}

			$html .= '<td class="'.$class.'">&nbsp;</td>';

		}

		//Late by 15 Minutes

		$html .= '</tr><tr><th class="text-nowrap text-success">Late by 15</th>';

		for($i=1;$i<=$days;$i++)

		{

			if(in_array($i, $by15)){$class = 'atc_by15';}else{$class = '';}

			$html .= '<td class="'.$class.'">&nbsp;</td>';

		}

		//Late by an hour

		$html .= '</tr><tr><th class="text-nowrap text-success">Late by An Hour</th>';

		for($i=1;$i<=$days;$i++)

		{

			if(in_array($i, $by60)){$class = 'atc_by60';}else{$class = '';}

			$html .= '<td class="'.$class.'">&nbsp;</td>';

		}

		//Late by half day

		$html .= '</tr><tr><th class="text-nowrap text-success">Half Day</th>';

		for($i=1;$i<=$days;$i++)

		{

			if(in_array($i, $halfday)){$class = 'atc_halfday';}else{$class = '';}

			$html .= '<td class="'.$class.'">&nbsp;</td>';

		}

		//Absent

		$html .= '</tr><tr><th class="text-nowrap text-success">Absent</th>';

		for($i=1;$i<=$days;$i++)

		{

			if(in_array($i, $absent)){$class = 'atc_absent';}else{$class = '';}

			$html .= '<td class="'.$class.'">&nbsp;</td>';

		}

		//Leave

		$html .= '</tr><tr><th class="text-nowrap text-success">Approved Leave</th>';

		for($i=1;$i<=$days;$i++)

		{

			if(in_array($i, $leave)){$class = 'atc_leave';}else{$class = '';}

			$html .= '<td class="'.$class.'">&nbsp;</td>';

		}

		//Close Chart

		$html .= '</tr></table>';

		

		$data['chart_html'] = $html;

		$this->load->view('attendance-chart', $data);

	}



	function addTime(){

		$userid = $this->input->post('userid');

		$data = array(

		'time_in' => $this->input->post('timeIn')

		);

		$this->attendance->addTime($userid, $data);

		redirect('Attendance');

	}

	

	public function delhoildays($id){

		

		$this->attendance->delHolidayById($id);

		$data['holidays']=$this->attendance->getAllHolidays();

		redirect('Attendance/publicholidays');

		//$this->load->view('publicholidays',$data);

	}

	public function Attendace_Sheet(){

		$data['attendance_sheet'] =$this->attendance->getAttendanceSheet();

		// echo "<pre>";print_r($data['attendance_sheet']);

		$this->load->view('attendanceNBreak_sheet',$data);

	}





	public function print_leave(){

		// print_r($this->input->post());exit;

		$this->load->model('taskmanagement_m');

		$data['printinfo']=(object)$this->input->post();

		$data['user']=$this->taskmanagement_m->newget_user($this->input->post('userid'));

		$this->load->view('leave_print',$data);

	}



// 	public function getAttendance($userId){

		

// 		$this->load->model('taskmanagement_m');



// 		$data['userPerformance'] = $this->taskmanagement_m->getUserPerformance($userId);

//     	$data['attendance_leave']=$this->taskmanagement_m->getLeaveData($userId);



// 		$month = isset($_GET['month']) ? $_GET['month'] : date('m');

// 		$year = isset($_GET['year']) ? $_GET['year'] : date('Y');

// 		$data['mont']=null;	

		

// // Month changed

// 	$data['public_holidays']=$this->attendance_model->getPublicHolidays(date('Y-m-',strtotime('-1 months')));

//     	$chart = $this->attendance_model->by_user($year, $month, $userId);

		

// 		$days = cal_days_in_month(CAL_GREGORIAN, $month, $year);

// 	$data['userid']=$userId;

// 			foreach($chart as $day){

// 				//echo"<pre>";				

// 				$sunday = date_create($day->date);

// 				// print_r($sunday);

// 				$sunday = $sunday->format('D');

// 				$late = date_diff(date_create($day->time_in), date_create($day->check_in));

// 				//print_r($late->format('%R%i'));echo "<br>";

// 				$late = $late->format('%R%i') + ($late->format('%R%h') * 60);

// 				//print_r($late);

// 				$day1 = date_create($day->date);

				

// 				if ($day->project_title == 	"The Bridges School" && $sunday == "Sat") {

// 					$data['attendance'][$day1->format('j')] = "sunday";

// 				}

// 				elseif ($sunday == "Sun") {

// 					$data['attendance'][$day1->format('j')] = "sunday";

// 				} elseif ($day->check_in == "00:00:00") {

// 					continue;

// 				} elseif ($late < 0) {

// 					$data['attendance'][$day1->format('j')] = "intime";

// 				} elseif ($late <= 15) {

// 					$data['attendance'][$day1->format('j')] = "intime";

// 				} elseif ($late >= 15 && $late <= 59) {

// 					$data['attendance'][$day1->format('j')] = "late15";

// 				} elseif ($late >= 60 && $late <= 179) {

// 					$data['attendance'][$day1->format('j')] = "latehr";

// 				} elseif ($late >= 180 && $late <= 299 ) {

// 					$data['attendance'][$day1->format('j')] = "half";

// 				} elseif ($late >= 400) {

// 					$data['attendance'][$day1->format('j')] = "absent";

// 				} else {

// 					$data['attendance'][$day1->format('j')] = "absent";

// 				}

// 			}

// 			echo $data;

// 	}



	public function Attendance_Sheet(){

		$month = isset($_GET['month']) ? $_GET['month'] : date('m');

		$year = isset($_GET['year']) ? $_GET['year'] : date('Y');

		$curday = isset($_GET['day']) ? $_GET['day'] : date('d');

		// print_r($month);exit;

 		$this->load->model('taskmanagement_m');

 		// $this->load->model('attendance');

 		// print_r($month.'-'.$year);

		$chart=$this->attendance->get_attendancePermonth($month,$year);

		// print_r($chart);exit;

			$accumalatedData=null;

			$data['accumalatedData']=null;

			$accumalatedData=$this->attendance->get_remaining_holidays();

		$data['attendance']=null;


		foreach ($accumalatedData as $accumalated) {


				$data['accumalatedData'][$accumalated->userid]=$accumalated->holidays;
				$accumalatedData[$accumalated->userid]=$accumalated->assigned_at;


				// print_r($accumalated->userid.' - ');

			}


		if($curday<10)

			$curday="0".$curday;

			$data['month']=$month;

			$data['day']=$curday;

			$data['year']=$year;



						// Check if the new month is started thn add 2 more accumalated leaves

				$allusers=$this->taskmanagement_m->newget_users();

					// print_r($accumalatedData);exit;

			$i=0;

			foreach ($allusers as $user) {

				
				if(isset($accumalatedData[$i])){
					// print_r($accumalatedData);exit;
				if($accumalatedData){
					if(isset($accumalatedData[$user['id']]))
					$mon=explode('-',$accumalatedData[$user['id']]);
					// print_r($mon);	
				}

				$i++;

			if(isset($mon[1]))

			if(($mon[1]!=date('m') || $accumalatedData==null) && $user['status']==1)
			{



				$holi=0;

				if($user['designation']==2){

					$holi=1;

				}

				else

					$holi=2;

				if($user)
				{

				if($user['userid']!=0 && $user['status']!=0){

				$temp=null;

				$temp=$this->attendance->userget_remaining_holiday($user['userid']);

				// echo'<pre>';print_r($temp);
				// exit;

				if($temp){

					$data=array(

						'holidays'=>$temp->holidays+$holi,
						'userid'=>$temp->userid,
						'assigned_at'=>date('Y-m-d H:i:s'),
						'modified_at'=>date('Y-m-d H:i:s')

						);

					// echo '<pre>';print_r($data);	

					$this->attendance->UpdateUser_remaining_holiday($data,$user['userid']);

				}

				else{

				$data=array(

						'holidays'=>$holi,

						'userid'=>$user['id'],

						'assigned_at'=>date('Y-m-d H:i:s')

						);

					$this->attendance->InsertUser_remaining_holiday($data);	

					}

				}
			}



			}

		}

		}

		// var 

		// print_r($data['public_holidays']);exit;

		// print_r($month);


			// echo'<pre>';print_r($data['accumalatedData']);exit;

		$data['public_holidays']=$this->attendance->getPublicHolidays(date('-'.$month.'-'));

		foreach($chart as $day){

				$sunday = date_create($day->date);

				$sunday = $sunday->format('D');

				

				$late = date_diff(date_create($day->time_in), date_create($day->check_in));

				//print_r($late->format('%R%i'));echo "<br>";

				$late = $late->format('%R%i') + ($late->format('%R%h') * 60);

				// echo "<pre>".$day->user_id."<a?";print_r($late);

				$day1 = date_create($day->date);

				

				if ($day->project_title == 	"The Bridges School" && $sunday == "Sat") {

						// if($day1->format('j')==13)

							// print_r($late. "<br>".$day->user_id);

					if( $late<=500 && $late>=-400)

					{ 

						$data['attendance'][$day->user_id][$day1->format('j')] = "SatPresent";

					}

					else	

						$data['attendance'][$day->user_id][$day1->format('j')] = "sunday";

					// $data['attendance'][$day->user_id][$day1->format('j')] = "sunday";

				}

				elseif ($sunday == "Sun") {

					$data['attendance'][$day->user_id][$day1->format('j')] = "sunday";

				} elseif ($day->check_in == "00:00:00") {

					continue;

				} elseif ($late < 0) {

					$data['attendance'][$day->user_id][$day1->format('j')] = "intime";

				} elseif ($late <= 15) {

					$data['attendance'][$day->user_id][$day1->format('j')] = "intime";

				} elseif ($late >= 15 && $late <= 59) {

					$data['attendance'][$day->user_id][$day1->format('j')] = "late15";

				} elseif ($late >= 60 && $late <= 179) {

					$data['attendance'][$day->user_id][$day1->format('j')] = "latehr";

				} elseif ($late >= 180 && $late <= 299 ) {

					$data['attendance'][$day->user_id][$day1->format('j')] = "half";

				} elseif ($late >= 300) {

					$data['attendance'][$day->user_id][$day1->format('j')] = "full";

				} else {

					$data['attendance'][$day->user_id][$day1->format('j')] = "absent";

				}


				if($day->changed==1) {

					$data['changed'][$day->user_id][$day1->format('j')] = "changed";

				}

			}



			//var_dump($data['attendance'][100]); die();

		// echo "<pre>";print_r($data['public_holidays']);exit;

		// echo "<pre>";print_r($data['attendance_sheet']);

		// $data['monetized']=$this->payslip_monetized($id,date('Y-m-01',strtotime('-1 months')));

			// print_r($year);

 		$data['attendance_leave']=$this->taskmanagement_m->AllLeaveDataMon($month,$year);

		$data['attendance_sheet'] =$this->attendance->get_Attendance_Sheet_data();

 		// echo"<pre>";print_r($data['attendance_leave']);exit;

		$this->load->view('attendance_sheet_latest',$data);

		// $this->load->view('attendanceNBreak_sheet _final',$data);

	}



	public function Attendance_Sheet_final(){

		

		$data['attendance_sheet'] =$this->attendance->get_Attendance_Sheet_data();

		

		$this->load->view('attendanceNBreak_sheet_final',$data);

	}

	



	// public function Payroll_Sheet_final(){

	// 	$data['attendance_sheet'] =$this->attendance->get_Attendance_Sheet_data();

	// 	$this->load->view('payrol_sheet_final',$data);

	// }







}