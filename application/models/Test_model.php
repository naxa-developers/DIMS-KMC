<?php
class Test_model extends CI_Model {



  public function get_data_con($d,$tbl){

    for($i=0; sizeof($d['a'])>$i; $i++){
    $this->db->select($d['a'][$i]['col'].' AS '. $d['a'][$i]['name']);
    }

    $this->db->order_by('id','ASC');
    $q=$this->db->get($tbl);

    return $q->result_array();


  }



}
