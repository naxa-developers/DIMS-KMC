<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class TableController extends CI_Controller
{
  function __construct()
  {
    parent::__construct();

    // if(($this->session->userdata('logged_in'))!=TRUE)
    // {
    //
    //   redirect('admin');
    // }else{
    //
    // }

    $this->load->helper('url');
    $this->load->model('Table_model');
    $this->load->model('Dash_model');
    $this->load->dbforge();
  }





  public function copy_table(){

    $table_name=base64_decode($this->input->get('tbl'));
  //  $table_name='test_test';


    if(isset($_POST['submit'])){


      $fields=$this->db->list_fields($table_name);
      unset($fields[0]);
      $field_name=implode(",",$fields);
      //var_dump($field_name);

      //$field_name=('lat,long,name');


      $f=($_FILES["fileToUpload"]);
      $path=$f["tmp_name"];
      chmod($path, 0777);
      $filename=$f["name"];




      $c=$this->Table_model->table_copy($path,$filename,$field_name,$table_name);


      if($c==1){

        $this->session->set_flashdata('msg','Data Was successfully Added');
        //redirect('data_tables?tbl_name='.base64_encode($table_name));

      }else{

        $this->session->set_flashdata('msg','Id number '.$id.' row data was deleted successfully');
        //redirect('data_tables?tbl_name='.base64_encode($table_name));

      }

    }else{

      $this->load->view('admin/header');
      $this->load->view('admin/csv_upload');
      $this->load->view('admin/footer');

    }


  }


  public function create_table(){ //create table postgress

    $tbl_nme='categories_tbl';

    $c=$this->Table_model->create_table($tbl_nme);


  }

  public function index(){

    echo 'done';
  }


  public function insert_test(){


    $data = array(

      'name'=>'sagar',
      'email'=>'sagar@123',
      'contact_num'=>'35654892',
      'username'=>'sagar',
      'password'=>'sgar',
      'user_type'=>1

    );

    $table='users';
    $this->Main_model->insert($data,$table);

  }

  public function csv_tbl(){

    //admin check
    $admin_type=$this->session->userdata('user_type');

    $this->body['admin']=$admin_type;
    if($this->session->userdata('user_type')=='1'){

      $this->body['disable']="";

    }else{

   $this->body['disable']="disabled";

    }

    //admin check


    $tbl_name=base64_decode($this->input->get('tbl')) ;



    if(isset($_POST['submit'])){


      $file=$_FILES ["fileToUpload"];

      // $tbl_name=strstr($file['name'], '.', true);
      // $tbl_name=strtolower($tbl_name);

      //svar_dump($file);


      $csv_file=$file['tmp_name'];
      //var_dump($csv_file);
      // exit();
      chmod($csv_file, 0777);

      $fp = fopen($csv_file, 'r');
      $frow = fgetcsv($fp);
      //$frow=trim($frow," ");
      // var_dump($frow);
      // exit();
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


      $this->load->view('admin/header',$this->body);
      $this->load->view('admin/csv_row',$this->body);
      $this->load->view('admin/footer');




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
      redirect('manage_column_control?tbl='.$tbl_name);




    }else{

      $this->load->view('admin/header',$this->body);
      $this->load->view('admin/csv_file');
      $this->load->view('admin/footer');



    }

  }

  public function get_csv_dataset(){

    $count_dataset=$this->Dash_model->get_count_views_datasets($this->input->get('tbl'));
    $add_count_dataset=$count_dataset['download']+1;
    $data_dataset=array(
    'download'=>$add_count_dataset,

    );
    $this->Dash_model->cat_update($count_dataset['id'],$data_dataset);



    array_map('unlink', glob("uploads/csv/*.csv"));


    $tbl=$this->input->get('tbl');

    $this->load->dbutil();
    $this->load->helper('file');
    $this->load->helper('download');
    $d=$this->Table_model->get_lang($tbl);
    /* get the object   */
    $report = $this->Table_model->get_as($d,$tbl);

    /*  pass it to db utility function  */
    $new_report = $this->dbutil->csv_from_result($report);
    $name = $tbl.'.csv';
    /*  Now use it to write file. write_file helper function will do it */
    write_file('uploads/csv/'.$name,$new_report);

    $data=file_get_contents('uploads/csv/'.$name);
    force_download($name,$data);

    // $path='uploads/csv/'.$name;
    // echo $path;
    // unlink($path);
  }


public function get_geojson_dataset(){

  $count_dataset=$this->Dash_model->get_count_views_datasets($this->input->get('tbl'));
  $add_count_dataset=$count_dataset['download']+1;
  $data_dataset=array(
  'download'=>$add_count_dataset,

  );
  $this->Dash_model->cat_update($count_dataset['id'],$data_dataset);

   array_map('unlink', glob("uploads/dataset_geojson/*.geojson"));
  //
  //
   $tbl=$this->input->get('tbl');
  //
  // $this->load->dbutil();
  $this->load->helper('file');
   $this->load->helper('download');
  $d=$this->Table_model->get_lang($tbl);
  /* get the object   */
  $report = $this->Table_model->get_asjson($d,$tbl);
  $dataset_data=$report->result_array();
  // var_dump($dataset_data);
  // exit();

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

$dataset_geojson=json_encode($dataset_array);

  /*  pass it to db utility function  */
  // $new_report = $this->dbutil->csv_from_result($report);
   $name = $tbl.'.geojson';
  // /*  Now use it to write file. write_file helper function will do it */
   write_file('uploads/dataset_geojson/'.$name,$dataset_geojson);
  //
  $data=file_get_contents('uploads/dataset_geojson/'.$name);
  force_download($name,$data);


}

public function get_kml_dataset(){


  //
  //
   $tbl=$this->input->get('tbl');
   $count_dataset=$this->Dash_model->get_count_views_datasets($tbl);
   $add_count_dataset=$count_dataset['download']+1;
   $data_dataset=array(
   'download'=>$add_count_dataset,

   );
   $this->Dash_model->cat_update($count_dataset['id'],$data_dataset);

  //
  // $this->load->dbutil();

  $d=$this->Table_model->get_lang($tbl);
  /* get the object   */
  $report = $this->Table_model->get_asjson($d,$tbl);
  $dataset_data=$report->result_array();
  // var_dump($dataset_data);
  // exit();

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

$dataset_geojson=json_encode($dataset_array);

  echo $dataset_geojson;

}



}//main
