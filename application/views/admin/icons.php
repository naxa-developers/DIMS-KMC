<!--main content start-->
<section id="main-content" class="">
    <section class="wrapper">
    <!-- page start-->
    <!-- page start-->
    <div class="row">
        <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        Basic Formss
                    </header>
                    <div class="panel-body">
                        <div class="position-center">
                          <h5><i class="fa fa-info-circle"></i> Note: Select a Background Image</h5><br>

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
                            <form role="form" method="POST" action="" enctype="multipart/form-data">


                              <div class="form-group ">
                                <label class="control-label col-md-3">Add icons in Library </label>
                                <div class="col-md-9">
                                  <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                      <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" />
                                    </div>
                                    <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                    <div>
                                      <span class="btn btn-white btn-file">
                                        <span class="fileupload-new"><i class="fa fa-paper-clip"></i> Select image</span>
                                        <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                        <input type="file" name="back_pic" class="default" />
                                      </span>

                                    </div>
                                  </div>

                                </div>
                              </div>


                            <button type="submit" name="submit" class="btn btn-info">Upload</button>
                        </form>
                        </div>

                    </div>
                </section>

        </div>

    </div>

<!-- kjljlkjklj -->








    <!-- page end-->
    </section>
</section>
<!--main content end-->
