
<!--main content start-->
<section id="main-content">
    <section class="wrapper">
    <!-- page start-->

    <div class="row">
        <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                      Feature Dataset
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
                                      <label for="exampleInputFile">Map Category</label>
                                    <select name="table">
                                         <?php foreach($cat as $d){
                                           if($e_data['table']== $d['category_table']){
                                           ?>

                                      <option selected="selected" value="<?php echo $d['category_table'] ?>"><?php echo $d['category_name']?></option>
                                          <?php } ?>
                                      <option value="<?php echo $d['category_table'] ?>"><?php echo $d['category_name']?></option>

                                    <?php } ?>
                                    </select>
                                      </div>

                                  <div class="form-group">
                                    <label for="exampleInputEmail1">Title</label>
                                    <input type="text" name="title" value="<?php echo $e_data['title'] ?>" class="form-control" id="exampleInputEmail1"  required>
                                    <input type="hidden" name="id" value="<?php echo $e_data['id'] ?>" class="form-control" id="exampleInputEmail1"  required>

                                  </div>




                                  <div class="form-group">
                                    <label class="col-sm-3 control-label col-sm-2">Summary</label>
                                    <div class="col-sm-10">
                                      <textarea class="form-control"  name="summary" rows="5" required><?php echo $e_data['summary'] ?></textarea>
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
