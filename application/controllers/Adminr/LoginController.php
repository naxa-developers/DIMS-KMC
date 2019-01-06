<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class LoginController extends CI_Controller
 {
   function __construct()
    {
      parent::__construct();

      $this->load->library('form_validation');
  		$this->load->helper('url');
  		$this->load->model('Login_model');
    }


public function index() {
   $this->form_validation->set_rules('username', 'Username', 'required');
   $this->form_validation->set_rules('password', 'Password', 'required');

   if ($this->form_validation->run() == FALSE){

  //  echo validation_errors();
    $this->load->view('admin/login-page');

   }else{

    $username=$this->input->post('username');
    $pass=$this->input->post('password');
    $login_condition = array("username"=>$username);

    $user_data=$this->Login_model->login($login_condition);

    if($user_data!= FALSE){

        $hash=$user_data['password'];

        $check=$this->Login_model->validate_user($pass,$hash);

       if($check==TRUE){

         $newdata = array(

   					'logged_in' => TRUE,
            'user_type'=>$user_data['user_type']
   					);


   			$this->session->set_userdata($newdata);

      redirect('dashboard');

       }else{


      $this->session->set_flashdata('Login', 'Incorrect Password, Try Again');
      redirect('admin_control');
       }


    }else{


    $this->session->set_flashdata('Login', 'Incorrect username, Try Again');
    redirect('admin_control');
    }

 }


}//method end

public function logout(){

  $newdata = array(

      'logged_in' => TRUE,

      );


   $this->session->unset_userdata($newdata);
   $this->session->sess_destroy();
   redirect('admin_control', 'refresh');

}



public function dashboard(){

  $this->load->view('dashboard');
}


 }//main controler
