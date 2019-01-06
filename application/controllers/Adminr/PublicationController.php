<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class PublicationController extends CI_Controller
{
  function __construct()
  {
    parent::__construct();



    $this->load->dbforge();
    $this->load->helper('url');
    $this->load->model('Publication_model');

  }

  public function view_publication(){


    if(($this->session->userdata('logged_in'))!=TRUE)
    {

      redirect('admin');
    }else{

    }


    $this->body['data']=$this->Publication_model->get_all_data();

    //admin check
    $admin_type=$this->session->userdata('user_type');

    $this->body['admin']=$admin_type;
    //admin check


    $this->load->view('admin/header',$this->body);
    $this->load->view('admin/publication_tbl',$this->body);
    $this->load->view('admin/footer');

  }

  public function add_publication(){

    if(($this->session->userdata('logged_in'))!=TRUE)
    {

      redirect('admin');
    }else{

    }

    if(isset($_POST['submit'])){


      $file_name = $_FILES['proj_pic']['name'];
      $attachment=$_FILES['uploadedfile']['name'];

    // $ext = pathinfo($file_name, PATHINFO_EXTENSION);

      $ext_file = pathinfo($attachment, PATHINFO_EXTENSION);



      $data=array(
        'title'=>$this->input->post('title'),
        'summary'=>$this->input->post('summary'),
        'category'=>$this->input->post('category'),


      );


      $insert=$this->Publication_model->add_publication('publication',$data);

      if($insert!=""){

        $img_upload=$this->Publication_model->do_upload($file_name,$insert);
        $file_upload=$this->Publication_model->file_do_upload($attachment,$insert);
        // var_dump($file_upload);
        // exit();






        if($img_upload['status']== 1){
//var_dump($img_upload);
          $ext=$img_upload['upload_data']['file_ext'];
        //echo $ext;
      //  exit();

          $image_path=base_url() . 'uploads/publication/'.$insert.$ext ;
          $file_path=base_url() . 'uploads/publication/file/'.$insert.'.'.$ext_file ;

          $img=array(
            'photo'=>$image_path,
            'file'=>$file_path
          );

          $update_path=$this->Publication_model->update_path($insert,$img);

          $this->load->model('Newsletter');
          $mail_subject='New Publication Added in VSO Webpage';
          $m='New Publication '.$this->input->post('title').' has been added in VSO Webpage.Plese follow link to view new Publication <br>'.base_url().'publication';
          $this->Newsletter->send_mail($m,$mail_subject);

          $this->session->set_flashdata('msg','Publication successfully added');

          redirect('view_publication');



        }else{

          $code= strip_tags($img_upload['error']);



          $this->session->set_flashdata('msg', $code);
          redirect('add_publication');

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
      $this->load->view('admin/add_publication');
      $this->load->view('admin/footer');


    }

  }

  public function delete_publication(){

    if(($this->session->userdata('logged_in'))!=TRUE)
    {

      redirect('admin');
    }else{

    }

    $id = $this->input->get('id');
    $delete=$this->Publication_model->delete_data($id);

    $this->session->set_flashdata('msg','Id number '.$id.' row data was deleted successfully');
    redirect('view_publication');



  }




  public function edit_publication(){

    if(($this->session->userdata('logged_in'))!=TRUE)
    {

      redirect('admin');
    }else{

    }

    $id=base64_decode($this->input->get('id'));
    if(isset($_POST['submit'])){

      if( $_FILES['proj_pic']['name']==''){



        $data= array(

          'title'=>$this->input->post('title'),
          'summary'=>$this->input->post('summary'),

        );

        $update=$this->Publication_model->update_data($id,$data);

        if($update==1){

          $this->session->set_flashdata('msg','Data successfully Updated');
          redirect('view_publication');

        }else{


          //error
        }







      }else{

        $file_name = $_FILES['proj_pic']['name'];

        $ext = pathinfo($file_name, PATHINFO_EXTENSION);

        $data=array(
          'title'=>$this->input->post('title'),
          'summary'=>$this->input->post('summary'),


        );


        $insert=$this->Publication_model->update_data($id,$data);

        if($insert==1){

          $img_upload=$this->Publication_model->do_upload($file_name,$id);






          if($img_upload==1){

            $image_path=base_url() . 'uploads/publication/'.$id.'.'.$ext ;

            $img=array(
              'photo'=>$image_path,
            );

            $update_path=$this->Publication_model->update_path($id,$img);

            $this->session->set_flashdata('msg','Publication successfully Updated');

            redirect('view_publication');



          }else{

            $code= strip_tags($img_upload['error']);



            $this->session->set_flashdata('msg', $code);
            redirect('add_publication');

          }


        }else{

          //db error
        }
      }

    }else{

      $this->body['edit_data']=$this->Publication_model->get_edit_data(base64_decode($this->input->get('id')),'publication');

      //admin check
      $admin_type=$this->session->userdata('user_type');

      $this->body['admin']=$admin_type;
      //admin check


      $this->load->view('admin/header',$this->body);
      $this->load->view('admin/edit_publication',$this->body);
      $this->load->view('admin/footer');




    }




  }

  public function download(){
    $file=$this->input->get('file');
    $name=$this->input->get('title').'.pdf';
    $this->load->helper('download');
    $data=file_get_contents($file);
    force_download($name,$data);

  }



}//end
