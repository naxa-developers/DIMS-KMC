<?php
class Publication_model extends CI_Model {



  public function get_all_data(){

        $this->db->select('*');
        $this->db->order_by('id','DESC');
        $q=$this->db->get('publication');
        return $q->result_array();
  }

public function add_publication($table,$data){

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

public function update_path($id,$data){

  $this->db->where('id',$id);
  $this->db->update('publication',$data);

}

public function do_upload($filename,$name)
{

  $field_name                     ='proj_pic';
  $config['upload_path']          = './uploads/publication/';
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

    return $data;

  }
}

    public function file_do_uploa_audiod($filename,$name)
    {
        $configVideo['upload_path']          = './uploads/publication/file/';
          $configVideo['max_size'] = '10240';
          $configVideo['allowed_types'] = 'avi|flv|wmv|mp3|mpeg|mpg|mp4|mpe|qt|mov';
          $configVideo['overwrite'] = FALSE;
          $configVideo['remove_spaces'] = TRUE;
          //$video_name = $date.$_FILES['audio']['name'];
          $configVideo['file_name'] = $filename;

          $this->load->library('upload', $configVideo);
          $this->upload->initialize($configVideo);
          $data = $this->upload->data();
          //print_r($data); die;
          $pathp = $data['full_path'];
          // if (!$this->upload->do_upload('audio')) {
          //     echo $this->upload->display_errors();
          // } else {
          //     $videoDetails = $this->upload->data();
          //   return 1;
          // }


          // $field_name                     ='uploadedfile';
          // $configVideo['upload_path']          = './uploads/publication/file/';
          // $configVideo['allowed_types']        = 'avi|flv|wmv|mp3|mpeg|mpg|mp4|mpe|qt|mov';
          // $configVideo['max_size']             = '202400';
          // $configVideo['overwrite']            = TRUE;
          // $configVideo['file_name']           = $name;

          // $this->load->library('upload', $configVideo);
          // //echo $this->display_errors(); die;
          // $this->upload->initialize($configVideo);

          if ( ! $this->upload->do_upload('audio'))
          {
            $error = array('error' => $this->upload->display_errors());
            return $error;


          }
          else
          {


           return $pathp;

    }
}


public function file_do_upload($filename,$name)
{

  $field_name                     ='uploadedfile';
  $config['upload_path']          = './uploads/publication/file/';
  $config['allowed_types']        = 'pdf|doc|docx';
  $config['max_size']             = 7000;
  $config['overwrite']            = TRUE;
  $config['file_name']           = $name;

  $this->load->library('upload', $config);
  $this->upload->initialize($config);

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

public function delete_data($id,$tablename){


  $this->db->where('id',$id);
  $this->db->delete($tablename);
}

public function get_edit_Data($id,$table){

$this->db->select('*');
$this->db->where('id',$id);
$query=$this->db->get($table);
return $query->row_array();


}

public function update_data($id,$data){

  $this->db->where('id',$id);
  $q=$this->db->update('publication',$data);
  if($q){
    return 1;
  }else{
    return 0;
  }

}
  public function add_publiactioncat($table,$data){
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
    public function get_publication()
    {  
        $keywords =  $this->input->post('keywords');
        $category =  $this->input->post('category');
        $type =  $this->input->post('type');
        $subcat =  $this->input->post('subcat');
        $this->db->select('p.type,p.id,p.title,p.summary,p.photo,p.file,p.videolink,pc.name');
        $this->db->from('publication as p');
        $this->db->join('publicationcat as pc','pc.id = p.category','LEFT');
        if($keywords)
        {
          $sql = "p.title LIKE '%" . $keywords ."%' OR p.type LIKE '%" . $keywords ."%' OR p.summary LIKE '%". $keywords."%'";
          $this->db->where($sql);
        }
        if($category)
        {
            $this->db->where('p.category',$category);
        }
        if($subcat)
        {
            $this->db->where('p.subcat',$subcat);
        }
        if($type)
        {
            $this->db->where('p.type',$type);
        }
        $query = $this->db->get();
        //echo $this->db->last_query();die;
        if ($query->num_rows() > 0)
        {
            return $data=$query->result_array();
        } 
        return false;
    }
    public function get_publication_details()
    {  //test
        $id = base64_decode($this->input->get('id'));
        $this->db->select('p.type,p.id,p.title,p.summary,p.photo,p.file,p.videolink,pc.name');
        $this->db->from('publication as p');
        $this->db->join('publicationcat as pc','pc.id = p.category','LEFT');
        if($id) {
            $this->db->where('p.id',$id);
        }
        $query = $this->db->get();
        // echo $this->db->last_query();die;
        if ($query->num_rows() > 0)
        {
            return $data=$query->result_array();
        } 
        return false;
    }
}
