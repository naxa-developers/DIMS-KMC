<link href="sitemapstyler/sitemapstyler.css" rel="stylesheet" type="text/css" media="screen" />
<script type="text/javascript" src="sitemapstyler/sitemapstyler.js"></script>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.3/dist/leaflet.css"/>
<script src="https://unpkg.com/leaflet@1.0.3/dist/leaflet.js"></script>
<!--<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet-ajax/2.1.0/leaflet.ajax.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/randomcolor/0.5.2/randomColor.js"></script>

<!-- date -->




<style>
.leaflet-left .leaflet-control {
  margin-left: 1300;
  margin-bottom: 10;
}

.leaflet-top .leaflet-control {
  margin-top: 26px;
}


button.layer-toggle {
  margin-top: 250px;
  background: #668bb1;
  border-color: transparent;
  border-radius: 0px;
  outline: none;
  position:  relative;
  z-index:  999;
}
body {
  font-size: 0.8em !important;
  font-weight: 400;
  line-height: 1.5;
  text-align: left;
  background-color: #fff;}
  label{margin-left: 20px;}
  #datepicker{width:180px; margin: 0 20px 20px 20px;}
  #datepicker > span:hover{cursor: pointer;}
  </style>


  <div id="wrapper">

    <!--sub-menu-->
    <div class="icon-bar icon">
      <a class="active" href="mapt.php"><i class="fa fa-map"></i> Maps</a>
      <a href="#"><i class="fa fa-database"></i> Data</a>
    </div>

    <!--ends sub-menu-->

    <div id="map" style="width:100%; height:550px; z-index: 4; margin-top:0px;">

    </div>


    <div id="over_map" style ="margin-top: 36px;">
      <div class="panel panel-danger">
        <!-- search -->
        <form  action="" method="POST">
          <label><b> Date : </b></label>
          <div class="row">
            <!-- Include Bootstrap Datepicker -->
            <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.min.css" />
            <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css" />

            <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>



            <div class="col-md-6 date">
              <div class="input-group input-append date" id="datePicker1">
                <input type="text" class="form-control" name="from_date" placeholder="From" />
                <span class="input-group-addon add-on"><span class="fa fa-calendar repo" style="font-size: 14px;"> </span></span>
              </div>
            </div>
            <div class="col-md-6 date">
              <div class="input-group input-append date" id="datePicker2">
                <input type="text" class="form-control" name="to_date" placeholder="To" />
                <span class="input-group-addon add-on"><span class="fa fa-calendar repo" style="font-size: 14px;"> </span></span>
              </div>
            </div>

          </div>

          <!-- search -->

          <div class="form-group" style="margin-top: 8px;">
            <select  name="category" class="form-control" id="exampleSelect1">
              <option value="0">Select Categories</option>
              <option value="fire">1</option>
              <option value="water">2</option>
              <option value="earth">3</option>

            </select>
          </div>
          <div class="text-center">
            <button class="btn btn-success btn-sm text-center" type="submit" name="submit"  style="margin-top: 0px;">Apply</button>
          </div>

        </form>
      </div>
      <!-- left report Data -->
      <div class="panel panel-default report">
        <div class="panel-body problem">


          <?php foreach($report_data as $data){ ?>

            <div class="row problem report_div" value="<?php echo $data['latitude'] ;?>" name="<?php echo $data['longitude'] ;?>" >
              <div class="col-sm-4"><img src="./assets/img/help.png" class="problems"></div>
              <div class="col-sm-8"><span class="ttl"><?php echo $data['incident_type'] ;?></span>

                <p><?php echo $data['message'] ;?></p>

              </div>
              <hr style="width: 100%; margin-top: 0px;">
              <p class="men text-center">Category: <?php echo $data['incident_type'] ;?> | Status: problem |  2 hours ago |  Sender: <?php echo $data['name'] ?></p>

            </div>

          <?php } ?>

          <br>




          <br>



          <br>



          <br>






        </div>
      </div></div></div>


      <!-- report data -->
    </div>




    <script>

    var report = '<?php echo $report_map_layer ;?>';
    report_layer = JSON.parse(report);
    //console.log(report_layer);
    /*-- LayerJS--*/
    $(document).ready(function(){
      $(".layer-toggle").click(function(){
        $(".panel.panel-success").toggle(800);
        $(".layer-toggle i").toggleClass("fa-chevron-right");
      });

      //map part

      var map = L.map('map');//.setView([27.7005033, 85.4328162], 13);
      L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'}).addTo(map);
        $(".layer-toggle").click(function(){
          $(".panel.panel-success").toggle(1000);
          $(".layer-toggle i").toggleClass("fa-chevron-right");
        });
        var sankhu = new L.geoJson.ajax("http://localhost/vos/geojson/Shankharapur.geojson", {

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
            layer.bindPopup(feature.properties.name);
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











      }); //document --ends

      </script>
      <script type="text/javascript">
      document.onreadystatechange = function () {
        var state = document.readyState
        if (state == 'interactive') {
          document.getElementById('contents').style.visibility="hidden";
        } else if (state == 'complete') {
          setTimeout(function(){
            document.getElementById('interactive');
            document.getElementById('load').style.visibility="hidden";
            document.getElementById('contents').style.visibility="visible";
          },1000);
        }
      }
      </script>




      <script>
      $(document).ready(function() {
        $('#datePicker1')
        .datepicker({
          format: 'mm/dd/yyyy'
        })

        $('#datePicker2')
        .datepicker({
          format: 'mm/dd/yyyy'
        });







        });

        </script>
