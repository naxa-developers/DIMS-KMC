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
		$this->load->model('inventory_mdl');
	}
	public function index()
	{
		$this->data= array();
        $cat=$this->input->get('cat');
        $lang=$this->session->get_userdata('Language');
        if($lang['Language']=='en') {
            $emerg_lang='en';
        }else{
            $emerg_lang='nep'; 
        }
        $this->data['data'] = $this->general->get_tbl_data_result('id,name,slug','inventorycat',array('language'=>$emerg_lang));
        $admin_type=$this->session->userdata('user_type');
        $this->data['admin']=$admin_type;
        //admin check
        $this->template
                        ->enable_parser(FALSE)
                        ->build('admin/index',$this->data);
	}
	public function add_inventory()
	{
		$this->data=array();
		if(isset($_POST['submit'])){
	    	$lang=$this->session->get_userdata('Language');
	        if($lang['Language']=='en') {
	            $emerg_lang='en';
	        }else{
	            $emerg_lang='nep'; 
	        }
	        $title = $this->input->post('name');

	        $slug = strtolower (preg_replace('/[[:space:]]+/', '-', $title));
	      	$data=array(
	        	'name'=>$title,
	        	'slug'=>$slug,
	        	'language'=>$emerg_lang,
	      	);
	      	//print_r($data);die;
	      	$insert=$this->inventory_mdl->add_inventory('inventorycat',$data);
	      	if($insert!=""){
	        	$this->session->set_flashdata('msg','Inventory Category successfully added');
	        	redirect(FOLDER_ADMIN.'/inventory');
	        }
	    }else{
	      //admin check
	    	$id = base64_decode($this->input->get('id'));
	    	//print_r($id);die;
	    	if($id) {
				$this->data['drrdataeditdata'] = $this->general->get_tbl_data_result('id,slug,name','inventorycat',array('id'=>$id));
	    	}else{
	    		$this->data['drrdataeditdata'] = array();	
	    	}
	      	$admin_type=$this->session->userdata('user_type');
	      	$this->data['admin']=$admin_type;
	      	//admin check
	      	$this->template
	                        ->enable_parser(FALSE)
	                        ->build('admin/inventory',$this->data);
	    }
	}
	public function delete(){
	    $tbl="inventorycat";
	    $id = base64_decode($this->input->get('id'));
	    $delete=$this->inventory_mdl->delete($id,$tbl);
	    if($delete){
      		$this->session->set_flashdata('msg','Successfully Deleted');
	        redirect(FOLDER_ADMIN.'/inventory');
    	}
  	}
  	public function inventory_data()
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
        $this->data['data'] = $this->general->get_tbl_data_result('id,orgname,address,phone,contactperson,email,category','inventory',array('language'=>$emerg_lang));
        //admin check
        //echo "<pre>"; print_r($this->data['data']);die;
        $admin_type=$this->session->userdata('user_type');
        $this->data['admin']=$admin_type;
        //admin check
        $this->template
                        ->enable_parser(FALSE)
                        ->build('admin/inventory_csv',$this->data);
  	}
}