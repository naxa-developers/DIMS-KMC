<!--main content start-->
<section id="main-content">
    <section class="wrapper">
    <!-- page start-->

    <div class="row">
        <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        Add column to table
                    </header>


                    <div class="panel-body">
                        <div class="position-center">
                          <h5><i class="fa fa-info-circle"></i> Note: add column</h5><br>

                          <?php
                            $error=	$this->session->flashdata('table');
                             if($error){ ?>
                               <div class="alert alert-success alert-dismissible">
                      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                      <strong>Success</strong> <?php echo $error ; ?>
                                    </div>
                             <?php
                             }
                              ?>


                          <form method="POST" action=""  >



                              <div id='columnid'>
                                  <br> <br>
                            <div class="form-group">
                              <label for="pwd">Column Name:</label>
                              <input type="text" class="form-control" id="pwd" placeholder="Enter Column Name" name="c_name[]">
                            </div>
                            <div class="form-group">
                              <label for="pwd">Column Length:</label>
                              <input type="text" class="form-control" id="pwd" placeholder="Provide Length" name="c_length[]">
                            </div>

                             <div class="form-group">
                                 <label for="pwd">Column Type:</label>
                              <select class="form-control" name="c_type[]">
                                <option value="varchar">varchar</option>
                                <option value="int">int</option>
                            </select>
                            </div>
                            <br>
                            <br>


                            <div class="form-group">
                              <label for="pwd">Column Name:</label>
                              <input type="text" class="form-control" id="pwd" placeholder="Enter Column Name" name="c_name[]">
                            </div>
                            <div class="form-group">
                              <label for="pwd">Column Length:</label>
                              <input type="text" class="form-control" id="pwd" placeholder="Provide Length" name="c_length[]">
                            </div>
                            <div class="form-group">
                                <label for="pwd">Column Type:</label>
                             <select class="form-control" name="c_type[]">
                               <option value="varchar">varchar</option>
                               <option value="int">int</option>
                           </select>
                           </div>

                        <br>
                        <br>


                            <div class="form-group">
                              <label for="pwd">Column Name:</label>
                              <input type="text" class="form-control" id="pwd" placeholder="Enter Column Name" name="c_name[]">
                            </div>
                            <div class="form-group">
                              <label for="pwd">Column Length:</label>
                              <input type="text" class="form-control" id="pwd" placeholder="Provide Length" name="c_length[]">
                            </div>
                            <div class="form-group">
                                <label for="pwd">Column Type:</label>
                             <select class="form-control" name="c_type[]">
                               <option value="varchar">varchar</option>
                               <option value="int">int</option>
                           </select>
                           </div>
                         </div>

                            <button type="submit" name="submit_col" class="btn btn-danger"><i class="fa fa-cloud-upload"></i> Submit</button>


                          </form>

                            <button type="submit" name="add" id="btnadd" class="btn btn-info"><i class="fa fa-plus"></i> add column</button>
                            
                        </div>

                    </div>
                </section>

        </div>

        </div>

    <!-- page end-->
    </section>
</section>
<!--main content end-->
