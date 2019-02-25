

<!--main content start-->
<section id="main-content">
    <section class="wrapper">
    <!-- page start-->
        <div class="row">
        <div class="col-sm-12">
            <section class="panel">
              <section class="panel">
                  <header class="panel-heading">
                     <b>DRR info</b>
                      <span class="tools pull-right">
                        <a href="<?php echo base_url(FOLDER_ADMIN)?>/site_setting/sliderHome"><button type="submit" name="upload_data" class="btn btn-danger" style="background-color: #1fb5ad;border-color: #1fb5ad;margin-top: -7px;"> <i class="fa fa-plus"></i>Add New Slider</button></a>
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
                    <?php  if($drrdata == NULL){   ?>
                      <h4> <?php echo $this->lang->line('nodata'); ?>  </h4>
                    <?php }else{ ?>
                      <table class="table table-hover" id="tb3">
                          <thead>
                          <tr>
                            <?php foreach($drrdata[0] as $key => $value){


                                          ?>
                              <td>
                                <?php
               									$cleanname = explode("_", $key);
               									foreach ($cleanname as $r) {
               										echo ucfirst($r)." ";
               														      }?>
                              </td>
                            <?php  } ?>
                            <td>
                              <?php echo $this->lang->line('operation'); ?>
                            </td>
                          </tr>
                          </thead>
                          <tbody>
                              <?php foreach($drrdata as $v ){ ?>
                          <tr>
                              <?php foreach($v as $key => $value) {
                                  ?>
                              <td><?php echo $value;?></td>
                            <?php }  ?>
                              <td>
                                <a href="<?php echo base_url(FOLDER_ADMIN)?>/site_setting/sliderHome?id=<?php echo base64_encode($v['id']);?>"><?php echo $this->lang->line('edit'); ?></a> /
                                <a onclick="return confirm('Are you sure you want to delete?')" href="<?php echo base_url(FOLDER_ADMIN)?>/site_setting/deleteslider?id=<?php echo base64_encode($v['id']);?>"><?php echo $this->lang->line('delete'); ?></a></td>
                          </tr>
                        <?php  } ?>
                          </tbody>
                      </table>
                    <?php } ?>
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
