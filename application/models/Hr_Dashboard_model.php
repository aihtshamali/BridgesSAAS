<?php

class Hr_Dashboard_model extends CI_Model {

	function get_user(){

		$this->db->select('newbm_user_details.*,newba_users.*');
		// $this->db->join('bm_projects','newbm_user_details.hired_for_project=bm_projects.id','left');
		$this->db->join('newba_users','newba_users.id=newbm_user_details.userid','left');
		$this->db->where('newbm_user_details.status',1);
		$this->db->order_by('newbm_user_details.userid');
		return $this->db->get('newbm_user_details')->result();
	}
	
	
}
?>