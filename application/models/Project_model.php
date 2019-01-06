<?php
class Project_model extends CI_Model {





public function add_proj($table,$data){

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

public function get_proj($tbl){

$this->db->select('*');
$this->db->order_by('id','ASC');
$query=$this->db->get($tbl);
return  $query->result_array();


}
public function do_upload($filename,$name)
{

  $field_name                     ='proj_pic';
  $config['upload_path']          = './uploads/project_partner/';
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


    $data = array('upload_data' => $this->upload->data());

    return $data;

  }
}

public function get_edit_Data($id,$table){

$this->db->select('*');
$this->db->where('id',$id);
$query=$this->db->get($table);
return $query->row_array();


}

public function update_data($id,$data){

  $this->db->where('id',$id);
  $q=$this->db->update('project_tbl',$data);
  if($q){
    return 1;
  }else{
    return 0;
  }

}


}
