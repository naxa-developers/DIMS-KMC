<div class="container card-body">
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-row projectDataImages" id="b1">
            <div class="col-sm-3">
                <label>Image Content</label>
                <input type="text" name="imagedesc[]" value="<?php echo set_value('imagedesc[]') ?>" class="form-control" placeholder="Enter Choose Image Content">
                <?=form_error('imagedesc[]')?>
            </div>
            <div class="col-sm-3">
                <label class="control-label" for="galleryImg1">Please Select Image</label>
                <div class="input-append">
                <input type="file" name="imgpath[]" class="form-control">
                </div>
                <?=form_error('imgpath[]')?>
            </div>
            <div class="col-sm-3">
                <label>Files Content</label>
                <input type="text" name="filedesc[]" value="<?php echo set_value('filedesc[]') ?>" class="form-control" placeholder="Enter Files Content  ">
                <?=form_error('filedesc[]')?>
            </div>
            <div class="col-sm-3">
                <label class="control-label" for="fileImg1">Please Select Files</label>
                <div class="input-append">
                <input type="file" name="filedescpath[]" class="form-control">
                </div>
                <?=form_error('filedescpath[]')?>
            </div>
        </div>
        <div class="col-md-12 mb-3">
            <label for="">&nbsp;</label>
            <button id="b1" class="btn btn-info btn-sm add-more-multiple float-right" type="button" style="margin-top: 10px;">Add Multiple +</button>
        </div>
        <div class="col-md-4 mb-3">
            <button class="btn btn-primary" type="submit" style="margin-top: 10px;">Submit form </button>
        </div>
    </form>
</div>
<div class="container">
  <div class="panel-body">
    <h4>Your Project progress images and Related files</h4>
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
                  <td>
                    <a href="<?php echo base_url()?>/whodoes/editprogressfile?id=<?php echo base64_encode($v['id']);?>&&cat=<?php echo base64_encode($cat); ?>"><?php echo $this->lang->line('edit'); ?></a> /
                    <a onclick="return confirm('Are you sure you want to delete?')" href="<?php echo base_url(FOLDER_ADMIN)?>/whodoes/delete?id=<?php echo  $v['id'];?>"><?php echo $this->lang->line('delete'); ?></a></td>
              </tr>
            <?php  }  ?>
              </tbody>
          </table>
        <?php } ?>
      </div>
    </div>
<script type="text/javascript">
    $(document).off('click', '.add-more-multiple')
    $(document).on('click', '.add-more-multiple', function (e) {
        e.preventDefault();
        var count =$('div.projectDataImages').length;
        var addto = "#b" + count;
        next = count + 1;
        var newIn = '<div class="form-row projectDataImages" id="b'+next+'"><div class="col-sm-3"><label>Image Content</label><input type="text" name="imagedesc[]" value="<?php echo set_value('imagedesc[]') ?>" class="form-control" placeholder="Enter Choose Image Content"><?=form_error('imagedesc[]')?></div><div class="col-sm-3"><label class="control-label" for="galleryImg1">Image 1</label><div class="input-append"><input type="file" name="imgpath[]" class="form-control"></div><?=form_error('imgpath[]')?></div><div class="col-sm-3"><label>Files Content</label><input type="text" name="filedesc[]" value="<?php echo set_value('filedesc[]') ?>" class="form-control" placeholder="Enter Files Content  "><?=form_error('filedesc[]')?></div><div class="col-sm-3"><label class="control-label" for="fileImg1">Files 1</label><div class="input-append"><input type="file" name="filedescpath[]" class="form-control"></div><?=form_error('filedescpath[]')?></div></div></div>';

        var newInput = $(newIn);
        $(addto).after(newInput);
    });
</script>

