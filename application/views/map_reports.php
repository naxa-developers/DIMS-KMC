
  <style>

   #map-table-jana{
        margin: 20px 0px 60px;
        background: #fff;
        overflow: hidden;
    }

    #reportable{
        overflow: auto;
        margin: 0.5em;
        /* margin-left: 253px; */
    }
    .table table-striped table-bordered table-hover {
  margin: 1em 0em;
  width: 100%;
  overflow: hidden;
  background: #FFF;
  color: #000;
  border-radius: 0px;
  border: 1px solid #1f5cb2;
  font-size: 16px;
}
.table table-striped table-bordered table-hover tr {
  border: 1px solid #D9E4E6;
}
.table table-striped table-bordered table-hover tr:nth-child(odd) {
  background-color: #EAF3F3;
}
.table table-striped table-bordered table-hover th {
  display: none;
  border: 1px solid #FFF;
  background-color: #7696c7;
  color: #FFF;
  padding: 1em;
}
.table table-striped table-bordered table-hover th:first-child {
  display: table-cell;
  text-align: center;
}
.table table-striped table-bordered table-hover th:nth-child(2) {
  display: table-cell;
}
.table table-striped table-bordered table-hover th:nth-child(2) span {
  display: none;
}
.table table-striped table-bordered table-hover th:nth-child(2):after {
  content: attr(data-th);
}
@media (min-width: 480px) {
  .table table-striped table-bordered table-hover th:nth-child(2) span {
    display: block;
}
.table table-striped table-bordered table-hover th:nth-child(2):after {
    display: none;
}
}
.table table-striped table-bordered table-hover td {
  display: block;
  word-wrap: break-word;
  max-width: 7em;
}
.table table-striped table-bordered table-hover td:first-child {
  display: table-cell;
  text-align: center;
  border-right: 1px solid #D9E4E6;
}
@media (min-width: 480px) {
  .table table-striped table-bordered table-hover td {
    border: 1px solid #D9E4E6;
}
}
.table table-striped table-bordered table-hover th, .table table-striped table-bordered table-hover td {
  text-align: left;
  margin: .5em 1em;
}
@media (min-width: 480px) {
  .table table-striped table-bordered table-hover th, .table table-striped table-bordered table-hover td {
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
color: #FFF;
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

<div id="conten-map">
  <div class="container-fluid">
    <div class="row">
  <div class="col-md-6 no-padding col-sm-12">
    <div class="panel-heading">
      <ul class="nav nav-tabs" role="tablist">
        <!-- <li class="basemap chevron1" id="close-panel-left">

          <i class="la la-bars"></i>
        </li> -->
        <li role="presentation" class="basemap  "><a href="report_page" ><span style="font-size: 16px;">Map</span></a></li>
        <li role="presentation" class="basemap active"><a href="map_reports" ><span  style="font-size: 16px;">Data</span></a></li>
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
</div>
<div class="container">

<div id="map-table-jana">

  <div class="row">
    <div class="col-md-12">
      <div class="p-4">
        <div class="row">
              <div class="col-md-9"><h4 class="text-uppercase m-0"><strong><?php echo $site_info['total_reports'] ?></strong></h4></div>
              <div class="col-md-3 clearfix">
                <a class="btn btn-primary btn-sm pull-right" href="ReportController/map_data_download"><i class="fa fa-cloud-download"></i> <?php echo $site_info['download'] ?></a>
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

<div class="" id="reportable">
 <!-- responsive table for displaying contact directory -->
 <table class="table table-striped table-bordered table-hover"  id="hydropower"  style="width:100%">
   <thead class='thead-light'>
  <tr>

    <th data-th="Incident detail"><span>Recieved Date</span></th>
    <!-- <th><span>Recieved Time</span></th> -->
    <th><span>Type of Incident</span></th>
    <th><span>Location</span></th>
    <th><span>Status</span></th>
    <th><span>Remarks</span></th>


  </tr>

  </thead>
    <!-- <td></td>
    <td><span class="report-form"><input type="date" class="form-control form-control-sm"></span></td>
    <td><span class="report-form"><input type="time" class="form-control form-control-sm"></span></td>
    <td><span class="report-form"><input type="text" class="form-control form-control-sm" placeholder="type of incident"></span></td>
    <td><span class="report-form"><input type="text" class="form-control form-control-sm" placeholder="place of incident"></span></td>
    <td><span class="report-form">
      <select class="custom-select multiselect-icon" name="code_status" style="margin: -22px 0px 0px; height: 32px;">
        <option value="0" selected disabled>Select</option>
        <option value="Solved">Actioned</option>
        <option value="Waiting">Pending</option>
        <option value="Issued">Verified</option>
        <option value="Piled">Queued</option>
      </select></span></td> -->
    <!-- <td><span class="report-form"><input type="text" class="form-control form-control-sm" placeholder="place of incident"></span></td> -->

<tbody>
  <?php foreach($data as $report){ ?>
  <tr>



    <td><?php echo $report['incident_time']?></td>
    <td><?php echo $report['incident_type']?></td>
    <td>Ward <?php echo $report['ward']?></td>
    <td><?php echo $report['status']?></td>
    <td><?php echo $report['message']?></td>



  </tr>
<?php } ?>
</tbody>
</table>

<!-- <div class="container">
<div class="row">
  <div class="col-md-12">
     <ul class="pagination  pull-right" style="padding-top: 20px; padding-bottom: 30px;">
      <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
      <li class="page-item"><a class="page-link" href="#">1</a></li>
      <li class="page-item"><a class="page-link" href="#">2</a></li>
      <li class="page-item"><a class="page-link" href="#">3</a></li>
      <li class="page-item"><a class="page-link" href="#">Next</a></li>
    </ul>
  </div>
</div>
</div> -->

</div>
</div>
</div>
</div>
