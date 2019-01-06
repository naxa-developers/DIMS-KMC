<!--main content start-->
<section id="main-content" class="">
    <section class="wrapper">
    <!-- page start-->
    <!-- page start-->
    <div class="row">
        <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        Basic Formss
                      <span class="tools pull-right">
                       <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">Csv Format Example</button>
                         </span>
                    </header>

                    <div class="panel-body">

                      <?php
                        $error=	$this->session->flashdata('msg');
                         if($error){ ?>
                           <div class="alert alert-info alert-dismissible">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  <strong>Message!!!!  </strong>   <?php echo $error ; ?>
                                </div>
                         <?php
                         }
                          ?>

                        <div class="position-center">
                          <h5><i class="fa fa-info-circle"></i> Note: Select a Csv File to Upload to Table</h5><br>
                            <form role="form" method="POST" action="" enctype="multipart/form-data">


                                  <div class="form-group">
                                      <label for="exampleInputFile">File input</label>
                                      <input type="file" name="fileToUpload" id="exampleInputFile">

                                  </div>


                            <button type="submit" name="submit" class="btn btn-info">Upload</button>

                        </form>
                        </div>

                    </div>

           <!-- modal start -->


           <div class="container">
  <h2></h2>
  <!-- Trigger the modal with a button -->


  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">csv format should be in following format</h4>
        </div>
        <div class="modal-body">




         <!-- table start -->
         <form method="POST" action="">
        <div class="form-group">
                       <label class="col-sm-3 control-label col-lg-3" for="inputSuccess">Select Latitude or X</label>

                           <select name="lat" class="form-control m-bot15">
                               <option value=""></option>

                           </select>

                           <label class="col-sm-3 control-label col-lg-3" for="inputSuccess">Select Lobgitude or Y</label>

                               <select class="form-control m-bot15">
                                   <option>1</option>


                               </select>

                   </div>


<!-- table end -->

        </div>
        <div class="modal-footer">
          <button type="submit" name="submit" class="btn btn-default" data-dismiss="modal">Close</button>
        </form>
        </div>
      </div>

    </div>
  </div>

</div>

           <!-- modal end -->


                </section>

        </div>

    </div>

<!-- kjljlkjklj -->








    <!-- page end-->
    </section>
</section>
<!--main content end-->
