<?php
class About_model extends CI_Model {




  


public function get_about()
{
  $this->db->select('*');
$q=$this->db->get('about');
return $q->result_array();
}

public function get_edit_Data($id,$table){

$this->db->select('*');
$this->db->where('id',$id);
$query=$this->db->get($table);
return $query->row_array();


}

public function update_data($id,$data){

  $this->db->where('id',$id);
  $q=$this->db->update('about',$data);
  if($q){
    return 1;
  }else{
    return 0;
  }

}

public function do_upload($filename,$name)
{

  $field_name                     ='proj_pic';
  $config['upload_path']          = './uploads/about/';
  $config['allowed_types']        = 'gif|jpg|png';
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


    return 1;

  }
}


}
