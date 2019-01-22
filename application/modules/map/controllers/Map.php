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
        ///$cat_tbl=$this->Map_model->get_layer_all_en('categories_tbl');
      	$cat_tbl = $this->general->get_tbl_data_result('category_table,popup_content,category_name,style,marker_type','categories_tbl',array('language'=>$language,'default_load'=>'1','public_view'=>'1'));
      	//echo "<pre>"; print_r($cat_tbl);die;
      	$this->data['layerscategory'] = $this->general->get_tbl_data_result('category_table,category_name','categories_tbl',array('language'=>$language,'public_view'=>'1'));
      	//echo "<pre>"; print_r($this->data['layerscategory']);die;
      	$this->data['cat_tbl_data'] =$this->general->get_tbl_data_result('category_table','categories_tbl',array('language'=>$language,'default_load'=>'1','public_view'=>'1'));
      	//echo $this->db->last_query();die;
        //echo "<pre>"; print_r($this->data['cat_tbl_data']);die;
        $this->data['category_name']=$cat_tbl;
        $popup = array();
        $style = array();
        $marker_type = array();
        if(!empty($cat_tbl)):
	        foreach($cat_tbl as $tbl){
	          	if(!$this->db->table_exists($tbl['category_table'])){
	          	}else{
	            	$cat_tbles[]=$tbl['category_table'];
	            	$cat_names[]=$tbl['category_name'];
	            	//$popup[]=$tbl['popup_content'];
	            	array_push($popup, trim(trim(json_encode($tbl['popup_content'],JSON_NUMERIC_CHECK),'"['),']"'));
	            	array_push($style, trim(trim(json_encode($tbl['style'],JSON_NUMERIC_CHECK),'"['),']"'));
	            	array_push($marker_type, trim(trim(json_encode($tbl['marker_type'],JSON_NUMERIC_CHECK),'"['),']"'));
	          	}
	        }
	    endif;
        $category_data = array();
        if(!empty($cat_tbles)):
	        for($i=0; $i<sizeof($cat_tbles); $i++){
	          	//$get_map=$this->Dash_model->get($cat_tbles[$i]);
	          	//var_dump($get_map); die;

	          	$data_jsn=$this->Map_model->get_jsn($cat_tbles[$i]);
				$data_array=json_decode($data_jsn['column_control'],TRUE);
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
    	endif;
        //var_dump($category_data);
        //var_dump($this->data['field']);
       		// $this->data['default_load']=json_encode($this->Map_model->default_load(),JSON_NUMERIC_CHECK);
        $this->data['default_cat_map_layer']= json_encode($category_data, JSON_NUMERIC_CHECK);
        $this->data['category_tbl_default']= json_encode(!empty($cat_tbles)?$cat_tbles:'', JSON_NUMERIC_CHECK);
        $this->data['category_names_default']= json_encode(!empty($cat_names)?$cat_names:'', JSON_NUMERIC_CHECK);
        $this->data['popup_content_default']= json_encode(!empty($popup)?$popup:'', JSON_NUMERIC_CHECK);
        $this->data['style_default']= json_encode(!empty($style)?$style:'', JSON_NUMERIC_CHECK);
        $this->data['marker_type_default']= json_encode(!empty($marker_type)?$marker_type:'', JSON_NUMERIC_CHECK);
        //var_dump($this->data['style']);

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
        if($lang['Language']=='en'){
	        $this->data['site_info']=$this->Main_model->site_setting_en();
	        //$this->data['data']=$this->Map_model->get_layer_en('categories_tbl');
	        $this->data['data_haza']=$this->Map_model->get_layer_en('categories_tbl','Hazard_Data');
	        $this->data['data_ex']=$this->Map_model->get_layer_en('categories_tbl','Exposure_Data');
	        $this->data['data_base']=$this->Map_model->get_layer_en('categories_tbl','Baseline_Data');
        }else{
      		$this->data['site_info']=$this->Main_model->site_setting_nep();
      		$this->data['data_haza']=$this->Map_model->get_layer_nep('categories_tbl','Hazard_Data');
      		$this->data['data_ex']=$this->Map_model->get_layer_nep('categories_tbl','Exposure_Data');
      		$this->data['data_base']=$this->Map_model->get_layer_nep('categories_tbl','Baseline_Data');
        }
        //var_dump($this->data['data']);
        //$tokens = explode('/', $_SERVER['REQUEST_URI']);
        //$urly=$tokens[sizeof($tokens)-1];
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
	    		//echo $this->db->last_query();die;
	    		//select column control data from database 
	    		$data_jsn=$this->Map_model->get_jsn($layer_name);
				$data_array=json_decode($data_jsn['column_control'],TRUE);
				$report=$this->Map_model->get_data_geojson($data_array,$layer_name);
				$dataset_data=$report->result_array();
				foreach($dataset_data as $data){
				   $ddata=$data ;
				   unset($data['st_asgeojson']);
				   	$features_cat[]= array(
					     'type' =>'Feature',
					     'properties'=>$data,
					     'geometry'=>json_decode($ddata['st_asgeojson'],JSON_NUMERIC_CHECK)

					);
				}
				$dataset_array= array(
				   'type' => 'FeatureCollection',
				   'features' => $features_cat,
				);
				//retrive summary list to plot in map
				$summarylist = $this->Map_model->get_summary($resultdata[0]['summary_list'],$layer_name);
		        $response['geojson']=json_encode($dataset_array);
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
}