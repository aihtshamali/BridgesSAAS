<?php

class the_bridg_employee extends CI_Model {

	function  __construct() {
        parent::__construct();

	
    }
	public function getEquipments($id){
       $bridge_mae = $this->load->database('bridge_mae', TRUE); // the TRUE paramater tells CI that you'd like to return the database object.
   $bridge_mae->where('assigned_to',$id);
  $query = $bridge_mae->get('bridges_technology_items')->result();
  // echo "<pre>	";var_dump($query);
  return $query;
	}
}

?>