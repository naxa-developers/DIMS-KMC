<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class NewsletterController extends CI_Controller
{
  function __construct()
  {
    parent::__construct();

    $this->load->helper('url');
    $this->load->model('Newsletter');

  }

public function register(){

var_dump($this->input->post('email'));
$data=array(

'email'=>$this->input->post('email'),


);
$insert=$this->Newsletter->register($data);

if($insert!=""){

  redirect('main');
}
}

public function mail()
{

  $this->Newsletter->send_mail('Newsletter');
}


//mapdownload code

public function download(){

  $this->load->dbutil();
  $this->load->helper('file');
  $this->load->helper('download');

$id=$this->input->get('id');
$n=$this->input->get('name');
$name=$n.'.jpg';
$data=file_get_contents('uploads/map_download/'.$id.'.jpg');
force_download($name,$data);
//echo $id;



}

//end

public function get_category_pub(){

$cat=$this->input->get('cat');
$tbl='publication';
//$cat='muni_pub';

if ($cat=='0') {
  $pub_fil=$this->Newsletter->get_pub_all($tbl);
} else {
  $pub_fil=$this->Newsletter->get_pub_filter($cat,$tbl);
}

echo json_encode($pub_fil);


}

public function get_category_mapdownload(){

  $cat=$this->input->get('cat');
  $tbl='maps_download';
  //$cat='muni_pub';

  if ($cat=='0') {
    $pub_fil=$this->Newsletter->get_pub_all($tbl);
  } else {
    $pub_fil=$this->Newsletter->get_pub_filter($cat,$tbl);
  }

  echo json_encode($pub_fil);
}


}//end
