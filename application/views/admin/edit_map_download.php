<!--main content start-->
<section id="main-content">
    <section class="wrapper">
    <!-- page start-->

    <div class="row">
        <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        Edit Map
                    </header>
                    <div class="panel-body">
                        <div class="position-center">
                          <h5><i class="fa fa-info-circle"></i> Note: Edit Map Download Part</h5><br>
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

                                  <div class="form-group" >
                                      <label for="exampleInputFile">Map Category</label>
                                    <select name="category">

                                      <option value="<?php echo $e_data['category'] ?>"><?php echo $e_data['category'] ?></option>
                                      <option value="admin" >Administrative Maps</option>
                        							<option value="risk" >Risk and Hazard Maps</option>
                        							<option value="socio" >Socio Economic Maps</option>
                        							<option value="tourist" >Tourist Maps</option>
                        							<option value="land" >Land use and Land Cover</option>
                        							<option value="other" >Others</option>

                                    </select>
                                      </div>

                                  <div class="form-group">
                                      <input type="hidden" value="<?php echo $e_data['id'];?>" name="id">
                                    <label for="exampleInputEmail1">Title</label>
                                    <input type="text" value="<?php echo $e_data['title'] ?>" name="title" class="form-control" id="exampleInputEmail1"  required>
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
