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

<!-- <style>
 .nav-tabs,
  .nav-pills {
    position: relative;
  }
  .tabdrop{
    width: 120px;
    margin-top: .5rem;
  }

  .nav-tabs li li i{
    visibility: hidden;
  }

  .hide {
    display: none;
  }

  .input-group-addon {
    position: absolute;
    right: 10px;
    bottom: 13px;
    z-index: 2;
  }

  .contact-search-1 {
    padding: 50px;
    border-bottom: 1px solid #eee;
    padding-left: 0px;
  }

  .table table-striped table-bordered table-hover bg-white mt-3 th {
    display: none;
    border: 1px solid transparent;
    background-color: lightslategray;
    color: #FFF;
    padding: 1em;
  }

  #reportable{
    overflow: auto;
    margin: 0em auto 3em;
  }
  .table table-striped table-bordered table-hover bg-white mt-3 {
    margin: 1em 0em;
    width: 100%;
    overflow: hidden;
    background: #FFF;
    color: #000;
    border-radius: 0px;
    border: 1px solid #1f5cb2;
    font-size: 16px;
  }
  .table table-striped table-bordered table-hover bg-white mt-3 tr {
    border: 1px solid #D9E4E6;
  }
  .table table-striped table-bordered table-hover bg-white mt-3 tr:nth-child(odd) {
    background-color: #EAF3F3;
  }

  .table table-striped table-bordered table-hover bg-white mt-3 th:first-child {
    display: table-cell;
    text-align: center;
  }
  .table table-striped table-bordered table-hover bg-white mt-3 th:nth-child(2) {
    display: table-cell;
  }
  .table table-striped table-bordered table-hover bg-white mt-3 th:nth-child(2) span {
    display: none;
  }
  .table table-striped table-bordered table-hover bg-white mt-3 th:nth-child(2):after {
    content: attr(data-th);
  }
  @media (min-width: 480px) {
    .table table-striped table-bordered table-hover bg-white mt-3 th:nth-child(2) span {
      display: block;
    }
    .table table-striped table-bordered table-hover bg-white mt-3 th:nth-child(2):after {
      display: none;
    }
  }
  .table table-striped table-bordered table-hover bg-white mt-3 td {
    display: block;
    word-wrap: break-word;
    max-width: 7em;
  }
  .table table-striped table-bordered table-hover bg-white mt-3 td:first-child {
    display: table-cell;
    text-align: center;
    border-right: 1px solid #D9E4E6;
  }
  @media (min-width: 480px) {
    .table table-striped table-bordered table-hover bg-white mt-3 td {
      border: 1px solid #D9E4E6;
    }
  }
  .table table-striped table-bordered table-hover bg-white mt-3 th, .table table-striped table-bordered table-hover bg-white mt-3 td {
    text-align: left;
    margin: .5em 1em;
  }
  @media (min-width: 480px) {
    .table table-striped table-bordered table-hover bg-white mt-3 th, .table table-striped table-bordered table-hover bg-white mt-3 td {
      display: table-cell;
      padding: 0.3em;
    }
  }

  .tabdrop .dropdown-menu a{
    padding: 10px 13px;
      font-size: 14px;
  }
</style> -->
<!-- <div class="container ">
    <div class="contact-search-1">
	<div class="row">
    <div class="col-sm-12">
        <input class="form-control" type="search" placeholder="<?php echo  SEARCH ?>" id="myInput" onkeyup="myFunction()">
      </div>
  </div>
</div>
</div>
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
<div class="container" id="emergency_no">

  <?php  if ($con_lang=='en'){ ?>

    <ul class="nav nav-tabs" id="myTab" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="chairperson-tab" data-toggle="tab" href="#chairpersons" role="tab" aria-controls="chairpersons" aria-selected="true">Chairpersons of Local Units</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="chief-tab" data-toggle="tab" href="#cheif" role="tab" aria-controls="cheif" aria-selected="false">Chief of local level offices</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="elected-tab" data-toggle="tab" href="#elected" role="tab" aria-controls="elected" aria-selected="false">Elected Representatives</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="municipal_ex-tab" data-toggle="tab" href="#municipal_ex" role="tab" aria-controls="municipal_ex" aria-selected="false">Municipal Executive Members</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="disaster-tab" data-toggle="tab" href="#disaster" role="tab" aria-controls="disaster" aria-selected="false">Municipality Level Disaster Management Committee,</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="nntds-tab" data-toggle="tab" href="#nntds" role="tab" aria-controls="nntds" aria-selected="false">NNTDS's Executive Committee</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="health-tab" data-toggle="tab" href="#health" role="tab" aria-controls="health" aria-selected="true">Health Institutions</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="emergency-tab" data-toggle="tab" href="#emergency" role="tab" aria-controls="emergency" aria-selected="false">Emergency Responders</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="security-tab" data-toggle="tab" href="#security" role="tab" aria-controls="security" aria-selected="false">Security</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="ngo-tab" data-toggle="tab" href="#ngo" role="tab" aria-controls="ngo" aria-selected="false">NGOs and INGOs</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="volunter-tab" data-toggle="tab" href="#volunter" role="tab" aria-controls="volunter" aria-selected="false">DRR Volunteers</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="person-tab" data-toggle="tab" href="#person" role="tab" aria-controls="person" aria-selected="false">Municipality Personnel</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="member-tab" data-toggle="tab" href="#member" role="tab" aria-controls="member" aria-selected="false">Members of Municipal Assemblysss</a>
      </li>
    </ul>




  <?php }else{ ?>

    <ul class="nav nav-tabs" id="myTab" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="chairperson-tab" data-toggle="tab" href="#chairpersons" role="tab" aria-controls="chairpersons" aria-selected="true">स्थानिय तहका अध्यक्षहरु</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="chief-tab" data-toggle="tab" href="#cheif" role="tab" aria-controls="cheif" aria-selected="false">स्थानिय कार्यालयका प्रमुखहरु</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="elected-tab" data-toggle="tab" href="#elected" role="tab" aria-controls="elected" aria-selected="false">निर्वाचित जनप्रतिनिधीहरु</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="municipal_ex-tab" data-toggle="tab" href="#municipal_ex" role="tab" aria-controls="municipal_ex" aria-selected="false">पालिकाका कार्यकारी सदस्यहरु</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="disaster-tab" data-toggle="tab" href="#disaster" role="tab" aria-controls="disaster" aria-selected="false">नगरपालिका तहको प्रकोप व्यवस्थापन समिति,</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="nntds-tab" data-toggle="tab" href="#nntds" role="tab" aria-controls="nntds" aria-selected="false">NNTDS को कार्यसमिति</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="health-tab" data-toggle="tab" href="#health" role="tab" aria-controls="health" aria-selected="true">स्वास्थ्य संस्थाहरु</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="emergency-tab" data-toggle="tab" href="#emergency" role="tab" aria-controls="emergency" aria-selected="false">आपतकालिन परिचालकहरु</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="security-tab" data-toggle="tab" href="#security" role="tab" aria-controls="security" aria-selected="false">सुरक्षा निकाय</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="ngo-tab" data-toggle="tab" href="#ngo" role="tab" aria-controls="ngo" aria-selected="false">गैर सरकारी संस्थाहरु & अन्तराष्ट्रिय गैर सरकारी संस्थाहरु
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="volunter-tab" data-toggle="tab" href="#volunter" role="tab" aria-controls="volunter" aria-selected="false">प्रकोप जोखिम न्युनिकरणमा खटिएका स्वयंसेवकहरु</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="person-tab" data-toggle="tab" href="#person" role="tab" aria-controls="person" aria-selected="false">प्रकोप जोखिम न्युनिकरणमा खटिएका स्वयंसेवकहरु</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="member-tab" data-toggle="tab" href="#member" role="tab" aria-controls="member" aria-selected="false">प्रकोप जोखिम न्युनिकरणमा खटिएका स्वयंसेवकहरु</a>
      </li>
    </ul>



  <?php } ?>





  <div class="tab-content" id="myTabContent">

  <div class="tab-pane fade show active" id="chairpersons" role="tabpanel" aria-labelledby="chairpersons-tab">

  <div class="" id="reportable">
   <table class="table table-striped table-bordered table-hover bg-white mt-3">
    <thead class="thead-light">
      <?php if($con_lang=='en'){

        echo $heading_en_personnel;

       }else{

       echo $heading_nep_personnel;

      } ?>
     
    </thead>
    <?php if($chairpersons){ $i=1;
    foreach ($chairpersons as $chairpersons) { ?>
    <tr class="tr_tbl">
       <td id="<?php echo $chairpersons['id'] ?>idchairpersons"><?php echo $i; ?></td>
       <td id="<?php echo $chairpersons['id'] ?>namechairpersons"><?php echo $chairpersons['name'] ?></td>
       <td id="<?php echo $chairpersons['id'] ?>organizationchairpersons"><?php echo $chairpersons['organization'] ?></td>
       <td id="<?php echo $chairpersons['id'] ?>postchairpersons"><?php echo $chairpersons['post'] ?></td>
       <td id="<?php echo $chairpersons['id'] ?>addresschairpersons"><?php echo $chairpersons['address'] ?></td>
       <td id="<?php echo $chairpersons['id'] ?>phone_nochairpersons"><?php echo $chairpersons['phone_no'] ?></td>
       <td id="<?php echo $chairpersons['id'] ?>emailchairpersons"><?php echo $chairpersons['email'] ?></td>
    </tr>
   <?php $i++; } }  ?>
  </table>
</div>
  <div class="text-center mb-3">
    <a href="get_csv_emergency?type=chairpersons&&name=Chairpersons_of_Local_Units&&tbl=emergency_personnel"><button type="submit" name="upload_data" class="btn btn-danger" style="background-color: #1f5cb2;border-color: #1f5cb2;margin-top: -7px;"><i class="fa fa-download"></i> <?php echo DOWNLOAD ?></button></a>
    </div>
</div>

   <div class="tab-pane fade show" id="cheif" role="tabpanel" aria-labelledby="cheif-tab">

  <div class="row" id="reportable">
   <table class="table table-striped table-bordered table-hover bg-white mt-3">
    <thead class="thead-light">
      <?php if($con_lang=='en'){

        echo $heading_en_personnel;

       }else{

       echo $heading_nep_personnel;

      } ?>
    </thead>
    <?php
if($chief){
   $i=1;
    foreach ($chief as $chief) {
      // code...
     ?>

     <tr class="tr_tbl">
       <td id="<?php echo $chief['id'] ?>idcheif"><?php echo $i; ?></td>
       <td id="<?php echo $chief['id'] ?>namecheif"><?php echo $chief['name'] ?></td>
       <td id="<?php echo $chief['id'] ?>organizationcheif"><?php echo $chief['organization'] ?></td>
       <td id="<?php echo $chief['id'] ?>postcheif"><?php echo $chief['post'] ?></td>
       <td id="<?php echo $chief['id'] ?>addresscheif"><?php echo $chief['address'] ?></td>
       <td id="<?php echo $chief['id'] ?>phone_nocheif"><?php echo $chief['phone_no'] ?></td>
       <td id="<?php echo $chief['id'] ?>emailcheif"><?php echo $chief['email'] ?></td>

     </tr>

   <?php $i++; }} ?>
  </table>
</div>
<div class="text-center mb-3">
    <a href="get_csv_emergency?type=cheif&&name=Chief_of_local_level_offices&&tbl=emergency_personnel"><button type="submit" name="upload_data" class="btn btn-danger" style="background-color: #1f5cb2;border-color: #1f5cb2;margin-top: -7px;"><i class="fa fa-download"></i> <?php echo DOWNLOAD ?></button></a>
      </div>
</div>


 <div class="tab-pane fade show" id="elected" role="tabpanel" aria-labelledby="elected-tab">

  <div class="row" id="reportable">
   <table class="table table-striped table-bordered table-hover bg-white mt-3">
    <thead class="thead-light">
      <?php if($con_lang=='en'){

        echo $heading_en_personnel;

       }else{

       echo $heading_nep_personnel;

      } ?>
    </thead>
    <?php
if($elected){
  $i=1;
    foreach ($elected as $elected) {
     ?>

     <tr class="tr_tbl">
       <td id="<?php echo $elected['id'] ?>idelected"><?php echo $i; ?></td>


       <td id="<?php echo $elected['id'] ?>nameelected"><?php echo $elected['name'] ?></td>
       <td id="<?php echo $elected['id'] ?>organizationelected"><?php echo $elected['organization'] ?></td>
       <td id="<?php echo $elected['id'] ?>postelected"><?php echo $elected['post'] ?></td>
       <td id="<?php echo $elected['id'] ?>addresselected"><?php echo $elected['address'] ?></td>
       <td id="<?php echo $elected['id'] ?>phone_noelected"><?php echo $elected['phone_no'] ?></td>
       <td id="<?php echo $elected['id'] ?>emailelected"><?php echo $elected['email'] ?></td>

     </tr>

   <?php $i++; }} ?>
  </table>
</div>
<div class="text-center mb-3">
    <a href="get_csv_emergency?type=elected&&name=Elected_Representatives&&tbl=emergency_personnel"><button type="submit" name="upload_data" class="btn btn-danger" style="background-color: #1f5cb2;border-color: #1f5cb2;margin-top: -7px;"><i class="fa fa-download"></i> <?php echo DOWNLOAD ?></button></a>
      </div>
</div>

 <div class="tab-pane fade show" id="municipal_ex" role="tabpanel" aria-labelledby="municipal_ex-tab">

  <div class="row" id="reportable">
   <table class="table table-striped table-bordered table-hover bg-white mt-3">
    <thead class="thead-light">  <tr>
      <?php if($con_lang=='en'){

        echo $heading_en_personnel;

       }else{

       echo $heading_nep_personnel;

      } ?>
    </thead>
    <?php
if($municipal_ex){
  $i=1;
    foreach ($municipal_ex as $municipal_ex) {
      // code...
     ?>

     <tr class="tr_tbl">
       <td id="<?php echo $municipal_ex['id'] ?>idmunicipal_ex"><?php echo $i; ?></td>

       




       <td id="<?php echo $municipal_ex['id'] ?>namemunicipal_ex"><?php echo $municipal_ex['name'] ?></td>
       <td id="<?php echo $municipal_ex['id'] ?>organizationmunicipal_ex"><?php echo $municipal_ex['organization'] ?></td>
       <td id="<?php echo $municipal_ex['id'] ?>postmunicipal_ex"><?php echo $municipal_ex['post'] ?></td>
       <td id="<?php echo $municipal_ex['id'] ?>addressmunicipal_ex"><?php echo $municipal_ex['address'] ?></td>
       <td id="<?php echo $municipal_ex['id'] ?>phone_nomunicipal_ex"><?php echo $municipal_ex['phone_no'] ?></td>
       <td id="<?php echo $municipal_ex['id'] ?>emailmunicipal_ex"><?php echo $municipal_ex['email'] ?></td>

     </tr>

   <?php $i++; } } ?>
  </table>
</div>
<div class="text-center mb-3">
    <a href="get_csv_emergency?type=municipal_ex&&name=Municipal_Executive_Members&&tbl=emergency_personnel"><button type="submit" name="upload_data" class="btn btn-danger" style="background-color: #1f5cb2;border-color: #1f5cb2;margin-top: -7px;"><i class="fa fa-download"></i> <?php echo DOWNLOAD ?></button></a>
      </div>
</div>


    <div class="tab-pane fade show" id="disaster" role="tabpanel" aria-labelledby="disaster-tab">
  <br>
    <a href="get_csv_emergency?type=disaster&&name=Municipality_Level_Disaster_Management_Committee&&tbl=emergency_personnel"><button type="submit" name="upload_data" class="btn btn-danger" style="background-color: #1f5cb2;border-color: #1f5cb2;margin-top: -7px;float: right;"><i class="fa fa-download"></i> <?php echo DOWNLOAD ?></button></a>
      <br>
  <div class="row" id="reportable">
   <table class="table table-striped table-bordered table-hover bg-white mt-3">
      <thead class="thead-light">
        <?php if($con_lang=='en'){

          echo $heading_en_personnel;

         }else{

         echo $heading_nep_personnel;

        } ?>
    </thead>
    <?php
if($disaster){
  $i=1;
    foreach ($disaster as $disaster) {
      // code...
     ?>

     <tr class="tr_tbl">
       <td id="<?php echo $disaster['id'] ?>iddisaster"><?php echo $i; ?></td>

       

       <td id="<?php echo $disaster['id'] ?>namedisaster"><?php echo $disaster['name'] ?></td>
       <td id="<?php echo $disaster['id'] ?>organizationdisaster"><?php echo $disaster['organization'] ?></td>
       <td id="<?php echo $disaster['id'] ?>postdisaster"><?php echo $disaster['post'] ?></td>
       <td id="<?php echo $disaster['id'] ?>adisasteressdisaster"><?php echo $disaster['address'] ?></td>
       <td id="<?php echo $disaster['id'] ?>phone_nodisaster"><?php echo $disaster['phone_no'] ?></td>
       <td id="<?php echo $disaster['id'] ?>emaildisaster"><?php echo $disaster['email'] ?></td>

     </tr>

   <?php $i++; } } ?>
  </table>
</div>
</div>
        <div class="tab-pane fade show" id="nntds" role="tabpanel" aria-labelledby="nntds-tab">

  <div class="row" id="reportable">
   <table class="table table-striped table-bordered table-hover bg-white mt-3">
     <thead class="thead-light">
      <th><span>S.N</span></th>
      <?php if($con_lang=='en'){

        echo $heading_en_personnel;

       }else{

       echo $heading_nep_personnel;

      } ?>
    </thead>
    <?php
    if($nntds){
      $i=1;
    foreach ($nntds as $nntds) {
      // code...
     ?>

     <tr class="tr_tbl">
       <td id="<?php echo $nntds['id'] ?>idnntds"><?php echo $i; ?></td>


       <td id="<?php echo $nntds['id'] ?>namenntds"><?php echo $nntds['name'] ?></td>
       <td id="<?php echo $nntds['id'] ?>organizationnntds"><?php echo $nntds['organization'] ?></td>
       <td id="<?php echo $nntds['id'] ?>postnntds"><?php echo $nntds['post'] ?></td>
       <td id="<?php echo $nntds['id'] ?>anntdsessnntds"><?php echo $nntds['address'] ?></td>
       <td id="<?php echo $nntds['id'] ?>phone_nonntds"><?php echo $nntds['phone_no'] ?></td>
       <td id="<?php echo $nntds['id'] ?>emailnntds"><?php echo $nntds['email'] ?></td>

     </tr>

   <?php $i++; } } ?>
  </table>
</div>
<div class="text-center mb-3">
    <a href="get_csv_emergency?type=nntds&&name=NNTDS_Executive_Committee&&tbl=emergency_personnel"><button type="submit" name="upload_data" class="btn btn-danger" style="background-color: #1f5cb2;border-color: #1f5cb2;margin-top: -7px;float: right;"><i class="fa fa-download"></i> <?php echo DOWNLOAD ?></button></a>
  </div>
</div>



    <div class="tab-pane fade show" id="health" role="tabpanel" aria-labelledby="health-tab">

      <div class="row" id="reportable">
       <table class="table table-striped table-bordered table-hover bg-white mt-3">
         <thead class="thead-light">
          <?php if($con_lang=='en'){

            echo $heading_en;

           }else{

           echo $heading_nep;

          } ?>
        </thead>


       <?php

if($health){
      $i=1;
       foreach ($health as  $health) {

        ?>

        <tr class="tr_tbl">
          <td id="<?php echo $health['id'] ?>idhealth"><?php echo $i; ?></td>
          <td id="<?php echo $health['id'] ?>organizationhealth"><?php echo $health['organization'] ?></td>
          <td id="<?php echo $health['id'] ?>addresshealth"><?php echo $health['address'] ?></td>
          <td id="<?php echo $health['id'] ?>phone_nohealth"><?php echo $health['phone_no'] ?></td>
          <td id="<?php echo $health['id'] ?>alternate_phone_nohealth"><?php echo $health['alternate_phone_no'] ?></td>
          <td id="<?php echo $health['id'] ?>contact_personhealth"><?php echo $health['contact_person'] ?></td>
          <td id="<?php echo $health['id'] ?>contact_personhealth"><?php echo $health['post'] ?></td>
          <td id="<?php echo $health['id'] ?>personal_nohealth"><?php echo $health['personal_no'] ?></td>
          <td id="<?php echo $health['id'] ?>emailhealth"><?php echo $health['email'] ?></td>
          <td id="<?php echo $health['id'] ?>websitehealth"><?php echo $health['website'] ?></td>

        </tr>
 <?php $i++; } }?>

      </table>
    </div>
    <div class="text-center mb-3">

      <a href="get_csv_emergency?type=health&&name=Health_Institutions&&tbl=emergency_contact"><button type="submit" name="upload_data" class="btn btn-danger" style="background-color: #1f5cb2;border-color: #1f5cb2;margin-top: -7px;"><i class="fa fa-download"></i> <?php echo DOWNLOAD ?></button></a>
    </div>
  </div>

  <div class="tab-pane fade show" id="emergency" role="tabpanel" aria-labelledby="emergency-tab">

    <div class="row" id="reportable">
     <table class="table table-striped table-bordered table-hover bg-white mt-3">
        <thead class="thead-light">
          <?php if($con_lang=='en'){

            echo $heading_en;

           }else{

           echo $heading_nep;

          } ?>
      </thead>

  <?php
if($responders){
  $i=1;
  foreach ($responders as $responders) {
    // code...
   ?>

      <tr class="tr_tbl">
        <td id="<?php echo $responders['id'] ?>idresponders"><?php echo $i; ?></td>
        <td id="<?php echo $responders['id'] ?>organizationresponders"><?php echo $responders['organization'] ?></td>
        <td id="<?php echo $responders['id'] ?>addressresponders"><?php echo $responders['address'] ?></td>
        <td id="<?php echo $responders['id'] ?>phone_noresponders"><?php echo $responders['phone_no'] ?></td>
        <td id="<?php echo $responders['id'] ?>alternate_phone_noresponders"><?php echo $responders['alternate_phone_no'] ?></td>
        <td id="<?php echo $responders['id'] ?>contact_personresponders"><?php echo $responders['contact_person'] ?></td>
        <td id="<?php echo $responders['id'] ?>postresponders"><?php echo $responders['post'] ?></td>
        <td id="<?php echo $responders['id'] ?>personal_noresponders"><?php echo $responders['personal_no'] ?></td>
        <td id="<?php echo $responders['id'] ?>emailresponders"><?php echo $responders['email'] ?></td>
        <td id="<?php echo $responders['id'] ?>websiteresponders"><?php echo $responders['website'] ?></td>

      </tr>

 <?php $i++; } } ?>

    </table>
  </div>
  <div class="text-center mb-3">
    <a href="get_csv_emergency?type=responders&&name=Emergency_Responders&&tbl=emergency_contact"><button type="submit" name="upload_data" class="btn btn-danger" style="background-color: #1f5cb2;border-color: #1f5cb2;margin-top: -7px;"><i class="fa fa-download"></i> <?php echo DOWNLOAD ?></button></a>
  </div>
</div>

<div class="tab-pane fade show" id="security" role="tabpanel" aria-labelledby="security-tab">

  <div class="row" id="reportable">
   <table class="table table-striped table-bordered table-hover bg-white mt-3">
      <thead class="thead-light">
        <?php if($con_lang=='en'){

          echo $heading_en;

         }else{

         echo $heading_nep;

        } ?>
    </thead>


    <?php
if($security){
    $i=1;
    foreach ($security as $security) {
      // code...
     ?>
    <tr class="tr_tbl">
    <td id="<?php echo $security['id'] ?>idSecurity"><?php echo $i; ?></td>
    <td id="<?php echo $security['id'] ?>organizationSecurity"><?php echo $security['organization'] ?></td>
    <td id="<?php echo $security['id'] ?>addressSecurity"><?php echo $security['address'] ?></td>
    <td id="<?php echo $security['id'] ?>phone_noSecurity"><?php echo $security['phone_no'] ?></td>
    <td id="<?php echo $security['id'] ?>alternate_phone_noSecurity"><?php echo $security['alternate_phone_no'] ?></td>
    <td id="<?php echo $security['id'] ?>contact_personSecurity"><?php echo $security['contact_person'] ?></td>
    <td id="<?php echo $security['id'] ?>contact_personSecurity"><?php echo $security['post'] ?></td>
    <td id="<?php echo $security['id'] ?>personal_noSecurity"><?php echo $security['personal_no'] ?></td>
    <td id="<?php echo $security['id'] ?>emailSecurity"><?php echo $security['email'] ?></td>
    <td id="<?php echo $security['id'] ?>websiteSecurity"><?php echo $security['website'] ?></td>
  </tr>
<?php $i++; } } ?>
  </table>
</div>
<div class="text-center mb-3">
    <a href="get_csv_emergency?type=security&&name=Security&&tbl=emergency_contact"><button type="submit" name="upload_data" class="btn btn-danger" style="background-color: #1f5cb2;border-color: #1f5cb2;margin-top: -7px;"><i class="fa fa-download"></i> <?php echo DOWNLOAD ?></button></a>
  </div>
</div>

<div class="tab-pane fade show" id="ngo" role="tabpanel" aria-labelledby="ngo-tab">

  <div class="row" id="reportable">
   <table class="table table-striped table-bordered table-hover bg-white mt-3">
      <thead class="thead-light">
        <?php if($con_lang=='en'){

          echo $heading_en;

         }else{

         echo $heading_nep;

        } ?>
    </thead>
    <?php
if($ngo){
  $i=1;
    foreach ($ngo as $ngo) {
      // code...
     ?>

        <tr class="tr_tbl">
          <td id="<?php echo $ngo['id'] ?>idngo"><?php echo $i; ?></td>
          <td id="<?php echo $ngo['id'] ?>organizationngo"><?php echo $ngo['organization'] ?></td>
          <td id="<?php echo $ngo['id'] ?>addressngo"><?php echo $ngo['address'] ?></td>
          <td id="<?php echo $ngo['id'] ?>phone_nongo"><?php echo $ngo['phone_no'] ?></td>
          <td id="<?php echo $ngo['id'] ?>alternate_phone_nongo" ><?php echo $ngo['alternate_phone_no'] ?></td>
          <td id="<?php echo $ngo['id'] ?>contact_personngo"><?php echo $ngo['contact_person'] ?></td>
          <td id="<?php echo $ngo['id'] ?>personal_nongo"><?php echo $ngo['personal_no'] ?></td>
          <td id="<?php echo $ngo['id'] ?>emailngo"><?php echo $ngo['email'] ?></td>
          <td id="<?php echo $ngo['id'] ?>websitengo"><?php echo $ngo['website'] ?></td>

        </tr>

   <?php $i++; } } ?>
  </table>
</div>
<div class="text-center mb-3">
      <a href="get_csv_emergency?type=ngo&&name=NGOs_INGOs&&tbl=emergency_contact"><button type="submit" name="upload_data" class="btn btn-danger" style="background-color: #1f5cb2;border-color: #1f5cb2;margin-top: -7px;"><i class="fa fa-download"></i> <?php echo DOWNLOAD ?></button></a>
  </div>
</div>

<div class="tab-pane fade show" id="volunter" role="tabpanel" aria-labelledby="volunter-tab">

  <div class="row" id="reportable">
   <table class="table table-striped table-bordered table-hover bg-white mt-3">
    <thead class="thead-light">
      <?php if($con_lang=='en'){

        echo $heading_en_personnel;

       }else{

       echo $heading_nep_personnel;

      } ?>
    </thead>
    <?php
if($ddr){
  $i=1;
    foreach ($ddr as $ddr) {
      // code...
     ?>

     <tr class="tr_tbl">
       <td id="<?php echo $ddr['id'] ?>idddr"><?php echo $i; ?></td>
       <td id="<?php echo $ddr['id'] ?>nameddr"><?php echo $ddr['name'] ?></td>
       <td id="<?php echo $ddr['id'] ?>organizationddr"><?php echo $ddr['organization'] ?></td>
       <td id="<?php echo $ddr['id'] ?>postddr"><?php echo $ddr['post'] ?></td>
       <td id="<?php echo $ddr['id'] ?>addressddr"><?php echo $ddr['address'] ?></td>
       <td id="<?php echo $ddr['id'] ?>phone_noddr"><?php echo $ddr['phone_no'] ?></td>
       <td id="<?php echo $ddr['id'] ?>emailddr"><?php echo $ddr['email'] ?></td>

     </tr>

   <?php $i++; } } ?>
  </table>
</div>
<div class="text-center mb-3">
    <a href="get_csv_emergency?type=ddr&&name=DRR_Volunteers&&tbl=emergency_personnel"><button type="submit" name="upload_data" class="btn btn-danger" style="background-color: #1f5cb2;border-color: #1f5cb2;margin-top: -7px;"><i class="fa fa-download"></i> <?php echo DOWNLOAD ?></button></a>
  </div>
</div>

<div class="tab-pane fade show" id="person" role="tabpanel" aria-labelledby="person-tab">

  <div class="row" id="reportable">
   <table class="table table-striped table-bordered table-hover bg-white mt-3">
    <thead class="thead-light">
      <?php if($con_lang=='en'){

        echo $heading_en_personnel;

       }else{

       echo $heading_nep_personnel;

      } ?>
    </thead>
    <?php
if($personnel){
  $i=1;
    foreach ($personnel as $personnel) {

     ?>

     <tr class="tr_tbl">
       <td id="<?php echo $personnel['id'] ?>idpersonnel"><?php echo $i; ?></td>
       <td id="<?php echo $personnel['id'] ?>namepersonnel"><?php echo $personnel['name'] ?></td>
       <td id="<?php echo $personnel['id'] ?>organizationpersonnel"><?php echo $personnel['organization'] ?></td>
       <td id="<?php echo $personnel['id'] ?>postpersonnel"><?php echo $personnel['post'] ?></td>
       <td id="<?php echo $personnel['id'] ?>addresspersonnel"><?php echo $personnel['address'] ?></td>
       <td id="<?php echo $personnel['id'] ?>phone_nopersonnel"><?php echo $personnel['phone_no'] ?></td>
       <td id="<?php echo $personnel['id'] ?>emailpersonnel"><?php echo $personnel['email'] ?></td>

     </tr>

   <?php $i++; } } ?>
  </table>
</div>
<div class="text-center mb-3">
      <a href="get_csv_emergency?type=personnel&&name=Municipality_Personnel&&tbl=emergency_personnel"><button type="submit" name="upload_data" class="btn btn-danger" style="background-color: #1f5cb2;border-color: #1f5cb2;margin-top: -7px;"><i class="fa fa-download"></i> <?php echo DOWNLOAD ?></button></a>
  </div>
</div>

<div class="tab-pane fade show" id="member" role="tabpanel" aria-labelledby="member-tab">

  <div class="row" id="reportable">
   <table class="table table-striped table-bordered table-hover bg-white mt-3">
      <thead class="thead-light">
      <?php if($con_lang=='en'){

        echo $heading_en;

       }else{

       echo $heading_nep;

      } ?>
    </thead>
    <?php
if($members){
  $i=1;
    foreach ($members as $members) {

     ?>

        <tr class="tr_tbl">
          <td id="<?php echo $members['id'] ?>idmembers"><?php echo $i; ?></td>
          <td id="<?php echo $members['id'] ?>namemembers"><?php echo $members['name'] ?></td>
          <td id="<?php echo $members['id'] ?>organizationmembers"><?php echo $members['organization'] ?></td>
          <td id="<?php echo $members['id'] ?>postmembers"><?php echo $members['post'] ?></td>
          <td id="<?php echo $members['id'] ?>addressmembers"><?php echo $members['address'] ?></td>
          <td id="<?php echo $members['id'] ?>phone_nomembers"><?php echo $members['phone_no'] ?></td>
          <td id="<?php echo $members['id'] ?>emailmembers"><?php echo $members['email'] ?></td>

        </tr>

   <?php $i++; } } ?>
  </table>
</div>
<div class="text-center mb-3">
      <a href="get_csv_emergency?type=members&&name=Members_of_Municipal_Assembly&&tbl=emergency_personnel"><button type="submit" name="upload_data" class="btn btn-danger" style="background-color: #1f5cb2;border-color: #1f5cb2;margin-top: -7px;"><i class="fa fa-download"></i> <?php echo DOWNLOAD ?></button></a>
  </div>
</div>
</div>

</div>
-->
<script src="<?php echo base_url()?>assets/js/bootstrap-tabdrop.js"></script>
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