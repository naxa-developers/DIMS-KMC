<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Dictionary extends Admin_Controller 
{
	function __construct()
	{	
        $this->load->model('home/home_mdl');
	}
	public function index()
	{	$this->data =array();
		$lang=$this->session->get_userdata('Language');
	    if($lang['Language']=='en') {
	      	$emerg_lang='en';
	    }else{
	      	$emerg_lang='nep'; 
	    }
	    $q = $this->input->get('query');
	    if($q) {
	    	$this->data['dictionary'] = $this->general->get_tbl_data_result('id,image,word,meaning,comment,language','dictionary_tbl',array('language'=>$emerg_lang,'id'=>base64_decode($q)),'word');
	    }else{
	    	$this->data['dictionary'] = $this->general->get_tbl_data_result('id,image,word,meaning,comment,language','dictionary_tbl',array('language'=>$emerg_lang),'word');
	    }
		
		//echo $this->db->last_query();die;
		//echo"<pre>"; print_r($this->data['dictionary']);die;
		$this->template->set_layout('frontend/default');
		$this->template
			->enable_parser(FALSE)
			//->title($this->data['page_title']) 
			->build('frontend/dictionary', $this->data);
	}
	public function ajaxAutoComplete()
    {
    	if($this->input->server('REQUEST_METHOD')=='POST')
		{
			$this->data['searchdata'] = $this->home_mdl->get_searchdata();
			//echo "<pre>";print_r($this->data['searchdata']);die;
	       	$template = $this->template
				->enable_parser(FALSE)
				->build('frontend/v_autocomplete.php', $this->data);
			if(!empty($this->data['searchdata'])){
		        print_r(json_encode(array('status'=>'success','template'=>$template)));
			    exit;
			}else{
				print_r(json_encode(array('status'=>'success','template'=>'<label class="alert alert-success">No Matching Data Found Please Try Others !!!!! </label>')));
			    exit;
			}
		}else{
			print_r(json_encode(array('status'=>'error','message'=>'Cannot Perform this Operation')));
			exit;
		}
    }
}