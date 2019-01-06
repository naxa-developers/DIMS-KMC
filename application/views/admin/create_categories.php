<style>
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
  #select-img{
    display: none;
  }
  .btn.btn-info{
    background-color: #1fb5ad;
  }
  .rim {
      padding-left: 30px;
      padding-bottom: 10px;
      margin-left: 218px;
  }
  button#show {
      background-color: #1fb5ad;
      border-color: transparent;
      border-radius: 4px;
      margin-left: 30px;
  }
  span.btn.btn-white.btn-file {
      background-color: #1fb5ad;
      color: #fff;
      margin-left: 15px;
  }
  div#select-img {
      margin-left: 15px;
  }
  .form-group.nam {
      margin-left: 30px;
  }
  label.control-label.col-md-3.nn {
      margin-left: 15px;
  }
  .kk {
      margin-left: 230px;
  }
</style>
<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<!--main content start-->
<section id="main-content" class="">
  <section class="wrapper">
    <!-- page start-->
    <!-- page start-->
    <div class="row">
      <div class="col-lg-12">
        <section class="panel">
          <header class="panel-heading">
            <b><?php echo $this->lang->line('add_category'); ?></b>
          </header>
          <div class="panel-body">
            <div class="position-center">
              <form role="form" method="POST" action="" enctype="multipart/form-data">

                <!-- <?php

                if($error){ ?>
                <div class="alert alert-info alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Message!!!!</strong> <?php echo $error ; ?>
              </div>
              <?php
            }
            ?> -->

            <div class="form-group nam">
              <label for="exampleInputEmail1"><?php echo $this->lang->line('cat_name'); ?></label>
              <input type="text" name="cat_name" class="form-control" id="exampleInputEmail1" placeholder="Category Name" required>
            </div>



            <div class="form-group ">
              <label class="control-label col-md-3">Category Image</label>
              <div class="col-md-12">
                <br>
                    <div> 
                </div>
                <div class="col-md-12">
                  Select Icon
                  <div class="panel panel-default icon-select" style="border: 1px solid #ddd;max-height: 150px; width: 425px;overflow-x: auto;" >
                    <div class="panel-body" style="overflow: hidden;">


                      <div class="form-group">

                        <?php foreach ($icon as $icons) {

                          ?>
                          <label>
                            <input type="radio" name="icon" value="<?php echo $icons['icon_path'] ?>" />
                            <img src="<?php echo $icons['icon_path']?>" height="90">
                          </label>

                        <?php } ?>


                      </div>



                    </div>
                  </div>

                </div>



              </div>
                <!-- <div class="computer"> -->
                  <!--  <span id = "show" class="btn btn-white btn-file">
                        <span class="fileupload-new"><i class="fa fa-paper-clip"></i> Select image</span>
                        <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                        <input type="file" name="cat_pic" class="default" />
                      </span> -->
            <!-- <button type="button" id="show"  > <span class="btn btn-white btn-file">
                        <span class="fileupload-new"><i class="fa fa-paper-clip"></i> Select From Computer</span>
                        <!-- <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span> -->
                        <!-- <input type="file" name="cat_pic" class="default" />
                      </span></button> -->
          <!-- </div> -->
            </div>
             <div class="col-md-12" >
                  OR
                  <div class="fileupload fileupload-new" data-provides="fileupload">
                    <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"  id="select-img">
                      <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" />
                    </div>
                    <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                    <br>
                       <span class="btn btn-white btn-file">
                        <span class="fileupload-new"><i class="fa fa-paper-clip"></i> Select from computer</span>
                        <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                        <input type="file" name="cat_pic" class="default" />
                      </span> 
                      <br/><br/><br/>

                    </div>
                  </div>
                </div>

            <div class='row' >
              <div class="form-group col-md-12 ">
                <div class="kk">
                <label for="exampleInputFile">Category Type</label>
                <select name="category_type">

                  <option value="Hazard_Data">Hazard & Vulnerability</option>
                  <option value="Exposure_Data"> Resources</option>
                  <option value="Baseline_Data">Base Data</option>
                </select>
              </div>
              </div>

              <div class="form-group col-md-12">
                <div class="kk">
                <label for="exampleInputFile">File Type</label>
                <select name="upload_type">

                  <option value="csv">CSV File</option>
                  <option value="shapefile">Shapefile</option>
                </select>
              </div>
              </div>
            </div>
        </div>
        <div class="rim">
<button type="submit" name="submit_cat" class="btn btn-info">Submit</button>
</div>
          </form>
      </div>
    </section>

  </div>

</div>

<!-- kjljlkjklj -->

<!-- page end-->
</section>
</section>
<!--main content end-->

<script type="text/javascript">
$(document).ready(function(e){
  $(".addicon").click(function(){
    $(this).toggleClass("check");
  });
});
</script>
<script>
$(document).ready(function(){
    $("#hide").click(function(){
        $("#select-img").hide();
    });
    $("#show").click(function(){
        $("#select-img").show();
    });
});
</script>