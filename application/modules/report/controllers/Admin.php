<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
class Admin extends Admin_Controller {
	function __construct() {
		if(!$this->session->userdata('logged_in'))
		{
			redirect(ADMIN_LOGIN_PATH, 'refresh');exit;
		}
		$this->template->set_layout('admin/default');
		$this->load->model('Report_model');
		$this->load->model('Dash_model');
		$this->load->model('Ghatana_model');
	}
	public function index()
	{
		# code...
	}
	public function report_manage() {
		$this->body= array();
    	if(isset($_POST['submit'])) {
	      	var_dump($_POST);
	      	$id=$this->input->post('id');
	      	if($this->input->post('status')=='completed'){
		      	$data=$this->Report_model->get_data($id);
		      	$this->load->model('Newsletter');
		      	$mail_subject='Report';
		      	$m='Report submitted by '.$data["name"].' about '.$data["incident_type"].' From Ward '.$data["ward"].' has been Completed. Complaint was as:<br> '.$data["message"].'<br> Plese follow link to view all report <br>'.base_url().'report_page';
		      	$this->Newsletter->send_mail($m,$mail_subject);
	      	}
	      	$status=array(
	        	'status'=>$this->input->post('status'),
	      	);
	      	$this->Report_model->update_img_path($id,$status);
	      	$this->session->set_flashdata('msg', 'Satus successfully Changed');
	      	redirect('report_manage');
    	}else{
      		$this->body['data']=$this->Report_model->get_report_data();
      		//var_dump($this->body['data']);
      		//admin check
        	$admin_type=$this->session->userdata('user_type');
      		$this->body['admin']=$admin_type;
      		//admin check
      		$this->template
                        ->enable_parser(FALSE)
                        ->build('admin/report_tbl',$this->body);
        }
    }
    public function delete_data() {
	    $id=$this->input->get('id');
	    $tbl_name='report_tbl';
	    $this->Dash_model->delete_data($id,$tbl_name);
	    $this->session->set_flashdata('msg','Id number '.$id.' row data was deleted successfully');
	    redirect('report_manage');
  	}
    public function delete()//delete_data
    {
    	$id=$this->input->get('id');
	    $tbl_name='report_tbl';
	    $this->Dash_model->delete_data($id,$tbl_name);
	    $this->session->set_flashdata('msg','Id number '.$id.' row data was deleted successfully');
	    redirect(FOLDER_ADMIN.'/report/report_manage');
    }
    //this is for ghatana bibiran 
    public function  ghatana() { //view_ghatana
    	$this->body = array();
	    $this->body['data']=$this->Ghatana_model->get_data();
	    //admin check
	    $admin_type=$this->session->userdata('user_type');
	    $this->body['admin']=$admin_type;
	    //admin check
	    $this->template
                        ->enable_parser(FALSE)
                        ->build('admin/ghatana',$this->body);
    }
    public function ghatana_edit() {
    	$this->body=array();
		$id=base64_decode($this->input->get('id'));
	  	if(isset($_POST['submit'])){
	   		unset($_POST['submit']);
	   		$_POST['date']=date("Y-m-d");
			$update=$this->Ghatana_model->update_data($id,$_POST);
			if ($update==1) {
			  	$this->session->set_flashdata('msg','Data was Updated successfully');
			  	redirect(FOLDER_ADMIN.'/report/ghatana');
			}
	    }else{
			$this->body['e_data']=$this->Ghatana_model->edit_data($id);
			$this->body['fields']= $this->db->list_fields('map_reports_table');
			//echo $id;var_dump($this->body['e_data']);exit();
			//admin check
			$admin_type=$this->session->userdata('user_type');
			$this->body['admin']=$admin_type;
			//admin check
			$this->template
                        ->enable_parser(FALSE)
                        ->build('admin/edit_ghatana',$this->body);
		}
	}
    public function ghatana_delete(){
		$id=$this->input->get('id');
		$del=$this->Ghatana_model->delete_data($id);
		if ($del) {
		    $this->session->set_flashdata('msg','Data was Deleted successfully');
		    //redirect('ghatana');
		    redirect(FOLDER_ADMIN.'/report/ghatana');
		} else {
		    // db error
		}
	}
	public function add_ghatana(){
		$this->body = array();
		if(isset($_POST['submit'])){
		    unset($_POST['submit']);
		    //var_dump($_POST);
		    $_POST['date']=date("Y/m/d");
		    $insert = $this->Ghatana_model->add_ghatana('map_reports_table',$_POST);
		    if($insert != " "){
		        $this->session->set_flashdata('msg','New data was added successfully');
		        //redirect('ghatana');
		        redirect(FOLDER_ADMIN.'/report/ghatana');
		    }
		}else{
		    $this->body['fields']= $this->db->list_fields('map_reports_table');
		    //admin check
		    $admin_type=$this->session->userdata('user_type');
		    $this->body['admin']=$admin_type;
		    //admin check
		    $this->template
                        ->enable_parser(FALSE)
                        ->build('admin/add_ghatana',$this->body);
		}
	}
	public function map_reports_table(){
    	//language
    	$this->body = array();
	    if(isset($_POST['submit'])){
	       	$sql="select * FROM map_reports_table WHERE ";
	       	unset($_POST['submit']);
	       	foreach($_POST as $key => $value ){
		        //echo $value;
		        //echo $key;
		        if($_POST[$key]!='0'){
		          	//echo $key;
		          	if($key == "from" && $_POST['from'] != ""){
		            	$sql.="date >= '".$value."' AND ";
		          	}
		          	elseif($key == "to" && $_POST['to'] != ""){
		            	$sql.="date <= '".$value."' AND ";
		          	}
		          	elseif($key != "from" && $key != "to"){
		            	$sql.=$key."='".$value."' AND ";
		          	}
		        }
		    }
	      	$query=substr($sql, 0, strlen($sql)-4);
	        $queryy=$this->db->query($query);
	        $this->body['data']= $queryy->result_array();
	      	$this->body['query']=$query;
	    }else{
			$this->body['data']=$this->Report_model->get_map_reports_table();
			$this->body['query']="select * FROM map_reports_table";
	    }
	    if($this->session->userdata('Language')==NULL){
	      	$this->session->set_userdata('Language','nep');
	    }
	    $lang=$this->session->get_userdata('Language');
	    $this->body['site_info']= array();
	    if($lang['Language']=='en'){
	       	$this->body['reports_tbl_lang']='en';
	    }else{
	       	$this->body['reports_tbl_lang']='nep';
	    }
	    $this->body['admin'] = "";
	    $this->body['urll']=$this->uri->segment(1);
	    //language
	    $this->template
                        ->enable_parser(FALSE)
                        ->build('admin/map_reports_table',$this->body);
	    // $this->load->view('header',$this->body);
	    // $this->load->view('map_reports_table',$this->body);
	    // $this->load->view('footer',$this->body);
  	}
}
