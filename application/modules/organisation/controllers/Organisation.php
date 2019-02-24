<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Organisation extends Admin_Controller
{
	function __construct()
	{
        $this->load->model('Main_model');
        $this->load->model('Upload_model');
        $this->load->model('Report_model');
        $this->load->model('organisationlogin_mdl');

        $this->template->set_layout('frontend/default');
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');	
	}
    public function login()
    {
    	$this->form_validation->set_rules('username', 'Uaser  Name Or Email', 'trim|required');
	 	$this->form_validation->set_rules('password', 'Please Enter Password', 'trim|required');
	 	if ($this->form_validation->run() == TRUE){
	 		$trans =$this->organisationlogin_mdl->loginvalid();
			if($trans == 'success')
			{  
				redirect('whodoes/createproject', 'refresh');exit;
			}else{
				$this->session->set_flashdata('message',$trans);
				redirect('organisation/login', 'refresh');exit;
			}
	 	}
    	$this->template
				->enable_parser(FALSE)
				->build('frontend/login', $this->data);
    }
    public function createproject()
    {
    	$lang=$this->session->get_userdata('Language');
	    if($lang['Language']=='en') {
	      $language='en';
	    }else{
	      $language='nep';
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
	public function logout()
	{
		$this->session->unset_userdata(SESSION.'ORGUSER_ID');
		redirect('organisation/login', 'refresh');exit;
		exit;
	}
}
