<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MapDownload extends CI_Controller
{
  function __construct()
  {
    parent::__construct();

    if(($this->session->userdata('logged_in'))!=TRUE)
    {

      redirect('admin');
    }else{

    }


    $this->load->model('Map_model');
  }




  public function map_show()
  {

    if(isset($_POST['submit']))
    {

      $id=$this->input->post('id');
      $file_name = $_FILES['map_pic']['name'];



    //  $ext = pathinfo($file_name, PATHINFO_EXTENSION);



      $img_upload=$this->Map_model->do_upload($file_name,$id);


      if($img_upload['status']== 1){

          $ext=$img_upload['upload_data']['file_ext'];

        $image_path=base_url() . 'uploads/map_download/'.$id.$ext ;

        $data=array(

          'photo'=>$image_path,
          'photo_thumb'=>base_url() . 'uploads/map_download/'.$id.'_thumb'.$ext

        );



        $config['image_library'] = 'gd2';
        $config['source_image'] = './uploads/map_download/'.$id.$ext;
        $config['new_image'] = './uploads/map_download/'.$id.$ext;
        $config['create_thumb'] = TRUE;
        $config['maintain_ratio'] = TRUE;
        $config['width']         = 800;
       $config['height']       = 800;

        $this->load->library('image_lib', $config);
        $this->image_lib->initialize($config);


          $this->image_lib->resize();
          //var_dump($this->image_lib->resize());
          //var_dump($this->image_lib->display_errors());
        //  exit();
          if(!$this->image_lib->resize())
 {
     echo $this->image_lib->display_errors();
 }

        $update=$this->Map_model->update_map_download($id,$data,'maps_download');
        $this->session->set_flashdata('msg','successfully Photo Changed');
        redirect('map_show');

      }else{

        $code= strip_tags($img_upload['error']);



        $this->session->set_flashdata('msg', $code);
        redirect('map_show');


      }


    }else{
      $this->body['data']= $this->Map_model->get_map_download_data();

      //admin check
      $admin_type=$this->session->userdata('user_type');

      $this->body['admin']=$admin_type;
      //admin check


      $this->load->view('admin/header',$this->body);
      $this->load->view('admin/map_download',$this->body);
      $this->load->view('admin/footer');
    }

  }

  public function add_maps(){



    if(isset($_POST['submit'])){


      unset($_POST['submit']);
      unset($_POST['map_pic']);
      //var_dump($_POST);
      $insert=$this->Map_model->insert_map_download($_POST);


      if($insert!=""){

        $file_name = $_FILES['map_pic']['name'];



        //$ext = pathinfo($file_name, PATHINFO_EXTENSION);



        $img_upload=$this->Map_model->do_upload($file_name,$insert);


        if($img_upload['status'] == 1){

            $ext=$img_upload['upload_data']['file_ext'];


          $image_path=base_url() . 'uploads/map_download/'.$insert.$ext ;

          $data=array(

            'photo'=>$image_path,
            'photo_thumb'=>base_url() . 'uploads/map_download/'.$insert.'_thumb'.$ext

          );



          $config['image_library'] = 'gd2';
          $config['source_image'] = './uploads/map_download/'.$insert.$ext;
          $config['new_image'] = './uploads/map_download/'.$insert.$ext;
          $config['create_thumb'] = TRUE;
          $config['maintain_ratio'] = TRUE;
          $config['width']         = 800;
         $config['height']       = 800;

          $this->load->library('image_lib', $config);
          $this->image_lib->initialize($config);


            $this->image_lib->resize();
            //var_dump($this->image_lib->resize());
            //var_dump($this->image_lib->display_errors());
          //  exit();
            if(!$this->image_lib->resize())
   {
       echo $this->image_lib->display_errors();
   }


          $update=$this->Map_model->update_map_download($insert,$data,'maps_download');
          $this->session->set_flashdata('msg','Map Added successfully');
          redirect('map_show');
        }else{

          $code= strip_tags($img_upload['error']);



          $this->session->set_flashdata('msg', $code);
          redirect('map_show');

        }



      }else{

        //db error
      }

    }else{

      //admin check
      $admin_type=$this->session->userdata('user_type');

      $this->body['admin']=$admin_type;
      //admin check


      $this->load->view('admin/header',$this->body);
      $this->load->view('admin/add_map_download');
      $this->load->view('admin/footer');

    }



  }

  public function edit_map()
  {


    if(isset($_POST['submit'])){

      unset($_POST['submit']);

      var_dump($_POST);

      $tbl='maps_download';

      $update=$this->Map_model->update_map_download($this->input->post('id'),$_POST,$tbl);

      if($update){


        $this->session->set_flashdata('msg','Updated successfully');
        redirect('map_show');

      }else{

        //db error
      }


    }else{




      $this->body['e_data']=$this->Map_model->e_data_map(base64_decode($this->input->get('id')));
      //echo base64_decode($this->input->get('id'));
      //var_dump($this->body['e_data']);

      //admin check
      $admin_type=$this->session->userdata('user_type');

      $this->body['admin']=$admin_type;
      //admin check


      $this->load->view('admin/header',$this->body);
      $this->load->view('admin/edit_map_download',$this->body);
      $this->load->view('admin/footer');

    }

  }

  public function delete_map(){

    $id = $this->input->get('id');
    $delete=$this->Map_model->delete_map($id);

    $this->session->set_flashdata('msg','Id number '.$id.' row data was deleted successfully');
    redirect('map_show');



  }




}
