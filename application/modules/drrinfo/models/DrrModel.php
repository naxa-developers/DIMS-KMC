<?php
class DrrModel extends CI_Model {
  public function get_all_data(){

    $this->db->select('*');
    $this->db->order_by('id','DESC');
    $q=$this->db->get('drrcategory');
    return $q->result_array();
  }
   
    public function add_drrinfo($table,$data){
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
    public function update_path_drrinformation($id,$data){

        $this->db->where('id',$id);
        $this->db->update('drrinformation',$data);

    }
    public function update_path($id,$data){

        $this->db->where('id',$id);
        $this->db->update('drrcategory',$data);

    }

    public function do_upload($filename,$name)
    {

        $field_name                     ='project_pic';
        $config['upload_path']          = './uploads/drrinfo/';
        $config['allowed_types']        = 'gif|jpg|jpeg|png';
        $config['max_size']             = 7000;
        $config['overwrite']            = TRUE;
        $config['file_name']           = $name;

        $this->load->library('upload', $config);
        // changes for image resize
           // $this->resize_image(GALLERY_PATH, $imgfile, 'thumb_'.$imgfile,157,117);
            $config['image_library'] = 'gd2';
            $config['source_image'] = './uploads/drrinfo/'.$name;
            $config['maintain_ratio'] = TRUE;
            $config['width'] = 100;
            $config['height'] = 100;
            $config['master_dim'] = 'width';
            $config['new_image'] = './uploads/drrinfo/'.'_thumb'.$name;
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
    public function do_upload_drrinfo($filename,$name)
    {
        $field_name                     ='image';
        $config['upload_path']          = './uploads/drrinformation/';
        $config['allowed_types']        = 'gif|jpg|jpeg|png';
        $config['max_size']             = 7000;
        $config['overwrite']            = TRUE;
        $config['file_name']           = $name;

        $this->load->library('upload', $config);

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
    public function delete($id,$tbl){
        $this->db->where('id',$id);
        return $this->db->delete($tbl);
    }

    public function get_edit_Data($id,$table){

        $this->db->select('*');
        $this->db->where('id',$id);
        $query=$this->db->get($table);
        return $query->row_array();


    }

    public function update_data($id,$data){

      $this->db->where('id',$id);
      $q=$this->db->update('drrcategory',$data);
      if($q){
        return 1;
      }else{
        return 0;
      }

    }
    public function get_drrlist($cond =false)
    {
        $this->db->select('d.id as id,d.short_desc,c.name as categoryname,cs.name as subcatname');
        $this->db->from('drrinformation as d');
        $this->db->join('drrcategory as c','c.id = d.category_id','LEFT');
        $this->db->join('drrsubcategory as cs','cs.id = d.subcat_id','LEFT');
        if($cond) {
          $this->db->where($cond); //change
        }
        $query = $this->db->get();
        if ($query->num_rows() > 0)
        {
            return $data=$query->result_array();
        } 
        return false;
    }
    public function file_do_upload($filename,$name)
    {
      $field_name                     ='uploadedfile';
      $config['upload_path']          = './uploads/drr_article/file/';
      $config['allowed_types']        = 'pdf|doc';
      $config['max_size']             = 7000;
      $config['overwrite']            = TRUE;
      $config['file_name']           = $name;
      $this->load->library('upload', $config);
      $this->upload->initialize($config);
      //var_dump($field_name); die;
      if ( ! $this->upload->do_upload($field_name))
      {
        $error = array('error' => $this->upload->display_errors());
        return $error;


      }
      else
      {


        return 1;

      }
    }
public function update_path_drrarticle($id,$data){

        $this->db->where('id',$id);
        $this->db->update('drr_article',$data);

    }
}
