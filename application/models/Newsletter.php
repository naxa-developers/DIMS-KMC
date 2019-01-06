<?php
class Newsletter extends CI_Model {




public function send_mail($message,$mail_subject)
{
 $this->load->library('email');

 $this->db->select('*');
 $q=$this->db->get('newsletter');
 $mail=$q->result_array();

 foreach($mail as $m){
 $u_email=$m['email'];

 $m='test';

  $config['protocol']='smtp';
  $config['smtp_host']='ssl://smtp.googlemail.com';
  $config['smtp_port']='465';
  $config['smtp_timeout']='30';
  $config['smtp_user']='warhead2556@gmail.com';
  $config['smtp_pass']='Jupiter255678...';
  $config['charset']='utf-8';
  $config['newline']="\r\n";
  $config['wordwrap'] = TRUE;
  $config['mailtype'] = 'html';
  $this->email->initialize($config);
  //$this->load->library('email', $config);
  //$this->email->set_mailtype("html");
  $this->email->from('VSO Website', 'VSO');
  $this->email->to($u_email);
  $this->email->subject($mail_subject);

  $this->email->message($message);

  	if($this->email->send())
       {
        return 1;

       }else{

         return 0;


       }
 }

}


public function register($data)
{
  $this->db->insert('newsletter',$data);
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


//publication part



public function get_pub_all($tbl) {
 $this->db->select('*');
 $res=$this->db->get($tbl);
 return $res->result_array();


}

public function  get_pub_filter($cat,$tbl){
  $this->db->select('*');
  $this->db->where('category',$cat);
  $res=$this->db->get($tbl);
  return $res->result_array();



}

//end
}
