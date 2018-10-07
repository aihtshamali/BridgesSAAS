<?php
class Salaryslip_m extends CI_Model {
	
	function payslip($id) {
		/*$this->db->select('id, firstname, lastname, userid, designation');
		$result = $this->db->get('bm_user_details')->result_array();
		return $result;*//*
		$this->db->where(array('id' => $id));*/
		$this->db->select('bm_user_details.*,bm_projects.*, bm_ranks.name as rankn , bm_cluster.name as clustern ,bm_designation.name as desn');
		$this->db->where('userid',$id);
		$this->db->join('bm_ranks', 'bm_ranks.id = bm_user_details.rankid', 'left');
		$this->db->join('bm_cluster', 'bm_cluster.id = bm_user_details.clusterid', 'left');
		$this->db->join('bm_designation', 'bm_designation.id = bm_user_details.designationid', 'left');
		$this->db->join('bm_projects','bm_projects.id=bm_user_details.hired_for_project','left');
		return $this->db->get('bm_user_details')->row();
	}
	function newpayslip($id) {
		/*$this->db->select('id, firstname, lastname, userid, designation');
		$result = $this->db->get('bm_user_details')->result_array();
		return $result;*//*
		$this->db->where(array('id' => $id));*/
		$this->db->select('newbm_user_details.*,bm_user_description.job_title,newba_users.fname as firstname ,newba_users.lname as lastname,bm_projects.*, bm_ranks.name as rankn , bm_cluster.name as clustern ,bm_designation.name as desn , bm_emp_benefits.employee AS benefitDeduction');
		$this->db->where('newbm_user_details.userid',$id);
		$this->db->join('bm_ranks', 'bm_ranks.id = newbm_user_details.rankid', 'left');
		$this->db->join('bm_cluster', 'bm_cluster.id = newbm_user_details.clusterid', 'left');
		$this->db->join('newba_users', 'newba_users.id = newbm_user_details.userid', 'left');
		$this->db->join('bm_designation', 'bm_designation.id = newbm_user_details.designationid', 'left');
		$this->db->join('bm_user_description', 'bm_user_description.userid = newbm_user_details.userid', 'left');
		$this->db->join('bm_projects','bm_projects.id=newbm_user_details.hired_for_project','left');
		$this->db->join('bm_emp_benefits','bm_emp_benefits.userid=newbm_user_details.userid','left'); // added by umair
		return $this->db->get('newbm_user_details')->row();
	}

	function print_payslip($ids) {
		$this->db->where('userid',$ids);
		$this->db->join('bm_projects','bm_projects.id=bm_user_details.hired_for_project','left');
		return $this->db->get('bm_user_details')->row();
	}

	function get_data($id) {
		// if ($id==1) {
		// 	$this->db->where(array(
		// 		'status' => 1,
		// 		'hired_for_project' => 1,
		// 		));
		// 	$this->db->select('bm_user_details.*,bm_salary.paid');
		// 	$this->db->or_where('hired_for_project ', 4);
		// 	$this->db->from('bm_user_details');
		// 	$this->db->join('bm_salary', 'bm_salary.userid = bm_user_details.userid','left');
		// 	return $this->db->get()->result();
		// }
		if ($id == 10) {
		$this->db->select('bm_user_details.*,bm_salary.paid');
		$this->db->from('bm_user_details');
		$this->db->join('bm_salary', 'bm_salary.userid = bm_user_details.userid','left');
		$this->db->where('status', 1);
		return $this->db->get()->result();
		}
		elseif ($id) {
			$this->db->where(array(
				'status' => 1,
				'hired_for_project' => $id,
				));
		$this->db->select('bm_user_details.*,bm_salary.paid');
		$this->db->from('bm_user_details');
		$this->db->join('bm_salary', 'bm_salary.userid = bm_user_details.userid','left');
		return $this->db->get()->result();
		}
		
		else{
		$this->db->select('bm_user_details.*,bm_salary.paid');
		$this->db->from('bm_user_details');
		$this->db->join('bm_salary', 'bm_salary.userid = bm_user_details.userid','left');
		$this->db->where('status', 1);
		return $this->db->get()->result();
		}
	}
	function YearTodate($data,$userid){
	  $this->db->where('userid',$data['userid']);
		  $q = $this->db->get('bm_ytd_salary');
	   if ( $q->num_rows() > 0 ) 
	   {
	   	$q=$q->row();
	   	$data['modified_at']=date('Y-m-d H:i:s');
        $date=explode("-",$data['changed_at']);
        $date1=explode("-",$q->changed_at);

        /*
        if($date[0]==$date1[0]&&$date[1]==$date1[1]) // Return if month is same
        	return;
		*/
        
        $data['annual_salary'] += $q->annual_salary;
        $data['annual_deduction'] += $q->annual_deduction;        
        $data['fine'] += $q->fine;
        $data['performance'] += $q->performance;
        $data['advance'] += $q->advance;
        $data['security'] += $q->security;
        $data['tax'] += $q->tax;
        
        /*
        if($date[0]>$date1[0]){
        	$data['annual_salary']=0;$data['annual_deduction']=0;
        }
        */


        $this->db->where('userid',$data['userid']);
	    return $this->db->update('bm_ytd_salary',$data);
	   } else {
	     return $this->db->INSERT('bm_ytd_salary',$data);
	   }
	}
	function getYTD($userid){
		$this->db->where('userid',$userid);
		return $this->db->get('bm_ytd_salary')->row();	
	}
	function get_salary($year, $month){

		$this->db->where(array('MONTH(bm_salary.salarymonth)' => $month,
								'YEAR(bm_salary.salarymonth)' => $year
						));
		return $this->db->get('bm_salary')->result();
	}
	public function getFromSalaryTable($id,$month){
		// print_r($month);exit;
			  $this->db->like('salarymonth',$month);
		      $this->db->where('userid',$id);
			return $this->db->get('bm_salary')->row();

	}
	function add_salary($data){

	      $this->db->where('salarymonth',$data['salarymonth']);
	      $this->db->where('userid',$data['userid']);
   		  $q = $this->db->get('bm_salary');
		   if ( $q->num_rows() > 0 ) 
		   {
		   	$data['modified_at']=date('Y-m-d H:i:s');
		    $this->db->where('salarymonth',$data['salarymonth']);
	        $this->db->where('userid',$data['userid']);
		    return $this->db->update('bm_salary',$data);
		   } else {
		     return $this->db->INSERT('bm_salary',$data);
		   } 
		// return	$this->db->insert('bm_salary',$data);
	}
	
	public function getUserPerformance($iUserId)
	{	


		// $performance = array();
		// $date = @split("-", date("Y-m-t", strtotime(date("d-m-Y"))));
		// $mon=date('m')-1;$year=date('Y');
		// if($mon==1|| $mon==01)
		// 	{$mon=12;$year=$year-1;}
		// if($mon<10)
		// 	$mon='0'.$mon;
		// for ($i=1; $i <=$date[2]+1; $i++) 
		// { 	
		// 	$currentDays = date($year."-".$mon."-$i", strtotime(date("d-".$mon."-".$year)));
		// 	// print_r($mon);
		// 	$this->db->where(array('userid' => $iUserId, 'created' => $currentDays));
		// 	$this->db->select('id, rating, created, SUM(rating) AS rating_count, count(*) AS count');
		// 	$query    =  $this->db->get('bm_tasks_rating')->result_array();

		// 	if($query[0]["created"] != NULL)
		// 		$performance[$i] = $query[0]["rating_count"]/$query[0]["count"];
		// 	else
		// 		$performance[$i] = "empty";
		// }

		$performance = array();
		$date = @explode("-", date("Y-m-t", strtotime("-1 months")));
		for ($i=1; $i < $date[2]+1; $i++) 
		{ 	
			$currentDays = date("Y-m-$i", strtotime("-1 months"));
			$this->db->where(array('userid' => $iUserId, 'created' => $currentDays));
			$this->db->select('id, rating, created, SUM(rating) AS rating_count, count(*) AS count');
			$query    =  $this->db->get('bm_tasks_rating')->result_array();

			if($query[0]["created"] != NULL)
				$performance[$i] = $query[0]["rating_count"]/$query[0]["count"];
			else
				$performance[$i] = "empty";
		}
		// echo "<pre>"; var_dump($performance); exit;
		return $performance;
	}

	function remark($id,$userid) {
		$this->db->where('id', $id);
		$data = array('remark' => '1','remark_to' => $userid);
		$this->db->update('task_comments',$data);
	}

	function print_it($id){
		echo $id;
	}

	function getComments($where,$date){
		$this->db->where(array('remark_to'=>$where,'remark'=>'1'));
		$this->db->like('created',$date);
		return $this->db->get('task_comments')->result();
	}

	public function add_comment($remark)
	{
		return $this->db->insert('task_comments',$remark);
	}

	/*
	public function getBenefits($emp_id= NULL)
	{
		if($emp_id != NULL){
			$this->db->where(array('userid'=>$emp_id));
			return $this->db->get('bm_emp_benefits')->result();
		}
		else
			return false;
	}*/

	public function getBenefitsMonth($userId, $monthPadded){
		//padded month means date is like this "yyyy-mm"
		$this->db->select('insurance, SUM(cost) AS total, SUM(bridges) AS company');
		$this->db->where('userid', $userId);
		$this->db->like('since', $monthPadded);
		$this->db->group_by('insurance');
		return $this->db->get('bm_emp_benefits')->result();
	}

	public function getBenefitsYearly($userId, $yearPadded){
		$this->db->select('benefit_name, SUM(cost) AS total, SUM(company) AS company');
		$this->db->where('user_id', $userId);
		$this->db->like('changed', $yearPadded);
		$this->db->group_by('benefit_name');
		return $this->db->get('bm_emp_benefits_yearly')->result();		
	}


	public function payslip_monetized($id,$mon){
		$mon=@explode("-", $mon);
		$this->db->select('bm_after_monetized.monetized_holidays');
		$this->db->where('userid',$id);
		$this->db->like('date',$mon[0].'-'.$mon[1].'-');
		return $this->db->get('bm_after_monetized')->row();
	}
	public function payslip_monetizedForAll($mon){
		$mon=@explode("-", $mon);
		$this->db->select('bm_after_monetized.monetized_holidays,bm_after_monetized.userid');
		$this->db->like('date',$mon[0].'-'.$mon[1].'-');
		return $this->db->get('bm_after_monetized')->result();
	}
	public function dbSaveComment($insertData='')
	{
		$this->db->where(array('user_id' => $insertData['user_id'], 'salary_month' => $insertData['salary_month']));
		$dataCheck = $this->db->count_all_results('bm_salaryslip_comment');

		if($dataCheck == 1){
			$this->db->set('comment', $insertData['comment']);
			$this->db->where(array('user_id' => $insertData['user_id'], 'salary_month' => $insertData['salary_month']));
			$this->db->update('bm_salaryslip_comment');
			 return false;
		}else{
			$this->db->insert('bm_salaryslip_comment', $insertData);
			 return true;
		}
	}

	public function dbGetComment($user_id = '', $month = '')
	{
		return $this->db->get_where('bm_salaryslip_comment', array('user_id' => $user_id, 'salary_month' => $month))->row();
	}
}
