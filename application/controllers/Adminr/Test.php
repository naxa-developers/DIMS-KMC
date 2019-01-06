<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test extends CI_Controller
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

    $this->load->dbforge();
    $this->load->helper('url');
    $this->load->model('Dash_model');
    $this->load->model('Test_model');
    $this->load->library('form_validation');
  }


  public function select_as(){

    $this->load->model('Table_model');
    $d=$this->Table_model->get_lang();
    //  var_dump(($d));

    var_dump($this->Table_model->get_as($d));
  }

  public function search(){

    $this->load->view('search');

  }


public function admin_type(){

  if(($this->session->userdata('logged_in'))!=TRUE)
  {

    redirect('admin');
  }else{




}

$admin_type=$this->session->userdata('user_type');

$this->body['admin']=$admin_type;
$this->load->view('admin/header.php',$this->body);
$this->load->view('admin/footer.php');

}


  public function index(){

    if($this->input->post('submit')=='submit'){
      unset($_POST['submit']);
      //var_dump(sizeof($_POST));
      //var_dump($_POST);


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
      echo json_encode($ab);
      //end
    }else{
      $this->load->view('admin/header');
      $this->load->view('maplabel');
      $this->load->view('admin/footer');
    }
  }
  // all categories table operation start

  public function data_tables() // view table
  {

    $tbl_name=base64_decode($this->input->get('tbl_name'));
    //echo $tbl_name;
    $this->body['data']=$this->Dash_model->get_tables($tbl_name);
    $this->body['tbl_name']=$tbl_name;

    $this->load->view('admin/header');
    $this->load->view('admin/data_tables',$this->body);
    $this->load->view('admin/footer');


  }

  public function view_cat_tables(){  // getting all list of cat table

    $this->body['data']=$this->Dash_model->view_cat_tables();
    $this->load->view('admin/header');
    $this->load->view('admin/cat_tables',$this->body);
    $this->load->view('admin/footer');



  }

  public function drop_cat_table(){

    $tbl_name=base64_decode($this->input->get('tbl_name'));

    $drop_tbl=$this->dbforge->drop_table($tbl_name);
    var_dump($drop_tbl);
    if($drop_tbl==true){

      $this->session->set_flashdata('msg',$tbl_name.' table was sucessfully deleted');

      redirect('view_cat_tables');


    }else{


    }


  }



  public function edit(){ //edit table


    $tbl_name= base64_decode($this->input->get('tbl'));
    $fields= $this->db->list_fields($tbl_name);

    for($i=0;$i<sizeof($fields);$i++){

      $this->form_validation->set_rules($fields[$i], 'Fill field', 'required');

    }

    if ($this->form_validation->run() == FALSE){



      $e_id= base64_decode($this->input->get('id'));



      $this->body['fields']=$fields;
      //  var_dump($fields);


      $this->body['edit_data']=$this->Dash_model->edit_get_data($e_id,$tbl_name);

      $this->load->view('admin/header');
      $this->load->view('admin/tbl_edit_form',$this->body);
      $this->load->view('admin/footer');



    }else{

      $data=$_POST;
      unset($data['id']);


      $update=$this->Dash_model->update($_POST['id'],$data,$tbl_name);
      if($update==1){
        $this->session->set_flashdata('msg','Id number '.$_POST['id'].' row data was updated successfully');
        redirect('data_tables?tbl_name='.base64_encode($tbl_name));
      }else{
        redirect('edit');
      }


    }

  }
  // all categories table operations end


  //creating categories with its table start

  public function create_col(){  //create columns

    $this->body['error']=	$this->session->flashdata('table');
    $tbl=base64_decode($this->input->get('tbl'));
    $id=base64_decode($this->input->get('id'));


    if(isset($_POST['submit_col'])){

      $l= sizeof($_POST['c_name']);

      for($i=0;$i<$l;$i++){

        $fields =
        array(

          $_POST["c_name"][$i]=> array(
            'type' => $_POST['c_type'][$i],
            'constraint' =>$_POST['c_length'][$i],
          ),
        );

        $add_column=$this->dbforge->add_column($tbl,$fields);
      }
      var_dump($add_column);

      if($add_column==true){

        $this->session->set_flashdata('table',$tbl.' table with '.$l.' Columns Successfully Added');

        $data_array=array(

          'cat_table'=>$tbl,


        );

        $update=$this->Dash_model->cat_update($id,$data_array);

        redirect('data_tables?tbl_name='.base64_encode($tbl));

      }else{


      }

    }else{
      $this->load->view('admin/header');
      $this->load->view('admin/create_col',$this->body);
      $this->load->view('admin/footer');

    }
  }



  public function create_categories_tbl(){   //create categories table

    if(isset($_POST['submit_tbl'])){

      $cat_id=$this->input->get('id');
      $tbl= $this->input->post('tbl_name');
      var_dump($tbl);

      if( $this->db->table_exists($tbl) == FALSE ){

        $this->dbforge->add_field('id');
        $create=$this->dbforge->create_table($tbl, FALSE);

        if($create==true){

          $this->session->set_flashdata('table', $tbl.' Table Successfully Created');

          redirect('create_col?tbl='.base64_encode($tbl).'&& id='.$cat_id);


        }else{




        }


      }else{
        $this->session->set_flashdata('table', 'Table Already Exists !! Try Again');
        redirect('create_categories_tbl');

      }


    }else{
      $tbl_name= base64_decode($this->input->get('tbl'));
      $tbl=strtolower(str_replace(" ","_",$tbl_name));
      $this->body['tbl']=$tbl;
      $this->load->view('admin/header');
      $this->load->view('admin/create_categories_tbl',$this->body);
      $this->load->view('admin/footer');


    }
  }

  public function create_categories(){  // create categories

    if(isset($_POST['submit_cat'])){

      $cat_name=$this->input->post('cat_name');
      $cat_table=$this->input->post('cat_table');

      $file_name = $_FILES['cat_pic']['name'];

      $ext = pathinfo($file_name, PATHINFO_EXTENSION);


      $img_upload=$this->Dash_model->do_upload($file_name,$cat_table);

      if($img_upload==1){

        $image_path=base_url() . 'uploads/categories/'.$cat_table.'.'.$ext ;

        $data=array(
          'cat_name'=>$cat_name,
          'cat_table'=>$cat_table,
          'cat_photo'=>$image_path

        );

        $insert=$this->Dash_model->insert_cat('categories_tbl',$data);
        if($insert!=""){

          // $table_name=$this->uri->segment(4);
          // $this->body['id']=insert;
          // $this->body['error']="New category ".$cat_name." created";
          // $this->load->view('admin/header');
          // $this->load->view('admin/create_categories',$this->body);
          // $this->load->view('admin/footer');
          $this->session->set_flashdata('msg','Important!!!Create Table for the category '.$cat_name);
          redirect('create_categories_tbl?tbl='.base64_encode($cat_name).'&& id='.base64_encode($insert));


        }else{
          var_dump($insert);


        }


      }else{

        $code= strip_tags($img_upload['error']);
        $this->body['error']=$code;


        $this->load->view('admin/header');
        $this->load->view('admin/create_categories',$this->body);
        $this->load->view('admin/footer');
      }


    }else{








      $this->load->view('admin/header');
      $this->load->view('admin/create_categories');
      $this->load->view('admin/footer');



    }

  }

  public function csv_test(){

    $tbl_name='test' ;


    if(isset($_POST['submit'])){


      $file=$_FILES ["fileToUpload"];

      // $tbl_name=strstr($file['name'], '.', true);
      // $tbl_name=strtolower($tbl_name);

      //svar_dump($file);
      var_dump($file);

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

      //
      // $a2=array(0=>"purple",1=>"orange");
      // array_splice($row,0,0,$a2);

      $this->body['csv_file']=$csv_file;
      $this->body['row']=$row;


      $this->load->view('admin/header');
      $this->load->view('admin/csv_row',$this->body);
      $this->load->view('admin/footer');

      // exit();
      // if(in_array("Latitude",$row,TRUE)){
      //
      //
      //
      // if(in_array('Longitude',$row,TRUE)){




      // if($row[0]=='Longitude' || $row[1]=='Latitude'  ){

      //
      //   if( $this->db->table_exists($tbl_name) == FALSE ){
      // //echo "4";
      //     $this->dbforge->add_field('id');
      //     $create=$this->dbforge->create_table($tbl_name, FALSE);
      //
      // // var_dump($create);
      // // exit();
      //
      // if($create==true){
      //
      //   for($i=0;$i<sizeof($row);$i++){
      //
      //     $fields =
      //     array(
      //
      //       'a'.$i=> array(
      //         'type' =>'varchar',
      //
      //       ),
      //     );
      //
      //     $add_column=$this->dbforge->add_column($tbl_name,$fields);
      //
      // // inserting corresponding nepali and englis column name in table
      //
      //    $data_lang=array(
      //
      //    'eng_lang'=>'a'.$i,
      //    'nepali_lang'=>$row[$i],
      //    'tbl_name'=>$tbl_name,
      //
      //
      //    );
      //
      //      $lang_insert=$this->Dash_model->insert_lang('tbl_lang',$data_lang);
      //
      //

      //   }
      //
      //   if($add_column==true){
      //
      //     //echo "true column";
      //
      //      $fields=$this->db->list_fields($tbl_name);
      //      unset($fields[0]);
      //      $field_name=implode(",",$fields);
      //
      //
      //
      //      $filename=$file['name'];
      //
      //
      //
      //
      //      $c=$this->Table_model->table_copy($csv_file,$filename,$field_name,$tbl_name);
      // // var_dump($c);
      // // exit();
      //      $this->session->set_flashdata('msg',$tbl_name.' table with '.sizeof($row).' Columns Successfully Added');
      //
      //
      //       redirect('csv_tbl');
      //
      //
      //   }else{
      //
      //   //table not created
      //
      //   }
      //
      //
      //
      // } else{
      //
      //   echo 'table not created';
      // }
      // }else{
      //
      //
      //   //table exist
      // }

      // }else{
      //
      //
      //
      //
      // $this->session->set_flashdata('msg',' Order of latitude and longitude not correct in csv. 1st column shold be longitude and 2nd latitude');
      // redirect('csv_tbl');
      //
      // }



      // }else{
      //
      //
      // $this->session->set_flashdata('msg','Column name Longitude not found in Csv');
      // redirect('csv_tbl');
      //
      // }
      //
      //
      //
      // }else{
      //
      //
      //   $this->session->set_flashdata('msg','Column name Latitude not found in CSV');
      //
      // // $update_cat=$this->Table_model->insert_tbl($data,$id);
      //
      //    redirect('csv_tbl');
      //
      // }


    }elseif(isset($_POST['submit_row'])){


      $csv_file=$_POST['csv_file'];


      $fp = fopen($csv_file, 'r');
      $frow = fgetcsv($fp);
      $n=sizeof($frow);
      $row=array();
      for($i=0;$i<$n;$i++){
        //echo $frow[$i];
        array_push($row,trim($frow[$i]," "));
      }

      var_dump($row);

    }else{
      $this->load->view('admin/header');
      $this->load->view('admin/csv_file');
      $this->load->view('admin/footer');



    }



  }

  public function get_csv(){



    $this->load->model('Table_model');
    $this->load->dbutil();
    $this->load->helper('file');
    $this->load->helper('download');
    /* get the object   */
    $report = $this->Table_model->get_tables_data('icons');

    /*  pass it to db utility function  */
    $new_report = $this->dbutil->csv_from_result($report);
    /*  Now use it to write file. write_file helper function will do it */
    write_file('uploads/csv/csv_filee.csv',$new_report);
    $name='csv_filee.csv';
    $data=file_get_contents('uploads/csv/csv_filee.csv');
    //force_download($name,$data);
    unlink("uploads/csv/csv_filee.csv");
  }

public function url_segment(){

  //echo $_SERVER['REQUEST_URI'];
  $tokens = explode('/', $_SERVER['REQUEST_URI']);
echo $tokens[sizeof($tokens)-1];
}

public function dash_tbl(){
  $this->load->view('header');
  $this->load->view('test_tbl');
  $this->load->view('footer');
  //$this->load->view('admin/footer');
}




public function test_table_name(){
 $this->load->helper('string');
 $a = random_string('alnum', 16);
 $b = random_string('unique');
 $c = uniqid();
 $d =  time();
$e='tbl_'.$a.$b.$c.$d;
echo $e;




}

public function data_control(){

  $data='{"a":[{"col":"a0","name":"SN"},{"col":"a1","name":"Wards"}]}';
$data_array=json_decode($data,TRUE);
$data_tbl=$this->Test_model->get_data_con($data_array,'pharm');
//   for($i=0; sizeof($data_array['a'])>$i; $i++){
//     echo $i;
//   }
// var_dump($data_array['a'][0]);
// die;
var_dump($data_tbl);
}

public function test_preg(){

echo   preg_replace('/[^A-Za-z0-9\-]/', ' ', 'Office.-space_+*%$=?/)(&^)><>< status');
//echo strip_tags('Office.space_-+*?/)(&^)><>< status');
}

}//end
