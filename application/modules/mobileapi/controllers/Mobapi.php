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

        $register=$this->Api_model->register('mob_user',$data_array);       //inserting data in table & parsing 1 parameter data array with column name and value


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


      $register=$this->Api_model->register('mob_user',$data_array);       //inserting data in table & parsing 1 parameter data array with column name and value


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

public function delete_circle(){

$email=$this->input->post('email');
$mobile_no=$this->input->post('mobile_no');
$circle=$this->Api_model->my_circle_detail($email);
$data_array=json_decode($circle["my_circle"],TRUE);
//var_dump(array_values($data_array));

for($i=0;$i<sizeof($data_array);$i++){



  if($mobile_no==$data_array[$i]['mobile_no'])
   {

     unset($data_array[$i]);




    }

   }
  $sort_array=array_values($data_array);
//var_dump($sort_array);

   $circle_data=array(
    "my_circle"=>json_encode($sort_array),
   );

   $delete_circle=$this->Api_model->update_circle($email,$circle_data);
   if($delete_circle){
     $response['error'] = 0 ;
     $response['message'] = 'Contact successfully Removed from My circle';

   }else{
     $response['error'] = 0 ;
     $response['message'] = 'Number cannot be removed';
   }
//var_dump($data_array);
  echo json_encode($response);


 }

 public function add_my_circle(){

   $data=$this->input->post('data');
   $email=$this->input->post('email');
   $circle=$this->Api_model->my_circle_detail($email);

   if($circle['my_circle']==""){

     $circle_data=array(
      "my_circle"=>$data,
     );

     $add_circle=$this->Api_model->update_circle($email,$circle_data);
     if($add_circle){
       $response['error'] = 0 ;
       $response['message'] = 'My circle Added successfully';

     }else{
       $response['error'] = 1 ;
       $response['message'] = 'Error in Adding cicle';
     }


   }else{

     $data_array=json_decode($data,TRUE);
     $data_array_circle=json_decode($circle['my_circle'],TRUE);
     $merge=array_merge($data_array_circle,$data_array);

     $circle_data=array(
      "my_circle"=>json_encode($merge),
     );


    $update_circle=$this->Api_model->update_circle($email,$circle_data);


    if($update_circle){
      $response['error'] = 0 ;
      $response['message'] = 'My circle Updated successfully';

    }else{
      $response['error'] = 0 ;
      $response['message'] = 'Error in Updating cicle';
    }


   }
   echo json_encode($response);




 }
 public function insert_incident_report(){

$data=$this->input->post('data');
$data_array=json_decode($data,TRUE);
//var_dump($data_array);
 $insert=$this->Api_model->register('incident_report',$data_array);
 //var_dump($insert);

if($insert){

  $response['error'] = 0 ;
  $response['message'] = 'Incident Reported';

}else{

  $response['error'] = 1 ;
  $response['message'] = 'Incident Report Unsuccessful';


}
echo json_encode($response);


 }

 public function get_unverified_report(){

$data=$this->Api_model->get_report();
$response['error'] = 0 ;
$response['message'] = 'List Of Unverified report';
$response['data'] = $data;
echo json_encode($response);


 }

public  function get_term_data(){

  $data=$this->general->get_tbl_data_result('id,image,word,meaning,comment,language','dictionary_tbl',false,'word');
  $response['error'] = 0 ;
  $response['message'] = 'Data of Terminologies';
  $response['data'] = $data;
  echo json_encode($response);


}

public  function get_drrinfo_data(){


  $data=$this->Api_model->get_drr_info();
//   $photo=array(
//     'p1'=>'a',
//     'p2'=>'b'
//   );
//   $new=array_merge($data[0],$photo);
// //echo sizeof($data);
// for($i=0;$i<sizeof($data);$i++){
//
//   var_dump ($data[$i]["desc"]);
// }

  $response['error'] = 0 ;
  $response['message'] = 'Data of Drr Info';
  $response['data'] = $data;

  echo json_encode($response);


}

public function get_img(){

  $html="<ol>\r\n\t<li><span style=\"font-size:18px;\">this&nbsp;is bold text&nbsp;<strong>bold text&nbsp;</strong>and italic . <span style=\"background-color:Yellow;\">How about we do som colorful text</span></span></li>\r\n\t<li><font face=\"monospace\">Mark&nbsp; yellow</font></li>\r\n</ol>\r\n\r\n<p>paragaraph changed here now add some image down&nbsp; &nbsp;&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"http://kmc.naxa.com.np/uploads/images/editor/images/23_thumb.jpg\" style=\"width: 375px; height: 500px;\" /></p>\r\n\r\n<p>Now for second image down</p>\r\n\r\n<p><img alt=\"\" src=\"http://kmc.naxa.com.np/uploads/images/editor/images/24_thumb.jpg\" style=\"width: 500px; height: 375px;\" /></p>\r\n\r\n<p>That all to text,</p>\r\n";
  //preg_match_all('/<img[^>]+>/i',$html, $result);
$content = preg_replace("/<img[^>]+\>/i", " ", $html);
var_dump($content);
die;
  preg_match_all( '@src="([^"]+)"@' , $html, $match );
  $src = array_pop($match);
 //print_r(strip_tags($html));
//preg_replace("/\s|&nbsp;/",'',$string);
//var_dump(preg_replace("/\s|&nbsp;/",' ',strip_tags($html)));

  //var_dump($src );

}

public function get_publication_data(){

  $data=$this->Api_model->get_publication();
  $response['error'] = 0;
  $response['message'] = 'Data of Publication';
  $response['data'] = $data;
  echo json_encode($response);
}

public function contact_category(){
  $data=$this->Api_model->get_contact();
  $response['error'] = 0;
  $response['message'] = 'Tab List For Contacts';
  $response['data'] = $data;
  echo json_encode($response);

}
public function  inventory_data(){

  $data=$this->Api_model->get_inventory();
  $response['error'] = 0;
  $response['message'] = 'Tab List For Contacts';
  $response['data'] = $data;
  echo json_encode($response);

}

}//end
