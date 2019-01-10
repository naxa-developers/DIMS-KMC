<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Home extends Admin_Controller 
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
	    $tbl='categories_tbl';
	    $this->data['feature']=$this->general->get_tbl_data_result(('"table","title","photo","summary"'),'featured_dataset',array('lang'=>'en','default'=>'1'));
	    //views add
	    //echo "<pre>"; print_r($this->data['feature']);die;
	    $count=$this->Report_model->get_count_views('home');
	    $add_count=$count['views_count']+1;
	    $data=array(
	        'views_count'=>$add_count,
	      );
	    $this->Report_model->update_views($count['id'],$data);
	    //views add end
	    //incident type count
	    $incident_count=$this->Report_model->get_incident_count();
	    $incident_count_list=array();
		    foreach($incident_count as $c){
		      	$d=array($c['incident_type']=>$c['count']);
		      	array_push($incident_count_list,$d);
		    }
	    $incident_count_datas = call_user_func_array('array_merge', $incident_count_list);
	    ///pp($incident_count_datas);
	    $this->data['report_inci']=$incident_count_datas;
	    //incident count end
	    //language
	    if($this->session->userdata('Language')==NULL){
	      	$this->session->set_userdata('Language','nep');
	    }
	    $lang=$this->session->get_userdata('Language');
	       	if($lang['Language']=='en'){
	        	$language='en';
	      	}else{
	        	$language='nep';
	      	}
        $this->data['site_info'] = "";
        $this->data['feature']=$this->Main_model->get_feature();
        $this->data['feat_lang']='en';
        $this->data['drrdata'] = $this->general->get_tbl_data_result('slug,description,image,name','drrcategory',array('language'=>$language));
        $this->data['hazard_data']=$this->general->get_tbl_data_result('id,category_name,category_photo,category_table,category_type,public_view,language',$tbl,array('category_type'=>'Hazard_Data','language'=>$language));
	    // Exposure_Data
	    $this->data['exposure_data']=$this->general->get_tbl_data_result('id,category_name,category_photo,category_table,category_type,public_view,language',$tbl,array('category_type'=>'Exposure_Data','language'=>$language),'id');
	    $this->data['baseline_data']=$this->general->get_tbl_data_result('id,category_name,category_photo,category_table,category_type,public_view,language',$tbl,array('category_type'=>'Baseline_Data','language'=>$language),'id');
	    $cat_tbl_list=$this->general->get_tbl_data_result('id,category_name,category_photo,category_table,category_type,public_view,language',$tbl,array('language'=>$language),'id');
	    $tbl_list=array();
	        foreach($cat_tbl_list as $list){
	            if($this->db->table_exists($list['category_table'])) {
	              	array_push($tbl_list,$this->Main_model->count_dat_tbl($list['category_table']));
	            }
	        }
	        $data_count_cat = call_user_func_array('array_merge', $tbl_list);
	        $this->data['data_count_cat']=$data_count_cat;
	    $this->data['urll']=$this->uri->segment(1);
	    $this->template->set_layout('frontend/default');

		$this->template
			->enable_parser(FALSE)
			//->title($this->data['page_title']) //this is for seo purpose 
			->build('home', $this->data);
	}
}