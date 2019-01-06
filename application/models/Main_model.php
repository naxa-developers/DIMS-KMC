<?php
class Main_model extends CI_Model {


  public function get_feature()
  {

  $this->db->select('*');
  $this->db->where('lang','en');
  $this->db->where('default','1');
  $q=$this->db->get('featured_dataset');
  return $q->row_array();


  }


  public function get_feature_nep()
  {

  $this->db->select('*');
  $this->db->where('lang','nep');
  $this->db->where('default_nep','1');
  $q=$this->db->get('featured_dataset');
  return $q->row_array();


  }

  public function get_checked_dataset($data)
  {

  $this->db->select('*');
  $this->db->or_where_in('category_table',$data);
  $q=$this->db->get('categories_tbl');
  return $q->result_array();


  }

  public function site_setting_en(){

  $this->db->select('*');
  $this->db->where('id',1);
  $q=$this->db->get('site_setting');
  return $q->row_array();


  }
  public function site_setting_nep(){

  $this->db->select('*');
  $this->db->where('id',2);
  $q=$this->db->get('site_setting');
  return $q->row_array();


  }


  public function get_post(){

    $this->db->select('*');
    $this->db->select('St_asText(geom)');
    $query=$this->db->get('crops_2015');
    return $query->result();
  }


public function get_contact($cat,$tbl,$lang)
{
  $this->db->select('*');
  $this->db->where('language',$lang);
  $this->db->where('category',$cat);
  $q=$this->db->get($tbl);
  return $q->result_array();


}

public function get_contact_csv($cat,$tbl)
{
  $this->db->select('*');
  $this->db->where('category',$cat);
  $q=$this->db->get($tbl);
  return $q ;


}

  public function get_about_where($id)
  {
    $this->db->select('*');
    $this->db->where('id',$id);
    $q=$this->db->get('about');
    return $q->row_array();
  }

  public function get_category(){

    $this->db->select('*');
    $this->db->where('language','en');
    $q=$this->db->get('categories_tbl');
    return $q->result_array();

  }

  public function count_dat_tbl($tbl){

    $this->db->select('COUNT(*) as '.$tbl);
    $this->db->distinct();
    $result_set=$this->db->get($tbl);
    return $result_set->row_array();
  }

  public function get_category_nep(){

    $this->db->select('*');
    $this->db->where('language','nep');
    $q=$this->db->get('categories_tbl');
    return $q->result_array();

  }

  public function insert($udata,$table){


    $this->db->insert($table, $udata);
  }

  public function get($tbl){

    $this->db->select('*');
    $query=$this->db->get($tbl);
    return $query->result_array();
  }


  public function get_proj_data(){

    $this->db->select('*');
    $query=$this->db->get('project_tbl');
    return $query->result_array();
  }

  public function get_cat($tbl){

    $this->db->select('*');
    $this->db->order_by('id','ASC');
    $query=$this->db->get($tbl);
    return $query->result_array();
  }



  public function get_cat_exposure($tbl,$lang){

    $this->db->select('*');
  $this->db->where('language',$lang);
    $this->db->where('category_type','Exposure_Data');
    $this->db->order_by('id','ASC');
    $query=$this->db->get($tbl);
    return $query->result_array();
  }

  public function get_cat_baseline($tbl,$lang){

    $this->db->select('*');
  $this->db->where('language',$lang);
    $this->db->where('category_type','Baseline_Data');
    $this->db->order_by('id','ASC');
    $query=$this->db->get($tbl);
    return $query->result_array();
  }

  public function get_cat_hazard($tbl,$lang){

    $this->db->select('*');
  $this->db->where('language',$lang);
    $this->db->where('category_type','Hazard_Data');
    $this->db->order_by('id','ASC');
    $query=$this->db->get($tbl);
    return $query->result_array();
  }






}
