<?php $lang=$this->session->get_userdata('Language');
    $con_lang=$lang['Language'];
    $heading_en_personnel='<th><strong>S.N</strong></th>
    <th><strong>Name</strong></th>
    <th><strong>Organization</strong></th>
    <th><strong>Post</strong></th>
    <th><strong>Address</strong></th>
    <th><strong>Phone No.</strong></th>
    <th><strong>Email</strong></th>';
    $heading_nep_personnel='<th><strong>क्र.स</strong></th>
    <th><strong>नाम</strong></th>
    <th><strong>संस्था</strong></th>
    <th><strong>पद </strong></th>
    <th><strong>ठेगाना</strong></th>
    <th><strong>फोन नम्बर</strong></th>
    <th><strong>इमेल</strong></th>';

    $heading_en='<th><strong>S.N</strong></th>
              <th data-th="Health Institutions"><strong>Organization</strong></th>
              <th><strong>Address</strong></th>
              <th><strong>Phone No.</strong></th>
              <th><strong>Alternate Phone No.</strong></th>
              <th><strong>Contact Person</strong></th>
              <th><strong>Post</strong></th>
              <th><strong>Phone No.</strong></th>
              <th><strong>Email</strong></th>
              <th><strong>Website</strong></th>';
    $heading_nep='<th><strong>क्र.स</strong></th>
                    <th data-th="Health Institutions"><strong>संस्था</strong></th>
                    <th><strong>ठेगाना</strong></th>
                    <th><strong>फोन नम्बर.</strong></th>
                    <th><strong>Alternate Phone No.</strong></th>
                    <th><strong>Contact Person</strong></th>
                    <th><strong>पद</strong></th>
                    <th><strong>Personal No.</strong></th>
                    <th><strong>इमेल</strong></th>
                    <th><strong>Website</strong></th>'; 
?>
    <section class="contactbanner">
        <div class="container full-height flex align-items-center ">
            <div>
                <div class="bannerTitle bold f16">
                    Emergency Toll Free Number
                </div>
                <div class="bannerCount bold f30">
                    <span><?php echo !empty(TOLLFREE_ONE)?TOLLFREE_ONE:'' ?></span>
                    <span class="or">OR </span>
                    <span><?php echo !empty(TOLLFREE_TWO)?TOLLFREE_TWO:'' ?></span>
                </div>
            </div>
        </div>
    </section>
    <section class="searchpanel">
        <div class="container">
            <div class="search flex contactSearch">
                <div class="inputholder grow">
                    <label for="">Keywoards</label>
                    <input class="form-control" placeholder="Enter to search..." type="search" placeholder="<?php echo  SEARCH ?>" id="myInput" onkeyup="myFunction()">
                </div>
                <div class="selectHolder">
                    <label for="">Category</label>
                    <select>
                        <option value="volvo">Volvo</option>
                        <option value="saab">Saab</option>
                        <option value="mercedes">Mercedes</option>
                        <option value="audi">Audi</option>
                    </select>
                </div>
               <!--  <div class="selectHolder">
                    <label for="">Category</label>
                    <select>
                        <option value="volvo">Volvo</option>
                        <option value="saab">Saab</option>
                        <option value="mercedes">Mercedes</option>
                        <option value="audi">Audi</option>
                    </select>
                </div> -->

                <button class="btn-primary search--btn"> SEARCH</button>
            </div>
        </div>
    </section>
    <section class="contactlist">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <?php  if ($con_lang=='en'){ ?>
                    <ul class="nav nav-tabs ptb40">
                        <li class="active  tablistc flex align-items-center ">
                            <a data-toggle="tab" href="#first" class=" flex nodec bold active f14 uppercase">
                                <div class="grow tabinner">
                                    <i class="la la-user-secret"></i>
                                    <span class="uppercase">Chairpersons of Local Units</span>
                                </div>
                                <div class="itemCount"><?php echo count($chairpersons); ?></div>
                            </a>
                        </li>
                        <li class="active  tablistc flex align-items-center ">
                            <a data-toggle="tab" href="#second" class=" flex nodec bold f14 uppercase">
                                <div class="grow tabinner">
                                    <i class="la la-briefcase "></i>
                                    <span class="uppercase">Chief of local level offices</span>
                                </div>
                                <div class="itemCount">
                                   <?php echo count($chief); ?>
                                </div>
                            </a>
                        </li>
                        <li class="active  tablistc flex align-items-center ">
                            <a data-toggle="tab" href="#third" class=" flex nodec bold f14 uppercase">
                                <div class="grow tabinner">
                                    <i class="la la-cutlery"></i>
                                    <span class="uppercase">Elected Representatives</span>
                                </div>
                                <div class="itemCount">
                                   <?php echo !empty(count($elected))?count($elected):'0'; ?>
                                </div>
                            </a>
                        </li>
                        <li class="active  tablistc flex align-items-center ">
                            <a data-toggle="tab" href="#fourth" class=" flex nodec bold f14 uppercase">
                                <div class="grow tabinner">
                                    <i class="la la-hotel"></i>
                                    <span class="uppercase">Municipal Executive Members</span>
                                </div>
                                <div class="itemCount">
                                   <?php echo !empty(count($municipal_ex))?count($municipal_ex):'0'; ?>
                                </div>
                            </a>
                        </li>
                        <li class="active  tablistc flex align-items-center ">
                            <a data-toggle="tab" href="#fifth" class=" flex nodec bold f14 uppercase">
                                <div class="grow tabinner">
                                    <i class="la la-hotel"></i>
                                    <span class="uppercase">Municipality Level Disaster Management Committee</span>
                                </div>
                                <div class="itemCount">
                                    <?php echo !empty(count($disaster))?count($disaster):'0'; ?>
                                </div>
                            </a>
                        </li>
                        <li class="active  tablistc flex align-items-center ">
                            <a data-toggle="tab" href="#sixth" class="flex nodec bold f14 uppercase">
                                <div class="grow tabinner">
                                    <i class="la la-hotel"></i>
                                    <span class="uppercase">NNTDS's Executive Committee</span>
                                </div>
                                <div class="itemCount">
                                   <?php echo !empty(count($nntds))?count($nntds):'0'; ?>
                                </div>
                            </a>
                        </li>
                    </ul>
                <?php }else{ ?>
                    <ul class="nav nav-tabs ptb40">
                        <li class="active  tablistc flex align-items-center ">
                            <a data-toggle="tab" href="#first" class=" flex nodec bold active f14 uppercase">
                                <div class="grow tabinner">
                                    <i class="la la-user-secret"></i>
                                    <span class="uppercase"> स्थानिय तहका अध्यक्षहरु</span>
                                </div>
                                <div class="itemCount">
                                   <?php echo !empty(count($chairpersons))?count($chairpersons):'0'; ?>
                                </div>
                            </a>
                        </li>
                      <li class="active  tablistc flex align-items-center ">
                        <a data-toggle="tab" href="#second" class=" flex nodec bold f14 uppercase">
                            <div class="grow tabinner">
                                <i class="la la-user-secret"></i>
                                <span class="uppercase">स्थानिय कार्यालयका प्रमुखहरु</span>
                            </div>
                            <div class="itemCount">
                               <?php echo !empty(count($chief))?count($chief):'0'; ?>
                            </div>
                        </a>
                      </li>
                      <li class="active  tablistc flex align-items-center ">
                        <a data-toggle="tab" href="#third" class=" flex nodec bold f14 uppercase">
                            <div class="grow tabinner">
                                <i class="la la-user-secret"></i>
                                <span class="uppercase"> निर्वाचित जनप्रतिनिधीहरु</span>
                            </div>
                            <div class="itemCount">
                               <?php echo !empty(count($elected))?count($elected):'0'; ?>
                            </div>
                       </a>
                      </li>
                      <li class="active  tablistc flex align-items-center ">
                        <a data-toggle="tab" href="#fourth" class=" flex nodec bold  f14 uppercase">
                            <div class="grow tabinner">
                                <i class="la la-user-secret"></i>
                                <span class="uppercase"> पालिकाका कार्यकारी सदस्यहरु</span>
                            </div>
                            <div class="itemCount">
                               <?php echo !empty(count($municipal_ex))?count($municipal_ex):'0'; ?>
                            </div>
                        </a>
                      </li>
                      <li class="active  tablistc flex align-items-center ">
                        <a data-toggle="tab" href="#fifth" class=" flex nodec bold  f14 uppercase">
                            <div class="grow tabinner">
                                <i class="la la-user-secret"></i>
                                <span class="uppercase"> नगरपालिका तहको प्रकोप व्यवस्थापन समिति,</span>
                            </div>
                            <div class="itemCount">
                               <?php echo !empty(count($disaster))?count($disaster):'0'; ?>
                            </div>
                        </a>
                      </li>
                      <li class="active  tablistc flex align-items-center ">
                        <a data-toggle="tab" href="#sixth" class=" flex nodec bold  f14 uppercase">
                            <div class="grow tabinner">
                                <i class="la la-user-secret"></i>
                                <span class="uppercase">NNTDS को कार्यसमिति</span>
                            </div>
                            <div class="itemCount">
                               <?php echo !empty(count($nntds))?count($nntds):'0'; ?>
                            </div>
                        </a>
                      </li>
                      <!-- 
                      <li class="active  tablistc flex align-items-center ">
                        <a data-toggle="tab" href="#first" class=" flex nodec bold active f14 uppercase"स्वास्थ्य संस्थाहरु</a>
                      </li>
                      <li class="active  tablistc flex align-items-center ">
                        <a data-toggle="tab" href="#first" class=" flex nodec bold active f14 uppercase">आपतकालिन परिचालकहरु</a>
                      </li>
                      <li class="active  tablistc flex align-items-center ">
                        <a data-toggle="tab" href="#first" class=" flex nodec bold active f14 uppercase">सुरक्षा निकाय</a>
                      </li>
                      <li class="active  tablistc flex align-items-center ">
                        <a data-toggle="tab" href="#first" class=" flex nodec bold active f14 uppercase">गैर सरकारी संस्थाहरु & अन्तराष्ट्रिय गैर सरकारी संस्थाहरु
                      </a>
                      </li>
                      <li class="active  tablistc flex align-items-center ">
                        <a data-toggle="tab" href="#first" class=" flex nodec bold active f14 uppercase">प्रकोप जोखिम न्युनिकरणमा खटिएका स्वयंसेवकहरु</a>
                      </li>
                      <li class="active  tablistc flex align-items-center ">
                        <a data-toggle="tab" href="#first" class=" flex nodec bold active f14 uppercase">प्रकोप जोखिम न्युनिकरणमा खटिएका स्वयंसेवकहरु</a>
                      </li>
                      <li class="active  tablistc flex align-items-center ">
                        <a data-toggle="tab" href="#first" class=" flex nodec bold active f14 uppercase">प्रकोप जोखिम न्युनिकरणमा खटिएका स्वयंसेवकहरु</a>
                      </li> -->
                    </ul>
                <?php } ?>
                </div>
                <div class="col-md-8">
                    <div class="tab-content">
                        <div id="first" class="tab-pane   fade in show   active">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover">
                                    <thead class="tableHeader">
                                        <tr>
                                          <?php if($con_lang=='en'){
                                                echo $heading_en_personnel;
                                           }else{
                                                echo $heading_nep_personnel;
                                            } ?>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php if($chairpersons){ $i=1;
                                        foreach ($chairpersons as $chairpersons) { ?>
                                        <tr class="tr_tbl">
                                           <th scope="row" id="<?php echo $chairpersons['id'] ?>idchairpersons"><?php echo $i; ?></th>
                                           <td id="<?php echo $chairpersons['id'] ?>namechairpersons"><?php echo $chairpersons['name'] ?></td>
                                           <td id="<?php echo $chairpersons['id'] ?>organizationchairpersons"><?php echo $chairpersons['organization'] ?></td>
                                           <td id="<?php echo $chairpersons['id'] ?>postchairpersons"><?php echo $chairpersons['post'] ?></td>
                                           <td id="<?php echo $chairpersons['id'] ?>addresschairpersons"><?php echo $chairpersons['address'] ?></td>
                                           <td id="<?php echo $chairpersons['id'] ?>phone_nochairpersons"><?php echo $chairpersons['phone_no'] ?></td>
                                           <td id="<?php echo $chairpersons['id'] ?>emailchairpersons"><?php echo $chairpersons['email'] ?></td>
                                        </tr>
                                    <?php $i++; } }  ?>
                                    </tbody>
                                </table>
                                <div class="text-center mb-3">
                                    <a href="get_csv_emergency?type=chairpersons&&name=Chairpersons_of_Local_Units&&tbl=emergency_personnel"><button type="submit" name="upload_data" class="btn btn-danger" style="background-color: #1f5cb2;border-color: #1f5cb2;margin-top: -7px;"><i class="fa fa-download"></i> <?php echo DOWNLOAD ?></button></a>
                                </div>
                            </div>
                        </div>
                        <div id="second" class="tab-pane fade">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover  ">
                                    <thead class="tableHeader">
                                        <tr>
                                            <?php if($con_lang=='en'){

                                                echo $heading_en_personnel;

                                               }else{

                                               echo $heading_nep_personnel;

                                              } ?>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if($chief){
                                           $i=1;
                                            foreach ($chief as $chief) { ?>
                                            <tr class="tr_tbl">
                                              <th scope="row" id="<?php echo $chief['id'] ?>idcheif"><?php echo $i; ?></th>
                                               <td id="<?php echo $chief['id'] ?>namecheif"><?php echo $chief['name'] ?></td>
                                               <td id="<?php echo $chief['id'] ?>organizationcheif"><?php echo $chief['organization'] ?></td>
                                               <td id="<?php echo $chief['id'] ?>postcheif"><?php echo $chief['post'] ?></td>
                                               <td id="<?php echo $chief['id'] ?>addresscheif"><?php echo $chief['address'] ?></td>
                                               <td id="<?php echo $chief['id'] ?>phone_nocheif"><?php echo $chief['phone_no'] ?></td>
                                               <td id="<?php echo $chief['id'] ?>emailcheif"><?php echo $chief['email'] ?></td>
                                            </tr>
                                           <?php $i++; }} ?>
                                    </tbody>
                                </table>
                                <div class="text-center mb-3">
                                    <a href="get_csv_emergency?type=cheif&&name=Chief_of_local_level_offices&&tbl=emergency_personnel"><button type="submit" name="upload_data" class="btn btn-danger" style="background-color: #1f5cb2;border-color: #1f5cb2;margin-top: -7px;"><i class="fa fa-download"></i> <?php echo DOWNLOAD ?></button></a>
                                </div>
                            </div>
                        </div>
                        <div id="third" class="tab-pane fade">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover ">
                                    <thead class="tableHeader">
                                    <?php if($con_lang=='en'){
                                        echo $heading_en_personnel;
                                       }else{
                                       echo $heading_nep_personnel;
                                      } ?>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if($elected){
                                          $i=1;
                                            foreach ($elected as $elected) {
                                             ?>

                                             <tr class="tr_tbl">
                                              <th scope="row" id="<?php echo $elected['id'] ?>idelected"><?php echo $i; ?></th>


                                               <td id="<?php echo $elected['id'] ?>nameelected"><?php echo $elected['name'] ?></td>
                                               <td id="<?php echo $elected['id'] ?>organizationelected"><?php echo $elected['organization'] ?></td>
                                               <td id="<?php echo $elected['id'] ?>postelected"><?php echo $elected['post'] ?></td>
                                               <td id="<?php echo $elected['id'] ?>addresselected"><?php echo $elected['address'] ?></td>
                                               <td id="<?php echo $elected['id'] ?>phone_noelected"><?php echo $elected['phone_no'] ?></td>
                                               <td id="<?php echo $elected['id'] ?>emailelected"><?php echo $elected['email'] ?></td>

                                             </tr>

                                           <?php $i++; }} ?>

                                    </tbody>
                                </table>
                                <div class="text-center mb-3">
                                    <a href="get_csv_emergency?type=elected&&name=Elected_Representatives&&tbl=emergency_personnel"><button type="submit" name="upload_data" class="btn btn-danger" style="background-color: #1f5cb2;border-color: #1f5cb2;margin-top: -7px;"><i class="fa fa-download"></i> <?php echo DOWNLOAD ?></button></a>
                                </div>
                            </div>
                        </div>
                        <div id="fourth" class="tab-pane fade">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover  ">
                                    <thead class="tableHeader">
                                        <tr>
                                        <?php if($con_lang=='en'){
                                            echo $heading_en_personnel;
                                           }else{
                                           echo $heading_nep_personnel;
                                           } ?>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if($municipal_ex){
                                        $i=1;
                                        foreach ($municipal_ex as $municipalex) { ?>
                                         <tr class="tr_tbl">
                                           <th scope="row" id="<?php echo $municipalex['id'] ?>idmunicipalex"><?php echo $i; ?></th>
                                           <td id="<?php echo $municipalex['id'] ?>namemunicipalex"><?php echo $municipalex['name'] ?></td>
                                           <td id="<?php echo $municipalex['id'] ?>organizationmunicipalex"><?php echo $municipalex['organization'] ?></td>
                                           <td id="<?php echo $municipalex['id'] ?>postmunicipalex"><?php echo $municipalex['post'] ?></td>
                                           <td id="<?php echo $municipalex['id'] ?>addressmunicipalex"><?php echo $municipalex['address'] ?></td>
                                           <td id="<?php echo $municipalex['id'] ?>phone_nomunicipalex"><?php echo $municipalex['phone_no'] ?></td>
                                           <td id="<?php echo $municipalex['id'] ?>emailmunicipalex"><?php echo $municipalex['email'] ?></td>

                                         </tr>

                                       <?php $i++; } } ?>
                                    </tbody>
                                </table>
                                <div class="text-center mb-3">
                                    <a href="get_csv_emergency?type=municipal_ex&&name=Municipal_Executive_Members&&tbl=emergency_personnel"><button type="submit" name="upload_data" class="btn btn-danger" style="background-color: #1f5cb2;border-color: #1f5cb2;margin-top: -7px;"><i class="fa fa-download"></i> <?php echo DOWNLOAD ?></button></a>
                                </div>
                            </div>
                        </div>
                        <div id="fifth" class="tab-pane fade">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover  ">
                                    <thead class="tableHeader">
                                        <tr>
                                        <?php if($con_lang=='en'){
                                            echo $heading_en_personnel;
                                           }else{
                                           echo $heading_nep_personnel;
                                           } ?>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    if($disaster){
                                      $i=1;
                                        foreach ($disaster as $disaster) { ?>
                                        <tr class="tr_tbl">
                                           <th  scope="row" id="<?php echo $disaster['id'] ?>iddisaster"><?php echo $i; ?></th>
                                           <td id="<?php echo $disaster['id'] ?>namedisaster"><?php echo $disaster['name'] ?></td>
                                           <td id="<?php echo $disaster['id'] ?>organizationdisaster"><?php echo $disaster['organization'] ?></td>
                                           <td id="<?php echo $disaster['id'] ?>postdisaster"><?php echo $disaster['post'] ?></td>
                                           <td id="<?php echo $disaster['id'] ?>adisasteressdisaster"><?php echo $disaster['address'] ?></td>
                                           <td id="<?php echo $disaster['id'] ?>phone_nodisaster"><?php echo $disaster['phone_no'] ?></td>
                                           <td id="<?php echo $disaster['id'] ?>emaildisaster"><?php echo $disaster['email'] ?></td>

                                        </tr>

                                       <?php $i++; } } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div id="sixth" class="tab-pane fade">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover  ">
                                    <thead class="tableHeader">
                                        <tr>
                                        <?php if($con_lang=='en'){
                                            echo $heading_en_personnel;
                                           }else{
                                           echo $heading_nep_personnel;
                                           } ?>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        if($nntds){
                                        $i=1;
                                        foreach ($nntds as $nntds) { ?>
                                        <tr class="tr_tbl">
                                           <th  scope="row" id="<?php echo $nntds['id'] ?>idnntds"><?php echo $i; ?></th>
                                           <td id="<?php echo $nntds['id'] ?>namenntds"><?php echo $nntds['name'] ?></td>
                                           <td id="<?php echo $nntds['id'] ?>organizationnntds"><?php echo $nntds['organization'] ?></td>
                                           <td id="<?php echo $nntds['id'] ?>postnntds"><?php echo $nntds['post'] ?></td>
                                           <td id="<?php echo $nntds['id'] ?>anntdsessnntds"><?php echo $nntds['address'] ?></td>
                                           <td id="<?php echo $nntds['id'] ?>phone_nonntds"><?php echo $nntds['phone_no'] ?></td>
                                           <td id="<?php echo $nntds['id'] ?>emailnntds"><?php echo $nntds['email'] ?></td>
                                        </tr>
                                       <?php $i++; } } ?>
                                    </tbody>
                                </table>
                                <div class="text-center mb-3">
                                    <a href="get_csv_emergency?type=nntds&&name=NNTDS_Executive_Committee&&tbl=emergency_personnel"><button type="submit" name="upload_data" class="btn btn-danger" style="background-color: #1f5cb2;border-color: #1f5cb2;margin-top: -7px;float: right;"><i class="fa fa-download"></i> <?php echo DOWNLOAD ?></button></a>
                                  </div>
                                </div>
                            </div>
                        </div>
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
    // td = document.getElementsByTagName('td');
    tr = document.getElementsByClassName('tr_tbl');
          // console.log(td);
    //   console.log(h5);
    //   console.log(div);
    //   console.log(filter);
    //   console.log(input);
    //   // Loop through all list items, and hide those who don't match the search query
    // var ab='Juddha Barun Yantra Karyalaya'
    // console.log(ab.toUpperCase().indexOf(filter));
    //console.log(tr);
    for(j = 0; j < tr.length; j++){
    //console.log(tr);
    var closeit = 0;
    for (i = 0; i < tr[j].children.length; i++) {
        var td = tr[j].children[i];
        //console.log(td);
        // a = h5[i].getElementsByTagName("a")[0];
         //console.log(td[i].innerHTML.toUpperCase().indexOf(filter));
        if(closeit == 0){
          $("#"+td.id).parent().css('display','none');
          //console.log("not found on"+td[i].id);

        }
        if ((td.innerText.toUpperCase().indexOf(filter) > -1) && closeit == 0) {
        // console.log("found on"+td.id);
        // console.log(closeit);
            $("#"+td.id).parent().css('display','');
            closeit = 1;
        }
    }
    //console.log("row");
    }

}
</script>