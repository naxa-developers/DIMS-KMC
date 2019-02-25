<section id="main-content" class="">
  <section class="wrapper">
    <!-- page start-->
    <div class="row">
      <div class="col-lg-12">
        <section class="panel">
          <header class="panel-heading">
          Home Page Image

            <form role="form"  method="POST" action="" enctype="multipart/form-data">
              <input type="hidden" name="id" value="<?php echo !empty($drrdataeditdata[0]['id'])?$drrdataeditdata[0]['id']:'' ?>">
          <div class="form-group position-center">

                  
                </div>
          <div class="panel-body">
            <div class="position-center">
                <div class="form-group">
                  <div class="form-group ">
                    <div class="col-sm-6">
                      <label for="name">Image Title :</label>
                      <input type="text" name="name" class="form-control" id="name" value="<?php echo !empty($drrdataeditdata[0]['name'])?$drrdataeditdata[0]['name']:'' ?>" placeholder="ENTER IMAGE TITLE">
                    </div>
                     <div class="col-sm-6">
                        <label class="control-label" for="bannerImg1">Image </label>
                        <input type="file" name="image">
                        <?php
                          $bnr_img_db=!empty($drrdataeditdata[0]['image'])?$drrdataeditdata[0]['image']:'';
                          if($bnr_img_db): ?>
                            <img class="img-polaroid" src="<?php echo base_url("/uploads/project/".$bnr_img_db); ?>" style="width: 300px;height: 107px;">
                            <input type="hidden" name="old_banner" value="<?php echo $bnr_img_db; ?>">
                        <?php endif;?>
                      <?=form_error('image')?>
                    </div>
                   </div>
                  <div class="col-md-12">
                    <button style="margin-top: 10px;" type="submit" class="btn btn-info"><?php if($drrdataeditdata) { echo "Update";}else{echo "Submit";} ?></button>
                  </div>
                    
                  </div>
                </div>
                    </div>
                  </form>
                </div>
              </div>
            </header>
          </section>
        </div>
      </div>
    </section>