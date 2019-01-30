<section id="main-content" class="">
    <section class="wrapper"> <style>.error{ color:red; }</style>
        <div class="row"><!-- <?php/// echo base_url(FOLDER_ADMIN)?>/drrinfo/drrinformation" -->
            <section class="panel">
                <header class="panel-heading">Drrinformation </header>
                <form method="post" action="" enctype="multipart/form-data" >
                    <input type="hidden" name="id" value="<?php echo !empty($drrdataeditdata[0]['id'])?$drrdataeditdata[0]['id']:'' ?>">
                    <div class="form-group">
                        <div class="col-md-6">
                            <?php if($categories): ?>
                            <?php $dbcatid = !empty($drrdataeditdata[0]['category_id'])?$drrdataeditdata[0]['category_id']:'' ?>
                            <label for="category_id">Select Disaster Category : </label>
                            <select class="form-control" id="category_id" name="category_id">
                                <option value="0">----Select Disaster Category----- </option>
                                <?php foreach ($categories as $key => $value) { ?>
                                <option value="<?php echo $value['id'] ?>" <?php if($dbcatid == $value['id']){ echo "Selected=Selected";}?>><?php echo  $value['name']; ?></option>
                                <?php } ?>
                            <?=form_error('category_id')?>
                            </select>
                        <?php endif; ?>
                        </div>
                        <div class="col-md-6">
                            <?php if($subcategories): ?>
                            <label for="subcat_id">Select Subcategory : </label>
                             <?php $dbsubcatid = !empty($drrdataeditdata[0]['subcat_id'])?$drrdataeditdata[0]['subcat_id']:'' ?>
                                <select class="form-control" id="subcat_id" name="subcat_id" required>
                                    <option value="0">-----Select Disaster Subcategory -----</option>
                                    <?php foreach ($subcategories as $key => $value) { ?>
                                    <option value="<?php echo $value['id'] ?>" <?php if($dbsubcatid  == $value['id']){ echo "Selected=Selected";}?>><?php echo  $value['name']; ?></option>
                                    <?php } ?>
                                </select>
                                <?php endif; ?>
                            </select>
                            <?=form_error('subcat_id')?>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <label for="short_desc">Short Description : </label>
                            <textarea class="form-control"  id="short_desc" name="short_desc"><?php echo !empty($drrdataeditdata[0]['short_desc'])?$drrdataeditdata[0]['short_desc']:'' ?></textarea>
                             <?php echo form_error('short_desc'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <label for="description">Description : </label>
                            <textarea class="form-control ckeditor"  name="description"><?php echo !empty($drrdataeditdata[0]['description'])?$drrdataeditdata[0]['description']:'' ?></textarea>
                            
                            <?php echo form_error('description'); ?>
                        </div>
                    </div>
                    <div class="form-group">

                        <div class="col-md-6">
                            <label for="image">Image : </label>
                            <input type="file" class="btn btn-primary" id="image" name="image">
                        </div>
                        <?php if($drrdataeditdata):  ?>
                            <div class="col-md-6">
                                <label for="image">Old Image : </label>
                                <img src="<?php  echo $drrdataeditdata[0]['image']; ?>" alt="Image Logo" height="100px" width="200px">
                                <input type="hidden" class="btn btn-primary" id="image" name="old_image" value="<?php echo !empty($drrdataeditdata[0]['image'])?$drrdataeditdata[0]['image']:'' ?>">
                            </div>
                        <?php endif; ?>
                        <div class="col-md-6">
                            <label for="submit">&nbsp;&nbsp;</label><br>
                            <button type="submit" name="submit" class="btn btn-primary" ><?php if($drrdataeditdata){ echo "Update";}else{ echo"Submit";} ?></button>
                        </div>
                    </div>
               </form>
            </section>
        </div>
    </section>
</section>
