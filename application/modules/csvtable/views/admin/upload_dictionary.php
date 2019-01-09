<!--main content start-->
<section id="main-content">
    <section class="wrapper">
    <!-- page start-->

    <div class="row">
        <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        
                        <?php echo $this->lang->line('upload_dictionary'); ?>
                    </header>
                    <div class="panel-body">
                        <div class="position-center">
                          <h5><i class="fa fa-info-circle"></i> <?php echo $this->lang->line('note'); ?></h5><br>
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
                                      <label for="exampleInputFile"><?php echo $this->lang->line('input'); ?></label>
                                      <input type="file" name="uploadedfile"  id="exampleInputFile">

                                  </div>

                            <button type="submit" name="submit" class="btn btn-info"><?php echo $this->lang->line('upload_csv'); ?></button>
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
