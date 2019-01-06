
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
  <style>
button.btn.btn-info.hit {
    margin-left: 1035px;
    background-color: #7696c7;
}
   #map-table-jana{
        margin: 20px 0px 60px;
        background: #fff;
        overflow: hidden;
    }

    #reportable{
        overflow: auto;
        margin: 0.5em;
    }
    .responstable {
  margin: 1em 0em;
  width: 100%;
  overflow: hidden;
  background: #FFF;
  color: #000;
  border-radius: 0px;
  border: 1px solid #002052;
  font-size: 16px;
}
.responstable tr {
  border: 1px solid #D9E4E6;
}
.responstable tr:nth-child(odd) {
  background-color: #EAF3F3;
}
.responstable th {
  display: none;
  border: 1px solid #FFF;
  background-color: #7696c7;
  color: #FFF;
  padding: 1em;
}
.responstable th:first-child {
  display: table-cell;
  text-align: center;
}
.responstable th:nth-child(2) {
  display: table-cell;
}
.responstable th:nth-child(2) span {
  display: none;
}
.responstable th:nth-child(2):after {
  content: attr(data-th);
}
@media (min-width: 480px) {
  .responstable th:nth-child(2) span {
    display: block;
}
.responstable th:nth-child(2):after {
    display: none;
}
}
.responstable td {
  display: block;
  word-wrap: break-word;
  max-width: 7em;
}
.responstable td:first-child {
  display: table-cell;
  text-align: center;
  border-right: 1px solid #D9E4E6;
}
@media (min-width: 480px) {
  .responstable td {
    border: 1px solid #D9E4E6;
}
}
.responstable th, .responstable td {
  text-align: left;
  margin: .5em 1em;
}
@media (min-width: 480px) {
  .responstable th, .responstable td {
    display: table-cell;
    padding: 0.3em;
}
}
#map-table-jana .text-center h3{

}

#map-table-jana .report-down{
  padding: 25px;
  border-bottom: 1px solid #e7e7e7;
}

#map-table-jana .repo_filter{
  margin: 30px auto 15px;
}
#conten-map {
  padding: 0px;
  transition: all 0.3s;
  position: relative;
  width: 100%;
  background: #fff;
}

#conten-map .navbar {
  padding: 0;
  background: #002052;
  border: none;
  border-radius: 0;
  margin: 0px;
  box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
  position: relative;
}

#conten-map .navbar.navbar-default{
  min-height: 25px;
  font-size: 13px;
}

#conten-map .nav {
  text-align: center;
  color: #fff;
}

#conten-map .navbar-header .navbar-nav li{
  padding: 0;
  color: white;
}
#conten-map .navbar-header .navbar-nav li>a{
  color:#fff;
  padding-top: 5px;
  padding-bottom: 5px;
}
#conten-map .navbar-header .navbar-nav li>a:hover{
  text-decoration: none;
  color: #002052;
  background: #f5f5f5;
}
#conten-map .navbar-default .navbar-nav > li > a:focus{
  text-decoration: none;
  color: #002052;
  background: #f5f5f5;
}
#conten-map .navbar-expand-sm{
  background: #1f5cb2;
  height: 32px;
}
#conten-map .nav-item .nav-link{
  color: #fff;
  font-size: 13px;
}

table.responstable {
    overflow-x: scroll;
}

table.dataTable.no-footer{
  border-bottom: 0;
}
.dataTables_filter label > input{
visibility: visible;
position: relative;
   padding: .1rem .75rem;
    font-size: 1rem;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: .1rem;
    -webkit-transition: border-color 0.15s ease-in-out,-webkit-box-shadow 0.15s ease-in-out;
    transition: border-color 0.15s ease-in-out,-webkit-box-shadow 0.15s ease-in-out;
    transition: border-color 0.15s ease-in-out,box-shadow 0.15s ease-in-out;
    transition: border-color 0.15s ease-in-out,box-shadow 0.15s ease-in-out,-webkit-box-shadow 0.15s ease-in-out;
}
</style>

<div id="conten-map">
  <nav class="navbar navbar-expand-sm">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="report_page"><i class="fa fa-map" aria-hidden="true"></i> <?php echo $site_info['map'] ?></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="map_reports"><i class="fa fa-database" aria-hidden="true"></i> <?php echo $site_info['data'] ?></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="map_reports_table"><i class="fa fa-pencil-square" aria-hidden="true"></i> <?php echo $site_info['ghatana_bib'] ?></a>
      </li>
    </ul>
  </nav>
</div>
<div class="container">
<div id="map-table-jana">

<form  method="POST" action="">

  <div class="row">
    <div class="col-md-12">
      <div class="p-4">
        <div class="row">
              <div class="col-md-9"><h4 class="text-uppercase m-0"><strong><?php echo $site_info['incident_detail'] ?></strong></h4></div>
              <div class="col-md-3 clearfix">
                <a class="btn btn-primary btn-sm pull-right" href="ReportController/ghatana_download?qry=<?php echo $query ?>"><i class="fa fa-cloud-download"></i> <?php echo $site_info['download'] ?> </a>
                <!-- <ul class="list-inline"> -->


                  <!-- <li class="list-inline-item"><a href="#" title="pdf"><i class="fa fa-file-pdf-o"></i></a></li>
                  <li class="list-inline-item"><a href="#" title="excel"><i class="fa fa-file-excel-o"></i></a></li>
                  <li class="list-inline-item"><a href="#" title="image"><i class="fa fa-file-image-o"></i></a></li>
                  <li class="list-inline-item"><a href="#" title="word"><i class="fa fa-file-word-o"></i></a></li> -->
                <!-- </ul> -->
              </div>
        </div>
      </div>
  </div>
  </div>

  <!-- <div class="row">
    <div class="col-md-12">
      <div class="report-down">
            <div class="col-md-9"><h4 class="text-uppercase m-0"><strong>Total Reports</strong></h4></div>
            <div class="col-md-3 clearfix">
              <a class="btn btn-primary btn-sm pull-right" href="ReportController/map_data_download"><i class="fa fa-cloud-download"></i> Download</a>
                <a href="ReportController/ghatana_download?qry=<?php echo $query ?>"><li class="list-inline-item"><i class="fa fa-cloud-download"></i> Download </li></a>
                <li class="list-inline-item"><a href="#" title="pdf"><i class="fa fa-file-pdf-o"></i></a></li>
                <li class="list-inline-item"><a href="#" title="excel"><i class="fa fa-file-excel-o"></i></a></li>
                <li class="list-inline-item"><a href="#" title="image"><i class="fa fa-file-image-o"></i></a></li>
                <li class="list-inline-item"><a href="#" title="word"><i class="fa fa-file-word-o"></i></a></li>

            </div>
            </div>
      </div>
  </div> -->

  <?php


$en_src_en='<div class="col-md-2">Source
   <select class="custom-select multiselect-icon" name="source">
           <option value="0" selected disabled>Select an option</option>
           <option value="Moha" >Moha</option>
           <option value="Disinventar" >Disinventar</option>
   </select>
 </div>';

 $inci_type_en='<div class="col-md-2">Incident Type
   <select class="custom-select multiselect-icon" name="incident">
           <option value="0" selected disabled>Select an incident</option>
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
 </div>';

 $ward_en='<div class="col-md-2">Ward
   <select class="custom-select multiselect-icon" name="ward">
           <option value="0" selected disabled>Select ward</option>
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
 </div>';



  $en_src_nep='<div class="col-md-2">Source nepali
     <select class="custom-select multiselect-icon" name="source">
             <option value="0" selected disabled>Select an option</option>
             <option value="Moha" >Moha</option>
             <option value="Disinventar" >Disinventar</option>
     </select>
   </div>';

   $inci_type_nep='<div class="col-md-2">Incident Type nepali
     <select class="custom-select multiselect-icon" name="incident">
             <option value="0" selected disabled>Select an incident</option>
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
   </div>';

   $ward_nep='<div class="col-md-2">Ward nepali
     <select class="custom-select multiselect-icon" name="ward">
             <option value="0" selected disabled>Select ward</option>
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
   </div>';







   ?>

    <div class="row">
    <div class="container">
    <div class="row repo_filter">


<?php if($reports_tbl_lang == 'en'){


  echo $en_src_en;
   echo $inci_type_en;
   echo $ward_en;

}else{

  echo $en_src_nep;
   echo $inci_type_nep;
   echo $ward_nep;



}


  ?>



       <!-- <div class="col-md-2">Source
          <select class="custom-select multiselect-icon" name="source">
                  <option value="0" selected disabled>Select an option</option>
                  <option value="Moha" >Moha</option>
                  <option value="Disinventar" >Disinventar</option>
          </select>
        </div> -->

        <!-- <div class="col-md-2">Incident Type
          <select class="custom-select multiselect-icon" name="incident">
                  <option value="0" selected disabled>Select an incident</option>
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
        </div> -->

        <!-- <div class="col-md-2">District
            <select class="custom-select multiselect-icon" name="district">
                      <option value="0" selected disabled>Select a district</option>
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
                      <option value="76">None</option>
            </select>
        </div>
-->
        <!-- <div class="col-md-2">Ward
          <select class="custom-select multiselect-icon" name="ward">
                  <option value="0" selected disabled>Select ward</option>
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
        </div> -->

        <div class="col-md-2">Date(From)
          <div class="form-group" style="margin-bottom: 0;">
                  <input class="form-control" type="date" name="from" id="datepicker1" placeholder="To">
          </div>
        </div>
        <div class="col-md-2">Date(To)
          <div class="form-group" style="margin-bottom: 0;">
                  <input class="form-control" type="date" name="to" id="datepicker2" placeholder="To">

          </div>
        </div>
        <div class="col-md-2">
          <button type="submit" name="submit" class="btn btn-primary hit btn-block mt-4"><?php echo $site_info['apply']?></button>
        </div>

    </div>
  </div>
</div>


  <div class="text-center">
    <!-- <button type="submit" name="submit" class="btn btn-primary hit">Apply</button> -->
  </div>
  </form>


<div class="row" id="reportable">
  <?php if($data == NUll){

 echo "<p>No Matching Data Found For respective Filter</p>";


  }else{ ?>
 <!-- responsive table for displaying contact directory -->
 <table id="hydropower" class="table table-striped table-bordered table-hover">
     <thead class='thead-light'>
  <tr>
    <?php foreach($data[0] as $key => $value){


                  ?>


      <th><strong>

        <?php

        $cleanname = explode("_", $key);
        foreach ($cleanname as $r) {
          echo ucfirst($r)." ";
                        }?>

    </strong></th>
  <?php  } ?>


  </tr>
</thead>
<tbody>
  <?php foreach ($data as  $v) {
    // code...
 ?>
  <tr>
      <?php foreach($v as $key => $value) { ?>
    <td><?php echo $value;?></td>
  <?php } ?>
  </tr>

<?php  } ?>
<tr >
    <td colspan="5">Total</td>
    <td>4639</td>
    <td>5463</td>
    <td>2</td>
    <td>45112</td>
    <td>3218</td>
    <td>6990068</td>
    <td>28546265613</td>
    <td>86056</td>
    <td>2689</td>
    <td>233778</td>
    <td>2221502</td>
    <td>553837</td>
    <td>4</td>
    <td>0</td>
    <td>0</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td style="display:none;"></td>
    <td style="display:none;"></td>
    <td style="display:none;"></td>
    <td style="display:none;"></td>


  </tr>
</tbody>
</table>

<!-- <div class="row">
  <div class="col-md-offset-12 text-center">
    <nav aria-label="Page navigation example" class="">
      <ul class="pagination justify-content-center">
        <li class="page-item disabled">
          <a class="page-link" href="#" tabindex="-1">Previous</a>
        </li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
          <a class="page-link" href="#">Next</a>
        </li>
      </ul>
    </nav>
  </div>
</div> -->
<?php  }?>

</div>
</div>
</div>
</div>
