<?php
class Login_model extends CI_Model {





  public function login($login_condition){



    $result_set = $this->db->get_where("users",$login_condition);

    if($result_set->num_rows()>0)
    {
      return $result_set->row_array();
    }
    else
    {
      return FALSE;
    }



  }

  public function validate_user($password,$hash){

    if(password_verify($password, $hash))
    {
      return TRUE;
    } else{
      return FALSE;
    }

  }








}
