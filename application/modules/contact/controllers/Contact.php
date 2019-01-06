<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Contact extends Admin_Controller 
{
	function __construct()
	{	
        $this->load->model('Main_model');
        $this->load->model('Upload_model');
        $this->load->model('Report_model');
	}
	public function index()
	{	$this->body=array();
		if($this->session->userdata('Language')==NULL){

      	$this->session->set_userdata('Language','nep');
	    }
	    $lang=$this->session->get_userdata('Language');
	    if($lang['Language']=='en') {
	      $emerg_lang='en';
	    }else{
	      $emerg_lang='nep'; 
	    }
	      //eng contact
	      $this->data['health']=$this->general->get_tbl_data_result('*','emergency_contact',array('category'=>'health','language'=>$emerg_lang));
	      $this->data['responders']=$this->general->get_tbl_data_result('*','emergency_contact',array('category'=>'responders','language'=>$emerg_lang));
	      $this->data['security']=$this->general->get_tbl_data_result('*','emergency_contact',array('category'=>'security','language'=>$emerg_lang));
	      $this->data['ngo']=$this->general->get_tbl_data_result('*','emergency_contact',array('category'=>'ngo','language'=>$emerg_lang));

	      $this->data['ddr']=$this->general->get_tbl_data_result('*','emergency_personnel',array('category'=>'ddr','language'=>$emerg_lang));
	      $this->data['personnel']=$this->general->get_tbl_data_result('*','emergency_personnel',array('category'=>'personnel','language'=>$emerg_lang));
	      $this->data['members']=$this->general->get_tbl_data_result('*','emergency_personnel',array('category'=>'members','language'=>$emerg_lang));
	      $this->data['chairpersons']=$this->general->get_tbl_data_result('*','emergency_personnel',array('category'=>'chairpersons','language'=>$emerg_lang));
	      $this->data['chief']=$this->general->get_tbl_data_result('*','emergency_personnel',array('category'=>'chief','language'=>$emerg_lang));
	      $this->data['elected']=$this->general->get_tbl_data_result('*','emergency_personnel',array('category'=>'elected','language'=>$emerg_lang));
	      $this->data['municipal_ex']=$this->general->get_tbl_data_result('*','emergency_personnel',array('category'=>'municipal_ex','language'=>$emerg_lang));
	      //echo "<pre>";print_r($this->data['chairpersons']);die;
	      $this->data['disaster']=$this->general->get_tbl_data_result('*','emergency_personnel',array('category'=>'disaster','language'=>$emerg_lang));
	      $this->data['nntds']=$this->general->get_tbl_data_result('*','emergency_personnel',array('category'=>'nntds','language'=>$emerg_lang));
	    $this->data['urll']=$this->uri->segment(1);
	    //language
		$this->template->set_layout('frontend/default');
		$this->template
			->enable_parser(FALSE)
			//->title($this->data['page_title']) //this is for seo purpose 
			->build('frontend/contact', $this->data);
	}
}