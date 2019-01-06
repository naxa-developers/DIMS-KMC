


<style>
    #section1{margin-top: 0}
    #section1 {height:520px;color: #fff; background-color: #1f5cb2;}
    #section2 {padding-top:50px;padding-bottom: 30px; background-color: #f5f6f7; color: #101010;}
    #section3 {padding-top:50px;color: #101010; background-color:white; padding-bottom: 10px;}
    #section4 {padding-top:50px;padding-bottom: 30px; color: #101010; background-color:#f5f6f7}
    #section5 {padding-top:50px;color: #101010; background-color:white; padding-bottom: 10px;}
    .section-1-content{
      font-size: 14px;
      padding-left: 75px;
      padding-top: 50px;

    }

    .section1-p{
      font-size: 15px;
    }



.section1-img{
  position: relative;
  -webkit-animation-name: example;
  -webkit-animation-duration: 4s;
  animation-name: example;
  float: right;
  width: 100%;
  height: 100%;
}

.section2-img{
  position: relative;
  -webkit-animation-name: example;
  -webkit-animation-duration: 4s;
  animation-name: example;
  width: 100%;
  height: 100%;
}
@keyframes example {
  0%   {opacity: 0}
  100% {opacity: 1;}
}

  div#clients{
    padding: 20px;
  }

  /** client logos **/
#clients {
  display: block;
  margin-bottom: 15px;
}

#clients .clients-wrap {
  display: block;
  width: 100%;
  margin: 0 auto;
  overflow: hidden;
  margin-left: 250px;
}

#clients .clients-wrap ul {
  display: block;
  list-style: none;
  position: relative;
}

#clients .clients-wrap ul li {
  display: block;
  float: left;
  position: relative;
  width: 140px;
  height: 100px;
  line-height: 55px;
  text-align: center;
}
#clients .clients-wrap ul li img {
  vertical-align: middle;
  height: 80px;
  -webkit-transition: all 0.3s linear;
  -moz-transition: all 0.3s linear;
  transition: all 0.3s linear;
  -ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=65)";
  filter: alpha(opacity=65);
  opacity: 0.65;
}
#clients .clients-wrap ul li img:hover {
  -ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
  filter: alpha(opacity=100);
  opacity: 1.0;
}
</style>

<!--about-content -->

    <div class="section">
        <div id="section1" class="container-fluid">
            <div class="row">

                    <div class="col-xs-7 col-sm-7 col-md-7">
                        <div class="section-1-content">
                        <h2><?php echo $disaster['title'] ?></h2>
                        <p class="section1-p"><?php echo $disaster['summary'] ?></p>


                    </div>
                    </div>

            <div class="col-xs-5 col-sm-5 col-md-5" style="padding-top:0; padding-right: 0; padding-left: 0">
                <img class="section1-img" src="<?php echo $disaster['photo'] ?>">
            </div>
            </div>
        </div>




        <div id="section2" class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <img class="section2-img" src="<?php echo $risk['photo'] ?>">
                    </div>
                    <div class="col-md-6">
                        <h4><?php echo $risk['title'] ?></h4>
                        <p><?php echo $risk['summary'] ?></p>
                    </div>
                </div>
            </div>
        </div>


        <div id="section3" class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <h4><?php echo $utility['title'] ?></h4>
                        <p><?php echo $utility['summary'] ?></p>
                    </div>

                    <div class="col-md-3">
                        <img class="section2-img" src="<?php echo $utility['photo'] ?>"></div>
                </div>
            </div>
        </div>

        <div id="section4" class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <img class="section2-img" src="<?php echo $house['photo'] ?>">
                    </div>
                    <div class="col-md-6">
                        <h4><?php echo $house['title'] ?></h4>
                        <p><?php echo $house['summary'] ?></p>
                    </div>
                </div>
            </div>
        </div>


        <div id="section5" class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <h4><?php echo $query['title'] ?></h4>
                        <p><?php echo $query['summary'] ?></p>
                    </div>

                    <div class="col-md-3">
                        <img class="section2-img" src="<?php echo $query['photo'] ?>"></div>
                </div>
            </div>
        </div>
</div>
  <!--about-content-->

   <!-- Project Partnes -->
   <!-- Testimonials -->
    <div id="clients">
        <h3 class="proj text-center">Project Partners</h3>
        <br>
        <div class="clients-wrap text-center">
          <ul id="clients-list" class="clearfix">

			  <?php foreach($proj_data as $data){ ?>

            <li class="logos"><img src="<?php echo $data['project_pic'] ?>" alt="euro"></li>

					<?php } ?>
          </ul>
        </div><!-- @end .clients-wrap -->
      </div><!-- @end #clients -->
