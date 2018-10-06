<?php

class Attendance_model extends CI_Model {



	function __construct()

	{

		parent::__construct();

	}

public function updateattendance($userid,$time,$date)

	{$this->db->where('user_id',$userid);

		$this->db->where('date' ,$date );

		$user = $this->db->get('bm_attendance')->row();



		if (count($user)) {

			

			echo "user found";

			}

		

		else{

			echo "not found";

			}

	}

	public function get_log($date)

	{

		//$date = $this->db->escape($date);

				

		// $sql = "SELECT `bm_attendance`.*, `bm_user_details`.`firstname`, `bm_user_details`.`lastname`, `bm_user_details`.`time_in`, `bm_user_details`.`time_out`, `bm_projects`.`project_title`, `bm_attendance_supervision`.`relexation`, `bm_attendance_supervision`.`reason` 

		// FROM `bm_attendance` 

		// LEFT JOIN `bm_user_details` ON `bm_attendance`.`user_id` = `bm_user_details`.`userid` 

		// LEFT JOIN `bm_projects` ON `bm_projects`.`id` = `bm_user_details`.`hired_for_project` 

		// LEFT JOIN `bm_attendance_supervision` ON `bm_attendance_supervision`.`aid` = `bm_attendance`.`id` 

		// WHERE `bm_attendance`.`date` = $date 

		// ORDER BY `bm_user_details`.`firstname` ASC";



		// $this->db->select('bm_attendance.*, bm_user_details.firstname, bm_user_details.lastname, bm_user_details.time_in, bm_user_details.time_out, bm_projects.project_title, bm_attendance_supervision.relexation, bm_attendance_supervision.reason');

		// $this->db->join('bm_user_details', 'bm_user_details.userid = bm_attendance.user_id', 'inner');

		// $this->db->join('bm_projects', 'bm_projects.id = bm_user_details.hired_for_project', 'left');

		// $this->db->join('bm_attendance_supervision',  'bm_attendance.id = bm_attendance_supervision.aid' , 'left');

		// $this->db->join('ba_users', 'ba_users.id = bm_attendance.user_id', 'inner');

		// $this->db->where("date", trim($date, "/'"));

		// $this->db->where('bm_user_details.status', 1);

		// //$this->db->where('bm_attendance.check_in !=', "00:00:00");

		// $this->db->order_by('bm_attendance.check_in', "ASC");

		// $return = $this->db->get('bm_attendance')->result();

		//echo "<pre>";var_dump($return); exit;



				$this->db->select('bm_attendance.*, newba_users.fname as firstname,bm_projects.project_title, newba_users.lname as lastname, newbm_user_details.time_in, newbm_user_details.time_out,  bm_attendance_supervision.relexation, bm_attendance_supervision.reason');

		$this->db->join('newbm_user_details', 'newbm_user_details.userid = bm_attendance.user_id', 'inner');

		$this->db->join('newba_users', 'newba_users.id = bm_attendance.user_id', 'inner');

		$this->db->join('bm_projects', 'bm_projects.id = newbm_user_details.hired_for_project', 'left');

		$this->db->join('bm_attendance_supervision',  'bm_attendance.id = bm_attendance_supervision.aid' , 'left');

		// $this->db->join('newba_users', 'newba_users.id = bm_attendance.user_id', 'inner');

		$this->db->where("date", trim($date, "/'"));

		$this->db->where('newbm_user_details.status', 1);

		//$this->db->where('bm_attendance.check_in !=', "00:00:00");

		$this->db->order_by('bm_attendance.check_in', "ASC");

		$return = $this->db->get('bm_attendance')->result();

		// echo "<pre>";var_dump($return); exit;

		return $return;

	}

	public function saveHolidays($data){

		return $this->db->INSERT('public_holidays',$data);

	}



	public function getAllHolidays(){

		 return $this->db->query('select* from  public_holidays ORDER BY date ASC')->result();

	}

	public function getPublicHolidays($date){

		// print_r($date);

	    $this->db->like('date' ,$date);

	    

		return $this->db->get('public_holidays')->result();

	}	

	public function getPublicHolidaysOn($date){

		// print_r($date);

	    $this->db->like('date', $date, 'before');

		return $this->db->get('public_holidays')->row();

	}

	// public function getPublicHolidaysFor($user_id,$date){

	//     $this->db->where('date' ,$date);

	//     $this->db->where('userid' ,$user_id);

	// 	return $this->db->get('public_holidays')->row();

	// }

	public function get_users()

	{

		$sql = "SELECT * FROM `ba_users`";

		$query = $this->db->query($sql);

		return $result = $query->result();

	}	

	public function newget_users()

	{

		$sql = "SELECT * FROM `newba_users`";

		$query = $this->db->query($sql);

		return $result = $query->result();

	}

	



function updateholidays($data, $id){

		$this->db->where('id', $id);

		$this->db->update('public_holidays', $data);

		return TRUE;

	}





	public function by_user($year, $month, $user_id)

	{	

		//die($year.'-'.$month);
		//Month changed
		//echo $month.'-'.$year;
		//$month=explode('-',date('Y-m',strtotime(date($year.'-'.$month))))[1];

		 // $month =date('m',strtotime('-1 month'));
		 // print_r(date('y m d')). ' ';
		 // $month-=1;
		 // if($month<10)
		 	// $month="0".$month;

		 // print_r($month);exit;

		$this->db->select("bm_attendance.*, newbm_user_details.time_in,

		 newbm_user_details.hired_for_project, bm_projects.project_title, bm_projects.isSatOff");



		$this->db->join('newbm_user_details', 'newbm_user_details.userid = bm_attendance.user_id', 'INNER');

		$this->db->join('bm_projects', 'bm_projects.id = newbm_user_details.hired_for_project', 'LEFT');

		$this->db->like('bm_attendance.date',$year.'-'.$month.'-');

		// $this->db->like('bm_attendance_leave.date',$year.'-'.$month.'-');

		$this->db->where('bm_attendance.user_id',$user_id);

		// $this->db->join('bm_remaining_holidays', 'bm_attendance.user_id = bm_remaining_holidays.userid', 'LEFT');

		// $this->db->where(array('bm_attendance.user_id' => $user_id,

		// 						'MONTH(bm_attendance.date)' => $month,

		// 						'YEAR(bm_attendance.date)' => $year

		// 						));



		// $this->db->join('bm_attendance_leave', 'bm_attendance_leave.userid = newbm_user_details.userid','INNER');

		// $this->db->join('bm_attendance_supervision' , 'bm_attendance_supervision.aid = bm_attendance.id', 'LEFT');

		$result = $this->db->get('bm_attendance');

		// echo "<pre>";print_r($result->result());exit;

		return $result->result();

	}

	public function Attendanceby_month($year, $month, $user_id)

	{	

		//Month changed

		//echo $month.'-'.$year;

		 // $month =date('m',strtotime('-1 months'));

		 if($month==13)

		 	$month=12;

		 else

		 	$month=$month-1;

		 if($month<10)

		 	$month="0".$month;

		 // print_r($month);exit;

		$this->db->select("bm_attendance.*, newbm_user_details.time_in,

		 newbm_user_details.hired_for_project, bm_projects.project_title");



		$this->db->join('newbm_user_details', 'newbm_user_details.userid = bm_attendance.user_id', 'INNER');

		$this->db->join('bm_projects', 'bm_projects.id = newbm_user_details.hired_for_project', 'LEFT');

		$this->db->like('bm_attendance.date',$year.'-'.$month.'-');

		// $this->db->like('bm_attendance_leave.date',$year.'-'.$month.'-');

		$this->db->where('bm_attendance.user_id',$user_id);

		// $this->db->join('bm_remaining_holidays', 'bm_attendance.user_id = bm_remaining_holidays.userid', 'LEFT');

		// $this->db->where(array('bm_attendance.user_id' => $user_id,

		// 						'MONTH(bm_attendance.date)' => $month,

		// 						'YEAR(bm_attendance.date)' => $year

		// 						));



		// $this->db->join('bm_attendance_leave', 'bm_attendance_leave.userid = newbm_user_details.userid','INNER');

		// $this->db->join('bm_attendance_supervision' , 'bm_attendance_supervision.aid = bm_attendance.id', 'LEFT');

		$result = $this->db->get('bm_attendance');

		// echo "<pre>";print_r($result->result());exit;

		return $result->result();

	}



	public function has_logged($user_id, $date)

	{

		$user_id = $this->db->escape($user_id);

		$date = $this->db->escape($date);

		

		$sql = "SELECT * FROM `bm_attendance` WHERE `user_id` = $user_id AND `date` = $date ";

		$query = $this->db->query($sql);

		return $result = $query->row();

	}

	public function isPresent($user_id, $date)

	{

		$user_id = $this->db->escape($user_id);

		$date = $this->db->escape($date);

		

		$sql = "SELECT * FROM `bm_attendance` WHERE `user_id` = $user_id AND `date` = $date ";

		$query = $this->db->query($sql);

		return $result = $query->row();

	}

	

	public function check_in($user_id, $date, $time='')

	{

		

		$user_id = $this->db->escape($user_id);

		$date = $this->db->escape($date);

		$time = $this->db->escape($time);

		$sql = "INSERT INTO `bm_attendance` (`user_id`, `date`, `check_in`) VALUES($user_id, $date, $time)";

		return $this->db->query($sql);

	}

	public function Newcheck_in($user_id, $date, $time='',$changed)

	{

		

		$user_id = $this->db->escape($user_id);

		$date = $this->db->escape($date);

		$time = $this->db->escape($time);

		$changed = $this->db->escape($changed);

		$sql = "INSERT INTO `bm_attendance` (`user_id`, `date`, `check_in`, `changed`) VALUES($user_id, $date, $time,$changed)";

		return $this->db->query($sql);

	}

	public function updateCheck_in($user_id, $date, $time='')

	{

		

		$user_id = $this->db->escape($user_id);

		$date = $this->db->escape($date);

		$time = $this->db->escape($time);



		// print_r($date);

		$sql = "UPDATE `bm_attendance` SET `check_in` = $time  WHERE `bm_attendance`.`user_id` = $user_id AND `bm_attendance`.`date` = $date";

		// print_r($sql);exit;

		return $this->db->query($sql);

	}

	public function NewupdateCheck_in($user_id, $date, $time='',$changed)

	{

		

		$user_id = $this->db->escape($user_id);

		$date = $this->db->escape($date);

		$time = $this->db->escape($time);



		$changed = $this->db->escape($changed);

		// print_r($date);

		$sql = "UPDATE `bm_attendance` SET `check_in` = $time ,`changed` = $changed  WHERE `bm_attendance`.`user_id` = $user_id AND `bm_attendance`.`date` = $date";

		// print_r($sql);exit;

		return $this->db->query($sql);

	}

	

	public function check_out($user_id, $time,$date)

	{





		// $id = $this->db->escape($id);

		$user_id = $this->db->escape($user_id);

		$time = $this->db->escape($time);

		// $dat=date('Y-m-d',$date)

		$sql = "UPDATE `bm_attendance` SET `check_out` = $time WHERE `user_id` = $user_id AND `bm_attendance`.`date` = '$date' ";

		// print_r($sql);exit;

		return $this->db->query($sql);

	}

	

	public function supervise($aid, $relexation, $reason)

	{

		$aid = $this->db->escape($aid);

		$relexation = $this->db->escape($relexation);

		$reason = $this->db->escape($reason);

		$sql = "INSERT INTO `bm_attendance_supervision` (`aid`, `relexation`, `reason`) VALUES($aid, $relexation, $reason)";

		return $this->db->query($sql);

	}



	function addTime($userid, $data){

		$this->db->where('userid', $userid);

		$this->db->update('bm_user_details', $data);

		return TRUE;

	}

	



	function getHolidayById($holiday_id){

		return $this->db->get_where('public_holidays',  array('id' => $holiday_id))->result();

	}

	

	function delHolidayById($holiday_id){

		$this->db->where('id', $holiday_id);

		return $this->db->delete('public_holidays');

		// return $this->db->get_where('public_holidays',  array('id' => $holiday_id))->result();

	}

	function getAttendanceSheet(){



		$this->db->select('newbm_user_details.*,bm_shifts.*,newba_users.*, bm_projects.*');

		$this->db->join('newba_users', 'newba_users.id = newbm_user_details.userid', 'left');	

		$this->db->join('bm_shifts', 'bm_shifts.id = newbm_user_details.shift_id', 'left');	

		$this->db->join('bm_projects', 'bm_projects.id = bm_shifts.project_id', 'left');	

		$this->db->order_by("newbm_user_details.hired_for_project","ASC");	

		return $this->db->get('newbm_user_details')->result();

	}



	function get_attendancePermonth($month,$year){

		$this->db->select("bm_attendance.*, newbm_user_details.time_in, newbm_user_details.hired_for_project, bm_projects.project_title, bm_attendance_supervision.*");

		$this->db->where(array(

								'MONTH(bm_attendance.date)' => $month,

								'YEAR(bm_attendance.date)' => $year

								));

		$this->db->join('newbm_user_details', 'newbm_user_details.userid = bm_attendance.user_id', 'INNER');

		$this->db->join('bm_projects', 'bm_projects.id = newbm_user_details.hired_for_project', 'LEFT');

		$this->db->join('bm_attendance_supervision' , 'bm_attendance_supervision.aid = bm_attendance.id', 'LEFT');

		$this->db->order_by('bm_attendance.user_id');

		

		$result = $this->db->get('bm_attendance');

		// echo "<pre>";print_r($result->result());exit;

		return $result->result();

	}

	function get_Attendance_Sheet_data(){



		$this->db->select('newbm_user_details.*,newba_users.*,bm_projects.*,bm_user_description.*,bm_levels.*');

		$this->db->join('bm_projects','newbm_user_details.hired_for_project=bm_projects.id','left');

		$this->db->join('newba_users','newba_users.id=newbm_user_details.userid','left');

		$this->db->join('bm_user_description','newba_users.id=bm_user_description.userid','left');

		$this->db->join('bm_levels','bm_user_description.level_id=bm_levels.id','left');

		$this->db->where('newbm_user_details.status',1);

		$this->db->order_by('bm_projects.project_title','DESC');

		// print_r($this->db->get('newbm_user_details')->result());exit;

		return $this->db->get('newbm_user_details')->result();

	}



	function get_remaining_holidays(){

		$this->db->order_by('bm_remaining_holidays.userid','ASC');		

		$result= $this->db->get('bm_remaining_holidays')->result();

		return $result;

	}

	function userget_remaining_holiday($id){

			$this->db->where('userid',$id);

		return $this->db->get('bm_remaining_holidays')->row();

	}

	function UpdateUser_remaining_holiday($data,$id){

		$this->db->where('userid', $id);

		$this->db->update('bm_remaining_holidays', $data);

		

	}

	function InsertUser_remaining_holiday($data){

		// $this->db->where('userid', $id);

		$this->db->insert('bm_remaining_holidays', $data);

		

	}

	

}