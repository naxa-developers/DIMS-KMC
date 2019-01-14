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
		$this->load->model('Admin_dash_model');
		$this->load->dbforge();
		$this->load->model('Dash_model');
		$this->load->model('Map_model');
		$this->load->model('Table_model');

	}
	public function index()
	{
		# code...
	}
	public function csv_tbl(){
		$this->body = array();
	    //admin check
	    $admin_type=$this->session->userdata('user_type');
	    $this->body['admin']=$admin_type;
	    if($this->session->userdata('user_type')=='1'){
	      $this->body['disable']="";
	    }else{
	   		$this->body['disable']="disabled";
	    }
	    //admin check
	    $tbl_name=base64_decode($this->input->get('tbl'));
	    if(isset($_POST['submit'])){
	      	$file=$_FILES ["fileToUpload"];

	      // $tbl_name=strstr($file['name'], '.', true);
	      // $tbl_name=strtolower($tbl_name);

	     // var_dump($file['name']);die;
	      	//echo error_reporting();

	      $csv_file=$file['tmp_name'];
	      //$csv_file = file_get_contents($csv_file);
	      //var_dump($csv_file);
	      // exit();
	     chmod($csv_file, 777);
	      //$csv_file = str_replace('\\','\\\\',$cju); //print_r($cju);die;
	      $fp = fopen($csv_file, 'r');
	    	// $fp = fopen("F:\\folder\\tmp\\php7749.tmp", 'r');
	      //print_r($fp); die;
	      $frow = fgetcsv($fp);
	      //$frow=trim($frow," ");
	      // var_dump($frow); exit();
	      $n=sizeof($frow);
	      $row=array();
	      for($i=0;$i<$n;$i++){
	        //echo $frow[$i];
	        array_push($row,trim($frow[$i]," "));
	      }

	      if( $this->db->table_exists($tbl_name) == FALSE ){

	        $this->dbforge->add_field('id');

	        $create=$this->dbforge->create_table($tbl_name, FALSE);

	        if($create==true){

	          for($i=0;$i<sizeof($row);$i++){

	            $fields =
	            array(

	              'a'.$i=> array(
	                'type' =>'varchar',

	              ),
	            );

	            $add_column=$this->dbforge->add_column($tbl_name,$fields);

	            // inserting corresponding nepali and englis column name in table

	            $data_lang=array(

	              'eng_lang'=>'a'.$i,
	              'nepali_lang'=>preg_replace('/[^A-Za-z0-9\-]/', ' ',$row[$i]),
	              'tbl_name'=>$tbl_name,


	            );

	            $lang_insert=$this->Dash_model->insert_lang('tbl_lang',$data_lang);



	          }

	          $geom_index=sizeof($row)+1;

	          $data_lang=array(

	            'eng_lang'=>'the_geom',
	            'nepali_lang'=>'the_geom',
	            'tbl_name'=>$tbl_name,


	          );

	          $lang_insert=$this->Dash_model->insert_lang('tbl_lang',$data_lang);


	          $filename=$file['name'];
	          $fields=$this->db->list_fields($tbl_name);
	          unset($fields[0]);
	          $field_name=implode(",",$fields);
	          $c=$this->Table_model->table_copy($csv_file,$filename,$field_name,$tbl_name);

	        }else{
	          echo 'not craete table';
	        }

	      }else{

	        echo 'table';
	      }

	      $this->body['csv_file']=$csv_file;
	      $this->body['row']=$row;
	        $this->template
	                        ->enable_parser(FALSE)
	                        ->build('admin/csv_row',$this->body);

	      // $this->load->view('admin/header',$this->body);
	      // $this->load->view('admin/csv_row',$this->body);
	      // $this->load->view('admin/footer');




	    }elseif(isset($_POST['submit_row'])){

	      //var_dump($_POST);
	      $fields = array(
	        'the_geom' => array('type' => 'geometry')
	      );
	      $this->dbforge->add_column($tbl_name, $fields);
	      $lo=$_POST['long'];
	      $la=$_POST['lat'];
	      $long='a'.$lo;
		      $lat='a'.$la;

		      $this->Dash_model->create_geom($long,$lat,$tbl_name);
		      //$data=$this->Dash_model->get();
		      redirect(FOLDER_ADMIN.'/map/manage_column_control?tbl='.$tbl_name);




		    }else{

		      // $this->load->view('admin/header',$this->body);
		      // $this->load->view('admin/csv_file');
		      // $this->load->view('admin/footer');
		    	$this->template
	                        ->enable_parser(FALSE)
	                        ->build('admin/csv_file',$this->body);


		    }
    }
    public function upload_csv_emerg() {
    	$this->body=array();
		$table_name = $this->input->get('tbl');
		$cat= $this->input->get('cat');
		 $lanuage=$this->session->get_userdata('Language');
		if($lanuage['Language']=='en') {
            $lang='en';
        }else{
            $lang='nep'; 
        }
		if (isset($_POST['submit'])) {
			$max_id=$this->Table_model->get_max_id($table_name);
			$fields=$this->db->list_fields($table_name);
			unset($fields[0]);
			if($table_name == 'emergency_contact'){
			  	unset($fields[10]);
			}else{
				unset($fields[8]);
			}
		  	$field_name=implode(",",$fields);
		  	$f=$_FILES["uploadedfile"];
		  	$path=$f["tmp_name"];
		  	chmod($path, 0777);
		  	$filename=$f["name"];
		  	$c=$this->Table_model->table_copy($path,$filename,$field_name,$table_name);
		  	if($c==1){
			    $data=array(
			        'category'=>$cat,
			        'language'=>$lang,
			    );
		      	$up=$this->Table_model->update_cat($max_id['id'],$data,$table_name);
		    	$this->session->set_flashdata('msg','Csv Was successfully Added');
		    	if($table_name == 'emergency_contact'){
		        	redirect(FOLDER_ADMIN.'/contact/emergency_contact_nep?cat='.$cat);
		        	//redirect(FOLDER_ADMIN.'/csvtable/upload_csv_emerg/emergency_contact?cat='.$cat);
			    }else{
			        //redirect(FOLDER_ADMIN.'/csvtable/upload_csv_emerg/emergency_personnel?cat='.$cat);
			        redirect(FOLDER_ADMIN.'/contact/emergency_contact_nep?cat='.$cat);
			    }
		  	}
		  	// else{

		  	//   // $this->session->set_flashdata('msg','Id number '.$id.' row data was deleted successfully');
		  	//   // //redirect('data_tables?tbl_name='.base64_encode($table_name));

		  	// }
		  	// code...
		} else {
		  	//admin check
		  	$admin_type=$this->session->userdata('user_type');
		  	$this->body['admin']=$admin_type;
		  	//admin check
		  	$this->template
	                        ->enable_parser(FALSE)
	                        ->build('admin/upload_csv_emerg',$this->body);
		  	// $this->load->view('admin/header',$this->body);
		  	// $this->load->view('admin/upload_csv_emerg');
		  	// $this->load->view('admin/footer');
		}
  	}
  	public function upload_dictionary()
  	{
  		$this->data=array();
  		$table_name = "dictionary_tbl";
		$lanuage=$this->session->get_userdata('Language');
		if($lanuage['Language']=='en') {
            $lang='en';
        }else{
            $lang='nep'; 
        }
		if (isset($_POST['submit'])) {
			$max_id=$this->Table_model->get_max_id($table_name);
			$fields=$this->db->list_fields($table_name);
			unset($fields[0]);
			if($table_name == 'dictionary_tbl'){
			  	unset($fields[10]);
			}else{
				unset($fields[8]);
			}
		  	$field_name=implode(",",$fields);
		  	$f=$_FILES["uploadedfile"];
		  	$path=$f["tmp_name"];
		  	chmod($path, 0777);
		  	$filename=$f["name"];
		  	$c=$this->Table_model->table_copy($path,$filename,$field_name,$table_name);
		  	if($c==1){
			    $data=array(
			        'language'=>$lang,
			    );
		      	$up=$this->Table_model->update_cat($max_id['id'],$data,$table_name);
		    	$this->session->set_flashdata('msg','Csv Was successfully Added');
		    	if($table_name == 'dictionary_tbl'){
		        	redirect(FOLDER_ADMIN.'/dictionary');
			    }else{
			        redirect(FOLDER_ADMIN.'/dictionary');
			    }
		  	}
		}else {
		  	//admin check
		  	$admin_type=$this->session->userdata('user_type');
		  	$this->data['admin']=$admin_type;
		  	//admin check
		  	$this->template
	                        ->enable_parser(FALSE)
	                        ->build('admin/upload_dictionary',$this->data);
		}
  	}
  	public function upload_inventory_data($cat)
  	{
  		$this->data=array();
  		$table_name = "inventory";
		$lanuage=$this->session->get_userdata('Language');
		if($lanuage['Language']=='en') {
            $lang='en';
        }else{
            $lang='nep'; 
        }
		if (isset($_POST['submit'])) {
			$max_id=$this->Table_model->get_max_id($table_name);
			$fields=$this->db->list_fields($table_name);
			unset($fields[0]);
			if($table_name == 'inventory'){
			  	unset($fields[6]);
			  	unset($fields[7]);
			}else{
				unset($fields[8]);
			}
		  	$field_name=implode(",",$fields);
		  	$f=$_FILES["uploadedfile"];
		  	$path=$f["tmp_name"];
		  	chmod($path, 0777);
		  	$filename=$f["name"];
		  	$c=$this->Table_model->table_copy($path,$filename,$field_name,$table_name);
		  	//echo"<pre>";print_r($c);die;
		  	if($c==1){
			    $data=array(
			        'language'=>$lang,
			        'category'=>$cat,
			    );
		      	$up=$this->Table_model->update_cat($max_id['id'],$data,$table_name);
		    	$this->session->set_flashdata('msg','Csv Was successfully Added');
		    	if($table_name == 'dictionary_tbl'){
		        	redirect(FOLDER_ADMIN.'/inventory/inventory_data');
			    }else{
			        redirect(FOLDER_ADMIN.'/inventory/inventory_data');
			    }
		  	}
		}else {
		  	//admin check
		  	$admin_type=$this->session->userdata('user_type');
		  	$this->data['admin']=$admin_type;
		  	//admin check
		  	$this->template
	                        ->enable_parser(FALSE)
	                        ->build('admin/upload_csv_inventory',$this->data);
		}
  	}
}