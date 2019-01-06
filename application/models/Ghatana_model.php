<?php
class Ghatana_model extends CI_Model {


public function get_data(){

$this->db->select('*');
$res=$this->db->get('map_reports_table');
return $res->result_array();

}

public function add_ghatana($table,$data)
{
  $this->db->insert($table, $data);
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

public function edit_data($id){

$this->db->select('*');
$this->db->where('id',$id);
$res=$this->db->get('map_reports_table');
return $res->row_array();



}


public function update_data($id,$data){ // update the edited table

  $this->db->where('id',$id);
  $q=$this->db->update('map_reports_table',$data);
  if($q){
    return 1;
  }else{
    return 0;
  }
}


public function delete_data($id){

  $this->db->where('id',$id);
  return $this->db->delete('map_reports_table');



}

} //end
