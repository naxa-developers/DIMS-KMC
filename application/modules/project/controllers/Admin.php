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
        $this->load->model('Project_model');
        $this->load->model('Dash_model');
        $this->load->model('Feature_model');

    }
    public function index()
    {
        # code...
    }
    public function view_proj(){
    
    $this->body=array();
    $this->body['data']=$this->Project_model->get_proj('project_tbl');
    $this->body['tbl_name']= 'project_tbl';
    //admin check
    $admin_type=$this->session->userdata('user_type');
    $this->body['admin']=$admin_type;
    //admin check
        $this->template
                        ->enable_parser(FALSE)
                        ->build('admin/project_tbl',$this->body);
    // $this->load->view('admin/header',$this->body);
    // $this->load->view('admin/project_tbl',$this->body);
    // $this->load->view('admin/footer');
  }
  public function feature_nep(){
    $this->body=array();
  if(isset($_POST['submit_feature']))
  {
    $d=array(
      "default_nep"=>0,
    );
    $this->Feature_model->update_default($d);
    $id=$this->input->post('default_nep');
    $data=array(
      "default_nep"=>1,
    );
    $update=$this->Feature_model->update_map_download($id,$data,'featured_dataset');
    $this->session->set_flashdata('msg','Featured Dataset Changed');
    redirect('feature_nep');
    //var_dump($_POST);
  }elseif(isset($_POST['submit']))
  {
    $id=$this->input->post('id');
    $file_name = $_FILES['map_pic']['name'];
 //$ext = pathinfo($file_name, PATHINFO_EXTENSION);
    $img_upload=$this->Feature_model->do_upload($file_name,$id);
    if($img_upload != " "){
        $ext=$img_upload['upload_data']['file_ext'];
      $image_path=base_url() . 'uploads/datasets/'.$id.$ext ;
      $data=array(
        'photo'=>$image_path
      );
      $update=$this->Feature_model->update_map_download($id,$data,'featured_dataset');
      $this->session->set_flashdata('msgg','successfully Photo Changed');
      redirect('feature_nep');
    }else{
      $code= strip_tags($img_upload['error']);
      $this->session->set_flashdata('msgg', $code);
      redirect('feature_nep');
    }
    }else{
    $this->body['data']=$this->Feature_model->get_feature_nep();
    //var_dump($this->body['data']);
    //admin check
    $admin_type=$this->session->userdata('user_type');
    $this->body['admin']=$admin_type;
    //admin check
    $this->template
                        ->enable_parser(FALSE)
                        ->build('admin/feature_dataset_nep',$this->body);
    // $this->load->view('admin/header',$this->body);
    // $this->load->view('admin/feature_dataset_nep',$this->body);
    // $this->load->view('admin/footer');
    }
} 
  public function feature()
  {
    $this->body=array();
    if(isset($_POST['submit_feature']))
    {

      $d=array(
        "default"=>0,
      );
      $this->Feature_model->update_default($d);

      $id=$this->input->post('default');

      $data=array(

        "default"=>1,

      );

      $update=$this->Feature_model->update_map_download($id,$data,'featured_dataset');
      $this->session->set_flashdata('msg','Featured Dataset Changed');
      redirect('feature');

      //var_dump($_POST);




    }elseif(isset($_POST['submit']))
    {

      $id=$this->input->post('id');
      $file_name = $_FILES['map_pic']['name'];



      //$ext = pathinfo($file_name, PATHINFO_EXTENSION);



      $img_upload=$this->Feature_model->do_upload($file_name,$id);



      if($img_upload != " "){

          $ext=$img_upload['upload_data']['file_ext'];

        $image_path=base_url() . 'uploads/datasets/'.$id.$ext ;

        $data=array(

          'photo'=>$image_path

        );

        $update=$this->Feature_model->update_map_download($id,$data,'featured_dataset');
        $this->session->set_flashdata('msgg','successfully Photo Changed');
        redirect('feature');

      }else{

        $code= strip_tags($img_upload['error']);



        $this->session->set_flashdata('msgg', $code);
        redirect('feature');


      }


    }else{
      $this->body['data']=$this->Feature_model->get_feature();
      //var_dump($this->body['data']);
      //admin check
      $admin_type=$this->session->userdata('user_type');

      $this->body['admin']=$admin_type;
      //admin check
      $this->template
                        ->enable_parser(FALSE)
                        ->build('admin/feature_dataset',$this->body);

      // $this->load->view('admin/header',$this->body);
      // $this->load->view('admin/feature_dataset',$this->body);
      // $this->load->view('admin/footer');
    }



  } 
}