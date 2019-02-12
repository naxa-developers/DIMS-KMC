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
                                      <label for="exampleInputFile">File input</label>
                                      <input type="file" name="uploadedfile"  id="exampleInputFile">

                                  </div>

                                  <div class="form-group">
                                      <label for="exampleInputFile">File Type</label>
                                    <select name="proj">

                                      <option value="4326">GEO WGS84</option>
                                    </select>
                                      </div>


                            <button type="submit" name="submit_tbl" class="btn btn-info">Upload</button>
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
