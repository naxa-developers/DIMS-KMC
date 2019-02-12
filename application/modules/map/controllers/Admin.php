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
	}
	public function index()
	{
		# code...
	}
	public function categories_tbl($language_slug=FALSE) {
		$this->body= array();
		//print_r($this->session->userdata('Language'));
		if($this->session->userdata('Language') == "nep") {
			$lang=$this->session->get_userdata('Language');
			//echo "inside nepali"; die;
		}else{
			$this->session->set_userdata('Language','en');
			$lang=$this->session->get_userdata('Language');
		}
		$this->body['data']=$this->Dash_model->get_tables_data_cat('categories_tbl',$lang['Language']);
		$this->body['tbl_name']='categories_tbl';
		//admin check
		$admin_type=$this->session->userdata('user_type');
		$this->body['admin']=$admin_type;
			if($this->session->userdata('user_type')=='1'){
	  		$this->body['disable']="";
		}else{
		 	$this->body['disable']="disabled";
		}//admin check
		// if($lang['Language'] =='nep') {
		// 	$this->template
        //                       ->enable_parser(FALSE)
        //                       ->build('admin/categories_tbl_nep',$this->body);
		// }else{
		$this->template
                        ->enable_parser(FALSE)
                        ->build('admin/categories_tbl',$this->body);
		//}
	}
	public function edit_categories(){
		$this->body=array();
	    $tbl_namee= base64_decode($this->input->get('tbl'));
	    $tbl_name='categories_tbl';
	    $fields=$this->db->list_fields($tbl_name);
      	$this->form_validation->set_rules('category_name', 'Fill field', 'required');
      	$this->form_validation->set_rules('category_type', 'Fill field', 'required');
  		//  }
    	if ($this->form_validation->run() == FALSE){
      		$e_id=base64_decode($this->input->get('id'));
   			$this->body['fields']=$fields;
	      	$this->body['edit_data']=$this->Dash_model->edit_get_data($e_id,$tbl_name);
	      	//admin check
	      	$admin_type=$this->session->userdata('user_type');
	      	$this->body['admin']=$admin_type;
	     	 //admin check
	      	$this->template
                        ->enable_parser(FALSE)
                        ->build('admin/categories_edit',$this->body);
    	}else{
	        if($_FILES['cat_pic']['name']==''){
		        $data=$_POST;
		        unset($data['id']);
		        $update=$this->Dash_model->update($_POST['id'],$data,$tbl_name);
		        if($update==1){
		        	$this->session->set_flashdata('msg','Id number '.$_POST['id'].' row data was updated successfully');
		        	redirect('categories_tbl?tbl_name='.base64_encode($tbl_name));
		        }else{
	        		//redirect('categories_edit');
	        		redirect(FOLDER_ADMIN.'/map/categories_edit');
	            }
		    }else{
	    		$file_name = $_FILES['cat_pic']['name'];
	 			$img_upload=$this->Dash_model->do_upload($file_name,$tbl_namee);
	            //var_dump ($img_upload);
	  			if($img_upload != ""){
			    	$ext=$img_upload['upload_data']['file_ext'];
			    	$image_path=base_url() . 'uploads/categories/'.$tbl_namee.$ext ;
			    	//  var_dump ($image_path);
			    	$data=$_POST;
			   	 	unset($data['id']);
			    	$data['category_photo']=$image_path;
			    	$update=$this->Dash_model->update($_POST['id'],$data,$tbl_name);
			    	$this->session->set_flashdata('msg','Id number '.$_POST['id'].' row data was updated successfully');
			    	//redirect('categories_tbl?tbl_name='.base64_encode($tbl_name));
                    redirect(FOLDER_ADMIN.'categories_tbl?tbl_name='.base64_encode($tbl_name));
				}
			}
    	}
    }
    public function sub_categories(){
   		$this->body=array();
		$tbl_name=$this->input->get('tbl');
		$this->body['tbl']=$tbl_name;

		$this->body['data']=$this->Dash_model->get_tables_data_lang('tbl_lang',$tbl_name);
		$sel_colum=$this->Dash_model->get_sub_cat_style($tbl_name);
		$this->body['selected_column']=$sel_colum['sub_col'];
		//admin check
		$admin_type=$this->session->userdata('user_type');
		$this->body['admin']=$admin_type;
		$this->template
                        ->enable_parser(FALSE)
                        ->build('admin/select_column',$this->body);
		//admin check
    }
	  // 	public function categories_tbl(){
		 //    //set session eng
			// $this->body=array();
		 //    $this->session->set_userdata('cat_language','en');
		 //    //end
		 //    $this->body['data']=$this->Dash_model->get_tables_data_cat('categories_tbl','en');
		 //    $this->body['tbl_name']='categories_tbl';
		 //    //admin check
		 //    $admin_type=$this->session->userdata('user_type');
		 //    $this->body['admin']=$admin_type;
		 //    if($this->session->userdata('user_type')=='1'){
		 //      	$this->body['disable']="";
		 //    }else{
	  //  			$this->body['disable']="disabled";
	  //       }
	  //   	//admin check
	  //   	$this->template
	  //                       ->enable_parser(FALSE)
	  //                       ->build('admin/categories_tbl',$this->body);
	  //   }
    public function create_categories(){  // create categories

    	$this->body=array();
        if(isset($_POST['submit_cat'])){
            //echo "string"; print_r($this->input->post());die;
        	$cat_name=$this->input->post('cat_name');
            $cat_type=$this->input->post('category_type');
            $upload_type=$this->input->post('upload_type');
        	if($this->session->userdata('Language') == 'nep') {
        		//this is for nepali category name for unique
        		$c = uniqid();
    			$d =  time();
    			$e='tbl_'.$c.$d.'_tbl';
        		$cat_table=$e;
        	}else{
        		$cat_table=strtolower(str_replace(" ","_",$cat_name));
        	}
            if( $this->db->table_exists($cat_table)==true ){
                $this->session->set_flashdata('msg', 'Category Already Exists !! Please use another category name');
                // redirect('categories_tbl');
                redirect(FOLDER_ADMIN.'categories_tbl');
            }else{
                $file_name = $_FILES['cat_pic']['name'];
                if($file_name = $_FILES['cat_pic']['name']==""){
                    $data=array(
                        'category_name'=>$cat_name,
                        'category_table'=>$cat_table,
                        'category_photo'=>$this->input->post('icon'),
                        'category_type'=>$cat_type,
                        'uplaod_type'=>$upload_type,
                        'language'=>'en'
                    );
                    $insert=$this->Dash_model->insert_cat('categories_tbl',$data);
                    if($insert!=""){
                        if($upload_type=='csv'){
                            $this->load->model('Newsletter');
                            $mail_subject='Data Map Added in '.SITE_NAME_EN.' Webpage';
                            $m='New Data Map('.$cat_name.')has been added in '.SITE_NAME_EN.' Webpage.Plese follow link to view new Map Data <br>'.base_url().'category?tbl='.$cat_table;
                            $this->Newsletter->send_mail($m,$mail_subject);
                            $this->session->set_flashdata('msg','Important!!!Create Table for the category '.$cat_name);
                            redirect(FOLDER_ADMIN.'/map/csv_data_tbl?tbl='.base64_encode($cat_name).'&& id='.base64_encode($insert).'&& tbl_name='.base64_encode($cat_table). '&& catname='.$this->input->post('category_type'));

                        }else{
                            $this->load->model('Newsletter');
                            $mail_subject='Data Map Added in '.SITE_NAME_EN.' Webpage';
                            $m='New Data Map('.$cat_name.')has been added in '.SITE_NAME_EN.' Webpage.Plese follow link to view new Map Data <br>'.base_url(FOLDER_ADMIN).'/category?tbl='.$cat_table;
                            $this->Newsletter->send_mail($m,$mail_subject);
                            $this->session->set_flashdata('msg','Note: The Shapefile Co-ordinate System Must Be In WGS84 ie. EPSG:4326 '.$cat_name);
                            redirect(FOLDER_ADMIN.'/layer/add_layers?tbl_name='.$cat_table.'&& id='.$insert);
                        }

                    }else{
                        var_dump($insert);
                    }
                }else{
                    $img_upload=$this->Dash_model->do_upload($file_name,$cat_table);
                    if($img_upload != ""){
                        $ext=$img_upload['upload_data']['file_ext'];
                        $image_path=base_url() . 'uploads/categories/'.$cat_table.$ext ;
                        $data=array(
                            'category_name'=>$cat_name,
                            'category_table'=>$cat_table,
                            'category_photo'=>$image_path,
                            'category_type'=>$cat_type,
                            'uplaod_type'=>$upload_type,
                            'language'=>'en'
                          );
                        $insert=$this->Dash_model->insert_cat('categories_tbl',$data);
                        if($insert!=""){
                            if($upload_type=='csv'){
                                $this->load->model('Newsletter');
                                $mail_subject='Data Map Added in '.SITE_NAME_EN.' Webpage';
                                $m='New Data Map('.$cat_name.')has been added in '.SITE_NAME_EN.' Webpage.Plese follow link to view new Map Data <br>'.base_url().'category?tbl='.$cat_table;
                                $this->Newsletter->send_mail($m,$mail_subject);
                                $this->session->set_flashdata('msg','Important!!!Create Table for the category '.$cat_name);
                                redirect(FOLDER_ADMIN.'/map/csv_data_tbl?tbl='.base64_encode($cat_name).'&& id='.base64_encode($insert).'&& tbl_name='.base64_encode($cat_table));
                            }else{
                                $this->load->model('Newsletter');
                                $mail_subject='Data Map Added in '.SITE_NAME_EN.' Webpage';
                                $m='New Data Map('.$cat_name.')has been added in '.SITE_NAME_EN.' Webpage.Plese follow link to view new Map Data <br>'.base_url().'category?tbl='.$cat_table;
                                $this->Newsletter->send_mail($m,$mail_subject);
                                $this->session->set_flashdata('msg','Note: The Shapefile Co-ordinate System Must Be In WGS84 ie. EPSG:4326 '.$cat_name);
                                redirect(FOLDER_ADMIN.'/layer/add_layers?tbl_name='.$cat_table.'&& id='.$insert);
                            }
                        }else{
                            var_dump($insert);
                        }
                    }else{
                        $code= strip_tags($img_upload['error']);
                        $this->body['error']=$code;
                        //admin check
                        $admin_type=$this->session->userdata('user_type');
                        $this->body['admin']=$admin_type;
                        //admin check
                    }
                }
            }
        }else{
            $this->body['icon']=$this->Dash_model->get_tables_data('icons');
            //admin check
            $admin_type=$this->session->userdata('user_type');
            $this->body['admin']=$admin_type;
            //admin check
        }
        $this->template
                        ->enable_parser(FALSE)
                        ->build('admin/create_categories',$this->body);
    }
    public function csv_data_tbl() {
        $this->body =array();
        $this->data['tbl']=$this->input->get('tbl_name');
        $this->data['id']=$this->input->get('id');
        $this->data['categoryname']=$this->input->get('catname');
        //admin check
        //print_r($this->data['categoryname']);
        // print_r(base64_decode($this->data['tbl']));die;
        $admin_type=$this->session->userdata('user_type');

        $this->data['admin']=$admin_type;
        //admin check
        $this->template
                        ->enable_parser(FALSE)
                        ->build('admin/csv_data_tbl',$this->data);
    }
    public function update_summary(){
    	$this->body =array();
        $tbl=$_GET['tbl'];
        //  $tbl='popup';
        if(isset($_POST['submit'])){
            // var_dump($_POST);exit();
          	$data=array(
            	'summary_list'=>$_POST['summary'],
            );
            $ddata=array(
            	'summary'=>$_POST['summary_data'],
          	);
          	$this->Map_model->update_popup($tbl,$data);
          	$this->Map_model->update_popup($tbl,$ddata);
          	$this->session->set_flashdata('msg',$tbl.' Summary was successfully updated');
          	//redirect('categories_tbl');
          	redirect(FOLDER_ADMIN.'/map/categories_tbl');
        }else{
            $this->body['name_summary']=ucwords(str_replace("_"," ",$tbl));
            $this->body['summary']=$this->Map_model->get_popup($tbl);
            $summary_single=$this->Map_model->get_summary_single($tbl);
            $this->body['selected']=$summary_single;
          	//admin check
          	$admin_type=$this->session->userdata('user_type');
          	$this->body['admin']=$admin_type;
          	if($this->session->userdata('user_type')=='1'){
            	$this->body['disable']="";
          	}else{
            	$this->body['disable']="disabled";
          	}
          	//admin check
          	$this->template
	                        ->enable_parser(FALSE)
	                        ->build('admin/summary',$this->body);

        }
    }
    public function manage_popup(){
    	$this->body = array();
        if(isset($_POST['submit'])){
          	if(isset($_POST['none'])){
            	$table=$_POST['table'];
            	$data= array(
              		'popup_content'=>0,
            	);
            	$this->Map_model->update_popup($table,$data);
            	$this->session->set_flashdata('msg',$table.' Popup was successfully updated');
            	$lang=$this->session->get_userdata('cat_language');
            	if($lang['cat_language']=='en'){
            		redirect(FOLDER_ADMIN.'/map/categories_tbl');
              		//redirect('categories_tbl');
            	}else{
                	//redirect('categories_tbl_nep');
                	redirect(FOLDER_ADMIN.'/map/categories_tbl');
            	}
            	//  redirect('manage_popup?tbl='.$table);
          	}else{
	            $table=$_POST['table'];
	            unset($_POST['submit']);
	            unset($_POST['table']);
	            //var_dump($_POST);
	            //echo $table;
	            //exit();
            	$aa=array();
	            foreach($_POST as $row) {
	               	//var_dump(json_encode($row));
	               	//array design
	               	$a=array(
	                	'col'=> $row[0],
	                	'name'=>$row[1]
	               	);
	               	array_push($aa,$a);
	            }
	            $ab['a']=$aa;
	            $data= array(
	              	'popup_content'=>json_encode($ab),
	            );
	            //echo "<pre>"; print_r($data);die;
	            $this->Map_model->update_popup($table,$data);
	            $this->session->set_flashdata('msg',$table.' Popup was successfully updated');
	            $lang=$this->session->get_userdata('cat_language');
	            if($lang['cat_language']=='en'){
	              	//redirect('categories_tbl');
	              	redirect(FOLDER_ADMIN.'/map/categories_tbl');
	            }else{
	              //redirect('categories_tbl_nep');
	              	redirect(FOLDER_ADMIN.'/map/categories_tbl');
	            }
            	//  redirect('manage_popup?tbl='.$table);
            }
            //end
        }else{
          	$tbl=$_GET['tbl'];

          	$this->body['tbl_name']=$this->Map_model->get_layer('categories_tbl');
          	$this->body['popup']=$this->Map_model->get_popup($tbl);
          	$this->body['table']=$tbl;
          	//admin check
            //echo "<pre>"; print_r($this->body['popup']); exit();
          	$admin_type=$this->session->userdata('user_type');
          	$this->body['admin']=$admin_type;
          	if($this->session->userdata('user_type')=='1'){
            	$this->body['disable']="";
          	}else{
            	$this->body['disable']="disabled";
          	}
          	//admin check
          	$this->template
	                        ->enable_parser(FALSE)
	                        ->build('maplabel',$this->body);
        }
    }
    public function manage_style(){
        $this->body = array();
        $tbl=$_GET['tbl'];
        if(isset($_POST['submit'])){
          	unset($_POST['submit']);
          	$style=json_encode($_POST);
          	// var_dump($style);
          	// echo $tbl;
          	$data=array(
            	'style'=>$style,
			);
            $this->Map_model->update_style($tbl,$data);
          	$this->session->set_flashdata('msg',$tbl.' Style was successfully updated');
          	redirect(FOLDER_ADMIN.'/map/manage_style?tbl='.$tbl);
        }else{
          	$data=$this->Dash_model->get_tbl_type($tbl);
          	$map_data_type=json_decode($data['st_asgeojson'],TRUE)['type'];
          	if($map_data_type=='Point' || $map_data_type=='point' || $map_data_type=='node'){
            	//if($map_data_type=='Point' ){
            	$this->body['tbl']=$tbl;
            	//admin check
            	$admin_type=$this->session->userdata('user_type');
            	$this->body['admin']=$admin_type;
            	if($this->session->userdata('user_type')=='1'){
              		$this->body['disable']="";
            	}else{
              		$this->body['disable']="disabled";
            	}
            	//admin check
            	$this->template
	                        ->enable_parser(FALSE)
	                        ->build('admin/choose_style',$this->body);
          	}else{
	            $data=$this->Map_model->get_summary_list($tbl);
	            $style_array=json_decode($data['style'],TRUE);
	            $this->body['style_array']=$style_array;
	            $this->body['table']=$tbl;
	            //admin check
	            $admin_type=$this->session->userdata('user_type');
	            $this->body['admin']=$admin_type;
	            if($this->session->userdata('user_type')=='1'){
	              $this->body['disable']="";
	            }else{
	              $this->body['disable']="disabled";
	            }
	            //admin check
	            $this->template
	                        ->enable_parser(FALSE)
	                        ->build('admin/manage_style',$this->body);
          	}
        }
    }
    public function delete_data(){
    	$id=$this->input->get('id');
    	$tbl_name=trim($this->input->get('tbl'));
    	$cat_tbl=$this->input->get('cat_tbl');
    	$this->Dash_model->delete_data($id,$tbl_name);
    	if($tbl_name=="categories_tbl"){
      		if ($this->db->table_exists($cat_tbl))
    		{
      			$drop_tbl=$this->dbforge->drop_table($cat_tbl);
    		}
        	$this->Dash_model->delete_lang($cat_tbl);
      		$this->session->set_flashdata('msg','Id number '.$id.' row data was deleted successfully');
      		// check language
            $lang=$this->session->get_userdata('cat_language');
            //if($lang['cat_language']=='en'){
            	//redirect(FOLDER_ADMIN.'/map/categories_tbl');
            	//redirect('categories_tbl?tbl_name='.base64_encode($tbl_name));
        	//}else{
        	redirect(FOLDER_ADMIN.'/map/categories_tbl/categories_tbl?tbl_name='.base64_encode($tbl_name));
        		//redirect('categories_tbl_nep?tbl_name='.base64_encode($tbl_name));
        	//}
        	//languague end
      		//redirect('categories_tbl?tbl_name='.base64_encode($tbl_name));
    	}else{
      		$this->session->set_flashdata('msg','Id number '.$id.' row data was deleted successfully');
      		redirect(FOLDER_ADMIN.'data_tables?tbl_name='.base64_encode($tbl_name));
    	}
  	}
  	public function update_public_view(){
  		if($this->input->server('REQUEST_METHOD')=='POST')
		{
			$data=array(
          	'public_view'=>$this->input->get('value'),
	        );
	        $trans = $this->Map_model->update_value($this->input->get('id'),$data);
	        //echo $this->db->last_query();die;
	        if($trans) {
	        	print_r(json_encode(array('status'=>'success','message'=>'Status Change Successfully !!!')));
	        }else {
	        	print_r(json_encode(array('status'=>'success','message'=>'Cannot Perform this Operation')));
	        }
		}else{
			print_r(json_encode(array('status'=>'error','message'=>'Cannot Perform this Operation')));
			exit;
		}
    }
    public function update_download_allow(){
    	if($this->input->server('REQUEST_METHOD')=='POST')
		{
			$data=array(
          	'allow_download'=>$this->input->get('value'),
	        );
	        $trans = $this->Map_model->update_value($this->input->get('id'),$data);
	        if($trans) {
	        	print_r(json_encode(array('status'=>'success','message'=>'Status Change Successfully !!!')));
	        }else {
	        	print_r(json_encode(array('status'=>'success','message'=>'Cannot Perform this Operation')));
	        }
		}else{
			print_r(json_encode(array('status'=>'error','message'=>'Cannot Perform this Operation')));
			exit;
		}
    }
    public function update_default(){
    	if($this->input->server('REQUEST_METHOD')=='POST')
		{
			$data=array(
	          	'default_load'=>$this->input->get('value'),
	        );
	        $trans = $this->Map_model->update_value($this->input->get('id'),$data);
	        if($trans) {
	        	print_r(json_encode(array('status'=>'success','message'=>'Status Change Successfully !!!')));
	        }else {
	        	print_r(json_encode(array('status'=>'success','message'=>'Cannot Perform this Operation')));
	        }
		}else{
			print_r(json_encode(array('status'=>'error','message'=>'Cannot Perform this Operation')));
			exit;
		}
    }
    // public function change_status_user_interface_status($cond = FALSE) {
    // 	if($cond == )
    //     $data=array(
    //       	'default_load'=>$this->input->get('value'),
    //     );
    //     $this->Map_model->update_value($this->input->get('id'),$data);

    //   }
    //this is for layer create
    public function manage_column_control()
    {
        $this->body =array();
        if(isset($_POST['submit'])){
            if(isset($_POST['none'])){
                // echo "insdie none";echo "<pre>"; print_r($this->input->post());die;
                $table=$_POST['table'];
                $data= array(
                  'column_control'=>0,
                );
                $this->Map_model->update_popup($table,$data);
                $this->session->set_flashdata('msg',$table.' Manage Column Control was successfully updated');
                $lang=$this->session->get_userdata('cat_language');
                if($lang['cat_language']=='en'){
                    //redirect('categories_tbl');
                    redirect(FOLDER_ADMIN.'/map/categories_tbl');
                }else{
                    //redirect('categories_tbl_nep');
                    redirect(FOLDER_ADMIN.'/map/categories_tbl');
                }
                //  redirect('manage_popup?tbl='.$table);
            }else{
                $table=$_POST['table'];
                unset($_POST['submit']);
                unset($_POST['table']);
                //echo "inside insert";echo "<pre>"; print_r($this->input->post());die;
                //var_dump($_POST); echo $table;exit();
								$popup_check=$this->Map_model->get_checkedcolumns_control($table);
								// var_dump($popup_check);
								// die;

                $aa=array();
                foreach($_POST as $row) {
                    //var_dump(json_encode($row));
                    //array design
                    $a=array(
                        'col'=> $row[0],
                        'name'=>$row[1]
                    );
                    array_push($aa,$a);
                }
                $ab['a']=$aa;
								if($popup_check['popup_content']==NULL){
									$data= array(
	                    'column_control'=>json_encode($ab),
	                    'popup_content'=>json_encode($ab),
	                );
								}else{
									$data= array(
											'column_control'=>json_encode($ab),

									);

								}

                //echo "<pre>"; print_r($data);die;
                $this->Map_model->update_popup($table,$data);
                $this->session->set_flashdata('msg',$table.' Manage Column Control was successfully updated');
                $lang=$this->session->get_userdata('cat_language');
                if($lang['cat_language']=='en'){
                    //redirect('categories_tbl');
                    redirect(FOLDER_ADMIN.'/map/categories_tbl');
                }else{
                    //redirect('categories_tbl_nep');
                    redirect(FOLDER_ADMIN.'/map/categories_tbl');
                }
            }//end
        }else{
            $tbl=$_GET['tbl'];
            //echo $tbl ;exit();
            $this->body['tbl_name']=$this->Map_model->get_layer('categories_tbl');
            $this->body['popup']=$this->Map_model->get_popup($tbl);
            $this->body['table']=$tbl;
            //admin check
            $admin_type=$this->session->userdata('user_type');

            $this->body['admin']=$admin_type;
            if($this->session->userdata('user_type')=='1'){

                $this->body['disable']="";

            }else{
                $this->body['disable']="disabled";

            }
          //admin check
            $this->template
                            ->enable_parser(FALSE)
                            ->build('admin/manage_column',$this->body);
          // $this->load->view('admin/header',$this->body);
          // $this->load->view('admin/column_control/manage_column',$this->body);
          // $this->load->view('admin/footer');
        }
    }
    public function getcolumnss() {  //show edit label page
        $tablename=$_GET['tbl'];
        //echo "call"; die;
        $result =  $fields=$this->db->list_fields($tablename);
        //$checked1 = $this->Map_model->get_checkedcolumns($tablename);
        $checked1 = $this->Map_model->get_checkedcolumns_control($tablename);
            //echo"<pre>"; print_r($checked1['column_control']);die;
            // $col_name =json_decode($checked1['column_control'], TRUE);
            // print_r(sizeof($col_name));die;
        $col_name = $this->Map_model->col_name($tablename);
        //echo "<pre>"; print_r($col_name);die;
        $checked2=$checked1['column_control'];
				$html="";
				if($checked2==NULL){

					for ($i=0;$i<sizeof($col_name);$i++) {
	          $checked="checked";

	        //testing for array check in html
	        $html=$html.'<input type="checkbox" name='.$col_name[$i]["eng_lang"].'[] value='.$col_name[$i]["eng_lang"].' id = "ch'.$col_name[$i]["id"].'" class= "chbox" '.$checked.'/>'.$col_name[$i]["nepali_lang"].'<br>'.
	          '<input type="checkbox" name='.$col_name[$i]["eng_lang"].'[] value="'.$col_name[$i]["nepali_lang"].'" class="ch'.$col_name[$i]["id"].'"   hidden '.$checked.'><br>';
	        }

				}else{




        //echo "<pre>";print_r($checked1);die;
        $checked=json_decode($checked2,TRUE);
       // print_r($checked);die;
        //  var_dump($checked2);
        $checked_column_array=array();
        //var_dump($checked);
        if($checked != NULL){
          foreach ($checked as $key) {
            //var_dump($key);
            foreach($key as $key1 => $value){
              array_push($checked_column_array,$value['col']);
            }
          }
        }

        if($checked2 == '0'){
          $html=$html.'<input type="checkbox" name="none" value="" checked/>None <br><br>';
        }
        else{
          $html=$html.'<input type="checkbox" name="none" value="" />None <br><br>';
        }


        for ($i=0;$i<sizeof($col_name);$i++) {
          $checked="";
          for($j=0;$j<sizeof($checked_column_array);$j++)
          {
            if($checked_column_array[$j]== $col_name[$i]['eng_lang']){//check if the checkbox should be checked
              $checked = "checked";
              break;
            }
            else{
              $checked = "";
            }
          }
        //testing for array check in html
        $html=$html.'<input type="checkbox" name='.$col_name[$i]["eng_lang"].'[] value='.$col_name[$i]["eng_lang"].' id = "ch'.$col_name[$i]["id"].'" class= "chbox" '.$checked.'/>'.$col_name[$i]["nepali_lang"].'<br>'.
          '<input type="checkbox" name='.$col_name[$i]["eng_lang"].'[] value="'.$col_name[$i]["nepali_lang"].'" class="ch'.$col_name[$i]["id"].'"   hidden '.$checked.'><br>';
        }
			}
        echo $html;
    }
    public function location_marker(){
        $this->body =array();
        $tbl=$_GET['tbl'];
        if(isset($_POST['submit'])){
            unset($_POST['submit']);

            //var_dump($_POST);
            //var_dump($_FILES['cat_pic']['name']);

            if($_FILES['cat_pic']['name']==''){
                $_POST['opacity']="0";
                $_POST['fillOpacity']="0";
                $_POST['weight']="0";
                $_POST['radius']="0";
                $_POST['color']="0";
                $_POST['fillColor']="0";
                $style=json_encode($_POST);
                //echo "<pre>"; print_r($style);die;
                $data=array(
                  'style'=>$style,
                  'marker_type'=>'icon',
                );
                $this->Map_model->update_style($tbl,$data);
                $this->session->set_flashdata('msg',$tbl.' Style was successfully updated');
                redirect(FOLDER_ADMIN.'/map/location_marker?tbl='.$tbl);
            }else{
                $file_name = $_FILES['cat_pic']['name'];
                $ext = pathinfo($file_name, PATHINFO_EXTENSION);
                $img_upload=$this->Dash_model->do_upload_marker($file_name,$tbl);
                if($img_upload==1){
                $image_path=base_url() . 'uploads/icons/map/'.$tbl.'.'.$ext ;
                $st=array(
                    'icon'=>$image_path,
                    'opacity'=>0,
                    'fillOpacity'=>0,
                    'weight'=>0,
                    'radius'=>0,
                    'color'=>0,
                    'fillColor'=>0,
                );
                $style=json_encode($st);
                $data=array(
                    'style'=>$style,
                    'marker_type'=>'icon',
                );
                $this->Map_model->update_style($tbl,$data);
                $this->session->set_flashdata('msg',$tbl.' Style was successfully updated');
                redirect(FOLDER_ADMIN.'/map/location_marker?tbl='.$tbl);
                }else{
                    $code= strip_tags($img_upload['error']);
                    $this->session->set_flashdata('msg', $code);
                    redirect(FOLDER_ADMIN.'/map/location_marker?tbl='.$tbl);
                }
            }
        }else{
            $data=$this->Map_model->get_summary_list($tbl);
            $style_array=json_decode($data['style'],TRUE);
            $this->body['style_array']=$style_array;
            $this->body['tbl']=$tbl;
            $this->body['icons']=$this->Map_model->get_icon();
            //admin check
            $admin_type=$this->session->userdata('user_type');

            $this->body['admin']=$admin_type;
            if($this->session->userdata('user_type')=='1'){
                $this->body['disable']="";
            }else{
                $this->body['disable']="disabled";
            }
             $this->template
                            ->enable_parser(FALSE)
                            ->build('admin/choose_icon',$this->body);

            // $this->load->view('admin/header',$this->body);
            // $this->load->view('admin/choose_icon',$this->body);
            // $this->load->view('admin/footer');
        }
    }
    public function circle_marker(){
        $this->body =array();
        $tbl=$_GET['tbl'];
        if(isset($_POST['submit'])){
            unset($_POST['submit']);
            $style=json_encode($_POST);
            echo $style ;
            $data=array(
                'style'=>$style,
                'marker_type'=>NULL,
            );
            $this->Map_model->update_style($tbl,$data);
            $this->session->set_flashdata('msg',$tbl.' Style was successfully updated');
            redirect(FOLDER_ADMIN.'/map/circle_marker?tbl='.$tbl);
        }else{
            $data=$this->Map_model->get_summary_list($tbl);
            $style_array=json_decode($data['style'],TRUE);
            $this->body['style_array']=$style_array;
            $this->body['tbl']=$tbl;
            //admin check
            $admin_type=$this->session->userdata('user_type');
            $this->body['admin']=$admin_type;
            if($this->session->userdata('user_type')=='1'){
                $this->body['disable']="";
            }else{
                $this->body['disable']="disabled";
            }
            $this->template
                            ->enable_parser(FALSE)
                            ->build('admin/circle_manage',$this->body);
            // $this->load->view('admin/header',$this->body);
            // $this->load->view('admin/circle_manage',$this->body);
            // $this->load->view('admin/footer');
        }
    }
    public function getcolumnsselected() {  //show edit label page
        $tablename=$_GET['tbl'];
        $result =  $fields=$this->db->list_fields($tablename);
        $checked1 = $this->Map_model->get_checkedcolumns_control($tablename);

          //echo"<pre>";  print_r($result);die;
        $col_name = $checked1['column_control'];

			$col_name_array=json_decode($col_name,TRUE);
			//var_dump($col_name_array['a'][0]['col']);
				// var_dump(sizeof($col_name_array['a']));
				// die;

        //echo "<pre>"; print_r($col_name);die;
        $checked2=$checked1['popup_content'];
        //echo "<pre>";print_r($checked1);die;
        $checked=json_decode($checked2,TRUE);
       // print_r($checked);die;
        //  var_dump($checked2);
        $checked_column_array=array();
        //var_dump($checked);
        if($checked != NULL){
          foreach ($checked as $key) {
            //var_dump($key);
            foreach($key as $key1 => $value){
              array_push($checked_column_array,$value['col']);
            }
          }
        }
        $html="";
        if($checked2 == '0'){
          $html=$html.'<input type="checkbox" name="none" value="" checked/>None <br><br>';
        }
        // else{
        //   $html=$html.'<input type="checkbox" name="none" value="" />None <br><br>';
        // }


        for ($i=0;$i<sizeof($col_name_array['a']);$i++) {
          $checked="";
          for($j=0;$j<sizeof($checked_column_array);$j++)
          {
            if($checked_column_array[$j]== $col_name_array['a'][$i]['col']){//check if the checkbox should be checked
              $checked = "checked";

           //  $html=$html.'<input type="checkbox" name='.$col_name[$i]["eng_lang"].'[] value='.$col_name[$i]["eng_lang"].' id = "ch'.$col_name[$i]["id"].'" class= "chbox" '.$checked.'/>'.$col_name[$i]["nepali_lang"].'<br>'.
           // '<input type="checkbox" name='.$col_name[$i]["eng_lang"].'[] value="'.$col_name[$i]["nepali_lang"].'" class="ch'.$col_name[$i]["id"].'"   hidden '.$checked.'><br>';
              break;
            }
            else{
              $checked = "";
            }
          }
        //testing for array check in html
        $html=$html.'<input type="checkbox" name='.$col_name_array['a'][$i]['col'].'[] value='.$col_name_array['a'][$i]['col'].' id = "ch'.$i.'" class= "chbox" '.$checked.'/>'.$col_name_array['a'][$i]['name'].'<br>'.
          '<input type="checkbox" name='.$col_name_array['a'][$i]['col'].'[] value="'.$col_name_array['a'][$i]['name'].'" class="ch'.$i.'"   hidden '.$checked.'><br>';
        }
        echo $html;
    }
}
