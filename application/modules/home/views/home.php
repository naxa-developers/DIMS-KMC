
        <div class="container">
            <div class="titleInfo">
                <h3>
                    <!-- Disaster Information Management System --><?php echo $this->lang->line('big_text');?>
                </h3>
                <p><!-- A GIS based Information Platform --><?php echo $this->lang->line('small_text');?> </p>

                <button class="btn btn-primary btn-lg circularBtn ">
                    <!-- GET STARTED --><?php echo $this->lang->line('get_started');?>
                </button>
            </div>

            <div class="accidnets">
                <h4 class="heading"><?php echo $this->lang->line('reportbymonth');?><!-- INCIDNETS REPORTS DURING LAST THREE MONTHS --></h4>
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
        <div class="container">
            <h4 class="heading"><?php echo $this->lang->line('differentbrowse') ?><!-- BROWSE DIFFERENT SECTION --></h4>

            <div class="row browse">
                <div class="col-md-4">
                    <div class="listHolder">
                        <a href="datacategory.html" class="plain">
                            <div class="overlay">
                                <div class="innerTitle"><?php echo $this->lang->line('dataset') ?><!-- BROWSE DATASETS --></div>
                                <p class="innerSubtitle"><?php echo $this->lang->line('acomgisdb');?> <!-- A complete GIS database --></p>
                            </div>
                        </a>

                        <img src="<?php echo base_url(); ?>assets/frontend/img/assets/education.png" alt="">

                    </div>

                </div>
                <div class="col-md-4">
                    <div class="listHolder">
                        <a href="incidentmanagement.html" class="plain">
                            <div class="overlay">
                                <div class="innerTitle">INCIDENT MANAGEMENT</div>
                                <p class="innerSubtitle"><?php echo $this->lang->line('whattodobefore');?> <!-- What to do before, during and after disaster --></p>
                            </div>
                        </a>
                        <img src="<?php echo base_url(); ?>assets/frontend/img/assets/map.png" alt="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="listHolder">
                        <a href="municipalprofile.html" class="plain">
                            <div class="overlay">
                                <div class="innerTitle">MUNICIPAL PROFILE</div>
                                <p class="innerSubtitle"><?php echo $this->lang->line('individualdigital');?><!-- Individual digital ward wise profile book --></p>
                            </div>
                        </a>
                        <img src="<?php echo base_url(); ?>assets/frontend/img/assets/5.png" alt="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="listHolder">
                        <a href="<?php echo base_url('drrinfo') ?>" class="plain">
                            <div class="overlay">
                                <div class="innerTitle"><?php echo $this->lang->line('drrinfodetail'); ?><!-- DRR INFORMATION  --></div>
                                <p class="innerSubtitle"><?php echo $this->lang->line('whattodobefore');?><!-- What to do before, during and after disaster --></p>
                            </div>
                        </a>
                        <img src="<?php echo base_url(); ?>assets/frontend/img/assets/4.png" alt="">
                    </div>
                </div>
                <div class="col-md-4">
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
                <div class="col-md-4">
                    <div class="listHolder">
                        <a href="explore.html" class="plain">
                            <div class="overlay">
                                <div class="innerTitle">PUBLICATIONS AND MULTIMEDIA</div>
                                <p class="innerSubtitle"><?php echo $this->lang->line('Filesrelatedtoincidentmanagement');?>.</p>
                            </div>
                        </a>
                        <img src="<?php echo base_url(); ?>assets/frontend/img/assets/7.png" alt="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="listHolder">
                        <a href="contact.html" class="plain">
                            <div class="overlay">
                                <div class="innerTitle">CONTACT INVENTORY</div>
                                <p class="innerSubtitle"><?php echo $this->lang->line('Filesrelatedtoincidentmanagement');?>.</p>
                            </div>
                        </a>
                        <img src="<?php echo base_url(); ?>assets/frontend/img/assets/7.png" alt="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="listHolder">
                        <a href="inventory.html" class="plain">
                            <div class="overlay">
                                <div class="innerTitle">EMERGENCY MATERIALS</div>
                                <p class="innerSubtitle"><?php echo $this->lang->line('Filesrelatedtoincidentmanagement');?>.</p>
                            </div>
                        </a>

                        <img src="<?php echo base_url(); ?>assets/frontend/img/assets/7.png" alt="">

                    </div>

                </div>
                <div class="col-md-4">
                    <div class="listHolder">
                        <a href="#" class="plain">
                            <div class="overlay">
                                <div class="innerTitle">ABOUT PROJECT</div>
                                <p class="innerSubtitle"><?php echo $this->lang->line('Filesrelatedtoincidentmanagement');?>.</p>
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
                    <div class="flist "> Report hazard near a user </div>
                    <div class="flist "><?php echo $this->lang->line('notify_other');?> <!-- Notify others "I am safe" during disaster --></div>
                    <div class="flist"><?php echo $this->lang->line('user_engagement');?> </div>
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
                    <div class="flist"><?php echo $this->lang->line('impupdates');?></div>
                    <div class="flist "><?php echo $this->lang->line('notify_other');?> <!-- Notify others "I am safe" during disaster --></div>
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
<!-- <script>
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
<div id="banner">
  <div class="banner-item">
          <img src="<?php echo !empty(COVER_POHOTO_EN)?COVER_POHOTO_EN:''; ?>" class="banner-img">
          <div class="container clearfix">
            <div class="banner-caption text-center mb-4">
              <h2><strong><?php echo !empty(COVER_BIG)?COVER_BIG:'' ?></strong></h2>
              <p>
                <?php echo !empty(COVER_SMALL_EN)?COVER_SMALL_EN:'' ?>
              </p>
            </div>
            <div class="row justify-content-center">
              <div class="col-md-2">
                <div class="disaster-summary-item" data-mh="summary-item">
                  <img src="<?php echo base_url()?>assets/icon/floods1.png" height="64">
                  <h6><?php echo FLOOD ?></h6>
                  <h4><?php echo !empty($report_inci['Flood'])?$report_inci['Flood']:'0'?></h4>
                </div>
              </div>
              <div class="col-md-2">
                <div class="disaster-summary-item" data-mh="summary-item">
                    <img src="<?php echo base_url()?>assets/icon/fire1.png" height="64">
                  <h6><?php echo FIRE ?></h6>
                  <h4><?php echo !empty($report_inci['Fire'])?$report_inci['Fire']:'0'?></h4>
                </div>
              </div>
              <div class="col-md-2">
                <div class="disaster-summary-item" data-mh="summary-item">
                    <img src="<?php echo base_url()?>assets/icon/landslide1.png" height="64">
                  <h6><?php echo LANDSLIDE ?></h6>
                  <h4><?php echo !empty($report_inci['Landslide'])?$report_inci['Landslide']:'0'?></h4>
                </div>
              </div>
              <div class="col-md-2">
                <div class="disaster-summary-item" data-mh="summary-item">
                    <img src="<?php echo base_url()?>assets/icon/road.png" height="64">
                  <h6><?php echo ROAD ?></h6>
                  <h4><?php echo !empty($report_inci['Road'])?$report_inci['Road']:'0'?></h4>
                </div>
              </div>
              <div class="col-md-2">
                <a href="<?php echo base_url() ?>report_page" class="disaster-summary-item" data-mh="summary-item">
                  <p><?php echo !empty(MORE)?MORE:'' ?> +</p>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
        <div class="bg-dark" id="nextDiv">
          <div class="container">
            <div class="row justify-content-md-center">
              <div class="col-md-6">
                <div class="search-wrap text-center">
                  <h3 class="mb-3"><?php echo !empty(SEARCH_DATASET)?SEARCH_DATASET:'' ?><strong></strong></h3>
                  <form method="POST" action="<?php echo base_url()?>datasets">
                    <div class="input-group input-group-lg">
                  <input type="text" class="form-control" name="search" placeholder="<?php echo !empty(SEARCH)?SEARCH:'' ?>" aria-label="Keywords" aria-describedby="basic-addon2">
                  <div class="input-group-append">
                    <button class="btn btn-secondary" name="submit_search" type="submit"><?php echo !empty(SEARCH)?SEARCH:'' ?></button>
                  </div>
                </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="dataset-wrap">
          <div class="container">


        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <?php if(CAT_ONE): ?>
          <li class="nav-item">
            <a class="nav-link active" id="hazard-tab" data-toggle="tab" href="#hazard" role="tab" aria-controls="hazard" aria-selected="true"><?php echo CAT_ONE ?></a>
          </li>
        <?php endif;
        if(CAT_TWO): ?>
          <li class="nav-item">
            <a class="nav-link" id="exposure-tab" data-toggle="tab" href="#exposure" role="tab" aria-controls="exposure" aria-selected="false"><?php echo CAT_TWO ?></a>
          </li>
       <?php endif;
        if(CAT_THREE): ?>
          <li class="nav-item">
            <a class="nav-link" id="baseline-tab" data-toggle="tab" href="#baseline" role="tab" aria-controls="baseline" aria-selected="false"><?php echo CAT_THREE ?></a>
          </li>
        <?php endif; ?>
        </ul>
        <div class="tab-content scrolling-wrap" style="height: 390px;" id="myTabContent">
          <div class="tab-pane fade show active" id="hazard" role="tabpanel" aria-labelledby="hazard-tab">
            <div class="container-fluid">
              <ul class="row">
                  <?php
                 if($exposure_data){
                  foreach($exposure_data as $data){ ?>
                <li class="col-md-3 col-lg-2">
                  <a href="<?php echo base_url()?>category?tbl=<?php echo $data['category_table'] ?> && name=<?php echo $data['category_name'] ?> " class="dataset-item-wrap margin-top-large" data-mh="eq-item">
                    <img src="<?php echo $data['category_photo'] ?>">
                    <h6><?php echo  $data['category_name'] ?></h6>
                      <span class="count"><?php

                        if(!$this->db->table_exists($data['category_table'])){
                           echo 0;

                        }else{

                      echo $data_count_cat[$data['category_table']];
                        }
                      ?></span>
                  </a>
                </li>
            <?php } } ?>
          </ul>
            </div>
          </div>
          <div class="tab-pane fade" id="exposure" role="tabpanel" aria-labelledby="exposure-tab">
<ul class="row">
  <?php
    if($hazard_data) {
    foreach($hazard_data as $data){ ?>
            <li class="col-md-3 col-lg-2">
              <a href="<?php echo base_url()?>category?tbl=<?php echo $data['category_table'] ?> && name=<?php echo $data['category_name'] ?> " class="dataset-item-wrap margin-top-large" data-mh="eq-item">
                <img src="<?php echo $data['category_photo'] ?>">

                <h6><?php echo  $data['category_name'] ?></h6>
                  <span class="count"><?php

                    if(!$this->db->table_exists($data['category_table'])){
                       echo 0;

                    }else{

                  echo $data_count_cat[$data['category_table']];
                    }
                  ?></span>
              </a>
            </li>
          <?php }}?>
          </ul>
          </div>
          <div class="tab-pane fade" id="baseline" role="tabpanel" aria-labelledby="baseline-tab">
<ul class="row">
    <?php
if($baseline_data){
    foreach($baseline_data as $data){ ?>
            <li class="col-md-3 col-lg-2">
              <a href="<?php echo base_url()?>category?tbl=<?php echo $data['category_table']?>&&name=<?php echo $data['category_name'] ?>" class="dataset-item-wrap margin-top-large" data-mh="eq-item">
                <img src="<?php echo $data['category_photo'] ?>">
                <h6><?php echo  $data['category_name'] ?></h6>
                <span class="count"><?php

                  if(!$this->db->table_exists($data['category_table'])){
                     echo 0;

                  }else{

                echo $data_count_cat[$data['category_table']];
                  }
                ?></span>
              </a>
            </li>

          <?php }} ?>
          </ul>
          </div>
        </div>

      </div>
    </div>
        <?php if($feat_lang=='en'){ ?>
<a href="category?tbl=<?php echo $feature['table'] ?> && name=<?php echo $feature['title'] ?>">
    <div class="bg-white feature-section">
      <div class="container">
        <div class="featured-post clearfix">
          <h5 class="post-ribbon">Featured Dataset</h5>
          <img src="<?php echo $feature['photo'] ?>" alt="">
          <h3><?php echo $feature['title'] ?></h3>
          <p>
          <?php echo $feature['summary'] ?>
          </p>
        </div>
      </div>
    </div>
</a>
<?php }else{ ?>
  <a href="category?tbl=<?php echo $feature['table'] ?>&& name=<?php echo $feature['nepali_title'] ?>">
      <div class="bg-white feature-section">
        <div class="container">
          <div class="featured-post clearfix">
            <h5 class="post-ribbon">विशेष डाटासेट</h5>
            <?php if ($feature['photo']): ?>
              <img src="<?php echo $feature['photo'] ?>" alt="विशेष डाटासेट">
            <?php endif; ?>
            <h3><a href="#" title=""><?php echo $feature['nepali_title'] ?></a></h3>
            <p>
            <?php echo !empty($feature['nepali_summary'])?$feature['nepali_summary']:'' ?>
            </p>
          </div>
        </div>
      </div>
  </a>
<?php } ?>
<script type="text/javascript">
  $("#started").click(function() {
      $('html, body').animate({
          scrollTop: $("#nextDiv").offset().top
      }, 1000);
  });
  $(document).ready(function(){
    if ($.fn.niceScroll) {
        $(".scrolling-wrap").niceScroll({
            cursorcolor: "#2057af",
            cursorborder: "0px solid #fff",
            cursorborderradius: "0px",
            cursorwidth: "8px"
        });
        $(".scrolling-wrap").getNiceScroll().resize();
        $(".scrolling-wrap").getNiceScroll().show();
    }
  });
</script>
 -->
   

   