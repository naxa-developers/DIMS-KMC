<?php
class Layers_model extends CI_Model {



public function insert_layer($id,$data){

$this->db->where('id',$id);
$this->db->update('categories_tbl',$data);





}

public function get_layers($tbl){

$this->db->select('*');
$query=$this->db->get($tbl);
 return $query->result_array();



}
public function get_edit_layers($tbl,$id){

$this->db->select('*');
$this->db->where('gid',$id);

$query=$this->db->get($tbl);
 return $query->result_array();



}












}
