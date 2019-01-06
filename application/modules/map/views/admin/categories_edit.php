<!--main content start-->
<section id="main-content" class="">
    <section class="wrapper">
    <!-- page start-->
    <!-- page start-->





    <div class="row">
    <div class="col-lg-12">
    <section class="panel">
        <header class="panel-heading">
            Change Category
        </header>
        <div class="panel-body">
            <form class="form-horizontal bucket-form" method="post" action="" enctype="multipart/form-data">

              <?php


             for($i=0;$i<sizeof($fields);$i++){






             if($fields[$i]=='id'){

                ?>

              <input type="hidden" value="<?php echo $edit_data[$fields[$i]];?>" name="id">


            <?php  }else{

           ?>


      <?php if($fields[$i]=='category_name' || $fields[$i]=='category_type' || $fields[$i]=='category_photo'){   ?>


                <?php if($fields[$i]=='category_type'){ ?>

                  <div class="form-group">
                      <label class="col-sm-3 control-label"><?php  echo ucwords(str_replace("_"," ",$fields[$i]));?></label>

                      <div class="col-sm-6">
                        <select name="<?php echo $fields[$i];?>" >

                          <option value="<?php echo $edit_data[$fields[$i]]; ?>"><?php echo str_replace("_"," ",$edit_data[$fields[$i]])?></option>
                          <option value="Hazard_Data">Hazard Data</option>
                          <option value="Exposure_Data">Resource Data</option>
                          <option value="Baseline_Data">Baseline Data</option>
                        </select>
                      </div>
                  </div>

                <?php }elseif($fields[$i]=='category_photo'){?>

                  <div class="form-group ">
                    <label class="control-label col-md-3"><?php  echo ucwords(str_replace("_"," ",$fields[$i]));?></label>
                    <div class="col-md-9">
                      <br>
                      <div class="col-md-6">

                        <div class="fileupload fileupload-new" data-provides="fileupload">
                          <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                            <img src="<?php echo $edit_data[$fields[$i]]; ?>" alt="" />
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
                      </div>
                      </div>


              <?php }else{  ?>

                <div class="form-group">
                    <label class="col-sm-3 control-label"><?php  echo ucwords(str_replace("_"," ",$fields[$i]));?></label>
                    <div class="col-sm-6">
                        <input type="text" value="<?php echo $edit_data[$fields[$i]]; ?>" name="<?php echo $fields[$i];?>" class="form-control round-input">
                    </div>
                </div>

             <?php }}}}?>






                <div class="col-md-6">
              <button type="submit" class="btn btn-info">Submit</button>

                 </div>



                </div>


                </div>
            </form>
        </div>
    </section>




    </div>
    </div>









    <!-- page end-->
    </section>
</section>
<!--main content end-->
