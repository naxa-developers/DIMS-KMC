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
	}
	public function index()
	{
		$this->body = array();
		$this->body['user']=$this->Admin_dash_model->count_data('users');
	    $this->body['map_data']=$this->Admin_dash_model->count_data('categories_tbl');
	    $this->body['report']=$this->Admin_dash_model->count_data('report_tbl');
	    $this->body['max']=$this->Admin_dash_model->max_views();
	    //var_dump($this->body['max']);

	    $home=$this->Admin_dash_model->count_views('home');
	    $map=$this->Admin_dash_model->count_views('map');
	    $reports=$this->Admin_dash_model->count_views('reports');
	    $about=$this->Admin_dash_model->count_views('about');

	    $this->body['home']=$home['views_count'];
	    $this->body['map']=$map['views_count'];
	    $this->body['reports']=$reports['views_count'];
	    $this->body['about']=$about['views_count'];
	    //var_dump($this->body['user']);


	    //admin check
	    $admin_type=$this->session->userdata('user_type');

	    $this->body['admin']=$admin_type;
	    //admin check
	    //$this->template->title("Login | " . SITE_NAME_EN);//ORGA_NAME
        $this->template
                        ->enable_parser(FALSE)
                        ->build('index',$this->body);
	}
	public function en() {
		$this->session->set_userdata('Language','en');
		//redirect($this->uri->uri_string());
	}
	public function change_language()
	{
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			$lang=$this->input->post('language');
			if($lang=='nep')
			{
				$this->session->set_userdata('Language','nep');
			}
			if($lang=='en')
			{
				$this->session->set_userdata('Language','en');
			}
			print_r(json_encode(array('status'=>'success','message'=>'Language Set successfully')));
			 exit;
		}
		else{
	    	print_r(json_encode(array('status'=>'error','message'=>'Cannot Perform this Operation')));
	        exit;
	    }
	}
}