<!--main content start-->
<section id="main-content" class="">
    <section class="wrapper">
    <!-- page start-->
    <!-- page start-->





    <div class="row">
    <div class="col-lg-12">
    <section class="panel">
        <header class="panel-heading">
            Form Elements
        </header>
        <div class="panel-body">
            <form class="form-horizontal bucket-form" method="post" action="" enctype="multipart/form-data">



             <input type="hidden" value="<?php echo $edit_data['id'];?>" name="id">


                <div class="form-group">
                    <label class="col-sm-3 control-label"><?php echo $this->lang->line('project_name'); ?></label>
                    <div class="col-sm-6">
                        <input type="text" value="<?php echo $edit_data['project_name']; ?>" name="project_name" class="form-control round-input">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label"><?php echo $this->lang->line('project_brief'); ?></label>
                    <div class="col-sm-6">
                        <input type="text" value="<?php echo $edit_data['project_brief']; ?>" name="project_brief" class="form-control round-input">
                    </div>
                </div>


                <div class="form-group ">
                  <label class="control-label col-md-3">Project Partner Logo </label>
                  <div class="col-md-9">
                    <div class="fileupload fileupload-new" data-provides="fileupload">
                      <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                        <img src="<?php echo $edit_data['project_pic']; ?>" alt="" />
                      </div>
                      <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                      <div>
                        <span class="btn btn-white btn-file">
                          <span class="fileupload-new"><i class="fa fa-paper-clip"></i> <?php echo $this->lang->line('select_image'); ?></span>
                          <span class="fileupload-exists"><i class="fa fa-undo"></i> <?php echo $this->lang->line('change'); ?></span>
                          <input type="file" name="proj_pic"  class="default" />
                        </span>

                      </div>
                    </div>

                  </div>
                </div>





                <div class="col-md-6">
              <button type="submit" name="submit" class="btn btn-info"> <?php echo $this->lang->line('update'); ?></button>

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
