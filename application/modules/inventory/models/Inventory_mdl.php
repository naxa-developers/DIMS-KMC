<?php
class Inventory_mdl extends CI_Model {
	public function add_inventory($table,$data){
        $id=$this->input->post('id');
        if(!empty($id))
        {
            if($this->db->update($table,$data,array('id'=>$id)))
            {
                return $id;
            }
        }else{
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
    }
    public function delete($id,$tbl){
        $this->db->where('id',$id);
        return $this->db->delete($tbl);
    }
    public function count_oinventory_data($lang)
    {
        $this->db->select('count(inv.id) as countdata,"cat".*');
        $this->db->from('inventory as inv');
        $this->db->join('inventorycat as cat','cat.id=inv.category','LEFT');
        if($lang){
            $this->db->where('cat.language',$lang);
        }
        $this->db->group_by('inv.category,cat.id');
        $query = $this->db->get();
        //echo $this->db->last_query();die;
        if ($query->num_rows() > 0)
        {
            return $data=$query->result_array();
        } 
        return false;
    }
}