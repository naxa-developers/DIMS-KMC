<?php
class Organisationlogin_mdl extends CI_Model {

    public function get_all_data(){
        $this->db->select('*');
        $this->db->order_by('id','DESC');
        $q=$this->db->get('organisation');
        return $q->result_array();
    }
	public function add_organisationuser($table,$data){
		$this->db->insert($table,$data);
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
	public function loginvalid()
	{
		$uname = $this->input->post('username',TRUE);
		$pass = $this->input->post('password',TRUE);
		$this->db->select('*');
		$this->db->from('organisation');
		$this->db->where('username',$this->input->post('username',TRUE));
		$this->db->or_where('email',$this->input->post('username',TRUE));
		$query = $this->db->get();
		if($query->num_rows()>0)
		{
			$record = $query->row();
			if($record->type==2)
			{
				if((strtolower($record->username)==strtolower($uname) ||strtolower($record->email)==strtolower($uname)) && $record->password==$this->general->hash_password($pass,$record->salt))
				{ 
					$this->session->set_userdata('ORGUSER_ID', $record->id);
					return "success";
				}
				else
				{
					return 'Invalid Username or Password ';	
				}
			}
			else
			{
				return 'Invalid Username or Password';	
			}
		}else{
			return 'Invalid Username or Password';
		}
	}
}
