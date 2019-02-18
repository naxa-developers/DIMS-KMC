<!-- <section>
    <img class="fullwidth" src="<?php echo base_url()?>assets/frontend/img/assets/incident-management.jpg" alt="">
</section> -->
<div class="whitebg">
        <div class="container">
            <ul class="nav nav-tabs charttab">
                <li class="active">
                    <a data-toggle="tab" href="<?php echo base_url() ?>incidentmanagement">Overview</a>
                </li>
                <li>
                    <a href="<?php echo base_url() ?>incidentreportmap">Map</a>
                </li>
                <li>
                    <a data-toggle="tab" href="#table">Table</a>
                </li>

            </ul>

        </div>


    </div>
    <div class="container">
        <div class="tab-content">
            <div id="overview" class="tab-pane   fade in show   active">
                <div>
                    <p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ea ipsam nihil voluptates impedit
                        delectus
                        vel sed alias cupiditate ex, tenetur ullam, fuga rerum aperiam. Est excepturi sequi accusantium
                        labore
                        autem voluptatibus blanditiis voluptate unde, distinctio quaerat? Iste beatae nostrum quo
                        explicabo!
                        Culpa fugiat sequi ullam explicabo ad modi dolorum voluptates. Porro possimus dolorum odio
                        corrupti,

                    </p>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="whiteshadowbg">

                                <div id="pichart">

                                </div>
                            </div>

                        </div>
                        <div class="col-8">
                            <div class="whiteshadowbg">
                                <div class="selctHolderg lineChartSelect">
                                    <select name="" id="" class="selectChart">
                                        <option value=""> Ward 1</option>
                                        <option value=""> Ward 2</option>
                                        <option value=""> Ward 3</option>
                                        <option value=""> Ward 4</option>
                                    </select>
                                </div>
                                <div id="linechart">

                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="fullBarchart">
                        <p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ea ipsam nihil voluptates impedit
                            delectus
                            vel sed alias cupiditate ex, tenetur ullam, fuga rerum aperiam. Est excepturi sequi
                            accusantium
                            labore autem voluptatibus blanditiis voluptate unde, distinctio quaerat? Iste beatae
                            nostrum
                            quo explicabo! Culpa fugiat sequi ullam explicabo ad modi dolorum voluptates. Porro
                            possimus

                        </p>
                    </div>
                    <div class="whiteshadowbg">
                        <!-- <div class="selctHolderg barChartSelect1">
                            <select name="" id="" class="selectChart">
                                <option value=""> Select Month</option>
                                <option value=""> 2018</option>
                                <option value=""> 2019</option>
                                <option value=""> 2020</option>
                                <option value=""> 2021</option>
                            </select>
                        </div>
                        <div class="selctHolderg barChartSelect2">

                            <select name="" id="" class="selectChart">
                                <option value=""> Select Year</option>
                                <option value=""> Ward 1</option>
                                <option value=""> Ward 2</option>
                                <option value=""> Ward 3</option>
                                <option value=""> Ward 4</option>
                            </select>
                        </div> -->

                        <section class="searchpanel filtersearch">
                            <div class="container">


                                <div class="search flex contactSearch">

                                    <div class="selectHolder">
                                        <label for="">Select incident</label>
                                        <select>
                                            <option value="volvo">Fire</option>
                                            <option value="saab">Earthquake</option>
                                            <option value="mercedes">Flood</option>

                                        </select>
                                    </div>
                                    <div class="selectHolder">
                                        <label for="">Select damage type</label>
                                        <select>
                                            <option value="volvo">Full</option>
                                            <option value="saab">Partial</option>

                                        </select>
                                    </div>
                                    <div class="selectHolder">
                                        <label for="">Select Year</label>
                                        <select>
                                            <option value="volvo">2018</option>
                                            <option value="saab">2019</option>

                                        </select>
                                    </div>
                                    <div class="selectHolder">
                                        <label for="">Select Month</label>
                                        <select>
                                            <option value="volvo">jan</option>
                                            <option value="saab">feb</option>

                                        </select>
                                    </div>

                                    <button class="btn-primary search--btn"> Filter</button>
                                </div>
                            </div>
                        </section>
                        <div id="barchart" style="height:500px;width:100%;">

                        </div>
                    </div>


                </div>



            </div>
            <div id="map" class="tab-pane   fade in show   ">

                map


            </div>
            <div id="table" class="tab-pane   fade in show   ">

                table


            </div>
        </div>
    </div>
    <!-- <script src="<?php echo base_url();?>assets/frontend/newjs/scriptall.js"></script> -->
  