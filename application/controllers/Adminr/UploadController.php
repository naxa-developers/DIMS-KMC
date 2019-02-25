<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class UploadController extends CI_Controller
{
  function __construct()
  {
    parent::__construct();

    if(($this->session->userdata('logged_in'))!=TRUE)
    {

      redirect('admin');
    }else{

    }


    $this->load->model('Upload_model');
    $this->load->model('Table_model');
  }






  public function csv_upload(){

    echo $this->input->get("tbl");
    //admin check
    $admin_type=$this->session->userdata('user_type');

    $this->body['admin']=$admin_type;
    //admin check
    //admin check


    $this->load->view('admin/header',$this->body);
    $this->load->view("admin/csv_file");
    $this->load->view("admin/footer");


  }

  public function bck_img(){



    if(isset($_POST['submit'])){

      $file_name = $_FILES['back_pic']['name'];

      $ext = pathinfo($file_name, PATHINFO_EXTENSION);
      $proj_name='p';


      $img_upload=$this->Upload_model->do_upload($file_name,$proj_name);

      if($img_upload==1){

        $image_path=base_url() . 'assets/img/'.$proj_name.'.'.$ext ;

        $data=array(

          'background_img_path'=>$image_path

        );

        $update=$this->Upload_model->update_data($data);

        if($update==1){


          $this->session->set_flashdata('msg', 'Background Image successfully Changed');
          redirect('background');

        }else{

          //db error
        }

      }else{


        $code= strip_tags($img_upload['error']);



        $this->session->set_flashdata('msg', $code);
        redirect('background');
      }









    }else{

      //admin check
      $admin_type=$this->session->userdata('user_type');

      $this->body['admin']=$admin_type;
      //admin check


      $this->load->view('admin/header',$this->body);
      $this->load->view('admin/upload_bck_img');
      $this->load->view('admin/footer');





    }


  }

  //emergency contact start

  //nepali
  public function  emergency_contact_nep(){

    $this->session->set_userdata('emerg_language','nep');

    $cat=$this->input->get('cat');
    // var_dump($cat);
    $name=$this->input->get('name');


    $this->body['data']=$this->Upload_model->get_emergency_con_nep($cat);
    $this->body['cat']=$cat;
    $this->body['name']=$name;
  //var_dump($this->body['data']);
  //admin check
  $admin_type=$this->session->userdata('user_type');

  $this->body['admin']=$admin_type;
  //admin check


  $this->load->view('admin/header',$this->body);
    $this->load->view('admin/emergency_contact_tbl_nep',$this->body);
    $this->load->view('admin/footer');



  }





  //end nepali

  public function  emergency_contact(){

   $this->session->set_userdata('emerg_language','en');

    $cat=$this->input->get('cat');
    // var_dump($cat);
    $name=$this->input->get('name');


    $this->body['data']=$this->Upload_model->get_emergency_con($cat);
    $this->body['cat']=$cat;
    $this->body['name']=$name;
//var_dump($this->body['data']);
//admin check
$admin_type=$this->session->userdata('user_type');

$this->body['admin']=$admin_type;
//admin check


    $this->load->view('admin/header',$this->body);
    $this->load->view('admin/emergency_contact_tbl',$this->body);
    $this->load->view('admin/footer');



  }




  public function delete_emerg(){

    $cat=$this->input->get('cat');
    $tbl=$this->input->get('tbl');
  $lang=$this->session->get_userdata('emerg_language');

    $delete=$this->Upload_model->delete($this->input->get('id'),$tbl);


    if($delete){

      $this->session->set_flashdata('msg','Successfully Deleted');

      if($tbl=='emergency_contact'){




        if($lang['emerg_language']=='en'){

       redirect('emergency_contact?cat='.$cat);

        }else{

          redirect('emergency_contact_nep?cat='.$cat);

        }



      }else{

        if($lang['emerg_language']=='en'){

      redirect('emergency_personnel?cat='.$cat);

         }else{

          redirect('emergency_personnel_nep?cat='.$cat);

         }



      }


    }else{

      //db error
    }


  }


  public function edit_emerg(){

    $cat=$this->input->get('cat');
    $tbl=$this->input->get('tbl');
    $name=$this->input->get('name');
    $lang=$this->session->get_userdata('emerg_language');
    if(isset($_POST['submit'])){

      unset($_POST['submit']);



      $update=$this->Upload_model->update_emerg($this->input->post('id'),$_POST,$tbl);

      if($update){


        $this->session->set_flashdata('msg','Updated successfully');
        if($lang['emerg_language']=='en'){

            redirect('emergency_contact?cat='.$cat);
        }else{
            redirect('emergency_contact_nep?cat='.$cat);

        }


      }else{

        //db error
      }


    }else{




      $this->body['e_data']=$this->Upload_model->e_data(base64_decode($this->input->get('id')));
      //echo base64_decode($this->input->get('id'));
      // var_dump($this->body['e_data']);

      //admin check
      $admin_type=$this->session->userdata('user_type');

      $this->body['admin']=$admin_type;
      //admin check


      $this->load->view('admin/header',$this->body);
      $this->load->view('admin/edit_emerg',$this->body);
      $this->load->view('admin/footer');

    }


  }

  public function add_emergency(){

    $cat=$this->input->get('cat');

    if(isset($_POST['submit'])){


      $_POST['category']=$cat;
      unset($_POST['submit']);

      $insert=$this->Upload_model->insert_emrg($_POST);
      if($insert){





        $this->session->set_flashdata('msg','Emergency Contact Added successfully');
        redirect('emergency_contact?cat='.$cat);


      }else{

        //db error
      }

    }else{

      //admin check
      $admin_type=$this->session->userdata('user_type');

      $this->body['admin']=$admin_type;
      //admin check


      $this->load->view('admin/header',$this->body);
      $this->load->view('admin/add_emergency');
      $this->load->view('admin/footer');

    }







  }


  //emergency contact end






  //emergency contact personal

  public function emergency_personnel()
  {


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
        redirect('emergency_personnel?cat='.$cat);

      }else{

        $code= strip_tags($img_upload['error']);



        $this->session->set_flashdata('msg', $code);
        redirect('emergency_personnel?cat='.$cat);


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


      $this->load->view('admin/header',$this->body);
      $this->load->view('admin/emergency_personnel_tbl',$this->body);
      $this->load->view('admin/footer');
    }

  }

//nepali personnel start

public function emergency_personnel_nep(){

  $this->session->set_userdata('emerg_language','nep');
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
      redirect('emergency_personnel_nep?cat='.$cat);

    }else{

      $code= strip_tags($img_upload['error']);



      $this->session->set_flashdata('msg', $code);
      redirect('emergency_personnel?cat='.$cat);


    }


  }else{

    $this->body['data']=$this->Upload_model->get_emergency_per_nep($cat);
    $this->body['cat']=$cat;
    $name=$this->input->get('name');
    $this->body['name']=$name;

    //admin check
    $admin_type=$this->session->userdata('user_type');

    $this->body['admin']=$admin_type;
    //admin check


    $this->load->view('admin/header',$this->body);
    $this->load->view('admin/emergency_personnel_tbl_nep',$this->body);
    $this->load->view('admin/footer');
  }




}

//nepali personnel end

  public function add_emergency_personnel(){

    $cat=$this->input->get('cat');

    if(isset($_POST['submit'])){


      $_POST['category']=$cat;
      unset($_POST['submit']);
      unset($_POST['emerg_pic']);
      //var_dump($_POST);
      $insert=$this->Upload_model->insert_emrg_personnel($_POST);


      if($insert!=""){

        $file_name = $_FILES['emerg_pic']['name'];



        //$ext = pathinfo($file_name, PATHINFO_EXTENSION);



        $img_upload=$this->Upload_model->do_upload_emerg($file_name,$insert);


        if($img_upload != ""){

          $ext=$img_upload['upload_data']['file_ext'];

          $image_path=base_url() . 'uploads/emergency_personnel/'.$insert.$ext ;

          $data=array(

            'photo'=>$image_path

          );

          $update=$this->Upload_model->update_emerg($insert,$data,'emergency_personnel');
          $this->session->set_flashdata('msg','Emergency Contact Added successfully');
          redirect('emergency_personnel?cat='.$cat);
        }else{

          $code= strip_tags($img_upload['error']);



          $this->session->set_flashdata('msg', $code);
          redirect('emergency_personnel?cat='.$cat);

        }



      }else{

        //db error
      }

    }else{

      //admin check
      $admin_type=$this->session->userdata('user_type');

      $this->body['admin']=$admin_type;
      //admin check


      $this->load->view('admin/header',$this->body);
      $this->load->view('admin/add_emergency_personnel');
      $this->load->view('admin/footer');

    }
  }

  public function edit_emerg_personnel(){

    $cat=$this->input->get('cat');
    $tbl=$this->input->get('tbl');
    $lang=$this->session->get_userdata('emerg_language');
    if(isset($_POST['submit'])){

      unset($_POST['submit']);



      $update=$this->Upload_model->update_emerg($this->input->post('id'),$_POST,$tbl);

      if($update){


        $this->session->set_flashdata('msg','Updated successfully');
        if($lang['emerg_language']=='en'){

          redirect('emergency_personnel?cat='.$cat);

        }else{

          redirect('emergency_personnel_nep?cat='.$cat);
        }


      }else{

        //db error
      }


    }else{




      $this->body['e_data']=$this->Upload_model->e_data_personnel(base64_decode($this->input->get('id')));
      //echo base64_decode($this->input->get('id'));
      // var_dump($this->body['e_data']);

      //admin check
      $admin_type=$this->session->userdata('user_type');

      $this->body['admin']=$admin_type;
      //admin check


      $this->load->view('admin/header',$this->body);
      $this->load->view('admin/edit_emerg_personnel',$this->body);
      $this->load->view('admin/footer');

    }


  }




  //emergency contact personal end

  public function add_icon(){

    if(isset($_POST['submit'])){

      $file_name = $_FILES['back_pic']['name'];

      $ext = pathinfo($file_name, PATHINFO_EXTENSION);
      $proj_name='icon'.time();


      $img_upload=$this->Upload_model->do_upload_icon($file_name,$proj_name);

      if($img_upload==1){

        $image_path=base_url() . 'uploads/icons/'.$proj_name.'.'.$ext ;

        $data=array(

          'icon_path'=>$image_path

        );

        $update=$this->Upload_model->insert_icon($data);
        //var_dump($update);
        if($update==NULL){


          $this->session->set_flashdata('msg', 'Icon successfully Added');
          redirect('add_icon');

        }else{

          //db error
        }

      }else{


        $code= strip_tags($img_upload['error']);



        $this->session->set_flashdata('msg', $code);
        redirect('add_icon');
      }









    }else{


      //admin check
      $admin_type=$this->session->userdata('user_type');

      $this->body['admin']=$admin_type;
      //admin check


      $this->load->view('admin/header',$this->body);
      $this->load->view('admin/icons');
      $this->load->view('admin/footer');

    }

  }




  public function upload_csv_emerg(){



$table_name = $this->input->get('tbl');
$cat= $this->input->get('cat');
$lang= $this->input->get('lang');
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
  //var_dump($field_name);





  $f=$_FILES["uploadedfile"];
  $path=$f["tmp_name"];
  chmod($path, 0777);
  $filename=$f["name"];


// var_dump($path);
// var_dump($filename);
// var_dump($field_name);
// var_dump($table_name);

  $c=$this->Table_model->table_copy($path,$filename,$field_name,$table_name);


  if($c==1){


      $data=array(
        'category'=>$cat,
        'language'=>$lang,
      );
      $up=$this->Table_model->update_cat($max_id['id'],$data,$table_name);

    $this->session->set_flashdata('msg','Csv Was successfully Added');

    if($table_name == 'emergency_contact'){

        redirect('emergency_contact?cat='.$cat);

    }else{

          redirect('emergency_personnel?cat='.$cat);
    }


  }else{

    // $this->session->set_flashdata('msg','Id number '.$id.' row data was deleted successfully');
    // //redirect('data_tables?tbl_name='.base64_encode($table_name));

  }

  // code...
} else {


  //admin check
  $admin_type=$this->session->userdata('user_type');

  $this->body['admin']=$admin_type;
  //admin check


  $this->load->view('admin/header',$this->body);
  $this->load->view('admin/upload_csv_emerg');
  $this->load->view('admin/footer');
}


  }



}//main
