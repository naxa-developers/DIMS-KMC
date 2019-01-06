

<style>

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

.responstable th {
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
.responstable {
  margin: 1em 0em;
  width: 100%;
  overflow:auto;
  background: #FFF;
  color: #000;
  border-radius: 0px;
  border: 1px solid #1f5cb2;
  font-size: 16px;
}
.responstable tr {
  border: 1px solid #D9E4E6;
}
.responstable tr:nth-child(odd) {
  background-color: #EAF3F3;
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

.tabdrop .dropdown-menu a{
  padding: 20px;
}
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
 #map-table-jana .text-center h3{

 }

 #map-table-jana .report-down{
   padding: 25px;
   border-bottom: 1px solid #e7e7e7;
 }

 #map-table-jana .repo_filter{
   margin: 30px auto 15px;
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




<!-- table List -->




<div class="container">
<div id="map-table-jana">

  <div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="health" role="tabpanel" aria-labelledby="health-tab">
      <div class="row">
        <div class="col-md-12">
          <div class="p-4">
            <div class="row">
                  <div class="col-md-9"><h4 class="text-uppercase m-0"><strong><?php echo $name ?> Data Table </strong></h4></div>
                  <div class="col-md-3 clearfix">
                    <!-- <a href="get_csv_emergency?type=health&&name=Health_Institutions&&tbl=emergency_contact"><button type="submit" name="upload_data" class="btn btn-danger" style="background-color: #1f5cb2;border-color: #1f5cb2;margin-top: -7px; float: right;"><i class="fa fa-download"></i> Download</button></a> -->
                  </div>
            </div>
          </div>
      </div>
      </div>
      <div class="row" id="reportable">


       <!-- responsive table for displaying contact directory -->
       <table  class="table table-striped table-bordered table-hover"  id="hydropower">
         <thead class='thead-light' >
        <tr>

        <?php foreach ($data[0] as $key => $value){

            if($key == "the geom"){



            }else{




          ?>

          <th><strong><?php echo $key ?></strong></th>
        <?php }}?>

        </tr>
        </thead>


       <?php foreach ($data as $v) {

        ?>

        <tr class="tr_tbl">
           <?php foreach ($v as $key => $value ) {

             if($key == 'the geom'){

             }else{

             ?>
          <td><?php echo $value ?></td>
<?php } }?>
        </tr>
 <?php } ?>

      </table>
    </div>
  </div>




</div>
</div>
</div>

<script src="<?php echo base_url()?>assets/js/bootstrap-tabdrop.js"></script>
<script type="text/javascript">
 $(".nav-tabs").tabdrop();




  function myFunction() {
    // Declare variables
   var  input, filter, div, tr, i ,j;
    input = document.getElementById('myInput');

    filter = input.value.toUpperCase();

  //
     div = document.getElementsByClassName("tab-pane");
  //
     // td = document.getElementsByTagName('td');
     tr = document.getElementsByClassName('tr_tbl');
      // console.log(td);
  //   console.log(h5);
  //   console.log(div);
  //   console.log(filter);
  //   console.log(input);
  //
  //   // Loop through all list items, and hide those who don't match the search query
 // var ab='Juddha Barun Yantra Karyalaya'
 // console.log(ab.toUpperCase().indexOf(filter));
console.log(tr);
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
