    <section class="buttons">
        <div class="container">
            <div class="linkbuttons">
           
                <a href="">
                    <div class="btn-item active">
                        <img src="<?php echo base_url()?>assets/frontend/img/assets/shelter.png" alt="">
                    </div>
                    <h4 class="lktitle"><?php echo $this->lang->line('shelter') ?></h4>
                </a>
                
                <a href="">
                    <div class="btn-item">
                        <img src="<?php echo base_url()?>assets/frontend/img/assets/medi.png" alt="">
                    </div>
                    <h4 class="lktitle"> <?php echo $this->lang->line('medicine') ?></h4>
                </a>
                <a href="">
                    <div class="btn-item">
                        <img src="<?php echo base_url()?>assets/frontend/img/assets/food.png" alt="">
                    </div>
                    <h4 class="lktitle"> <?php echo $this->lang->line('food') ?></h4>
                </a>
                <a href="">
                    <div class="btn-item">
                        <img src="<?php echo base_url()?>assets/frontend/img/assets/rescue.png" alt="">
                    </div>
                    <h4 class="lktitle"> <?php echo $this->lang->line('rescue') ?></h4>
                </a>
            </div>
        </div>
    </section>
    <section class="contactlist">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <ul class="nav nav-tabs ptb40">
                        <?php if($invdata): 
                           foreach ($invdata as $key => $inv) { ?>
                        <li class="active  tablistc flex align-items-center ">
                            <a data-toggle="tab" href="#first_<?php echo $inv['slug']; ?>" class=" flex nodec bold <?php if($key+1 == "1"){ echo "active"; } ?>  f14 uppercase">
                                <div class="grow tabinner" id="NEpl">
                                    <span class="uppercase"><?php
                                    switch ($inv['slug']) {
                                        case "good-material":
                                           $name = $this->lang->line('good_material');
                                            break;
                                        case "non-material-content":
                                            $name = $this->lang->line('non_material_content');
                                            break;
                                        case "search-and-rescue-materials":
                                           $name = $this->lang->line('search_and_rescue_materials');
                                            break;
                                    }
                                    echo $name; ?>
                                         
                                     </span>
                                </div>
                                <div class="itemCount">
                                    <?php echo $inv['countdata']; ?>
                                </div>
                            </a>
                        </li>
                        <?php } 
                    endif; ?>
                    </ul>
                </div>
                <div class="col-md-8 ptb40">
                    <section class="searchpanel inner searchinventory">
                        <div class="search flex contactSearch">
                            <div class="inputholder grow">
                                <input class="search--input form-control" id="myInput"  placeholder="<?php echo  SEARCH ?>" type="search" onkeyup="myFunction()">
                            </div>
                            <button class="btn-primary search--btn"> खोज्नुहोस्</button>
                        </div>
                    </section>
                    <div class="tab-content tabinventory">
                    <?php  
                        $lang=$this->session->get_userdata('Language');
                        if($lang['Language']=='en') {
                            $language='en';
                        }else{
                            $language='nep'; 
                        }
                       foreach ($invdata as $kg => $invdt){
                        $invensub = $this->general->get_tbl_data_result('id,orgname,address,phone,contactperson,email','inventory',array('category'=>$invdt['id'],'language'=>$language)); 
                        if($invensub){ ?>
                            <div id="first_<?php echo $invdt['slug']; ?>" class="tab-pane   fade <?php if($kg+1 == "1"){ echo "in show active"; } ?>">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover">
                                        <thead class="tableHeader">
                                            <tr>
                                                <th scope="col"><?php echo $this->lang->line('sn') ?></th>
                                                <th scope="col"><?php echo $this->lang->line('organisationname') ?></th>
                                                <th scope="col"><?php echo $this->lang->line('address') ?></th>
                                                <th scope="col"><?php echo $this->lang->line('phoneno') ?> </th>
                                                <th scope="col"><?php echo $this->lang->line('contact_person') ?></th>
                                                <th scope="col"><?php echo $this->lang->line('email') ?></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i=1;
                                             foreach ($invensub as $key => $ivd) { ?>
                                            <tr class="tr_tbl">
                                                <th  id="<?php echo $ivd['id'] ?>id" scope="row"><?php  echo $i; ?></th>
                                                <td  id="<?php echo $ivd['id'] ?>orgname"><?php  echo $ivd['orgname']; ?></td>
                                                <td  id="<?php echo $ivd['id'] ?>address"><?php  echo $ivd['address']; ?></td>
                                                <td  id="<?php echo $ivd['id'] ?>phone"><?php  echo $ivd['phone']; ?></td>
                                                <td  id="<?php echo $ivd['id'] ?>contactperson"><?php  echo $ivd['contactperson']; ?></td>
                                                <td  id="<?php echo $ivd['id'] ?>email"><?php  echo $ivd['email']; ?></td>
                                            </tr>
                                            <?php } $i++; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        <?php }
                    } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<script type="text/javascript">
    $(".nav-tabs").tabdrop();
        function myFunction() { 
        // Declare variables
        var  input, filter, div, tr, i ,j;
        input = document.getElementById('myInput');
        filter = input.value.toUpperCase();
        div = document.getElementsByClassName("tab-pane");
        tr = document.getElementsByClassName('tr_tbl');
        //console.log(tr);
        for(j = 0; j < tr.length; j++){
            //console.log(tr);
            var closeit = 0;
            for (i = 0; i < tr[j].children.length; i++) {
                var td = tr[j].children[i];
                if(closeit == 0){
                  $("#"+td.id).parent().css('display','none');
                }
                if ((td.innerText.toUpperCase().indexOf(filter) > -1) && closeit == 0) {
                    $("#"+td.id).parent().css('display','');
                    closeit = 1;
                }
            }
        }
    }
</script>