


<link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.3/dist/leaflet.css"/>
<script src="https://unpkg.com/leaflet@1.0.3/dist/leaflet.js"></script>
<!--<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet-ajax/2.1.0/leaflet.ajax.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/randomcolor/0.5.2/randomColor.js"></script>
<script src="https://d3js.org/d3.v3.min.js"></script>

<!-- date -->


<style>
span.exit {
  float: right;
  margin-right: 10px;
}
.row.sent {
  margin-top: 90px;
  color: grey;
  font-size: 13px;
}
img.read-mor {
  max-height: 250px;
  margin-bottom: 25px;
  border: 1px solid black;
}
/*.leaflet-left .leaflet-control {
margin-left: 1300;
margin-bottom: 10;
}

.leaflet-top .leaflet-control {
margin-top: 26px;
}*/

/* ---------------------------------------------------
conten-map STYLE
----------------------------------------------------- */

.dropdown-category_dropdown .btn-light{
  padding: ;
  width: 100%;
  border: 1px solid grey;
  margin: 1px 0px 3px;
  padding: 2px 0px 5px;
  font-size: 14px;
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

#sider .panel .panel-body{
  padding: 0px 5px 0px;
}

#sider .panel{
  margin-bottom: 0px;
}

.wrapper nav#sider{
  height: 600px;
  overflow: hidden;
  overflow-y: hidden;
  overflow-y: auto;
}

#sider .sidebar-header{
  padding: 5px 10px;
}

#reportrange{
  background: #eee;
  cursor: pointer;
  padding: 5px;
}

#sider #reporting .panel-body{
  height: 600px;
  overflow-y: auto;
  overflow-x: hidden;
}

#reporting .page-header{
  margin: 8px 15px 5px;
  padding-bottom: 0px;
  font-size: 16px;
  font-weight: bold;
  color: #444;
  border-bottom: 1px solid #ddd;
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



.blog-panel .thumbnail img{
  width: 100%;
  height: 70px;
  object-fit: cover;
}
.blog-panel{
  padding-right:0px;
  position: relative;
}
/*    .blog-panel .thumbnail{
padding: 0px;
margin: 0px;
width: 100%;
height: auto;
margin-top: 10px;
overflow: auto;
}*/

.fancy h5{
  color: #002052;
  border-bottom: 1px solid #e7e7e7;
  font-weight: bold;
  word-spacing: 2px;
  font-size: 0.9rem;
}
.fancy p{
  font-size: 12px;
  color: rgba(0,0,0,0.9);
  text-align: justify;
}

.fancy a.naya{
  font-size: 11px;
  float: right;
  color: grey;
  text-decoration: none;
  padding: 2px;
  cursor: pointer;
  color: #555;
}

.horz{
  margin: 0px 40px 5px;
}

.tiny{
  color: rgba(0,0,0,0.7);
  font-size: 10px;
  text-align: justify;
  justify-content: space-around;
  display: flex;
}

.tiny a{
  color:  grey;
}

.jana-map{
  padding-left: 0;
  border-left: 0.2em solid #ccc;
}

.no-padding {
  padding-left: 0;
  padding-right: 0;
}

.dropdown-category_dropdown{
  background-color: #fff;
  position: relative;
}

.filter-check{
  border-bottom: 0.2em solid #fff;
  padding: 8px 1px 4px;

}
.filter-check .dropdown-menu{
  min-width: 170px;
}
.filter-check .dropdown-toggle{
  width: 95%;
}
.filter-check .multiselect-icon{
  border-radius: 0;
  margin: 1px 0px 3px;
  height: 30px;
  padding: 0px 5px;
  border: 1px solid #989696;
  background-color:#bdbdbd;
  width: 98%;
  border-radius: 2px;
}
.filter-check .glyphicon{
  color: #002052;
}

#datepicker, #datepicker1 {
  height: 30px;
  padding: 0px;
  width: 49%;
  display: inline;
  margin: 1px -2px 3px;
  border-radius: 2px;
  border: 1px solid #989696;
  background-color:#bdbdbd;
}

.filter-check p{
  font-size: 14px;
  border-bottom: 1px solid #ccc;
}

#map {
  height: 600px; width: 100%; margin-bottom: 0px;position: relative;/*border-top: 0.3em solid #ccc;*/
}

/*popup*/
.arrow_box {
  position: relative;
  background: silver;
}
.arrow_box:after, .arrow_box:before {
  right: 100%;
  top: 50%;
  border: solid transparent;
  content: " ";
  height: 0;
  width: 0;
  position: absolute;
  pointer-events: none;
}

.arrow_box:after {
  border-color: rgba(0, 0, 0, 0);
  border-right-color: #silver;
  border-width: 20px;
  margin-top: -20px;
}
.arrow_box:before {
  border-color: rgba(51, 102, 153, 0);
  border-right-color: #369;
  border-width: 21px;
  margin-top: -21px;
}

#popup-container{
  max-width: 380px;
  max-height: 280px;
}


.popup-panel{
  font-weight: 400;
  font-family: inherit;
  border-radius: .3rem;
  padding: 5px;
  margin-bottom: 2px;
  overflow-x: hidden;
  overflow-y: auto;
  padding: 5px 0px;
}

.blog-panel1 .thumbnail1 img{
  width: 100%;
  height: auto;
}
.blog-panel1{
  padding: 12px 0px;
  position: relative;
}
.blog-panel1 .thumbnail1{
  padding: 0px;
  margin: 0px;
  overflow: auto;
  position: relative;
}

.fancy .list-group{
  font-size: 10px;
  padding: 0px;
  margin: 0px;
  margin-top: 5px;
  border: 1px solid lightgrey;
}

.fancy .list-group .list-group-item{
  padding: 3px;
  margin: 2px;
}

#popup_nav_small{
  padding: 15px 5px;
  min-height: 30px;
}

#popup_nav_small .nav-tabs > li.active > a, .nav-tabs > li.active > a:focus, .nav-tabs > li.active > a:hover { border-width: 0; background: none;}
#popup_nav_small .nav-tabs > li > a { border: none; color: #666; }
#popup_nav_small .nav-tabs > li.active > a, .nav-tabs > li > a:hover { border: none; color: #002052 !important; background: transparent; }
#popup_nav_small .nav-tabs > li > a::after { content: ""; background: #002052; height: 2px; position: absolute; width: 100%; left: 0px; bottom: -1px; transition: all 250ms ease 0s; transform: scale(0); }
#popup_nav_small .nav-tabs > li.active > a::after, .nav-tabs > li:hover > a::after { transform: scale(1); }
#popup_nav_small .tab-nav > li > a::after { background: #21527d none repeat scroll 0% 0%; color: #fff; }
#popup_nav_small .tab-pane { font-size: 10px; }


#conten-map .navbar-expand-sm{
  background: #1f5cb2;
  height: 32px;
}
#conten-map .nav-item .nav-link{
  color: #fff;
  font-size: 13px;
}

button.btn.btn-light.btn-sm {
  color: #fff;
  background-color: #5cb85c;
  border-color: #4cae4c;
}
.bar {
  fill: #2086d9;
}

.holders{
  padding: .5rem;
  background: rgba(0,0,0,.1);
  margin-bottom: 1rem;
  text-align: center;
  font-size: 13px;
}

.holders >h6{
  padding: .2rem 0;
}

.holders >div{
  background: white;
  padding: .5rem 0;
}

.news-panel{
  font-weight: 400;
  box-shadow: none;
  border-radius: 0;
  padding: .7rem;
  margin-bottom: 10px;
  border: 2px solid rgba(0,0,0,.06);
  background: rgba(0,0,0,.03);
}
/* tab css */
ul.nav.nav-tabs li.basemap a{
display: inline-block;
padding: 10px 15px;
color: #FFF;
}
ul.nav-tabs li.basemap.active{
background: rgba(0,0,0,.3);

}

ul.nav.nav-tabs li.basemap a:hover{
background: rgba(0,0,0,.2);
color: #FFF !important;
}

ul.nav-tabs li.basemap.active a{
color: #FFF;
}


li.basemap.chevron1 i{
font-size: 22px;
color: #FFF;
}

li.basemap.chevron1{
padding: 10px;
}

#close-panel-right i{
font-size: 24px;
color: #FFF;
}

#close-panel-right{
padding: 9px;
}

#close-panel-right:hover, #close-panel-left:hover{
cursor: pointer;
}

ul.nav.nav-tabs {
    font-size: 14px;
    font-weight: bold;
    border-bottom-color: transparent;
    /* margin-left: 10px; */
    margin-top: 0px;
    background: #0056b3;
    border-bottom: none;
}
.no-padding {
    padding-left: 0;
    padding-right: 0;
}

ul.nav-tabs li.basemap{
margin: 0;
}
</style>

<!-- nepali / english -->

<?php


$ward_nep='<option value="0" selected>वडा छान्नुहोस् </option>
<option value="1" >वडा 1</option>
<option value="2" >वडा 2</option>
<option value="3" >वडा 3</option>
<option value="4" >वडा 4</option>
<option value="5" >वडा 5</option>
<option value="6" >वडा 6</option>
<option value="7" >वडा 7</option>
<option value="8" >वडा 8</option>';

$ward_eng='<option value="0" selected>Select ward</option>
<option value="1" >ward no 1</option>
<option value="2" >ward no 2</option>
<option value="3" >ward no 3</option>
<option value="4" >ward no 4</option>
<option value="5" >ward no 5</option>
<option value="6" >ward no 6</option>
<option value="7" >ward no 7</option>
<option value="8" >ward no 8</option>';


$cat_eng='<option value="0" selected>Select Category</option>
<option value="Flood">Flood</option>
<option value="Landslide">Landslide</option>
<option value="Fire">Fire</option>
<option value="Lightning">Lightning</option>
<option value="Waste">Waste</option>
<option value="Road">Road</option>
<option value="Others" >Others</option>
';

$cat_nep='<option value="0" selected>प्रकार छान्नुहोस्</option>
<option value="Fire" >बाढी</option>
<option value="Earth" >पहिरो</option>
<option value="Water" >आगलागी</option>
<option value="Water" >चट्याङ</option>
<option value="Water" >फोहोर मैला</option>
<option value="Water" >सडक</option>
<option value="Others" >अन्य</option>
';

$status_eng='<option value="0" selected>Status</option>
<option value="pending" >Pending</option>
<option value="ongoing" >Ongoing</option>
<option value="completed" >Completed</option>
';

$status_nep='<option value="0" selected>स्थिति छान्नुहोस्</option>
<option value="pending">काम हुन बाकि </option>
<option value="ongoing">काम भैरहेको </option>
<option value="completed">काम भैसकेको </option>
';

?>

<!-- nepali / english -->

<div id="conten-map">
  <div class="container-fluid">
    <div class="row">
  <div class="col-md-6 no-padding col-sm-12">
    <div class="panel-heading">
      <ul class="nav nav-tabs" role="tablist">
        <!-- <li class="basemap chevron1" id="close-panel-left">

          <i class="la la-bars"></i>
        </li> -->
        <li role="presentation" class="basemap active "><a href="report_page" ><span style="font-size: 16px;">Map</span></a></li>
        <li role="presentation" class="basemap"><a href="map_reports" ><span  style="font-size: 16px;">Data</span></a></li>
        <!-- <li role="presentation" class="basemap active"><a href="<?php echo base_url()?>map_download"> -->
          <!-- <img src="<?php echo base_url()?>assets/img/map-down.png" class="test-icon"> -->
          <!-- <span  style="font-size: 16px;"><?php echo $site_info['download']?> <?php echo $site_info['map']?></span></a></li> -->

      </ul>
    </div>
  </div>
  <div class="col-md-6 no-padding col-sm-12" style="background: #0056b3">
    <div class="panel-heading right pull-right">
      <ul class="nav nav-tabs" role="tablist">
        <!-- <li class=" basemap chevron2 navbar-right" id="close-panel-right">

          <i class="la la-info-circle"></i>
        </li> -->
      </ul>
    </div>
  </div>

  </div>
  </div>

  <div class="wrapper">

    <!-- Sidebar Holder -->
    <div class="row">
      <div class="col-md-3 col-sm-12" style="padding-right: 0;">

        <div id="sider">

          <!-- problems reposrting sections starts -->

          <div class="panel" id="reporting">
            <!-- report title -->
            <div class="page-header">
              <p>Citizen reports</p>
            </div>

            <div class="panel-body">

              <!-- report 1 -->

              <!-- report 5 -->
              <?php foreach($report_data as $data){ ?>

                <div class="news-panel clearfix report_div" value="<?php echo $data['latitude'] ;?>" name="<?php echo $data['longitude'] ;?>">
                  <div class="row">
                    <div class="col-md-3 blog-panel">
                      <a href="#" class="thumbnail">
                        <img src="<?php echo $data['photo_thumb'] ;?>" alt="image">
                      </a>
                    </div>
                    <div class="fancy col-md-9">
                      <h5><?php echo $data['incident_type'] ;?></h5>
                      <p class="small">
                        <?php echo $data['message'] ;?>
                        <!-- readmore -->
                        <a  class="naya" data-toggle="modal" data-target=".<?php echo $data['id'] ;?>_">See More</a>

                        <div class="modal fade <?php echo $data['id'] ;?>_" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true" style="color: #111" class="exit">×</span><span class="sr-only">Close</span></button>
                              <div class="container">
                                <h3>Incident Type : <?php echo $data['incident_type'] ;?></h3>
                                <hr>
                                <div class="row">
                                  <div class="col-md-4"><img src="<?php echo $data['photo_thumb'] ;?>" alt="image" class="read-mor"></div>
                                  <div class="col-md-8">
                                    <?php echo $data['message'] ;?>
                                    <div class="row sent">
                                      <div class="col-md-4">Name: <?php echo $data['name'] ;?></div>
                                      <div class="col-md-4"> Date: <?php echo $data['incident_time'] ;?></div>
                                      <!-- <div class="col-md-4">3 Days Ago</div> -->
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- read more modal -->
                      </p>

                    </div>
                  </div>
                  <hr class="horz">
                  <div class="row">
                    <div class="col-md-12">
                      <ul class="list-inline tiny">
                        <li class="list-inline-item"><i class="fa fa-list" aria-hidden="true"></i> Category: <a href="#"><?php echo $data['incident_type'] ;?></a> </li>
                        <li class="list-inline-item"><i class="icon-calendar" aria-hidden="true"></i> Status: <a href="#"> <?php echo $data['status'] ;?></a></li>
                        <li class="list-inline-item"><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo $data['incident_time'] ;?></li>
                      </ul>
                    </div>
                  </div>
                </div>

              <?php } ?>
              <!-- //end -->
              <div class="text-center mt-3 mb-3">
                <a href="#" title="" class="btn btn-primary btn-sm">View All <i class="la la-arrow-right"></i></a>
              </div>
            </div>
          </div>
          <!-- problems reposrting sections ends -->

        </div>
      </div>

      <div class="col-md-9 col-sm-12 jana-map">
        <?php
        $error=	$this->session->flashdata('msg');
        if($error){ ?>
          <div class="alert alert-danger alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Message!!!!</strong> <?php echo $error ; ?>
          </div>
          <?php
        }
        ?>
        <div id="filter-section" class="filter-wrap">

          <form action="" method="post">

            <div class="row" style="margin-left: 0; margin-right: 0;">



              <!-- map contrl items -->
              <div class="col-md-4 no-padding">
                <div class="text-center dropdown-category_dropdown filter-check">
                  <div class="form-group" style="margin-bottom: 0;">
                    <input name="from_date" class="form-control" type="date" id="datepicker" placeholder="From">
                    <input name="to_date" class="form-control" type="date" id="datepicker1" placeholder="To">
                  </div>
                </div>
              </div>

              <div class="col-md-2 no-padding">
                <div class="text-center dropdown-category_dropdown filter-check">
                  <select name="ward" class="custom-select multiselect-icon">


                    <?php

                    if($report_lang == 'en'){

                      echo $ward_eng;

                    }else{

                    echo $ward_nep;

                    }



                     ?>
                    <!-- <option value="1" >ward no 1</option>
                    <option value="2" >ward no 2</option>
                    <option value="3" >ward no 3</option>
                    <option value="4" >ward no 4</option>
                    <option value="5" >ward no 5</option>
                    <option value="6" >ward no 6</option>
                    <option value="7" >ward no 7</option>
                    <option value="8" >ward no 8</option> -->
                  </select>
                </div>
              </div>

              <div class="col-md-2 no-padding">
                <div class="text-center dropdown-category_dropdown filter-check">
                  <select name="incident_type" class="custom-select multiselect-icon">
                    <?php

                    if($report_lang == 'en'){

                      echo $cat_eng;

                    }else{

                    echo $cat_nep;

                    }



                     ?>

                  </select>
                </div>
              </div>


              <div class="col-md-2 no-padding">
                <div class="text-center dropdown-category_dropdown filter-check">
                  <select name="status" class="custom-select multiselect-icon">

                                        <?php

                                        if($report_lang == 'en'){

                                          echo $status_eng;

                                        }else{

                                        echo $status_nep;

                                        }



                                         ?>
                  </select>
                </div>
              </div>

              <div class="col-md-2 no-padding">
                <div class="text-center dropdown-category_dropdown filter-check">
                  <button name="submit" class="btn btn-light btn-sm" type="submit"><?php echo $site_info['apply'] ?></button>
                </div>
              </div>


            </div>
          </form>
        </div>

        <!-- main map -->
        <div class="position-relative">
          <div class="row no-gutters">
            <div class="col-md-9">
              <div id="filter-section-toggle" class="filter-toggle">
                <i class="la la-filter"></i> Filter
              </div>
              <div id="map" style="margin-top: 0;"></div>
            </div>
            <div class="col-md-3">
              <!-- <div class="info-panel bg-white"> -->
              <div class="bg-white">
                <!-- <div class="panel-toggle"><i class="la la-close"></i></div> -->
                <div class="panel-content padding">
                  <div id="bar_graph" style="display:block;" >
                    <div class="holders">
                      <h6 class="clearfix"><strong class="pull-left">Wards</strong>  <span class="indicator pull-right badge badge-primary" data-toggle="tooltip" data-placement="top" title="No. of reports per ward
">?</span></h6>
                      <div id="graphic"></div>
                    </div>
                    <div class="holders">
                      <h6 class="clearfix"><strong>Incident Type</strong class="pull-left"><span class="indicator pull-right badge badge-primary" data-toggle="tooltip" data-placement="top" title="No. of reports per incident type">?</span></h6>
                      <div id="graphic1"></div>
                    </div>
                    <div class="holders">
                      <h6 class="clearfix"><strong>Report status</strong class="pull-left"><span class="indicator pull-right badge badge-primary" data-toggle="tooltip" data-placement="top" title="No. of reports per report status">?</span></h6>
                      <div id="graphic2"></div>
                    </div>
                  </div>
                  <!-- <ul class="chart-panel-list">
                  <li class="chart-wrap">
                  <h6>Ward</h6>
                  <ul class="h-chart-list">
                  <li>
                  <label>Ward 1</label>
                  <div class="progress bg-white" style="height: 13px;">
                  <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </li>
              <li>
              <label>Ward 2</label>
              <div class="progress bg-white" style="height: 13px;">
              <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </li>
          <li>
          <label>Ward 1</label>
          <div class="progress bg-white" style="height: 13px;">
          <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
      </li>
      <li>
      <label>Ward 2</label>
      <div class="progress bg-white" style="height: 13px;">
      <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
  </li>
  <li>
  <label>Ward 1</label>
  <div class="progress bg-white" style="height: 13px;">
  <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</li>
<li>
<label>Ward 2</label>
<div class="progress bg-white" style="height: 13px;">
<div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</li>
</ul>
</li>
<li class="chart-wrap">
<h6>Type</h6>
<ul class="h-chart-list">
<li>
<label>Fire</label>
<div class="progress bg-white" style="height: 13px;">
<div class="progress-bar" role="progressbar" style="width: 55%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</li>
<li>
<label>Flood</label>
<div class="progress bg-white" style="height: 13px;">
<div class="progress-bar" role="progressbar" style="width: 35%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</li>
<li>
<label>Fire</label>
<div class="progress bg-white" style="height: 13px;">
<div class="progress-bar" role="progressbar" style="width: 55%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</li>
<li>
<label>Flood</label>
<div class="progress bg-white" style="height: 13px;">
<div class="progress-bar" role="progressbar" style="width: 35%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</li>
</ul>
</li>
<li class="chart-wrap">
<h6>Status</h6>
<ul class="h-chart-list">
<li>
<label>Pending</label>
<div class="progress bg-white" style="height: 13px;">
<div class="progress-bar" role="progressbar" style="width: 55%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</li>
<li>
<label>Ongoing</label>
<div class="progress bg-white" style="height: 13px;">
<div class="progress-bar" role="progressbar" style="width: 35%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</li>
<li>
<label>Completed</label>
<div class="progress bg-white" style="height: 13px;">
<div class="progress-bar" role="progressbar" style="width: 55%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</li>
</ul>
</li>
</ul> -->
</div>
</div>
</div>
</div>


</div>
</div>
</div>

</div>
</div>
<script type="text/javascript">
$(document).ready(function(){

 $('[data-toggle="tooltip"]').tooltip();

  $('#filter-section-toggle').click(function(){
    $('#filter-section').toggleClass('active');
    $(this).find('i').toggleClass('la-close');
  });
  $('.panel-toggle').click(function(){
    $(this).parent('.info-panel').addClass('d-none');
  });
});
</script>
<script>

var report = '<?php echo $report_map_layer ;?>';
var map_lat='<?php echo $map_set['map_lat'] ?>';
var map_long='<?php echo $map_set['map_long'] ?>';
var map_zoom='<?php echo $map_set['map_zoom'] ?>';
report_layer = JSON.parse(report);
//console.log(report_layer);
/*-- LayerJS--*/
$(document).ready(function(){
  $(".layer-toggle").click(function(){
    $(".panel.panel-success").toggle(800);
    $(".layer-toggle i").toggleClass("fa-chevron-right");
  });

  //map part

  var map = L.map('map').setView([map_lat,map_long], map_zoom);
  map.attributionControl.addAttribution("<a href='http://www.naxa.com.np' title = 'Contributor'>NAXA</a>");
  L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'}).addTo(map);

    var osm = L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: '&copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors'
    });

    googleStreets = L.tileLayer('http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}',{
      maxZoom: 20,
      subdomains:['mt0','mt1','mt2','mt3']
    });
    googleHybrid = L.tileLayer('http://{s}.google.com/vt/lyrs=s,h&x={x}&y={y}&z={z}',{
      maxZoom: 20,
      subdomains:['mt0','mt1','mt2','mt3']
    });
    googleSat = L.tileLayer('http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}',{
      maxZoom: 20,
      subdomains:['mt0','mt1','mt2','mt3']
    });
    googleTerrain = L.tileLayer('http://{s}.google.com/vt/lyrs=p&x={x}&y={y}&z={z}',{
      maxZoom: 20,
      subdomains:['mt0','mt1','mt2','mt3']
    });
    //var none = "";
    var baseLayers = {
      "OpenStreetMap": osm,
      "Google Streets": googleStreets,
      "Google Hybrid": googleHybrid,
      "Google Satellite": googleSat,
      "Google Terrain": googleTerrain//,
      //"None": none
    };

    map.addLayer(osm);
    layerswitcher = L.control.layers(baseLayers, {}, {collapsed: true}).addTo(map);

    $(".layer-toggle").click(function(){
      $(".panel.panel-success").toggle(1000);
      $(".layer-toggle i").toggleClass("fa-chevron-right");
    });
    var sankhu = new L.geoJson.ajax("http://changu.dimpnepal.org/geojson/Changunarayan.geojson", {

      onEachFeature: function(feature,layer){

        layer.on('click', function() {
          map.fitBounds(layer.getBounds());
        });
        layer.setStyle({
          fillColor:"Green",
          fillOpacity:0,
          weight: 1,
          opacity: 1,
          color: 'black',
          //dashArray: '3'

        });

      }


    }).addTo(map);


    sankhu.on('data:loaded', function (data) {
      map.fitBounds(sankhu.getBounds());
    });

    var report_map = new L.GeoJSON(report_layer, {
      pointToLayer: function(feature, latlng) {
        icons = L.icon({
          //iconSize: [27, 27],
          iconAnchor: [13, 27],
          popupAnchor:  [2, -24],
          iconUrl: 'https://unpkg.com/leaflet@1.0.3/dist/images/marker-icon.png'
        });
        //console.log(icon.options);
        var marker = L.marker(latlng, {icon: icons});
        return marker;

      },

      onEachFeature: function(feature, layer) {
        console.log(feature.properties.incident_type);
        layer.bindPopup(feature.properties.incident_type);
        //feature.properties.layer_name = "transit_stops";

      }
    });

    report_map.on('data:loaded', function (data) {


    });
    report_map.addTo(map);



    //filter start


    $('.report_div').click(function(){

      var long =$(this).attr("name");
      var lat =$(this).attr("value");
      console.log(typeof lat);
      console.log(long);

      map.setView([parseFloat(lat),parseFloat(long)], 18);
      //$.ajax({
      //  url: 'ReportController/search?data='+srch,


      //  success: function(response) {
      //alert(response);
      //var srchd= JSON.parse(response);
      //  alert(response);


      //     map.removeLayer(report_map);s
      //   single_report=JSON.parse(response);
      //
      // console.log(parseFloat(single_report.features.geometry.coordinates[0]));

      // var single_map = new L.GeoJSON(single_report, {
      //     pointToLayer: function(feature, latlng) {
      //       icons = L.icon({
      //         //iconSize: [27, 27],
      //         iconAnchor: [13, 27],
      //         popupAnchor:  [2, -24],
      //         iconUrl: 'https://unpkg.com/leaflet@1.0.3/dist/images/marker-icon.png'
      //       });
      //       //console.log(icon.options);
      //       var marker = L.marker(latlng, {icon: icons});
      //       return marker;
      //
      //     },
      //     onEachFeature: function(feature, layer) {
      //       layer.bindPopup(feature.properties.name);
      //       //feature.properties.layer_name = "transit_stops";
      //
      //     }
      //   });

      // single_map.on('data:loaded', function (data) {
      //
      //   map.addLayer(single_map);
      //
      //
      // });

      //map.setView(parseFloat(single_report.features.geometry.coordinates[1]),parseFloat(single_report.features.geometry.coordinates[0]), 18);


      //}



      //});

    });





    //filter end




    //start chart
    chart_dataa='<?php echo $bar_ward ?>'
    chart_data=(JSON.parse(chart_dataa));

    chart_dataa1='<?php echo $bar_cat ?>'
    chart_data1=(JSON.parse(chart_dataa1));

    chart_dataa2='<?php echo $bar_stat ?>'
    chart_data2=(JSON.parse(chart_dataa2));
    console.log(chart_data2);
    // chart_data=[
    //          {"name": "1", "value": 201 },
    //          {"name": "2", "value": 20 },
    //          {"name": "3", "value": 80 },
    //          {"name": "4", "value": 102 },
    //          {"name": "5", "value": 300 },
    //          {"name": "6", "value": 233 },
    //          {"name": "7", "value": 100 }
    //          ];
    function CreateChart(chart_data, bar_id){
      data = chart_data.sort(function (a, b) {
        // console.log(d3.ascending(a.value, b.value));
        return d3.descending(a.name, b.name);
      })
      var hig=75;
      if(bar_id=="graphic" || bar_id == "graphic1"  ){
        hig=160;
      }
      //set up svg using margin conventions - we'll need plenty of room on the left for labels
      var margin = {
        top: 5,
        right: 10,
        bottom: 5,
        left: 70
      };

      var width = 120 - margin.left - margin.right,
      height = hig - margin.top - margin.bottom;

      var svg = d3.select("#"+bar_id).append("svg")
      .attr("width", width + margin.left + margin.right + 110)
      .attr("height", height + margin.top + margin.bottom)
      .append("g")
      .style("margin-top", "30px")
      .attr("transform", "translate(" + margin.left + "," + margin.top + ")");

      var x = d3.scale.linear()
      .range([0, width])
      .domain([0, d3.max(chart_data, function (d) {
        return d.value;
      })]);

      var y = d3.scale.ordinal()
      .rangeRoundBands([height, 0], .3)
      .domain(chart_data.map(function (d) {
        if(bar_id=="graphic"){
          return 'Ward'+' '+d.name;
        }else{
          return d.name;
        }

      }));

      //make y axis to show bar names
      var yAxis = d3.svg.axis()
      .scale(y)
      //no tick marks
      .tickSize(0)
      .orient("left");

      var gy = svg.append("g")
      .attr("class", "y axis")
      .call(yAxis)

      var bars = svg.selectAll(".bar")
      .data(chart_data)
      .enter()
      .append("g")

      //append rects
      bars.append("rect")
      .attr("class", "bar")
      .attr("y", function (d) {
        if(bar_id=="graphic"){
          return y('Ward'+' '+d.name);
        }else{
          return y(d.name);
        }

      })
      .attr("height", y.rangeBand())
      .attr("x", 0)
      .attr("width", function (d) {
        return x(d.value);
      });

      //add a value label to the right of each bar
      bars.append("text")
      .attr("class", "label")
      //y position of the label is halfway down the bar
      .attr("y", function (d) {
        if(bar_id=="graphic"){
          return y('Ward'+' '+d.name) + y.rangeBand() / 2 + 4;
        }else{
          return y(d.name) + y.rangeBand() / 2 + 4;
        }

      })
      //x position is 3 pixels to the right of the bar
      .attr("x", function (d) {
        return x(d.value) + 3;
      })
      .text(function (d) {
        return d.value;
      });

    }
    bar_id="graphic";
    bar_idd="graphic1";
    bar_iddd="graphic2";
    CreateChart(chart_data, bar_id);
    CreateChart(chart_data1, bar_idd);
    CreateChart(chart_data2, bar_iddd);
    //chart end





  }); //document --ends
  $('#datepicker').datepicker({
    dateFormat: 'dd/mm/yy'
  });
  </script>
