<?php $lang=$this->session->get_userdata('Language');
    $con_lang=$lang['Language'];

    $volunteer_en='<th>S.N</th>
    <th>Name</th>
    <th>Affiliated Organization</th>
    <th>Designation</th>
    <th>Ward no</th>
    <th>Phone No.</th>
    <th>Email</th>
    <th>Skills</th>
    <th>Volunteering Experience</th>
    <th>Age</th>
    <th>Status</th>';

    $volunteer_nep='<th>S.N</th>
    <th>Name</th>
    <th>Affiliated Organization</th>
    <th>Designation</th>
    <th>Ward no</th>
    <th>Phone No.</th>
    <th>Email</th>
    <th>Skills</th>
    <th>Volunteering Experience</th>
    <th>Age</th>
    <th>Status</th>';

    $individual_en='<th>S.N</th>
    <th>Name</th>
    <th>Affiliated</th>
    <th>Designation</th>
    <th>Ward no.</th>
    <th>Phone No.</th>
    <th>Email</th>';

    $individual_nep='<th>क्र.स</th>
    <th>नाम</th>
    <th>सम्बद्ध संस्था</th>
    <th>पद </th>
    <th>वडा नम्बर</th>
    <th>सम्पर्क नम्बर</th>
    <th>इमेल</th>';

  $organization_en='<th>S.N</th>
              <th data-th="Health Institutions">Name Of the Organization</th>
              <th>Type of Organization</th>
              <th>Address</th>
              <th>Ward no.</th>
              <th>Contact no. of Organization</th>
              <th>Email of Organization</th>
              <th>Name of the Contact Person</th>
              <th>Designation of the Person</th>
              <th>Contact no. of the person</th>
              <th>Remarks</th>';

  $organization_nep='<th>क्र.स</th>
                    <th data-th="Health Institutions">संस्थाको नाम</th>
                    <th>संस्थाको प्रकार 	</th>
                    <th>ठेगाना</th>
                    <th>वडा नम्बर</th>
                    <th>संस्थाको सम्पर्क नम्बर 	</th>
                    <th>इमेल</th>
                    <th>सम्पर्क व्यक्ति</th>
                    <th>पद </th>
                    <th>फोन नम्बर </th>
                    <th> टिप्पणी</th>';
?>
    <!-- <section class="contactbanner">
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
    </section> -->
    <section class="searchpanel">
        <div class="container">
            <div class="search flex contactSearch">
                <div class="inputholder grow">
                    <label for="">Keywoards</label>
                    <input class="form-control" placeholder="Enter to search..." type="search" placeholder="<?php echo  SEARCH ?>" id="myInput" onkeyup="myFunction()">
                </div>
                <div class="selectHolder">
                    <label for="">Category</label>
                    <select id="contact_category">
                        <option value="<?php echo $cat ?>"><?php echo ucfirst($cat)?></option>
                        <option value="individual">Indiviual</option>
                        <option value="organization">Organization</option>
                        <option value="volunteer">Volunteer</option>
                        <!-- <option value="audi">Audi</option> -->
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

                <!-- <button class="btn-primary search--btn"> SEARCH</button> -->
            </div>
        </div>
    </section>
    <section class="contactlist">
        <div class="container">
            <div class="row">
                <!-- <div class="col-md-4">

                    <ul class="nav nav-tabs ptb40">
                        <?php

                        foreach ($data_list as $key => $list){


                            ?>
                        <li class="<?php if($key+1=='1'){echo'active' ;} ?> tablistc flex align-items-center contact_tab" id="<?php echo $list['name_id'] ?>" name="<?php echo $cat_contact?>">
                            <a data-toggle="tab" href="#first" class="<?php if($key+1=='1'){echo 'active' ;}?> flex nodec bold  f14 uppercase">
                                <div class="grow tabinner">
                                    <i class="la la-user-secret"></i>
                                    <span class="uppercase"><?php echo ucfirst(str_replace("_"," ",$list['name_id'])) ?></span>
                                </div>
                                <?php if($list['name_id']=='volunteer'){?>
                                  <div class="itemCount"><?php echo count($data) ?></div>
                                <?php }else{ ?>
                                  <div class="itemCount"><?php echo $list['countdata'] ?></div>

                                <?php } ?>
                            </a>
                        </li>

                    <?php  } ?>

                    </ul>

                </div> -->
                <div class="col-md-12" id="contact_tbl">
                    <div class="tab-content">
                        <div id="first" class="tab-pane   fade in show   active">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover" id="contact_table_db">
                                    <thead class="tableHeader">
                                        <tr>

                                          <?php
                                            if($cat_contact=="individual"){

                                              if($con_lang=='en'){
                                                   echo $individual_en;
                                              }else{
                                                   echo $individual_nep;
                                               }


                                            }elseif($cat_contact=="organization"){

                                              if($con_lang=='en'){
                                                   echo $organization_en;
                                              }else{
                                                   echo $organization_en;
                                               }



                                            }else{

                                              if($con_lang=='en'){
                                                   echo $volunteer_en;
                                              }else{
                                                   echo $volunteer_nep;
                                               }


                                            }




                                            ?>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php if($data){ $i=1;
                                    foreach($data as $v ){
                                      ?>

                                        <tr class="tr_tbl">
                                           <th scope="row" id="<?php echo $v['id'] ?>"><?php echo $i; ?></th>
                                            <?php  foreach($v as $key => $value) {
                                              if($key=='id' || $key=='category' || $key=='language'){

                                              }else{
                                              ?>

                                           <td id="<?php echo $v['id'].$i.$key ?>"><?php echo $value ?></td>

                                         <?php }}?>
                                        </tr>
                                    <?php $i++;  } } ?>
                                    </tbody>
                                </table>
                                <div class="text-center mb-3">
                                    <a href="<?php echo base_url()?>contact/downlaod_conatct_tbl?type=<?php echo $sub_cat ?>&&tbl=<?php echo $cat_contact ?>"><button type="submit" name="upload_data" class="btn btn-danger" style="background-color: #1f5cb2;border-color: #1f5cb2;margin-top: -7px;"><i class="fa fa-download"></i> <?php echo DOWNLOAD ?></button></a>
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
 // $(".nav-tabs").tabdrop();
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

$(document).ready(function() {

var cat_id='<?php echo $cat ?>';

  $('#contact_table_db').DataTable({

        "paging":   true,
        "ordering": false,
        "searching":false,
        "info":     false
        });

        $('#contact_category option[value='+cat_id+']').remove();
} );

</script>
