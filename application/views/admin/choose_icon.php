<style type="text/css">
label > input{ /* HIDE RADIO */
  visibility: hidden; /* Makes input not-clickable */
  position: absolute; /* Remove input from document flow */
}
label > input + img{ /* IMAGE STYLES */
  cursor:pointer;
  border:2px solid transparent;
}
label > input:checked + img{ /* (RADIO CHECKED) IMAGE STYLES */
  border:2px solid #f00;
}
div#exampleModal {
  overflow: hidden;
}
.map-marker{
  width: 60px;
  height: 80px;
  margin: auto;
  display: block;
  margin-left: 12px;

}
</style>

<!--main content start-->
<section id="main-content">
  <section class="wrapper">
    <!-- page start-->
    <div class="row">
      <div class="col-sm-12">
        <section class="panel">
          <section class="panel">
            <header class="panel-heading">
              <b>Choose Map Icon Style</b>
              <span class="tools pull-right">
                         <a href="<?php echo base_url()?>category?tbl=<?php echo $tbl ?>"><button type="submit" name="upload_data" class="btn btn-danger" style="background-color: #1fb5ad;border-color: #1fb5ad;margin-top: -7px;"><i class="fa fa-map-marker"></i> View In Map</button></a>
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
              <form role="form" method="POST" action="" enctype="multipart/form-data">

                <div class="form-group ">
                  <div class="col-md-9">
                    <br>
                    <div class="col-md-6">
                      Upload Image
                      <div class="fileupload fileupload-new" data-provides="fileupload">
                        <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                          <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" />
                        </div>
                        <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                        <div>
                          <span class="btn btn-white btn-file">
                            <span class="fileupload-new"><i class="fa fa-paper-clip"></i> Select image</span>
                            <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                            <input type="file" name="cat_pic" class="default" />
                          </span>


                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      Select Icon
                      <div class="panel panel-default icon-select" style="border: 1px solid #ddd;max-height: 150px; width: 425px;overflow-x: auto;" >
                        <div class="panel-body" style="overflow: hidden;">


                          <div class="form-group">

                            <div class="row">

                              <?php foreach($icons as $v){ ?>

                              <div class="col-md-3">

                                  <label>
                                    <input id="fb3" type="radio" value="<?php echo $v['marker_path']?>" name="icon" value="med" />
                                    <img class="map-marker" src="<?php echo $v['marker_path']?>"  alt="Logo"  >

                                  </label>
                                </div>

                              <?php } ?>





                              </div>



                            </div>
                          </div>

                        </div>



                      </div>
                    </div>

                    <div class="col-md-6">
                      <a href="#"> <button type="submit" name="submit" class="btn btn-success" style="background-color: #1fb5ad;border-color: #1fb5ad;">Update</button></a>

                    </div>



                  </div>
                </form>
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
