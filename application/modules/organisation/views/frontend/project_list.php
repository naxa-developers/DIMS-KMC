<div class="container">
  <div class="panel-body">
    <a class="btn btn-success btn-sm" href="<?php echo base_url('whodoes/createproject') ?>">Add New Project</a>
            <?php
              $error= $this->session->flashdata('msg');
               if($error){ ?>
                 <div class="alert alert-info alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Message!!!!</strong>  <?php echo $error ; ?>
                  </div>
           <?php
           }
            ?>
        <?php  if($projectlist == NULL){   ?>
          <h4> <?php echo $this->lang->line('nodata'); ?>  </h4>
        <?php }else{ ?>
          <table class="table table-hover" id="tb3">
              <thead>
              <tr>
                <?php foreach($projectlist[0] as $key => $value){


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
                  Project files | Out comes
                </td>
                <td>
                  <?php echo $this->lang->line('operation'); ?>
                </td>
              </tr>
              </thead>
              <tbody>
                  <?php foreach($projectlist as $v ){ ?>
              <tr>
                  <?php foreach($v as $key => $value) {
                      ?>
                  <td><?php echo $value;?></td>
                <?php }  ?>
                <td><a class="btn btn-success btn-sm" href="<?php echo base_url()?>whodoes/addprogress/?id=<?php echo base64_encode($v['id']);?>">Add Project files</a></td>
                  <td>
                    <a href="<?php echo base_url()?>/whodoes/createproject?id=<?php echo base64_encode($v['id']);?>"><?php echo $this->lang->line('edit'); ?></a> /
                    <a onclick="return confirm('Are you sure you want to delete?')" href="<?php echo base_url(FOLDER_ADMIN)?>/whodoes/delete?id=<?php echo  $v['id'];?>"><?php echo $this->lang->line('delete'); ?></a></td>
              </tr>
            <?php  }?>
              </tbody>
          </table>
        <?php }?>
      </div>
    </div>