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
		$this->load->model('Table_model');
		$this->load->model('DrrModel');
		$this->load->library('form_validation');
		// $this->load->library('');
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
	}
	public function index()
	{
		$this->data=array();
		$lang=$this->session->get_userdata('Language');
        if($lang['Language']=='en') {
            $emerg_lang='en';
        }else{
            $emerg_lang='nep'; 
        }
        $admin_type=$this->session->userdata('user_type');
        $this->data['admin']=$admin_type; 
		$this->data['drrdata'] = $this->general->get_tbl_data_result('id,image,name','drrcategory',array('language'=>$emerg_lang));
		
		
		
		$this->template
	                    ->enable_parser(FALSE)
	                    ->build('backend/drrinfo',$this->data);
	}
	public function add_drrinfo(){
	 	$this->data=array();
	    if(isset($_POST['submit'])){
	    	$lang=$this->session->get_userdata('Language');
	        if($lang['Language']=='en') {
	            $emerg_lang='en';
	        }else{
	            $emerg_lang='nep'; 
	        }
	    	 // echo "<pre>"; print_r($this->input->post()); die;
	      	$file_name = $_FILES['project_pic']['name'];
	      	$page_slug_new = strtolower (preg_replace('/[[:space:]]+/', '-', $this->input->post('name')));
	      	$data=array(
	        	'name'=>$this->input->post('name'),
	        	'status'=>'1',
	        	'description'=>$this->input->post('description'),
	        	'language'=>$emerg_lang,
	        	'slug'=>$page_slug_new,
	      	);
	      	$insert=$this->DrrModel->add_drrinfo('drrcategory',$data);
	      	//print_r($insert);die;
	      	if($insert!=""){
	      		$old_image=$this->input->post('old_image');
	      		//print_r($old_image);die;
	      		$img_upload=$this->DrrModel->do_upload($file_name,$insert);
	      		// test for image resize
	      			// $ext=$img_upload['upload_data']['file_ext'];
	      			// $image_path='./uploads/drrinfo/'.$insert.$ext;
	      			// $new_path='./uploads/drrinfo/';
	      			// $config['image_library'] = 'gd2';
				        //     $config['source_image'] = $image_path;
				        //     $config['maintain_ratio'] = TRUE;
				        //     $config['create_thumb'] = TRUE;
				        //     $config['width'] = 10;
				        //     $config['height'] = 10;
				        //     $config['master_dim'] = 'width';
				        //     $config['new_image'] ='_thumb'.$insert.$ext;
				        //     //print_r($name);die;
				        //     $this->load->library('image_lib', $config);
				        //     $this->image_lib->clear();
				        //     $this->image_lib->initialize($config);
				        //     $this->image_lib->resize();
		           // echo $this->image_lib->display_errors(); die; this is for check error
	          	// test for image resize
	      	    if($img_upload['status']== 1) {
	      	    	@unlink($old_image);	
      				$ext=$img_upload['upload_data']['file_ext'];
	          		$image_path=base_url() . 'uploads/drrinfo/'.$insert.$ext ; 
	          		
      			}else{
      				$id=$this->input->post('id');
      				if($id) {
      					$image_path =$old_image;
      				}else{
      					$code= strip_tags($img_upload['error']);
			        	$this->session->set_flashdata('msg', $code);
			        	redirect(FOLDER_ADMIN.'/drrinfo/add_drrinfo');	
      				}
      			}
	      		$img=array(
		            	'image'=>$image_path,
		         	);
	        	$update_path=$this->DrrModel->update_path($insert,$img);
		        $this->session->set_flashdata('msg','drrinfo successfully added');
		        redirect(FOLDER_ADMIN.'/drrinfo');
	        }
	    }else{
	      //admin check
	    	$id = base64_decode($this->input->get('id'));
	    	//print_r($id);die;
	    	if($id) {
				$this->data['drrdataeditdata'] = $this->general->get_tbl_data_result('id,image,name','drrcategory',array('id'=>$id));
	    	}else{
	    		$this->data['drrdataeditdata'] = array();	
	    	}
	      	$admin_type=$this->session->userdata('user_type');
	      	$this->data['admin']=$admin_type;
	      	//admin check
	      	$this->template
	                        ->enable_parser(FALSE)
	                        ->build('backend/index',$this->data);
	    }
	}
	public function delete(){
	    $tbl="drrcategory";
	    $id = base64_decode($this->input->get('id'));
	   // print_r($id);die;
	    $delete=$this->DrrModel->delete($id,$tbl);
	    if($delete){
      		$this->session->set_flashdata('msg','Successfully Deleted');
	        redirect(FOLDER_ADMIN.'/drrinfo');
    	}
  	}
  	
  	public function drrinformationlist()
  	{
  		$this->data=array();
		$lang=$this->session->get_userdata('Language');
        if($lang['Language']=='en') {
            $emerg_lang='en';
        }else{
            $emerg_lang='nep'; 
        }
        $admin_type=$this->session->userdata('user_type');
        $this->data['admin']=$admin_type;// new added
		$this->data['drrdata'] = $this->DrrModel->get_drrlist(array('d.language'=>$emerg_lang));

		//echo"<pre>";print_r($this->data['drrdata']);die;
		$this->template
	                    ->enable_parser(FALSE)
	                    ->build('backend/drrinformationlist',$this->data);
  	}
  	public function drrinformation() 
  	{
  		$lang=$this->session->get_userdata('Language');
        if($lang['Language']=='en') {
            $emerg_lang='en';
        }else{
            $emerg_lang='nep'; 
        }
  		$this->data['categories'] = $this->general->get_tbl_data_result('id,name','drrcategory',array('language'=>$emerg_lang));
  		$this->data['subcategories'] = $this->general->get_tbl_data_result('id,name','drrsubcategory',array('language'=>$emerg_lang));
  		//echo "<pre>"; print_r($_POST);die;
  		$this->form_validation->set_rules('category_id', 'Please Select Category', 'trim|required');
  		$this->form_validation->set_rules('short_desc', 'Short Description', 'trim|required');

		if ($this->form_validation->run() == TRUE){
  			//echo"<pre>"; print_r($this->input->post());die;
	      	$file_name = $_FILES['image']['name'];
	      	// echo "<pre>"; print_r($file_name); die;
		      	$data=array(
		        	'category_id'=>$this->input->post('category_id'),
		        	'subcat_id'=>$this->input->post('subcat_id'),
		        	'short_desc'=>$this->input->post('short_desc'),
		        	'description'=>$this->input->post('description'),
		        	'language'=>$emerg_lang,
		      	);
		      	$insert=$this->DrrModel->add_drrinfo('drrinformation',$data);
		      	if($insert!=""){
		      		$old_image=$this->input->post('old_image');
		      		//print_r($old_image);die;
		      		$img_upload=$this->DrrModel->do_upload_drrinfo($file_name,$insert);
		      	    if($img_upload['status']== 1) {
		      	    	@unlink($old_image);	
	      				$ext=$img_upload['upload_data']['file_ext'];
		          		$image_path=base_url() . 'uploads/drrinformation/'.$insert.$ext ;
		          		//print_r($image_path);die;
	      			}else{
	      				$id=$this->input->post('id');
	      				if($id) {
	      					$image_path =$old_image;
	      				}else{
	      					$code= strip_tags($img_upload['error']);
				        	$this->session->set_flashdata('msg', $code);
				        	redirect(FOLDER_ADMIN.'/drrinfo/drrinformation');	
	      				}
	      			}
		      		$img=array(
			            	'image'=>$image_path,
			         	);
		        	$update_path=$this->DrrModel->update_path_drrinformation($insert,$img);
			        $this->session->set_flashdata('msg','drrinfo successfully added');
			        redirect(FOLDER_ADMIN.'/drrinfo/drrinformationlist');
	        }
	    }else{
	      //admin check
	    	$id = base64_decode($this->input->get('id'));
	    	//print_r($id);die;
	    	if($id) {
				$this->data['drrdataeditdata'] = $this->general->get_tbl_data_result('id,short_desc,subcat_id,category_id,image,description','drrinformation',array('id'=>$id));
	    	}else{
	    		$this->data['drrdataeditdata'] = array();	
	    	}
	      	$admin_type=$this->session->userdata('user_type');
	      	$this->data['admin']=$admin_type;
	      	//admin check
	      	$this->template
	                        ->enable_parser(FALSE)
	                        ->build('backend/drrinformation',$this->data);
	    }
  	}
  	public function drr_article() 
  	{
  		$lang=$this->session->get_userdata('Language');
        if($lang['Language']=='en') {
            $emerg_lang='en';
        }else{
            $emerg_lang='nep'; 
        }
  		$this->data['categories'] = $this->general->get_tbl_data_result('id,name','drrcategory',array('language'=>$emerg_lang));
  		if(isset($_POST['submit'])){
  			$attachment=$_FILES['uploadedfile']['name'];
  			$ext_file = pathinfo($attachment, PATHINFO_EXTENSION);
  			//echo "fhiskdhf";die;
	      	//$file_name = $_FILES['image']['name'];
	      	//echo "<pre>"; print_r($this->input->post()); die;
		      	$data=array(
		        	'category_id'=>$this->input->post('category_id'),
		        	//'category'=>$this->input->post('categories'),
		        	'title'=>$this->input->post('title'),
		        	'short_summary'=>$this->input->post('short_summary'), 
		        	'detail_info'=>$this->input->post('detail_info'),
		        	'language'=>$emerg_lang,
		      	);
		      	$insert=$this->DrrModel->add_drrinfo('drr_article',$data);
		      	if($insert!=""){
		      		$file_upload=$this->DrrModel->file_do_upload($attachment,$insert);
		      	    if($file_upload== 1) {	
	      				$ext=$file_upload['upload_data']['file_ext'];
		          		$file_path=base_url() . 'uploads/drr_article/file/'.$insert.'.'.$ext_file ;
	      			}else{
	      				$id=$this->input->post('id');
	      				if($id) {
	      					$image_path =$old_image;
	      				}else{
	      					$code= strip_tags($img_upload['error']);
				        	$this->session->set_flashdata('msg', $code);
				        	redirect(FOLDER_ADMIN.'/drrinfo/drr_article_list');	
	      				}
	      			}
		      		$img=array(
			            	'file'=>$file_path,
			         	);
		        	$update_path=$this->DrrModel->update_path_drrarticle($insert,$img);
			        $this->session->set_flashdata('msg','drrinfo successfully added');
			        redirect(FOLDER_ADMIN.'/drrinfo/drr_article_list');
	        }
	    }else{
	      //admin check
	    	$id = base64_decode($this->input->get('id'));
	    	//print_r($id);die;
	    	if($id) {
				$this->data['drreditdata'] = $this->general->get_tbl_data_result('id,short_summary,title,category_id,detail_info','drr_article',array('id'=>$id));
	    	}else{
	    		$this->data['drreditdata'] = array();	
	    	}
	      	$admin_type=$this->session->userdata('user_type');
	      	$this->data['admin']=$admin_type;
	      	//admin check
	      	
	    }
	    $this->template
	                        ->enable_parser(FALSE)
	                        ->build('backend/drr_article',$this->data);
  	}
  	
  	public function drr_article_list()
  	{
  		$this->body= array();
        $cat=$this->input->get('cat');
        $lang=$this->session->get_userdata('Language');
        if($lang['Language']=='en') {
            $emerg_lang='en';
        }else{
            $emerg_lang='nep'; 
        }
        //$this->data['name']="Dictionary";
        $this->data['drrarticledata'] = $this->general->get_tbl_data_result('id,category_id,file,title,short_summary,detail_info','drr_article',array('language'=>$emerg_lang));
        //admin check
        //echo "<pre>"; print_r($this->data['inventorydata']);die;
        $admin_type=$this->session->userdata('user_type');
        $this->data['admin']=$admin_type;

        //admin check
        $this->template
                        ->enable_parser(FALSE)
                        ->build('backend/drr_article_list',$this->data);
	}
	public function delete_article(){
	    $tbl="drr_article";
	    $id = base64_decode($this->input->get('id'));
	   // print_r($id);die;
	    $delete=$this->DrrModel->delete($id,$tbl);
	    if($delete){
      		$this->session->set_flashdata('msg','Successfully Deleted');
	        redirect(FOLDER_ADMIN.'/drrinfo/drr_article_list');
    	}
  	}
  	public function delete_drrinformation(){
	    $tbl="drrinformation";
	    $id = base64_decode($this->input->get('id'));
	   // print_r($id);die;
	    $delete=$this->DrrModel->delete($id,$tbl);
	    if($delete){
      		$this->session->set_flashdata('msg','Successfully Deleted');
	        redirect(FOLDER_ADMIN.'/drrinfo/drrinformationlist');
    	}
  	}
}