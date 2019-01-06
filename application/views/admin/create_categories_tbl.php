<!--main content start-->
<section id="main-content">
    <section class="wrapper">
    <!-- page start-->

    <div class="row">
        <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        Create Table
                    </header>
                    <div class="panel-body">
                        <div class="position-center">
                          <h5>Note: Table Name Should Not Have Spaces.And avoid using uppercase as well as unwanted character</h5><br>
                            <form role="form" method="POST" action="">

                              <?php
                                $error=	$this->session->flashdata('msg');
                                 if($error){ ?>
                                   <div class="alert alert-danger alert-dismissible">
                          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                          <strong>Message!!!!</strong> <?php echo $error ; ?>
                                        </div>
                                 <?php
                                 }
                                  ?>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Table Name</label>
                                <input  type="text" class="form-control" value="<?php echo $tbl;?>" name="tbl_name" id="exampleInputEmail1"  required>
                            </div>


                            <button type="submit" name="submit_tbl" class="btn btn-info">Submit</button>
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
