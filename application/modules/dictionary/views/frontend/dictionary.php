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
            foreach ($dictionary as $key => $d) { //echo "<pre>"; print_r($dictionary);die; ?>   
                <div id="collapseOne<?php echo $key+1; ?>" class="collapse show" aria-labelledby="headingOne<?php echo $key+1; ?>" data-parent="#accordion">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="dictonaryItem">
                                <a href="javascript:void(0);"  data-html="true" data-toggle="popover" title="Meaning Of <?php echo $d['word']; ?>" data-content="<?php echo $d['meaning'] ?> &nbsp;&nbsp;&nbsp; <img src='<?php echo $d['image'] ?>' width='200'/><?php echo "<br>"; echo $d['comment']; ?>"><?php echo $d['word']; ?></a>
                            </div>
                        </div>

                    </div>
                </div>
            <?php } endif; ?>
           
        </div>
    </div>
  
</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<!-- <?php 
$newArray = [];//create a new array
foreach($dictionary as $item) {
    $letter = $item['word'][0];//get the first letter
    //echo"<pre>"; print_r($letter);
    if (!ctype_alpha($letter)) {//test if its letter
        $newArray['#'][] = $item['word'];
    } else if(count($newArray[$letter])) {//test if the letter is in the array
       $newArray[$letter][] = $item['word'];//save the value
    } else {
       $newArray[$letter] = [$item['word']];
    }
}
?> -->
<!-- <?php
global $alpha_chunks;
# Initialize array
$alpha_chunks = array();
function chunkNames(&$dictionary, $key, $letter) {
    global $alpha_chunks;
     
    //    If the first letter of the last name == $letter, Add the entry to a multi-dimensional array with each
    // $letter is the key. Change 'lastname' to match the name of that column. 
    
    if ($value['lastname'][0] === $letter ) {
        $alpha_chunks[$letter][$key] = $value;
    } 
}
# Can be any array of characters. 
$atoz = range('A','Z'); 
foreach($atoz as $letter) { 
    array_walk($array_to_walk, 'chunkNames', $letter);
}
?> -->