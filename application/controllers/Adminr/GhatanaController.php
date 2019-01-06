<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class GhatanaController extends CI_Controller
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
    $this->load->model('Ghatana_model');

  }



  public function view_ghatana(){

    $this->body['data']=$this->Ghatana_model->get_data();

    //admin check
    $admin_type=$this->session->userdata('user_type');

    $this->body['admin']=$admin_type;
    //admin check


    $this->load->view('admin/header',$this->body);
    $this->load->view('admin/ghatana',$this->body);
    $this->load->view('admin/footer');


  }

public function add_ghatana(){

if(isset($_POST['submit'])){

  unset($_POST['submit']);
  //var_dump($_POST);
  $_POST['date']=date("Y/m/d");
  $insert = $this->Ghatana_model->add_ghatana('map_reports_table',$_POST);

  if($insert != " "){

      $this->session->set_flashdata('msg','New data was added successfully');
      redirect('ghatana');

    }else{

      // db error
    }

  }else{

  $this->body['fields']= $this->db->list_fields('map_reports_table');

  //admin check
  $admin_type=$this->session->userdata('user_type');

  $this->body['admin']=$admin_type;
  //admin check


  $this->load->view('admin/header',$this->body);
  $this->load->view('admin/add_ghatana',$this->body);
  $this->load->view('admin/footer');
}

}


public function ghatana_edit(){

$id=base64_decode($this->input->get('id'));

  if(isset($_POST['submit'])){

   unset($_POST['submit']);
   $_POST['date']=date("Y-m-d");

$update=$this->Ghatana_model->update_data($id,$_POST);

if ($update==1) {


  $this->session->set_flashdata('msg','Data was Updated successfully');
  redirect('ghatana');
} else {
  // db error.
}



  }else{




$this->body['e_data']=$this->Ghatana_model->edit_data($id);
$this->body['fields']= $this->db->list_fields('map_reports_table');
 //echo $id;
 //var_dump($this->body['e_data']);
// exit();

//admin check
$admin_type=$this->session->userdata('user_type');

$this->body['admin']=$admin_type;
//admin check


  $this->load->view('admin/header',$this->body);
  $this->load->view('admin/edit_ghatana',$this->body);
  $this->load->view('admin/footer');
}

}

public function ghatana_delete(){

$id=$this->input->get('id');
$del=$this->Ghatana_model->delete_data($id);

if ($del) {
  $this->session->set_flashdata('msg','Data was Deleted successfully');
  redirect('ghatana');
} else {
  // db error
}


}


}//end
