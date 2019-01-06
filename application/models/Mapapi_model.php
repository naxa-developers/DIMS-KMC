<?php
class Mapapi_model extends CI_Model {





  public function get_list(){

    $this->db->select('category_name,category_table,category_type,category_photo,summary_list,last_updated,public_view');
   $this->db->where('public_view','1');

    $q=$this->db->get('categories_tbl');
    return $q->result_array();
  }


  public function get_sum_name($tbl,$s){

    $this->db->select('*');
    $this->db->where('tbl_name',$tbl);
    $this->db->where('eng_lang',$s);
    $q=$this->db->get('tbl_lang');
    return $q->row_array();
  }


}
