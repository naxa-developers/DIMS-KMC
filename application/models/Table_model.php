<?php
class Table_model extends CI_Model {






 public function create_table($tbl){  //create table

	if( $this->db->table_exists($tbl) == FALSE ){

                $query = "CREATE TABLE $tbl (

				id bigserial primary key,
				cat_name varchar(255)  NULL,//
				cat_photo varchar(255)  NULL,

				cat_table varchar(255)  NULL



				)";

               return $this->db->query($query);

            }else{

				return 'table exist';

			}



}

public function get_tables_data($tbl){ //get data of table

  $this->db->select('*');
  $this->db->order_by('id','ASC');
  $q=$this->db->get($tbl);
  return $q;


}

public function get_as($d,$tbl){

  foreach($d as $v){
  $this->db->select($v['eng_lang'].' AS '.pg_escape_string(preg_replace('/[^A-Za-z0-9\-]/', ' ', $v['nepali_lang'])));
  //$this->db->select($v['eng_lang'].' AS '. $v['nepali_lang']);
  }

  $this->db->order_by('id','ASC');
  $q=$this->db->get($tbl);
  return $q;


}



public function get_asjson($d,$tbl){

  foreach($d as $v){
  $this->db->select($v['eng_lang'].' AS '.pg_escape_string(preg_replace('/[^A-Za-z0-9\-]/', ' ', $v['nepali_lang'])));
  //$this->db->select($v['eng_lang'].' AS '. $v['nepali_lang']);
  }
    $this->db->select('ST_AsGeoJSON(the_geom)');
  $this->db->order_by('id','ASC');
  $q=$this->db->get($tbl);
  return $q;


}

public function get_lang($tbl){

  $this->db->select('*');
  $this->db->where('tbl_name',$tbl);
  $q=$this->db->get('tbl_lang');
  return $q->result_array();
}

 public function table_copy($p,$f,$f_n,$tbl){ //import table

	/* $query="COPY survey(name_of_surveyor,name_of_district,name_of_municipality,ward_no,address,latitude,longitude)
   FROM 'C:\Users\munchen\Downloads\home_survey.csv' DELIMITER ',' CSV HEADER"; */

   $query="COPY $tbl($f_n)FROM '$p' DELIMITER ',' CSV HEADER";
	 return $this->db->query($query);

}

public function get_max_id($tbl){

  $this->db->select_max('id');
  $query = $this->db->get($tbl);
   return $query->row_array();



}
 public function update_cat($id,$data,$tbl){

   $this->db->where('id >',$id);
   $u=$this->db->update($tbl,$data);
   return $u;

 }

}//end
