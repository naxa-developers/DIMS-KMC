<link rel="stylesheet" href="https://unpkg.com/leaflet@1.4.0/dist/leaflet.css" integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA=="
            crossorigin="" />
    <section class="linkbtn">
        <div class="container">
            <div class="topbtnHolder">
                <div class="btnHolderItems activelink">
                    <a class="nodec tcolor" href="<?php echo base_url() ?>municipalprofile">
                        <div class="imgholder">
                            <img src="<?php echo base_url() ?>assets/img/stastics.png" alt="">
                        </div>
                        <div class="label">
                            Stastical Profile
                        </div>

                    </a>
                </div>
                <div class="btnHolderItems">
                    <a class="nodec tcolor" href="<?php echo base_url() ?>electedrepresentative">
                        <div class="imgholder">
                            <img src="<?php echo base_url() ?>assets/img/wardrepresentative.png" alt="">
                        </div>
                        <div class="label">
                            Elected Representative
                        </div>
                    </a>


                </div>
                <div class="btnHolderItems">
                    <a class="nodec tcolor" href="">
                        <div class="imgholder">
                            <img src="<?php echo base_url() ?>assets/img/wardmembers.png" alt="">
                        </div>
                        <div class="label">
                            Ward Staff
                        </div>
                    </a>


                </div>
                <div class="btnHolderItems">
                    <a class="nodec tcolor" href="">
                        <div class="imgholder">
                            <img src="<?php echo base_url() ?>assets/img/wmap.png" alt="">
                        </div>
                        <div class="label">
                            Ward Map
                        </div>
                    </a>


                </div>
                <div class="btnHolderItems">
                    <a class="nodec tcolor" href="<?php echo base_url() ?>riskprofile">
                        <div class="imgholder">
                            <img src="<?php echo base_url() ?>assets/img/riskstat.png" alt="">
                        </div>
                        <div class="label">
                            Risk Profile
                        </div>
                    </a>


                </div>
            </div>
        </div>
    </section>
    <section class="profile-banner" style="background:url(assets/frontend/img/satelite.png)">
        <div class="overlay"></div>
        <div class="container">
            <div class="pfsearch">
                <h4>Municipal Data</h4>
                <form>
                    <div class="form-group">
                        <select class="niceSelect">
                            <option selected>Choose municipality</option>
                            <option>Changu Narayan</option>
                            <option>Bhaktpur</option>
                            <option>Nagarjun</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select class="niceSelect">
                            <option selected>Choose ward</option>
                            <option>ward no 1</option>
                            <option>Ward no 2</option>
                            <option>Ward no 3</option>
                        </select>
                    </div>
                </form>
            </div>
        </div>
        <div class="countwrap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="profile-count">
                            <ul>
                                <li>
                                    <div class="content">
                                        <div class="pf-icon">
                                            <i class="la la-users"></i>
                                        </div>
                                        <div class="text">
                                            <h4>Total Population</h4>
                                            <h3>14000</h3>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="content">
                                        <div class="pf-icon">
                                            <i class="la la-female"></i>
                                        </div>
                                        <div class="text">
                                            <h4>Total Female</h4>
                                            <h3>9000</h3>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="content">
                                        <div class="pf-icon">
                                            <i class="la la-male"></i>
                                        </div>
                                        <div class="text">
                                            <h4>Total Male</h4>
                                            <h3>5000</h3>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="content">
                                        <div class="pf-icon">
                                            <i class="la la-area-chart"></i>
                                        </div>
                                        <div class="text">
                                            <h4>Total Area</h4>
                                            <h3>14000</h3>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="content">
                                        <div class="pf-icon">
                                            <i class="la la-building"></i>
                                        </div>
                                        <div class="text">
                                            <h4>Total Houses</h4>
                                            <h3>14000</h3>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="content">
                                        <div class="pf-icon">
                                            <i class="la la-users"></i>
                                        </div>
                                        <div class="text">
                                            <h4>Total Literate</h4>
                                            <h3>14000</h3>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="content">
                                        <div class="pf-icon">
                                            <i class="la la-wheelchair"></i>
                                        </div>
                                        <div class="text">
                                            <h4>Total Disable</h4>
                                            <h3>14000</h3>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="content">
                                        <div class="pf-icon">
                                            <i class="la la-user"></i>
                                        </div>
                                        <div class="text">
                                            <h4>Economically Active</h4>
                                            <h3>14000</h3>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="mapcount">
                            <div id="mappf" style="height:250px;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section class="pfselect">
        <div class="container">
            <div class="mapform">
                <form>
                    <div class="form-group">
                        <label for="">Search</label>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search your project" aria-label="Search your project"
                                aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon2"><i class="la la-search"></i></span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="">Select Location</label>
                        <select class="niceSelect">
                            <option selected>Location</option>
                            <optgroup label="Nagarjun">
                                <option>ward no 1</option>
                                <option>ward no 2</option>
                                <option>ward no 3</option>
                                <option>ward no 4</option>
                                <option>ward no 5</option>
                                <option>ward no 6</option>
                            </optgroup>
                            <optgroup label="Kathmandu">
                                <option>ward no 1</option>
                                <option>ward no 2</option>
                                <option>ward no 3</option>
                                <option>ward no 4</option>
                                <option>ward no 5</option>
                                <option>ward no 6</option>
                            </optgroup>
                            <optgroup label="Pokhara">
                                <option>ward no 1</option>
                                <option>ward no 2</option>
                                <option>ward no 3</option>
                                <option>ward no 4</option>
                                <option>ward no 5</option>
                                <option>ward no 6</option>
                            </optgroup>
                            
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Select indicatior</label>
                        <select class="niceSelect">
                            <option selected>Select indicator</option>
                            <optgroup label="Population dynamics">
                                <option>Total population</option>
                                <option>Female population</option>
                                <option>Male population</option>
                                <option>Popul Density</option>
                            </optgroup>
                            <optgroup label="Education">
                                <option>Literacy rate</option>
                                <option>Literate population</option>
                            </optgroup>
                            <optgroup label="Health">
                                <option>Total health institution</option>
                                
                            </optgroup>
                            <optgroup label="Houshold">
                                <option>Type of houses</option>
                            </optgroup>
                            <optgroup label="Econmic Activity">
                                <option>Percentage of employed</option>
                                <option>Percentage of unemployed</option>
                                <option></option>
                            </optgroup>
                            <optgroup label="Gender">
                                <option>household with female ownership in land</option>
                                <option></option>
                            </optgroup>
                            <optgroup label="Agriculture">
                                <option>Distribution of Agricultural land</option>
                                <option>Ratio of agricultural and holding</option>
                            </optgroup>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Select subindicatior</label>
                        <select class="niceSelect">
                            <option selected>Select subindicator</option>
                                <option>Total population</option>
                                <option>Female population</option>
                                <option>Male population</option>
                                <option>Popul Density</option>
                                <option>Literacy rate</option>
                                <option>Literate population</option>
                                <option>Total health institution</option>
                                <option>Type of houses</option>
                            </optgroup>
                                <option>Percentage of employed</option>
                                <option>Percentage of unemployed</option>
                                <option>household with female ownership in land</option>
                            
                                <option>Distribution of Agricultural land</option>
                                <option>Ratio of agricultural and holding</option>
                            
                        </select>
                    </div>
                    <div class="form-group compare-group">
                        <label for="">Compare</label>
                        <select class="compare-select niceSelect">
                            <option selected>compare</option>
                            <option>any two ward </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-naxa">Filter</button>
                    </div>

                </form>
                <div class="compare-form">
                    <div class="compare-close"><i class="la la-close"></i></div>
                    <form>
                        <div class="form-group naxa-group">
                            <label>municipality 1</label>
                            <select class="">
                                <option selected>Location</option>
                                <optgroup label="Nagarjun">
                                    <option>ward no 1</option>
                                    <option>ward no 2</option>
                                    <option>ward no 3</option>
                                    <option>ward no 4</option>
                                    <option>ward no 5</option>
                                    <option>ward no 6</option>
                                </optgroup>
                                <optgroup label="Kathmandu">
                                    <option>ward no 1</option>
                                    <option>ward no 2</option>
                                    <option>ward no 3</option>
                                    <option>ward no 4</option>
                                    <option>ward no 5</option>
                                    <option>ward no 6</option>
                                </optgroup>
                                <optgroup label="Pokhara">
                                    <option>ward no 1</option>
                                    <option>ward no 2</option>
                                    <option>ward no 3</option>
                                    <option>ward no 4</option>
                                    <option>ward no 5</option>
                                    <option>ward no 6</option>
                                </optgroup>
                
                            </select>
                        </div>
                        <div class="form-group naxa-group">
                            <label>municipality 2</label>
                            <select class="">
                                <option selected>Location</option>
                                <optgroup label="Nagarjun">
                                    <option>ward no 1</option>
                                    <option>ward no 2</option>
                                    <option>ward no 3</option>
                                    <option>ward no 4</option>
                                    <option>ward no 5</option>
                                    <option>ward no 6</option>
                                </optgroup>
                                <optgroup label="Kathmandu">
                                    <option>ward no 1</option>
                                    <option>ward no 2</option>
                                    <option>ward no 3</option>
                                    <option>ward no 4</option>
                                    <option>ward no 5</option>
                                    <option>ward no 6</option>
                                </optgroup>
                                <optgroup label="Pokhara">
                                    <option>ward no 1</option>
                                    <option>ward no 2</option>
                                    <option>ward no 3</option>
                                    <option>ward no 4</option>
                                    <option>ward no 5</option>
                                    <option>ward no 6</option>
                                </optgroup>
                
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn naxa-btn">Compare</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class="graphs">
        <div class="container">
            <div class="row mt30">
                <div class="col-md-6">
                    <div class="whiteshadowbg">
                        <div id="gbarchart">

                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="whiteshadowbg">
                        <div id="stackchart">

                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt30">
                <div class="col-md-6">
                    <div class="whiteshadowbg">
                        <div id="malefemale">

                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="whiteshadowbg">
                        <div id="pichart">

                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>


     <script src="https:code.highcharts.com/highcharts.js"></script>
    <script src="https:code.highcharts.com/modules/exporting.js"></script>
    <script src="https:code.highcharts.com/modules/export-data.js"></script> 

    <script src="<?php echo base_url();?>assets/frontend/newjs/chartpage.js"></script>
<!-- this is for munclipal profile -->
    <script src="<?php echo base_url();?>assets/frontend/newjs/chartpage.js"></script>
    <script src="https://unpkg.com/leaflet@1.4.0/dist/leaflet.js" integrity="sha512-QVftwZFqvtRNi0ZyCtsznlKSWOStnDORoefr1enyq5mVL4tmKB3S/EnC3rRJcxCPavG10IcrVGSmPh6Qw5lwrg=="
        crossorigin=""></script>    
    <Script>

        $(document).ready(function () {
            var map = L.map('mappf').setView([27.709686, 85.300140], 6);

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
        $(document).ready(function () {
            $(".projectwrap").niceScroll({
                cursorcolor: '#673BB7',
                cursorborder: 'none',
                cursormaxheight: 300,
                // autohidemode: 'leave'
            });
        })

    </Script>