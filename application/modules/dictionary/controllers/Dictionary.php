<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Dictionary extends Admin_Controller 
{
	function __construct()
	{	
       
	}
	public function index()
	{	$this->data =array();
		$lang=$this->session->get_userdata('Language');
	    if($lang['Language']=='en') {
	      	$emerg_lang='en';
	    }else{
	      	$emerg_lang='nep'; 
	    }
		$this->data['dictionary'] = $this->general->get_tbl_data_result('id,image,word,meaning,comment,language','dictionary_tbl',array('language'=>$emerg_lang),'word');
		//echo"<pre>"; print_r($this->data['dictionary']);die;
		$this->template->set_layout('frontend/default');
		$this->template
			->enable_parser(FALSE)
			//->title($this->data['page_title']) 
			->build('frontend/dictionary', $this->data);
	}
	public function ajaxAutoComplete()
    {
        $query = $this->input->get('query');
        $this->db->like('word', $query);
        $data = $this->db->get("dictionary_tbl")->result();


        echo json_encode( $data);
    }
}