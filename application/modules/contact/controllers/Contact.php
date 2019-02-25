<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Contact extends Admin_Controller
{
	function __construct()
	{
        $this->load->model('Main_model');
        $this->load->model('Upload_model');
        $this->load->model('Report_model');
	}
	public function indexx()
	{	$this->body=array();
		$cat='individual_contact';
		 	$data = $this->Main_model->get_categories_tab($cat);
			var_dump($data);
			die;

		if($this->session->userdata('Language')==NULL){

      	$this->session->set_userdata('Language','nep');
	    }
	    $lang=$this->session->get_userdata('Language');
	    if($lang['Language']=='en') {
	      $emerg_lang='en';
	    }else{
	      $emerg_lang='nep';
	    }
	      //eng contact
	      $this->data['health']=$this->general->get_tbl_data_result('*','emergency_contact',array('category'=>'health','language'=>$emerg_lang));
	      $this->data['responders']=$this->general->get_tbl_data_result('*','emergency_contact',array('category'=>'responders','language'=>$emerg_lang));
	      $this->data['security']=$this->general->get_tbl_data_result('*','emergency_contact',array('category'=>'security','language'=>$emerg_lang));
	      $this->data['ngo']=$this->general->get_tbl_data_result('*','emergency_contact',array('category'=>'ngo','language'=>$emerg_lang));

	      $this->data['ddr']=$this->general->get_tbl_data_result('*','emergency_personnel',array('category'=>'ddr','language'=>$emerg_lang));
	      $this->data['personnel']=$this->general->get_tbl_data_result('*','emergency_personnel',array('category'=>'personnel','language'=>$emerg_lang));
	      $this->data['members']=$this->general->get_tbl_data_result('*','emergency_personnel',array('category'=>'members','language'=>$emerg_lang));
	      $this->data['chairpersons']=$this->general->get_tbl_data_result('*','emergency_personnel',array('category'=>'chairpersons','language'=>$emerg_lang));
	      $this->data['chief']=$this->general->get_tbl_data_result('*','emergency_personnel',array('category'=>'chief','language'=>$emerg_lang));
	      $this->data['elected']=$this->general->get_tbl_data_result('*','emergency_personnel',array('category'=>'elected','language'=>$emerg_lang));
	      $this->data['municipal_ex']=$this->general->get_tbl_data_result('*','emergency_personnel',array('category'=>'municipal_ex','language'=>$emerg_lang));
	      //echo "<pre>";print_r($this->data['chairpersons']);die;
	      $this->data['disaster']=$this->general->get_tbl_data_result('*','emergency_personnel',array('category'=>'disaster','language'=>$emerg_lang));
	      $this->data['nntds']=$this->general->get_tbl_data_result('*','emergency_personnel',array('category'=>'nntds','language'=>$emerg_lang));
	      $this->data['volunteer']=$this->general->get_tbl_data_result('*','volunteer_contact',array('language'=>$emerg_lang));
				// var_dump($this->data['volunteer']);
				// die;
	    $this->data['urll']=$this->uri->segment(1);
	    //language
		$this->template->set_layout('frontend/default');
		$this->template
			->enable_parser(FALSE)
			//->title($this->data['page_title']) //this is for seo purpose
			->build('frontend/contact', $this->data);
	}


	public function index(){
		$this->body=array();


		if($this->session->userdata('Language')==NULL){

				$this->session->set_userdata('Language','nep');
			}
			$lang=$this->session->get_userdata('Language');
			if($lang['Language']=='en') {
				$emerg_lang='en';
			}else{
				$emerg_lang='nep';
			}

 $cat=$this->input->get('cat');
 $tbl_name=$cat.'_contact';


// var_dump($data);
// 		//
// 		die;

		$this->data['cat']=$cat;




if($tbl_name=='volunteer_contact'){
	$data = $this->general->get_tbl_data_result('*','contact_categories',array('category'=>$cat));
	$this->data['sub_cat']=$data[0]['name_id'];
	$this->data['data']=$this->general->get_tbl_data_result('*',$tbl_name,array('language'=>$emerg_lang));
	$this->data['cat_contact']=$cat;
	$this->data['data_list']=$data;
	$this->template->set_layout('frontend/default');
	$this->template
		->enable_parser(FALSE)
		//->title($this->data['page_title']) //this is for seo purpose
		->build('frontend/volun_contact', $this->data);
}else{
$data = $this->Main_model->get_categories_tab($tbl_name);
$this->data['sub_cat']=$data[0]['name_id'];
$this->data['data']=$this->general->get_tbl_data_result('*',$tbl_name,array('category'=>$data[0]['name_id'],'language'=>$emerg_lang));
$this->data['cat_contact']=$cat;
$this->data['data_list']=$data;
$this->template->set_layout('frontend/default');
$this->template
	->enable_parser(FALSE)
	//->title($this->data['page_title']) //this is for seo purpose
	->build('frontend/contact', $this->data);
}


		// var_dump($this->data['data']);
		// exit();
		// $this->data['cat_contact']=$cat;
		// $this->data['data_list']=$data;
		// $this->template->set_layout('frontend/default');
		// $this->template
		// 	->enable_parser(FALSE)
		// 	//->title($this->data['page_title']) //this is for seo purpose
		// 	->build('frontend/volun_contact', $this->data);





	}

	public function get_contact_tbl(){
		// $this->body=array();
		// $cat='individual';
 	 // $sub_cat='municipality_staffs';

	 $cat=$this->input->post('category');
	 $sub_cat=$this->input->post('sub_category');

		$lang=$this->session->get_userdata('Language');
		if($lang['Language']=='en') {
			$con_lang='en';
		}else{
			$con_lang='nep';
		}


		    $volunteer_en='<th>S.N</th>
		    <th>Name</th>
		    <th>Affiliated Organization</th>
		    <th>Designation</th>
		    <th>Ward no</th>
		    <th>Phone No.</th>
		    <th>Email</th>
		    <th>Skills</th>
		    <th>Volunteering Experience</th>
		    <th>Age</th>
		    <th>Status</th>';

		    $volunteer_nep='<th>S.N</th>
		    <th>Name</th>
		    <th>Affiliated Organization</th>
		    <th>Designation</th>
		    <th>Ward no</th>
		    <th>Phone No.</th>
		    <th>Email</th>
		    <th>Skills</th>
		    <th>Volunteering Experience</th>
		    <th>Age</th>
		    <th>Status</th>';

		    $individual_en='<th>S.N</th>
		    <th>Name</th>
		    <th>Affiliated</th>
		    <th>Designation</th>
		    <th>Ward no.</th>
		    <th>Phone No.</th>
		    <th>Email</th>';

		    $individual_nep='<th>क्र.स</th>
		    <th>नाम</th>
		    <th>सम्बद्ध संस्था</th>
		    <th>पद </th>
		    <th>वडा नम्बर</th>
		    <th>सम्पर्क नम्बर</th>
		    <th>इमेल</th>';

		  $organization_en='<th>S.N</th>
		              <th data-th="Health Institutions">Name Of the Organization</th>
		              <th>Type of Organization</th>
		              <th>Address</th>
		              <th>Ward no.</th>
		              <th>Contact no. of Organization</th>
		              <th>Email of Organization</th>
		              <th>Name of the Contact Person</th>
		              <th>Designation of the Person</th>
		              <th>Contact no. of the person</th>
		              <th>Remarks</th>';

		  $organization_nep='<th>क्र.स</th>
		                    <th data-th="Health Institutions">संस्थाको नाम</th>
		                    <th>संस्थाको प्रकार 	</th>
		                    <th>ठेगाना</th>
		                    <th>वडा नम्बर</th>
		                    <th>संस्थाको सम्पर्क नम्बर 	</th>
		                    <th>इमेल</th>
		                    <th>सम्पर्क व्यक्ति</th>
		                    <th>पद </th>
		                    <th>फोन नम्बर </th>
		                    <th> टिप्पणी</th>';





			if($cat=="individual"){

				if($con_lang=='en'){
						 $this->data['header']=$individual_en;
				}else{
						$this->data['header']=$individual_nep;
				 }


			}elseif($cat=="organization"){

				if($con_lang=='en'){
						 $this->data['header']=$organization_en;
				}else{
						 $this->data['header']= $organization_en;
				 }



			}else{

				if($con_lang=='en'){
						 $this->data['header']=$volunteer_en;
				}else{
						 $this->data['header']=$volunteer_nep;
				 }


			}

//$header=$this->data['header'];

	 $tbl_name=$cat.'_contact';
	 $this->data['sub_cat']=$sub_cat;
	 $this->data['cat_contact']=$cat;
	 if($tbl_name=="volunteer_contact"){
		 $this->data['data']=$this->general->get_tbl_data_result('*',$tbl_name,array('language'=>$con_lang));
	 }else{
		 $this->data['data']=$this->general->get_tbl_data_result('*',$tbl_name,array('category'=>$sub_cat,'language'=>$con_lang));
	 }



		// $contact_templates=$this->template
		// 	->enable_parser(FALSE)
		// 	->build('frontend/contact_tbl', $this->data);
			$contact_templates=$this->load->view('frontend/contact_tbl', $this->data);

		 print_r($contact_templates);


	}

	public function downlaod_conatct_tbl(){
		$this->load->model('Main_model');

		$this->load->dbutil();

		$this->load->helper('file');
		$this->load->helper('download');

		$lang=$this->session->get_userdata('Language');
		if($lang['Language']=='en') {
			$con_lang='en';
		}else{
			$con_lang='nep';
		}

		array_map('unlink', glob("uploads/emergency_personnel/*.csv"));

		$sub_cat=$this->input->get('type');
		$namee=ucfirst(str_replace("_"," ",$sub_cat));
		$tbl=$this->input->get('tbl').'_contact';
		// echo $sub_cat;
		// echo $tbl;
		// echo $namee;
if($tbl=="volunteer_contact"){

	$report=$this->Main_model->get_contact_csv_volun($tbl,$con_lang);
}else{

	$report=$this->Main_model->get_contact_csv_new($sub_cat,$tbl,$con_lang);
}

	// var_dump($report->result_array());
	$new_report = $this->dbutil->csv_from_result($report);
	$name = $namee.'.csv';
	file_put_contents('uploads/emergency_personnel/'.$name,$new_report);

	$data=file_get_contents('uploads/emergency_personnel/'.$name);
	force_download($name,$data);



	}

}
