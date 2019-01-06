<!--main content start-->
<section id="main-content" class="">
    <section class="wrapper">
    <!-- page start-->
    <!-- page start-->





    <div class="row">
    <div class="col-lg-12">
    <section class="panel">
        <header class="panel-heading">
            Edit Ghatana
        </header>
        <div class="panel-body">
            <form class="form-horizontal bucket-form" method="post" action="">


              <?php


             for($i=0;$i<sizeof($fields);$i++){






             if($fields[$i]=='id'){

                ?>




              <?php  }elseif($fields[$i]=='district'){

              ?>

              <div class="form-group">
                  <label class="col-sm-3 control-label"><?php  echo ucwords(str_replace("_"," ",$fields[$i]));?></label>
                  <div class="col-sm-6">
              <select class="form-control input-sm m-bot15" name="<?php echo $fields[$i];?>">
                <option value="<?php echo $e_data[$fields[$i]]  ?>"><?php echo $e_data[$fields[$i]]  ?></option>
                <option value="Taplejung">Taplejung</option>
                <option value="Panchthar">Panchthar</option>
                <option value="Ilaam">Ilaam</option>
                <option value="Jhapa">Jhapa</option>
                <option value="Morang">Morang</option>
                <option value="Sunsari">Sunsari</option>
                <option value="Dhankuta">Dhankuta</option>
                <option value="Terhathum">Terhathum</option>
                <option value="Bhojpur">Bhojpur</option>
                <option value="Shankhuwasabha">Shankhuwasabha</option>
                <option value="Solukhumbu">Solukhumbu</option>
                <option value="Khotang">Khotang</option>
                <option value="Okhaldhunga">Okhaldhunga</option>
                <option value="Udayapur">Udayapur</option>
                <option value="Siraha">Siraha</option>
                <option value="Saptari">Saptari</option>
                <option value="Dhanusha">Dhanusha</option>
                <option value="Mahottari">Mahottari</option>
                <option value="Sarlahi">Sarlahi</option>
                <option value="Sindhuli">Sindhuli</option>
                <option value="Ramechhap">Ramechhap</option>
                <option value="Dolakha">Dolakha</option>
                <option value="RASUWA">RASUWA</option>
                <option value="Sindhupalchowk">Sindhupalchowk</option>
                <option value="Nuwakot">Nuwakot</option>
                <option value="Dhading">Dhading</option>
                <option value="Kathmandu">Kathmandu</option>
                <option value="Lalitpur">Lalitpur</option>
                <option value="Bhaktapur">Bhaktapur</option>
                <option value="Kavrepalanchowk">Kavrepalanchowk</option>
                <option value="Makawanpur">Makawanpur</option>
                <option value="Rautahat">Rautahat</option>
                <option value="Bara">Bara</option>
                <option value="Parsa">Parsa</option>
                <option value="Chitawan">Chitawan</option>
                <option value="Nawalparasi">Nawalparasi</option>
                <option value="Rupandehi">Rupandehi</option>
                <option value="Kapilbastu">Kapilbastu</option>
                <option value="Palpa">Palpa</option>
                <option value="Arghakhanchi">Arghakhanchi</option>
                <option value="Gulmi">Gulmi</option>
                <option value="Tanahu">Shyanja</option>
                <option value="43">Tanahu</option>
                <option value="Gorkha">Gorkha</option>
                <option value="Lamjung">Lamjung</option>
                <option value="Kaski">Kaski</option>
                <option value="Manang">Manang</option>
                <option value="Mustang">Mustang</option>
                <option value="Myagdi">Myagdi</option>
                <option value="Baglung">Baglung</option>
                <option value="Parbat">Parbat</option>
                <option value="Dang">Dang</option>
                <option value="Pyuthan">Pyuthan</option>
                <option value="Rolpa">Rolpa</option>
                <option value="Salyan">Salyan</option>
                <option value="Rukum">Rukum</option>
                <option value="Dolpa">Dolpa</option>
                <option value="Mugu">Mugu</option>
                <option value="Humla">Humla</option>
                <option value="Jumla">Jumla</option>
                <option value="Kalikot">Kalikot</option>
                <option value="Jajarkot">Jajarkot</option>
                <option value="Dailekh">Dailekh</option>
                <option value="Surkhet">Surkhet</option>
                <option value="Bardiya">Bardiya</option>
                <option value="Banke">Banke</option>
                <option value="Kailali">Kailali</option>
                <option value="Doti">Doti</option>
                <option value="Achhaam">Achhaam</option>
                <option value="Bajura">Bajura</option>
                <option value="Bajhang">Bajhang</option>
                <option value="Darchula">Darchula</option>
                <option value="Baitadi">Baitadi</option>
                <option value="Dadeldhura">Dadeldhura</option>
                <option value="Kanchanpur">Kanchanpur</option>

                              </select>
                            </div>
                        </div>


              <?php  }elseif($fields[$i]=='ward'){

              ?>

              <div class="form-group">
                  <label class="col-sm-3 control-label"><?php  echo ucwords(str_replace("_"," ",$fields[$i]));?></label>
                  <div class="col-sm-6">
              <select class="form-control input-sm m-bot15" name="<?php echo $fields[$i];?>">
                <option value="<?php echo $e_data[$fields[$i]]  ?>"><?php echo $e_data[$fields[$i]]  ?></option>
                <option value="10" >ward no 10 </option>
                <option value="9" >ward no 9 </option>
                <option value="8" >ward no 8 </option>
                <option value="7" >ward no 7 </option>
                <option value="6" >ward no 6 </option>
                <option value="5" >ward no 5 </option>
                <option value="4" >ward no 4 </option>
                <option value="3" >ward no 3 </option>
                <option value="2" >ward no 2 </option>
                <option value="1" >ward no 1 </option>
                              </select>
                            </div>
                        </div>


              <?php  }elseif($fields[$i]=='incident'){

              ?>

              <div class="form-group">
                  <label class="col-sm-3 control-label"><?php  echo ucwords(str_replace("_"," ",$fields[$i]));?></label>
                  <div class="col-sm-6">
              <select class="form-control input-sm m-bot15" name="<?php echo $fields[$i];?>">
                <option value="<?php echo $e_data[$fields[$i]]  ?>"><?php echo $e_data[$fields[$i]]  ?></option>
                <option value="Flash Flood">Flash Flood</option>
                <option value="Leak">Leak</option>
                <option value="Sedimentation">Sedimentation</option>
                <option value="Accident">Accident</option>
                <option value="Biological">Biological</option>
                <option value="Frost">Frost</option>
                <option value="Pollution">Pollution</option>
                <option value="Famine">Famine</option>
                <option value="Panic">Panic</option>
                <option value="Explosion">Explosion</option>
                <option value="Drought">Drought</option>
                <option value="Strong_Wind">Strong Wind</option>
                <option value="Forest Fire">Forest Fire</option>
                <option value="Snow Storm">Snow Storm</option>
                <option value="Heat Wave">Heat Wave</option>
                <option value="Plague">Plague</option>
                <option value="Hail Storm">Hail Storm</option>
                <option value="Structure Collapse">Structure Collapse</option>
                <option value="Tuin Chudera">Tuin Chudera</option>
                <option value="Bridge Collapse">Bridge Collapse</option>
                <option value="Air Crash">Air Crash</option>
                <option value="Avalanche">Avalanche</option>
                <option value="Cold Wave">Cold Wave</option>
                <option value="Boat Capsize">Boat Capsize</option>
                <option value="High Altitude">High Altitude</option>
                <option value="Heavy Rainfall">Heavy Rainfall</option>
                <option value="Drowning">Drowning</option>
                <option value="Wind storm">Wind storm</option>
                <option value="Hailstone">Hailstone</option>
                <option value="Epidemic">Epidemic</option>
                <option value="Other">Other</option>
                <option value="storm">storm</option>
                <option value="Bus accident">Bus accident</option>
                <option value="Lightning">Lightning</option>
                <option value="Thunderbolt">Thunderbolt</option>
                <option value="Fire">Fire</option>
                <option value="Landslide">Landslide</option>
                <option value="Flood">Flood</option>
                <option value="Earthquake">Earthquake</option>
                              </select>
                            </div>
                        </div>

            <?php }else{ ?>






              <div class="form-group">
                  <label class="col-sm-3 control-label"><?php  echo ucwords(str_replace("_"," ",$fields[$i]));?></label>
                  <div class="col-sm-6">
                      <input type="text" value="<?php echo $e_data[$fields[$i]]  ?>"  name="<?php echo $fields[$i];?>" class="form-control round-input">
                  </div>
              </div>


 <?php }} ?>








                <div class="col-md-6">
              <button type="submit" name="submit" class="btn btn-info">Submit</button>

                 </div>



                </div>


                </div>
            </form>
        </div>
    </section>




    </div>
    </div>









    <!-- page end-->
    </section>
</section>
<!--main content end-->
