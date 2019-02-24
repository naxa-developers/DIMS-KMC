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
        $this->load->model('organisation/organisationlogin_mdl');
        $this->template->set_layout('frontend/default');
        $this->load->library('upload');
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<div class="valid-feedback">', '</div>');
	}
	public function project_list()
	{
		$lang=$this->session->get_userdata('Language');
	    if($lang['Language']=='en') {
	      $language='en';
	    }else{
	      $language='nep';
	    }
		$this->data['projectlist'] = $this->general->get_tbl_data_result('id,title,description','organisationproject',array('language'=>$language));
		///echo "<pre>"; print_r($this->data['projectlist']);die;
		$this->template
				->enable_parser(FALSE)
				->build('organisation/frontend/project_list', $this->data);
	}
    public function createproject()
    {
    	$lang=$this->session->get_userdata('Language');
	    if($lang['Language']=='en') {
	      $language='en';
	    }else{
	      $language='nep';
	    }
	    $this->form_validation->set_rules('title', 'Project Name', 'trim|required');
	 	$this->form_validation->set_rules('latitude', 'Please Enter Latitude', 'trim|required');
	 	$this->form_validation->set_rules('longitude', 'Please Select Longitude', 'trim|required');
		if ($this->form_validation->run() == TRUE){
			$trans = $this->organisationlogin_mdl->insert_project('organisationproject',$language);
			//echo 
			if($trans) {
				$this->session->set_flashdata('msg','Project Create successfully !!!!');
		    	redirect('whodoes/project_list','refresh');exit;
			}
		}
		$id = base64_decode($this->input->get('id'));
		if($id) {
			$this->data['projectlist']  = $this->data['projectlist'] = $this->general->get_tbl_data_result('*','organisationproject',array('id'=>$id));
		}else{
			$this->data['projectlist']  = "";
		}
		// else{
		// 	$this->session->set_flashdata('msg','User Create successfully !!!!');
		//     redirect('whodoes/createproject','refresh');die;
		// }
    	$this->template
				->enable_parser(FALSE)
				->build('frontend/project', $this->data);
    }
    public function editprogressfile()
    {   $cat =base64_decode($this->input->get('cat'));
    	$tbl ='organisationprogress';
	    $id = base64_decode($this->input->get('id'));
	    $this->data['projectlist'] = $this->general->get_tbl_data_result('*',$tbl,array('id'=>$id));
	    //echo "<pre>";print_r($this->data['projectlist']);die;
	    $this->form_validation->set_rules('imagedesc', 'Image Description', 'trim|required');
	 	$this->form_validation->set_rules('filedesc', 'Please Choose Project Files Description', 'trim|required');
		if ($this->form_validation->run() == TRUE){
			//echo "<pre>";print_r($this->input->post());die;
			$trans = $this->organisationlogin_mdl->organisationupdate($tbl);
			if($trans) {
				$this->session->set_flashdata('msg','Project Files And Images Update successfully !!!!');
		    	redirect('whodoes/addprogress?id='.base64_decode($cat),'refresh');exit;
			}
		}
	    $this->template
				->enable_parser(FALSE)
				->build('frontend/addprogress_edit', $this->data);
    }
    public function addprogress()
    {	
    	$tbl ='organisationprogress';
    	$lang=$this->session->get_userdata('Language');
	    if($lang['Language']=='en') {
	      $language='en';
	    }else{
	      $language='nep';
	    }
	    $this->data['projectlist'] = $this->general->get_tbl_data_result('id,imagedesc,filedesc',$tbl,array('language'=>$language));
	    $id = base64_decode($this->input->get('id'));
	    $this->data['cat']=base64_decode($this->input->get('id'));
	    $this->form_validation->set_rules('imagedesc[]', 'Image Description', 'trim|required');
	 	$this->form_validation->set_rules('filedesc[]', 'Please Choose Project Files Description', 'trim|required');
		if ($this->form_validation->run() == TRUE){
			//echo "<pre>";print_r($this->input->post());die;
			$trans = $this->organisationlogin_mdl->organisationinsert($tbl,$id,$language);
			if($trans) {
				$this->session->set_flashdata('msg','Project Files And Images successfully !!!!');
		    	redirect('whodoes/project_list','refresh');exit;
			}
		}
	    $this->template
				->enable_parser(FALSE)
				->build('organisation/frontend/addprogress_details', $this->data);
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
