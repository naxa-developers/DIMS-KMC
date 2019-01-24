<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mobapi extends Admin_Controller
{
  function __construct()
  {
    parent::__construct();

    $this->load->model('Api_model');

    $api_key = $this->input->post('api_key');
    if(APP_SECRET_KEY != $api_key)
    {
      //Client do not have right permission to access the server....
      //forbidden.....
    //  http_response_code(403);
      $this->output->set_output(json_encode(array('status' => false, 'message' => 'invalid Api Key')))->_display();
      exit;
    }
  }




  public function check_registration(){ //checking of new user or already registered and reigistering

    $data=$this->input->post('data');
      //var_dump($data);                     //getting data from api

    if($data){                           //1.check data is empty / notS

      $data_array = json_decode($data, true);
      $email=$data_array['email'];


      	$getuser=$this->Api_model->getuser(); //get array of username from databasae


        if (in_array($email,$getuser, true)) {  //5.checking num exists or not

           $response['error'] = 0;
            $response['message'] = 'User is already exist';

        }else{

          $register=$this->Api_model->register($data_array);       //inserting data in table & parsing 1 parameter data array with column name and value


         if($register){           //3.check if data inserted or not


         $response['error'] = 0;
          $response['message'] = 'Registered successfully';


        }else{

          $response['error'] = 1;
          $response['message'] = 'Registration failed';

        }                          //3

        }


    }else{                           //2.if empty send no data response


      $response['error'] = 1 ;
      $response['message'] = 'No data';


    }

    echo json_encode($response);
  }

public function  loginCheck(){

  $data=$this->input->post('data');
    //var_dump($data);                     //getting data from api

  if($data){                           //1.check data is empty / notS

    $data_array = json_decode($data, true);
    $email=$data_array['email'];


      $getuser=$this->Api_model->getuser(); //get array of username from databasae


      if (in_array($email,$getuser, true)) {  //5.checking num exists or not

         $response['error'] = 0;
          $response['message'] = 'Valid user';

      }else{

        $response['error'] = 1;
        $response['message'] = 'Invalid user';       //inserting data in table & parsing 1 parameter data array with column name and value
}

    }else{
      $response['error'] = 1 ;
      $response['message'] = 'No data';

}

  echo json_encode($response);

}

public function registerUser(){  //register user



  $data=$this->input->post('data');
    //var_dump($data);                     //getting data from api

  if($data){                           //1.check data is empty / notS

    $data_array = json_decode($data, true);
    //$email=$data_array['email'];


    $register=$this->Api_model->register($data_array);       //inserting data in table & parsing 1 parameter data array with column name and value


   if($register){           //3.check if data inserted or not


   $response['error'] = 0;
    $response['message'] = 'Registered successfully';


  }else{

    $response['error'] = 1;
    $response['message'] = 'Registration failed';

  }                          //3


    }else{
      $response['error'] = 1 ;
      $response['message'] = 'No data';

  }

echo json_encode($response);
}




}//end
