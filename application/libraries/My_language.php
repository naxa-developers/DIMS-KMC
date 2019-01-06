<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class My_language 
{
	protected $ci;
	protected $languages = array(
		'en' => 'english',
		'nep' => 'nepali'
	);
	public function __construct() 
	{
		$this->ci =& get_instance();
		//get language short code to find the main language folder
		$lang_code = $this->ci->session->userdata('Language');
		//  by Prakash
		if($lang_code=='nep')
		{

		 $this->ci->config->set_item('language', 'nepali');
		}
		else
		{
			 $this->ci->config->set_item('language', 'english');
		}
		$this->ci->lang->load('general');
	
	}

	// default language: first element of $this->languages

	function langload()
	{
		$lang = $this->languages;
		
		foreach($lang as $lang => $language)
		{
			$lang;
		}
	}
	
}