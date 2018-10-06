<?php
class Salaryslip extends CI_Controller

{

	function __construct()

	{
		// print_r(phpinfo());exit;
		

		parent::__construct();

		$this->load->model('Salaryslip_m');

		$this->load->library('session');

		$this->load->model('user_m');

		$this->load->helper('form');

		$this->load->model('user_m');

		if ($this->user_m->loggedin() == FALSE) {

			$this->session->set_userdata('page_url', current_url());

			redirect('user?id=1');

		}



		if ($this->session->userdata('usertype') == "Director" || $this->session->userdata('usertype') == "HR" || $this->session->userdata('usertype') == "Accountant" ) {

			return TRUE;

		}
		else{

			return false;
		}

	}

	 

public function doupload($targetdir,$fieldName, $required){

   		// $target_file=null;

    // $target_dir =   "".base_url() . "companyJobsImages/";

    $target_dir =   "".base_url() . $targetdir;

        

	$fn =$_FILES[$fieldName]["name"];

	$fn = preg_replace("/[^a-zA-Z0-9._]+/", "", $fn);

	$target_file = $target_dir . basename($fn);

	if(!$fn)

		$target_file=null;

	//print_r($target_file);

	// echo $fn;



	  //  exit;

	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

	// Check if image file is a actual image or fake image

	        $config['upload_path'] = $targetdir;

	        $config['allowed_types'] = '*';

	        $config['file_name'] = $fn;

	        $config['max_filename'] = '255';

	        $config['overwrite'] = TRUE;

	        $config['encrypt_name'] = FALSE;

	        $config['file_ext_tolower'] = TRUE;



	        $config['max_size'] = '140024'; //8 MB

	 

	        if (isset($_FILES[$fieldName]['name'])) {

	            if (0 < $_FILES[$fieldName]['error']) {

	            	if ($required == true) {

	                echo 'Error during file upload' . $_FILES['file']['error'];

	                // return null;

	            	}

	            } else {

	                if (file_exists( $targetdir. $_FILES[$fieldName]['name'])) {

	                    echo 'File already exists : '.$targetdir . $_FILES[$fieldName]['name'];

	                    return null;

	                } else {

	                    $this->load->library('upload', $config);

	                    if (!$this->upload->do_upload($fieldName)) {

	                        echo $this->upload->display_errors();

	                    } else {

	                    //     // $table = 'filename';



	                                         

	                        // 'image' => $_FILES['dp']['name']

	                      

	                        // );

	                        // $this->db->where('userid', $id);                        

	                    }

	                }

	            }



	            $targetdir = null;

	            $fieldName= null;

	            

	            return $target_file;

	        } else {

	            echo 'Please choose a file';

	            // print_r('Please choose a file');

	            // exit();

	        }

    }







	function index($id=NULL){
		
		list($year, $month, $day)= explode('-', date("Y-m-t", strtotime("-1 months")));
		redirect("/Salaryslip/salaryByMonth/$year-$month");

	}



	public function Payroll_Sheet_final(){

		$this->load->model('attendance_model','attendance');

		$data['attendance_sheet'] =$this->attendance->get_Attendance_Sheet_data();

		foreach ($data['attendance_sheet'] as $user) {

			//var_dump($user); die();
			//if ($user->job_title != "director")
			$data['deduction'][$user->userid] = $this->check_deduction($user->userid);

			//echo '<pre>'; print_r($user->hired_on);

		}

		$data['monetized_data']=$this->Salaryslip_m->payslip_monetizedForAll(date('Y-m-01',strtotime('-1 months')));

		// print_r($data['monetized']);exit;

		foreach ($data['monetized_data'] as $monetize) {

			$data['monetized'][$monetize->userid]=$monetize->monetized_holidays;

		}

		$date = date("Y-m-t", strtotime("-1 months"));

		list($year, $month, $day)= explode('-',$date);

		$data['salary'] = $this->Salaryslip_m->get_salary($year, $month);

		foreach ($data['attendance_sheet'] as $user) {

			$data['additional'][$user->userid] = $this->check_additional($user->userid,$month,$year);

		}

		$this->load->view('payrol_sheet_final',$data);

	}



	public function Additional()

	{

		$this->load->model('Hr_Dashboard_model');

		$data['user_list'] = $this->Hr_Dashboard_model->get_user();

		$this->load->view('aditions',$data);

	}



	public function Additional_Save()

	{

		$data = $this->input->post();

		$this->load->model('hr_m');

		 $this->hr_m->addadditions($data);

		redirect('/salaryslip/Additional');

	}



	public function check_additional($id,$month,$year)

	{

		$this->load->model('hr_m');

		return $this->hr_m->user_additional($id,$month,$year);

	}







	public function salaryByMonth($month)

	{

		$data['users'] = $this->user_m->newgetuser();

		//print_r($data['users']);

		// exit;

			list($year, $month)= explode('-',$month);

		foreach ($data['users'] as $user) {

			$data['maxDays']= cal_days_in_month(CAL_GREGORIAN, $month,$year);
			$data['deduction'][$user->userid] = $this->check_deduction_specific($user->userid, $month, $year);

		}

		// print_r($data['deduction']);exit;

			$data['salary'] = $this->Salaryslip_m->get_salary($year, $month);

			// print_r($data);

			// exit();

			// exit();

			$data['month']=$month;

			$data['year']=$year;

			$this->load->view('salaryslip',$data);

			// $this->load->view('salaryslip-monthly',$data);

	}



	// function add_salary($id){

	// 	$data['id'] = $id;

	// 	$this->load->view('add_salary',$data);

	// }





function saveLeave(){

	// print_r($this->input->post());exit;

			$status=0;$holidays_id=0;

			$holiday=$this->input->post('holidays');

			$unpaid=0;

			$verify=true;

			$monetize=$this->input->post('monetizeHoliday');

			$purpose=$this->input->post('purpose');

			$this->load->model('taskmanagement_m');

			

			if ($monetize=="on") {

				

				$data=array(

					'userid'=>$this->input->post('userid'),

					'monetized_holidays'=>$this->input->post('holidays'),

					'date'=>$this->input->post('day')

					);

				$this->taskmanagement_m->addMonetized($data);

						$status=1;

						$holiday=0;

						$purpose="monetized";

				$verify=false;	

			}

			elseif ($this->input->post('selectedStatus')=="approve") {

				$status=1;

				if($purpose!="late"){

						// print_r("hell");exit;

					$holiday = $this->input->post('holidays')-1;

				}

				$verify=false;	



			}

			elseif ($this->input->post('selectedStatus')=="disapprove") {



				if($purpose!="late")

				$holiday = $this->input->post('holidays')-1;

				$status=-1;	

				$verify=false;	

				

			}

			elseif ($this->input->post('selectedStatus')=="unannounced") {

				$holiday = $this->input->post('holidays')-1;

				$status=2;	

				$verify=false;	

				

			}



			$uploadedApplication=$this->doupload('uploads/LeaveApplications/','ApplicationUpload',false);



			if($this->input->post('selectedStatus')=="approve_unpaid"){

				if($purpose!="late")

					$holiday = $this->input->post('holidays')-1;

				

				$unpaid=1;

				$status=1;

				$verify=false;	



			}



			if( ($this->session->userdata('usertype')!="Director" || $this->session->userdata('usertype')!="HR") && $verify==false ){

				$this->load->view('unauthorized');

			}



			$date=$this->input->post('day');

			// print_r($holiday);exit;

			$holidays=array(

				'holidays'=> $holiday,

				'userid'=> $this->input->post('userid') 

				);

			$uploadedApplicationCertificate=$this->doupload('uploads/LeaveApplications/ApplicationCertificates/','ApplicationCertifUpload',false);

			if($this->taskmanagement_m->GetRemainingLeave($this->input->post('userid'))){

				if($this->taskmanagement_m->UpdateRemainingLeave($this->input->post('userid'),$holidays))

					{

						$holidays_id=$this->taskmanagement_m->GetRemainingLeave($this->input->post('userid'));

						$holidays_id=$holidays_id->id;

					}

			}

			else{

				$holidays_id=$this->taskmanagement_m->SaveRemainingLeave($holidays);

			}

			$data = array(	

				'app_reason' => preg_replace("/[^a-zA-Z0-9!.,]/", " " , $this->input->post('leaveReason')),

				'disap_reason' => preg_replace("/[^a-zA-Z0-9!.,]/", " " , $this->input->post('disap_Reason')),

				'status'=>$status,

				'date'=>$date,

				'purpose'=>str_replace("'","",$purpose),	

				'unpaid'=>$unpaid,	

				'application_upload'=>$uploadedApplication,	

				'application_certificate_upload'=>$uploadedApplicationCertificate,	

				'remaining_leave_id'=>$holidays_id,	

				'monetize_reason'=>$this->input->post('monetizeReason'),

				'absent_reason'=> preg_replace("/[^a-zA-Z0-9!.,]/", " " , $this->input->post('AbsentReason')),

				'late_reason'=>preg_replace("/[^a-zA-Z0-9!.,]/", " ",$this->input->post('LateReason')),

				'monetize_day' => $this->input->post('monetizeHoliday'),

				'remaining_leave_id'=>$holidays_id,	

				'userid'=> $this->input->post('userid'),

				);

			if ($monetize=="on") {

				redirect($_SERVER['HTTP_REFERER']);

			}

		// print_r($data);exit;

				$this->taskmanagement_m->addLeave($data);



		// 		Redirecting to where it came from



			redirect($_SERVER['HTTP_REFERER']);

			// redirect('Salaryslip/payslip/'.$this->input->post('userid'));

		// $data['leaveReason1']=$this->input->post('leaveReason1');



	}

function updateLeave(){

	// print_r($this->input->post());

		// exit;

			$status=0;$holidays_id=0;$unpaid=0;

			$holiday=$this->input->post('holidays');

			$purpose=$this->input->post('purpose');

			$this->load->model('taskmanagement_m');

			$leaveData=$this->taskmanagement_m->getLeaveDataOfId($this->input->post('leave_id'));

			$verify=0;

			if($this->input->post('monetizeHoliday') =="on"){					

				if($this->input->post('selectedStatus')=="approve"){

				$data=array(

					'userid'=>$this->input->post('userid'),

					'monetized_holidays'=>$this->input->post('holidays'),

					'date'=>$this->input->post('day')

					);

				$this->taskmanagement_m->addMonetized($data);

						$status=1;

						$holiday=0;

						$purpose="monetized";

					

				}

				elseif($this->input->post('selectedStatus')=="disapprove"){



				if($purpose!="late" && $leaveData->status==0)

					$holiday = $this->input->post('holidays')-1;

				$status=-1;

				}

				$verify=false;

			}

			elseif ($this->input->post('selectedStatus')=="approve") {

				$status=1;

					if($this->input->post('purpose')!="late" && $leaveData->status==0)

						$holiday = $this->input->post('holidays')-1;

				$verify=false;	

			}

			elseif ($this->input->post('selectedStatus')=="disapprove") {

					if($this->input->post('purpose')!="late" && $leaveData->status==0 )

						$holiday = $this->input->post('holidays')-1;

				$status=-1;

				$verify=false;

			}

			elseif ($this->input->post('selectedStatus')=="unannounced") {

				if($leaveData->status==0)

					$holiday = $this->input->post('holidays')-1;

				$status=2;

				$verify=false;	

			}

			if($this->input->post('selectedStatus')=="approve_unpaid"){

				$unpaid=1;

				$status=1;

				if($purpose!="late" && $leaveData->status==0)

					$holiday = $this->input->post('holidays')-1;

				$verify=false;

			}



			if( ($this->session->userdata('usertype')!="Director" || $this->session->userdata('usertype')!="HR") && $verify==false ){

				$this->load->view('unauthorized');

			}

			

			$uploadedApplicationCertificate=$this->doupload('uploads/LeaveApplications/ApplicationCertificates/','ApplicationCertifUpload',false);



			$date=$this->input->post('day');	

				$holidays=array(

				'holidays'=> $holiday,

				'userid'=> $this->input->post('userid') 

				);

			$uploadedApplication=$this->doupload('uploads/LeaveApplications/','ApplicationUpload',false);



			if($this->taskmanagement_m->GetRemainingLeave($this->input->post('userid'))){

				if($this->taskmanagement_m->UpdateRemainingLeave($this->input->post('userid'),$holidays))

					{

					

						$holidays_id=$this->taskmanagement_m->GetRemainingLeave($this->input->post('userid'));

						$holidays_id=$holidays_id->id;

					}

			}

			else{

				$holidays_id=$this->taskmanagement_m->SaveRemainingLeave($holidays);

			}

			// print_r($uploadedApplication);

		// exit;

			$Leavedata = array(

				'app_reason' => preg_replace("/[^a-zA-Z0-9!.,]/", " ", $this->input->post('leaveReason')),

				'disap_reason' => preg_replace("/[^a-zA-Z0-9!.,]/", " " , $this->input->post('disap_Reason')),

				// 'monetize_reason'=>$this->input->post('monetizeReason'),

				'monetize_day' => $this->input->post('monetizeHoliday'),

				'late_reason'=>preg_replace("/[^a-zA-Z0-9!.,]/", " " , $this->input->post('LateReason')),

				'application_upload'=>$uploadedApplication,	

				'application_certificate_upload'=>$uploadedApplicationCertificate,	

				'purpose'=>str_replace("'","",$purpose),

				'status'=>$status,

				'unpaid'=>$unpaid,

				'absent_reason'=>preg_replace("/[^a-zA-Z0-9!.,]/", " " , $this->input->post('AbsentReason')),

				'date'=>$date,

				'remaining_leave_id'=>$holidays_id,		

				'userid'=> $this->input->post('userid'),

				'modified_at'=> date('Y-m-d H:i:s')

				);

		

			$this->taskmanagement_m->updateLeave($Leavedata,$this->input->post('userid'),$date);

			redirect($_SERVER['HTTP_REFERER']);

		

	}

	function YearTodateExtended($userid,$salary,$deduction,$salarydate,
		$fine, $performance, $advance, $security, $tax){

		$data=array(
			'userid'=>$userid,
			'annual_salary'=>$salary,
			'annual_deduction'=>$deduction,
			'changed_at'=>$salarydate,

			'fine' => $fine,
			'performance' => $performance,
			'advance' => $advance,
			'security' => $security,
			'tax' => $tax,
		);

		$this->Salaryslip_m->YearTodate($data,$userid);

	}

	function YearTodate($userid,$salary,$deduction,$salarydate){

		$data=array(

			'userid'=>$userid,

			'annual_salary'=>$salary,

			'annual_deduction'=>$deduction,

			'changed_at'=>$salarydate
		);

		$this->Salaryslip_m->YearTodate($data,$userid);

	}

	function addSalary(){

		// print_r($this->input->post());exit;

		$data = array(

		'userid' => $this->input->post('userid'),

		'firstname' => $this->input->post('fname'),

		'lastname' => $this->input->post('lname'),

		'salarymonth' => $this->input->post('salaryMonth'),

		'actual_salary' => $this->input->post('actual-salary'),

		'deduction' => $this->input->post('deduction'),

		//'additional' => $this->input->post('additional'),

		//'leaves' => $this->input->post('leaves'),

		'payable' => $this->input->post('payable'),

		//shown on monthly and Yearly sections of payslip
		'fine' => $this->input->post('fine'),
		'performance' => $this->input->post('performance'),
		'advance' => $this->input->post('paid'),
		'security' => $this->input->post('security'),
		'tax' => $this->input->post('tax'),

		'paid' => 1



		);

		$this->Salaryslip_m->add_salary($data);

		$this->YearTodateExtended($data['userid'],$data['payable'],$data['deduction'],$data['salarymonth'], $data['fine'], $data['performance'],$data['advance'],$data['security'],$data['tax']);

		$date=explode('-', date('Y-m',strtotime("-1 months")));
		$month= $this->input->post('month') !==null? $this->input->post('month'): $date[1];
		$year= $this->input->post('year') !== null? $this->input->post('year'): $date[0];
		redirect("Salaryslip/salaryByMonth/$year-$month");

	}

	

	function payslip($id=null){

		$last= isset($_GET['last']) ? $_GET['last'] : '';

        if(!$id && isset($_GET['id']))
			$id=$_GET['id'];

		$data['last_payslip']=$last;

		$date=date('Y-m',strtotime("-1 months"));
		$date=explode('-', $date);

		$month=$date[1];
		$year=$date[0];
		
		//don't remove
		$month = isset($_POST['month']) ? $_POST['month'] : $month;
		$year = isset($_POST['year']) ? $_POST['year'] : $year;
		$lastMonth = date('Y-m-d', strtotime("$year-$month-01"));

		$data['month']=$month;
		$data['year']=$year;
		$data['lastMonth']= $lastMonth;

		/*
		<?php 
	        $prev_date = date("F-y", strtotime("-1 months"));
	        echo date('01-m-y', strtotime($prev_date));
        ?>
		*/
		$data['transportLogisticsEmp'] = $data['bonusEmp'] = $data['healthInsuranceEmp'] = $data['eobiEmp'] = $data['socialSecurityEmp']='-';  

		$data['transportLogisticsBri'] = $data['bonusBri']= $data['healthInsuranceBri'] = $data['eobiBri']  = $data['socialSecurityBri'] = '+';

		$data['transportLogisticsYcom'] = $data['bonusYcom']= $data['healthInsuranceYcom'] = $data['eobiYcom']  = $data['socialSecurityYcom'] = '+';

		$data['ytd']=$this->Salaryslip_m->getYTD($id);
		//var_dump($data['ytd']); die();
		if ($empBenefits = $this->Salaryslip_m->getBenefitsMonth($id, "$year-$month")) {
			//var_dump($empBenefits); die();

			foreach ($empBenefits as $value) {

				if($value->insurance == 'health insurance') {
					$data['healthInsuranceEmp'] = $value->total - $value->company;
					$data['healthInsuranceBri'] = $value->company;
				}

				if($value->insurance == 'bonus') {
					$data['bonusEmp'] = $value->total - $value->company;
					$data['bonusBri'] = $value->company;
				}

				if($value->insurance == 'eobi') {
					$data['eobiEmp'] = $value->total - $value->company;
					$data['eobiBri'] = $value->company;
				}

				if($value->insurance == 'social security') {
					$data['socialSecurityEmp'] = $value->total - $value->company;
					$data['socialSecurityBri'] = $value->company;
				}

				if($value->insurance == 'transport logistics') {
					$data['transportLogisticsEmp'] = $value->total - $value->company;
					$data['transportLogisticsBri'] = $value->company;
				}
			}
		}

		if($yearlyBenefits= $this->Salaryslip_m->getBenefitsYearly($id, "$year")) {
			//var_dump($yearlyBenefits); die();

			foreach ($yearlyBenefits as $value) {
				if($value->benefit_name == 'health insurance')
					$data['healthInsuranceYcom'] = $value->company;

				if($value->benefit_name == 'bonus')
					$data['bonusYcom'] = $value->company;

				if($value->benefit_name == 'eobi')
					$data['eobiYcom'] = $value->company;

				if($value->benefit_name == 'social security')
					$data['socialSecurityYcom'] = $value->company;

				if($value->benefit_name == 'transport logistics')
					$data['transportLogisticsYcom'] = $value->company;
			}
		}

 		$this->load->model('taskmanagement_m');
 		$this->load->model('attendance_model');

 		$data['attendance_leave']=$this->taskmanagement_m->getLeaveData($id);
 		$data['remainingholidays']=$this->attendance_model->userget_remaining_holiday($id);
 		$data['deduction'] = $this->check_deduction_specific($id, $month, $year);
 		$data['userdetails'] = $this->Salaryslip_m->newpayslip($id);
 		$data['userPerformance'] = $this->Salaryslip_m->getUserPerformance($id);		

		//null
		$data['newcomment'] = $this->Salaryslip_m->dbGetComment($id, $lastMonth);
		$data['comments'] = $this->Salaryslip_m->getComments($id, $lastMonth);

		//$data['salarypaid'] = $this->Salaryslip_m->getFromSalaryTable($id, $lastMonth);
		$data['salarypaid'] = $this->Salaryslip_m->getFromSalaryTable($id, "$year-$month");

		//var_dump($data['salarypaid']); die();
		//$lastMonth
 		$monetized=$this->Salaryslip_m->payslip_monetized($id, $lastMonth);

 		if($monetized)
	 		$data['monetized']=$monetized;
 		else
 			$data['monetized']=0;

 		//REMOVE: accumalatedData=null; 
 		//var_dump($data); die();

 		$data['template'] = 'payslip';
		$this->load->view('include/template',$data);
	}

	function payslip_monetized($id,$mon){



		$this->load->model('Attendance_model');

		$mon=@explode("-", $mon);

		// print_r($mon);

		// exit;

		$monetized=0;

		$moneti=$this->taskmanagement_m->getHoliday($id,$mon[1]);

		foreach ($moneti as $h ) {

			if($h->monetize_day){

				$monetized+=$h->monetize_day;

			}

		}

	return $monetized;

	}

	function payslip_getUserPerformanceSpecific() {
		$id = $this->input->post('userId');
		$month = $this->input->post('month');
		$year = $this->input->post('year');

		if($month<10)
			$month="0".$month;
		
		$data['year']=$year;
		$data['month']=$month;

		$data['date'][0]=$year;
		$data['date'][1]=$month;
		$data['date'][2]= cal_days_in_month(CAL_GREGORIAN, (int) $month, (int) $year);

		$this->load->model('taskmanagement_m');
        $data['userPerformance'] = $this->taskmanagement_m->getUserPerformanceSpecific($id, $month, $year);

        //var_dump($data); die();
		$this->load->view('payslip_performance', $data);
	}

	function payslip_getUserPerformance() 

	{	

        $id = $this->input->post('userId');

        $data['userPerformance'] = $this->Salaryslip_m->getUserPerformance($id);

        //var_dump($data); die();

		$this->load->view('payslip_performance', $data);

	

	}



	function print_payslip(){

		$ids = $this->input->post('checkedids'); 

		foreach ($ids as $key) {

			$data['userdetails'] = $this->Salaryslip_m->payslip($key);

			$data['comments'] = $this->Salaryslip_m->getComments($key);

			$data['deduction']  = $this->check_deduction($key);

			$data['template'] = 'payslip';

				echo $this->load->view('include/template',$data, TRUE);

			// echo "<br><br><br><br><br><br><br><br><br><br><br><br>";

		}		

	}



	function remark(){

		$comment_id = $this->input->post('comment_id');

		$userid = $this->input->post('userid');

		$this->Salaryslip_m->remark($comment_id,$userid);

	}

	function print_it(){

		$id = $this->input->post('id');

		$this->Salaryslip_m->print_it($id);

	}

	function fhkDayOffApplications($paddedDate, $applicationInfo, &$totalDeduction){

		//rare case
		if($applicationInfo==null) {
			//print_r($paddedDate. ") Absent but no application in db (1)". "<br>");
			$totalDeduction++;
			return;
		}

		if($applicationInfo->purpose != "absent" && $applicationInfo->purpose !="leave")
			return;

		if($applicationInfo->status==0) {
			//print_r($paddedDate. ") $applicationInfo->purpose applied". "<br>");
			return;
		}
		//approved and paid
		else if($applicationInfo->status == 1 && $applicationInfo->unpaid == 0) {
			//print_r($paddedDate. ") Paid Approved". "<br>");
			return;
		}

		//approved but not paid
		elseif ($applicationInfo->status == 1 || $applicationInfo->unpaid == 1) {
			//print_r($paddedDate. ") Unpaid Approved (1)". "<br>");
			$totalDeduction++;
			return;
		}

		//Dissallowed
		elseif ($applicationInfo->status == -1) {
			//print_r($paddedDate. ") Disallowed (1)". "<br>");
			$totalDeduction++;
			return;
		}

		//Anannounced
		elseif ($applicationInfo->status == 2) {
			//print_r($paddedDate. ") Anannounced (2)". "<br>");
			$totalDeduction+=2;
			return;
		}
	}

	function fhkLateCounter($attendanceInfo, $applicationInfo, &$lateCounter){

		$late = date_diff(date_create($attendanceInfo->time_in), date_create($attendanceInfo->check_in));
		$late = $late->format('%R%i') + ($late->format('%R%h') * 60);

		////print_r($attendanceInfo->date. ") Late by $late". "<br>");

		if($late < 0) {
			//print_r($attendanceInfo->date. ") Early arrival". "<br>");
			return;
		}

		if($late <= 15) {
			//print_r($attendanceInfo->date. ") On time". "<br>");
			return;
		}

		//Person is late
		//There is no record, rare case
		if($applicationInfo==null) {
			$this->fhkLateCount($attendanceInfo, $late, $lateCounter);
			//print_r(" (Late but no application in db)". "<br>");
			return;
		}

		//There is a record but person is not applying for late, rare case
		if($applicationInfo->purpose != "late") {
			//print_r($attendanceInfo->date. ") Other purpose from late". "<br>");
			return;
		}

		if($applicationInfo->status == 1) {
			//print_r($attendanceInfo->date. ") Approved Late". "<br>");
			return;	
		}

		$this->fhkLateCount($attendanceInfo, $late, $lateCounter);
		//print_r("<br>");
	}

	function fhkLateCount($attendanceInfo, $late, &$lateCounter){
		if($lateCounter==null)
			$lateCounter= array('fifteen' => 0, 'hour' => 0 , 'half' => 0, 'full' => 0);

		if ($late <= 60) {
			//print_r($attendanceInfo->date. ") Late by 15.");
			$lateCounter['fifteen']++;
		}
		elseif ($late <= 180) {
			//print_r($attendanceInfo->date. ") Late by hour.");
			$lateCounter['hour']++;
		}
		elseif ($late <= 300) {
			//print_r($attendanceInfo->date. ") Half day late fine.");
			$lateCounter['half']++;
		}
		elseif ($late > 300) {
			//print_r($attendanceInfo->date. ") Full day late fine.");
			$lateCounter['full']++;
		}
	}

	function fhkLateCountDeduction(&$lateCounter, &$totalDeduction, $maxDays){

		if($lateCounter==null) {
			//print_r("No deductions for comming late.");
			return;
		}

		$late15 = array(3, 6, 9, 12, 15, 18, 21, 24, 26, 30);
		for($i=0; $i<count($late15); $i++) {
			if($lateCounter["fifteen"]<$late15[$i]) {
				$totalDeduction += $i;
				break;
			}
		}

		$lateHr= array(2, 5, 8, 11, 14, 17, 20);
		for($i=0; $i<count($lateHr); $i++) {
			if($lateCounter["hour"]<$lateHr[$i]) {
				$totalDeduction += $i;
				break;
			}
		}

		$half = array(2, 4, 6, 8);
		for($i=0; $i<count($half); $i++) {
			if($lateCounter["half"]<$half[$i]) {
				$totalDeduction += $i;
				break;
			}
		}
		if($lateCounter["half"]>8)
			$lateCounter= $maxDays;
	}

	function check_deduction_specific($userid, $month, $year) {

		//print_r("For user: $userid" . "<br>");
		//load associated models
		$this->load->model('attendance_model');
		$this->load->model('taskmanagement_m');

		//this will be returned
		$totalDeduction=0;
		$lateCounter=null;

		//get user data
		$user = $this->user_m->newgetuserbyid($userid);
		if(!$user)
			return;

		//data from attendance CSV
		$attendanceData = $this->attendance_model->by_user($year, $month, $userid);

		//int for general usage, padded for dates
		$month= (int) $month;
		$paddedMonth= $month<10? "0".$month: $month;

		//get max days for loop
		$maxDays = cal_days_in_month(CAL_GREGORIAN, $month,$year);
		
		for ($i=1; $i <=$maxDays ; $i++) {

			//padded dates for date comparision
			$paddedDay= $i<10? "0".$i: "$i";
			$instantaniousDate= "$year-$paddedMonth-$paddedDay";

			//get the day for a date
			$dayName= date_create($instantaniousDate)->format('D'); 

			//get any attendance data for looping date, null if none
			$searchIndex= array_search($instantaniousDate, array_column($attendanceData, 'date'));
			$attendanceInfo= $searchIndex!==false? $attendanceData[$searchIndex]: null;

			//get any holiday data for looping date, null if none
			$holidayInfo= $this->attendance_model->getPublicHolidaysOn('-'.$paddedMonth.'-'.$paddedDay);

			//get any application data for looping date, null if none
			$applicationInfo=$this->taskmanagement_m->getLeaveDataOn($userid, $instantaniousDate);
			////print_r($leaves);

			//current date is before hired date
			if($user->hired_on > $instantaniousDate) {
				$totalDeduction++;
				continue;
			}

			//if the day is sunday
			if($dayName == "Sun") {
				//print_r($instantaniousDate. ") Sunday". "<br>");
				continue;
			}

			//if day is saturday and off for some projects
			if($dayName == "Sat" && $user->isSatOff == 1) {
				//print_r($instantaniousDate. ") Sat off". "<br>");
				continue;
			}

			//if day is on project's official holiday list
			$isHoliday= $holidayInfo != null? strpos($user->holidayIdentifier, $holidayInfo->description) !== false ? true: false: false;
			if($isHoliday) {
				//print_r($instantaniousDate. ") $holidayInfo->name". "<br>");
				continue;
			}

			//if attendance data matches looping day
			if($attendanceInfo!=null){
				//attendance record is there but record is not valid
				if ($attendanceInfo->check_in == "00:00:00"){					
					//check leave applications, effects deduction
					$this->fhkDayOffApplications($instantaniousDate, $applicationInfo, $totalDeduction);
				}
				else {
					//person is present but check the arrival time for late
					$this->fhkLateCounter($attendanceInfo, $applicationInfo, $lateCounter);
				}
			} else {
				//check leave applications, effects deduction
				$this->fhkDayOffApplications($instantaniousDate, $applicationInfo, $totalDeduction);
			}
		}

		//final late deductions
		$this->fhkLateCountDeduction($lateCounter, $totalDeduction, $maxDays);
		if ($totalDeduction >= ($maxDays - 6))
			$totalDeduction = $maxDays;

		//print_r("Total deductions: ". $totalDeduction. "<br>");
		return $totalDeduction;
	}

	/*
	function check_deduction_specific($userid, $month, $year) {
		//dont remove
		$mon=$month;

		//give padding to single numbers
		if($month<10)
			$month="0".$month;

		$d = date("Y-m-t", strtotime("$year-$mon"));
		$date=@explode("-", $d);
		$maxDays=$date[2];

		//var_dump($date); die();

		//var_dump($date);
		//get attendance records of user
		//FIX: fix addition on month in attendance_model
		$this->load->model('Attendance_model');
		$chart = $this->Attendance_model->by_user($year, $month+1, $userid);

		//var_dump($chart); die();

		//Get days of month and year
		$days = cal_days_in_month(CAL_GREGORIAN, $month,$year);  // Changed Year.

		//deduction counters
		$late15 = 0; $intime = 0; $latehr = 0; $half = 0; $absent = 0; $deduction = 0;

		//try to fetch that particular user mentioned in function arguments
		$users = $this->user_m->newgetuserbyid($userid);
		if($users==null)
			return; //throw new Exception("No such user!");

		//cycle through users attendance
		foreach($chart as $day) {

			$attendance_date = date_create($day->date);
			$attendance_day = $attendance_date->format('D');
			$attendance_day_num= $attendance_date->format('j');
		
			$late = date_diff(date_create($day->time_in), date_create($day->check_in));
			$late = $late->format('%R%i') + ($late->format('%R%h') * 60);
			
			//For project school if day is sat and sun and user is hired before this attendance record date
			//print_r($day); die();
			if ($day->isSatOff==1 && $attendance_day == "Sat" && $users[0]->hired_on < $day->date)
				$data['attendance'][$attendance_day_num] = "sat";
			elseif ($attendance_day == "Sun")
				$data['attendance'][$attendance_day_num] = "sunday";

			//
			//elseif ($day->check_in == "00:00:00") continue;

			//late check
			elseif ($late < 0)
				$data['attendance'][$attendance_day_num] = "intime";
			elseif ($late <= 15)
				$data['attendance'][$attendance_day_num] = "intime";
			elseif ($late <= 60) 
				$data['attendance'][$attendance_day_num] = "late15";
			elseif ($late <= 180)
				$data['attendance'][$attendance_day_num] = "latehr";
			elseif ($late <= 300)
				$data['attendance'][$attendance_day_num] = "half";
			elseif ($late > 300)
				$data['attendance'][$attendance_day_num] = "absent";
			else
				$data['attendance'][$attendance_day_num] = "absent";
		}

		$this->load->model('attendance_model');
        $this->load->model('taskmanagement_m');


        for ($i=1; $i <=$maxDays ; $i++) { 

        	$j=$i;
			if($j<10)
				$j='0'.$j;
			$dat= date($year.'-'.$mon.'-'.$j);

			//REMOVE: $leaves=null; $holiday=null;

			//var_dump($dat);
			$holiday=$this->attendance_model->getPublicHolidaysOn('-'.$mon.'-'.$j);
			//print_r($dat. "<br>");
			//$i = ltrim($i, '0'); // for removing 0;
			//var_dump($i);
			$leaves=$this->taskmanagement_m->getLeaveDataOn($userid, $dat);
			//

			//var_dump($leaves);

			//if person was absent

			//var_dump($data); die();
			if (!isset($data['attendance'][$i]) || $data['attendance'][$i]=="absent") {
				//print_r("DATE: $year-$mon-$j <br>");
				//var_dump($data['attendance']);
				
				if($users[0]->hired_on < $dat) {
					//$timestamp = $dat;
					//print_r($users[0]->hired_on . " $dat" . " <br>");
					$dayy = date('D', strtotime("$year-$month-$i"));
					//var_dump($dayy); die();
					//if(($year.'-'.$mon.'-'.$i) == "2018-07-05")
						//

					if($dayy=="Sun")
						continue;

					elseif($holiday) {
			
						if($holiday->status==1 && $holiday->description=="Public Holiday") 
							continue;
						elseif($holiday->status==1 && $holiday->description=="School Holiday" && $users[0]->hired_for_project==2)
							continue;

						elseif($leaves) {

							//Leave status 0=> applied, 1=> approved, -1=> disallowed, 2 announced
							if($leaves->status==1  && $leaves->purpose!="late" && $leaves->unpaid==0)
								continue;

							elseif($leaves->status==1  && $leaves->purpose=="late")
								continue;

							elseif($leaves->status==1  && $leaves->purpose!="late" && $leaves->unpaid==1)
								$deduction++;
							elseif($leaves->status==2  && $leaves->purpose!="late")
								$deduction+=2;

							//absent for whatever new reason in the database
							elseif ($leaves->purpose!="late") 
								$deduction++;

							elseif($leaves->status==1  && $leaves->purpose=="late")
								continue;

							//mark deduction arguments
							elseif ($data['attendance'][$i] == "intime" )
								continue;

							elseif ($data['attendance'][$i] == "late15")
								$late15++;

							elseif ($data['attendance'][$i] == "latehr")
								$latehr++;

							elseif ($data['attendance'][$i] == " half")
								$half++;
						}

						elseif(isset($data['attendance'][$i])) {				

							if ($data['attendance'][$i] == "intime")
								continue;

							elseif ($data['attendance'][$i] == "late15")
								$late15++;

							elseif ($data['attendance'][$i] == "latehr")
								$latehr++;

							elseif ($data['attendance'][$i] == "half")
								$half++;
						} else
							$deduction++;
					}

					elseif($leaves) {

						if($leaves->status==1  && $leaves->purpose!="late" && $leaves->unpaid==0)
							continue;
						elseif($leaves->status==1  && $leaves->purpose=="late")
							continue;
						elseif($leaves->status==1  && $leaves->purpose!="late" && $leaves->unpaid==1)
							$deduction++;
						elseif($leaves->status==2  && $leaves->purpose!="late")
							$deduction+=2;
						else
							$deduction++;

					} else{
						$deduction++;
					}

				} else {
					//dont do anything for holidays
					//print_r("$dat <br>");

					//$deduction++;
				}

			//if person was not absent and there is a list of holidays in the db
			} elseif($holiday) {

				if($holiday->status==1 && $holiday->description=="Public Holiday") {
					continue;

				} elseif($holiday->status==1 && $holiday->description=="School Holiday" && $users[0]->hired_for_project==2) {
					continue;

				} elseif($leaves) {
					if($leaves->status==1  && $leaves->purpose!="late" && $leaves->unpaid==0)
						continue;
					elseif($leaves->status==1  && $leaves->purpose=="late")
						continue;
					elseif($leaves->status==1  && $leaves->purpose!="late" && $leaves->unpaid==1)
						$deduction++;
					elseif($leaves->status==2  && $leaves->purpose!="late")
						$deduction+=2;
					elseif ($leaves->purpose!="late")
						$deduction++;
					elseif($leaves->status==1  && $leaves->purpose=="late")
						continue;
					elseif ($data['attendance'][$i] == "intime" )
						continue;
					elseif ($data['attendance'][$i] == "late15")
						$late15++;
					elseif ($data['attendance'][$i] == "latehr")
						$latehr++;
					elseif ($data['attendance'][$i] == " half")
						$half++;

				} elseif(isset($data['attendance'][$i])) {
					if ($data['attendance'][$i] == "intime" )
						continue;
					elseif ($data['attendance'][$i] == "late15")
						$late15++;
					elseif ($data['attendance'][$i] == "latehr")
						$latehr++;
					elseif ($data['attendance'][$i] == " half")
						$half++;
				} else
					$deduction++;

			//if person was absent, and no reserved holidays then check for leaves
			} elseif($leaves) {

				if($leaves->status==1  && $leaves->purpose=="late")
					continue;
				elseif ($data['attendance'][$i] == "intime" )
					continue;
				elseif ($data['attendance'][$i] == "late15")
					$late15++;
				elseif ($data['attendance'][$i] == "latehr")
					$latehr++;
				elseif ($data['attendance'][$i] == " half")
					$half++;

			} elseif(isset($data['attendance'][$i])) {

				if ($data['attendance'][$i] == "intime" )
					continue;
				elseif ($data['attendance'][$i] == "late15")
					$late15++;
				elseif ($data['attendance'][$i] == "latehr")
					$latehr++;
				elseif ($data['attendance'][$i] == "half")
					$half++;
			} else
				$deduction++;
		}

		//late by 15 criteria
		if ($late15 >= 3 && $late15 <= 5)
			$deduction++;
		elseif ($late15 >= 6 && $late15 <= 8)
			$deduction += 2;
		elseif ($late15 >= 9 && $late15 <= 11)
			$deduction += 3;
		elseif ($late15 >= 12 && $late15 <= 14)
			$deduction += 4;
		elseif ($late15 >= 15 && $late15 <= 17)
			$deduction += 5;
		elseif ($late15 >= 18 && $late15 <= 20)
			$deduction += 6;
		elseif ($late15 >= 21 && $late15 <= 23)
			$deduction += 7;
		elseif ($late15 >= 24 && $late15 <= 26)
			$deduction += 8;
		elseif ($late15 >= 27 && $late15 <= 29)
			$deduction += 9;

		//late by hour criteria
		if ($latehr >= 2 && $latehr <= 4)
			$deduction++;
		elseif ($latehr >= 5 && $latehr <= 7)
			$deduction += 2;
		elseif ($latehr >= 8 && $latehr <= 10)
			$deduction += 3;
		elseif ($latehr >= 11 && $latehr <= 13)
			$deduction += 4;
		elseif ($latehr >= 14 && $latehr <= 16)
			$deduction += 5;
		elseif ($latehr >= 17 && $latehr <= 19)
			$deduction += 6;

		//late by half hour criteria
		if ($half >= 2 && $half <=3)
			$deduction++;
		elseif ($half >= 4 && $half <=5)
			$deduction += 2;
		elseif ($half >= 6 && $half <=7)
			$deduction += 3;
		elseif ($half > 8)
			$deduction=$maxDays;

		//unpaid month if deductions are too much
		if ($deduction >= ($maxDays - 6))
			$deduction = $maxDays;

		return $deduction;
	}
	*/

	function check_deduction($userid) {
		
		//get requested month and year
		$month = isset($_GET['month']) ? $_GET['month'] : date('m');
		$year = isset($_GET['year']) ? $_GET['year'] : date('Y');

		return $this->check_deduction_specific($userid, $month, $year);
	}

	/*
	function check_deduction_PerMonth($userid,$month,$year) {

		$month = $month;

		$year = $year;

		// if($month==01||$month==1)

		// 	{$month=12;$year=$year-1;}

		// else

		// 	$month -= 1; 

		// if($month<10)

		// 	$month="0".$month;

		

		$this->load->model('attendance_model');

		// print_r($month);

		$chart = $this->attendance_model->Attendanceby_month($year,$month+1, $userid);

		// print_r($chart);exit;

		$days = cal_days_in_month(CAL_GREGORIAN, $month,$year);  // Changed Year.

		$late15 = 0; $intime = 0; $latehr = 0; $half = 0; $absent = 0; $deduction = 0;

				$users = $this->user_m->newgetuserbyid($userid);

			// echo"<pre>";print_r($chart);



				$data['attendance']=null;

		foreach($chart as $day){

				

				$sunday = date_create($day->date);

				$sunday = $sunday->format('D');

				$late = date_diff(date_create($day->time_in), date_create($day->check_in));

				$late = $late->format('%R%i') + ($late->format('%R%h') * 60);

				$day1 = date_create($day->date);

				if ($day->project_title == 	"The Bridges School" && $sunday == "Sat" && $users[0]->hired_on < $day->date) {

					$data['attendance'][$day1->format('j')] = "sat";

				}

				elseif ($sunday == "Sun") {	

					$data['attendance'][$day1->format('j')] = "sunday";

				} elseif ($day->check_in == "00:00:00") { //added

					$data['attendance'][$day1->format('j')] = "absent";

					// continue;

				} elseif ($late < 0) {

					$data['attendance'][$day1->format('j')] = "intime";

				} elseif ($late <= 15) {

					$data['attendance'][$day1->format('j')] = "intime";

				} elseif ($late >= 15 && $late <= 59) {

					$data['attendance'][$day1->format('j')] = "late15";

				} elseif ($late >= 60 && $late <= 179) {

					$data['attendance'][$day1->format('j')] = "latehr";

				} elseif ($late >= 180 && $late <= 299 ) {

					$data['attendance'][$day1->format('j')] = "half";

				} elseif ($late >= 400) {

					$data['attendance'][$day1->format('j')] = "absent";

				} else {

					$data['attendance'][$day1->format('j')] = "absent";

				}

			}

			//echo $userid."<pre>";//print_r($data['attendance']);



			 $d = date($year."-".$month."-t",strtotime('-1 months'));

             // print_r($d);exit;

             $date=@explode("-", $d);

             $maxDays=$date[2];

             // $at_month=$month-1;

		  	 $this->load->model('attendance_model');

    	     $this->load->model('taskmanagement_m');

    	

             $date=@explode("-", $d);

             $maxDays=$date[2];

             $mon=$month;

             // print_r($mon);



             for ($i=1; $i <=$maxDays ; $i++) { 

				if($i<10)

					$i='0'.$i;

				$dat= date($year.'-'.$mon.'-'.$i);				

				$holiday=null;

				$holiday=$this->attendance_model->getPublicHolidaysOn('-'.$mon.'-'.$i);

				$i = ltrim($i, '0'); // for removing 0;

						$leaves=null;

				$leaves=$this->taskmanagement_m->getLeaveDataOn($userid,date($year.'-'.$mon.'-'.$i));

				if (!isset($data['attendance'][$i]) || $data['attendance'][$i]=="absent") 

				{

						if($i<10)

							$i='0'.$i;

					if(strtotime($users[0]->hired_on) < strtotime(date($year.'-'.$mon.'-'.$i))){

						$timestamp = strtotime(date($year.'-'.$mon.'-'.$i));

						// print_r($mon);exit;   

						

		

						$dayy = date('D', $timestamp);

						// print_r($i);

						// if($leaves)

						// echo'<pre>';print_r($leaves);

						if($dayy=="Sun")

						{

							continue;

						}

						elseif($holiday){

							if($holiday->status==1 && $holiday->description=="Public Holiday")

							{

								

								continue;

							}

							elseif($holiday->status==1 && $holiday->description=="School Holiday" && $users[0]->hired_for_project==2)

							{

								

								continue;

							}

							elseif($leaves)

							{

								if($leaves->status==1  && $leaves->purpose!="late" && $leaves->unpaid==0){

									continue;

								}

								elseif($leaves->status==1  && $leaves->purpose=="late"){

									continue;

								}

								elseif($leaves->status==1  && $leaves->purpose!="late" && $leaves->unpaid==1){

									$deduction++;

								}

								elseif($leaves->status==2  && $leaves->purpose!="late"){

									// print_r(';dsafas');

									$deduction++;

									$deduction++;

								}

								elseif ($leaves->purpose!="late") {

									$deduction++;

								}

									

								elseif($leaves->status==1  && $leaves->purpose=="late"){

									continue;

								}

								elseif(!isset($data['attendance'][$i])){ //added

									$deduction++;

									// print_r($deduction."-".$i."b");

									// $deduction++;

								}

								elseif ($data['attendance'][$i] == "intime" ) {

									continue;

								} 

								elseif ($data['attendance'][$i] == "late15") {

									$late15++;

								}

								elseif ($data['attendance'][$i] == "latehr") {

									$latehr++;

								} 

								elseif ($data['attendance'][$i] == " half") {

									$half++;

								} //added

								else

									$deduction++;

							}



							// added

							elseif(!isset($data['attendance'][$i])){

								$deduction++;

								// print_r($deduction."-".$i."a");

								// $deduction++;

							}				

							elseif ($data['attendance'][$i] == "intime" ) {

								continue;

							} 

							elseif ($data['attendance'][$i] == "late15") {

								$late15++;

							}

							elseif ($data['attendance'][$i] == "latehr") {

								$latehr++;

							} 

							elseif ($data['attendance'][$i] == " half") {

								$half++;

							}

							else

								$deduction++; // added



						}

						elseif($leaves)

						{



							// print_r($leaves);

							if($leaves->status==1  && $leaves->purpose!="late" && $leaves->unpaid==0){

								continue;

							}

							elseif($leaves->status==1  && $leaves->purpose=="late"){

								continue;

							}

							elseif($leaves->status==1  && $leaves->purpose!="late" && $leaves->unpaid==1){

								$deduction++;

							}

							elseif($leaves->status==2  && $leaves->purpose!="late"){

								$deduction++;

								$deduction++;

							}

							else

								$deduction++;



						}

						else

								$deduction++;



					}

					else

						$deduction++;  // Before Joining



				}

				elseif($holiday){

					// print_r("present".$i);

						if($holiday->status==1 && $holiday->description=="Public Holiday")

							{

								

								continue;

							}

							elseif($holiday->status==1 && $holiday->description=="School Holiday" && $users[0]->hired_for_project==2)

							{

								// print_r("gfsdf");exit;

								continue;

							}

							elseif($leaves)

							{

								if($leaves->status==1  && $leaves->purpose!="late" && $leaves->unpaid==0){

									continue;

								}

								elseif($leaves->status==1  && $leaves->purpose=="late"){

									continue;

								}

								elseif($leaves->status==1  && $leaves->purpose!="late" && $leaves->unpaid==1){

									$deduction++;

								}

								elseif($leaves->status==2  && $leaves->purpose!="late"){

									// print_r(';dsafas');

									$deduction++;

									$deduction++;

								}

								elseif ($leaves->purpose!="late") {

								// print_r($leaves);

									

									$deduction++;

								}

									

								elseif($leaves->status==1  && $leaves->purpose=="late"){

									continue;

								}

								elseif ($data['attendance'][$i] == "intime" ) {

									continue;

								} 

								elseif ($data['attendance'][$i] == "late15") {

									$late15++;

								}

								elseif ($data['attendance'][$i] == "latehr") {

									$latehr++;

								} 

								elseif ($data['attendance'][$i] == " half") {

									$half++;

								}

							}				

							elseif ($data['attendance'][$i] == "intime" ) {

								continue;

							} 

							elseif ($data['attendance'][$i] == "late15") {

								$late15++;

							}

							elseif ($data['attendance'][$i] == "latehr") {

								$latehr++;

							} 

							elseif ($data['attendance'][$i] == " half") {

								$half++;

							}



				}

				elseif($leaves)

				{

					if($leaves->status==1  && $leaves->purpose=="late"){

						continue;

					}

					elseif(!isset($data['attendance'][$i])){ //added

						$deduction++;

						// print_r($deduction."-".$i."b");

						// $deduction++;

					}

					elseif ($data['attendance'][$i] == "intime" ) {

						continue;

					} 

					elseif ($data['attendance'][$i] == "late15") {

						$late15++;

					}

					elseif ($data['attendance'][$i] == "latehr") {

						$latehr++;

					} 

					elseif ($data['attendance'][$i] == " half") {

						$half++;

					}else

						$deduction++; //added

				}

							// print_r($i);

				elseif(!isset($data['attendance'][$i])){ //added 

					$deduction++;

					// print_r($deduction."-".$i."c");

					// $deduction++;

				}				

				elseif ($data['attendance'][$i] == "intime" ) {

					continue;

				} 

				elseif ($data['attendance'][$i] == "late15") {

					$late15++;

				}

				elseif ($data['attendance'][$i] == "latehr") {

					$latehr++;

				} 

				elseif ($data['attendance'][$i] == " half") {

					$half++;

				}

				// else 

					// $deduction++;

				// print_r($leaves);



			}



			// print_r($data['attendance']);

				if ($late15 >= 3 && $late15 <= 5) {

					$deduction++;

				}

				elseif ($late15 >= 6 && $late15 <= 8) {

					$deduction++;

					$deduction++;



				} 

				elseif ($late15 >= 9 && $late15 <= 11) {

					$deduction++;

					$deduction++;

					$deduction++;

				}

				elseif ($late15 >= 12 && $late15 <= 14) {

					$deduction++;

					$deduction++;

					$deduction++;

					$deduction++;

				}

				elseif ($late15 >= 15 && $late15 <= 17) {

					$deduction++;

					$deduction++;

					$deduction++;

					$deduction++;

					$deduction++;

				}

				elseif ($late15 >= 18 && $late15 <= 20) {

					$deduction++;

					$deduction++;

					$deduction++;

					$deduction++;

					$deduction++;

					$deduction++;

				}

				elseif ($late15 >= 21 && $late15 <= 23) {

					$deduction++;

					$deduction++;

					$deduction++;

					$deduction++;

					$deduction++;

					$deduction++;

					$deduction++;

				}

				elseif ($late15 >= 24 && $late15 <= 26) {

					$deduction++;

					$deduction++;

					$deduction++;

					$deduction++;

					$deduction++;

					$deduction++;

					$deduction++;

					$deduction++;

				}

				elseif ($late15 >= 27 && $late15 <= 29) {

					$deduction++;

					$deduction++;

					$deduction++;

					$deduction++;

					$deduction++;

					$deduction++;

					$deduction++;

					$deduction++;

					$deduction++;

				}



				if ($latehr >= 2 && $latehr <= 4) {

					$deduction++;

				}

				elseif ($latehr >= 5 && $latehr <= 7) {

					$deduction++;

					$deduction++;

				}

				elseif ($latehr >= 8 && $latehr <= 10) {

					$deduction++;

					$deduction++;

					$deduction++;

				}

				elseif ($latehr >= 11 && $latehr <= 13) {

					$deduction++;

					$deduction++;

					$deduction++;

					$deduction++;

				}

				elseif ($latehr >= 14 && $latehr <= 16) {

					$deduction++;

					$deduction++;

					$deduction++;

					$deduction++;

					$deduction++;

				}

				elseif ($latehr >= 17 && $latehr <= 19) {

					$deduction++;

					$deduction++;

					$deduction++;

					$deduction++;

					$deduction++;

					$deduction++;

				}

				if ($half >= 2 && $half <=3) {

					$deduction++;

				}

				elseif ($half >= 4 && $half <=5) {

					$deduction++;

					$deduction++;

				}

				elseif ($half >= 4 && $half <=5) {

					$deduction++;

					$deduction++;

					$deduction++;

				}

				elseif ($half > 8) {

					$deduction=$maxDays;

				}



				if ($deduction >= ($maxDays - 6)) {

					// print_r($maxDays);exit;

					$deduction = $maxDays;

				}

				elseif($this->taskmanagement_m->getMonetizedOn($userid,$month))

				{

					$monetized=$this->taskmanagement_m->getMonetizedOn($userid,$month);		

					$deduction-=$monetized->monetized_holidays;

				}

				 // echo '<pre>';print_r($deduction);exit;

				return $deduction;

		// return 0;
	}
	*/





// 	function check_deduction($userid) {

		

// 		$month = isset($_GET['month']) ? $_GET['month'] : date('m');

// 		$year = isset($_GET['year']) ? $_GET['year'] : date('Y');

// 		$month -= 1; 

// 		if($month<10)

// 			$month="0".$month;

// 		// print_r($month);

// 		$this->load->model('attendance_model');

// 		$chart = $this->attendance_model->by_user($year,$month+1, $userid);

// 		$days = cal_days_in_month(CAL_GREGORIAN, $month, $year);  // Changed Year.

// 		$late15 = 0; $intime = 0; $latehr = 0; $half = 0; $absent = 0; $deduction = 0;

// 				$users = $this->user_m->newgetuserbyid($userid);



// 		foreach($chart as $day){

				

// 				$sunday = date_create($day->date);

// 				$sunday = $sunday->format('D');

				

// 				$late = date_diff(date_create($day->time_in), date_create($day->check_in));

// 				print_r($day);

// 				$late = $late->format('%R%i') + ($late->format('%R%h') * 60);

// 				// echo"<pre>";print_r($day);

// 				$day1 = date_create($day->date);

// 				// echo"<pre>";print_r($day1);

// 				if ($day->project_title == 	"The Bridges School" && $sunday == "Sat" && $users[0]->hired_on < $day->date) {

// //print_r($day->date);				

// 					$data['attendance'][$day1->format('j')] = "sat";

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

// 			 $d = date("Y-m-t", strtotime("-1 months"));

// 			// print_r($d);exit;

             

//              $date=@explode("-", $d);

//              $maxDays=$date[2];

//              // $at_month=$month-1;

// 		$this->load->model('attendance_model');

//         $this->load->model('taskmanagement_m');

    	

//              $date=@explode("-", $d);

//              $maxDays=$date[2];

//              $mon=$month;

//              // if($mon<10)

//              	// $mon='0'.$mon;

             

             

// // print_r($mon);



//              // print_r($mon);exit;

//              for ($i=1; $i <=$maxDays ; $i++) { 

// 				$dat= date('Y-'.$mon.'-'.$i);

// 				// echo '<pre>';print_r($users);exit;

				

// 				if (!isset($data['attendance'][$i])) 

// 				{

// 					if($i==1)

// 						//$deduction--;



// 					// print_r(date('Y-'.$mon.'-',$i));

// 					// print_r($i);

// 					if($i<10)

// 						$i='0'.$i;

// 					if(strtotime($users[0]->hired_on) < strtotime(date('Y-'.$mon.'-'.$i))){

// 			        // print_r($i);

// 			        $absent=$this->taskmanagement_m->getLeaveDataOn($userid,date('Y-'.$mon.'-'.$i));

// 					$holiday=$this->attendance_model->getPublicHolidaysOn(date('Y-'.$mon.'-'.$i));	

// 					    	// echo '<pre>';print_r($holiday);

// 				$timestamp = strtotime(date('Y-'.$mon.'-'.$i));   /// Previous Month should be here

// 				$dayy = date('D', $timestamp);



// 							if($absent){

// 					    		// print_r($absent);

// 					    	if($absent->status=="1"){

// 					    		// print_r($i);

// 					    		continue;

// 					    	}

// 					    	else if($dayy=="Sun" ){

// 								continue;

// 							}

// 								else

// 								$deduction++;



// 					    }

// 					    else if( $holiday){

// 					    	if($holiday->status=="1")

// 					    		{

// 					    		continue;}

// 					    	else if($dayy=="Sun" ){

// 								continue;

// 							}

// 								else

// 								$deduction++;

// 					    }

// 					    else if($dayy=="Sun" ){

// 								continue;

// 							}

// 								else

// 								$deduction++;

// 					// if($holiday)

// 					// {

// 					// 	if($holiday->status)

// 					// 		continue;

// 					// 	else

// 					// 		$deduction++;



// 					// }

// 					// else if($absent){

// 					// 	if(($absent->holidays > 0) && $absent->status) 

// 					// 		continue;

// 					// }



// 								// print_r(date('Y-'.$mon.'-'.$i));echo '<br>';//exit;

// 				//print_r($users[0]->hired_for_project);exit;

// 								// print_r($i);

							

// 							//else if ($dayy=="Sat" && $users[0]->hired_for_project==2 && $users[0]->hired_on < date('Y-08-'.$i) ) {

// 							//	continue;

// 							//}

// 						}

// 						else if($i==14 && strtotime($users[0]->hired_on)  < strtotime(date('Y-'.$month.'-'.$i)))

// 							continue;

// 							else{

// 								$deduction++;

// 						// print_r($i);

// 							}



// 					// }

// 					// else

// 					// 	$deduction++;

// 						// print_r('he');exit;



// 				}

// 				elseif ($data['attendance'][$i] == "intime" ) {

// 					continue;

// 				} 

// 				elseif ($data['attendance'][$i] == "late15") {

// 					$late15++;

// 				}

// 				elseif ($data['attendance'][$i] == "latehr") {

// 					$latehr++;

// 				} 

// 				elseif ($data['attendance'][$i] == " half") {

// 					$half++;

// 				}



// 			// print_r($deduction);exit;



// 			}

// 				if ($late15 >= 5 && $late15 <= 9) {

// 					$deduction++;

// 				} 

// 				elseif ($late15 >= 10 && $late15 <= 15) {

// 					$deduction++;

// 					$deduction++;

// 				}

// 				elseif ($late15 >= 16) {

// 					$deduction++;

// 					$deduction++;

// 					$deduction++;

// 				} 

// 				elseif ($latehr >= 3 && $latehr <= 5) {

// 					$deduction++;

// 				}

// 				elseif ($latehr >= 5 && $latehr <= 10) {

// 					$deduction++;

// 					$deduction++;

// 				}

// 				elseif ($half >= 2 && $half <=3) {

// 					$deduction++;

// 				}

// 				elseif ($half >= 4) {

// 					$deduction++;

// 					$deduction++;

// 				}



// 				if ($deduction >= ($maxDays - 6)) {

// 					$deduction = $maxDays;

// 				}

// 				 // echo '<pre>';print_r($data['attendance']);print_r($deduction);exit;

// 							 	return $deduction;

// 		// return 0;



// 	}



	public function add_comment()

	{

		$data['users'] = $this->Salaryslip_m->get_data();

		$this->load->view('comment',$data);

	}



	public function comment()

	{

	$month = date("Y-m-d H:i:s", strtotime("-1 months"));

	$remark = array(

		'userid' => '7',

		'msg' => $this->input->post('remark'),

		'created' => $month,

		'type' => '0',

		'remark' => '1',

		'remark_to' => $this->input->post('name')

		);

	if($this->Salaryslip_m->add_comment($remark)){

		echo "Comments added";

		}

	}



	public function attendancePerUser($id=NULL){

		$data['userdetails'] = $this->Salaryslip_m->newpayslip($id);

		$data['comments'] = $this->Salaryslip_m->getComments($id);

		$data['deduction'] = $this->check_deduction($id);

 		$data['template'] = 'attendance-per-user';

 		$this->load->model('taskmanagement_m');

 		$data['attendance_leave']=NULL;

 		$this->load->model('attendance_model');

 		$month=date('m');

		$at_month=$month-1;

		if($month<10)

			$at_month='0'.$at_month;



    	$data['public_holidays']=$this->attendance_model->getPublicHolidays(date('Y-'.$at_month.'-'));

 		if($this->taskmanagement_m->getLeaveData($data['userdetails']->userid))

	 		$data['attendance_leave']=$this->taskmanagement_m->getLeaveDataOn($data['userdetails']->userid);

	 	// print_r($data['attendance_leave']);exit;

		$this->load->view('include/template',$data);

	}



	public function saveComment()

	{

		// $insertData['user_id'] = '4';

		// $insertData['salary_month'] = '2017-08-01';



		// if ($this->Salaryslip_m->dbSaveComment($insertData)) {

		// 	echo "yesss";

		// }else

		// 	echo "string";



		if ($this->input->post('content')) {

			$insertData = array('user_id' => $this->input->post('user_id'), 'salary_month' => $this->input->post('month'), 'comment' =>  $this->input->post('content'));

			if($this->Salaryslip_m->dbSaveComment($insertData)){

				echo 'data inserted..';

			}else

				echo "data updated..";

		}

		print_r($_POST);

		// echo date('Y-m-01',strtotime('-1 months'));

	}



}