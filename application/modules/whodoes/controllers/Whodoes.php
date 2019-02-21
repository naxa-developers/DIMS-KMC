<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Whodoes extends Admin_Controller
{
	function __construct()
	{
		if(!$this->session->userdata('ORGUSER_ID'))
		{
			redirect('organisation/login', 'refresh');exit;
		}
        $this->load->model('Main_model');
        $this->load->model('Upload_model');
        $this->load->model('Report_model');
        $this->load->model('Publication_model');

        $this->template->set_layout('frontend/default');
        $this->form_validation->set_error_delimiters('<div class="valid-feedback">', '</div>');
	}
    public function createproject()
    {
    	//print_r($this->session->userdata('ORGUSER_ID'));die;
    	$lang=$this->session->get_userdata('Language');
	    if($lang['Language']=='en') {
	      $language='en';
	    }else{
	      $language='nep';
	    }
	    $this->form_validation->set_rules('title', 'Project Name', 'trim|required');
	 	$this->form_validation->set_rules('location', 'Please Enter location', 'trim|required');
		if ($this->form_validation->run() == TRUE){

		}
    	$this->template
				->enable_parser(FALSE)
				->build('frontend/project', $this->data);
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
