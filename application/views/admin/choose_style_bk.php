<style type="text/css">
  .panel-body.choose:hover {
    background-color: #ecebeb;
}
</style>

<!--main content start-->
<section id="main-content">
    <section class="wrapper">
    <!-- page start-->
        <div class="row">
        <div class="col-sm-12">
            <section class="panel">
              <section class="panel">
                  <header class="panel-heading">
                     <b>Choose Map Marker Style</b>


                  </header>
                  <div class="panel-body">

                    <?php
                    $error=	$this->session->flashdata('msg');
                    if($error){ ?>
                      <div class="alert alert-info alert-dismissible">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Message!!!!</strong>  <?php echo $error ; ?>
                      </div>
                      <?php
                    }
                    ?>
<!-- page start-->
    <div class="row">
     <div class="col-md-6">
       <a href="circle_marker?tbl=<?php echo $tbl ?>">
      <section class="panel">
        <div class="panel-body choose" style="border: 1px solid #ecebeb">
          <div class="top-stats-panel">
            <div class="daily-visit">
              <h4 class="widget-h">Select Circle Map Marker</h4>
<br>
              <h1><i class="fa fa-circle fa-2x"></i></h1>


            </div>
          </div>
        </div>
      </section>
    </a>
    </div>

    <div class="col-md-6">
       <a href="location_marker?tbl=<?php echo $tbl ?>">
      <section class="panel">
        <div class="panel-body choose" style="border: 1px solid #ecebeb">
          <div class="top-stats-panel">
            <div class="daily-visit">
              <h4 class="widget-h">Select Icon Map Marker</h4>
<br>
               <h1><i class="fa fa-map-marker fa-2x"></i></h1>


            </div>
          </div>
        </div>
      </section>
    </a>
    </div>


  </div>

                  </div>
              </section>

            </section>
        </div>
    </div>

        </div>
    <!-- page end-->
    </section>
</section>
<!--main content end-->
