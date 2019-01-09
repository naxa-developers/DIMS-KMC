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
            $groups=array();
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
            <!-- <div class="linksc" id="headingTwo">
                <div class="flex collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    <div class="letter citems">B</div>
                    <hr class=" grow ">
                    <div class=" ind citems ">
                        <span class="minus">-</span>
                        <span class="plus">+</span>
                    </div>
                </div>
                </h5>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                <div class="row">
                    <div class="col-md-3">
                        <div class="dictonaryItem">
                            Affilation System
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="dictonaryItem">
                            Affilation System
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="dictonaryItem">
                            Affilation System
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="dictonaryItem">
                            Affilation System
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="dictonaryItem">
                            Affilation System
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="dictonaryItem">
                            Affilation System
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="dictonaryItem">
                            Affilation System
                        </div>
                    </div>
                </div>
            </div>
            <div class="linksc" id="headingThree">

                <div class="flex collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    <div class="letter citems">C</div>
                    <hr class=" grow ">
                    <div class=" ind citems ">
                        <span class="minus">-</span>
                        <span class="plus">+</span>
                    </div>

                </div>
                </h5>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                <div class="row">
                    <div class="col-md-3">
                        <div class="dictonaryItem">
                            Affilation System
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="dictonaryItem">
                            Affilation System
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="dictonaryItem">
                            Affilation System
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="dictonaryItem">
                            Affilation System
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="dictonaryItem">
                            Affilation System
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="dictonaryItem">
                            Affilation System
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="dictonaryItem">
                            Affilation System
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
   <!--  <?php 
    $fruits=array("date","guava","lemon","Orange","kiwi","Banana","apple");
natcasesort($fruits);  // pre-sort them for alphabetized output
$size=3;  // <-modify group sizes here
$chunks=str_split(implode(range('A','Z')),$size);  // ['ABC','DEF','GHI','JKL','MNO','PQR','STU','VWX','YZ']
$groups=array_filter(array_combine($chunks,array_map(function($v)use($fruits){return array_values(preg_grep("/^[$v].*/i",$fruits));},$chunks)));
var_export($groups); ?> -->
</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>