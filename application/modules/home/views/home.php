        <!--Alerts Start-->
        <div class="alerts">
          <div id="alert-btn" class="alert-btn">
            <span class="a-count">2</span> 
            <i class="la la-bell-o" aria-hidden="true"></i>
          </div>
          <ul class="alerts-list">
            <li>
              <p><label>Name :</label>Naxa pvt.ltd</p>
              <p><label>Blood Group :</label>A</p>
              <p>Management of citizen reports on disaster incidents and civic issues. </p>
            </li>
            <li>
              <p><label>Name :</label>Naxa pvt.ltd</p>
              <p><label>Blood Group :</label>A</p>
              <p>Management of citizen reports on disaster incidents and civic issues. </p>
            </li>
          </ul>
        </div>
        <!--Alerts End--> 
        <div class="container">
            <div class="titleInfo">
                <h3>
                    <!-- Disaster Information Management System --><?php echo LARGETEXT//$this->lang->line('big_text');?>
                </h3>
                <p><!-- A GIS based Information Platform --><?php echo LARGESUMM//$this->lang->line('small_text');?> </p>

                <button class="btn btn-primary btn-lg circularBtn ">
                    <!-- GET STARTED -->
                    <a href="#startsection" style="text-decoration:none; color:#fff">
                    <?php echo $this->lang->line('get_started');?>
                </a>
                </button>
            </div>

            <div class="accidnets">
                <h4 class="heading"><?php echo INCTEXT//$this->lang->line('reportbymonth');?><!-- INCIDNETS REPORTS DURING LAST THREE MONTHS --></h4>
                <div class="sliderContent">

                    <div class="ticker">

                        <ul class="  flex ">


                            <li class="  pl90 flex column align-items-center">
                                <div class="ticker--iconholder redbg align-items-center   flex  justify-content-center">
                                    <img src="<?php echo base_url();?>assets/frontend/img/assets/road.png" alt="" class="ticker--img">

                                </div>
                                <div class="ticker--title">
                                   <?php echo ROAD ?>
                                </div>
                                <div class="ticker--count">
                                    <?php echo !empty($report_inci['Road'])?$report_inci['Road']:'0'?>
                                </div>

                            </li>
                            <li class="  pl90 flex column align-items-center">
                                <div class="ticker--iconholder yellowbg align-items-center   flex  justify-content-center">
                                    <img src="<?php echo base_url();?>assets/frontend/img/assets/fire.png" alt="" class="ticker--img">

                                </div>
                                <div class="ticker--title">
                                    <?php echo FIRE ?>
                                </div>
                                <div class="ticker--count">
                                <?php echo !empty($report_inci['Fire'])?$report_inci['Fire']:'0'?>
                                </div>

                            </li>
                            <li class="  pl90 flex column align-items-center">
                                <div class="ticker--iconholder ticker--iconholder__blue align-items-center  bluebg  flex  justify-content-center">
                                    <img src="<?php echo base_url();?>assets/frontend/img/assets/potholes.png" alt="" class="ticker--img">

                                </div>
                                <div class="ticker--title">
                                    <?php echo LANDSLIDE ?>
                                </div>
                                <div class="ticker--count">
                                <?php echo !empty($report_inci['Landslide'])?$report_inci['Landslide']:'0'?>
                                </div>

                            </li>
                            <li class="  pl90 flex column align-items-center">
                                <div class="ticker--iconholder ticker--iconholder__green align-items-center greenbg  flex  justify-content-center">
                                    <img src="<?php echo base_url();?>assets/frontend/img/assets/flood.png" alt="" class="ticker--img">

                                </div>
                                <div class="ticker--title">
                                    <?php echo FLOOD ?>
                                </div>
                                <div class="ticker--count">
                                    <?php echo !empty($report_inci['Flood'])?$report_inci['Flood']:'0'?>
                                </div>

                            </li>
                        </ul>

                    </div>
                    <div class="viewall">
                        <a href="#">
                            <span><?php echo $this->lang->line('viewall') ?></span>
                            <i class="fa fa-caret-right"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="white-bg section-padding">
        <div class="container" id="startsection">
            <h4 class="heading"><?php echo $this->lang->line('differentbrowse') ?><!-- BROWSE DIFFERENT SECTION --></h4>

            <div class="row browse">
                <div class="col-md-6 col-lg-4">
                    <div class="listHolder">
                        <a href="<?php echo base_url(); ?>datacategory" class="plain">
                            <div class="overlay">
                                <div class="innerTitle"><?php echo $this->lang->line('dataset') ?><!-- BROWSE DATASETS --></div>
                                <p class="innerSubtitle"><?php echo $this->lang->line('acomgisdb');?> <!-- A complete GIS database --></p>
                            </div>
                        </a>

                        <img src="<?php echo base_url(); ?>assets/frontend/img/assets/education.png" alt="">

                    </div>

                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="listHolder">
                        <a href="<?php echo base_url(); ?>incidentmanagement" class="plain">
                            <div class="overlay">
                                <div class="innerTitle"><?php echo $this->lang->line('incidentmgmt'); ?></div>
                                <p class="innerSubtitle"><?php echo $this->lang->line('whattodobefore');?> <!-- What to do before, during and after disaster --></p>
                            </div>
                        </a>
                        <img src="<?php echo base_url(); ?>assets/frontend/img/assets/map.png" alt="">
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="listHolder">
                        <a href="<?php echo base_url(); ?>municipalprofile" class="plain">
                            <div class="overlay">
                                <div class="innerTitle"><?php echo $this->lang->line('munprofile'); ?></div>
                                <p class="innerSubtitle"><?php echo $this->lang->line('individualdigital');?><!-- Individual digital ward wise profile book --></p>
                            </div>
                        </a>
                        <img src="<?php echo base_url(); ?>assets/frontend/img/assets/5.png" alt="">
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="listHolder">
                        <a href="<?php echo base_url('drrinfo') ?>" class="plain">
                            <div class="overlay">
                                <div class="innerTitle"><?php echo $this->lang->line('drrinfodetail'); ?><!-- DRR INFORMATION  --></div>
                                <p class="innerSubtitle"><?php echo $this->lang->line('disasterinformation');?><!-- What to do before, during and after disaster --></p>
                            </div>
                        </a>
                        <img src="<?php echo base_url(); ?>assets/frontend/img/assets/4.png" alt="">
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="listHolder">
                        <a href="<?php echo base_url()?>dictionary" class="plain">
                            <div class="overlay">
                                <div class="innerTitle"><?php echo $this->lang->line('dictionary'); ?><!-- DRR DICTIONARY --></div>
                                <p class="innerSubtitle"><?php echo $this->lang->line('dictionaryofimpterminologies');?> <!-- Dictionary of important terminologies related to disaster  --></p>
                            </div>
                        </a>
                        <img src="<?php echo base_url(); ?>assets/frontend/img/assets/6.png" alt="">
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="listHolder">
                        <a href="<?php echo base_url()?>publication" class="plain">
                            <div class="overlay">
                                <div class="innerTitle"><?php echo $this->lang->line('publicationnmultimedia'); ?></div>
                                <p class="innerSubtitle"><?php echo $this->lang->line('Filesrelatedtoincidentmanagement'); ?>.</p>
                            </div>
                        </a>
                        <img src="<?php echo base_url(); ?>assets/frontend/img/assets/7.png" alt="">
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="listHolder">
                        <a href="<?php echo base_url()?>contact?cat=individual" class="plain">
                            <div class="overlay">
                                <div class="innerTitle"><?php echo $this->lang->line('contactinv'); ?></div>
                                <p class="innerSubtitle"><?php echo $this->lang->line('contactinventory');?>.</p>
                            </div>
                        </a>
                        <img src="<?php echo base_url(); ?>assets/frontend/img/assets/7.png" alt="">
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="listHolder">
                        <a href="<?php echo base_url(); ?>inventory" class="plain">
                            <div class="overlay">
                                <div class="innerTitle"><?php echo $this->lang->line('emergencymat');?></div>
                                <p class="innerSubtitle"><?php echo $this->lang->line('emergencymatdetails');?>.</p>
                            </div>
                        </a>

                        <img src="<?php echo base_url(); ?>assets/frontend/img/assets/7.png" alt="">

                    </div>

                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="listHolder">
                        <a href="<?php echo base_url() ?>/whodoes" class="plain">
                            <div class="overlay">
                                <div class="innerTitle"><?php echo $this->lang->line('whodoeswhat');?></div>
                                <p class="innerSubtitle"><?php echo $this->lang->line('whodoeswhatdetails');?></p>
                            </div>
                        </a>

                        <img src="<?php echo base_url(); ?>assets/frontend/img/assets/7.png" alt="">

                    </div>

                </div>
            </div>

        </div>

    </section>

  <section class="mobileScreens section-padding">

        <div class="container">
            <h4 class="heading"><?php echo $this->lang->line('howisourmobileapp');?><!-- HOW IS OUR MOBILE APP HELPFUL --></h4>
            <div class="mobsec ">
                <div class="mobileDes left">
                    <div class="flist "><?php echo $this->lang->line('diffmatabout');?> <!-- Different reading materials about disaster risk and hazards --></div>
                    <div class="flist "><?php echo $this->lang->line('intmapwithadmin');?> <!--  Interactive map with administrative data layers and category-wise datasets --></div>
                    <div class="flist "><?php echo $this->lang->line('advancesearchfacility');?><!--  Advance search facility to find specific datasets --></div>
                    <div class="flist "> <?php echo $this->lang->line('report_near');?></div>
                    <div class="flist "><?php echo $this->lang->line('notify_other');?> <!-- Notify others "I am safe" during disaster --></div>

                </div>
                <div class="mobileOuter">
                    <div class="mobileHolder">
                        <div class="mobileInner">
                            <div class="mobile-slide">
                                <div>
                                    <img src="<?php echo base_url();?>assets/frontend/img/assets/third.jpg" alt="">
                                </div>
                                <div>
                                    <img src="<?php echo base_url();?>assets/frontend/img/assets/first.jpg" alt="">
                                </div>
                                <div>
                                    <img src="<?php echo base_url();?>assets/frontend/img/assets/second.jpg" alt="">
                                </div>
                                <div>
                                    <img src="<?php echo base_url();?>assets/frontend/img/assets/fourth.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="downloadSec">
                        <div class="downloadtitle">
                            Download DIMS APP
                        </div>
                        <a href="">
                            <img src="<?php echo base_url();?>assets/frontend/img/assets/googleplay.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="mobileDes">
                    <div class="flist"><?php echo $this->lang->line('disaster_alert');?><!-- Set Alarm during disaster (substitute to whistle) --></div>
                    <div class="flist"><?php echo $this->lang->line('flashlight');?>  <!-- One click to activate flash light and strobe light --></div>
                    <div class="flist"><?php echo $this->lang->line('askfor_help');?><!--   One button "Ask for Help" to locate requester during an emergency --></div>
                    <div class="flist"><?php echo $this->lang->line('send_alert');?> <!-- Send alerts from DHM about weather events --></div>
                    <div class="flist"><?php echo $this->lang->line('user_engagement');?> </div>

                </div>
            </div>
        </div>
    </section>
  <section class="section-padding news">
      <div class="container">
          <h4 class="heading"><?php echo $this->lang->line('findmorenewaboutus');?><!-- FIND MORE NEWS ABOUT US --></h4>
          <div class="row">
              <div class="col-md-4">
                  <div class="infoSection">
                      <div class="infosectionHeader">
                          <div class="iconHolder">
                              <i class="fa fa-bell"></i>
                          </div>
                          <div class="stitle">
                             <?php echo $this->lang->line('alert');?> <!-- Alert -->
                          </div>
                      </div>
                      <a href="">
                          <div class="infolist">
                              <p class="infotitle">
                                  5.6 Richter scale earthquake-Epicenter at Laltipur
                              </p>
                              <div class="flex">
                                  <div class="date">
                                      <i class="fas fa-clock"></i>
                                      <span>2018-10-15</span>
                                  </div>
                                  <div class="publisher  float-right-fx">
                                      <i class="fas fa-newspaper"></i>
                                      <span>
                                          Nepal Earthquake center
                                      </span>

                                  </div>
                              </div>
                          </div>
                      </a>
                      <a href="">
                          <div class="infolist">
                              <p class="infotitle">
                                  5.6 Richter scale earthquake-Epicenter at Laltipur
                              </p>
                              <div class="flex">
                                  <div class="date">
                                      <i class="fa fa-clock"></i>
                                      <span>2018-10-15</span>
                                  </div>
                                  <div class="publisher  float-right-fx">
                                      <i class="fa fa-newspaper"></i>
                                      <span>
                                          Nepal Earthquake center
                                      </span>

                                  </div>
                              </div>
                          </div>
                      </a>
                      <a href="">
                          <div class="infolist">
                              <p class="infotitle">
                                  5.6 Richter scale earthquake-Epicenter at Laltipur
                              </p>
                              <div class="flex">
                                  <div class="date">
                                      <i class="fa fa-clock"></i>
                                      <span>2018-10-15</span>
                                  </div>
                                  <div class="publisher  float-right-fx">
                                      <i class="fa fa-newspaper"></i>
                                      <span>
                                          Nepal Earthquake center
                                      </span>

                                  </div>
                              </div>
                          </div>
                      </a>
                      <a href="">
                          <div class="infolist">
                              <p class="infotitle">
                                  5.6 Richter scale earthquake-Epicenter at Laltipur
                              </p>
                              <div class="flex">
                                  <div class="date">
                                      <i class="fa fa-clock"></i>
                                      <span>2018-10-15</span>
                                  </div>
                                  <div class="publisher  float-right-fx">
                                      <i class="fa fa-newspaper"></i>
                                      <span>
                                          Nepal Earthquake center
                                      </span>

                                  </div>
                              </div>
                          </div>
                      </a>
                      <a href="">
                          <div class="infolist">
                              <p class="infotitle">
                                  5.6 Richter scale earthquake-Epicenter at Laltipur
                              </p>
                              <div class="flex">
                                  <div class="date">
                                      <i class="fa fa-clock"></i>
                                      <span>2018-10-15</span>
                                  </div>
                                  <div class="publisher  float-right-fx">
                                      <i class="fa fa-newspaper"></i>
                                      <span>
                                          Nepal Earthquake center
                                      </span>

                                  </div>
                              </div>

                          </div>
                      </a>

                  </div>
              </div>
              <div class="col-md-4">
                  <div class="infoSection">
                      <div class="infosectionHeader">
                          <div class="iconHolder">
                              <i class="fab fa-twitter"></i>
                          </div>
                          <div class="stitle">
                              Tweets
                          </div>
                      </div>
                      <a href="">
                          <div class="infolist">
                              <p class="infotitle">
                                  5.6 Richter scale earthquake-Epicenter at Laltipur
                              </p>
                              <div class="flex">
                                  <div class="date">
                                      <i class="fa fa-clock"></i>
                                      <span>2018-10-15</span>
                                  </div>
                                  <div class="publisher  float-right-fx">
                                      <i class="fa fa-newspaper"></i>
                                      <span>
                                          Nepal Earthquake center
                                      </span>

                                  </div>
                              </div>
                          </div>
                      </a>
                      <a href="">
                          <div class="infolist">
                              <p class="infotitle">
                                  5.6 Richter scale earthquake-Epicenter at Laltipur
                              </p>
                              <div class="flex">
                                  <div class="date">
                                      <i class="fa fa-clock"></i>
                                      <span>2018-10-15</span>
                                  </div>
                                  <div class="publisher  float-right-fx">
                                      <i class="fa fa-newspaper"></i>
                                      <span>
                                          Nepal Earthquake center
                                      </span>

                                  </div>
                              </div>
                          </div>
                      </a>
                      <a href="">
                          <div class="infolist">
                              <p class="infotitle">
                                  5.6 Richter scale earthquake-Epicenter at Laltipur
                              </p>
                              <div class="flex">
                                  <div class="date">
                                      <i class="fa fa-clock"></i>
                                      <span>2018-10-15</span>
                                  </div>
                                  <div class="publisher  float-right-fx">
                                      <i class="fa fa-newspaper"></i>
                                      <span>
                                          Nepal Earthquake center
                                      </span>

                                  </div>
                              </div>
                          </div>
                      </a>
                      <a href="">
                          <div class="infolist">
                              <p class="infotitle">
                                  5.6 Richter scale earthquake-Epicenter at Laltipur
                              </p>
                              <div class="flex">
                                  <div class="date">
                                      <i class="fa fa-clock"></i>
                                      <span>2018-10-15</span>
                                  </div>
                                  <div class="publisher  float-right-fx">
                                      <i class="fa fa-newspaper"></i>
                                      <span>
                                          Nepal Earthquake center
                                      </span>

                                  </div>
                              </div>
                          </div>
                      </a>
                      <a href="">
                          <div class="infolist">
                              <p class="infotitle">
                                  5.6 Richter scale earthquake-Epicenter at Laltipur
                              </p>
                              <div class="flex">
                                  <div class="date">
                                      <i class="fa fa-clock"></i>
                                      <span>2018-10-15</span>
                                  </div>
                                  <div class="publisher  float-right-fx">
                                      <i class="fa fa-newspaper"></i>
                                      <span>
                                          Nepal Earthquake center
                                      </span>

                                  </div>
                              </div>

                          </div>
                      </a>

                  </div>
              </div>
              <div class="col-md-4">
                  <div class="infoSection">
                      <div class="infosectionHeader">
                          <div class="iconHolder">
                              <i class="fa fa-newspaper"></i>
                          </div>
                          <div class="stitle">
                              News
                          </div>
                      </div>
                      <a href="">
                          <div class="infolist">
                              <p class="infotitle">
                                  5.6 Richter scale earthquake-Epicenter at Laltipur
                              </p>
                              <div class="flex">
                                  <div class="date">
                                      <i class="fa fa-clock"></i>
                                      <span>2018-10-15</span>
                                  </div>
                                  <div class="publisher  float-right-fx">
                                      <i class="fa fa-newspaper"></i>
                                      <span>
                                          Nepal Earthquake center
                                      </span>

                                  </div>
                              </div>
                          </div>
                      </a>
                      <a href="">
                          <div class="infolist">
                              <p class="infotitle">
                                  5.6 Richter scale earthquake-Epicenter at Laltipur
                              </p>
                              <div class="flex">
                                  <div class="date">
                                      <i class="fa fa-clock"></i>
                                      <span>2018-10-15</span>
                                  </div>
                                  <div class="publisher  float-right-fx">
                                      <i class="fa fa-newspaper"></i>
                                      <span>
                                          Nepal Earthquake center
                                      </span>

                                  </div>
                              </div>
                          </div>
                      </a>
                      <a href="">
                          <div class="infolist">
                              <p class="infotitle">
                                  5.6 Richter scale earthquake-Epicenter at Laltipur
                              </p>
                              <div class="flex">
                                  <div class="date">
                                      <i class="fa fa-clock"></i>
                                      <span>2018-10-15</span>
                                  </div>
                                  <div class="publisher  float-right-fx">
                                      <i class="fa fa-newspaper"></i>
                                      <span>
                                          Nepal Earthquake center
                                      </span>

                                  </div>
                              </div>
                          </div>
                      </a>
                      <a href="">
                          <div class="infolist">
                              <p class="infotitle">
                                  5.6 Richter scale earthquake-Epicenter at Laltipur
                              </p>
                              <div class="flex">
                                  <div class="date">
                                      <i class="fa fa-clock"></i>
                                      <span>2018-10-15</span>
                                  </div>
                                  <div class="publisher  float-right-fx">
                                      <i class="fa fa-newspaper"></i>
                                      <span>
                                          Nepal Earthquake center
                                      </span>

                                  </div>
                              </div>
                          </div>
                      </a>
                      <a href="">
                          <div class="infolist">
                              <p class="infotitle">
                                  5.6 Richter scale earthquake-Epicenter at Laltipur
                              </p>
                              <div class="flex">
                                  <div class="date">
                                      <i class="fa fa-clock"></i>
                                      <span>2018-10-15</span>
                                  </div>
                                  <div class="publisher  float-right-fx">
                                      <i class="fa fa-newspaper"></i>
                                      <span>
                                          Nepal Earthquake center
                                      </span>

                                  </div>
                              </div>

                          </div>
                      </a>

                  </div>
              </div>
          </div>
      </div>
      <div class="shape">
          <img src="<?php echo base_url();?>assets/frontend/img/assets/shape.png" alt="">
      </div>
  </section>
<script>
   $(document).ready(function(){
      bannerHeight();
          window.onresize = function(event) {
               bannerHeight();
           }
        function bannerHeight() {
            vph = $(window).height();
            headerHeight = $("#website-header").height();
            vph = vph - headerHeight;
            $("#banner").height(vph);
            vph = (vph - $(".banner-item").height())/2;
            $(".banner-item").css('padding-top', vph);
            $(".banner-item").css('padding-bottom', vph);
        }
   });
</script>
<script type="text/javascript">
  // $("#started").click(function() {
  //     $('html, body').animate({
  //         scrollTop: $("#nextDiv").offset().top
  //     }, 1000);
  // });
  $(document).ready(function(){
    if ($.fn.niceScroll) {
        $(".alerts-list").niceScroll({
            cursorcolor: "#2057af",
            cursorborder: "0px solid #fff",
            cursorborderradius: "0px",
            cursorwidth: "4px"
        });
        $(".alerts-list").getNiceScroll().resize();
        $(".alerts-list").getNiceScroll().show();
    }
  });
  
</script>

