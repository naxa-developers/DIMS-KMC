<?php
class Site_model extends CI_Model {

public function site_setting($id){

$this->db->select('*');
$this->db->where('id',$id);
$q=$this->db->get('site_setting');
return $q->row_array();


}

public function update_data($data,$id){

$this->db->where('id',$id);
$res=$this->db->update('site_setting',$data);
return $res;

}


public function do_upload($filename,$name)
{

  $field_name                     = $name;
  $config['upload_path']          = './uploads/site_setting/';
  $config['allowed_types']        = 'png';
  $config['max_size']             = 7000;
  $config['overwrite']             = TRUE;
  $config['file_name']           = $name;

  $this->load->library('upload', $config);

  if ( ! $this->upload->do_upload($field_name))
  {
    $error = array('error' => $this->upload->display_errors());
    $error['status']=0;
    return $error;


  }
  else
  {

    $data = array('upload_data' => $this->upload->data());
    $data['status']=1;

    return $data;

  }
}
public function do_upload_cover($filename,$name)
{

  $field_name                     = $name;
  $config['upload_path']          = './uploads/site_setting/';
  $config['allowed_types']        = 'jpg';
  $config['max_size']             = 7000;
  $config['overwrite']             = TRUE;
  $config['file_name']           = $name;

  $this->load->library('upload', $config);

  if ( ! $this->upload->do_upload($field_name))
  {
    $error = array('error' => $this->upload->display_errors());
    $error['status']=0;
    return $error;


  }
  else
  {

    $data = array('upload_data' => $this->upload->data());
    $data['status']=1;

    return $data;

  }
}

}
