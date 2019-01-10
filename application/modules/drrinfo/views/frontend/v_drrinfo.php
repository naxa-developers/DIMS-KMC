<section class="drrmain section-padding-half">
    <div class="container">
        <div class="search flex">
            <input class="search--input grow" placeholder="Enter to search..." type="text">
            <button class="btn-primary search--btn"> SEARCH</button>
        </div>
        <div class="hazardlists">
            <div class="row">
              <?php if($drrdata):
              foreach ($drrdata as $key => $ddat): ?>
                <div class="col-md-4">
                    <a href="<?php echo base_url() ?>drrinfo/drrdetails/<?php echo $ddat['slug'] ?>" class="nodec">
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
