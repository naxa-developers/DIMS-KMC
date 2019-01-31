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
    // public function count_oinventory_data($lang,$cond=false)
    // {
    //     $this->db->select('count(inv.id) as countdata,"cat".*');
    //     $this->db->from('inventory as inv');
    //     $this->db->join('inventorycategory as cat','cat.id=inv.subcat','LEFT');
    //     //$this->db->join('inventorycat as cat','cat.id=inv.category','LEFT');
    //     if($lang){
    //         $this->db->where('cat.language',$lang);
    //     }
        
    //     $this->db->group_by('inv.subcat,cat.id');
    //     $query = $this->db->get();
    //     //echo $this->db->last_query();die;
    //     if ($query->num_rows() > 0)
    //     {
    //         return $data=$query->result_array();
    //     } 
    //     return false;
    // }
    public function count_oinventory_data($lang,$cond=false)
    {
        $this->db->select('count(inv.id) as countdata,"cat".*');
        $this->db->from('inventory as inv');
        $this->db->join('inventorycat as cat','cat.id=inv.category','LEFT');
        if($lang){
            $this->db->where('cat.language',$lang);
        }
        if($cond) {
            $this->db->where($cond);
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
    public function add_inventory_cat($table, $data)
    {
        $id=$this->input->post('id');
        if($id)
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
    public function update_path($id,$data){

        $this->db->where('id',$id);
        $this->db->update('inventorycategory',$data);

    }
    public function do_upload($filename,$name)
    {

        $field_name                     ='project_pic';
        $config['upload_path']          = './uploads/inventory_cat/';
        $config['allowed_types']        = 'gif|jpg|jpeg|png';
        $config['max_size']             = 7000;
        $config['overwrite']            = TRUE;
        $config['file_name']           = $name;

        $this->load->library('upload', $config);
        // changes for image resize
           // $this->resize_image(GALLERY_PATH, $imgfile, 'thumb_'.$imgfile,157,117);
            $config['image_library'] = 'gd2';
            $config['source_image'] = './uploads/inventory_cat/'.$name;
            $config['maintain_ratio'] = TRUE;
            $config['width'] = 100;
            $config['height'] = 100;
            $config['master_dim'] = 'width';
            $config['new_image'] = './uploads/inventory_cat/'.'_thumb'.$name;
            //print_r($name);die;
            $this->load->library('image_lib');
            $this->image_lib->initialize($config);
            $resize = $this->image_lib->resize();
        // changes for image resize
        if ( ! $this->upload->do_upload($field_name))
        {
          $error = array('error' => $this->upload->display_errors());
          return $error;


        }
        else
        {


          $data = array('upload_data' => $this->upload->data());
            $data['status']=1;
      // echo "hello"; print_r($data); die;
          return $data;


        }
    }
        

}