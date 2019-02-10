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
		$this->load->model('Upload_model');
		$this->load->model('Table_model');
	}

	public function contact_admin()
	{
			$this->body= array();
			$lang=$this->session->get_userdata('Language');
			if($lang['Language']=='en') {
					$emerg_lang='en';
			}else{
					$emerg_lang='nep';
			}

	     $edit_cat=$this->input->get('edit_cat');




			if (isset($_POST["apply"])){

				$type=$this->input->post('type');
				 $tbl_name=$type.'_contact';
				 $this->body['tbl_name']=$tbl_name;

				$data = $this->general->get_tbl_data_result('*','contact_categories',array('category'=>$type));
				$this->body['data_list']=$data;
				$this->body['type']=$type;
				$sub_cat=$this->input->post('sub_cat_contact');
				$this->body['name_contact']=$sub_cat;

				$this->body['data']=$this->general->get_tbl_data_result('*',$tbl_name,array('category'=>$sub_cat,'language'=>$emerg_lang));

			}else{

if($edit_cat=="0"){

	     $type=$this->input->get('type');
	      $tbl_name=$type.'_contact';
	        $this->body['tbl_name']=$tbl_name;
	        $this->body['type']=$type;
				$data = $this->general->get_tbl_data_result('*','contact_categories',array('category'=>$type));
				$this->body['data_list']=$data;
				$this->body['name_contact']=$data[0]['name_id'];
				$this->body['data']=$this->general->get_tbl_data_result('*',$tbl_name,array('category'=>$data[0]['name_id'],'language'=>$emerg_lang));


			}else{
				$tbl_name=$this->input->get('tbl');
				$type=strstr($tbl_name,"_",true);
				$this->body['type']=$type;
				// echo $type;
				// die;
				$data = $this->general->get_tbl_data_result('*','contact_categories',array('category'=>$type));
				$this->body['data_list']=$data;
				$this->body['tbl_name']=$tbl_name;
				$tbl_name=$this->input->get('tbl');
				$this->body['name_contact']=$edit_cat;

				$this->body['data']=$this->general->get_tbl_data_result('*',$tbl_name,array('category'=>$edit_cat,'language'=>$emerg_lang));





}



			}

//	die;
	//admin check
	$admin_type=$this->session->userdata('user_type');
	$this->body['admin']=$admin_type;
	//admin check
	$this->template
									->enable_parser(FALSE)
									->build('admin/contact_view',$this->body);

	}


// edit contact
	public function edit_contact(){
		$this->body= array();

		$id=base64_decode($this->input->get('id'));
		$tbl=$this->input->get('tbl');
		$cat=$this->input->get('cat');

	if (isset($_POST["submit"])){
		// var_dump($_POST);
		unset($_POST['submit']);

		  $update=$this->Upload_model->update_emerg($this->input->post('id'),$_POST,$tbl);
			$this->session->set_flashdata('msg','Updated successfully');
			redirect(base_url(FOLDER_ADMIN)."/contact/contact_admin?edit_cat=".$cat."&&tbl=".$tbl);


	}else{

		$this->body['data']=$this->general->get_tbl_data_result('*',$tbl,array('category'=>$cat,'id'=>$id));
		$admin_type=$this->session->userdata('user_type');
		$this->body['admin']=$admin_type;
		//admin check
		$this->template
										->enable_parser(FALSE)
										->build('admin/edit_contact',$this->body);

	}
}

	// edit contact end
public function delete_contact(){

	$id=$this->input->get('id');
	$tbl=$this->input->get('tbl');
	$cat=$this->input->get('cat');

  $delete=$this->Upload_model->delete($id,$tbl);
	$this->session->set_flashdata('msg','Deleted successfully');
	redirect(base_url(FOLDER_ADMIN)."/contact/contact_admin?edit_cat=".$cat."&&tbl=".$tbl);
	}

	public function  emergency_contact_nep(){
		$this->body= array();
        $cat=$this->input->get('cat');
        $lang=$this->session->get_userdata('Language');
        if($lang['Language']=='en') {
            $emerg_lang='en';
        }else{
            $emerg_lang='nep';
        }
        $name=$this->input->get('name');
        $this->body['data'] = $this->general->get_tbl_data_result('*','emergency_contact',array('category'=>$cat,'language'=>$emerg_lang));
        $this->body['cat']=$cat;
        $this->body['name']=$name;
        //admin check
        $admin_type=$this->session->userdata('user_type');
        $this->body['admin']=$admin_type;
        //admin check
        $this->template
                        ->enable_parser(FALSE)
                        ->build('admin/emergency_contact_tbl_nep',$this->body);
    }


public function upload_contact(){

	$this->body=array();
$table_name = $this->input->get('tbl');
$cat= $this->input->get('cat');
// echo $cat;
// echo $table_name;
// die;
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
	if($table_name == 'organization_contact'){
			unset($fields[11]);
			unset($fields[12]);
	}elseif($table_name == 'individual_contact'){
		unset($fields[8]);
		unset($fields[7]);
	}else{
		unset($fields[11]);

	}
		$field_name=implode(",",$fields);
		$f=$_FILES["uploadedfile"];
		$path=$f["tmp_name"];
		chmod($path, 0777);
		$filename=$f["name"];
		$c=$this->Table_model->table_copy($path,$filename,$field_name,$table_name);
		if($c==1){

			if($table_name == 'volunteer_contact'){
				$data=array(

					 'language'=>$lang,
			 );
			}else{
				$data=array(
					 'category'=>$cat,
					 'language'=>$lang,
			 );
			}

				$up=$this->Table_model->update_cat($max_id['id'],$data,$table_name);
			$this->session->set_flashdata('msg','Csv Was successfully Added');
			if($table_name == 'volunteer_contact'){
					redirect(FOLDER_ADMIN.'/contact/volunteer?cat='.$cat);
					//redirect(FOLDER_ADMIN.'/csvtable/upload_csv_emerg/emergency_contact?cat='.$cat);
						}else{
       redirect(base_url(FOLDER_ADMIN)."/contact/contact_admin?edit_cat=".$cat."&&tbl=".$table_name);

			}
		}

} else {
		//admin check
		$admin_type=$this->session->userdata('user_type');
		$this->body['admin']=$admin_type;
		//admin check
		$this->template
											->enable_parser(FALSE)
											->build('admin/upload_contact',$this->body);
		// $this->load->view('admin/header',$this->body);
		// $this->load->view('admin/upload_csv_emerg');
		// $this->load->view('admin/footer');
}

}


    public function edit_emerg() {
        $this->body = array();
        $cat=$this->input->get('cat');
        $tbl=$this->input->get('tbl');
        $name=$this->input->get('name');
        $lang=$this->session->get_userdata('Language');
        //print_r($lang);die;
        //$lang=$this->session->get_userdata('emerg_language');
        if(isset($_POST['submit'])){
            unset($_POST['submit']);
            $update=$this->Upload_model->update_emerg($this->input->post('id'),$_POST,$tbl);
            if($update){
                $this->session->set_flashdata('msg','Updated successfully');
                redirect(FOLDER_ADMIN.'/contact/emergency_contact_nep?cat='.$cat);
            }
        }else{
            $this->body['e_data']=$this->Upload_model->e_data(base64_decode($this->input->get('id')));
            //echo $this->db->last_query();die;
            //echo "<pre>"; print_r($this->body['e_data']);die;
            //admin check
            $admin_type=$this->session->userdata('user_type');

            $this->body['admin']=$admin_type;
            //admin check
            // $this->load->view('admin/header',$this->body);
            // $this->load->view('admin/edit_emerg',$this->body);
            // $this->load->view('admin/footer');
            $this->template
                            ->enable_parser(FALSE)
                            ->build('admin/edit_emerg',$this->body);
        }


    }
  	public function emergency_personnel_nep() {
    	$this->body= array();
      	//$this->session->set_userdata('emerg_language','nep');
      	$cat=$this->input->get('cat');
     	//echo $cat ;
      	if(isset($_POST['submit']))
      	{
            $id=$this->input->post('id');
            $file_name = $_FILES['emerg_pic']['name'];
        	//$ext = pathinfo($file_name, PATHINFO_EXTENSION);
            $img_upload=$this->Upload_model->do_upload_emerg($file_name,$id);
            if($img_upload != ""){
              $ext=$img_upload['upload_data']['file_ext'];
              $image_path=base_url() . 'uploads/emergency_personnel/'.$id.$ext ;
              $data=array(
                'photo'=>$image_path
              );
              $update=$this->Upload_model->update_emerg($id,$data,'emergency_personnel');
              $this->session->set_flashdata('msg','successfully Photo Changed');
              redirect(FOLDER_ADMIN.'/contact/emergency_personnel_nep?cat='.$cat);
            }else{
                $code= strip_tags($img_upload['error']);
                $this->session->set_flashdata('msg', $code);
                redirect(FOLDER_ADMIN.'/contact/emergency_personnel_nep?cat='.$cat);
            }
        }else{
    	    //$this->body['data']=$this->Upload_model->get_emergency_per_nep($cat);
            $lang=$this->session->get_userdata('Language');
            if($lang['Language']=='en') {
                $emerg_lang='en';
            }else{
                $emerg_lang='nep';
            }
            $this->body['data'] = $this->general->get_tbl_data_result('*','emergency_personnel',array('category'=>$cat,'language'=>$emerg_lang));
    	    $this->body['cat']=$cat;
    	    $name=$this->input->get('name');
    	    $this->body['name']=$name;
    	    //admin check
    	    $admin_type=$this->session->userdata('user_type');
    	    $this->body['admin']=$admin_type;
    	    //admin check
    	    $this->template
	                        ->enable_parser(FALSE)
	                        ->build('admin/emergency_personnel_tbl_nep',$this->body);
  		}
	}
    public function emergency_personnel()
    {
        $this->body = array();
        $this->session->set_userdata('emerg_language','en');
        $cat=$this->input->get('cat');
        //echo $cat ;
        if(isset($_POST['submit']))
        {
            $id=$this->input->post('id');
            $file_name = $_FILES['emerg_pic']['name'];
            //$ext = pathinfo($file_name, PATHINFO_EXTENSION);
            $img_upload=$this->Upload_model->do_upload_emerg($file_name,$id);
            if($img_upload != ""){
                $ext=$img_upload['upload_data']['file_ext'];
                $image_path=base_url() . 'uploads/emergency_personnel/'.$id.$ext ;
                    $data=array(
                        'photo'=>$image_path
                    );
                $update=$this->Upload_model->update_emerg($id,$data,'emergency_personnel');
                $this->session->set_flashdata('msg','successfully Photo Changed');
                redirect(FOLDER_ADMIN.'/contact/emergency_personnel?cat='.$cat);
            }else{
                $code= strip_tags($img_upload['error']);
                $this->session->set_flashdata('msg', $code);
                redirect(FOLDER_ADMIN.'/contact/emergency_personnel?cat='.$cat);
            }
        }else{
            $this->body['data']=$this->Upload_model->get_emergency_per($cat);
            $this->body['cat']=$cat;
            $name=$this->input->get('name');
            $this->body['name']=$name;

            //admin check
            $admin_type=$this->session->userdata('user_type');

            $this->body['admin']=$admin_type;
            //admin check
            $this->template
                        ->enable_parser(FALSE)
                        ->build('admin/emergency_personnel_tbl',$this->body);
          // $this->load->view('admin/header',$this->body);
          // $this->load->view('admin/emergency_personnel_tbl',$this->body);
          // $this->load->view('admin/footer');
        }
    }
    public function edit_emergency_personnel(){
        $this->body = array();
        $cat=$this->input->get('cat');
        $tbl=$this->input->get('tbl');
        $lang=$this->session->get_userdata('emerg_language');
        if(isset($_POST['submit'])){
            unset($_POST['submit']);
            $update=$this->Upload_model->update_emerg($this->input->post('id'),$_POST,$tbl);
            if($update){
                $this->session->set_flashdata('msg','Updated successfully');
                redirect(FOLDER_ADMIN.'/contact/emergency_personnel_nep?cat='.$cat);
            }
        }else{
            $this->body['e_data']=$this->Upload_model->e_data_personnel(base64_decode($this->input->get('id')));
            //echo base64_decode($this->input->get('id'));
            // var_dump($this->body['e_data']);

            //admin check
            $admin_type=$this->session->userdata('user_type');

            $this->body['admin']=$admin_type;
            //admin check
            $this->template
                        ->enable_parser(FALSE)
                        ->build('admin/edit_emerg_personnel',$this->body);
            // $this->load->view('admin/header',$this->body);
            // $this->load->view('admin/edit_emerg_personnel',$this->body);
            // $this->load->view('admin/footer');
        }
    }

		//volunteer

		public function volunteer(){
$this->body=array();
			// echo 'adad';
			// exit();

			$lang=$this->session->get_userdata('Language');
			if($lang['Language']=='en') {
					$emerg_lang='en';
			}else{
					$emerg_lang='nep';
			}
			$this->body['data'] = $this->general->get_tbl_data_result('*','volunteer_contact',array('language'=>$emerg_lang));

		$name=$this->input->get('name');

		$this->body['name']=$name;
		//admin check
		$admin_type=$this->session->userdata('user_type');
		$this->body['admin']=$admin_type;
		//admin check
		$this->template
										->enable_parser(FALSE)
										->build('admin/volunteer',$this->body);


		}

		public function edit_volunteer(){



			$this->body = array();

			$tbl=$this->input->get('tbl');
			$lang=$this->session->get_userdata('Language');
			if($lang['Language']=='en') {
					$emerg_lang='en';
			}else{
					$emerg_lang='nep';
			}

			if(isset($_POST['submit'])){
					unset($_POST['submit']);
					$update=$this->Upload_model->update_emerg($this->input->post('id'),$_POST,$tbl);
					if($update){
							$this->session->set_flashdata('msg','Updated successfully');
							redirect(FOLDER_ADMIN.'/contact/volunteer');
					}
			}else{

					$this->body['e_data']=$this->Upload_model->e_volunteer(base64_decode($this->input->get('id')));
					//echo base64_decode($this->input->get('id'));
					 // var_dump($this->body['e_data']);
					 // die;

					//admin check
					$admin_type=$this->session->userdata('user_type');

					$this->body['admin']=$admin_type;

					//admin check

					$this->template
											->enable_parser(FALSE)
											->build('admin/edit_volunteer',$this->body);
		}
	}

	public function delete_emergency(){

    //$cat=$this->input->get('cat');

    $tbl=$this->input->get('tbl');

		if($tbl=='emergency_contact' || $tbl=='emergency_personnel'){
			$cat=$this->input->get('cat');
		}
  //$lang=$this->session->get_userdata('emerg_language');

    $delete=$this->Upload_model->delete($this->input->get('id'),$tbl);


    if($delete){


      $this->session->set_flashdata('msg','Successfully Deleted');

			  if($tbl=='emergency_contact'){

redirect(FOLDER_ADMIN.'/contact/emergency_contact_nep?cat='.$cat);

				}elseif($tbl=='emergency_personnel'){

					  redirect(FOLDER_ADMIN.'/contact/emergency_personnel_nep?cat='.$cat);

				}else{

						redirect(FOLDER_ADMIN.'/contact/volunteer');

				}


		}
	}

}//end
