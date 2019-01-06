<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');

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
	}
	public function index()
	{
		# code...
	}
	public function  emergency_contact_nep(){
		$this->body= array();
        $cat=$this->input->get('cat');
        $lang=$this->session->get_userdata('Language');
        if($lang['Language']=='en') {
            $emerg_lang='en';
        }else{
            $emerg_lang='nep'; 
        }
        $name=$this->input->get('name');
        $this->body['data'] = $this->general->get_tbl_data_result('*','emergency_contact',array('category'=>$cat,'language'=>$emerg_lang));
        $this->body['cat']=$cat;
        $this->body['name']=$name;
        //admin check
        $admin_type=$this->session->userdata('user_type');
        $this->body['admin']=$admin_type;
        //admin check
        $this->template
                        ->enable_parser(FALSE)
                        ->build('admin/emergency_contact_tbl_nep',$this->body);
    }
    public function edit_emerg() {
        $this->body = array();
        $cat=$this->input->get('cat');
        $tbl=$this->input->get('tbl');
        $name=$this->input->get('name');
        $lang=$this->session->get_userdata('Language');
        //print_r($lang);die;
        //$lang=$this->session->get_userdata('emerg_language');
        if(isset($_POST['submit'])){
            unset($_POST['submit']);
            $update=$this->Upload_model->update_emerg($this->input->post('id'),$_POST,$tbl);
            if($update){
                $this->session->set_flashdata('msg','Updated successfully');
                redirect(FOLDER_ADMIN.'/contact/emergency_contact_nep?cat='.$cat);
            }
        }else{
            $this->body['e_data']=$this->Upload_model->e_data(base64_decode($this->input->get('id')));
            //echo $this->db->last_query();die;
            //echo "<pre>"; print_r($this->body['e_data']);die;
            //admin check
            $admin_type=$this->session->userdata('user_type');

            $this->body['admin']=$admin_type;
            //admin check
            // $this->load->view('admin/header',$this->body);
            // $this->load->view('admin/edit_emerg',$this->body);
            // $this->load->view('admin/footer');
            $this->template
                            ->enable_parser(FALSE)
                            ->build('admin/edit_emerg',$this->body);
        }


    }
  	public function emergency_personnel_nep() {
    	$this->body= array();
      	//$this->session->set_userdata('emerg_language','nep');
      	$cat=$this->input->get('cat');
     	//echo $cat ;
      	if(isset($_POST['submit']))
      	{
            $id=$this->input->post('id');
            $file_name = $_FILES['emerg_pic']['name'];
        	//$ext = pathinfo($file_name, PATHINFO_EXTENSION);
            $img_upload=$this->Upload_model->do_upload_emerg($file_name,$id);
            if($img_upload != ""){
              $ext=$img_upload['upload_data']['file_ext'];
              $image_path=base_url() . 'uploads/emergency_personnel/'.$id.$ext ;
              $data=array(
                'photo'=>$image_path
              );
              $update=$this->Upload_model->update_emerg($id,$data,'emergency_personnel');
              $this->session->set_flashdata('msg','successfully Photo Changed');
              redirect(FOLDER_ADMIN.'/contact/emergency_personnel_nep?cat='.$cat);
            }else{
                $code= strip_tags($img_upload['error']);
                $this->session->set_flashdata('msg', $code);
                redirect(FOLDER_ADMIN.'/contact/emergency_personnel_nep?cat='.$cat);
            }
        }else{
    	    //$this->body['data']=$this->Upload_model->get_emergency_per_nep($cat);
            $lang=$this->session->get_userdata('Language');
            if($lang['Language']=='en') {
                $emerg_lang='en';
            }else{
                $emerg_lang='nep'; 
            }
            $this->body['data'] = $this->general->get_tbl_data_result('*','emergency_personnel',array('category'=>$cat,'language'=>$emerg_lang));
    	    $this->body['cat']=$cat;
    	    $name=$this->input->get('name');
    	    $this->body['name']=$name;
    	    //admin check
    	    $admin_type=$this->session->userdata('user_type');
    	    $this->body['admin']=$admin_type;
    	    //admin check
    	    $this->template
	                        ->enable_parser(FALSE)
	                        ->build('admin/emergency_personnel_tbl_nep',$this->body);
  		}
	}
    public function emergency_personnel()
    {
        $this->body = array();
        $this->session->set_userdata('emerg_language','en');
        $cat=$this->input->get('cat');
        //echo $cat ;
        if(isset($_POST['submit']))
        {
            $id=$this->input->post('id');
            $file_name = $_FILES['emerg_pic']['name'];
            //$ext = pathinfo($file_name, PATHINFO_EXTENSION);
            $img_upload=$this->Upload_model->do_upload_emerg($file_name,$id);
            if($img_upload != ""){
                $ext=$img_upload['upload_data']['file_ext'];
                $image_path=base_url() . 'uploads/emergency_personnel/'.$id.$ext ;
                    $data=array(
                        'photo'=>$image_path
                    );
                $update=$this->Upload_model->update_emerg($id,$data,'emergency_personnel');
                $this->session->set_flashdata('msg','successfully Photo Changed');
                redirect(FOLDER_ADMIN.'/contact/emergency_personnel?cat='.$cat);
            }else{
                $code= strip_tags($img_upload['error']);
                $this->session->set_flashdata('msg', $code);
                redirect(FOLDER_ADMIN.'/contact/emergency_personnel?cat='.$cat);
            }
        }else{
            $this->body['data']=$this->Upload_model->get_emergency_per($cat);
            $this->body['cat']=$cat;
            $name=$this->input->get('name');
            $this->body['name']=$name;

            //admin check
            $admin_type=$this->session->userdata('user_type');

            $this->body['admin']=$admin_type;
            //admin check
            $this->template
                        ->enable_parser(FALSE)
                        ->build('admin/emergency_personnel_tbl',$this->body);
          // $this->load->view('admin/header',$this->body);
          // $this->load->view('admin/emergency_personnel_tbl',$this->body);
          // $this->load->view('admin/footer');
        }
    }
    public function edit_emergency_personnel(){
        $this->body = array();
        $cat=$this->input->get('cat');
        $tbl=$this->input->get('tbl');
        $lang=$this->session->get_userdata('emerg_language');
        if(isset($_POST['submit'])){
            unset($_POST['submit']);
            $update=$this->Upload_model->update_emerg($this->input->post('id'),$_POST,$tbl);
            if($update){
                $this->session->set_flashdata('msg','Updated successfully');
                redirect(FOLDER_ADMIN.'/contact/emergency_personnel_nep?cat='.$cat);    
            }
        }else{
            $this->body['e_data']=$this->Upload_model->e_data_personnel(base64_decode($this->input->get('id')));
            //echo base64_decode($this->input->get('id'));
            // var_dump($this->body['e_data']);

            //admin check
            $admin_type=$this->session->userdata('user_type');

            $this->body['admin']=$admin_type;
            //admin check
            $this->template
                        ->enable_parser(FALSE)
                        ->build('admin/edit_emerg_personnel',$this->body);
            // $this->load->view('admin/header',$this->body);
            // $this->load->view('admin/edit_emerg_personnel',$this->body);
            // $this->load->view('admin/footer');
        }
    }

}