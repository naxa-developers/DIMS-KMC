<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CategoriesController extends CI_Controller
{
  function __construct()
  {
    parent::__construct();

    if(($this->session->userdata('logged_in'))!=TRUE)
    {

    redirect('admin');
    }else{

    }

    $this->load->dbforge();
    $this->load->helper('url');
    $this->load->model('Dash_model');
    $this->load->library('form_validation');
  }


  public function index(){
    $this->load->view('admin/header');
    $this->load->view('admin/footer');


  }

  // all categories table operation start

  public function data_tables() // view table
  {
    ini_set('max_execution_time', 0);
    $tbl_name=base64_decode($this->input->get('tbl_name'));
    $name=str_replace('_'," ",$tbl_name);



    $this->body['data']=$this->Dash_model->get_tables_data($tbl_name);
    //var_dump($this->body['data']);


    $this->body['data_nep']=$this->Dash_model->get_tables_data_lang('tbl_lang',$tbl_name);
    $this->body['fields']=$this->db->list_fields($tbl_name);
    $this->body['tbl_name']=$tbl_name;
    $this->body['name']=$name;

    //admin check
    $admin_type=$this->session->userdata('user_type');

    $this->body['admin']=$admin_type;
    //admin check


    $this->load->view('admin/header',$this->body);

    $this->load->view('admin/data_tables',$this->body);

    $this->load->view('admin/footer');


  }

  public function categories_tbl(){

    //set session eng

    $this->session->set_userdata('cat_language','en');

     //end

    $this->body['data']=$this->Dash_model->get_tables_data_cat('categories_tbl','en');
    $this->body['tbl_name']='categories_tbl';

    //admin check
    $admin_type=$this->session->userdata('user_type');

    $this->body['admin']=$admin_type;
    if($this->session->userdata('user_type')=='1'){

      $this->body['disable']="";

    }else{

   $this->body['disable']="disabled";

    }

    //admin check

    $this->load->view('admin/header',$this->body);
    $this->load->view('admin/categories_tbl',$this->body);
    $this->load->view('admin/footer');





  }

//nepali

  public function categories_tbl_nep(){

    // set session nepali
    $this->session->set_userdata('cat_language','nep');
    //end

    $this->body['data']=$this->Dash_model->get_tables_data_cat('categories_tbl','nep');
    $this->body['tbl_name']='categories_tbl';

    //admin check
    $admin_type=$this->session->userdata('user_type');

    $this->body['admin']=$admin_type;
    if($this->session->userdata('user_type')=='1'){

      $this->body['disable']="";

    }else{

   $this->body['disable']="disabled";

    }

    //admin check

    $this->load->view('admin/header',$this->body);
    $this->load->view('admin/categories_tbl_nep',$this->body);
    $this->load->view('admin/footer');





  }

  public function create_categories_nep(){  // create categories

    if(isset($_POST['submit_cat'])){

    //creting table name
    $this->load->helper('string');
    // $a = random_string('alnum', 16);
    // $b = random_string('unique');
    $c = uniqid();
    $d =  time();
    $e='tbl_'.$c.$d.'_tbl';
    //end
      $cat_name=$this->input->post('cat_name');
      $cat_type=$this->input->post('category_type');
      $upload_type=$this->input->post('upload_type');
      $cat_table=$e;
      if( $this->db->table_exists($cat_table)==true ){
        $this->session->set_flashdata('msg', 'Category Already Exists !! Please use another category name');
        redirect('categories_tbl');
      }else{
      $file_name = $_FILES['cat_pic']['name'];
      if($file_name = $_FILES['cat_pic']['name']==""){
        $data=array(
          'category_name'=>$cat_name,
          'category_table'=>$cat_table,
          'category_photo'=>$this->input->post('icon'),
          'category_type'=>$cat_type,
          'uplaod_type'=>$upload_type,
          'language'=>'nep'
        );
        $insert=$this->Dash_model->insert_cat('categories_tbl',$data);
        if($insert!=""){
          if($upload_type=='csv'){
            $this->load->model('Newsletter');
            $mail_subject='Data Map Added in VSO Webpage';
            $m='New Data Map('.$cat_name.')has been added in VSO Webpage.Plese follow link to view new Map Data <br>'.base_url().'category?tbl='.$cat_table;
            $this->Newsletter->send_mail($m,$mail_subject);
            $this->session->set_flashdata('msg','Important!!!Create Table for the category '.$cat_name);
            redirect('csv_data_tbl?tbl='.base64_encode($cat_name).'&& id='.base64_encode($insert).'&& tbl_name='.base64_encode($cat_table));

          }else{
            $this->load->model('Newsletter');
            $mail_subject='Data Map Added in VSO Webpage';
            $m='New Data Map('.$cat_name.')has been added in VSO Webpage.Plese follow link to view new Map Data <br>'.base_url().'category?tbl='.$cat_table;
            $this->Newsletter->send_mail($m,$mail_subject);
            $this->session->set_flashdata('msg','Note: The Shapefile Co-ordinate System Must Be In WGS84 ie. EPSG:4326 '.$cat_name);
            redirect('add_layers?tbl_name='.$cat_table.'&& id='.$insert);
          }



        }else{
          var_dump($insert);


        }


      }else{

        // $info = new SplFileInfo($file_name);
        // $ext=$info->getExtension();

      //  $ext = pathinfo($file_name, PATHINFO_EXTENSION);


        $img_upload=$this->Dash_model->do_upload($file_name,$cat_table);
        //var_dump ($img_upload);
        if($img_upload != ""){

          $ext=$img_upload['upload_data']['file_ext'];


          $image_path=base_url() . 'uploads/categories/'.$cat_table.$ext ;
          //  var_dump ($image_path);

          $data=array(
            'category_name'=>$cat_name,
            'category_table'=>$cat_table,
            'category_photo'=>$image_path,
            'category_type'=>$cat_type,
            'uplaod_type'=>$upload_type,
            'language'=>'nep'
          );

          $insert=$this->Dash_model->insert_cat('categories_tbl',$data);
          if($insert!=""){





            if($upload_type=='csv'){
              $this->load->model('Newsletter');
              $mail_subject='Data Map Added in VSO Webpage';
              $m='New Data Map('.$cat_name.')has been added in VSO Webpage.Plese follow link to view new Map Data <br>'.base_url().'category?tbl='.$cat_table;
              $this->Newsletter->send_mail($m,$mail_subject);
              $this->session->set_flashdata('msg','Important!!!Create Table for the category '.$cat_name);
              redirect('csv_data_tbl?tbl='.base64_encode($cat_name).'&& id='.base64_encode($insert).'&& tbl_name='.base64_encode($cat_table));

            }else{
              $this->load->model('Newsletter');
              $mail_subject='Data Map Added in VSO Webpage';
              $m='New Data Map('.$cat_name.')has been added in VSO Webpage.Plese follow link to view new Map Data <br>'.base_url().'category?tbl='.$cat_table;
              $this->Newsletter->send_mail($m,$mail_subject);
              $this->session->set_flashdata('msg','Note: The Shapefile Co-ordinate System Must Be In WGS84 ie. EPSG:4326 '.$cat_name);
              redirect('add_layers?tbl_name='.$cat_table.'&& id='.$insert);
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

          $this->load->view('admin/header',$this->body);
          $this->load->view('admin/create_categories_nep',$this->body);
          $this->load->view('admin/footer');
        }
      }
  }

    }else{






      $this->body['icon']=$this->Dash_model->get_tables_data('icons');

      //admin check
      $admin_type=$this->session->userdata('user_type');

      $this->body['admin']=$admin_type;
      //admin check

      $this->load->view('admin/header',$this->body);
      $this->load->view('admin/create_categories_nep',$this->body);
      $this->load->view('admin/footer');



    }


  }
  //creating categories with its table end

  //nepalii

  public function view_cat_tables(){  // getting all list of cat table

    $this->body['data']=$this->Dash_model->view_cat_tables();
    //admin check
    $admin_type=$this->session->userdata('user_type');

    $this->body['admin']=$admin_type;
    //admin check
    $this->load->view('admin/header',$this->body);
    $this->load->view('admin/cat_tables',$this->body);
    $this->load->view('admin/footer');



  }

  public function drop_cat_table(){

    $tbl_name=base64_decode($this->input->get('tbl_name'));

    if($tbl_name==""){

    }else{

    $drop_tbl=$this->dbforge->drop_table($tbl_name);
    //var_dump($drop_tbl);
    if($drop_tbl){

      $this->session->set_flashdata('msg',$tbl_name.' table was sucessfully deleted');

      redirect('view_cat_tables');


    }else{

      //db error
    }

}
  }



  public function edit(){ //edit table


    $tbl_name= base64_decode($this->input->get('tbl'));
    $nep=$this->Dash_model->get_tables_data_lang('tbl_lang',$tbl_name);
    // $fields= $this->db->list_fields($tbl_name);

    //  var_dump($nep);
    //var_dump($_POST);

    foreach($nep as $nep){
      //  echo $nep['eng_lang'];

      $this->form_validation->set_rules($nep['eng_lang'], 'Fill field', 'trim');

    }

    if ($this->form_validation->run() == FALSE){



      $e_id= base64_decode($this->input->get('id'));


      $this->body['data_nep']=$this->Dash_model->get_tables_data_lang('tbl_lang',$tbl_name);
      //$this->body['fields']=$fields;

      $this->body['edit_data']=$this->Dash_model->edit_get_data($e_id,$tbl_name);

      //admin check
      $admin_type=$this->session->userdata('user_type');

      $this->body['admin']=$admin_type;
      //admin check

      $this->load->view('admin/header',$this->body);
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



  public function edit_categories(){

    $tbl_namee= base64_decode($this->input->get('tbl'));
    $tbl_name='categories_tbl';

    $fields=$this->db->list_fields($tbl_name);



    //for($i=0;$i<sizeof($fields);$i++){
      //  echo $nep['eng_lang'];

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

      $this->load->view('admin/header',$this->body);
      $this->load->view('admin/categories_edit',$this->body);
      $this->load->view('admin/footer');



    }else{


      if($_FILES['cat_pic']['name']==''){

      $data=$_POST;
      unset($data['id']);


      $update=$this->Dash_model->update($_POST['id'],$data,$tbl_name);
      if($update==1){
        $this->session->set_flashdata('msg','Id number '.$_POST['id'].' row data was updated successfully');
        redirect('categories_tbl?tbl_name='.base64_encode($tbl_name));
      }else{
        redirect('categories_edit');
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
    redirect('categories_tbl?tbl_name='.base64_encode($tbl_name));

}
}


    }



  }



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

          'a'.$i=> array(
            'type' => $_POST['c_type'][$i],
            'constraint' =>$_POST['c_length'][$i],
          ),
        );

        $add_column=$this->dbforge->add_column($tbl,$fields);

        // inserting corresponding nepali and englis column name in table

        $data_lang=array(

          'eng_lang'=>'a'.$i,
          'nepali_lang'=>$_POST["c_name"][$i],
          'tbl_name'=>$tbl,


        );

        $lang_insert=$this->Dash_model->insert_lang('tbl_lang',$data_lang);

        //end

      }


      if($add_column==true){

        $this->session->set_flashdata('table',$tbl.' table with '.$l.' Columns Successfully Added');

        $data_array=array(

          'category_table'=>$tbl,


        );

        $update=$this->Dash_model->cat_update($id,$data_array);

        redirect('data_tables?tbl_name='.base64_encode($tbl));

      }else{


      }

    }else{

      //admin check
      $admin_type=$this->session->userdata('user_type');

      $this->body['admin']=$admin_type;
      //admin check

      $this->load->view('admin/header',$this->body);
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
        $this->session->set_flashdata('msg', 'Table Already Exists !! Try Again');
        redirect('create_categories_tbl');

      }


    }else{
      $tbl_name= base64_decode($this->input->get('tbl'));
      $tbl=strtolower(str_replace(" ","_",$tbl_name));
      $this->body['tbl']=$tbl;

      //admin check
      $admin_type=$this->session->userdata('user_type');

      $this->body['admin']=$admin_type;
      //admin check

      $this->load->view('admin/header',$this->body);
      $this->load->view('admin/create_categories_tbl',$this->body);
      $this->load->view('admin/footer');


    }
  }

    public function create_categories(){  // create categories
        if(isset($_POST['submit_cat'])){
            $cat_name=$this->input->post('cat_name');
            $cat_type=$this->input->post('category_type');
            $upload_type=$this->input->post('upload_type');
            $cat_table=strtolower(str_replace(" ","_",$cat_name));
            if( $this->db->table_exists($cat_table)==true ){
                $this->session->set_flashdata('msg', 'Category Already Exists !! Please use another category name');
                redirect('categories_tbl');
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
                            $mail_subject='Data Map Added in VSO Webpage';
                            $m='New Data Map('.$cat_name.')has been added in VSO Webpage.Plese follow link to view new Map Data <br>'.base_url().'category?tbl='.$cat_table;
                            $this->Newsletter->send_mail($m,$mail_subject);
                            $this->session->set_flashdata('msg','Important!!!Create Table for the category '.$cat_name);
                            redirect('csv_data_tbl?tbl='.base64_encode($cat_name).'&& id='.base64_encode($insert).'&& tbl_name='.base64_encode($cat_table));

                        }else{
                            $this->load->model('Newsletter');
                            $mail_subject='Data Map Added in VSO Webpage';
                            $m='New Data Map('.$cat_name.')has been added in VSO Webpage.Plese follow link to view new Map Data <br>'.base_url().'category?tbl='.$cat_table;
                            $this->Newsletter->send_mail($m,$mail_subject);
                            $this->session->set_flashdata('msg','Note: The Shapefile Co-ordinate System Must Be In WGS84 ie. EPSG:4326 '.$cat_name);
                            redirect('add_layers?tbl_name='.$cat_table.'&& id='.$insert);
                        }

                    }else{
                        var_dump($insert);
                    }
                }else{
                    // $info = new SplFileInfo($file_name);
                    // $ext=$info->getExtension();
                    //  $ext = pathinfo($file_name, PATHINFO_EXTENSION);
                    $img_upload=$this->Dash_model->do_upload($file_name,$cat_table);
                    //var_dump ($img_upload);
                    if($img_upload != ""){
                        $ext=$img_upload['upload_data']['file_ext'];
                        $image_path=base_url() . 'uploads/categories/'.$cat_table.$ext ;
                        //  var_dump ($image_path);
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
                                $mail_subject='Data Map Added in VSO Webpage';
                                $m='New Data Map('.$cat_name.')has been added in VSO Webpage.Plese follow link to view new Map Data <br>'.base_url().'category?tbl='.$cat_table;
                                $this->Newsletter->send_mail($m,$mail_subject);
                                $this->session->set_flashdata('msg','Important!!!Create Table for the category '.$cat_name);
                                redirect('csv_data_tbl?tbl='.base64_encode($cat_name).'&& id='.base64_encode($insert).'&& tbl_name='.base64_encode($cat_table));
                            }else{
                                $this->load->model('Newsletter');
                                $mail_subject='Data Map Added in VSO Webpage';
                                $m='New Data Map('.$cat_name.')has been added in VSO Webpage.Plese follow link to view new Map Data <br>'.base_url().'category?tbl='.$cat_table;
                                $this->Newsletter->send_mail($m,$mail_subject);
                                $this->session->set_flashdata('msg','Note: The Shapefile Co-ordinate System Must Be In WGS84 ie. EPSG:4326 '.$cat_name);
                                redirect('add_layers?tbl_name='.$cat_table.'&& id='.$insert);
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
                        $this->load->view('admin/header',$this->body);
                        $this->load->view('admin/create_categories',$this->body);
                        $this->load->view('admin/footer');
                    }
                }
            }
        }else{
            $this->body['icon']=$this->Dash_model->get_tables_data('icons');
            //admin check
            $admin_type=$this->session->userdata('user_type');
            $this->body['admin']=$admin_type;
            //admin check
            $this->load->view('admin/header',$this->body);
            $this->load->view('admin/create_categories',$this->body);
            $this->load->view('admin/footer');
        }
    }
    //creating categories with its table end


  // adding data to categoriess table

  public function add_data_categories_tbl(){

    //admin check
    $admin_type=$this->session->userdata('user_type');

    $this->body['admin']=$admin_type;
    //admin check

    $this->load->view('admin/header',$this->body);
    $this->load->view('admin/csv_upload');
    $this->load->view('admin/footer');



  }

  //end adding data

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


            if($lang['cat_language']=='en'){
            redirect('categories_tbl?tbl_name='.base64_encode($tbl_name));

        }else{
        redirect('categories_tbl_nep?tbl_name='.base64_encode($tbl_name));

        }
        //languague end
      redirect('categories_tbl?tbl_name='.base64_encode($tbl_name));
    }else{

      $this->session->set_flashdata('msg','Id number '.$id.' row data was deleted successfully');
      redirect('data_tables?tbl_name='.base64_encode($tbl_name));

    }

  }


  public function csv_data_tbl(){

    // echo base64_decode($this->input->get('tbl'));
    // echo base64_decode($this->input->get('id'));

    $this->body['tbl']=$this->input->get('tbl_name');
    $this->body['id']=$this->input->get('id');


    //admin check
    $admin_type=$this->session->userdata('user_type');

    $this->body['admin']=$admin_type;
    //admin check

    $this->load->view('admin/header',$this->body);
    $this->load->view('admin/csv_data_tbl',$this->body);
    $this->load->view('admin/footer');

  }

 public function sub_categories(){


//    if(isset($_POST['submit'])){
//
//    $tbl_name=$this->input->post('cat');
//    $this->body['tbl']=$tbl_name;
//
// $this->body['data']=$this->Dash_model->get_tables_data_lang('tbl_lang',$tbl_name);
// $this->load->view('admin/header');
// $this->load->view('admin/select_column',$this->body);
// $this->load->view('admin/footer');
//
// }else{

  $tbl_name=$this->input->get('tbl');
  $this->body['tbl']=$tbl_name;

  $this->body['data']=$this->Dash_model->get_tables_data_lang('tbl_lang',$tbl_name);
  $sel_colum=$this->Dash_model->get_sub_cat_style($tbl_name);
  $this->body['selected_column']=$sel_colum['sub_col'];

  //admin check
  $admin_type=$this->session->userdata('user_type');

  $this->body['admin']=$admin_type;
  //admin check

  $this->load->view('admin/header',$this->body);
  $this->load->view('admin/select_column',$this->body);
  $this->load->view('admin/footer');

//}
 }

public function sub_cat_insert(){
  $col=$this->input->post('col');
  $tbl=$this->input->post('tbl');

  $data=$this->Dash_model->get_sub_cat($col,$tbl);
  //var_dump($data);


$data_array=array();
foreach($data as $d){

  array_push($data_array,$d[$col]);
}
$json=json_encode($data_array);
$sub_data=array(

'sub_categories'=>$json,
'sub_col'=>$col

);

$update=$this->Dash_model->update_sub_cat($sub_data,$tbl);
if($update==1){

  $this->session->set_flashdata('msg','Sub Categories Updated');
  redirect('categories_tbl');

}else{



}





}

public function change_order_caegory()
 {
   $this->data = array();
   $this->body['admin']=$this->session->userdata('user_type');
   //admin check
   $this->data['category']=$this->Dash_model->getAllCategory();
   //echo "<pre>";print_r($this->data['category']);die;
  //$this->body['categorytable'] = $this->general->get_tbl_data_result('order_cat,id,category_name','categories_tbl',false,'order_cat');
   $this->load->view('admin/header',$this->body);
   $this->load->view('admin/chnage_order',$this->data,$this->body);
   $this->load->view('admin/footer');
 }

 public function ajax_change_order(){
     if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){
        $tran =  $this->Dash_model->updateAllCategory();
         if($tran)
         {
           echo "Category Order has been updated Successfully";
         }
     }else{
       echo "Cann't Update";
       // $this->view->render('error/index');
     }
 }

}//controller end
