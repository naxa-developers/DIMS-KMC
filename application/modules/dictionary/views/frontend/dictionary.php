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
                ?>
                <div class="linksc" id="headingOne<?php //echo $key+1; ?>">
                    <div class="flex align-items-center " data-toggle="collapse" data-target="#collapseOne<?php //echo $key+1; ?>" aria-expanded="true" aria-controls="collapseOne">
                        <div class="letter citems">A</div>
                        <hr class="grow">
                        <div class="ind citems">
                            <span class="minus">-</span>
                            <span class="plus">+</span>
                        </div>
                    </div>
                </div>
            <?php 
           // $groups=array();
            foreach ($dictionary as $key => $d) { ?>   
                <div id="collapseOne<?php echo $key+1; ?>" class="collapse show" aria-labelledby="headingOne<?php echo $key+1; ?>" data-parent="#accordion">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="dictonaryItem">
                                <a href="javascript:void(0);" data-toggle="popover" title="Meaning Of <?php echo $d['word']; ?>" data-content="<?php echo $d['meaning']; ?>"><?php echo $d['word']; ?></a>
                                <?php //echo $groups[$d[0]][] = $d; ?>
                            </div>
                        </div>

                    </div>
                </div>
            <?php } endif; ?>
           
        </div>
    </div>
  
</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>