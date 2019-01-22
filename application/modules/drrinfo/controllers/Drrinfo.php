<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Drrinfo extends Admin_Controller 
{
	function __construct()
	{	
        $this->load->model('Main_model');
        $this->template->set_layout('frontend/default');
	}
	public function index()
	{	$this->body=array();
		if($this->session->userdata('Language')==NULL){

      	$this->session->set_userdata('Language','nep');
	    }
	    $lang=$this->session->get_userdata('Language');
	    if($lang['Language']=='en') {
	      $language='en';
	    }else{
	      $language='nep'; 
	    }

	    $this->data['page_title'] ="Disaster Information System";
	    $this->data['drrdata'] = $this->general->get_tbl_data_result('slug,description,image,name','drrcategory',array('language'=>$language));
	    //echo $this->db->last_query();die;echo"<pre>"; print_r($this->data['drrdata']);die;
		$this->template
			->enable_parser(FALSE)
			->title($this->data['page_title']) //this is for seo purpose 
			->build('frontend/v_drrinfo', $this->data);
	}
	public function drrdetails($cond=FALSE)
	{
		$this->data=array();
		if($this->session->userdata('Language')==NULL){

      	$this->session->set_userdata('Language','nep');
	    }
	    $lang=$this->session->get_userdata('Language');
	    if($lang['Language']=='en') {
	      $language='en';
	    }else{
	      $language='nep'; 
	    }

	    $this->data['drrsubcat'] = $this->general->get_tbl_data_result('slug,id,name','drrsubcategory',array('language'=>$language));
	    $this->data['drrdata'] = $this->general->get_tbl_data_result('slug,id,name','drrcategory',array('slug'=>$cond,'language'=>$language));
	    $this->data['page_title'] ="Disaster Information System";

		$this->template
			->enable_parser(FALSE)
			->title($this->data['page_title']) //this is for seo purpose 
			->build('frontend/drrinfo', $this->data);
	}
}