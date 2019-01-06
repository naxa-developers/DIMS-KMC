<!--main content start-->
<section id="main-content">
    <section class="wrapper">
    <!-- page start-->

    <div class="row">
        <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        Layer Upload
                    </header>
                    <div class="panel-body">
                        <div class="position-center">
                          <h5><i class="fa fa-info-circle"></i> Note: Use of correct Data</h5><br>
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
                                      <label for="exampleInputFile">Map Category</label>
                                    <select name="category">

                                      <option value="admin" >Administrative Maps</option>
                        							<option value="risk" >Risk and Hazard Maps</option>
                        							<option value="socio" >Socio Economic Maps</option>
                        							<option value="tourist" >Tourist Maps</option>
                        							<option value="land" >Land use and Land Cover</option>
                        							<option value="other" >Others</option>

                                    </select>
                                      </div>

                                  <div class="form-group">
                                    <label for="exampleInputEmail1">Title</label>
                                    <input type="text" name="title" class="form-control" id="exampleInputEmail1"  required>
                                  </div>




                                  <div class="form-group">
                                    <label class="col-sm-3 control-label col-sm-2">Summary</label>
                                    <div class="col-sm-10">
                                      <textarea class="form-control" name="summary" rows="5" required></textarea>
                                    </div>
                                  </div>

                                  <div class="form-group ">
                                    <label class="control-label col-md-3"> Map Photo</label>
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
                                              <span class="fileupload-new"><i class="fa fa-paper-clip"></i> Select image</span>
                                              <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                              <input type="file" name="map_pic" class="default" />
                                            </span>


                                          </div>
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

    <!-- page end-->
    </section>
</section>
<!--main content end-->
