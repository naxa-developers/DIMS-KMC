<section class="drrmain section-padding-half">
    <div class="container nav-tabs">
        <div class="search flex">
            <!-- <input class="search--input grow" placeholder="Enter to search..." type="text"> -->
            <input class="search--input grow" id="myInput"  placeholder="<?php echo  SEARCH ?>" type="search" onkeyup="mySearchFunction()">
            <button class="btn-primary search--btn"> SEARCH</button>
        </div>
        <div class="hazardlists">
            <div class="row mysearchFilterdiv">
              <?php if($drrdata):
              foreach ($drrdata as $key => $ddat): ?>
                <div class="col-md-4 searchableDiv">
                    <a  id="searchableDiv<?php echo $key; ?>" href="<?php echo base_url() ?>drrinfo/drrdetails/<?php echo $ddat['slug'] ?>" class="nodec ">
                        <div class="hazarditem">
                            <div class="hoverlay">
                                <div class="htitle bold f30 white">
                                    <?php echo $ddat['name']; ?>
                                </div>
                                <div class="hazardText f22 white">
                                   <?php echo $ddat['description']; ?>
                                </div>
                                <button class="btn-rev mt15">
                                   <a href="<?php echo base_url() ?>drrinfo/drrdetails/<?php echo $ddat['slug'] ?>">LEARN MORE </a> 
                                </button>
                            </div>
                            <?php if($ddat['image']): ?>
                                <img src="<?php echo $ddat['image']; ?>" alt="<?php echo $ddat['name']; ?>">
                            <?php endif; ?>
                        </div>
                    </a>
                </div>
              <?php endforeach;
               endif; ?>
            </div>
        </div>
    </div>
</section>
<script type="text/javascript">
    $(".nav-tabs").tabdrop();
        function mySearchFunction() { 
        // Declare variables
        var  input, filter, div, div1, i ,j;
        input = document.getElementById('myInput');
        filter = input.value.toUpperCase();
        div = document.getElementsByClassName("mysearchFilterdiv");
        div1 = document.getElementsByClassName("searchableDiv");
        //console.log(div1);
        for(j = 0; j < div1.length; j++){
            console.log(div1);
            var closeit = 0;
            for (i = 0; i < div[j].children.length; i++) {
                var div1 = div[j].children[i];
                if(closeit == 0){
                  $("#"+div1.id).parent().css('display','none');
                }
                if ((div1.innerText.toUpperCase().indexOf(filter) > -1) && closeit == 0) {
                    $("#"+div1.id).parent().css('display','');
                    closeit = 1;
                }
            }
        }
    }
</script>