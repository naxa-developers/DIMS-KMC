<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Language extends CI_Controller
 {
   function __construct()
    {
      	parent::__construct();
      	$this->load->library('session');
      	$this->load->helper("form");
    	$this->load->library("form_validation");
    }

	public function eng(){
		$this->session->set_userdata('Language','en');
	}
	public function nep(){
		$this->session->set_userdata('Language','nep');
	}

	// public function test_lang(){
	// 	$lang=$this->session->get_userdata('Language');
	// 	//echo $lang['Language'];
	// 	if($lang['Language']=='en'){

	// 	 echo 'welcome';

	// 	}else{

	// 	echo 'स्वागत';


	// 	}
	// }
}
