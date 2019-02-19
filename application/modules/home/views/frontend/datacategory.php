<!-- <section class="categorybanner">
    <div class="container full-height flex align-items-center ">
        <div>

            <div class="bannerCount bold f30">
                <span>Browse Datasets</span>
            </div>
        </div>
    </div>
</section> -->
<section class="searchpanel">
    <div class="container">
        <div class="search flex contactSearch">
            <div class="inputholder grow">
                <label for="">Keywords</label>
                <input class="search--input " placeholder="Enter to search..." type="text">
            </div>
            <button class="btn-primary search--btn"> SEARCH</button>
        </div>
    </div>
</section>
<section class="datacategory">
    <div class="container">

        <div class="row">
            <div class="col-md-4">
                <div class="accordion" id="sideAccordin">
                    <div class="card">
                        <div class="card-header" id="headingOne">

                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                CATEGORIES
                            </button>
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#sideAccordin">
                            <div class="card-body">
                                <div class="itemsCat"> Municipal Resources
                                    <span class="badge badge-secondary bdgcnt">3</span>
                                </div>
                                <div class="itemsCat">Risk and Hazards  </div>
                                <div class="itemsCat">Baseline Datasets </div>
                                <div class="itemsCat"> Tabular Datasets </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn btn-link " type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Geographical Extent
                                </button>
                            </h5>
                        </div>
                        <div id="collapseThree" class="collapse show" aria-labelledby="headingThree" data-parent="#sideAccordin">
                            <div class="card-body">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d15069.21185914339!2d85.32900037996616!3d27.729862895322547!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2snp!4v1545819664230"
                                    frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
            <?php   foreach($datacategory as $data) {?>
                <div class="detailItemList card">
                    <div class="row">
                        <div class="leftHolder col">
                            <div class="iconholder">
                                <img src="<?php echo $data['category_photo'] ?>" alt="">
                            </div>
                            <a href="">
                                <div class="sharespan">
                                    <i class="fa fa-share-alt"></i>
                                </div>
                            </a>
                        </div>
                        <div class="rightHolder col">
                            <h4 class="title"> <?php echo $data['category_name']?> </h4>
                            <div class="subs">
                                <div class="cdate">
                                    <i class="fa  fa-calendar"></i>
                                    <span><?php echo substr($data['last_updated'], 0, strrpos($data['last_updated'], ' ')) ?></span>
                                </div>
                                <div class="cviews">
                                    <i class="fa  fa-eye"></i>
                                    <span><?php echo $data['views'] ?></span>
                                </div>
                                <div class="ctype">
                                    <span>Type:</span>
                                    <span>Vector</span>
                                </div>
                            </div>

                            <div class="cdesc">

                                <?php echo $data['summary'] ?>
                            </div>
                            <div class="btnholder">
                                <a href="datacategorydetail.html">
                                    <button class="btn-primary "> View Info</button>
                                </a>
                                <a href="<?php echo base_url()?>map">
                                    <button class="btn-primary "> View Map</button>
                                </a>
                                <button class="btn-primary selectbtn ">
                                    <i class="fa fa-download"></i> Download
                                    <div class="insideBtn">
                                        <div class="poplist">
                                            <i class="fas fa-file-pdf mr5"></i>
                                            <span>PDF</span>
                                        </div>
                                        <div class="poplist">
                                            <i class="fas 	fa-file-word mr5"></i>
                                            <span>Word</span>
                                        </div>
                                        <div class="poplist">
                                            <i class="fas fa-file-powerpoint mr5"></i>
                                            <span>Powerpoint</span>
                                        </div>
                                        <div class="poplist">
                                            <i class="fas 	fa-file-excel mr5"></i>
                                            <span>Excel</span>
                                        </div>

                                    </div>
                            </div>
                            </button>

                        </div>

                    </div>
                </div>
<?php } ?>

                <!-- <div class="detailItemList card">
                    <div class="row">
                        <div class="leftHolder col">
                            <div class="iconholder">
                                <img src="<?php echo base_url()?>assets/frontend/img/category/res.png" alt="">
                            </div>
                            <a href="">
                                <div class="sharespan">
                                    <i class="fa fa-share-alt"></i>
                                </div>
                            </a>
                        </div>
                        <div class="rightHolder col">
                            <h4 class="title"> Restaurants</h4>
                            <div class="subs">
                                <div class="cdate">
                                    <i class="fa  fa-calendar"></i>
                                    <span>12,dec,2018</span>
                                </div>
                                <div class="cviews">
                                    <i class="fa  fa-eye"></i>
                                    <span>147</span>
                                </div>
                                <div class="ctype">
                                    <span>Type:</span>
                                    <span>Vector</span>
                                </div>
                            </div>

                            <div class="cdesc">

                                A landslide near Cusco, Peru in 2018. File:NASA Model Finds Landslide Threats in Near Real-Time During Heavy Rains.webm A
                                NASA model has been developed to look at how potential landslide activity is changing
                                around the world.
                            </div>
                            <div class="btnholder">
                                <a href="datacategorydetail.html">
                                    <button class="btn-primary "> View Info</button>
                                </a>
                                <a href="map.html">
                                    <button class="btn-primary "> View Map</button>
                                </a>
                                <button class="btn-primary selectbtn ">
                                    <i class="fa fa-download"></i> Download
                                    <div class="insideBtn">
                                        <div class="poplist">
                                            <i class="fas fa-file-pdf mr5"></i>
                                            <span>PDF</span>
                                        </div>
                                        <div class="poplist">
                                            <i class="fas 	fa-file-word mr5"></i>
                                            <span>Word</span>
                                        </div>
                                        <div class="poplist">
                                            <i class="fas fa-file-powerpoint mr5"></i>
                                            <span>Powerpoint</span>
                                        </div>
                                        <div class="poplist">
                                            <i class="fas 	fa-file-excel mr5"></i>
                                            <span>Excel</span>
                                        </div>

                                    </div>
                            </div>
                            </button>

                        </div>

                    </div>
                </div> -->
                <!-- <div class="detailItemList card">
                    <div class="row">
                        <div class="leftHolder col">
                            <div class="iconholder">
                                <img src="<?php echo base_url()?>assets/frontend/img/category/school.png" alt="">
                            </div>
                            <a href="">
                                <div class="sharespan">
                                    <i class="fa fa-share-alt"></i>
                                </div>
                            </a>
                        </div>
                        <div class="rightHolder col">
                            <h4 class="title"> Educational Institutions</h4>
                            <div class="subs">
                                <div class="cdate">
                                    <i class="fa  fa-calendar"></i>
                                    <span>12,dec,2018</span>
                                </div>
                                <div class="cviews">
                                    <i class="fa  fa-eye"></i>
                                    <span>147</span>
                                </div>
                                <div class="ctype">
                                    <span>Type:</span>
                                    <span>Vector</span>
                                </div>
                            </div>

                            <div class="cdesc">

                                A landslide near Cusco, Peru in 2018. File:NASA Model Finds Landslide Threats in Near Real-Time During Heavy Rains.webm A
                                NASA model has been developed to look at how potential landslide activity is changing
                                around the world.
                            </div>
                            <div class="btnholder">
                                <a href="datacategorydetail.html">
                                    <button class="btn-primary "> View Info</button>
                                </a>
                                <a href="map.html">
                                    <button class="btn-primary "> View Map</button>
                                </a>
                                <button class="btn-primary selectbtn ">
                                    <i class="fa fa-download"></i> Download
                                    <div class="insideBtn">
                                        <div class="poplist">
                                            <i class="fas fa-file-pdf mr5"></i>
                                            <span>PDF</span>
                                        </div>
                                        <div class="poplist">
                                            <i class="fas 	fa-file-word mr5"></i>
                                            <span>Word</span>
                                        </div>
                                        <div class="poplist">
                                            <i class="fas fa-file-powerpoint mr5"></i>
                                            <span>Powerpoint</span>
                                        </div>
                                        <div class="poplist">
                                            <i class="fas 	fa-file-excel mr5"></i>
                                            <span>Excel</span>
                                        </div>

                                    </div>
                            </div>
                            </button>

                        </div>

                    </div>
                </div> -->
            </div>
        </div>
    </div>
    </div>
    </div>
</section>
