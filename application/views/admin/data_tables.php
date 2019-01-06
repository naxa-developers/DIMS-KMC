<!--main content start-->
<section id="main-content">
    <section class="wrapper">
    <!-- page start-->
        <div class="row">
        <div class="col-sm-12">
            <section class="panel">

                  <header class="panel-heading">
                      Data OF Table <?php echo $name ?>
                      <span class="tools pull-right">
                          <a href="csv_upload?tbl=<?php echo base64_encode($tbl_name)?>"><button type="submit" name="upload_data" class="btn btn-danger"><i class="fa fa-cloud-upload"></i> Upload Data </button></a>
                       </span>
                  </header>
                  <div class="panel-body">

                    <?php
                      $error=	$this->session->flashdata('msg');
                       if($error){ ?>
                         <div class="alert alert-info alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Message!!!!</strong>  <?php echo $error ; ?>
                              </div>
                       <?php
                       }
                        ?>
                    <?php  if($data == NULL){   ?>

                      <h4> NO Data   </h4>

                    <?php }else{ ?>
                      <table class="table table-hover" id="tb1">
                          <thead>





                          <tr>
                            <td>Id</td>
                            <?php foreach($data_nep as $value){

                            if($value['nepali_lang']=='gid'){}else{
                                          ?>
                              <td>

                                <?php
                                echo $value['nepali_lang']
               									// $cleanname = explode("_", $key);
               									// foreach ($cleanname as $r) {
               									// 	echo ucfirst($r)." ";
               									// 					      }?>

                              </td>
                            <?php  } }?>
                            <td>
                              Operations
                            </td>
                          </tr>


                          </thead>
                          <tbody>
                              <?php foreach($data as $v ){ ?>
                          <tr>

                              <?php foreach($v as $key => $value) {




                                  ?>
                              <td><?php echo $value;?></td>
                            <?php }  ?>
                              <td><a href="<?php echo base_url()?>edit?id=<?php echo base64_encode($v['id']);?>&& tbl=<?php echo base64_encode($tbl_name);?> ">Edit</a>/<a onclick="return confirm('Are you sure you want to delete?')" href="<?php echo base_url()?>delete_data?id=<?php echo  $v['id'];?> && tbl=<?php echo $tbl_name;?>">Delete</a></td>





                          </tr>
                        <?php  }?>
                          </tbody>
                      </table>
                    <?php }?>



              <!-- table hidden start -->

              <!-- <div class="col-sm-12">
                  <section class="panel">
                <header class="panel-heading">
                  Download  CSV format OF Table <?php echo $tbl_name?>
                </header>
               <span class="tools pull-center">
                   <div class="panel-body">
                     <p> Click below csv button to downlaod the empty table format to add data  </p>
                 <table class="table table-hover" id="tb2" style="display:none" >

                   <thead>





                   <tr>

                     <?php foreach($data_nep as $value){


                          if($value['nepali_lang']=='id'){}else{
                       ?>



                       <td>

                         <?php
                        echo($value['nepali_lang'])
                         ?>

                       </td>
                     <?php  }} ?>

                   </tr>


                   </thead>

                   <tbody>


               <tr>
                  <?php for($i=0; $i<sizeof($fields);$i++){

            if($fields[$i]=='id'){}else{

                    ?>
                 <td></td>
               <?php  }} ?>
              </tr>


                   </tbody>

                 </table>
            </div>
          </span>
        </section>
      </div> -->


              <!-- table hidden end -->

                  </div>
              </section>

            </section>
        </div>
    </div>

        </div>
    <!-- page end-->
    </section>
</section>
<!--main content end-->
