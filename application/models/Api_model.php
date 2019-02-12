<?php
Class Api_model extends CI_Model
{
  function __construct()
  {
    parent::__construct();
  }




  public function getuser()
 {
 $this->db->select('email');
 $this->db->distinct('email');
   $query = $this->db->get('mob_user');
   $array = array();

   foreach($query->result() as $row)
   {
       $array[] = $row->email; // add each user id to the array
   }

   return $array;
 }

 public function get_mobile_no(){

   $this->db->select('mobile_no');
   $this->db->distinct('mobile_no');
     $query = $this->db->get('mob_user');
     $array = array();

     foreach($query->result() as $row)
     {
         $array[] = $row->mobile_no; // add each user id to the array
     }

     return $array;



 }


 public function register($tbl,$data){

  $this->db->insert($tbl,$data);

    if ($this->db->affected_rows() > 0)
   {
    return TRUE;
   }
   else
   {
     return FALSE;
   }

 }

 public function user_detail($email){
$this->db->select('*');
$this->db->where('email',$email);
 $query = $this->db->get('mob_user');
 return $query->row_array();


 }

 public function get_user_detail($num){

     $this->db->select('mobile_no,full_name,image_url,token');
   $this->db->where('mobile_no',$num);
    $query = $this->db->get('mob_user');
    return $query->row_array();

 }

 public function my_circle_detail($email){
 $this->db->select('my_circle');
 $this->db->where('email',$email);
 $query = $this->db->get('mob_user');
 return $query->row_array();


 }

public function update_circle($email,$data){

  $this->db->where('email',$email);
  $q=$this->db->update('mob_user',$data);
  return $q;
}

public function get_report(){
$this->db->select('*');
$this->db->where('verify','0');
$query = $this->db->get('incident_report');
return $query->result_array();


}


public function get_drr_info(){

  $this->db->select('d.id as id,d.short_desc,d.description as desc,d.image as photo,c.name as categoryname,cs.name as subcatname');
  $this->db->from('drrinformation as d');
  $this->db->join('drrcategory as c','c.id = d.category_id','LEFT');
  $this->db->join('drrsubcategory as cs','cs.id = d.subcat_id','LEFT');

  $query = $this->db->get();
  if ($query->num_rows() > 0)
  {
      return $data=$query->result_array();
  }
  return false;
}

public function get_publication(){
  $this->db->select('p.type,p.id,p.title,p.summary,p.photo,p.file,p.videolink,pc.name');
  $this->db->from('publication as p');
  $this->db->join('publicationcat as pc','pc.id = p.category','LEFT');
  $query = $this->db->get();
  return $query->result_array();


}

public function get_contact(){

  $this->db->select('*');
  //$this->db->where('verify','0');
  $query = $this->db->get('contact_categories');
  return $query->result_array();

}

public function get_inventory(){
  $this->db->select('in.*,inc.name as category_name,inc.slug as category_slug,inc.image as category_image,insc.name as subcat_name,insc.slug as sub_cat_slug');
  $this->db->from('inventory as in');
  $this->db->join('inventorycategory as inc','inc.id=in.category','LEFT');
  $this->db->join('inventorycat as insc','insc.id=in.subcat','LEFT');
  $query = $this->db->get();
  return $query->result_array();


}

}//end
