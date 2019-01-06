<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Map extends Admin_Controller 
{
	function __construct()
	{	
        $this->load->model('Main_model');
        $this->load->model('Upload_model');
        $this->load->model('Report_model');
	}
	public function index() //default_page 
    {
    	$this->data=array();
    	$this->template->set_layout('frontend/maplayout');
		$this->template
			->enable_parser(FALSE)
			->build('frontend/map', $this->data);
    }
}