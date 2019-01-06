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
                  <label class="col-sm-3 control-label col-lg-3" for="inputSuccess">Select Longitude</label>

                  <select name='long' class="form-control  m-bot15">
                    <?php for($i=0;$i<sizeof($row);$i++){ ?>
                    <option value="<?php echo $i; ?>"><?php echo $row[$i];?></option>

                  <?php } ?>
                  </select>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label col-lg-3" for="inputSuccess">Select Latitude</label>

                  <select name='lat' class="form-control  m-bot15">
                    <?php for($i=0;$i<sizeof($row);$i++){ ?>
                    <option value="<?php echo $i; ?>" ><?php echo $row[$i]; ?></option>

                  <?php } ?>
                  </select>
                </div>


                <button type="submit" name="submit_row" class="btn btn-info">Upload</button>

              </form>
            </div>

          </div>

          <!-- modal start -->



          <!-- Trigger the modal with a button -->




          <!-- modal end -->


        </section>

      </div>

    </div>

    <!-- kjljlkjklj -->








    <!-- page end-->
  </section>
</section>
<!--main content end-->
