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

        $get_user_details=$this->Api_model->user_detail($email);

        $response['error'] = 0;
        $response['message'] = 'Valid user';
        $response['data'] = $get_user_details;

      }else{

        $response['error'] = 1;
        $response['message'] = 'Invalid user';       //inserting data in table & parsing 1 parameter data array with column name and value
        $response['data'] = null;
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


  public function check_registered_num(){
    $data=$this->input->post('data');
                    //getting data from api

    if($data){

      //$ph_data=$this->Api_model->get_num();
      $data_array=json_decode($data,TRUE);
      $registered_number=array();
      // var_dump(sizeof($data_array));
      // exit();
      $get_mob=$this->Api_model->get_mobile_no();


    for($i=0;$i<sizeof($data_array);$i++){



        if (in_array($data_array[$i]['mobile_no'],$get_mob,true)) {

          $num=$this->Api_model->get_user_detail($data_array[$i]['mobile_no']);

          $user_data=array(

            "name"=>$num['full_name'],
            "img_url"=>$num['image_url'],
            "mobile_no"=>$num['mobile_no'],
            "token"=>$num['token'],
            "registered"=>TRUE
          );
          array_push($registered_number,$user_data);


        }else{
          $user_data=array(

            "name"=>$data_array[$i]['name'],
            "img_url"=>$data_array[$i]['img_url'],
            "mobile_no"=>$data_array[$i]['mobile_no'],
            "token"=>"",
            "registered"=>FALSE
          );
          array_push($registered_number,$user_data);

        }
     }

     $response['error'] = 0 ;
     $response['message'] = 'List of registered and not registered data';
     $response['data'] = $registered_number;

    }else{
      $response['error'] = 1 ;
      $response['message'] = 'No data';

    }

echo  json_encode($response);

  }

public function remove_data_array(){

$data=$this->input->post('data');
$data_array=json_decode($data,TRUE);
var_dump($data_array);

//$key=array_search('9841195921',$data_array);

for($i=0;$i<sizeof($data_array);$i++){

  $key=array_search('9841195921',$data_array[$i]);

  if('9841195923'==$data_array[$i]['mobile_no'])
   {
unset($data_array[$i]);


    }
   }
   var_dump($data_array);

   echo 'deleted';
 }

 public function add_my_circle(){




 }

}//end
