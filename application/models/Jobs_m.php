<?php
class Jobs_m extends CI_Model 
{
	public $rules = array(
		'email' => array(
			'field' => 'email',
			'label' => 'Email', 
			'rules' => 'trim|required|valid_email'
			),
		'password' => array(
			'field' => 'password', 
			'label' => 'Password', 
			'rules' => 'trim|required'
			)
		);

	function __construct() {
		parent::__construct();
	}
	
	
//  Corporate Profile


	public function addcompany($data)
	{
		$this->db->insert('jb_company_details', $data);
		return $this->db->insert_id();	
	}
	public function updatecompany($data,$id)
	{
		$this->db->where('id', $id);
		$this->db->update('jb_company_details', $data);
		return $this->db->insert_id();	
	}
	public function updatejob($data,$id)
	{
		$this->db->where('id', $id);
		$this->db->update('jb_jobs', $data);
		return $this->db->insert_id();	
	}
	public function savejob($data)
	{
		$this->db->insert('jb_jobs', $data);
		return true;	
	}
	public function getjobs()
	{

		$jobs=$this->db->get('jb_company_details');
		return $jobs->result();
	}
	public function getcompany($id)
	{
		$this->db->where('id',$id);
		$company=$this->db->get('jb_company_details');
		return $company->row();
	}
	public function getjob($id)
	{
		$this->db->where('company_add_id',$id);
		$jobs=$this->db->get('jb_jobs');
		return $jobs->result();
	}

	public function saveProfessionalProfile($data){
		$this->db->insert('jb_users',$data);
		return $this->db->insert_id();
	}
	public function savejobexperience($data){
		$this->db->insert('jb_experience',$data);
	}
	public function saveeducation($data){
		$this->db->insert('jb_education',$data);
	}
	public function savelanguage($userid,$data)
	{
		$this ->db->where('id',$userid);		
	 	$this->db->update('jb_users',$data);
	}
	public function saveaward($data){
		$this->db->insert('jb_awards',$data);
	}
	public function savecertification($data){
		$this->db->insert('jb_certification',$data);
	}
	public function savesocial($userid,$data)
	{
		$this->db->where('id', $userid);
		$this->db->update('jb_users', $data);
		//return $this->db->insert_id();	
	}
	public function savereference($userid,$data)
	{
		$this->db->where('id', $userid);
		$this->db->update('jb_users', $data);
		//return $this->db->insert_id();	
	}
	public function savehobbies($data){
		$this->db->insert('jb_hobbies',$data);
	}
	
	public function savecandidacy($userid,$data)
	{
		$this->db->where('id', $userid);
		$this->db->update('jb_users', $data);
		//return $this->db->insert_id();	
	}
}