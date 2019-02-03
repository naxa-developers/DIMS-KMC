<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends Admin_Controller {
	function __construct() {
		if(!$this->session->userdata('logged_in'))
		{
			redirect(ADMIN_LOGIN_PATH, 'refresh');exit;
		}
		$this->template->set_layout('admin/default');
		$this->load->model('Admin_dash_model');
		$this->load->dbforge();
		$this->load->model('Upload_model');
		$this->load->model('dictionary');
	}
public function index()
	{
		$this->body= array();
        $cat=$this->input->get('cat');
        $lang=$this->session->get_userdata('Language');
        if($lang['Language']=='en') {
            $emerg_lang='en';
        }else{
            $emerg_lang='nep'; 
        }
		if(isset($_POST['submit']))
	 	{
	    $id=$this->input->post('id');
	    $file_name = $_FILES['dictionary_image']['name'];
	    //$ext = pathinfo($file_name, PATHINFO_EXTENSION);
	    $img_upload=$this->dictionary->do_upload_image($file_name,$id);
	  
	    if($img_upload != ""){
	      $ext=$img_upload['upload_data']['file_ext'];
	      
	      $image_path=base_url() . 'uploads/terminologies/'.$id.$ext ;
	      $data=array(
	        'image'=>$image_path
	      );
	      $update=$this->dictionary->update_dictionary_image($id,$data,'dictionary_tbl');
	      $this->session->set_flashdata('msg','successfully Photo Changed');
	      // redirect('emergency_personnel_nep?cat='.$cat);
	                redirect(FOLDER_ADMIN.'/dictionary');
	    }else{
	      $code= strip_tags($img_upload['error']);
	      $this->session->set_flashdata('msg', $code);
	      // redirect('emergency_personnel?cat='.$cat);
	                redirect(FOLDER_ADMIN.'/dictionary');
	    }
	  }else{ 
	        $this->data['data'] = $this->general->get_tbl_data_result('id,word,meaning,comment,language,image','dictionary_tbl',array('language'=>$emerg_lang),'word');
	        //admin check
	        //echo "<pre>"; print_r($this->data['data']);die;
	        $admin_type=$this->session->userdata('user_type');
	        $this->data['admin']=$admin_type;
	        //admin check
	        $this->template
	                        ->enable_parser(FALSE)
	                        ->build('admin/index',$this->data);
	}
}
	
	public function edit()
	{	
		$this->data =array();
		$id = base64_decode($this->input->get('id'));
		if(isset($_POST['submit'])){
            unset($_POST['submit']);
            $update=$this->dictionary->update_dictionary();
            if($update){
                $this->session->set_flashdata('msg','Updated Dictionary Data successfully');
                redirect(FOLDER_ADMIN.'/dictionary');
            }
        }else{
			$this->data['dictionary'] = $this->general->get_tbl_data_result('id,word,meaning,comment,language,image','dictionary_tbl',array('id'=>$id));
			//echo "<pre>";print_r($this->data['dictionary']);die; 
		}
			$this->template
                            ->enable_parser(FALSE)
                            ->build('admin/edit_dictionary',$this->data);
	}
	public function delete(){
	    $tbl="dictionary_tbl";
	    $id = base64_decode($this->input->get('id'));
	    $delete=$this->dictionary->delete($id,$tbl);
	    if($delete){
      		$this->session->set_flashdata('msg','Successfully Deleted');
	        redirect(FOLDER_ADMIN.'/dictionary');
    	}
  	}


 
}