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
		$this->load->model('About_model');
		$this->load->dbforge();
		// $this->load->model('About_model');
	}
	public function index()
	{
		# code...
	}
	public function view_about(){
	$this->body=array();
  	$this->body['data']=$this->About_model->get_about();
  	//admin check
  	$admin_type=$this->session->userdata('user_type');
  	$this->body['admin']=$admin_type;
  	//admin check
  	$this->template
                        ->enable_parser(FALSE)
                        ->build('admin/about',$this->body);
}
public function edit_about()
{
	$this->body=array();
	  $id=base64_decode($this->input->get('id'));
	  if(isset($_POST['submit'])){
	    if( $_FILES['proj_pic']['name']==''){
	    $data= array(
	      'title'=>$this->input->post('title'),
	      'summary'=>$this->input->post('summary'),
	    );
	      $update=$this->About_model->update_data($id,$data);
	      if($update==1){
	    $this->session->set_flashdata('msg','Data successfully Updated');
          	redirect(FOLDER_ADMIN.'/about/view_about');
	      }
	    }else{
	      $file_name = $_FILES['proj_pic']['name'];
	      $ext = pathinfo($file_name, PATHINFO_EXTENSION);
	      $data=array(
	        'title'=>$this->input->post('title'),
	        'summary'=>$this->input->post('summary'),
	      );
	      $insert=$this->About_model->update_data($id,$data);
	      if($insert==1){
	      $img_upload=$this->About_model->do_upload($file_name,$id);
	        if($img_upload==1){
	        $image_path=base_url() . 'uploads/about/'.$id.'.'.$ext ;
	        $img=array(
	          'photo'=>$image_path,
	        );
	      $update_path=$this->About_model->update_data($id,$img);
	          $this->session->set_flashdata('msg','Publication successfully Updated');
          	redirect(FOLDER_ADMIN.'/about/view_about');
	        }else{
	          $code= strip_tags($img_upload['error']);
	          $this->session->set_flashdata('msg', $code);
          	redirect(FOLDER_ADMIN.'/about/edit_about');
	        }
	      }
	  }
	  }else{
	    $this->body['edit_data']=$this->About_model->get_edit_data(base64_decode($this->input->get('id')),'about');
	    //admin check
	    $admin_type=$this->session->userdata('user_type');
	    $this->body['admin']=$admin_type;
	    //admin check
	    $this->template
                        ->enable_parser(FALSE)
                        ->build('admin/edit_about',$this->body);
	  }

}
}