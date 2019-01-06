<?php
class Report_model extends CI_Model {




public function get_report_data(){


$this->db->select('*');
$this->db->order_by('id','DESC');
$q=$this->db->get('report_tbl');
return $q->result_array();



}
public function get_map_reports_table(){


$this->db->select('*');
$this->db->order_by('id','DESC');
$q=$this->db->get('map_reports_table');
return $q->result_array();



}

public function site_setting(){

$this->db->select('*');
$q=$this->db->get('site_setting');
return $q->row_array();


}

public function get_count_views($field)
{
  $this->db->select('*');
  $this->db->where('page',$field);
  $q=$this->db->get('views');
  return $q->row_array();
  // code...
}

public function update_views($id,$data)

{
  $this->db->where('id',$id);
  $this->db->update('views',$data);
  // code...
}

public function search($id){
$q=$this->db->get_where('report_tbl',array ('id'=>$id));
return $q->row_array();
}


public function filter_data($filter){

$this->db->where($filter);
$q=$this->db->get('report_tbl');
return $q->result_array();


}

public function get_data($filter){

$this->db->where('id',$filter);
$q=$this->db->get('report_tbl');
return $q->row_array();


}

public function do_upload($filename,$name)
{

  $field_name                     ='photo';
  $config['upload_path']          = './uploads/report/';
  $config['allowed_types']        = 'gif|jpg|png';
  $config['max_size']             = 7000;
  $config['overwrite']             = TRUE;
  $config['file_name']           = $name;

  $this->load->library('upload', $config);

  if ( ! $this->upload->do_upload($field_name))
  {
    $error = array('error' => $this->upload->display_errors());
    return $error;


  }
  else
  {


    return 1;

  }
}


public function update_img_path($id,$data){

  $this->db->where('id',$id);
  $this->db->update('report_tbl',$data);
}


public function insert($data_array){

$this->db->insert('report_tbl',$data_array);
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

public function count_incident(){
  $this->db->select('ward');
  $this->db->distinct();
  $q=$this->db->get('report_tbl');
  return $q->result_array();


}
public function count_ward(){

  $this->db->select('ward as name, COUNT(ward) as value');
  $this->db->group_by('ward');
  $result_set=$this->db->get('report_tbl');
  return $result_set->result();
}

public function count_cat(){

  $this->db->select('incident_type as name, COUNT(incident_type) as value');
  $this->db->group_by('incident_type');
  $result_set=$this->db->get('report_tbl');
  return $result_set->result();
}

public function count_stat(){

  $this->db->select('status as name, COUNT(status) as value');
  $this->db->group_by('status');
  $result_set=$this->db->get('report_tbl');
  return $result_set->result();
}

public function get_incident_count(){

   $this->db->select('incident_type,COUNT(incident_type)');
     $this->db->distinct('incident_type');
     $this->db->group_by('incident_type');
     $result_set=$this->db->get('report_tbl');
     return $result_set->result_array();



}


}//end
