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


		    $this->data['pub'] = $this->general->get_tbl_data_result('id,name','publicationcat');
	      	$this->data['pubcat'] = $this->general->get_tbl_data_result('id,name','publicationsubcat');
	      	$this->data['pubcatfiletype'] =$this->config->item('publicationFileType');
		    //language
		    if(isset($_POST['submit'])){
		    	$this->data['publicationdata']=$this->Publication_model->get_publication();
		    }else{
		    	$this->data['publicationdata']=$this->Publication_model->get_publication();
		    }


		    //echo "<pre>"; print_r($this->data['pubcat']);die;
		    if($this->session->userdata('Language')==NULL){

		      $this->session->set_userdata('Language','nep');
		    }

		    $lang=$this->session->get_userdata('Language');


		    if($lang['Language']=='en'){
		        $this->data['pub_lang']='en';

		    }else{
		       $this->data['pub_lang']='nep';


		    }
		   	$this->data['urll']=$this->uri->segment(1);
			$this->template
				->enable_parser(FALSE)
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

		public function download(){
			$file=$this->input->get('file');
			$name=$this->input->get('title').'.pdf';
			$this->load->helper('download');
			$data=file_get_contents($file);
			force_download($name,$data);

		}
}
