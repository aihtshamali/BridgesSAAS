<?php defined("BASEPATH") OR exit("DIRECT");

class SharedModel extends CI_Model {

	//give no argument to fetch main project
	function getProjectInfo($id=-1) {
		$this->db->select("*");
		$this->db->from("bm_projects");

		if($id>=0)
			$this->db->where("id", $id);
		else
			$this->db->order_by("id", "ASC");

		return $this->db->get()->row();
	}

	//logs are always generated against logged in user
	function generateLog($content) {
		$data=array(
			'userId'=> $_SESSION["id"],
			'log'=> $content
		);
		$this->db->insert("bm_logs", $data);
	}
}