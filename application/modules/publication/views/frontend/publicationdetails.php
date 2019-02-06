<section class="section-padding-half">
    <div class="container">
        <h4><?php echo ucwords($publicationdata[0]['title']) ?></h4>
        <div class="row" id="filter_pub">
            <?php if($publicationdata): 
            foreach($publicationdata as $d ){ ?>
            <div class="col-md-12 ">
                <div class="doccontent flex ">
                  <?php if($d['type'] == "images"){ ?>
                    <div class="docImg">
                        <img src="<?php echo base_url()?>/uploads/publication/28.png" alt="<?php echo $d['title']?>">
                    </div>
                  <?php } if($d['type'] == "video"): ?>
                    <iframe width="100%" height="450" src="<?php echo $d['videolink'];  ?>"></iframe>
                  <?php  endif; ?>
                  <?php if($d['type'] == "files"): ?>
                    <a href="<?php echo $d['file'] ?>"><i class="fa-files-o"></i> <?php echo   $d['title'] ?></a>
                  <?php  endif; ?>
              </div>
              <div class="col-md-12">
                    <div class="docdetailwrp  grow">
                        <div class="docTitle" id="<?php echo $d['id'] ?>">
                           <?php echo $d['title']?>
                        </div>
                        <div class="doctype">
                            Type: <?php echo $d['type'] ?>
                        </div>
                        <p class="docDetail">
                           <?php echo $d['summary'] ?>
                        </p>
                        <div class="docFooter flex justify-content-between">
                            <div class="doccount">
                                123 downloads
                            </div>
                            <div class="docsize">
                                345
                               <i class="fa fa-download"></i>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        <?php } endif; ?>
        </div>
    </div>
</section>