<script src="https://cdn.ckeditor.com/4.9.2/standard/ckeditor.js"></script>
<!--main content start-->
<section id="main-content" class=""> <style>.error{ color: red; }</style>
  <section class="wrapper">
    <!-- page start-->
    <!-- page start-->
    <div class="row">
      <div class="col-lg-12">
        <section class="panel">
          <header class="panel-heading">
            Basic Forms
          </header>

                  <?php
                    $error= $this->session->flashdata('msg');
                     if($error){ ?>
                       <div class="alert alert-success alert-dismissible">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              <strong>Message</strong> <?php echo $error ; ?>
                            </div>
                     <?php
                     }
                      ?>
              <form role="form"  method="POST" action="" enctype="multipart/form-data">
                <div class="form-group">
                  <div class="col-md-4">
                    <label for="exampleInputFile"> Select Hazard category</label>
                  <select name="category" class="form-control">
                    <option value="">----- Select Hazard category ------</option>
                    <?php 
                    if($pub){ 
                        $dbcatid = !empty($edit_data['category'])?$edit_data['category']:'';
                    foreach ($pub as $key => $value) {  ?>
                      <option value="<?php echo $value['id']  ?>" <?php if($dbcatid == $value['id']){ echo "Selected=Selected";}?>><?php echo $value['name'] ?></option>
                    <?php }  } ?>
                  </select>
                  <?php echo form_error('category'); ?>
                  </div>
                  <div class="col-md-4">
                    <label for="exampleInputFile"> Select File Type: </label>
                  <select name="type" class="form-control FileTypes" id="FileTypes">
                    <option value="">----- Select File Type ------</option>
                    <?php $dbcatidtype = !empty($edit_data['type'])?$edit_data['type']:'';
                     foreach ($pubcatfiletype as $key => $pt) {  ?>
                    <option value="<?php echo $pt; ?>" <?php if($dbcatidtype == $pt){ echo "Selected=Selected";}?>><?php echo ucfirst($pt); ?></option>
                    <?php } ?>
                  </select>
                  <?php echo form_error('type'); ?>
                  </div>
                  <div class="col-md-4">
                    <label for="exampleInputFile"> Select file  category type</label>
                  <select name="subcat" class="form-control">
                    <option value="">----- Select file  category type ------</option>
                    <?php 
                    if($pubcat){ 
                     $dbcatidsubcat = !empty($edit_data['subcat'])?$edit_data['subcat']:'';
                    foreach ($pubcat as $key => $value) {  ?>
                      <option value="<?php echo $value['id']  ?>" <?php if($dbcatidsubcat == $value['id']){ echo "Selected=Selected";}?>><?php echo $value['name'] ?></option>
                    <?php }  } ?>
                  </select>
                  <?php echo form_error('subcat'); ?>
                  </div>
                  <?php if($edit_data['file']): ?>
                  <div class="col-md-4" id="FileUrl">
                    <label for="uploadedfile">Publication Attachment</label>
                    <input type="file" name="uploadedfile"  id="exampleInputFile">
                  </div>
                  <div class="col-md-4" id="FileUrl">
                    <label for="uploadedfile">Publication Attachment</label>
                    <input type="hidden" name="old_uploadedfile"  id="exampleInputFile" value="<?php echo $edit_data['file']  ?>">
                    <a href="<?php echo $edit_data['file']  ?>"><i class="fa fa-file fa-3x"></i></a>
                  </div>
                  <?php endif; ?>
                   <?php if($edit_data['audio']): ?>
                  <div class="col-md-4" id="AudioUrl">
                    <label for="exampleInputFile">Publication Audio</label>
                    <input type="file" name="old_audio"  id="exampleInputFile" >
                  </div>
                  <div class="col-md-4" id="AudioUrl">
                    <label for="exampleInputFile">Old Publication Audio File name</label>
                    <input type="hidden" name="old_audio" value="<?php echo $edit_data['audio'] ?>">
                    <i><?php echo $edit_data['audio'] ?></i>
                  </div>
                <?php endif; ?>
                  <div class="col-md-4">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" name="title" value="<?php echo $edit_data['title'] ?>"  class="form-control" id="exampleInputEmail1"  placeholder="Enter Title">
                  </div>
                  <div class="col-md-8" id="videoUrlData">
                    <label for="exampleInputEmail1">Video Url</label>
                    <textarea class="form-control" name="videolink" rows="2" cols="50" placeholder="Enter Youtube Video Url Title"><?php echo $edit_data['videolink'] ?></textarea>
                  </div>
                  <div class="col-sm-12">
                    <label class="control-label">Summary</label>
                    <textarea class="form-control ckeditor" name="summary" rows="10" ><?php echo $edit_data['summary'] ?></textarea>
                  </div>
                  <?php if($edit_data['photo']): ?>
                  <div class="col-md-4" id="ImageDiveSelector">
                    <label class="control-label">Publication Photo </label>
                    <div class="fileupload fileupload-new" data-provides="fileupload">
                      <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                        <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" />
                      </div>
                      <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                      <div>
                        <span class="btn btn-white btn-file">
                          <span class="fileupload-new"><i class="fa fa-paper-clip"></i> Select image</span>
                          <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                          <input type="file" name="proj_pic" class="default" />
                        </span>
                      </div>
                    </div>
                  </div>

                <?php endif; ?>
                  <?php if($edit_data['photo']):  ?>
                      <div class="col-md-6">
                          <label for="image">Old Image : </label>
                          <img src="<?php  echo $edit_data['photo']; ?>" alt="Image Logo" height="100px" width="200px">
                          <input type="hidden" class="btn btn-primary" id="image" name="old_image" value="<?php echo $edit_data['photo'] ?>">
                      </div>
                  <?php endif; ?>
                  <div class="col-md-4">
                    <label  class="control-label" for="">&nbsp;&nbsp;&nbsp;</label>
                    <button type="submit" name="submit" class="btn btn-info" style="margin-top: 15px;">Submit</button>
                  </div>
                </div>
              </form>
            </div>

          </div>
        </section>
      </div>
    </div>
  </section>
</section>

<!-- <script>
  $(document).off('change','.FileTypes');
  $(document).on('change','.FileTypes',function(){
      var selvalue = $('#FileTypes').val();
      if(selvalue === "files") {
        $('#FileUrl').show();
      }else{
        $('#FileUrl').hide();
      }
      if(selvalue === 'images') {
        $('#ImageDiveSelector').show();
      }else{
        $('#ImageDiveSelector').hide();
      }
      if(selvalue === 'video') {
        $('#videoUrlData').show();
      }else{
        $('#videoUrlData').hide();
      }
  });
</script>

 -->
