<!doctype html>
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
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">

    <link href="<?php echo base_url();?>assets/frontend/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/frontend/css/jquery.jConveyorTicker.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/frontend/css/style.css">
    <link href="<?php echo base_url();?>assets/frontend/css/all.css" rel="stylesheet">
    <!-- new css end -->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script> -->
</head>
<!-- Bootstrap core CSS -->
<body>
<?php if($this->uri->segment(1) == 'home' || $this->uri->segment(1) == ''){ ?> 
    <section class="hero">
    <header>
        <div class="container-fluid full-height">
            <div class="row align-items-center full-height">
                <div class="logoHolder">
                    <?php if(SITE_SLOGAN_EN): ?>
                    <a href="<?php echo base_url() ?>">
                        <img src="<?php echo SITE_SLOGAN_EN ?>" alt="">
                    </a>
                  <?php endif; ?>
                </div>
                <div class="menuiconHolder float-right-fx">
                    <div class="iconholder">
                        <i class="fas fa-bars"></i>
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
                    <a class="nav-link" href="<?php echo base_url()?>map"><?php echo NAV_ONE ?></a>
                    <!-- <a class="nav-link" href="<?php echo base_url()?>inventory"><?php echo NAV_FOUR ?></a> -->
                    <a class="nav-link" href="<?php echo base_url()?>inventory"><?php echo NAV_FIVE ?></a>
                    <a class="nav-link" href="<?php echo base_url()?>publication"><?php echo NAV_SIX ?></a>
                    <a class="nav-link" href="<?php echo base_url()?>incidentmanagement">घटना बिबीरण</a>
                    <a class="nav-link" href="<?php echo base_url()?>drrinfodetail">प्रकोप सूचना </a>
                    <a class="nav-link" href="<?php echo base_url()?>dictionary">प्रकोप सब्दकोश  </a>
                    <a class="nav-link" href="<?php echo base_url()?>datacategory"> तत्थ्यांक सङ्ग्रह </a>
                    <a class="nav-link" href="<?php echo base_url()?>municipalprofile"> नगरपालिका प्रोफाइल</a>
                    <a class="nav-link" href="<?php echo base_url()?>contact"><?php echo NAV_THREE ?></a>
                </div>
            </div>
        </div>
    </header>
    <?php }else{ ?>
    <header class="headerbg">
        <div class="container-fluid full-height">
            <div class="row align-items-center full-height">
                <div class="logoHolder">
                    <?php if(SITE_SLOGAN_EN): ?>
                    <a href="<?php echo base_url() ?>">
                        <img src="<?php echo SITE_SLOGAN_EN ?>" alt="">
                    </a>
                  <?php endif; ?>
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
                    <a class="nav-link" href="<?php echo base_url()?>map"><?php echo NAV_ONE ?></a>
                    <!-- <a class="nav-link" href="<?php echo base_url()?>category?tbl=0 && name=0"><?php echo NAV_ONE ?></a> -->
                    <!-- <a class="nav-link" href="<?php echo base_url()?>report_page"><?php echo NAV_TWO ?></a> -->
                    <!-- <a class="nav-link" href="<?php echo base_url()?>inventory"><?php echo NAV_FOUR ?></a> -->
                    <a class="nav-link" href="<?php echo base_url()?>inventory"><?php echo NAV_FIVE ?></a>
                    <a class="nav-link" href="<?php echo base_url()?>publication"><?php echo NAV_SIX ?></a>
                    <a class="nav-link" href="<?php echo base_url()?>incidentmanagement">घटना बिबीरण</a>
                    <a class="nav-link" href="<?php echo base_url()?>drrinfodetail">प्रकोप सूचना </a>
                    <a class="nav-link" href="<?php echo base_url()?>dictionary">प्रकोप सब्दकोश  </a>
                    <a class="nav-link" href="<?php echo base_url()?>datacategory"> तत्थ्यांक सङ्ग्रह </a>
                    <a class="nav-link" href="<?php echo base_url()?>municipalprofile"> नगरपालिका प्रोफाइल</a>
                    <a class="nav-link" href="<?php echo base_url()?>contact"><?php echo NAV_THREE ?></a>
                </div>
            </div>
        </div>
    </header>
<?php } ?> 
<?php if($this->uri->segment(1) != 'home'){
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
                $page_slug_new = ucwords(str_replace ('_', ' ', $this->uri->segment(1)));
                $page_title = ucwords(str_replace ('-', ' ', $page_slug_new));
                echo $page_title; ?></a>
            </div>
        </div>
    </section>
<?php } }  ?>   
  
    
    
    