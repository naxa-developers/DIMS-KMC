$(document).ready(function(){
   
    map = L.map("myMap", {
				center: [map_lat,map_long],
				zoom: map_zoom,
				zoomControl:false
		});
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
		var none = "";
		var baseLayers = {
			"OpenStreetMap": osm,
			"Google Streets": googleStreets,
			"Google Hybrid": googleHybrid,
			"Google Satellite": googleSat,
			"Google Terrain": googleTerrain,
			"None": none
		};
		osm.addTo(map);
        // view_layername only categories name
        function loadDataToMap(geojson_layer,layer_name,load,marker_type,style,popup_content,view_layername){
            window[layer_name+ "_toggle"] = new L.geoJson(geojson_layer, {
                pointToLayer: function(feature,Latlng)
                {   //console.log(style.icon);
                    //console.log(marker_type);
                    if(marker_type=='icon'){

                        //console.log(style.icon);
                        icons=L.icon({
                            iconSize: [21, 27],
                            iconAnchor: [13, 27],
                            popupAnchor:  [2, -24],

                            iconUrl:style.icon
                        });
                        var marker = L.marker(Latlng,{icon:icons});
                    }else{
                        icons=L.icon({
                            iconUrl: "https://unpkg.com/leaflet@1.0.3/dist/images/marker-icon.png"
                        });
                        var marker = L.circleMarker(Latlng);
                        //for(data in style){
                    }
                    return marker;
                },
               
            onEachFeature: function (feature, layer) {

                 if(marker_type !='icon'){
            layer.setStyle(style);
          }


                     var popUpContent = ' <div class="rightSectionHeader">'+view_layername+'</div><br>';
                    popUpContent += '<table id="District-popup" class="table table-striped table-hover">';
                    for(data in popup_content.a){
                        colum_name = popup_content.a[data].col; //parsing data into column
                        name = popup_content.a[data].name;
                       
                        popUpContent += "<tr>" + "<th>"+name+"</th>" + "<td>" +  feature.properties[name]  + "</td></tr>";
                     
                      if(name == 'name' || name=='Name'){

            layer.bindPopup(feature.properties[name]);

          }

                }
                popUpContent += '</table>';

                layer.on("click",function() {
                     $("#popup").html("");
                    
                    //console.log(popUpContent);
                    //right popup section load
                     $(".rightSection").addClass("show");
                     $("#popup").show();
                    $(".rightinner > div").removeClass("show");
                     $("#bar").hide();
                     //right popup section load
                   
                    $("#popup").html(popUpContent); //loading popup
                });
                layer.on("mouseover", function (e) {
                         //e.target.setStyle({weight:3}); 
                        
                }).on("mouseout", function(e){
                         //e.target.setStyle({weight:2});
                        
                });

                }
            });

            if(load) {
                window[layer_name+ "_toggle"].addTo(map);
            }
        }

        //default load 
        for (var i = 0; i < default_cat_layer.length; i++) {
            //  console.log(default_cat_layer[i]);
            $('#'+category_tbl_default[i]+"_switch").prop('checked', true);
            //console.log(popup_content_default[i]);
            var style_defaultnew = JSON.parse(style_default[i]);
            var popup_content_default_parse = JSON.parse(popup_content_default[i]);
    		  loadDataToMap(default_cat_layer[i],category_tbl_default[i],true,marker_type_default[i],style_defaultnew
              ,popup_content_default_parse,cat_names[i]); //call for data load this is for firsst time default data load

        }//for close

        //load layer on click request
        $(".checkBox").one('click', function( event ) {
            var id= $(this)[0].id; 
            if($("#"+id).prop("checked")) {
                var value = $(this)[0].value.replace("_toggle","");
                    // console.log(id);alert(id);
                    $.ajax({
                    type: "POST",
                    data: {layername:value},
                    url:  "map/get_layers_onrequest",
                    beforeSend: function() {
                        //console.log(id);alert(id);
                    },
                    complete: function() {

                    },
                    success: function (result) {
                        var finaldata = JSON.parse(result);
                        //console.log(result);
                        var style = JSON.parse(finaldata.style);
                        var geojson = JSON.parse(finaldata.geojson);
                        var popup_content = JSON.parse(finaldata.popup_content);
                        var marker_type=finaldata.marker_type;
                        var view_layername=finaldata.view_layernames;
                        var summary_list=finaldata.summary_list;
                        var summarydata=finaldata.summarydata;
                        var summarycount=finaldata.summarycount;
                        //console.log(finaldata);
                        //console.log(popup_content);
                       loadDataToMap(geojson,value,true,marker_type,style,popup_content,view_layername);
                       //$("#info_")
                       loadSummaryData(summarycount,summarydata,summary_list);
                    }
                });
            }
        });

        function loadSummaryData(summarycount,summarydata,summary_list) {
            // console.log(summarycount);
            // console.log(summarydata);
            // console.log(summary_list);
            var summaryContent = '<div class="detItem">';
                summaryContent+='<div class="detItemHeader flex justify-content-between align-items-center">';
                    summaryContent+= '<div class="tcountHlder">';
                            summaryContent+= '<div class="toptext">Ward</div>';
                            summaryContent+= '<div class="counttext">32</div></div>';
                        summaryContent+= '<div class="closeitem">';
                            summaryContent+= '<i class="la la-times"></i></div></div>';
                    summaryContent+= '<div class="detItemContent">';
                        summaryContent+='<p class="dettext">Lorem adipisicing elit.magni eum ipsum provident ab molestias</p>';
                        summaryContent+= '<div class="detItemLinkWrp">';
                            summaryContent+= '<div class="detItemlink flex justify-content-between align-items-center">';
                                summaryContent+= '<div class="lname">Ward 1</div>';
                            summaryContent+= '<div>';
                        summaryContent+= '<div><i class="la la-crosshairs"></i>/div>';
                summaryContent+='</div></div></div></div>';

        }

    $( ".checkBox" ).on('click', function( event ) {
        var id = $(this)[0].id;
        //layerClicked = window[event.target.value];
        layerClicked = window[$(this)[0].value];
        //console.log(layerClicked);
        //console.log(layerClicked);$("#"+id).prop("checked") == true
        if (map.hasLayer(layerClicked) ) {
            map.removeLayer(layerClicked);
        }else if(layerClicked == undefined){
            
        }
        else{
            map.addLayer(layerClicked);
        }
    });
    $("#refresh").on('click',function(){
        map.setView([27.711745,85.300369],13);
    });

$("#zoomin").on('click',function(){
    map.setZoom(map.getZoom() + 1);
});


$("#zoomout").on('click',function(){
    map.setZoom(map.getZoom() - 1);
});
                    
});   