<section class="searchPaneldrr">
    <div class="container">
        <div class="searchdrrouter">
            <div class="searchdrr">
                <input type="text" id="searhddr" class="searchitems" placeholder="search the text">
                <i class=" show searchi la la-search">
                </i>
                <i class=" close la la-times">
                </i>
            </div>
        </div>
    </div>
</section>
<section class="dictonarylist">
    <div class="container">
        <div class="accordion contactaccordion" id="accordion">
           <?php if($dictionary):
            $previous = null;
                foreach ($dictionary as $key => $tag) { 
                    $firstLetter = strtoupper(substr($tag['word'], 0, 1));
                    if($previous !== $firstLetter) { 
                        if($key != 0) {
                            echo '</ol>';
                        } ?>
                        <div class="linksc" id="headingOne<?php //echo $key+1; ?>">
                            <div class="flex align-items-center " data-toggle="collapse" data-target="#collapseOne<?php //echo $key+1; ?>" aria-expanded="true" aria-controls="collapseOne">
                                <div class="letter citems"><?php echo $firstLetter;?></div>
                                <hr class="grow">
                                <div class="ind citems">
                                    <span class="minus">-</span>
                                    <span class="plus">+</span>
                                </div>
                            </div>
                        </div>
                        <ol class="tags main">
                        <div class="row">
                    <?php } ?>
                        <div class="col-md-3 detailDictionary">
                            <div class="dictonaryItem">
                               <!--  <a href="javascript:void(0);"  data-html="true" id="popover" data-trigger="hover" data-toggle="popover" title="Meaning Of <?php echo $tag['word']; ?>" data-content="<?php echo $tag['meaning'] ?> &nbsp;&nbsp;&nbsp; <img src='<?php echo $tag['image'] ?>' width='200'/><?php echo "<br>"; echo $tag['comment']; ?>"><?php echo ucfirst($tag['word']); ?></a> -->
                                <a href="javascript:void(0);"  data-html="true" id="popover" data-trigger="hover" class="dictionaryPopup" data-toggle="popover" title="Meaning Of <?php echo $tag['word']; ?>" data-content="<div><?php echo $tag['meaning'] ?></div><div class='mtb-15'><img src='<?php echo $tag['image'] ?>' width='200'/></div><div><h5>Comment</h5><?php  echo $tag['comment']; ?></div>"><?php echo ucfirst($tag['word']); ?></a>  
                            </div>
                        </div>
                    <?php if($key == count($dictionary)-1) { 
                        echo '</div></ol>';
                    }
                    $previous = $firstLetter; 
                }
            endif;
            ?> 
        </div>
    </div>
  
</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<!-- <script>$("#popover").popover({ trigger: "hover" });</script> -->


