<style type="text/css">
h1.sub{
  font-size: 80px;

}
</style>

<!-- Add this script before </body> -->

<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<!--main content start-->
<section id="main-content">
  <section class="wrapper">
    <!-- page start-->
    <div class="row">
     <div class="col-md-4">
      <section class="panel">
        <div class="panel-body">
          <div class="top-stats-panel">
            <div class="daily-visit">
              <h4 class="widget-h"><?php echo $this->lang->line('total_reports'); ?></h4>

              <h1 class="sub" id="count"><?php echo $report ?></h1>


            </div>
          </div>
        </div>
      </section>
    </div>

    <div class="col-md-4">
      <section class="panel">
        <div class="panel-body">
          <div class="top-stats-panel">
            <div class="daily-visit">
              <h4 class="widget-h"><?php echo $this->lang->line('users'); ?></h4>

              <h1 class="sub" id="count1"><?php echo $user ?></h1>


            </div>
          </div>
        </div>
      </section>
    </div>
   <div class="col-md-4">
      <section class="panel">
        <div class="panel-body">
          <div class="top-stats-panel">

            <h4 class="widget-h"><?php echo $this->lang->line('data'); ?></h4>
            <h1 class="sub text-center" id="count2"><?php echo $map_data ?></h1>

          </div>
        </div>
      </section>
    </div>

  </div>

  <div class="row">
    <div class="col-md-8">
      <!--earning graph start-->
      <section class="panel">
        <header class="panel-heading">
          <?php echo $this->lang->line('graph'); ?><span class="tools pull-right">
            <a href="javascript:;" class="fa fa-chevron-down"></a>
          </span>
        </header>
        <div class="panel-body">

          <div id="chartContainer" style="height: 300px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

        </div>
      </section>
      <!--earning graph end-->
    </div>
    <div class="col-md-4">
      <!--widget graph start-->
      <section class="panel">
        <div class="panel-body">

         <img src="<?php echo $max['photo']?>" alt="visited" height=330; width=310;>
         <!-- Tab panes -->

       </div>
       <p class="text-center"><b><?php echo $this->lang->line('most_visited'); ?> </b></p>


     </section>



     <!-- page end-->

</section>
</section>


<!--main content end-->
<script>
var home=parseInt("<?php echo $home ?>");
var map=parseInt("<?php echo $map ?>");
var report=parseInt("<?php echo $reports ?>");
//var about=parseInt("<?php echo $about ?>");


window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
  animationEnabled: true,
  theme: "light2", // "light1", "light2", "dark1", "dark2"
  title:{
    text: "<?php echo $this->lang->line('page_visited'); ?>"
  },
  axisY: {
    title: ""
  },
  data: [{
    type: "column",
    showInLegend: true,
    legendMarkerColor: "grey",
    legendText: "<?php echo $this->lang->line('pages'); ?>",
    dataPoints: [
      { y: home, label: "<?php echo $this->lang->line('home'); ?>" },
      { y: map,  label: "<?php echo $this->lang->line('map'); ?>" },
      { y: report,  label: "<?php echo $this->lang->line('reports'); ?>" },
      // { y: about,  label: "About" },

    ]
  }]
});
chart.render();

}
</script>


    <!--counter-->

<script type="text/javascript">
  $('#count,#count1,#count2').each(function () {

    $(this).prop('Counter',0).animate({
        Counter: $(this).text()
    }, {
        duration: 4000,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });
});
      </script>
