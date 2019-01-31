<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Inventory extends Admin_Controller 
{
	function __construct()
	{	
        $this->load->model('inventory_mdl');
	}
	public function index() //default_page 
    {
    	$this->data=array();
    	$this->template->set_layout('frontend/default');
    	$lang=$this->session->get_userdata('Language');
        if($lang['Language']=='en') {
            $emerg_lang='en';
        }else{
            $emerg_lang='nep'; 
        }
        $this->data['invdata'] = $this->inventory_mdl->count_oinventory_data($emerg_lang);
        $this->data['catgegory'] = $this->general->get_tbl_data_result('id,name,slug,image','inventorycategory',array('language'=>$emerg_lang));
        //echo "<pre>"; print_r($this->data['invdata']);die;
		$this->template
			->enable_parser(FALSE)
			->build('frontend/inventory', $this->data);
    }
    // public function datacount()
    // {
    //     if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //         $lang=$this->session->get_userdata('Language');
    //         if($lang['Language']=='en')
    //         {
    //             $this->data['invcount'] = $this->inventory_mdl->count_oinventory_data('en');
    //         }else{
    //             $this->data['invcount'] = $this->inventory_mdl->count_oinventory_data('nep');
    //          }
    //        echo "<pre>"; print_r($this->data['invcount']);die;
    //         print_r(json_encode(array('status'=>'success','message'=>'Language Set successfully')));
    //         exit;
    //     }
    //     else{
    //         print_r(json_encode(array('status'=>'error','message'=>'Cannot Perform this Operation')));
    //         exit;
    //     }
    //     //$this->data['invdata'] = $this->general->get_tbl_data_result('id,name,slug','inventorycat',array('language'=>$emerg_lang));
    // }
}