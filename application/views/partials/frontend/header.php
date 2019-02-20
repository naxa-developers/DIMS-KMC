<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/img/ng.png">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">

    <title><?php echo SITE_NAME_EN ?></title>

    <link href="https://fonts.googleapis.com/css?family=Titillium+Web:400,400i,600,600i,700,700i,900" rel="stylesheet">
    <!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" -->


    <link href="<?php echo base_url();?>assets/frontend/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/frontend/css/jquery.jConveyorTicker.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/frontend/css/slick.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/frontend/css/nice-select.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/frontend/css/all.css">
    <?php if($this->uri->segment(1) != 'map'){ ?>
        <link href="<?php echo base_url();?>assets/frontend/css/all.css" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="<?php echo base_url();?>assets/frontend/css/style.css">
    <?php }
    if($this->uri->segment(1) === 'map'){  ?>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/c3/0.6.11/c3.min.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/frontend/css/backup.css">
    <?php } ?>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/frontend/css/line-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"/>
    <!-- <link href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.css" rel="stylesheet" /> -->
    
  
    <!-- new css end -->
</head>
<!-- Bootstrap core CSS -->
<body>

<?php if($this->uri->segment(1) == 'home' || $this->uri->segment(1) == ''){ ?>
    <section class="hero">
    <header>
        <div class="container-fluid full-height">
            <div class="row align-items-center full-height">
                <div class="logoHolder "><a class="flex align-items-center " href="<?php echo base_url(); ?>"><img alt="" src="<?php echo SITE_SLOGAN_EN ?>"> </a>
                    <div class="logotext home">
                    <div class="toplogo"><a class="flex align-items-center home" href="<?php echo base_url() ?>">Lalitpur Metropolitian City</a></div>

                    <div class="bottomlogo"><a class="flex align-items-center home" href="<?php echo base_url(); ?>">Disaster Management System</a></div>
                    </div>
                    <a class="flex align-items-center" href="<?php echo base_url(); ?>"> </a></div>
                <div class="logoHolder">
                   <!--  <?php if(SITE_SLOGAN_EN): ?>
                    <a href="<?php echo base_url() ?>">
                        <img src="<?php echo SITE_SLOGAN_EN ?>" alt="site logo " >
                    </a>
                  <?php endif; ?> -->
                </div>
                &nbsp;&nbsp;&nbsp;

                <div class="menuiconHolder float-right-fx">
                     <?php  $lang=$this->session->get_userdata('Language'); ?>
                <div class="menuiconHolder float-right">
                    <div class="lang-switch">
                        <select class="ChangeLanguage" id="languageCode">
                            <option value="en" <?php if($lang['Language']=='en'){ echo"selected"; } ?>>Eng</option>
                            <option value="nep" <?php if($lang['Language']=='nep'){ echo"selected"; } ?>>Nep</option>
                        </select>
                        <i class="la la-sort-down"></i>
                    </div>
                    <!-- <div class="btn-group btn-group-toggle" data-toggle="buttons">
                      <label class="btn-sm btn btn-secondary <?php if($lang['Language']=='en'){ echo"active"; } ?>  <?php if($lang['Language']=='nep'){ echo"ChangeLanguage"; } ?>"  data-language="en">
                        <input type="radio" class="" id="option1" autocomplete="off" checked><i class="la la-language"></i>: En
                      </label>
                      <label class="btn-sm btn btn-secondary <?php if($lang['Language']=='nep'){ echo"active"; } ?> <?php if($lang['Language']=='en'){ echo"ChangeLanguage"; } ?>" data-language="nep" >
                        <input type="radio" class="" name="options" id="option3" autocomplete="off"> <i class="la la-language"></i> : Nep
                      </label>
                    </div> -->
                </div>
                    <div class="iconholder">
                        <i class="fas fa-bars"></i>
                    </div>
                    <!--  &nbsp;&nbsp;
                    <a class=" btn btn-sm btn-info ChangeLanguage active" href="javascript:void(0)" data-language="nep"> <i class="la la-language"></i>: En </a>&nbsp;&nbsp;
                    <a class="btn-sm btn btn-success ChangeLanguage " href="javascript:void(0)" data-language="en"> <i class="la la-language"></i> : Nep</a>
                    &nbsp;&nbsp; -->
                </div>

            </div>
        </div>


        <div class="menuOverlay">
            <div class="container">
                <div class="close">
                    <i class="fa fa-times white"></i>
                </div>
                <div class="menuLinks">
                    <a class="nav-link" href="<?php echo base_url()?>"><?php echo NAV_SEVEN ?> <span class="sr-only"></span></a>
                    <!-- <a class="nav-link" href="<?php echo base_url()?>category?tbl=0 && name=0"><?php echo NAV_ONE ?></a> -->
                    <!-- <a class="nav-link" href="<?php echo base_url()?>report_page"><?php echo NAV_TWO ?></a> -->
                    <a class="nav-link" href="<?php echo base_url()?>datacategory"> <?php echo $this->lang->line('datacategory'); ?> </a>
                    <a class="nav-link" href="<?php echo base_url()?>map"><?php echo NAV_ONE ?></a>
                    <!-- <a class="nav-link" href="<?php echo base_url()?>inventory"><?php echo NAV_FOUR ?></a> -->
                    <a class="nav-link" href="<?php echo base_url()?>publication"><?php echo NAV_SIX ?></a>
                    <!-- <a class="nav-link" href="<?php echo base_url()?>incidentmanagement">घटना बिबीरण</a>
                    <a class="nav-link" href="<?php echo base_url()?>drrinfo">प्रकोप सूचना </a>
                    <a class="nav-link" href="<?php echo base_url()?>dictionary">प्रकोप सब्दकोश  </a>
                    <a class="nav-link" href="<?php echo base_url()?>datacategory"> तत्थ्यांक सङ्ग्रह </a>
                    <a class="nav-link" href="<?php echo base_url()?>municipalprofile"> नगरपालिका प्रोफाइल</a> -->
                    <a class="nav-link" href="<?php echo base_url()?>incidentmanagement"><?php echo NAV_TWO; ?></a>
                    <a class="nav-link" href="<?php echo base_url()?>drrinfo"><?php echo $this->lang->line('drrinfodetail'); ?></a>
                    <a class="nav-link" href="<?php echo base_url()?>dictionary"><?php echo $this->lang->line('dictionary'); ?> </a>
                     <a class="nav-link" href="<?php echo base_url()?>inventory"><?php echo NAV_FOUR ?></a>
                    <a class="nav-link" href="<?php echo base_url()?>municipalprofile"> <?php echo $this->lang->line('municipalprofile'); ?></a>
                    <!-- <a class="nav-link" href="<?php echo base_url()?>contact"><?php echo NAV_THREE ?></a> -->
                    <a class="nav-link" href="<?php echo base_url()?>contact?cat=individual"><?php echo NAV_THREE; ?></a>

                </div>
            </div>
        </div>
    </header>
    <?php }else{ ?>
    <header class="headerbg">
        <div class="container-fluid full-height">
            <div class="row align-items-center full-height">
               <!--  <div class="logoHolder"> -->
                <div class="logoHolder">
                   <!--  <?php if(SITE_SLOGAN_EN): ?>
                    <a href="<?php echo base_url() ?>">
                        <img src="<?php echo SITE_SLOGAN_EN ?>" alt="site logo " >
                    </a>
                  <?php endif; ?> -->
                  <div class="logoHolder "><a class="flex align-items-center home" href="<?php echo base_url() ?>">
                        <?php if(SITE_SLOGAN_EN): ?><img alt="" src="<?php echo SITE_SLOGAN_EN ?>"> <?php endif; ?></a>
                    <div class="logotext home">
                    <div class="toplogo"><a class="flex align-items-center" href="<?php echo base_url(); ?>">Lalitpur Metropolitian City</a></div>

                    <div class="bottomlogo"><a class="flex align-items-center" href="<?php echo base_url(); ?>">Disaster Management System</a></div>
                    </div>
                    <a class="flex align-items-center" href="<?php echo base_url(); ?>"> </a></div>
                </div>
                <div class="menuiconHolder float-right-fx">
                    <div class="iconholder">
                        <i class="fas fa-bars">

                        </i>
                    </div>
                </div>
            </div>
        </div>
        <div class="menuOverlay">
            <div class="container">
                <div class="close">
                    <i class="fa fa-times white"></i>
                </div>
                <div class="menuLinks">
                  <a class="nav-link" href="<?php echo base_url()?>"><?php echo NAV_SEVEN ?> <span class="sr-only"></span></a>
                  <!-- <a class="nav-link" href="<?php echo base_url()?>category?tbl=0 && name=0"><?php echo NAV_ONE ?></a> -->
                  <!-- <a class="nav-link" href="<?php echo base_url()?>report_page"><?php echo NAV_TWO ?></a> -->
                  <a class="nav-link" href="<?php echo base_url()?>datacategory"> <?php echo $this->lang->line('datacategory'); ?> </a>
                  <a class="nav-link" href="<?php echo base_url()?>map"><?php echo NAV_ONE ?></a>
                  <!-- <a class="nav-link" href="<?php echo base_url()?>inventory"><?php echo NAV_FOUR ?></a> -->
                  <a class="nav-link" href="<?php echo base_url()?>publication"><?php echo NAV_SIX ?></a>
                  <!-- <a class="nav-link" href="<?php echo base_url()?>incidentmanagement">घटना बिबीरण</a>
                  <a class="nav-link" href="<?php echo base_url()?>drrinfo">प्रकोप सूचना </a>
                  <a class="nav-link" href="<?php echo base_url()?>dictionary">प्रकोप सब्दकोश  </a>
                  <a class="nav-link" href="<?php echo base_url()?>datacategory"> तत्थ्यांक सङ्ग्रह </a>
                  <a class="nav-link" href="<?php echo base_url()?>municipalprofile"> नगरपालिका प्रोफाइल</a> -->
                  <a class="nav-link" href="<?php echo base_url()?>incidentmanagement"><?php echo NAV_TWO; ?></a>
                  <a class="nav-link" href="<?php echo base_url()?>drrinfo"><?php echo $this->lang->line('drrinfodetail'); ?></a>
                  <a class="nav-link" href="<?php echo base_url()?>dictionary"><?php echo $this->lang->line('dictionary'); ?> </a>
                   <a class="nav-link" href="<?php echo base_url()?>inventory"><?php echo NAV_FOUR ?></a>
                  <a class="nav-link" href="<?php echo base_url()?>municipalprofile"> <?php echo $this->lang->line('municipalprofile'); ?></a>
                  <!-- <a class="nav-link" href="<?php echo base_url()?>contact"><?php echo NAV_THREE ?></a> -->
                  <a class="nav-link" href="<?php echo base_url()?>contact?cat=individual"><?php echo NAV_THREE; ?></a>

                </div>
            </div>
        </div>
    </header>
<?php } ?>
<?php if($this->uri->segment(1) != 'home' && $this->uri->segment(1) != 'map'){
    if($this->uri->segment(1) ||  $this->uri->segment(2) || $this->uri->segment(2)){ ?>
    <section class="bradcrumbs">
        <div class="container">
            <div class="breadcrumbd">
                <a class="primary" href="<?php echo base_url()?>">
                    <span>
                        <i class="fa fa-home"></i>
                        <span>HOME</span>
                    </span>
                </a>
                <i class="fa fa-angle-right ar"></i>
                <a class="primary" href="">
                    <?php
                $page_slug_new = strtoupper(str_replace ('_', ' ', $this->uri->segment(1)));
                $page_title = strtoupper(str_replace ('-', ' ', $page_slug_new));
                echo strtoupper($page_title); ?></a>
            </div>
        </div>
    </section>
<?php } }  ?>
