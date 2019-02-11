<!--main content start-->
<section id="main-content">
    <section class="wrapper">
    <!-- page start-->
        <div class="row">
        <div class="col-sm-12">
            <section class="panel">
              <section class="panel">
                  <header class="panel-heading">
                     <b><?php //echo $name ?>Dictionary</b>
                      <span class="tools pull-right">
                        <a href="<?php echo base_url(FOLDER_ADMIN)?>/csvtable/upload_dictionary"><button type="submit" name="upload_data" class="btn btn-danger" style="background-color: #1fb5ad;border-color: #1fb5ad;margin-top: -7px;"><i class="fa fa-plus"></i><?php echo $this->lang->line('upload_csv'); ?></button></a>
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

                      <h4> <?php echo $this->lang->line('nodata'); ?>  </h4>

                    <?php }else{ ?>
                      <table class="table table-hover" id="tb2">
                          <thead>
                          <tr>
                            <?php foreach($data[0] as $key => $value){ ?>
                              <td>

                                <?php

               									$cleanname = explode("_", $key);
               									foreach ($cleanname as $r) {
               										echo ucfirst($r)." ";
               														      } ?>

                              </td>
                            <?php  } ?>
                            <td>
                              <?php echo $this->lang->line('operation'); ?>
                            </td>
                          </tr>


                          </thead>
                          <tbody>
                              <?php foreach($data as $v ){ ?>
                          <tr>

                              <?php foreach($v as $key => $value) {
                                if($key=='image'){


            echo '<td><button  class="btn btn-xs btn-round  btn-danger" data-toggle="modal" data-target="#myModal'.$v['id'].'"> Add  Photo</button></td>';
                                      ?>
                              <?php   }


                              ?>
                              <td><?php echo $value;?></td>
                            <?php }  ?>
                              <td>
                                <a href="<?php echo base_url(FOLDER_ADMIN)?>/dictionary/edit?id=<?php echo base64_encode($v['id']);?>"><?php echo $this->lang->line('edit'); ?></a> /
                                <a onclick="return confirm('Are you sure you want to delete?')" href="<?php echo base_url(FOLDER_ADMIN)?>/dictionary/delete?id=<?php echo base64_encode($v['id']);?>"><?php echo $this->lang->line('delete'); ?></a></td>
                          </tr>

                            <div class="modal fade" id="myModal<?php echo  $v['id'];?>" role="dialog">
                              <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Change Photo</h4>
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
                                                            <img src="<?php echo  $v['image'];?>" alt="" />
                                                          </div>
                                                          <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                                          <div>
                                                            <span class="btn btn-white btn-file">
                                                              <span class="fileupload-new"><i class="fa fa-paper-clip"></i> <?php echo $this->lang->line('select_image'); ?></span>
                                                              <span class="fileupload-exists"><i class="fa fa-undo"></i> <?php echo $this->lang->line('change'); ?></span>
                                                              <input type="file" name="dictionary_image" class="default" />
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




                        <?php  }?>
                          </tbody>
                      </table>
                    <?php }?>
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
