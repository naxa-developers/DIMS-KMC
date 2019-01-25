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


 public function register($data){

  $this->db->insert('mob_user',$data);

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





}//end
