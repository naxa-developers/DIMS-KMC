<?php
class Map_model extends CI_Model {

  public function get_summary_list($tbl){

    $this->db->select('*');
    $this->db->where('category_table',$tbl);
    $q=$this->db->get('categories_tbl');
    return $q->row_array();
  }





  public function get_as_map_data($d,$tbl){

    foreach($d as $v){
    $this->db->select($v['eng_lang'].' AS '. $v['nepali_lang']);
    }

    $this->db->order_by('id','ASC');
    $q=$this->db->get($tbl);
    return $q->result_array();


  }


  public function get_jsn($tbl){



    $this->db->select('column_control');
    $this->db->where('category_table',$tbl);
    $q=$this->db->get('categories_tbl');
    return $q->row_array();
  }


  public function get_data_con($d,$tbl){

    for($i=0; sizeof($d['a'])>$i; $i++){
    $this->db->select($d['a'][$i]['col'].' AS '. $d['a'][$i]['name']);
    }

    $this->db->order_by('id','ASC');
    $q=$this->db->get($tbl);

    return $q->result_array();


  }



  public function get_map_filter_data($tbl,$query,$d){
    foreach($d as $v){
      //$this->db->select($v['eng_lang'].' AS '.pg_escape_string(preg_replace('/[^A-Za-z0-9\-]/', ' ', $v['nepali_lang'])));

      $this->db->select($v['eng_lang'].' AS '. $v['nepali_lang']);
    }
   $this->db->where($query);
   $res=$this->db->get($tbl);
   return $res->result_array();


  }

  public function get_map_filter_data_en($tbl,$query,$d){
    foreach($d as $v){
     $this->db->select($v['eng_lang'].' AS '.pg_escape_string(preg_replace('/[^A-Za-z0-9\-]/', ' ', $v['nepali_lang'])));

      //$this->db->select($v['eng_lang'].' AS '. $v['nepali_lang']);
    }
   $this->db->where($query);
   $res=$this->db->get($tbl);
   return $res->result_array();


  }


  public function get_map_filter_data_csv($tbl,$query,$d){
    foreach($d as $v){
    $this->db->select($v['eng_lang'].' AS '.pg_escape_string(preg_replace('/[^A-Za-z0-9\-]/', ' ', $v['nepali_lang'])));
    }
   $this->db->where($query);
   $res=$this->db->get($tbl);
   return $res;


  }

  public function get_map_download_data()
  {
    $this->db->select('*');
    $this->db->order_by('id','DESC');
    $query=$this->db->get('maps_download');
    return $query->result_array();

  }

  public function get_summary($field,$tbl){


    $this->db->select($field.' AS field');
    $this->db->select('ST_AsGeoJSON(the_geom)');
    $query=$this->db->get($tbl);
    return $query->result_array();

  }

  public function default_load(){
    $this->db->select('default_load');
    $this->db->order_by('id','ASC');
    $query=$this->db->get('categories_tbl');
    return $query->result_array();


  }


  public function get($tbl){


    $this->db->select('*');
    $this->db->select('ST_AsGeoJSON(the_geom)');
    $query=$this->db->get($tbl);
    return $query->result_array();
  }



  public function get_cat_map($tbl){
    $this->db->select('*');
    $this->db->order_by('id','ASC');
    $query=$this->db->get($tbl);
    return $query->result_array();
  }


  public function get_layer($tbl){
    $this->db->select('*');
    $this->db->order_by('id','ASC');
    $query=$this->db->get($tbl);
    return $query->result_array();
  }

  public function get_layer_en($tbl,$cat){
    $this->db->select('*');
    $this->db->where('language','en');
      $this->db->where('category_type',$cat);
    $this->db->order_by('id','ASC');
    $query=$this->db->get($tbl);
    return $query->result_array();
  }

  public function get_layer_all_en($tbl){
    $this->db->select('*');
    $this->db->where('language','en');
    $this->db->order_by('id','ASC');
    $query=$this->db->get($tbl);
    return $query->result_array();
  }

  public function get_layer_nep($tbl,$cat){
    $this->db->select('*');
    $this->db->where('language','nep');
    $this->db->where('category_type',$cat);
    $this->db->order_by('id','ASC');
    $query=$this->db->get($tbl);
    return $query->result_array();
  }

  public function get_layer_all_nep($tbl){
    $this->db->select('*');
    $this->db->where('language','nep');

    $this->db->order_by('id','ASC');
    $query=$this->db->get($tbl);
    return $query->result_array();
  }



  public function get_popup($tbl){
    $this->db->select('*');
    $this->db->order_by('id','ASC');
    $this->db->where('tbl_name',$tbl);
    $query=$this->db->get('tbl_lang');
    return $query->result_array();
  }

  public function get_summary_single($tbl){
    $this->db->select('*');
    $this->db->where('category_table',$tbl);
    $query=$this->db->get('categories_tbl');
    return $query->row_array();
  }


  public function get_nep($tbl,$typ){

    $this->db->select('*');
    $this->db->order_by('id','ASC');
    $this->db->where('tbl_name',$typ);
    $q=$this->db->get($tbl);
    return  $q->result_array();


  }

  public function get_lang_map_data($tbl){

    $this->db->select('*');
    $this->db->where('tbl_name',$tbl);
    $q=$this->db->get('tbl_lang');
    return $q->result_array();
  }
 public function get_checkedcolumns_control($tbl){

    $this->db->select('column_control,popup_content');

    $this->db->where('category_table',$tbl);
    $q=$this->db->get('categories_tbl');
    return  $q->row_array();

  }
  public function get_checkedcolumns($tbl){

    $this->db->select('popup_content');

    $this->db->where('category_table',$tbl);
    $q=$this->db->get('categories_tbl');
    return  $q->row_array();

  }
  public function col_name($tbl){

    $this->db->select('*');

    $this->db->where('tbl_name',$tbl);
    $q=$this->db->get('tbl_lang');
    return  $q->result_array();



  }
  public function update_popup($tbl,$data){

    $this->db->where('category_table',$tbl);
    $q=$this->db->update('categories_tbl',$data);



  }

  public function update_style($tbl,$data){

    $this->db->where('category_table',$tbl);
    $q=$this->db->update('categories_tbl',$data);

  }


  public function update_value($id,$data){
    $this->db->where('id',$id);
    $this->db->update('categories_tbl',$data);
    return TRUE;

  }

  public function do_upload($filename,$name)
  {

    $field_name                     ='map_pic';
    $config['upload_path']          = './uploads/map_download/';
    $config['allowed_types']        = 'gif|jpg|png';
    $config['max_size']             = 15000;
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


  public function update_map_download($id,$data,$tbl){

    $this->db->where('id',$id);
    return $this->db->update($tbl,$data);


  }

  public function insert_map_download($data){

    $this->db->insert('maps_download',$data);
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


public function delete_map($id)
{
$this->db->where('id',$id);
$this->db->delete('maps_download');

}

public function e_data_map($id){

$this->db->select('*');
$this->db->where('id',$id);
$query=$this->db->get('maps_download');
return $query->row_array();

}

public function get_icon(){

 $this->db->select('*');
 $res=$this->db->get('map_marker');
 return $res->result_array();


}

//new model data added from here


  public function get_data_geojson($d,$tbl){
    $siz =!empty(sizeof($d['a']))?sizeof($d['a']):0;
    for($i=0; $siz >$i; $i++){
    //$this->db->select($d['a'][$i]['col'].' AS '.  $d['a'][$i]['name']);
    $this->db->select($d['a'][$i]['col'].' AS '. pg_escape_string(str_replace(".","",$d['a'][$i]['name'])));
    }
    $this->db->select('ST_AsGeoJSON(the_geom)');
    $this->db->order_by('id','ASC');
    $q=$this->db->get($tbl);
   return $q;
  }
  public function get_data_selected($d,$tbl){
    for($i=0; sizeof($d['a'])>$i; $i++){
    $this->db->select($d['a'][$i]['col'].' AS '. pg_escape_string(str_replace(".","",$d['a'][$i]['name'])));
    }
    $this->db->order_by('id','ASC');
    $q=$this->db->get($tbl);
   return $q;
  }

}//end
