<?php
class Dictionary extends CI_Model {

	public function update_dictionary(){
		$id = $this->input->post('id');
		$postdata=$this->input->post();
		//echo "<pre>";print_r($postdata);die;
	  	try {
            if($this->db->update('dictionary_tbl',$postdata,array('id'=>$id)))
            {
                return $this->db->affected_rows();
            }
        } catch (Exception $e) {
            throw $e;
        }
	}
    public function delete($id,$tbl){
        $this->db->where('id',$id);
        return $this->db->delete($tbl);
    }


  public function update_dictionary_image($id,$data,$tbl){
    $this->db->where('id',$id);
    return $this->db->update($tbl,$data);
  }
  public function do_upload_image($filename,$name)
    {
      $field_name                     ='dictionary_image';
      $config['upload_path']          = './uploads/terminologies/';
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
    
}