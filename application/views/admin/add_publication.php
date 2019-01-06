<script src="https://cdn.ckeditor.com/4.9.2/standard/ckeditor.js"></script>
<!--main content start-->
<section id="main-content" class="">
  <section class="wrapper">
    <!-- page start-->
    <!-- page start-->
    <div class="row">
      <div class="col-lg-12">
        <section class="panel">
          <header class="panel-heading">
            Basic Forms
          </header>

                                    <?php
                                      $error=	$this->session->flashdata('msg');
                                       if($error){ ?>
                                         <div class="alert alert-success alert-dismissible">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <strong>Message</strong> <?php echo $error ; ?>
                                              </div>
                                       <?php
                                       }
                                        ?>
          <div class="panel-body">
            <div class="position-center">
              <form role="form" method="POST" action="" enctype="multipart/form-data">

                <div class="form-group">
                    <label for="exampleInputFile">Publication category</label>
                  <select name="category">


                    <option value="muni_pub">Municipal Publications</option>
                    <option value="law_act">Laws and Acts</option>
                    <option value="plan_politics">Plans and Policies</option>
                    <option value="others">Others</option>
                  </select>
                    </div>



                <div class="form-group">
                  <label for="exampleInputEmail1">Title</label>
                  <input type="text" name="title" class="form-control" id="exampleInputEmail1"  required>
                </div>

                <div class="clearfix"></div>

                <div class="form-group">
                  <label class="col-sm-2 control-label col-sm-2">Summary</label>
                  <div class="col-sm-10">
                    <textarea class="form-control ckeditor" name="summary" rows="10" required></textarea>
                  </div>
                </div>

       <div class="clearfix"></div>


                <div class="form-group ">
                  <label class="control-label col-md-3">Publicaton Photo </label>
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
                          <input type="file" name="proj_pic" class="default" required/>
                        </span>

                      </div>
                    </div>

                  </div>
                </div>


                <div class="form-group">
                    <label for="exampleInputFile">Publication Attachment</label>
                    <input type="file" name="uploadedfile"  id="exampleInputFile">

                </div>


                <button type="submit" name="submit" class="btn btn-info">Submit</button>
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
