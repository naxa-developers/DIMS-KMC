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
}