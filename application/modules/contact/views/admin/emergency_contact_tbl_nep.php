
<!--main content start-->
<section id="main-content">
    <section class="wrapper">
    <!-- page start-->
        <div class="row">
        <div class="col-sm-12">
            <section class="panel">
              <section class="panel">
                  <header class="panel-heading">
                     <b><?php echo $name ?> Emergency Contact Nepali</b>
                      <span class="tools pull-right">
                        <a href="<?php echo base_url(FOLDER_ADMIN)?>/csvtable/upload_csv_emerg?cat=<?php echo $cat ?>&&tbl=emergency_contact&&lang=nep"><button type="submit" name="upload_data" class="btn btn-danger" style="background-color: #1fb5ad;border-color: #1fb5ad;margin-top: -7px;"><i class="fa fa-plus"></i><?php echo $this->lang->line('upload_csv'); ?></button></a>
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
                    <?php  if($data == NULL){   ?>

                      <h4> <?php echo $this->lang->line('nodata'); ?>  </h4>

                    <?php }else{ ?>
                      <table class="table table-hover" id="tb2">
                          <thead>
                          <tr>
                            <?php foreach($data[0] as $key => $value){ ?>
                              <td>

                                <?php

               									$cleanname = explode("_", $key);
               									foreach ($cleanname as $r) {
               										echo ucfirst($r)." ";
               														      } ?>

                              </td>
                            <?php  } ?>
                            <td>
                              <?php echo $this->lang->line('operation'); ?>
                            </td>
                          </tr>


                          </thead>
                          <tbody>
                              <?php foreach($data as $v ){ ?>
                          <tr>

                              <?php foreach($v as $key => $value) {
                                  ?>
                              <td><?php echo $value;?></td>
                            <?php }  ?>
                              <td>
                                <a href="<?php echo base_url(FOLDER_ADMIN)?>/contact/edit_emerg?id=<?php echo base64_encode($v['id']);?> && cat=<?php echo $cat ?> && tbl=emergency_contact"><?php echo $this->lang->line('edit'); ?></a> /
                                <a onclick="return confirm('Are you sure you want to delete?')" href="<?php echo base_url()?>delete_emergency?id=<?php echo $v['id'];?> && cat=<?php echo $cat ?> && tbl=emergency_contact"><?php echo $this->lang->line('delete'); ?></a></td>




                          </tr>
                        <?php  }?>
                          </tbody>
                      </table>
                    <?php }?>
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
