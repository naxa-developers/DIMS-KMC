<?php
class Site_model extends CI_Model {

    public function site_setting($id){

        $this->db->select('*');
        $this->db->where('id',$id);
        $q=$this->db->get('site_setting');
        return $q->row_array();


    }

    public function update_data($data,$id){

    $this->db->where('id',$id);
    $res=$this->db->update('site_setting',$data);
    return $res;

    }


    public function do_upload($filename,$name)
    {

      $field_name                     = $name;
      $config['upload_path']          = './uploads/site_setting/';
      $config['allowed_types']        = 'png';
      $config['max_size']             = 7000;
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
    public function do_upload_cover($filename,$name)
    {

      $field_name                     = $name;
      $config['upload_path']          = './uploads/site_setting/';
      $config['allowed_types']        = 'jpg';
      $config['max_size']             = 7000;
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
    public function saveHomePageData($table,$language)
    {
        $id=$this->input->post('id');
        $pdata = $this->input->post();
        $pdata['language'] = $language;
        unset($pdata['id']);
        if(!empty($id))
        {
            if($this->db->update($table,$pdata,array('id'=>$id)))
            {
                return $id;
            }
        }else{
            $this->db->insert($table,$pdata);
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
    public function insert_update_Banner($language) { 
        $postdata=$this->input->post();
        $bnr_id=$this->input->post('id');
        if($bnr_id)
        {
            $old_banner=$this->input->post('old_banner');
            unset($postdata['old_banner']);
            //pp($_FILES);
            $imgfile=$this->doupload('image');
            if($imgfile)
            {
              @unlink('uploads/project'.'/'.$old_banner);
            }
            else
            {
                $imgfile=$old_banner;
            }
            $postdata['image']=$imgfile;
            try {
               if($this->db->update('homepageslider',$postdata,array('id'=>$bnr_id)))
                {
                    return $this->db->affected_rows();
               }
            } catch (Exception $e) {
                throw $e;
            }
        }
        else
        {
            if(!empty($_FILES))
            {
                $imgfile=$this->doupload('image');
            }
            else
            {
                $imgfile='';
            }
            $postdata['image']=$imgfile;
            $postdata['language']=$language;
            unset($postdata['imgpath']);
            unset($postdata['id']);
            try {
               if($this->db->insert('homepageslider',$postdata))
               {
                    return $this->db->insert_id();
               }
            } catch (Exception $e) {
                throw $e;
            }
        }
    }
    public function doupload($file) {
      $config['upload_path'] = './'.'uploads/project';
      $config['allowed_types'] = 'png|jpg|gif|jpeg';
      $config['overwrite'] = FALSE;
      $config['remove_spaces'] = TRUE;    
      $config['max_size'] = '2000000';
      $config['max_width'] = '2400';
      $config['max_height'] = '1280';
      $this->upload->initialize($config);
      $this->load->library('upload', $config);
      $this->upload->do_upload($file);
      $data = $this->upload->data();
      $name_array = $data['file_name'];   
      return $name_array;
    }
    public function deleteslider($id,$tbl){
        $this->db->where('id',$id);
        return $this->db->delete($tbl);
    }

}
