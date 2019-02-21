<link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css"/>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/leaflet.label.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/changunarayan.js"></script>
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
<!-- Bootstrap core JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/randomcolor/0.5.2/randomColor.js"></script>
<script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js"></script>
<style>
.leaflet-left{
	left: 300px !important;
}

</style>
		<!--sub-menu-->
		<div class="icon-bar icon">
			<a class="active" href="mapt.php"><i class="fa fa-map"></i> Maps</a>
			<a href="#"><i class="fa fa-database"></i> Data</a>
			<a href="#"><i class="fa fa-bar-chart"></i> Charts</a>
			<a href="#"><i class="fa fa-clock-o"></i> Analyse</a>
			<a href="#"><i class="fa fa-upload"></i> Upload</a>
			<div class="right" style="float: right">
				<a href="#"><i class="fa fa-search"></i></a>
				<a href="#"><i class="fa fa-arrows"></i></a>
				<a href="#"><i class="fa fa-search-plus"></i></a>
				<a href="#"><i class="fa fa-search-minus"></i></a>
				<a href="#"><i class="fa fa-print"></i></a>
				<a href="#"><i class="fa fa-refresh"></i></a>
				<a href="#"><i class="fa fa-globe"></i></a>
				<a href="#"><i class="fa fa-trash"></i></a>
			</div>
		</div>
		<!--ends sub-menu-->
		<div id="over_map">
		<!-- <button class="layer-toggle" style="position:absolute;"><i class="fa fa-chevron-left" style="color: white";></i></button>
 -->
		<div class="panel panel-success">


			<div class="panel-body">
				<div>

					<ul class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#layers" aria-controls="home" role="tab" data-toggle="tab">Layers</a></li>
						<li role="presentation"><a href="#basemap" aria-controls="profile" role="tab" data-toggle="tab">Base Map</a></li>
					</ul>


					<!-- Tab panes -->
					<div class="tab-content">

		</script>
						<div role="tabpanel" class="tab-pane active" id="layers">
							<div id="layers">

								<div id="content">



									<ul id="">



										<li class = "lists"><a> <b> Layers </b></a>
											<ul style = "display: block !important;">
                       <?php  foreach($admin_layer as $l){ ?>

												<!-- <li><a ><input type="checkbox" name="1" value= "mun_changu" class="CheckBox" checked> Municipal Boundary</a></li>
												<li><a><input type="checkbox" name="1" value= "wards_changu" class="CheckBox" checked> Ward Boundary</a></li> -->
												<li><a><input type="checkbox" name="1" value="<?php echo $l['layer_table'];?>" class="CheckBox" checked><?php echo $l['layer_name'];?></a></li>

											<?php  } ?>
											</ul>
										</li><br/>

										<li class = "lists" ><a> <b>Categories</b>  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a>
											<ul style = "display: block !important;">
												 <?php  foreach($category_name as $d){ ?>
												<li><a><input type="checkbox" class="CheckBox" value="<?php echo $d['category_table'];?>" name="1" checked> <?php echo $d['category_name'];?></a></li>


                        	<?php  } ?>

											</ul>
										</li>







										</ul>



									</div>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane" id="basemap">
								<div class="base">
									<a> <img src="<?php echo base_url();?>assets/img/bm.jpg" height="40px" width="40px"></a>
									<a><img src="<?php echo base_url();?>assets/img/bm.jpg" height="40px" width="40px"></a>
									<a><img src="<?php echo base_url();?>assets/img/bm.jpg" height="40px" width="40px"></a>
									<a><img src="<?php echo base_url();?>assets/img/bm.jpg" height="40px" width="40px"></a>

								</div>


							</div>
						</div>

					</div>


				</div>
			</div>
<!--
<div id="over_map">
		<button class="layer-toggle" style="position:absolute;"><i class="fa fa-chevron-left" style="color: white";></i></button>
 -->


		</div>



	<script>
		/*-- LayerJS--*/
		$(document).ready(function(){
			$(".layer-toggle").click(function(){
				$(".panel.panel-success").toggle(1000);
				$(".layer-toggle [i]").toggleClass("fa-chevron-right");

			});
		console.log($("#sitemap li span"));
			$(".lists > span").removeClass("collapsed");
			$(".lists > span").addClass("expanded");

		});
	</script>
