<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Dictionary extends Admin_Controller 
{
	function __construct()
	{	
        // $this->load->model('Main_model');
        // $this->load->model('Upload_model');
        // $this->load->model('Report_model');
	}
	public function index()
	{	$this->data =array();
		$lang=$this->session->get_userdata('Language');
	    if($lang['Language']=='en') {
	      	$emerg_lang='en';
	    }else{
	      	$emerg_lang='nep'; 
	    }
		$this->data['dictionary'] = $this->general->get_tbl_data_result('id,word,meaning,language','dictionary_tbl',array('language'=>$emerg_lang),'word');
		//echo"<pre>"; print_r($this->data['dictionary']);die;
		$this->template->set_layout('frontend/default');
		$this->template
			->enable_parser(FALSE)
			//->title($this->data['page_title']) 
			->build('frontend/dictionary', $this->data);
	}
}