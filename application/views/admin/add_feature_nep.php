<!--main content start-->
<section id="main-content">
    <section class="wrapper">
    <!-- page start-->

    <div class="row">
        <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                      फीचर दतासेट
                    </header>
                    <div class="panel-body">
                        <div class="position-center">
                          <h5><i class="fa fa-info-circle"></i> Note: Select a Layer File to Upload to Table</h5><br>
                            <form role="form" method="POST" action="" enctype="multipart/form-data">

                              <?php
                                $error=	$this->session->flashdata('msg');
                                 if($error){ ?>
                                   <div class="alert alert-info alert-dismissible">
                          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                          <strong>Message!!!!</strong> <?php echo $error ; ?>
                                        </div>
                                 <?php
                                 }
                                  ?>

                                  <div class="form-group">
                                      <label for="exampleInputFile">Data Table</label>
                                    <select name="table">
                                         <?php foreach($cat as $d){ ?>
                                      <option value="<?php echo $d['category_table'] ?>"><?php echo $d['category_name']?></option>

                                    <?php } ?>
                                    </select>
                                      </div>

                                  <div class="form-group">
                                    <label for="exampleInputEmail1">Title</label>
                                    <input type="text" name="nepali_title" class="form-control" id="exampleInputEmail1"  required>
                                    <input type="hidden" name="default" value="1" class="form-control" id="exampleInputEmail1">
                                  </div>




                                  <div class="form-group">
                                    <label class="col-sm-3 control-label col-sm-2"><?php echo $this->lang->line('summary'); ?></label>
                                    <div class="col-sm-10">
                                      <textarea class="form-control" name="nepali_summary" rows="5" required></textarea>
                                    </div>
                                  </div>

                                  <div class="form-group ">
                                    <label class="control-label col-md-3"> Feature Dataset Photo</label>
                                    <div class="col-md-9">
                                      <br>
                                      <div class="col-md-6">

                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                          <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                            <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" />
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





                            <button type="submit" name="submit" class="btn btn-info"><?php echo $this->lang->line('upload'); ?></button>
                        </form>
                        </div>

                    </div>
                </section>

        </div>

        </div>

    <!-- page end-->
    </section>
</section>
<!--main content end-->
