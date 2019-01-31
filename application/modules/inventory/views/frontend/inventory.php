<div class="container">
    <section class="buttons">
        <ul class="linkbuttons nav nav-pills navtop">
            <?php if($catgegory) :
            foreach ($catgegory as $key => $cat) {  ?>
            <li class="nav-item">
                <a class="nav-link <?php if($key+1 == '1') { echo "active"; } ?>" href="#menu1<?php echo $cat['slug']; ?>" data-toggle="tab">
                    <div class="btn-item <?php if($key+1 == '1') { echo "active"; } ?>">
                        <img src="<?php echo $cat['image'];  ?>" alt="<?php echo $cat['name']; ?>">
                    </div>
                    <h4 class="lktitle"><?php echo $this->lang->line($cat['slug']) ?></h4>
                </a>
            </li>
        <?php } endif; ?>
            <!-- <li class="nav-item">
                <a class="nav-link" href="#menu2" data-toggle="tab">
                    <div class="btn-item">
                        <img src="<?php echo base_url()?>assets/frontend/img/assets/medi.png" alt="">
                    </div>
                    <h4 class="lktitle"> <?php echo $this->lang->line('medicine') ?></h4>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#menu3" data-toggle="tab">
                    <div class="btn-item">
                        <img src="<?php echo base_url()?>assets/frontend/img/assets/food.png" alt="">
                    </div>
                    <h4 class="lktitle"> <?php echo $this->lang->line('food') ?></h4>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#menu4" data-toggle="tab">
                    <div class="btn-item">
                        <img src="<?php echo base_url()?>assets/frontend/img/assets/rescue.png" alt="">
                    </div>
                    <h4 class="lktitle"> <?php echo $this->lang->line('rescue') ?></h4>
                </a>
            </li> -->
        </ul>
    </section>
    <div class="tab-content">
        <?php if($catgegory):
            $lang=$this->session->get_userdata('Language');
            if($lang['Language']=='en') {
                $language='en';
            }else{
                $language='nep'; 
            }
            foreach ($catgegory as $key2 => $catu) {// echo "<pre>"; print_r($catgegory);die;    ?>
            <div class="tab-pane <?php if($key2+1 =='1') { echo "active"; } ?>" role="tabpanel" id="menu1<?php echo $catu['slug']; ?>">
                <section class="contactlist">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <ul class="nav nav-tabs ptb40">
                                    <?php 
                                    $subcatdata = $this->inventory_mdl->count_oinventory_data($language,array('subcat'=>$catu['id']));
                                    //echo $this->db->last_query();die;
                                    //echo "<pre>"; print_r($subcatdata);die;
                                    if($subcatdata):
                                       foreach ($subcatdata as $key => $inv) {  //echo "<pre>"; print_r($invdata);die; ?>
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
                                        <button class="btn-primary search--btn"><?php echo  SEARCH ?></button>
                                    </div>
                                </section>
                                <div class="tab-content tabinventory">
                                <?php 
                                   foreach ($subcatdata as $kg => $invdt){
                                    $invensub = $this->general->get_tbl_data_result('id,orgname,address,phone,contactperson,email','inventory',array('category'=>$invdt['id'],'language'=>$language,'subcat'=>$catu['id'])); 
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
            </div>
        <?php } endif; ?>
        <!-- <div class="tab-pane " role="tabpanel" id="menu2">
            <h1>this is menu2</h1>
        </div>
        <div class="tab-pane " role="tabpanel" id="menu3">
            <h1>this is menu3</h1>
        </div>
        <div class="tab-pane " role="tabpanel" id="menu4">
            <h1>this is menu4</h1>
        </div> -->
    </div>
</div>
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
