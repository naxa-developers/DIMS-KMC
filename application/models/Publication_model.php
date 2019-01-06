<?php
class Publication_model extends CI_Model {



public function get_all_data(){

$this->db->select('*');
$this->db->order_by('id','DESC');
$q=$this->db->get('publication');
return $q->result_array();
}

public function add_publication($table,$data){

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

public function update_path($id,$data){

  $this->db->where('id',$id);
  $this->db->update('publication',$data);

}

public function do_upload($filename,$name)
{

  $field_name                     ='proj_pic';
  $config['upload_path']          = './uploads/publication/';
  $config['allowed_types']        = 'gif|jpg|jpeg|png';
  $config['max_size']             = 7000;
  $config['overwrite']            = TRUE;
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
      $data['status']=1;

    return $data;

  }
}

public function file_do_upload($filename,$name)
{

  $field_name                     ='uploadedfile';
  $config['upload_path']          = './uploads/publication/file/';
  $config['allowed_types']        = 'pdf';
  $config['max_size']             = 7000;
  $config['overwrite']            = TRUE;
  $config['file_name']           = $name;

  $this->load->library('upload', $config);
  $this->upload->initialize($config);

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

public function delete_data($id){


  $this->db->where('id',$id);
  $this->db->delete('publication');
}

public function get_edit_Data($id,$table){

$this->db->select('*');
$this->db->where('id',$id);
$query=$this->db->get($table);
return $query->row_array();


}

public function update_data($id,$data){

  $this->db->where('id',$id);
  $q=$this->db->update('publication',$data);
  if($q){
    return 1;
  }else{
    return 0;
  }

}

}
