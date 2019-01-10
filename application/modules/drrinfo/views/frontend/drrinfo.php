<section class="detailheader">
    <div class="container">
        <div class="bold f30 white"><?php echo !empty($drrdata[0]['name'])?$drrdata[0]['name']:''; ?></div>
    </div>
</section>
<section class="drrtabs">
    <div class="container">
        <ul class="nav nav-tabs">
            <?php if($drrsubcat):
                foreach ($drrsubcat as $key => $dsbub): ?>
                <li >
                    <a class="<?php if($key+1 == "1"){ echo "active"; } ?>" data-toggle="tab" href="#introduction_<?php echo $dsbub['slug']; ?>"><?php echo  ucfirst($dsbub['name']); ?></a>
                </li>
            <?php endforeach;
             endif; ?>
        </ul>
        <div class="tab-content">
            <?php
                if($drrsubcat): 
                    $lang=$this->session->get_userdata('Language');
                    if($lang['Language']=='en') {
                      $language='en';
                    }else{
                      $language='nep'; 
                    }
                    foreach ($drrsubcat as $ken => $d):

                    $drrsubcateg = $this->general->get_tbl_data_result('*','drrinformation',array('subcat_id'=>$d['id'],'language'=>$language,'category_id'=>$drrdata[0]['id']));
            if($drrsubcateg){
            foreach ($drrsubcateg as $key => $finaldetails) {  ?>
            <div id="introduction_<?php echo $d['slug']; ?>" class="tab-pane fade in show <?php if($ken+1 == "1"){ echo"active ";} ?>">
                <p><?php echo $finaldetails['short_desc']; ?></p>
                <div class="row mt15">
                    <?php if($finaldetails['image']): ?>
                    <div class="col-md-6">
                        <div class="imageHolder">
                            <img src="<?php echo $finaldetails['image']; ?>" alt="<?php $finaldetails['language']; ?>">
                        </div>
                    </div>
                <?php endif; ?>
                    <div class="col-md-6">
                        <div class="dettitle bold f22">
                            What is flood?
                        </div>
                        <?php echo $finaldetails['description']; ?>
                    </div>
                </div>
            </div>
            <!-- <div id="before" class="tab-pane fade">
                <h3>Menu 1</h3>
                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat.</p>
            </div> -->
            <?php  } }
            endforeach;
            endif; ?>
        </div>
    </div>
</section>