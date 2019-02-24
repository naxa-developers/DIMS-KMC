<div class="container card-body">
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $projectlist[0]['id'] ?>">
        <div class="form-row projectDataImages" id="b1">
            <div class="col-sm-3">
                <label>Image Content</label> <?php //echo "<pre>"; print_r($projectlist);die; ?>
                <input type="text" name="imagedesc" value="<?php echo $projectlist[0]['imagedesc'] ?>" class="form-control" placeholder="Enter Choose Image Content">
                <?=form_error('imagedesc')?>
            </div>
            <div class="col-sm-3">
                <label class="control-label" for="galleryImg1">Please Select Image</label>
                <div class="input-append">
                <input type="file" name="imgpath" class="form-control">
                </div>
                <?=form_error('imgpath')?>
            </div>
            <div class="col-sm-3">
                <label class="control-label" for="galleryImg1">Old Image</label>
                <div class="input-append">
                    <input type="hidden" name="oldimgpath" class="form-control" value="<?php echo $projectlist[0]['imgpath'] ?>">
                    <img src="<?php echo base_url('/uploads/project/'.$projectlist[0]['imgpath']) ?>" alt="<?php echo $projectlist[0]['imagedesc'] ?>">
                </div>
            </div>
            <div class="col-sm-3">
                <label>Files Content</label>
                <input type="text" name="filedesc" value="<?php echo $projectlist[0]['filedesc'] ?>" class="form-control" placeholder="Enter Files Content  ">
                <?=form_error('filedesc')?>
            </div>
            <div class="col-sm-3">
                <label class="control-label" for="fileImg1">Please Select Files</label>
                <div class="input-append">
                <input type="file" name="filedescpath" class="form-control">
                </div>
                <?=form_error('filedescpath')?>
            </div>
            <div class="col-sm-3">
                 <label class="control-label" for="fileImg1">Old Files</label>
                <div class="input-append">
                <input type="hidden" name="oldfiledescpath" class="form-control" value="<?php echo $projectlist[0]['filedescpath'] ?>">
                <a href="<?php echo base_url('/uploads/project/'.$projectlist[0]['filedescpath']) ?>"><i class="fas fa-file-pdf fa-2x"></i> Old Project File</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <button class="btn btn-primary" type="submit" style="margin-top: 10px;">Submit form </button>
        </div>
    </form>
</div>