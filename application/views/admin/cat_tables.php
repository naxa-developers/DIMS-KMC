<!--main content start-->
<section id="main-content">
    <section class="wrapper">
    <!-- page start-->
        <div class="row">
        <div class="col-sm-12">
            <section class="panel">
              <section class="panel">
                  <header class="panel-heading">
                      Hover Table
                      <span class="tools pull-right">
                          <a href="javascript:;" class="fa fa-chevron-down"></a>
                          <a href="javascript:;" class="fa fa-cog"></a>
                          <a href="javascript:;" class="fa fa-times"></a>
                       </span>
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


                      <table class="table table-hover">
                          <thead>





                          <tr>
                            <td>
                              Table Name
                            </td>
                            <td>
                              Operations
                            </td>
                          </tr>


                          </thead>
                          <tbody>
                              <?php foreach($data as $v ){

                               if($v == "users"||$v == "spatial_ref_sys"||$v == "project_tbl"||$v == "geography_columns"||$v == "geometry_columns"||$v == "raster_overviews"||$v == "raster_overviews"||$v == "raster_columns"){}else{

                                          ?>
                          <tr>
                             <td><?php echo $v;?></td>

                             <td><a href="<?php echo base_url()?>data_tables?tbl_name=<?php echo base64_encode($v);?>">view</a>/<a href="<?php echo base_url()?>drop_cat_table?tbl_name=<?php echo base64_encode($v);?>">Delete</a></td>





                          </tr>
                        <?php }} ?>
                          </tbody>
                      </table>
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
