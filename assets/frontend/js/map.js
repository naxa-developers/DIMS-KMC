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

          // console.log(geojson_layer);
          // console.log(layer_name);
          // console.log(marker_type);
          // console.log(style);
          // console.log(popup_content);

            window[layer_name+ "_toggle"] = new L.geoJson(geojson_layer, {
                pointToLayer: function(feature,Latlng)
                {   //console.log(style.icon);
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
               //on each to load layer and feature no it
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
          //  console.log(window[layer_name+ "_toggle"]);
          //  if(load) {
                window[layer_name+ "_toggle"].addTo(map);
                $(".rightSection").addClass("show");
          //  }
        }

        //default load  data retrive
        for (var i = 0; i < default_cat_layer.length; i++) {
            $('#'+category_tbl_default[i]+"_switch").prop('checked', true);
            //console.log(popup_content_default[i]);
            var style_defaultnew = JSON.parse(style_default[i]);
            var popup_content_default_parse = JSON.parse(popup_content_default[i]);
            var smmayfielddefalt = JSON.parse("["+summary_data_default[i]+"]"); //for json validator
            var summarycount = smmayfielddefalt.length;
            //console.log(style_defaultnew);
    		loadDataToMap(default_cat_layer[i],category_tbl_default[i],true,marker_type_default[i],style_defaultnew
              ,popup_content_default_parse,cat_names[i]); //call for data load this is for firsst time default data load
            loadSummaryData(summarycount,summaryFull_defalt[i],smmayfielddefalt,cat_names[i],category_tbl_default[i]);

        }//for close

        //load layer on click request
        $(".checkBox").one('click', function( event ) {
            var id= $(this)[0].id;
            if($("#"+id).prop("checked")) {
                var value = $(this)[0].value.replace("_toggle","");
                    $.ajax({
                    type: "POST",
                    //async:false,
                    data: {layername:value},
                    url:  "map/get_layers_onrequest",
                    beforeSend: function() {

                    },
                    complete: function() {

                    },
                    success: function (result) {
                      //  console.log(result);
                      

                        // $('#spinnerModal').hide();
                        var finaldata = JSON.parse(result);

                        var style = JSON.parse(finaldata.style);
                        var geojson = JSON.parse(finaldata.geojson);
                        var popup_content = JSON.parse(finaldata.popup_content);
                        var marker_type=finaldata.marker_type;
                        var view_layername=finaldata.view_layernames;
                        var summary_list=finaldata.summary_list;
                        var summarydata=finaldata.summarydata;
                        var summarycount=finaldata.summarycount;
                      //  console.log(style);
                        // console.log(popup_content);
                       loadDataToMap(geojson,value,true,marker_type,style,popup_content,view_layername);
                       //$("#info_")
                       loadSummaryData(summarycount,summarydata,summary_list,view_layername,value);
                    }
                });
            }
        });

        //retrive summary data  last parameter to handel click
        function loadSummaryData(summarycount,summarydata,summary_list,view_layername,value) {
                //console.log(summarydata);
                var summaryContent='<div class="detItem" id="'+value+'_summaryCardwitch">';
                    summaryContent+='<div class="detItemHeader flex justify-content-between align-items-center">';
                        summaryContent+='<div class="tcountHlder">';
                            summaryContent+='<div class="toptext">'+view_layername+'</div>';
                            summaryContent+='<div class="counttext">'+summarycount+'</div>';
                        summaryContent+='</div>';
                        summaryContent+='<div class="closeitem" ><i class="la la-times layerFadeOutClick"  name="'+value+'"></i></div></div>';
                    summaryContent+='<div class="detItemContent">';
                        summaryContent+='<p class="dettext">'+summarydata+'</p>';
                        summaryContent+='<div class="detItemLinkWrp">';
                            for (var i =0; i < summary_list.length; i++) {
                                var coordintesfinal = JSON.parse(summary_list[i].st_asgeojson);
                            summaryContent+='<div class="detItemlink flex justify-content-between align-items-center retriveSumaryMap">';
                                summaryContent+='<div class="lname">'+summary_list[i].field+'</div>';
                                summaryContent+='<div><i  id="'+coordintesfinal.coordinates[0]+'" name="'+coordintesfinal.coordinates[1]+'"  class="summaryCoordinate la la-crosshairs"></i></div>';
                            summaryContent+='</div>';
                            }
                        summaryContent+='</div>';
                    summaryContent+='</div>';
                summaryContent+='</div>';
            $('#summryData').append(summaryContent);
        }

        //switch layer to each switch
        $(".layerFadeOutClick" ).on('click',  function() {
            var layername = $(this).attr('name');
            $(this).closest(".detItem").fadeOut("slow");
            $('#'+layername+'_toggle').prop("checked");
            var id = layername+"_toggle";
            layerClicked = window[id];
            if (map.hasLayer(layerClicked) ) {
                map.removeLayer(layerClicked);
                $("#"+layername+"_switch").prop('checked', false); //switch off
            }else if(layerClicked == undefined){
            }
            else{
                map.addLayer(layerClicked);
            }
        });
        //map Zoom level 18 for single map
        $(".summryData" ).on('click', '.summaryCoordinate', function() {
            var longi = $(this).attr('id');
            var lat = $(this).attr('name');
            map.setView([lat,longi], 18);
        });

        $( ".checkBox" ).on('click', function( event ) {
            var id = $(this)[0].id;
            //layerClicked = window[event.target.value];
            layerClicked = window[$(this)[0].value];
            //console.log(id);
          //  console.log($(this)[0].value);
            //$("#"+id).prop("checked") == true
            if (map.hasLayer(layerClicked) ) {
                map.removeLayer(layerClicked);
               var tbl = id.replace("_switch","");
                $("#"+tbl+"_summaryCardwitch").hide();
                //console.log(tbl);
            }else if(layerClicked == undefined){

            }
            else{
                map.addLayer(layerClicked);
            }
        });
        //for filter data


        $('.ZoomTolayer').on('click',function(){
            var layername= $(this).data('layername');
          //   console.log(window[layername+ "_toggle"]);
            map.fitBounds(window[layername+ "_toggle"].getBounds());

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
