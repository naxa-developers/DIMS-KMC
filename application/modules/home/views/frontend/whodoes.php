<!-- <link rel="stylesheet" href="<?php echo base_url();?>assets/frontend/newcss/style.css">
<link href="<?php echo base_url();?>assets/frontend/newcss/nice-select.css" rel="stylesheet">
<link href="<?php echo base_url();?>assets/frontend/newcss/line-awesome.min.css" rel="stylesheet">  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/c3/0.6.11/c3.min.css">
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.4.0/dist/leaflet.css" integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA=="
            crossorigin="" />
<div class="whitebg">
        <div class="container-fluid ">
            <div class="mapform">
                <form>
                    <div class="input-group form-group">
                        <input type="text" class="form-control" placeholder="Search your project" aria-label="Search your project"
                            aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <span class="input-group-text" id="basic-addon2"><i class="la la-search"></i></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <select class="niceSelect">
                            <option selected>Location</option>
                            <option>ward no 1</option>
                            <option>ward no 2</option>
                            <option>ward no 3</option>
                            <option>ward no 4</option>
                            <option>ward no 5</option>
                            <option>ward no 6</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select class="niceSelect">
                            <option selected>Organizational maping</option>
                            <option>Who does what</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select class="niceSelect">
                            <option selected>Category</option>
                            <option>ward no </option>
                            <option>ward no </option>
                            <option>ward no </option>
                            <option>ward no </option>
                            <option>ward no </option>
                            <option>ward no </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-naxa">Filter</button>
                    </div>
                </form>
            </div>


        </div>


    </div>
    <div class="mapview-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <div class="map-sidebar ">
                        <div class="mapproject mapside-scroll">
                            <div class="sidebar-title">
                                <h3>Project list</h3>
                            </div>
                            <div class="projectwrap">
                                <ul>
                                    <li>
                                        <a href="<?php echo base_url() ?>whodoes-details">
                                            <h4>syangja maping</h4>
                                            <div class="text">
                                                <p><label>Organization Name :</label> Nepal Red Society</p>
                                                <p><label>Location :</label> Syangja</p>
                                                <p><label>start date :</label> 2018-02-01</p>
                                                <p><label>End date :</label> 2019-01-01</p>
                                                <p class="readmore">
                                                    <span class="readtext">view Details <i class="la la-long-arrow-right"></i></span>
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url() ?>whodoes-details">
                                            <h4>Dolakha maping</h4>
                                            <div class="text">
                                                <p><label>Organization Name :</label> Nepal Red Society</p>
                                                <p><label>Location :</label> Syangja</p>
                                                <p><label>start date :</label> 2018-02-01</p>
                                                <p><label>End date :</label> 2019-01-01</p>
                                                <p class="readmore">
                                                    <span class="readtext">view Details <i class="la la-long-arrow-right"></i></span>
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url() ?>whodoes-details">
                                            <h4>Pokhara maping</h4>
                                            <div class="text">
                                                <p><label>Organization Name :</label> Nepal Red Society</p>
                                                <p><label>Location :</label> Syangja</p>
                                                <p><label>start date :</label> 2018-02-01</p>
                                                <p><label>End date :</label> 2019-01-01</p>
                                                <p class="readmore">
                                                    <span class="readtext">view Details <i class="la la-long-arrow-right"></i></span>
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url() ?>whodoes-details">
                                            <h4>Pokhara maping</h4>
                                            <div class="text">
                                                <p><label>Organization Name :</label> Nepal Red Society</p>
                                                <p><label>Location :</label> Syangja</p>
                                                <p><label>start date :</label> 2018-02-01</p>
                                                <p><label>End date :</label> 2019-01-01</p>
                                                <p class="readmore">
                                                    <span class="readtext">view Details <i class="la la-long-arrow-right"></i></span>
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="create-btn">
                            <a href="#" class="btn">View Detials</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="mapwrap">
                        
                        <div class="mapholder">
                            <div id="mapid"></div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

    <!-- <script src="<?php echo base_url();?>assets/frontend/newjs/scriptall.js"></script> -->
  <!--   <script src="<?php echo base_url();?>assets/frontend/newjs/jquery.nice-select.min.js"></script>
    <script src="<?php echo base_url();?>assets/frontend/newjs/jquery.nicescroll.min.js"></script> -->

    <script src="https://unpkg.com/leaflet@1.4.0/dist/leaflet.js" integrity="sha512-QVftwZFqvtRNi0ZyCtsznlKSWOStnDORoefr1enyq5mVL4tmKB3S/EnC3rRJcxCPavG10IcrVGSmPh6Qw5lwrg=="
        crossorigin=""></script>
        <Script>
            
            $(document).ready(function () {
                var map = L.map('mapid').setView([27.709686, 85.300140], 6);

                L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                }).addTo(map);

                
                var markers = [
                    (35.949635, -83.936129),

                ];

            // var polygon = L.polygon([
            //         [51.509, -0.08],
            //         [51.503, -0.06],
            //         [51.51, -0.047]
            //     ]).addTo(mymap);

                var popup = L.popup();

                    function onMapClick(e) {
                        popup
                            .setLatLng(e.latlng)
                            .setContent("You clicked the map at " + e.latlng.toString())
                            .openOn(map);
                    }

                    markers.on('click', onMapClick);


                    
            });
            $(document).ready(function() {
                $(".projectwrap").niceScroll({
                    cursorcolor: '#673BB7',
                    cursorborder: 'none',
                    cursormaxheight: 300,
                    // autohidemode: 'leave'
                });
            });
            
        </Script>