<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ProjectController extends CI_Controller
{
  function __construct()
  {
    parent::__construct();

    if(($this->session->userdata('logged_in'))!=TRUE)
    {

      redirect('admin');
    }else{

    }

    $this->load->helper('url');
    $this->load->model('Project_model');
    $this->load->model('Dash_model');
    $this->load->library('form_validation');
  }

  public function add_proj(){



    $this->form_validation->set_rules('proj_name','Name is required','required');
    $this->form_validation->set_rules('proj_text','Name is required','required');

    if($this->form_validation->run() == FALSE){

      //admin check
      $admin_type=$this->session->userdata('user_type');

      $this->body['admin']=$admin_type;
      //admin check


      $this->load->view('admin/header',$this->body);
      $this->load->view('admin/create_project');
      $this->load->view('admin/footer');


    }else{

      $proj_name=$this->input->post('proj_name');
      $proj_text=$this->input->post('proj_text');

      $file_name = $_FILES['proj_pic']['name'];

      //$ext = pathinfo($file_name, PATHINFO_EXTENSION);


      $img_upload=$this->Project_model->do_upload($file_name,$proj_name);

      if($img_upload != ""){

        $ext=$img_upload['upload_data']['file_ext'];
        $image_path=base_url() . 'uploads/project_partner/'.$proj_name.$ext ;

        $data=array(
          'project_name'=>$proj_name,
          'project_brief'=>$proj_text,
          'project_pic'=>$image_path

        );

        $insert=$this->Project_model->add_proj('project_tbl',$data);
        if($insert!=""){

          // $table_name=$this->uri->segment(4);
          // $this->body['id']=insert;
          // $this->body['error']="New category ".$cat_name." created";
          // $this->load->view('admin/header');
          // $this->load->view('admin/create_categories',$this->body);
          // $this->load->view('admin/footer');
          $this->session->set_flashdata('msg', $proj_name.' project partner successfully added');
          redirect('view_proj');



        }else{
          var_dump($insert);


        }


      }else{

        $code= strip_tags($img_upload['error']);



        $this->session->set_flashdata('msg', $code);
        redirect('add_proj');
      }



    }


  }//


  public function view_proj(){

    $this->body['data']=$this->Project_model->get_proj('project_tbl');
    $this->body['tbl_name']= 'project_tbl';


    //admin check
    $admin_type=$this->session->userdata('user_type');

    $this->body['admin']=$admin_type;
    //admin check


    $this->load->view('admin/header',$this->body);
    $this->load->view('admin/project_tbl',$this->body);
    $this->load->view('admin/footer');






  }



  public function delete_data(){

    $id=$this->input->get('id');
    $tbl_name=$this->input->get('tbl');

    $this->Dash_model->delete_data($id,$tbl_name);



    $this->session->set_flashdata('msg','Id number '.$id.' row data was deleted successfully');
    redirect('view_proj');


  }


  public function edit_proj(){

    if(isset($_POST['submit'])){

      //var_dump($_POST);

      //unset($_POST['project_'])
      //var_dump($_FILES);

      $this->input->post('project_name');
      $this->input->post('project_brief');
      if( $_FILES['proj_pic']['name']==''){

        $data= array(

          'project_name'=>$this->input->post('project_name'),
          'project_brief'=>$this->input->post('project_brief'),

        );

        $update=$this->Project_model->update_data($this->input->post('id'),$data);

        if($update==1){

          $this->session->set_flashdata('msg','Data successfully Updated');
          redirect('view_proj');

        }else{


          //error
        }







      }else{

        $proj_name=$this->input->post('project_name');
        $file_name = $_FILES['proj_pic']['name'];

        $ext = pathinfo($file_name, PATHINFO_EXTENSION);


        $img_upload=$this->Project_model->do_upload($file_name,$proj_name);



        if($img_upload==1){

          $proj_name=$this->input->post('project_name');
          $image_path=base_url() . 'uploads/project_partner/'.$proj_name.'.'.$ext ;

          $data=array(
            'project_name'=>$this->input->post('project_name'),
            'project_brief'=>$this->input->post('project_brief'),
            'project_pic'=>$image_path

          );

          $update=$this->Project_model->update_data($this->input->post('id'),$data);

          if($update==1){

            $this->session->set_flashdata('msg','Data successfully Updated');
            redirect('view_proj');

          }else{


            //error
          }







        }else{


          $code= strip_tags($img_upload['error']);



          $this->session->set_flashdata('msg', $code);
          redirect('view_proj');


        }









     }



    }else{

      $this->body['edit_data']=$this->Project_model->get_edit_data(base64_decode($this->input->get('id')),'project_tbl');

      //admin check
      $admin_type=$this->session->userdata('user_type');

      $this->body['admin']=$admin_type;
      //admin check


      $this->load->view('admin/header',$this->body);
      $this->load->view('admin/proj_edit',$this->body);
      $this->load->view('admin/footer');




    }




  }


  public function test_arr(){


    $tbl=array(
      'article','project_tbl','categories_tbl',

    );



    for($i=0;$i<sizeof($tbl);$i++){


      $data=$this->Project_model->get_proj($tbl[$i]);

      var_dump($dsta.'<br>');



    }
    $this->load->view('admin/arr.php',$this->body);

  }


}//end
