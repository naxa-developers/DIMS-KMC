
<div id="wrapper">
<div id="map" style="width:100%; height:600px; margin-top:0px;"> </div></div>


<script>

var layer_array = '<?php echo $layer_name; ?>';
var geo_array = '<?php echo $geo; ?>';

//
var cat_layer = '<?php echo $cat_map_layer; ?>';
var cat_tbl_array = '<?php echo $category_tbl; ?>';


//




layer_name = JSON.parse(layer_array);
geojson = JSON.parse(geo_array);


cat_layer_data = JSON.parse(cat_layer);
cat_tbl_array_name = JSON.parse(cat_tbl_array);

//console.log(nep);
// console.log(layer_name);
//console.log(cat_layer);

$(document).ready(function(){

 var map = L.map('map').setView([27.693547,85.440240], 13);
// map.scrollWheelZoom.disable();
map.options.maxBounds;  // remove the maxBounds object from the map options
//map.options.minZoom = 9;

 //map.options.minZoom = 14;
 //console.log("adfasfsadfasfasdfasfdasdfsafasdfsafasfasfsafsa");
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

 map.addLayer(googleStreets);
 layerswitcher = L.control.layers(baseLayers, {}, {collapsed: true}).addTo(map);

    function underscoreToSpace(naaaaame) {

        var underscored = naaaaame;

        var spaced = underscored.replace(/_/g, " ");

        return spaced;

    }

for(i=0; i<layer_name.length; i++){
window[''+layer_name[i]] = new L.GeoJSON(geojson[i],
{


//  pointToLayer: function(feature,Latlng)
//  {
//    icons=L.icon({
//    iconUrl: "https://unpkg.com/leaflet@1.0.3/dist/images/marker-icon.png"
//  });
//  var marker = L.marker(Latlng,{icon: icons});
//
// },
// with onEachFeature the task is carried out on Each of the point of coordinates or other properties Like( Creating table in each point of cordinates and etc)

onEachFeature: function(feature,layer){

 layer.on('click',function() {
 map.fitBounds(layer.getBounds());
});


                        var popUpContent = "";

                        popUpContent += '<table style="width:100%;" id="District-popup" class="popuptable">';

                        for (data in layer.feature.properties) {

                            // console.log('feature ', feature);

                            dataspaced = underscoreToSpace(data);

                            popUpContent += "<tr>" + "<td></td>" + "<td>" + "  " + layer.feature.properties[data] + "</td>" + "</tr>";

                        }

                        popUpContent += '</table>';



                        layer.bindPopup(L.popup({

                            closeOnClick: true,

                            closeButton: true,

                            keepInView: true,

                            autoPan: true,

                            maxHeight: 200,

                            minWidth: 250

                        }).setContent(popUpContent));


 layer.setStyle({

                 fillColor: randomColor(),
                 fillOpacity:0,
                 weight: 0.5,
                 opacity: 1,
                 color: 'black'//,
                 //dashArray: '3'

             });
// table is created to put all the data of the database into the marker on one click
//slayer.bindLabel('sdfsaas');



// console.log(feature);
}

}).addTo(map);

}



//cat map load
for(i=0; i<cat_tbl_array_name.length; i++){

  console.log(cat_tbl_array_name[i]);
window[''+cat_tbl_array_name[i]]= new L.GeoJSON(cat_layer_data[i],
{

  pointToLayer: function(feature,Latlng)
   {
     icons=L.icon({
     iconUrl: "https://unpkg.com/leaflet@1.0.3/dist/images/marker-icon.png"
   });
   var marker = L.marker(Latlng,{icon: icons});
       return marker;

  },




onEachFeature: function(feature,layer){

  
var popUpContent = "";

                        popUpContent += '<table style="width:100%;" id="District-popup" class="popuptable">';

                        for (data in layer.feature.properties) {
                          console.log(feature);

                            // console.log('feature ', feature);

                            dataspaced = underscoreToSpace(data);

                            popUpContent += "<tr>" + "<td></td>" + "<td>" + "  " + layer.feature.properties[data] + "</td>" + "</tr>";

                        }

                        popUpContent += '</table>';



                        layer.bindPopup(L.popup({

                            closeOnClick: true,

                            closeButton: true,

                            keepInView: true,

                            autoPan: true,

                            maxHeight: 200,

                            minWidth: 250

                        }).setContent(popUpContent));



},



}).addTo(map);
}
//cat map end








$( ".CheckBox" ).click(function( event ) {
     layerClicked = window[event.target.value];
 //console.log(layerClicked);
         if (map.hasLayer(layerClicked)) {
             map.removeLayer(layerClicked);
         }
         else{
             map.addLayer(layerClicked);
         } ;
 });


$( ".CheckBoxStart" ).click(function( event ) {
layerClicked1 = window[event.target.value];
map.addLayer(layerClicked1);
map.removeLayer(layerClicked1)

 });


 L.Mask = L.Polygon.extend({
   options: {
     stroke: false,
     color: '#333',
     fillOpacity: 0.5,
     clickable: true,

     outerBounds: new L.LatLngBounds([-90, -360], [90, 360])
   },

   initialize: function (latLngs, options) {

          var outerBoundsLatLngs = [
       this.options.outerBounds.getSouthWest(),
       this.options.outerBounds.getNorthWest(),
       this.options.outerBounds.getNorthEast(),
       this.options.outerBounds.getSouthEast()
     ];
         L.Polygon.prototype.initialize.call(this, [outerBoundsLatLngs, latLngs], options);
   },

 });
 L.mask = function (latLngs, options) {
   return new L.Mask(latLngs, options);
 };


 var coordinates = changu1[0].features[0].geometry.coordinates[0];

 var latLngs = [];
 for (i=0; i<coordinates.length; i++) {
   for(j=0; j<coordinates[i].length;j++){
     // console.log(coordinates[i][j]);
     latLngs.push(new L.LatLng(coordinates[i][j][1], coordinates[i][j][0]));
   }
 }


 L.mask(latLngs).addTo(map);




});//document
</script>
