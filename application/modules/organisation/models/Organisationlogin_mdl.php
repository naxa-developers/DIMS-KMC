<?php
class Organisationlogin_mdl extends CI_Model {

    public function get_all_data(){
        $this->db->select('*');
        $this->db->order_by('id','DESC');
        $q=$this->db->get('organisation');
        return $q->result_array();
    }
    public function insert_project($table,$language){
    	$pdata = $this->input->post();
    	$pdata['organisationuserid'] = $this->session->userdata('ORGUSER_ID');
    	$pdata['language'] = $language;
    	$ward = $this->input->post('ward');
    	$title=$this->input->post('title');
    	$page_slug_new = strtolower (preg_replace('/[[:space:]]+/', '-', $title));
    	$pdata['slug']=$page_slug_new;
	    $wardid = "";
		if(!empty($ward)):
			foreach($ward as $dest){
				$wardid.=$dest.",";
			}
		endif;
		$wardid = rtrim($wardid, ',');
		$pdata['ward'] = $wardid; 
    	//echo "<pre>"; print_r($pdata);die;
        $id=$this->input->post('id');
        if($id)
        {
            if($this->db->update($table,$pdata,array('id'=>$id)))
            {
                return $id;
            }
        }else{
        	 unset($pdata['id']);
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
	public function organisationinsert($table,$id,$language)
    {
        $error = true;
        $loop = 0;
        $imagepath = $this->input->post('imgpath');
        $imagecontent=$this->input->post('imagedesc');
        $filedesc = $this->input->post('filedesc');
        $filecontent=$this->input->post('filedescpath');
        foreach ($filedesc as $key => $value) {
            $_FILES['gallery']['name'] = $_FILES['imgpath']['name'][$key];
            $_FILES['gallery']['type'] = $_FILES['imgpath']['type'][$key];
            $_FILES['gallery']['tmp_name'] = $_FILES['imgpath']['tmp_name'][$key];
            $_FILES['gallery']['error'] = $_FILES['imgpath']['error'][$key];
            $_FILES['gallery']['size'] = $_FILES['imgpath']['size'][$key];
            //for file 
            $_FILES['projectfile']['name'] = $_FILES['filedescpath']['name'][$key];
            $_FILES['projectfile']['type'] = $_FILES['filedescpath']['type'][$key];
            $_FILES['projectfile']['tmp_name'] = $_FILES['filedescpath']['tmp_name'][$key];
            $_FILES['projectfile']['error'] = $_FILES['filedescpath']['error'][$key];
            $_FILES['projectfile']['size'] = $_FILES['filedescpath']['size'][$key];
            if(!empty($_FILES))
            {
                $new_image_name = $_FILES['imgpath']['name'][$key];
                $imgfile=$this->doupload('gallery');
                //$this->resize_image('uploads/project', $imgfile, 'thumb_'.$imgfile,157,117); //55,74
                $pdffile=$this->douploadpdf('projectfile');
            }
            else
            {
                $imgfile='';
                $pdffile='';
            }
            $dataArray[]= array(
                'imagedesc'=>$imagecontent[$key],
                'imgpath'=>$imgfile,
                'filedesc'=>$filedesc[$key],
                'filedescpath'=>$pdffile,
                'projectid'=>$id,
                'organisationid'=>$this->session->userdata('ORGUSER_ID'),
                'language'=>$language
            );
        }
        //echo "<pre>";print_r($dataArray);die;
	    if(!empty($dataArray))
	    {
	        $this->db->insert_batch($table, $dataArray);
	        $rowaffected=$this->db->affected_rows();
	        if($rowaffected)
	        {
	          return $rowaffected;
	        }
	        return false;
	    }
     	return false;
  	}
  	public function organisationupdate($tbl)
  	{	
  		$id = $this->input->post('id');
  		$ptdata = $this->input->post();
  		$oldfiledescpath=$this->input->post('oldfiledescpath');
  		$old_image=$this->input->post('oldimgpath');
        unset($ptdata['id']);
        unset($ptdata['oldimgpath']);
		unset($ptdata['oldfiledescpath']);
        $imgfile=$this->doupload('imgpath');
        $pdffile=$this->douploadpdf('filedescpath');
        if($imgfile)
        {
          @unlink(PROJECT_PATH.$old_image);
          //print_r(PROJECT_PATH.$old_image);
        }
        else
        {
            $imgfile=$old_image;
        }
        if($pdffile)
        {
          @unlink(PROJECT_PATH.$oldfiledescpath);
          //print_r(PROJECT_PATH.$oldfiledescpath);
        }
        else
        {
        	
            $pdffile=$oldfiledescpath;
        }
        //  echo "<pre>";print_r($imgfile);print_r($pdffile);
        $ptdata['imgpath']=$imgfile;
        $ptdata['filedescpath']=$pdffile;
         //echo "<pre>";print_r($ptdata);die;
        try {
           if($this->db->update('organisationprogress',$ptdata,array('id'=>$id)))
            {
                return $this->db->affected_rows();
           }
        } catch (Exception $e) {
            throw $e;
        }
  	}
  	public function doupload($file) {
        $config['upload_path'] = './'.'uploads/project';
        $config['allowed_types'] = 'png|jpg|gif|jpeg ';
        $config['encrypt_name'] = TRUE;
        $config['remove_spaces'] = TRUE;    
        $config['max_size'] = '2000000';
        $config['max_width'] = '2400';
        $config['max_height'] = '1280';
        $this->upload->initialize($config);
        $this->load->library('upload', $config);
        $this->upload->do_upload($file);
        $data = $this->upload->data();
        $name_array = $data['file_name'];
        //print_r($name_array);die;
        return $name_array;
    }
    public function douploadpdf($file) {
        $config['upload_path'] = './'.'uploads/project';
        $config['allowed_types'] = 'pdf|doc|docx|jpeg';
        $config['encrypt_name'] = TRUE;
        $config['remove_spaces'] = TRUE;    
        $config['max_size'] = '2000000';
        $this->upload->initialize($config);
        $this->load->library('upload', $config);
        $this->upload->do_upload($file);
        $data = $this->upload->data();
        $name_array = $data['file_name'];
        return $name_array;
    }
    public function resize_image($loc,$source_image,$new_image,$width,$height)
    {
        $config['image_library'] = 'gd2';
        $config['source_image'] = './'.$loc.$source_image;
        $config['maintain_ratio'] = TRUE;
        $config['width'] = $width;
        $config['height'] = $height;
        $config['master_dim'] = 'width';
        $config['new_image'] = './'.$loc.$new_image;  
        $this->load->library('image_lib');
        $this->image_lib->initialize($config);
        $resize = $this->image_lib->resize();
        print_r($resize);die;
    }
}
