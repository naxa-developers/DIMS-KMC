<?php
class Feature_model extends CI_Model {






public function get_feature()
{

$this->db->select('id,title,summary,photo,default');
$this->db->where('lang','en');
$q=$this->db->get('featured_dataset');
return $q->result_array();


}


public function get_feature_nep()
{

$this->db->select('id,nepali_title,nepali_summary,photo,default_nep');
$this->db->where('lang','nep');
$q=$this->db->get('featured_dataset');
return $q->result_array();


}

public function update_default($value)
{
  $this->db->update('featured_dataset',$value);
}

public function do_upload($filename,$name)
{

  $field_name                     ='map_pic';
  $config['upload_path']          = './uploads/datasets';
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

public function insert_feature_download($data){

  $this->db->insert('featured_dataset',$data);
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

public function update_map_download($id,$data,$tbl){

  $this->db->where('id',$id);
  return $this->db->update($tbl,$data);


}
public function delete_map($id)
{
$this->db->where('id',$id);
$this->db->delete('featured_dataset');

}

public function get_tables_data($tbl){ //get data of table

  $this->db->select('*');
  $this->db->order_by('id','ASC');
  $q=$this->db->get($tbl);
  return $q->result_array();


}


public function e_data_map($id){

$this->db->select('*');
$this->db->where('id',$id);
$query=$this->db->get('featured_dataset');
return $query->row_array();

}
}//end
