<?php
class Attendance_model extends CI_Model {

	function __construct()
	{
		parent::__construct();
	}
	
	public function get_log($date)
	{
		$check_in = $this->db->escape($date);
				var_dump($check_in);
		$sql = "SELECT `bm_attendance`.*, `bm_user_details`.`firstname`, `bm_user_details`.`lastname`, `bm_user_details`.`timings`, `bm_user_details`.`hired_for_project` FROM `bm_attendance` LEFT JOIN `bm_user_details` ON `bm_attendance`.`user_id` = `bm_user_details`.`userid` WHERE `bm_attendance`.`check_in` >= $check_in";
		$query = $this->db->query($sql);
		return $result = $query->result();
	}

	public function has_logged($user_id, $date)
	{
		$user_id = $this->db->escape($user_id);
		$check_in = $this->db->escape($date);
		
		$sql = "SELECT * FROM `bm_attendance` WHERE `user_id` = $user_id AND `check_in` > $check_in";
		$query = $this->db->query($sql);
		return $result = $query->row();
	}
	
	public function check_in($user_id, $time)
	{
		$user_id = $this->db->escape($user_id);
		$time = $this->db->escape($time);
		$sql = "INSERT INTO `bm_attendance` (`user_id`, `check_in`) VALUES($user_id, $time)";
		return $this->db->query($sql);
	}
	
	public function check_out($id, $user_id, $time)
	{
		$id = $this->db->escape($id);
		$user_id = $this->db->escape($user_id);
		$time = $this->db->escape($time);
		$sql = "UPDATE `bm_attendance` SET `check_out` = $time WHERE `user_id` = $user_id AND `id` = $id";
		return $this->db->query($sql);
	}
}