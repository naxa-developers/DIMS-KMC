<?php
class Organisation_mdl extends CI_Model {

    public function get_all_data(){
        $this->db->select('*');
        $this->db->order_by('id','DESC');
        $q=$this->db->get('organisation');
        return $q->result_array();
    }
	public function add_organisationuser($table,$data){
		$this->db->insert($table,$data);
		if ($this->db->affected_rows() > 0)
		{
		 return $this->db->insert_id();
		}
		else
		{
		  $error = $this->db->error();
		  return $error;
		}
	}
	
}
