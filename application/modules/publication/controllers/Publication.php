<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Publication extends Admin_Controller 
{
	function __construct()
	{	
        $this->load->model('Main_model');
        $this->load->model('Upload_model');
        $this->load->model('Report_model');
        $this->load->model('Publication_model');

        $this->template->set_layout('frontend/default');
	}
		
		public function index(){
			$this->body=array();
		    $this->load->model('Publication_model');
		    $this->data['publicationdata']=$this->Publication_model->get_all_data();

		    //language
		    if($this->session->userdata('Language')==NULL){

		      $this->session->set_userdata('Language','nep');
		    }

		    $lang=$this->session->get_userdata('Language');


		    if($lang['Language']=='en'){
		        $this->data['pub_lang']='en';

		     // $this->data['site_info']=$this->Main_model->site_setting_en();

		    }else{

		     //$this->data['site_info']=$this->Main_model->site_setting_nep();
		       $this->data['pub_lang']='nep';


		    }
		   	$this->data['urll']=$this->uri->segment(1);
		    // //language
		    // $this->load->view('header',$this->data);
		    // $this->load->view('publication',$this->data);
		    // $this->load->view('footer',$this->data);
		    
			$this->template
				->enable_parser(FALSE)
				//->title($this->data['page_title']) //this is for seo purpose 
				->build('frontend/publication', $this->data);
    }
    public function details()
    {
    	$lang=$this->session->get_userdata('Language');
	    if($lang['Language']=='en') {
	      $language='en';
	    }else{
	      $language='nep'; 
	    }
		$this->data['publicationdata'] = $this->Publication_model->get_publication_details();
		//echo "<pre>"; print_r($this->data['publicationdata']);die;
		$this->template
				->enable_parser(FALSE)
				->build('frontend/publicationdetails', $this->data);
    }
}