<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class DashController extends CI_Controller
{
  function __construct()
  {
    parent::__construct();

    if(($this->session->userdata('logged_in'))!=TRUE)
    {

      redirect('admin');
    }else{

    }

    $this->load->model('Admin_dash_model');

  }


  public function dashboard()
  {



    $this->body['user']=$this->Admin_dash_model->count_data('users');
    $this->body['map_data']=$this->Admin_dash_model->count_data('categories_tbl');
    $this->body['report']=$this->Admin_dash_model->count_data('report_tbl');
    $this->body['max']=$this->Admin_dash_model->max_views();
    //var_dump($this->body['max']);

    $home=$this->Admin_dash_model->count_views('home');
    $map=$this->Admin_dash_model->count_views('map');
    $reports=$this->Admin_dash_model->count_views('reports');
    $about=$this->Admin_dash_model->count_views('about');

    $this->body['home']=$home['views_count'];
    $this->body['map']=$map['views_count'];
    $this->body['reports']=$reports['views_count'];
    $this->body['about']=$about['views_count'];
    //var_dump($this->body['user']);


    //admin check
    $admin_type=$this->session->userdata('user_type');

    $this->body['admin']=$admin_type;
    //admin check


    $this->load->view('admin/header',$this->body);
    $this->load->view('admin/dash.php',$this->body);
    $this->load->view('admin/footer');


  }

  public function logout(){

    $newdata = array(

      'logged_in' => TRUE,

    );


    $this->session->unset_userdata($newdata);
    $this->session->sess_destroy();
    redirect('login', 'refresh');

  }


}
