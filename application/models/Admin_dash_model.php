<?php
class Admin_dash_model extends CI_Model {



public function count_data($tbl){

 return $this->db->count_all_results($tbl);



}

public function count_views($field){

$this->db->select('*');
$this->db->where('page',$field);
$q=$this->db->get('views');
return $q->row_array();


}

public function max_views(){
$this->db->select('*');
$this->db->order_by('views_count','DESC');
$this->db->limit(1);
$query=$this->db->get('views');
return $query->row_array();



}


}
