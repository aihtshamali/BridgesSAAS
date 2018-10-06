<?php
class Admin_m extends CI_Model {

	function __construct()
	{
		parent::__construct();
	}

	function getAllRoles(){
		return $this->db->get('bm_roles')->result();
	}
	function getAllAssignedRoles(){
		$this->db->select('newba_users.*,bm_assigned_roles.*,bm_roles.*,bm_assigned_roles.id as id');
		//$this->db->join('newbm_user_details', 'newbm_user_details.userid = bm_assigned_roles.user_id', 'left');
		$this->db->join('newba_users', 'newba_users.id = bm_assigned_roles.user_id', 'left');
		$this->db->join('bm_roles', 'bm_roles.id = bm_assigned_roles.role_id', 'left');
		return $this->db->get('bm_assigned_roles')->result();
	}
	function insertAssignedPermission($data){
		$this->db->insert('bm_assigned_roles',$data);
	}
	function getAssignedRole($id){
		$this->db->select('newba_users.*,bm_assigned_roles.*,bm_roles.*,bm_assigned_roles.id as id');
		//$this->db->join('newbm_user_details', 'newbm_user_details.userid = bm_assigned_roles.user_id', 'left');
		$this->db->join('newba_users', 'newba_users.id = bm_assigned_roles.user_id', 'left');
		$this->db->join('bm_roles', 'bm_roles.id = bm_assigned_roles.role_id', 'left');
		$this->db->where('bm_assigned_roles.id',$id);
		return $this->db->get('bm_assigned_roles')->row();
	}
	function updateAssignedPermission($data,$id){
		$this->db->where('id',$id);
		$this->db->update('bm_assigned_roles',$data);
	}
	function deleteAssignedPermission($id){
		$this->db->where('id', $id);
		return $this->db->delete('bm_assigned_roles');
	}
}
?>
