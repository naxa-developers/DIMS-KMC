<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Map extends Admin_Controller
{
	function __construct()
	{
        $this->load->model('Main_model');
        $this->load->model('Upload_model');
        $this->load->model('Report_model');
        $this->load->model('Map_model');
        $this->load->model('Dash_model');


	}
	public function index() //default_page
    {

    	$this->data=array();
    	$this->body=array();
    	$this->template->set_layout('frontend/maplayout');
	    $lang=$this->session->get_userdata('Language');
	    if($lang['Language']=='en') {
	      $language='en';
	    }else{
	      $language='nep';
	    }

      	$cat_tbl = $this->general->get_tbl_data_result('summary,category_table,popup_content,category_name,style,marker_type','categories_tbl',array('language'=>$language,'default_load'=>'1','public_view'=>'1'));
      	$this->data['layerscategory'] = $this->general->get_tbl_data_result('uplaod_type,style,category_table,category_name','categories_tbl',array('language'=>$language,'public_view'=>'1'));
      	//echo "<pre>"; print_r($this->data['layerscategory']);
				$this->data['cat_tbl_data'] =$this->general->get_tbl_data_result('category_table','categories_tbl',array('language'=>$language,'default_load'=>'1','public_view'=>'1'));

					if($cat_tbl){
	      		$summarydatafreejson =array();
	      		$this->data['summaryFull_defalt']=array();
	      		foreach ($cat_tbl as $key => $value) {

	      			$summarydata= $this->general->get_tbl_data_result('summary,summary_list,category_table,popup_content,category_name,style,marker_type','categories_tbl',array('language'=>$language,'public_view'=>'1','category_table'=>$value['category_table']));
		      		//echo $this->db->last_query();die;

		      		$summarylist = $this->Map_model->get_summary($summarydata[0]['summary_list'],$value['category_table']);
		      		//foreach ($summarylist as  $sdm) {

		      		$summaryname = $summarydata[0]['summary'];
		      			array_push($summarydatafreejson, trim(trim(json_encode($summarylist,JSON_NUMERIC_CHECK),'['),']"'));
		      		$this->data['summaryFull_defalt']=json_encode($summaryname);
	      		}
	      		$this->data['summarydata_default']=json_encode($summarydatafreejson);
	      	// print_r($this->data['summaryFull_defalt']);die;
	        }else{
	       		$summarylist ="";
	        }

        $this->data['category_name']=$cat_tbl;
        $popup = array();
        $style = array();
        $marker_type = array();
        $summary_data=array();
        if(!empty($cat_tbl)):
	        foreach($cat_tbl as $tbl){
	          	if(!$this->db->table_exists($tbl['category_table'])){
	          	}else{
	            	$cat_tbles[]=$tbl['category_table'];
	            	$cat_names[]=$tbl['category_name'];
	            	$summary_data[]=$tbl['summary'];

	            	array_push($popup, trim(trim(json_encode($tbl['popup_content'],JSON_NUMERIC_CHECK),'"['),']"'));
	            	array_push($style, trim(trim(json_encode($tbl['style'],JSON_NUMERIC_CHECK),'"['),']"'));
	            	array_push($marker_type, trim(trim(json_encode($tbl['marker_type'],JSON_NUMERIC_CHECK),'"['),']"'));
	          	}
	        }
	    endif;
        $category_data = array();
        if(!empty($cat_tbles)):
	        for($i=0; $i<sizeof($cat_tbles); $i++){

	          	$data_jsn=$this->Map_model->get_jsn($cat_tbles[$i]);

				$data_array=json_decode($data_jsn['column_control'],TRUE);
				//echo "ghkjl";echo"<pre>"; print_r($data_array);die;
				$report=$this->Map_model->get_data_geojson($data_array,$cat_tbles[$i]);

				$get_map=$report->result_array();

	          	if (isset($features_cat)){
	            	$features_cat = array();
	          	}
	          	foreach($get_map as $cat_data){
	            	$cat_ddata=$cat_data ;
	            	unset($cat_data['st_asgeojson']);
	            	$features_cat[]= array(
		              'type' =>'Feature',
		              'properties'=>$cat_data,
		              'geometry'=>json_decode($cat_ddata['st_asgeojson'],JSON_NUMERIC_CHECK)
		            );
		        }
	          	$category= $cat_tbles[$i];
	          	$$category= array(
	            	'type' => 'FeatureCollection',
	            	'features' => $features_cat,
	          	);
	          //var_dump($$category);
	          array_push($category_data,$$category);
	        }
					 // var_dump($category_data);
					 // die;
    	endif;
        $this->data['default_cat_map_layer']= json_encode($category_data, JSON_NUMERIC_CHECK);
        $this->data['summarycount']=count($summarylist);
        $newsumary = str_ireplace('<p>','',$summary_data);
       //print_r(str_ireplace('</p>','',$newsumary));die;

       	$this->data['category_summary_default']= json_encode(!empty($summary_data)?str_ireplace('</p>','',$newsumary):'', JSON_NUMERIC_CHECK);
       	//echo "<pre>"; print_r($this->data['category_summary_default']);die;
        $this->data['category_tbl_default']= json_encode(!empty($cat_tbles)?$cat_tbles:'', JSON_NUMERIC_CHECK);
        $this->data['category_names_default']= json_encode(!empty($cat_names)?$cat_names:'', JSON_NUMERIC_CHECK);
        $this->data['popup_content_default']= json_encode(!empty($popup)?$popup:'', JSON_NUMERIC_CHECK);
        $this->data['style_default']= json_encode(!empty($style)?$style:'', JSON_NUMERIC_CHECK);
        $this->data['marker_type_default']= json_encode(!empty($marker_type)?$marker_type:'', JSON_NUMERIC_CHECK);


        //var_dump($this->data['summarydata']);

        $this->data['data']=$this->Dash_model->get_tables_data('categories_tbl');
        //views add
        $count_dataset=$this->Dash_model->get_count_views_datasets($this->input->get('tbl'));
        //var_dump($count_dataset);
        $count=$this->Report_model->get_count_views('map');

        $add_count=$count['views_count']+1;
        $add_count_dataset=$count_dataset['views']+1;
        $data=array(
          	'views_count'=>$add_count,

        );
        $data_dataset=array(
          	'views'=>$add_count_dataset,
        );
		//echo "<pre>"; print_r( $this->data['cat_map_layer']);die;
        $this->Report_model->update_views($count['id'],$data);
        $this->Dash_model->cat_update($count_dataset['id'],$data_dataset);
        $def_select=$this->Dash_model->get_default_cat_data('categories_tbl');
        $this->data['default_selected_cat_tbl']=$def_select['category_table'];
        $this->data['default_selected_cat_name']=$def_select['category_name'];
        if($language=='en'){
	       // $this->data['site_info']=$this->Main_model->site_setting_en();
	        //$this->data['data']=$this->Map_model->get_layer_en('categories_tbl');
	        $this->data['data_haza']=$this->Map_model->get_layer_en('categories_tbl','Hazard_Data');
	        $this->data['data_ex']=$this->Map_model->get_layer_en('categories_tbl','Exposure_Data');
	        $this->data['data_base']=$this->Map_model->get_layer_en('categories_tbl','Baseline_Data');
        }else{
      		//$this->data['site_info']=$this->Main_model->site_setting_nep();
      		$this->data['data_haza']=$this->Map_model->get_layer_nep('categories_tbl','Hazard_Data');
      		$this->data['data_ex']=$this->Map_model->get_layer_nep('categories_tbl','Exposure_Data');
      		$this->data['data_base']=$this->Map_model->get_layer_nep('categories_tbl','Baseline_Data');
        }
        //echo "<pre>";print_r($this->data['data_haza']);die;
        $urly='category?tbl=0&&name=0 ';
        $this->data['urll']=$urly;
        $this->data['map_zoom_center']=$this->Report_model->site_setting();
		$this->template
			->enable_parser(FALSE)
			->build('frontend/map', $this->data);
    }
    public function get_layers_onrequest()
    {
    	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	    	$lang=$this->session->get_userdata('Language');
		    if($lang['Language']=='en') {
		      $language='en';
		    }else{
		      $language='nep';
		    }
	    	$layer_name = $this->input->post('layername');//'health_facilities';//
	    	$resultdata = $this->general->get_tbl_data_result('summary,summary_list,category_table,popup_content,category_name,style,marker_type','categories_tbl',array('language'=>$language,'public_view'=>'1','category_table'=>$layer_name));
	    		//select column control data from database
	    		
	    		$data_jsn=$this->Map_model->get_jsn($layer_name);
				$data_array=json_decode($data_jsn['column_control'],TRUE);

				$report=$this->Map_model->get_data_geojson($data_array,$layer_name);
				$dataset_data=$report->result_array();

				if (isset($features_cat)){
					$features_cat = array();
				}
				foreach($dataset_data as $cat_data){
					$cat_ddata=$cat_data ;
					unset($cat_data['st_asgeojson']);
					$features_cat[]= array(
						'type' =>'Feature',
						'properties'=>$cat_data,
						'geometry'=>json_decode($cat_ddata['st_asgeojson'],JSON_NUMERIC_CHECK)
					);
			}
				//$category= $cat_tbles[$i];
				$category= array(
					'type' => 'FeatureCollection',
					'features' => $features_cat,
				);
			//var_dump($$category);
		//	array_push($category_data,$$category);


				//retrive summary list to plot in map
				$summarylist = $this->Map_model->get_summary($resultdata[0]['summary_list'],$layer_name);
				//echo "<pre>"; print_r($dataset_data);die;
		        $response['geojson']=json_encode($category);
		       	$response['style']=$resultdata[0]['style'];
		        $response['marker_type']=$resultdata[0]['marker_type'];
		        $response['popup_content']=$resultdata[0]['popup_content'];
		        $response['view_layernames']=$resultdata[0]['category_name'];
		        $response['summarycount']=count($summarylist);
		        $response['summarydata']=$resultdata[0]['summary'];
		        $response['summary_list']=$summarylist;

		        //echo "<pre>"; print_r($resultdata[0]['style']);die;
		        print_r(json_encode($response));
		}else {
            print_r(json_encode(array('status'=>'error','message'=>'Cannot Perform this Operation')));
            exit;
        }
    }
    public function viewTable()
	{
		if($this->input->server('REQUEST_METHOD')=='POST')
		{

			$lang=$this->session->get_userdata('Language');
		    if($lang['Language']=='en') {
		      $language='en';
		    }else{
		      $language='nep';
		    }
	    	$layer_name = $this->input->post('layername');//
	    	$resultdata = $this->general->get_tbl_data_result('summary,summary_list,category_table,popup_content,category_name,style,marker_type','categories_tbl',array('language'=>$language,'public_view'=>'1','category_table'=>$layer_name));
	    	$data_jsn=$this->Map_model->get_jsn($layer_name);
			$data_array=json_decode($data_jsn['column_control'],TRUE);
			$report=$this->Map_model->get_data_selected($data_array,$layer_name);
			$this->data['data']=$report->result_array();

		 	$template =$this->template
			->enable_parser(FALSE)
			->build('frontend/view_table',$this->data);
				print_r(json_encode(array('statuses'=>'success','template'=>$template)));
	        	exit;
		}else{
			print_r(json_encode(array('status'=>'error','message'=>'Cannot Perform this Operation')));
			exit;
		}

	}
	public function teset()
	{

		$lang=$this->session->get_userdata('Language');
	    if($lang['Language']=='en') {
	      $language='en';
	    }else{
	      $language='nep';
	    }
    	$layer_name = 'church';//
    	$resultdata = $this->general->get_tbl_data_result('summary,summary_list,category_table,popup_content,category_name,style,marker_type','categories_tbl',array('language'=>$language,'public_view'=>'1','category_table'=>$layer_name));
    	$data_jsn=$this->Map_model->get_jsn($layer_name);
		$data_array=json_decode($data_jsn['column_control'],TRUE);
		$report=$this->Map_model->get_data_selected($data_array,$layer_name);
		$this->data['data']=$report->result_array();
		//echo"<pre>"; print_r($this->data['data']);die;
		$this->data['name']=$this->input->post('layername');
		$this->template->set_layout('frontend/maplayout');
		$this->template
		->enable_parser(FALSE)
		->build('frontend/view_table', $this->data);
	}
}
