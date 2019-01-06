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
            Site Setting
          <span class="tools pull-right">
            switch Language
<a class="nav-link" href="<?php echo base_url();?>site_setting_nep"><img src="<?php echo base_url();?>assets/img/nep.png" height="15"></a>
<a class="nav-link" href="<?php echo base_url();?>site_setting"><img src="<?php echo base_url();?>assets/img/uk.png" height="15"></a>
</span>
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


              <div class="form-group">

                <div class="panel panel-info class">
                  <div class="panel-heading">
                    Site logo && Site text
                  </div>

                  <div class="panel-body space">

                      <form method="post" action ="Admin/SiteController/update_site_text_nep" enctype="multipart/form-data" >

                    <div class="form-group ">
                      <label class="control-label col-md-3">Site Logo </label>
                      <div class="col-md-9">
                        <div class="fileupload fileupload-new" data-provides="fileupload">
                          <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                            <img src="<?php echo $site_info['site_logo']?>" alt="" />
                          </div>
                          <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                          <div>
                            <span class="btn btn-white btn-file">
                              <span class="fileupload-new"><i class="fa fa-paper-clip"></i> Select image</span>
                              <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                              <input type="file" name="site_logo" class="default" />
                            </span>

                          </div>
                        </div>

                      </div>
                    </div>


                    <label for="project_name" class="control-label col-md-2">Site Name:</label>
                    <div class="col-md-4">
                      <input type="text" name="site_name" value="<?php echo $site_info['site_name']?>"  id="system_mail" placeholder="Changu Narayan Municipality" class="form-control" />

                    </div>

                    <label for="project_name" class="control-label col-md-2">Site Text:</label>
                    <div class="col-md-4">
                      <textarea type="text" name="site_text"   id="system_mail" placeholder="Disaster Information Management Platform" class="form-control"><?php echo $site_info['site_text']?></textarea>

                    </div>

                    <div class="col-md-10">
                      <button type="submit" name="submit" class="btn btn-primary">Update</button>
                    </div>

          </form>

                  </div>
                </div>
              </div>

              <div class="panel panel-success class">
                <div class="panel-heading">
                  Site Cover Photo
                </div>

                <div class="panel-body space">

                  <form method="post" action ="Admin/SiteController/update_cover_nep" enctype="multipart/form-data" >

                  <div class="form-group ">
                    <label class="control-label col-md-3">Site Cover Photo </label>
                    <div class="col-md-9">
                      <div class="fileupload fileupload-new" data-provides="fileupload">
                        <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                          <img src="<?php echo $site_info['cover_photo']?>" alt="" />
                        </div>
                        <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                        <div>
                          <span class="btn btn-white btn-file">
                            <span class="fileupload-new"><i class="fa fa-paper-clip"></i> Select image</span>
                            <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                            <input type="file" name="cover_photo" class="default" />
                          </span>

                        </div>
                      </div>

                    </div>
                  </div>

                  <label for="project_name" class="control-label col-md-2">Big Text:</label>
                  <div class="col-md-4">
                    <textarea type="text" name="cover_big"  id="system_mail" placeholder="Changu Narayan Disaster Information Management Platform" class="form-control" ><?php echo $site_info['cover_big']?></textarea>

                  </div>

                  <label for="project_name" class="control-label col-md-2">Small Text </label>
                  <div class="col-md-4">
                    <textarea type="text" name="cover_small"  id="system_mail" placeholder="A GIS based data portal for disaster management" class="form-control" ><?php echo $site_info['cover_small']?></textarea>

                  </div>

                  <div class="col-md-10">
                    <button type="submit" name="submit" class="btn btn-primary">Update</button>
                  </div>



</form>

                </div>
              </div>


              <div class="panel panel-warning class">
                <div class="panel-heading">
                  Footer Right Text
                </div>
                <div class="panel-body">
                  <form method="POST" action="Admin/SiteController/footer_text_nep">
                  <label for="project_name" class="control-label col-md-2">Big Text:</label>
                  <div class="col-md-4">
                    <textarea type="text" name="footer_big"  id="system_mail" placeholder="Disaster Information Management Platform" class="form-control" ><?php echo $site_info['footer_big']?></textarea>

                  </div>

                  <label for="project_name" class="control-label col-md-2">Small Text </label>
                  <div class="col-md-4">
                    <textarea type="text" name="footer_small"  id="system_mail" placeholder="This platform visualizes the data regarding risk and hazards over available dataset in order to enable basic risk assessment in the municipality." class="form-control" ><?php echo $site_info['footer_small']?></textarea>

                  </div>

                  <div class="col-md-10">
                    <button type="submit" name="submit" class="btn btn-primary">Update</button>
                  </div>
              </form>
                </div>
              </div>

              <div class="panel panel-danger class">
                <div class="panel-heading">
                Important Links
                </div>
                <div class="panel-body space ">
                  <div class="row">
                      <form method="POST" action="Admin/SiteController/important_link_nep">
                    <div class="col-md-6">
                      <label for="project_name" class="control-label col-md-4">1st Site Name:</label>

                      <div class="col-md-8">
                        <input type="text" name="1_name"  id="facebook_link" placeholder="Chnagunarayan" class="form-control" value="<?php echo $site_info['1_name']?>"/>


                      </div>
                    </div>
                    <div class="col-md-6">

                      <label for="project_name" class="control-label col-md-4">1st Site Link:</label>

                      <div class="col-md-8">
                        <input type="text" name="1_link"  id="twitter_link" placeholder="http://app.naxa.com.np/" class="form-control" value="<?php echo $site_info['1_link']?>"/>

                      </div></div>
                      <div class="col-md-6">
                        <label for="project_name" class="control-label col-md-4">2nd Site Name:</label>

                        <div class="col-md-8">
                          <input type="text" name="2_name"  id="twitter_link" placeholder="Chnagunarayan" class="form-control" value="<?php echo $site_info['2_name']?>"/>

                        </div>
                      </div>
                      <div class="col-md-6">
                        <label for="project_name" class="control-label col-md-4">2nd Site Link:</label>

                        <div class="col-md-8">
                          <input type="text" name="2_link"  id="twitter_link" placeholder="http://app.naxa.com.np/" class="form-control" value="<?php echo $site_info['2_link']?>"/>

                        </div></div>
                        <div class="col-md-6">
                          <label for="project_name" class="control-label col-md-4">3rd Site Name:</label>

                          <div class="col-md-8">
                            <input type="text" name="3_name"  id="twitter_link" placeholder="Chnagunarayan" class="form-control" value="<?php echo $site_info['3_name']?>"/>

                          </div></div>
                          <div class="col-md-6">
                            <label for="project_name" class="control-label col-md-4">3rd Site Link:</label>

                            <div class="col-md-8">
                              <input type="text" name="3_link"  id="twitter_link" placeholder="http://app.naxa.com.np/" class="form-control" value="<?php echo $site_info['3_link']?>"/>

                            </div></div>
                            <div class="col-md-6">
                              <label for="project_name" class="control-label col-md-4">4th Site Name:</label>

                              <div class="col-md-8">
                                <input type="text" name="4_name"  id="twitter_link" placeholder="Chnagunarayan" class="form-control" value="<?php echo $site_info['4_name']?>"/>

                              </div></div>
                              <div class="col-md-6">
                                <label for="project_name" class="control-label col-md-4">4th Site Link:</label>

                                <div class="col-md-8">
                                  <input type="text" name="4_link"  id="twitter_link" placeholder="http://app.naxa.com.np/" class="form-control" value="<?php echo $site_info['4_link']?>"/>

                                </div></div>
                                <div class="col-md-6">
                                  <label for="project_name" class="control-label col-md-4">5th Site name:</label>

                                  <div class="col-md-8">
                                    <input type="text" name="5_name"  id="twitter_link" placeholder="Chnagunarayan" class="form-control" value="<?php echo $site_info['5_name']?>"/>

                                  </div></div>   <div class="col-md-6">
                                    <label for="project_name" class="control-label col-md-4">5th Site Link:</label>

                                    <div class="col-md-8">
                                      <input type="text" name="5_link"  id="twitter_link" placeholder="http://app.naxa.com.np/" class="form-control" value="<?php echo $site_info['5_link']?>"/>

                                    </div></div>
                                  </div>



                                  <div class="col-md-10">
                                    <button type="submit" name="submit" class="btn btn-primary">Update</button>
                                  </div>


                </form>









                                </div>
                              </div>

                              <div class="panel panel-info class">
                                  <form method="POST" action="Admin/SiteController/find_us_links_nep">
                                <div class="panel-heading">
                                Find us links
                                </div>
                                <div class="panel-body space">

                                  <div class="row">
                                    <div class="col-md-6">

                                  <label for="project_name" class="control-label col-md-4">Facebook:</label>

                                  <div class="col-md-8">
                                    <input type="text" name="facebook"  id="facebook_link" placeholder="Chnagunarayan" class="form-control" value="<?php echo $site_info['facebook']?>"/>


                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <label for="project_name" class="control-label col-md-4">Twitter:</label>

                                  <div class="col-md-8">
                                    <input type="text" name="twitter"  id="twitter_link" placeholder="http://app.naxa.com.np/" class="form-control" value="<?php echo $site_info['twitter']?>"/>

                                  </div></div>
                                  <div class="col-md-6">
                                    <label for="project_name" class="control-label col-md-4">Google Plus:</label>

                                    <div class="col-md-8">
                                      <input type="text" name="google"  id="twitter_link" placeholder="Chnagunarayan" class="form-control" value="<?php echo $site_info['google']?>"/>

                                    </div>

                                  </div>

                                  <div class="col-md-11">
                                    <button type="submit" name="submit" class="btn btn-primary">Update</button>
                                  </div>

                          </form>

                                </div>
                              </div>

                              <div class="panel panel-warning class">
                                  <form method="POST" action="Admin/SiteController/copyright_nep">
                                <div class="panel-heading">
                                  Copy right Text
                                </div>
                                <div class="panel-body space">
                                  <label for="project_name" class="control-label col-md-2">Copy right:</label>
                                  <div class="col-md-4">
                                    <input type="text" name="copyright"  id="system_mail" placeholder="Changu Narayan Municipality" class="form-control" value="<?php echo $site_info['copyright']?>"/>

                                  </div>

                                  <div class="col-md-11">
                                    <button type="submit" name="submit" class="btn btn-primary">Update</button>
                                  </div>
                                    </form>
                                </div>
                              </div>


                              <div class="panel panel-info class">
                                  <form method="POST" action="Admin/SiteController/map_zoom">
                                <div class="panel-heading">
                                  Map Zoom level and center
                                </div>
                                <div class="panel-body space">
                                  <label for="project_name" class="control-label col-md-2">Map Center:</label>
                                  <div class="col-md-4">
                                    <input type="text" name="map_lat"  id="system_mail" placeholder="Latitude" class="form-control" value="<?php echo $site_info['map_lat']?>"/>
                                    <input type="text" name="map_long"  id="system_mail" placeholder="Longitude" class="form-control" value="<?php echo $site_info['map_long']?>"/>

                                  </div>
                                  <label for="project_name" class="control-label col-md-2">Map Zoom:</label>
                                  <div class="col-md-4">
                                    <input type="text" name="map_zoom"  id="system_mail" placeholder="Changu Narayan Municipality" class="form-control" value="<?php echo $site_info['map_zoom']?>"/>

                                  </div>

                                  <div class="col-md-11">
                                    <button type="submit" name="submit" class="btn btn-primary">Update</button>
                                  </div>
                                    </form>
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
