<div class="whitebg">
        <div class="container relative">
            <div class="mapheader">
                <ul class="nav nav-tabs charttab">
                    <li class="active">
                        <a href="<?php echo base_url() ?>incidentmanagement"">Overview</a>
                    </li>

                    <li class="active">
                        <a href="<?php echo base_url() ?>incidentreportmap"">Map</a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#table">Data</a>
                    </li>

                </ul>
                <div class="mapHeaderFilter">
                    <div class="mapinput">
                        <input type="text" placeholder="Search">
                    </div>

                    <button class="btn filterbtn tbtn">
                        <span>Filter</span>
                        <i class="la la-filter show"></i>
                        <i class="la la-times"></i>
                    </button>

                </div>
            </div>
            <div class="filterpopup">
                <div class="flex justify-content-between align-items-center">
                    <div class="filterProperty flex grow">
                        <div class="filterItems">
                            <label class="filterlbl" for="inp1">Select Date</label>
                            <select name="" id="">
                                <option value="1">ward -7</option>
                                <option value="1">ward -8</option>
                                <option value="1">ward -9</option>
                                <option value="1">ward -10</option>
                            </select>
                        </div>
                        <div class="filterItems">
                            <label class="filterlbl" for="inp1">Select Ward</label>
                            <select name="" id="">
                                <option value="1">ward -7</option>
                                <option value="1">ward -8</option>
                                <option value="1">ward -9</option>
                                <option value="1">ward -10</option>
                            </select>
                        </div>
                        <div class="filterItems">
                            <label class="filterlbl" for="inp1">Incident Type</label>
                            <select name="" id="">
                                <option value="1">Flood</option>
                                <option value="1">Fire</option>
                                <option value="1"> Road Accident</option>

                            </select>
                        </div>
                        <div class="filterItems">
                            <label class="filterlbl" for="inp1">Incident Status</label>
                            <select name="" id="">
                                <option value="1">ward -7</option>
                                <option value="1">ward -8</option>
                                <option value="1">ward -9</option>
                                <option value="1">ward -10</option>
                            </select>
                        </div>

                    </div>
                    <div class="filterbtns flex column">
                        <button class="btn filterbtn mb10 btn-primary tbtn">
                            <span>Apply</span>

                        </button>
                        <button class=" btn filterbtn ">
                            <span>Clear</span>

                        </button>

                    </div>
                </div>
            </div>

        </div>


    </div>
    <div id="mapHolder">
        <div>
            <div id="map " style="height: 900px;">

                <div class="frameHolder " style="width: 100% ">
                    <div class="leftSection hide ">

                        <div class="controls ">
                            <button class="btn leftToggle ">
                                <i class="la la-arrow-left "></i>
                                <i class="la la-bars show "></i>
                            </button>
                            <button class="btn ">
                                <i class="la la-plus "></i>
                            </button>
                            <button class="btn ">
                                <i class="la la-minus "></i>
                            </button>
                            <button class="btn ">
                                <i class="la la-location-arrow "></i>
                            </button>
                            <button class="btn ">
                                <i class="la la-refresh " aria-hidden="true "></i>
                            </button>


                        </div>

                        <div class="leftSection--header ">
                            <div class="mapTtitle ">Citizen Reports</div>
                        </div>
                        <div class="leftInner">
                            <div class="tab-content lefttabContent plaintab ">

                                <div class="filtervalues ">
                                    <div class="filterItems flex ">
                                        <div class="flabel ">Incident Type:</div>
                                        <div class="fvalue ">All</div>
                                    </div>
                                    <div class="filterItems flex ">
                                        <div class="flabel ">Ward:</div>
                                        <div class="fvalue ">All</div>
                                    </div>

                                    <div class="filterItems flex ">
                                        <div class="flabel ">Status:</div>
                                        <div class="fvalue ">All</div>
                                    </div>

                                    <div class="filterItems flex ">
                                        <div class="flabel ">Date:</div>
                                        <div class="fvalue flex column ">
                                            <div class="sdate "> 12,11,2018</div>
                                            <i class="la la-arrow-down "></i>
                                            <div class="edate "> 12,12,2018</div>
                                        </div>

                                    </div>
                                    <button class="btn btn-primary circularBtn btn-sm ">
                                        <span>Clear Filter</span>
                                        <i class="la la-times "></i>
                                    </button>



                                </div>
                                <div class="hazardslist ">
                                    <div class="overlaylist ">
                                        <div class="flex ">
                                            <div class="counts ">
                                                <div class="incidntname ">Fire</div>
                                                <div class="incidntcount ">24,500</div>
                                                <div class="indicator ">
                                                    <span class="green cshape "></span>
                                                    <span class="val ">80</span>
                                                </div>
                                                <div class="indicator ">
                                                    <span class="yellow cshape "></span>
                                                    <span class="val ">50</span>
                                                </div>
                                            </div>
                                            <div class="icons ">

                                            </div>

                                        </div>

                                    </div>
                                    <div class="imgholderCirc ">
                                        <img src="img/map/fire.jpg " alt=" ">
                                    </div>
                                </div>
                                <div class="hazardslist ">
                                    <div class="overlaylist ">
                                        <div class="flex ">
                                            <div class="counts ">
                                                <div class="incidntname ">Landslide</div>
                                                <div class="incidntcount ">2,500</div>

                                            </div>
                                            <div class="icons ">

                                            </div>

                                        </div>

                                    </div>
                                    <div class="imgholderCirc ">
                                        <img src="img/map/landslide.jpg " alt=" ">
                                    </div>
                                </div>
                                <div class="hazardslist ">
                                    <div class="overlaylist ">
                                        <div class="flex ">
                                            <div class="counts ">
                                                <div class="incidntname ">Earthquake</div>
                                                <div class="incidntcount ">24,500</div>

                                            </div>
                                            <div class="icons ">

                                            </div>

                                        </div>

                                    </div>
                                    <div class="imgholderCirc ">
                                        <img src="img/map/earthquake.jpg " alt=" ">
                                    </div>
                                </div>
                                <div class="hazardslist ">
                                    <div class="overlaylist ">
                                        <div class="flex ">
                                            <div class="counts ">
                                                <div class="incidntname ">Flood</div>
                                                <div class="incidntcount ">24,500</div>

                                            </div>
                                            <div class="icons ">

                                            </div>

                                        </div>

                                    </div>
                                    <div class="imgholderCirc ">
                                        <img src="img/map/flood.jpg " alt=" ">
                                    </div>
                                </div>



                            </div>

                        </div>
                    </div>
                    <div class="rightSection show rr">
                        <div class="controls right ">
                            <button class="btn rightToggle ">
                                <i class="la la-arrow-left "></i>
                                <i class="la la-arrow-right show "></i>
                            </button>
                            <button class="btn ">
                                <i class="la la-info "></i>
                            </button>


                        </div>
                        <div class="rightSectionHeader ">
                            Active Layers
                        </div>
                        <div class="rightInner ">
                            <div class="ls ">
                                <div class="sideCard">
                                    <div class="sideTitle">
                                        Street Light Problem
                                    </div>
                                    <div class="flex justify-content-between">
                                        <div>
                                            <i class="la la-clock-o mr5"></i>
                                            <span>1 Hour Ago</span>
                                        </div>
                                        <div>
                                            <i class="la la-user mr5"></i>
                                            <span>karkasha sharma</span>
                                        </div>
                                        <div>
                                            <i class="la la-thumbs-up mr5"></i>
                                            <span>100</span>
                                        </div>
                                    </div>
                                    <div class="sstatus">
                                        <span class="yellow cshape mr5"></span>
                                        <span class="sideTitle2">Pending</span>
                                    </div>
                                    <p class="sideP">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsum,
                                        illum.</p>
                                </div>
                                <div class="sideCard">
                                    <div class="sideTitle">
                                        Street Light Problem
                                    </div>
                                    <div class="flex justify-content-between">
                                        <div>
                                            <i class="la la-clock-o mr5"></i>
                                            <span>1 Hour Ago</span>
                                        </div>
                                        <div>
                                            <i class="la la-user mr5"></i>
                                            <span>karkasha sharma</span>
                                        </div>
                                        <div>
                                            <i class="la la-thumbs-up mr5"></i>

                                            <span>100</span>
                                        </div>
                                    </div>
                                    <div class="sstatus">
                                        <span class="yellow cshape mr5"></span>
                                        <span class="sideTitle2">Pending</span>
                                    </div>
                                    <p class="sideP">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsum,
                                        illum.</p>
                                </div>


                                <div class="sideDetail">
                                    <div class="sideHeadContent">
                                        <div class="sideTitle primary">
                                            Pothole
                                        </div>
                                        <div class="flex justify-content-between">

                                            <div class="sstatus f12">
                                                <span class="yellow cshape mr5"></span>
                                                <span class=" ">Pending</span>
                                            </div>
                                            <div class="sstatus f12">
                                                <i class="la la-clock-o"></i>
                                                <span class="">1 Hour Ago</span>
                                            </div>

                                        </div>

                                    </div>
                                    <div class="sideCard">
                                        <div class="sideTitle ">
                                            SuBmitted By
                                        </div>

                                        <div class="mb15">Krishna Sharma</div>


                                        <div class="sideTitle ">
                                            Location
                                        </div>

                                        <div class="mb10">
                                            <p class="f12">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam magnam
                                                consequuntur at omnis, quam ratione?
                                            </p>
                                        </div>

                                        <div class="sideTitle mb5 ">
                                            Image
                                        </div>
                                        <div class="row imt mb10">
                                            <div class="col-md-6">
                                                <img src="img/map/fire.jpg" alt="">
                                            </div>
                                            <div class="col-md-6">
                                                <img src="img/map/fire.jpg" alt="">
                                            </div>

                                        </div>

                                        <button class="btn btn-primary btn-md lkbtn">
                                            <i class="la la-thumbs-up mr5 tu"></i>
                                            <span>100</span>
                                        </button>


                                    </div>

                                    <div class="relatedSection f12">
                                        <div class="sideTitle mb10 mt15">
                                            Related Issues
                                        </div>

                                        <div class="flex justify-content-start">
                                            <div>
                                                <span class="green cshape mr10"></span>
                                            </div>
                                            <div>
                                                <div class="sideTitle1 mb5 sideTitle2">
                                                    On Site Septic
                                                </div>
                                                <div class="datetime">
                                                    <span>12/16/2018, 1:37AM</span>
                                                </div>
                                                <div>Inprogress</div>
                                            </div>
                                        </div>

                                    </div>
                                </div>



                            </div>
                        </div>
                    </div>
                    <iframe width="100% " src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d56516.31625950213!2d85.29111331363042!3d27.708955944427107!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb198a307baabf%3A0xb5137c1bf18db1ea!2sKathmandu+44600!5e0!3m2!1sen!2snp!4v1545981553404 "
                        frameborder="0 " style="border:0 " allowfullscreen></iframe>
                </div>



                <div class="infoDetail">
                    <button class="btn-primary arrowbtn">
                        <i class="la la-arrow-up show"></i>
                        <i class="la la-arrow-down"></i>
                    </button>
                    <div class="sideTitle">
                        Lightining Report
                    </div>
                    <div class="graphHolder">
                        <div id="barchart" style="height:300px;width:100%;">

                        </div>

                    </div>

                </div>








            </div>



        </div>

    </div>
   
    <script src="<?php echo base_url();?>assets/frontend/newjs/scriptall.js"></script>
    <!-- <script src="https://code.highcharts.com/highcharts.js "></script>
    <script src="https://code.highcharts.com/modules/exporting.js "></script>
    <script src="https://code.highcharts.com/modules/export-data.js "></script>
    <script src="<?php echo base_url();?>assets/frontend/newjs/allchart.js"></script> -->
<script>
        $(document).ready(function () {
            $('body').addClass("hidden ");
            $(".mapAccordion,.detItemLinkWrp,.rightinner,.ls,.plaintab ").niceScroll({
                cursorcolor: "#502e8e "
            });
            // $(".mapAccordion,.detItemLinkWrp,.rightinner ").mouseover(function () {
            //     $(".mapAccordion,.detItemLinkWrp,.rightinner ").getNiceScroll().resize();
            // });
            iframeHeight();

            function iframeHeight() {


                var deviceFullHeight = $(window).height();
                var canvasHeight = deviceFullHeight - $("#mapHolder ").offset().top;
                var leftmapheight = deviceFullHeight - $(".leftInner ").offset().top - 10;
                var rightmapheight = deviceFullHeight - $(".rightInner ").offset().top - 10;
                var leftHeight = canvasHeight - 5;
                $(".frameHolder iframe").css("height", canvasHeight);
                $(".leftSection ").css("height", leftHeight);
                $(".rightSection ").css("height", leftHeight);
                $(".leftInner ").css("height", leftmapheight);
                $(".rightInner ").css("height", rightmapheight);



            }

            $(window).resize(function () {
                iframeHeight();
            });

            $(".itemsCat .label-default ").click(function () {


                $(".rightSection ").addClass("show ");

                $(this).closest(".itemsCat ").toggleClass("showList ");


            })
            $(".rightToggle ").click(function () {
                $(".rightToggle i ").toggleClass("show ");
                $(".rightSection ").toggleClass("show ");
            })

            $(".arrowbtn ").click(function () {
                $(".arrowbtn i ").toggleClass("show ");
                $(".infoDetail ").toggleClass("show ");
            })



            $(".closeitem ").click(function () {


                var all = $(this).closest(".detItem ").fadeOut("slow ");


            });


            $(".leftToggle ").click(function () {
                $(".leftToggle i ").toggleClass("show ");
                $(".leftSection ").toggleClass("hide ");

            });
            $(".tbtn ").click(function () {
                $(".tbtn i ").toggleClass("show ");
                $(".filterpopup ").toggleClass("show ");

            });


            $(".ellipse ").click(function () {

                $(this).siblings(".inlist ").toggleClass("visible ");
            })



        });
    </script>
    <script>
        $(document).ready(function (e) {

            $(".mobile-button ").click(function (event) {
                $("#content ").addClass("mobile-open ");
                event.stopPropagation();
            });

            $(document).click(function (event) {
                $(".ellipse ").click(function (event) {
                    $(this).siblings(".inlist ").addClass("visible ");
                    event.stopPropagation();
                });

                $(document).click(function (event) {
                    if (!$(event.target).hasClass('visible')) {
                        $(".inlist ").removeClass("visible ");
                    }
                });
            });
        });
    </script>
    <script type="text/javascript">
        $(function () {
            $('#barchart').highcharts({
                chart: {
                    type: 'bar'
                },
                title: {
                    text: 'Incidents Graph'
                },
                subtitle: {
                    // text: 'Source: P.A. Dept. of Education'
                },
                xAxis: {
                    categories: [' ward 1',
                        'ward 2',
                        'ward 3',
                        'ward 4',
                        'ward 5',
                        'ward 6',
                        'ward 7',
                        'ward 8',
                        'ward 9',
                        'ward 10',
                        'ward 11',
                        'ward 12',
                        'ward 13',
                        'ward 14',
                        'ward 15',
                        'ward 16',
                        'ward 17',
                        'ward 18',
                        'ward 19',
                        'ward 20',
                        'ward 21',
                        'ward 22',
                        'ward 23',
                        'ward 24',
                        'ward 25',
                        'ward 26',
                        'ward 27',
                        'ward 28',
                        'ward 29',
                        'ward 30',
                        'ward 31',
                        'ward 32'
                    ],
                    title: {
                        text: null
                    }
                },
                yAxis: {
                    min: 0,
                    title: {
                        text: 'incidents counts',
                        align: 'high'
                    },
                    labels: {
                        overflow: 'justify'
                    }
                },
                tooltip: {
                    valueSuffix: ''
                },
                plotOptions: {
                    bar: {
                        dataLabels: {
                            enabled: true
                        }
                    }
                },
                /*
        legend: {
                    layout: 'vertical',
                    align: 'right',
                    verticalAlign: 'top',
                    x: -40,
                    y: 100,
                    floating: true,
                    borderWidth: 1,
                    backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
                    shadow: true
                },
        */
                credits: {
                    enabled: false
                },
                series: [{
                    data: [89.2,
                        88.4,
                        87.7,
                        86.6,
                        86.1,
                        83.9,
                        83.8,
                        81.8,
                        81.5,
                        79.5,
                        79.5,
                        77,
                        76.7,
                        74.8,
                        74.7,
                        74.6,
                        74.1,
                        74.1,
                        73.9,
                        72.5,
                        72.4,
                        72.4,
                        71.9,
                        71.7,
                        71.2,
                        70.2,
                        69.9,
                        69.8,
                        69.8,
                        69.4,
                        67.9,
                        67.6
                    ],
                    name: 'Incidents in different wards'
                }]

            });
        });
    </script>