<section id="main-content" class="">
    <section class="wrapper">
        <div class="row">
            <section class="panel">
                <header class="panel-heading">Drrinformation </header>
                <form role="form" method="POST" action=""  enctype="multipart/form-data" >
                    <div class="form-group">
                        <div class="col-md-6">
                            <?php if($categories): ?>
                            <label for="category_id">Select Disaster Category : </label>
                            <select class="form-control" id="category_id" name="category_id">
                                <option value="0">----Select Disaster Category----- </option>
                                <?php foreach ($categories as $key => $value) { ?>
                                <option value="<?php echo $value['id'] ?>"><?php echo  $value['name']; ?></option>
                                <?php } ?>
                            <?=form_error('category_id')?>
                            </select>
                        <?php endif; ?>
                        </div>
                        <div class="col-md-6">
                            <?php if($subcategories): ?>
                            <label for="subcat_id">Select Subcategory : </label>
                                <select class="form-control" id="subcat_id" name="subcat_id">
                                    <option value="0">-----Select Disaster Subcategory -----</option>
                                    <?php foreach ($subcategories as $key => $value) { ?>
                                    <option value="<?php echo $value['id'] ?>"><?php echo  $value['name']; ?></option>
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
                            <textarea class="form-control"  id="short_desc" name="short_desc"></textarea>
                            <?=form_error('subcat_id')?>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <label for="description">Description : </label>
                            <textarea class="form-control ckeditor"  id="description" name="description"></textarea>
                            <?=form_error('subcat_id')?>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                            <label for="image">Image : </label>
                            <input type="file" class="btn btn-primary" id="image" name="image">
                        </div>
                        <div class="col-md-6">
                            <label for="submit">&nbsp;&nbsp;</label><br>
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </section>
        </div>
    </section>
</section>
