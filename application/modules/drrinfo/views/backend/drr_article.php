<section id="main-content" class="">
    <section class="wrapper">
        <div class="row">
            <section class="panel">
                <header class="panel-heading">Drr related article </header>
                <form  method="POST" action=""  enctype="multipart/form-data" >
                    <input type="hidden" name="id" value="<?php echo !empty($drreditdata[0]['id'])?$drreditdata[0]['id']:'' ?>">
                    <div class="form-group">
                        <div class="col-md-6">
                            <?php if($categories): ?>
                            <?php $dbcatid = !empty($drreditdata[0]['category_id'])?$drreditdata[0]['category_id']:'' ?>
                            <label for="category_id">Select Disaster Category : </label>
                            <select class="form-control" id="category_id" name="category_id" required>
                                <option value="0">----Select Disaster Category----- </option>
                                <?php foreach ($categories as $key => $value) { ?>
                                <option value="<?php echo $value['id'] ?>" <?php if($dbcatid == $value['id']){ echo "Selected=Selected";}?>><?php echo  $value['name']; ?></option>
                                <?php } ?>
                            <?=form_error('category_id')?>
                            </select>
                        <?php endif; ?>
                        </div>
                        <div class="form-group">
                        <div class="col-md-6"> 
                            <label for="title">Title : </label>
                            <input type="text" class="form-control"  id="title" name="title" value="<?php echo !empty($drreditdata[0]['title'])?$drreditdata[0]['title']:'' ?>" required >
                             <?php echo form_error('title'); ?>  
                    </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <label for="short_summary">Short Summary : </label>
                            <textarea class="form-control"  id="short_summary" name="short_summary" required><?php echo !empty($drreditdata[0]['short_summary'])?$drreditdata[0]['short_summary']:'' ?></textarea>
                             <?php echo form_error('short_summary'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <label for="detail_info">Detail info: </label>
                            <textarea class="form-control"  id="short_summary" name="detail_info" required><?php echo !empty($drreditdata[0]['detail_info'])?$drreditdata[0]['detail_info']:'' ?></textarea>
                             <?php echo form_error('detail_info'); ?>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                    <label for="exampleInputFile">Article Attachment</label>
                    <input type="file" name="uploadedfile"  id="exampleInputFile" >
                </div>
                    <div class="form-group">
                            <label for="submit">&nbsp;&nbsp;</label><br>
                            <button type="submit" name="submit" class="btn btn-primary"><?php if($drreditdata){ echo "Update";}else{ echo"Submit";} ?></button>
                        </div>
                   

                </form>
            </section>
        </div>
    </section>
</section>
