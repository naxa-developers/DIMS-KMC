<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MapApi extends CI_Controller
{
  function __construct()
  {
    parent::__construct();

    $this->load->model('Mapapi_model');
    $this->load->model('Table_model');
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


public function get_category() {
  $category=$this->Mapapi_model->get_list();
  //var_dump($category);
  $final=array();
  $i=0;
  foreach($category as $data){



  $sum=$this->Mapapi_model->get_sum_name($data['category_table'],$data['summary_list']);
  $sum_name=$sum['nepali_lang'];

  $da=array('summary_name'=>$sum_name);
  //}
  $a=array_merge($category[$i],$da);
  array_push($final,$a);
  $i++;

}

  $response['status']=200;
  $response['data']=$final;
  echo json_encode($response);


  // echo "<pre>";
  // print_r($response);die;
}


public function geojson() {
  $tbl=$_POST['table'];
  if(!$this->db->table_exists($tbl)){
    $response['msg']='Data table does not exists';
    echo json_encode($response);
  }else{
    $d=$this->Table_model->get_lang($tbl);
    /* get the object   */
    $report = $this->Table_model->get_asjson($d,$tbl);
    $dataset_data=$report->result_array();
    foreach($dataset_data as $data){
      $ddata=$data ;
      unset($data['st_asgeojson']);
      $features_cat[]= array(
        'type' =>'Feature',
        'properties'=>$data,
        'geometry'=>json_decode($ddata['st_asgeojson'],JSON_NUMERIC_CHECK)
      );
    }
      $dataset_array= array(
        'type' => 'FeatureCollection',
        'features' => $features_cat,
      );
    $dataset_geojson=json_encode($dataset_array);
    echo $dataset_geojson;
  }
}

public function send_msg(){

  $reply = $_POST['ans'];


  $message = array(
             'title' => 'Reply To Report',
             'notification' =>$reply,

             );
  $token="d6Z3jVprSIA:APA91bFb69-8Hl3ICHX9MXN_47s5eEHiMeSdWKjgP3iGr-hb-V6rQ87Xn9q0napjZZ04LvDJs3HXCKC80ZfBm2k39XLjRgVsMIyds7Glofl7bIKhaPw-Nm-gZ2WUAOd-02UzTgMKauov";
  $tokens=array($token);
  // $msg=array($message);
  // var_dump($tokens);
  // var_dump($msg);
  $url = 'https://fcm.googleapis.com/fcm/send';
  $fields = array(

     'registration_ids' =>$tokens,
     'data' => $message
    );
  $headers = array(
    'Authorization:key = AAAAu_RCTVA:APA91bGrs9xsCcuBXee9rTF1m3CDsmwjhv4wT86PSD0j7Lc59dfKvI4WFVNeQFj6M6vOU38HdUYbcvVndUd4umuMWoY_77FfAAzoCw4bRI6xo8AcOCrmuEEdJ3qLknRw1G5M7XEGHcpO',
    'Content-Type: application/json'
    );
   $ch = curl_init();
     curl_setopt($ch, CURLOPT_URL, $url);
     curl_setopt($ch, CURLOPT_POST, true);
     curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
     curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
     curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
     curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
     $result = curl_exec($ch);
     if ($result === FALSE) {
         die('Curl failed: ' . curl_error($ch));
     }
     curl_close($ch);
  var_dump(json_decode($result,TRUE)['success']);
  $res=json_decode($result,TRUE)['success'];
  if($res==1){
    $this->session->set_flashdata('msg','Successfully Notification Sent ');
    redirect('report_manage');
    // $response['status']=200;
    // $response['success']=$res;
    // $response['reply']=$reply;
//echo json_encode($response);
  }else{

    $this->session->set_flashdata('msg','Notification Could Not Be Sent At The moment');
    redirect('report_manage');
    // $response['status']=404;
    // $response['success']=0;

    // echo json_encode($response);

  }
     //return $result;
  }

public function test(){

var_dump($_POST);
$_POST['ans'];

exit();
    $this->session->set_flashdata('msg','Successfully Notification Sent ');
    redirect('report_manage');
}


// if( $data['the geom'] == null){
//   }else{
//
//     $ddata=$data ;
//     unset($data['st_asgeojson']);
//     $features_cat[]= array(
//       'type' =>'Feature',
//       'properties'=>$data,
//       'geometry'=>json_decode($ddata['st_asgeojson'],JSON_NUMERIC_CHECK)
//     );
//   }


}//end
