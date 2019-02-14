<?php
class Home_mdl extends CI_Model {


 	public function saveSubscribe()
 	{
 		$postdata = $this->input->post();
 		echo"<pre>";print_r($postdata);die;
 		$all = $this->imput->post('all');
 		if($all) {
 			$postdata =$this->input->post();
 			unset($postdata['all']);
 			echo "<pre>"; print_r($postdata);die;
 		}
 		try {
           	if($this->db->insert('subscriberuser',$postdata))
           	{
            	return $this->db->insert_id();
            }
           	return false;
        } catch (Exception $e) {
            throw $e;
        }
 	}
 	public function get_searchdata() {
    $keyword=$this->input->post('keyword');        
    //$this->db->order_by('id', 'DESC');
    //$this->db->like("word", $keyword);
    //$sql = "word LIKE '%" . $keywords;
    $qry = $this->db->select('*')->from('dictionary_tbl')
    ->where("word LIKE '$keyword%'")->get();
    return $qry->result();
  }
}