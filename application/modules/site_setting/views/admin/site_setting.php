<!--main content start-->
<style media="screen">

.panel-body.space {
  line-height: 3;
}

</style>

<section id="main-content" class="">
  <section class="wrapper">
    <!-- page start-->
    <!-- page start-->





    <div class="row">
      <div class="col-lg-12">
        <section class="panel">
          <header class="panel-heading">
            <!-- Site Setting -->
            <?php echo $this->lang->line("site_setting"); ?>
            <span class="tools pull-right">
              <!-- switch Language
  <a class="nav-link" href="<?php echo base_url(FOLDER_ADMIN);?>/site_setting/site_setting_nep"><img src="<?php echo base_url();?>assets/img/nep.png" height="15"></a>
  <a class="nav-link" href="<?php echo base_url(FOLDER_ADMIN);?>/site_setting/site_setting"><img src="<?php echo base_url();?>assets/img/uk.png" height="15"></a>
  </span> -->

          </header>

          <?php
            $error=	$this->session->flashdata('msg');
             if($error){ ?>
               <div class="alert alert-success alert-dismissible">
       <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
       <strong>Message</strong> <?php echo $error ; ?>
                    </div>
             <?php
             }
              ?>



          <div class="panel-body">


              <div >

                <div class="panel panel-info class col-md-6">
                  <div class="panel-heading text-center">
                    <?php echo $this->lang->line("site_logo"); ?> <?php echo $this->lang->line("and"); ?> <?php echo $this->lang->line("site_text"); ?>
                  </div>

                  <div class="panel-body space">

                      <form method="post" action ="<?php echo base_url(FOLDER_ADMIN); ?>/site_setting/update_site_text" enctype="multipart/form-data" >

                    <div class="form-group ">
                      <label class="control-label col-md-3"><?php echo $this->lang->line("site_logo"); ?></label>
                      <div class="col-md-9">
                        <div class="fileupload fileupload-new" data-provides="fileupload">
                          <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                            <img src="<?php echo $site_info['site_logo']?>" alt="" />
                          </div>
                          <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                          <div>
                            <span class="btn btn-white btn-file">
                              <span class="fileupload-new"><i class="fa fa-paper-clip"></i> <?php echo $this->lang->line("select_image"); ?></span>
                              <span class="fileupload-exists"><i class="fa fa-undo"></i><?php echo $this->lang->line("change"); ?></span>
                              <input type="file" name="site_logo" class="default" />
                            </span>

                          </div>
                        </div>

                      </div>
                    </div>

                    <div class="row">
                    <label for="project_name" class="control-label col-md-3"><?php echo $this->lang->line("site_name"); ?>:</label>
                    <div class="col-md-9">
                      <input type="text" name="site_name" value="<?php echo $site_info['site_name']?>"  id="system_mail" placeholder="Changu Narayan Municipality" class="form-control" />

                    </div>
                    </div>

                    <div class="row">
                    <label for="project_name" class="control-label col-md-3"><?php echo $this->lang->line("site_text"); ?></label>
                    <div class="col-md-9">
                      <textarea type="text" name="site_text"   id="system_mail" placeholder="Disaster Information Management Platform" class="form-control"><?php echo $site_info['site_text']?></textarea>

                    </div>
                    </div>
                    <div class="col-md-3"></div>
                    <div class="col-md-9">
                      <button type="submit" name="submit" class="btn btn-primary"><?php echo $this->lang->line("update"); ?></button>
                    </div>

                </form>

                  </div>
                </div>
              </div>
              <div >
              <div class="panel panel-success class ">
                <div class="panel-heading text-center col-md-6" >
                  <?php echo $this->lang->line("site_cover_photo"); ?>               
                </div>

                <div class="panel-body space">

                  <form method="post" action ="<?php echo base_url(FOLDER_ADMIN); ?>/site_setting/update_cover" enctype="multipart/form-data" >

                  <div class="form-group ">
                    <label class="control-label col-md-3"><?php echo $this->lang->line("site_cover_photo"); ?> </label>
                    <div class="col-md-9">
                      <div class="fileupload fileupload-new" data-provides="fileupload">
                        <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                          <img src="<?php echo $site_info['cover_photo']?>" alt="" />
                        </div>
                        <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                        <div>
                          <span class="btn btn-white btn-file">
                            <span class="fileupload-new"><i class="fa fa-paper-clip"></i><?php echo $this->lang->line("select_image"); ?> </span>
                            <span class="fileupload-exists"><i class="fa fa-undo"></i> <?php echo $this->lang->line("change"); ?></span>
                            <input type="file" name="cover_photo" class="default" />
                          </span>

                        </div>
                      </div>

                    </div>
                  </div>
                  <div class="row ">
                    <div class="col-md-3">
                  <label for="project_name" class="control-label "><?php echo $this->lang->line("big_text"); ?></label>
                  </div>
                  <div class="col-md-9">
                    <textarea type="text" name="cover_big"  id="system_mail" placeholder="Changu Narayan Disaster Information Management Platform" class="form-control" ><?php echo $site_info['cover_big']?></textarea>

                </div>
                    </div>                 
                  <div class="row">
                    <div class="col-md-3">
                  <label for="project_name" class="control-label"> <?php echo $this->lang->line("small_text"); ?> </label>
                  </div>
                  <div class="col-md-9">
                    <textarea type="text" name="cover_small"  id="system_mail" placeholder="A GIS based data portal for disaster management" class="form-control" ><?php echo $site_info['cover_small']?></textarea>

                  </div>
                  </div>
                  <div class="col-md-3"></div>
                  <div class="col-md-9">
                    <button type="submit" name="submit" class="btn btn-primary"><?php echo $this->lang->line("update"); ?></button>
                  </div>



                </form>

                </div>
              </div>
              </div>
              <div class="col-md-12">
              <div class="col-md-6">
              <div class="panel panel-warning class text-center">
                <div class="panel-heading" style="background-color:#e7d70fab">
                  <?php echo $this->lang->line("footer_right_text"); ?>
                </div>
                <div class="panel-body">
                  <form method="POST" action="<?php echo base_url(FOLDER_ADMIN); ?>/site_setting/footer_text">
                  <div class="row">
                  <label for="project_name" class="control-label col-md-3"><?php echo $this->lang->line("big_text"); ?></label>
                  <div class="col-md-9">
                    <textarea type="text" name="footer_big"  id="system_mail" placeholder="Disaster Information Management Platform" class="form-control" ><?php echo $site_info['footer_big']?></textarea>
                  </div>
                  </div>
                  <div class="row">
                  <label for="project_name" class="control-label col-md-3"><?php echo $this->lang->line("small_text"); ?></label>
                  <div class="col-md-9">
                    <textarea type="text" name="footer_small"  id="system_mail" placeholder="This platform visualizes the data regarding risk and hazards over available dataset in order to enable basic risk assessment in the municipality." class="form-control" ><?php echo $site_info['footer_small']?></textarea>
                    <br/>
                  </div>
                  </div>
                  <div class="col-md-10">
                    <button type="submit" name="submit" class="btn btn-primary"><?php echo $this->lang->line("update"); ?></button>
                  </div>
              </form>
                </div>
              </div>
              </div>



 <div class="panel panel-info class text-center">
                                  <form method="POST" action="<?php echo base_url(FOLDER_ADMIN); ?>/site_setting/find_us_links">
                                <div class="panel-heading col-md-6">
                                <?php echo $this->lang->line("social_links"); ?>
                                </div>
                                <div class="panel-body space">

                                  <!-- <div class="row"> -->
                                    <!-- <div class="col-md-6"> -->
                                      <div class="row">
                                  <label for="project_name" class="control-label col-md-4"><?php echo $this->lang->line("facebook"); ?>:</label>

                                  <div class="col-md-8">
                                    <input type="text" name="facebook"  id="facebook_link" placeholder="Chnagunarayan" class="form-control" value="<?php echo $site_info['facebook']?>"/>
                                    </div>

                                  <!-- </div> -->
                                </div>
                                <!-- <div class="col-md-6"> -->
                                  <div class="row">
                                  <label for="project_name" class="control-label col-md-4"><?php echo $this->lang->line("twitter"); ?>:</label>

                                  <div class="col-md-8">
                                    <input type="text" name="twitter"  id="twitter_link" placeholder="http://app.naxa.com.np/" class="form-control" value="<?php echo $site_info['twitter']?>"/>
                                    </div>
                                  </div>
                                <!-- </div> -->
                                  <!-- <div class="col-md-6"> -->
                                    <div class="row">
                                    <label for="project_name" class="control-label col-md-4"><?php echo $this->lang->line("google_plus"); ?>:</label>

                                    <div class="col-md-8">
                                      <input type="text" name="google"  id="twitter_link" placeholder="Chnagunarayan" class="form-control" value="<?php echo $site_info['google']?>"/>
                                      </div>
                                    </div>

                                  <!-- </div> -->

                                  <div class="col-md-11">
                                    <button type="submit" name="submit" class="btn btn-primary"><?php echo $this->lang->line("update"); ?></button>
                                  </div>

                          </form>

                                </div>
</div>

              <div class="panel panel-danger class text-center">
                <div class="panel-heading">
                <?php echo $this->lang->line("important_links"); ?>
                </div>
                <div class="panel-body space ">
                  <div class="row">
                      <form method="POST" action="<?php echo base_url(FOLDER_ADMIN); ?>/site_setting/important_link">
                    <div class="col-md-6">
                      <label for="project_name" class="control-label col-md-4"><?php echo $this->lang->line("1_site_name"); ?></label>

                      <div class="col-md-8">
                        <input type="text" name="1_name"  id="facebook_link" placeholder="Chnagunarayan" class="form-control" value="<?php echo $site_info['1_name']?>"/>


                      </div>
                    </div>
                    <div class="col-md-6">

                      <label for="project_name" class="control-label col-md-4"><?php echo $this->lang->line("1_site_link"); ?></label>

                      <div class="col-md-8">
                        <input type="text" name="1_link"  id="twitter_link" placeholder="http://app.naxa.com.np/" class="form-control" value="<?php echo $site_info['1_link']?>"/>

                      </div></div>
                      <div class="col-md-6">
                        <label for="project_name" class="control-label col-md-4"><?php echo $this->lang->line("2_site_name"); ?></label>

                        <div class="col-md-8">
                          <input type="text" name="2_name"  id="twitter_link" placeholder="Chnagunarayan" class="form-control" value="<?php echo $site_info['2_name']?>"/>

                        </div>
                      </div>
                      <div class="col-md-6">
                        <label for="project_name" class="control-label col-md-4"><?php echo $this->lang->line("2_site_link"); ?></label>

                        <div class="col-md-8">
                          <input type="text" name="2_link"  id="twitter_link" placeholder="http://app.naxa.com.np/" class="form-control" value="<?php echo $site_info['2_link']?>"/>

                        </div></div>
                        <div class="col-md-6">
                          <label for="project_name" class="control-label col-md-4"><?php echo $this->lang->line("3_site_name"); ?></label>

                          <div class="col-md-8">
                            <input type="text" name="3_name"  id="twitter_link" placeholder="Chnagunarayan" class="form-control" value="<?php echo $site_info['3_name']?>"/>

                          </div></div>
                          <div class="col-md-6">
                            <label for="project_name" class="control-label col-md-4"><?php echo $this->lang->line("3_site_link"); ?></label>

                            <div class="col-md-8">
                              <input type="text" name="3_link"  id="twitter_link" placeholder="http://app.naxa.com.np/" class="form-control" value="<?php echo $site_info['3_link']?>"/>

                            </div></div>
                            <div class="col-md-6">
                              <label for="project_name" class="control-label col-md-4"><?php echo $this->lang->line("4_site_name"); ?></label>

                              <div class="col-md-8">
                                <input type="text" name="4_name"  id="twitter_link" placeholder="Chnagunarayan" class="form-control" value="<?php echo $site_info['4_name']?>"/>

                              </div></div>
                              <div class="col-md-6">
                                <label for="project_name" class="control-label col-md-4"><?php echo $this->lang->line("4_site_link"); ?></label>

                                <div class="col-md-8">
                                  <input type="text" name="4_link"  id="twitter_link" placeholder="http://app.naxa.com.np/" class="form-control" value="<?php echo $site_info['4_link']?>"/>

                                </div></div>
                                <div class="col-md-6">
                                  <label for="project_name" class="control-label col-md-4"><?php echo $this->lang->line("5_site_name"); ?></label>

                                  <div class="col-md-8">
                                    <input type="text" name="5_name"  id="twitter_link" placeholder="Chnagunarayan" class="form-control" value="<?php echo $site_info['5_name']?>"/>

                                  </div></div>   <div class="col-md-6">
                                    <label for="project_name" class="control-label col-md-4"><?php echo $this->lang->line("5_site_link"); ?></label>

                                    <div class="col-md-8">
                                      <input type="text" name="5_link"  id="twitter_link" placeholder="http://app.naxa.com.np/" class="form-control" value="<?php echo $site_info['5_link']?>"/>

                                    </div></div>
                                  </div>



                                  <div class="col-md-10">
                                    <button type="submit" name="submit" class="btn btn-primary"><?php echo $this->lang->line("update"); ?></button>
                                  </div>


                </form>









                                </div>
                              </div>

                             
                              </div>
                              <div class="col-md-6">
                              <div class="panel panel-warning class text-center">
                                  <form method="POST" action="<?php echo base_url(FOLDER_ADMIN); ?>/site_setting/copyright">
                                <div class="panel-heading">
                                  <?php echo $this->lang->line("copyright_text"); ?>
                                </div>
                                <div class="panel-body space">
                                  <label for="project_name" class="control-label col-md-4"><?php echo $this->lang->line("copyright"); ?>:</label>
                                  <div class="col-md-8">
                                    <input type="text" name="copyright"  id="system_mail" placeholder="Changu Narayan Municipality" class="form-control" value="<?php echo $site_info['copyright']?>"/>

                                  </div>
                                  <br/><br/>
                                  <div class="col-md-4"></div>
                                  <div class="col-md-8">
                                    <button type="submit" name="submit" class="btn btn-primary"><?php echo $this->lang->line("update"); ?></button>
                                  </div>
                                    </form>
                                </div>
                                </div>
                              </div>

                              <div class="col-md-6">
                              <div class="panel panel-info class text-center">
                                  <form method="POST" action="<?php echo base_url(FOLDER_ADMIN); ?>/site_setting/map_zoom">
                                <div class="panel-heading">
                                  <?php echo $this->lang->line("map_zoom_center"); ?>
                                </div>
                                <div class="panel-body space">
                                  <div class="row">
                                  <label for="project_name" class="control-label col-md-4"><?php echo $this->lang->line("map_center"); ?>:</label>
                                  <!-- <div class="col-md-9"> -->
                                    <div class="col-md-4">
                                    <input type="text" name="map_lat"  id="system_mail" placeholder="Latitude" class="form-control" value="<?php echo $site_info['map_lat']?>"/>
                                    </div>
                                    <div class="col-md-4">
                                    <input type="text" name="map_long"  id="system_mail" placeholder="Longitude" class="form-control" value="<?php echo $site_info['map_long']?>"/>
                                    </div>
                                    </div>
                                  </div>
                                  <br/>
                                  <div class="row">
                                  <label for="project_name" class="control-label col-md-4"><?php echo $this->lang->line("map_zoom"); ?>:</label>
                                  <div class="col-md-8">
                                    <input type="text" name="map_zoom"  id="system_mail" placeholder="Changu Narayan Municipality" class="form-control" value="<?php echo $site_info['map_zoom']?>"/>
                                    </div>
                                  </div> <br/>
                                  <div class="col-md-4"></div>
                                  <div class="col-md-8">
                                    <button type="submit" name="submit" class="btn btn-primary"><?php echo $this->lang->line("update"); ?></button>
                                  </div>
                                    </form>
                                </div>
                                </div>
                              </div>


                            </div>








                        </div>


                      </div>

                  </div>
                </section>




              </div>
            </div>









            <!-- page end-->
          </section>
        </section>
        <!--main content end-->
