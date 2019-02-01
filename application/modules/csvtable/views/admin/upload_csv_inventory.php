<!--main content start-->
<section id="main-content">
    <section class="wrapper">
    <div class="row"><style>.error{ color: red; }</style>
        <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                      Inventory Data Upload 
                        <!-- <?php echo $this->lang->line('upload_dictionary'); ?> -->
                    </header>
                        <h5><i class="fa fa-info-circle"></i> <?php echo $this->lang->line('note'); ?></h5><br>
                            <form role="form" method="POST" action="" enctype="multipart/form-data">

                              <?php
                                $error=	$this->session->flashdata('msg');
                                 if($error){ ?>
                                   <div class="alert alert-info alert-dismissible">
                          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                          <strong>Message!!!!</strong> <?php echo $error ; ?>
                                        </div>
                                 <?php } ?>
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="category">Select  Category : </label>
                                        <select class="form-control" id="category" name="category" >
                                            <option value="">----Select Category----- </option>
                                            <?php foreach ($catgegory as $key => $value) { ?>
                                            <option value="<?php echo $value['id'] ?>"><?php echo  $value['name']; ?></option>
                                            <?php } ?>
                                            
                                        </select>
                                        <?=form_error('category')?>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="subcat">Select Sub  Category : </label>
                                        <select class="form-control" id="subcat" name="subcat" >
                                            <option value="">----Select Sub Category----- </option>
                                            <?php foreach ($subcat as $key => $value) { ?>
                                            <option value="<?php echo $value['id'] ?>"><?php echo  $value['name']; ?></option>
                                            <?php } ?>
                                            
                                        </select>
                                        <?=form_error('subcat')?>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="exampleInputFile"><?php echo $this->lang->line('input'); ?></label>
                                        <input type="file" name="uploadedfile"  id="exampleInputFile">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="">&nbsp;&nbsp;</label>
                                        <button style="margin-top: 10px;" type="submit" name="submit" class="btn btn-info"><?php echo $this->lang->line('upload_csv'); ?></button>
                                    </div>
                                </div> 
                        </form>
                </section>
        </div>
        </div>
    <!-- page end-->
    </section>
</section>
<!--main content end-->
