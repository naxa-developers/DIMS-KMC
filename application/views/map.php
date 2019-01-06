  
  <style>
  
  .leaflet-popup-content {
   
    overflow: auto;
	}
	
	div#map {
    margin-top: 44px ;
}

  </style>
  
  
   
 <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css"/>
 <link rel="stylesheet" href="<?php echo base_url();?>assets/css/leaflet.label.css">
 <script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js"></script>
 <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
 <script type="text/javascript" src="<?php echo base_url();?>assets/js/leaflet.label.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <!-- div is created to keep the map in its certain area whichever amount of area is located to display the map -->

  <div style = "position:absolute; margin-left:513px; margin-top:-33px; z-index: 7; font-size:0.5 em">
        <select id = "selectInstallment" style = "height:35px;">
          <option class = "installment" value="default" selected disabled>Filter Municipality</option>
          <option class = "installment" value="kathmandu">Kathmandu</option>
          <option class = "installment" value="lalitpur">Lalitpur</option>
          <option class = "installment" value="kritipur">Kritipur</option>
          <option class = "installment" value="Lubhu">Lubhu</option>
          <option class = "installment" value="3">All Layers</option>
          
        </select>
    </div>
 
 
 
  <div id="map" style="width:100%; height:90%; "> </div>
 <!--  <script>
  // this var geo is done to convert the php version of $geo data into js version as geo from $geo

  var geo = '<?php echo $geo; ?>';

  //json error checker to check whether the format of json is correct or not
        JSON._parse = JSON.parse;
        JSON.parse = function (json) {
            try {
                return JSON._parse(json)
            } catch(e) {
                jsonlint.parse(json)
            }
        }

        JSON.parse(geo) // either a valid object, or an meaningful exception

// variable geojson is done to convert that parsed geo JSON format into useable variable format of geojson.
  var geojson= JSON.parse(geo);
  //console.log(geojson);
</script>
 -->

<script>

$(document).ready(function(){
map = L.map("map", {
				center: [27.701871, 85.315297],
				zoom: 12
		});
		
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
		
		map.addLayer(googleHybrid);
		layerswitcher = L.control.layers(baseLayers, {}, {collapsed: true}).addTo(map);

        markers_ka = [];
	    markers_la =  [];
		markers_kri = [];
		markers_lu = [];
		
    
var geoJsonLayer = new L.GeoJSON(geojson,
  {
    pointToLayer: function(feature,Latlng)
    {
		
       icons=L.icon({
		iconAnchor: [13, 27],
		popupAnchor:  [2, -24],
      iconUrl: "https://unpkg.com/leaflet@1.0.3/dist/images/marker-icon.png"
    });
    var marker = L.marker(Latlng,{icon: icons});
    return marker;
  },
// with onEachFeature the task is carried out on Each of the point of coordinates or other properties Like( Creating table in each point of cordinates and etc)

	onEachFeature: function(feature,layer){
	
    layer.bindPopup('<table class="table table-bordered"><tr><th>Surveyor</th><th>District</th><th>Municipality</th><th>Ward Num</th><th>Address</th></tr> <tr><td>'+ feature.properties.name_of_surveyor +'</td><td>'+feature.properties.name_of_district+ '</td><td>'+feature.properties.name_of_municipality+ '</td><td>'+feature.properties.ward_no+'</td><td>'+feature.properties.address+'</td></tr> </table>');
 // table is created to put all the data of the database into the marker on one click
//slayer.bindLabel('sdfsaas');
	
       if(feature.properties.name_of_municipality.toLowerCase() == "kathmandu"){
                            markers_ka.push(layer);
                        }
        				else if(feature.properties.name_of_municipality.toLowerCase() == "lalitpur"){
        				    markers_la.push(layer);
        				}
        				else if(feature.properties.name_of_municipality.toLowerCase() == "kirtipur"){
        				    markers_kri.push(layer);
        				}
        				else {
        				    markers_lu.push(layer);
        				}
        				





}
 
});
     
    console.log(markers_ka);

		var ka = L.featureGroup(markers_ka).addTo(map);
		var la = L.featureGroup(markers_la).addTo(map);
		var kri = L.featureGroup(markers_kri).addTo(map);
		var lu = L.featureGroup(markers_lu).addTo(map);



$("#selectInstallment").on('change',function(){
	        //console.log();
	        //get selected item index
	        index = $(this).context.selectedIndex;
	       /* var not_received = L.featureGroup(markers0).addTo(map);
		var first_received = L.featureGroup(markers1).addTo(map);
		var second_received = L.featureGroup(markers2).addTo(map);
		var third_received = L.featureGroup(markers3).addTo(map);*/
	        
	        if(index == 1){
      
      //console.log(ka.getBounds());
	                map.fitBounds(ka.getBounds());
	                
	                map.removeLayer(la);
	                map.removeLayer(kri);
	                map.removeLayer(lu);
	                
    	           if(!map.hasLayer(ka)){
    	               map.addLayer(ka);
    	           }
	            
	        }
	        else if(index == 2){
	                map.fitBounds(la.getBounds());
	                
	                map.removeLayer(ka);
	                map.removeLayer(kri);
	                map.removeLayer(lu);
	                
	                if(!map.hasLayer(la)){
    	               map.addLayer(la);
    	           }
	        }
	        else if(index == 3){
	                map.fitBounds(kri.getBounds());
	            
	                map.removeLayer(ka);
	                map.removeLayer(la);
	                map.removeLayer(lu);	
	                
	                if(!map.hasLayer(kri)){
    	               map.addLayer(kri);
    	           }
	        }
	        else if(index == 4){
	                    map.fitBounds(lu.getBounds());
	            
	                    map.removeLayer(ka);
    	                map.removeLayer(la);
    	                map.removeLayer(kri);	
    	                
    	                
    	                if(!map.hasLayer(lu)){
        	               map.addLayer(lu);
        	            }
	                }
	       else{
	           map.fitBounds(geoJsonLayer.getBounds());
    	                if(!map.hasLayer(ka)){
        	               map.addLayer(ka);
        	            }
    	                if(!map.hasLayer(la)){
        	               map.addLayer(la);
        	            }
    	                if(!map.hasLayer(kri)){
        	               map.addLayer(kri);
        	            }
    	                if(!map.hasLayer(lu)){
        	               map.addLayer(lu);
        	            }
	       }
	        
	    });
	    




});
</script>

