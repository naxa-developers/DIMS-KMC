
<!--main content start-->
<section id="main-content">
    <section class="wrapper">
    <!-- page start-->
        <div class="row">
        <div class="col-sm-12">
            <section class="panel">
              <section class="panel">
                  <header class="panel-heading">
                     <b><?php echo $this->lang->line('featured_datasets'); ?></b>



             <span class="tools pull-right">
               <a href="<?php echo base_url()?>add_feature"><button type="submit" name="upload_data" class="btn btn-danger" style="background-color: #1fb5ad;border-color: #1fb5ad;margin-top: -7px;"><i class="fa fa-plus"></i> Add Feature Dataset</button></a>
              </span>

              <span class="tools pull-right">
                <?php echo $this->lang->line('switch_language'); ?>
    <a class="nav-link" href="<?php echo base_url();?>feature_nep"><img src="<?php echo base_url();?>assets/img/nep.png" height="15"></a>
    <a class="nav-link" href="<?php echo base_url();?>feature"><img src="<?php echo base_url();?>assets/img/uk.png" height="15"></a>
    </span>
                  </header>
                  <div class="panel-body">

                    <?php
                      $error=	$this->session->flashdata('msgg');
                       if($error){ ?>
                         <div class="alert alert-info alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Message!!!!</strong>  <?php echo $error ; ?>
                              </div>
                       <?php
                       }
                        ?>
                    <?php  if($data == NULL){   ?>

                      <h4> <?php echo $this->lang->line('nodata'); ?>   </h4>

                    <?php }else{ ?>
                      <table class="table table-hover" id='tb1'>
                          <thead>





                          <tr>

                            <?php foreach($data[0] as $key => $value){

                                if($key=='table' || $key=='default' || $key=='lang' || $key=='default_nep' || $key=='nepali_title' ||$key=='nepali_summary' ){}else{

                                          ?>
                              <td>

                                <?php

               									$cleanname = explode("_", $key);
               									foreach ($cleanname as $r) {
               										echo ucfirst($r)." ";
               														      }?>

                              </td>
                            <?php  } }?>
                            <td>
                                <?php echo $this->lang->line('operation'); ?>
                            </td>
                          </tr>


                          </thead>
                          <tbody>
                              <?php foreach($data as $v ){ ?>
                          <tr>

                              <?php foreach($v as $key => $value) {

                                if($key=='photo'){


            echo '<td><button type="button" class="btn btn-round btn-danger" data-toggle="modal" data-target="#myModal'.$v['id'].'"> change  Photo</button></td>';
                                      ?>
                              <?php   }elseif($key=='table' || $key=='default' || $key=='lang' || $key=='default_nep' || $key=='nepali_title' ||$key=='nepali_summary' ){}else{ ?>

                              <td><?php echo $value;?></td>
                            <?php }}  ?>
                              <td>
                                <a href="<?php echo base_url()?>edit_feature?id=<?php echo base64_encode($v['id']);?> "><?php echo $this->lang->line('edit'); ?></a> /
                                <a onclick="return confirm('Are you sure you want to delete?')" href="<?php echo base_url()?>delete_feature?id=<?php echo $v['id'];?>"><?php echo $this->lang->line('delete'); ?></a></td>





                          </tr>
                          <!-- modal start -->


                          <!-- Modal -->
                            <div class="modal fade" id="myModal<?php echo  $v['id'];?>" role="dialog">
                              <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title"><?php echo $this->lang->line('change_photo'); ?></h4>
                                  </div>
                                  <div class="modal-body">
                                    <p>.</p>

                                    <form action="" method="POST" enctype="multipart/form-data">
                                      <input type="text" name="id" value="<?php echo  $v['id'];?>" hidden>

                                                  <div class="form-group ">
                                                    <label class="control-label col-md-3"></label>
                                                    <div class="col-md-9">
                                                      <br>
                                                      <div class="col-md-6">
                                                          <?php echo $this->lang->line('upload_image'); ?>
                                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                                          <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                                            <img src="<?php echo  $v['photo'];?>" alt="" />
                                                          </div>
                                                          <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                                          <div>
                                                            <span class="btn btn-white btn-file">
                                                              <span class="fileupload-new"><i class="fa fa-paper-clip"></i> <?php echo $this->lang->line('select_image'); ?></span>
                                                              <span class="fileupload-exists"><i class="fa fa-undo"></i> <?php echo $this->lang->line('change'); ?></span>
                                                              <input type="file" name="map_pic" class="default" />
                                                            </span>


                                                          </div>
                                                        </div>
                                                      </div>
                                                      </div>
                                                      </div>
                                <button type="submit" name="submit" class="btn btn-danger"><?php echo $this->lang->line('change'); ?></button>
                              </form>

                                  </div>
                                  <div class="modal-footer">
                                    <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
                                  </div>
                                </div>

                              </div>
                            </div>
                          <!-- modal end -->

                        <?php  }?>
                          </tbody>
                      </table>
                    <?php }?>
                  </div>
              </section>

            </section>
        </div>
        </div>

    <!-- next -->
    <div class="col-sm-12">
        <section class="panel">
          <section class="panel">
              <header class="panel-heading">
                 <b> <?php echo $this->lang->line('choose_featured_datasets'); ?></b>
                  <span class="tools pull-right">
                    <!-- <a href="<?php echo base_url()?>add_maps"><button type="submit" name="upload_data" class="btn btn-danger"><i class="fa fa-plus"></i> Add Maps</button></a> -->
                   </span>
              </header>
              <div class="panel-body">

                <?php
                  $error=	$this->session->flashdata('msg');
                   if($error){ ?>
                     <div class="alert alert-info alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Message!!!!</strong>  <?php echo $error ; }?>
                          </div>
                          <br>
                          <br>
                          <div class="row">
                            <div class="col-md-12">
                              <form class="form-horizontal bucket-form" action=" " method="POST">
                                <div class="form-group">
                                  <label class="col-sm-3 "><?php echo $this->lang->line('select_featured_datasets'); ?>: </label>

                                        <div class="row col-md-9">
                                        <!-- <?php var_dump($data) ?> -->
                                  <?php foreach($data as $data){  ?>



                                    <div class="col-sm-4 icheck ">

                                      <div class="minimal single-row">
                                        <div class="radio ">
                                        <?php   if($data['default']=='1'){ ?>
                                          <input tabindex="3" type="radio" value="<?php echo  $data['id'];?>"  name="default" checked>

                                      <?php  }else{ ?>
                                          <input tabindex="3" type="radio" value="<?php echo  $data['id'];?>"  name="default">

                                      <?php  } ?>
                                          <label><?php echo $data['title'] ?></label>


                                        </div>
                                      </div>
                                    </div>


                                  <?php } ?>
                                      <br><br>
                                      <br><br>
                                  <button type="submit" name="submit_feature" class="btn btn-info"><?php echo $this->lang->line('update'); ?></button>
                                </form>
                                    </div>




              </div>
            </div>
            </div>
          </section>

        </section>

    <!-- next -->


    </div>

        </div>
    <!-- page end-->
    </section>
</section>
<!--main content end-->
