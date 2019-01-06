
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
<script src="<?php echo base_url();?>assets/js/tokml.js"></script>
<script src="<?php echo base_url();?>assets/js/download.js"></script>
<script src="<?php echo base_url();?>assets/js/pagination.js"></script>
<link rel="stylesheet" type="text/css" href="assets/css/datasets.css">
<style type="text/css">
button.btn.btn-info.hit {
    margin-left: 1035px;
    background-color: #7696c7;
}
#page-wrap {
	margin: 0 auto;
}

.list-group-item:first-child {
	border-top-left-radius: 0.25rem !important;
	border-top-right-radius: 0.25rem !important;
	border-bottom-left-radius: 0.25rem !important;
}


.datset-page{
	margin: 50px;
}

.datset-page .spacing button{
	margin: 10px auto;
	width: 98%;
}

p.about {
	font-size: 14px;
    color: #222;
   }

.dataset-head{
	color: #222;
	font-weight: 600;
}


.pagination-button {
  display: inline-block;
  padding: 5px 10px;
  border: 1px solid #e0e0e0;
  background-color: #eee;
  color: #333;
  cursor: pointer;
  transition: background 0.1s, color 0.1s;

  &:hover {
    background-color: #ddd;
    color: #3366cc;
  }

  &.active {
    background-color: #bbb;
    border-color: #bbb;
    color: #3366cc;
  }

  $border-radius: 18px;

  &:first-of-type {
    border-radius: $border-radius 0 0 $border-radius;
  }

  &:last-of-type {
    border-radius: 0 $border-radius $border-radius 0;
  }
}

</style>


<div class="datset-page">
	<div class="container">

		<div class="row">

			<!-- panel -->
			<div class="col-sm-3">
				<div class="list-group dataset">
					<a href="#" class="list-group-item list-group-item-action active ">
						Categories
					</a>

				<form method="POST" action="" >

         <?php foreach ($data_panel as $d) {
          if($d['public_view']=='0'){

          }else{

					if (in_array($d['category_table'], $checked_data)){
						?>

					<a href="#" class="list-group-item list-group-item-action"> <p class="check" style="margin-bottom: 0rem">
						<input type="checkbox" name=dataset[] value="<?php echo $d['category_table']?>" id="test<?php echo $d['id']?>" checked/>
						<label for="test<?php echo $d['id']?>"><?php echo $d['category_name']?></label><span class="badge badge-primary badge-pill pull-right"></span>

					</p></a>

			<?php	}else{ ?>

					<a href="#" class="list-group-item list-group-item-action"> <p class="check" style="margin-bottom: 0rem">
						<input type="checkbox" name=dataset[] value="<?php echo $d['category_table']?>" id="test<?php echo $d['id']?>" />
						<label for="test<?php echo $d['id']?>"><?php echo $d['category_name']?></label><span class="badge badge-primary badge-pill pull-right"></span>

					</p></a>


				<?php } }}?>


				</div>

				<div class="spacing text-center">
					<button class="btn btn-primary btn-sm center-block" type="submit" name="submit">Apply</button>
						</form>
				</div>
			</div><!--end panel-->
			<div class="col-sm-9">

				<!--advance Search starts-->
				<div class="row">
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-8">
								<input value="<?php echo $search ?>" class="form-control" placeholder="<?php echo $site_info['search'] ?>" type="search" id="myInput" onkeyup="myFunction()"  >
							</div>
							<!-- <div class="col-md-4">
								<button class="btn btn-primary btn-block" type="button">
									<i class="fa fa-search"></i>
								</button>
							</div> -->
						</div>

						<!-- <div class="found text-center" style="font-size: 12px;"><b>aaaaaa</b></div> -->
					</div>

				</div>

				<br>
				<!--advance Search ends-->


<?php //var_dump($data); ?>
<?php foreach ($data as $d) {

    if($d['public_view']=='0'){


    }else{


  ?>


				<div class="row article-loop">


					<div class="col-sm-8 myUL"> <h5 id="<?php echo $d['id']?>" class="dataset-head"><?php echo $d['category_name']?></h5>

						<p class="small" >
							<span class="fa fa-eye"></span> <?php echo $d['views']?> views
							<span class="fa fa-save"></span> <?php


							if($d['download']!=NULL){
							echo $d['download'];
						} else{
							 echo 0 ;
						 }
							 ?> download
							<span class="fa fa-calendar"></span> Last update:
							<?php echo substr($d['last_updated'], 0, strrpos($d['last_updated'], ' '));?>
						</p>
						<p class="about">
							<?php echo $d['summary'] ?>
						</p>
            <?php if($d['allow_download']=='1'){ ?>
			     <button id="" name="<?php echo $d['category_table']?>" class="btn btn-light btn-sm kml" ><span class="fa fa-download" ></span> KML</button>
						<a href="<?php echo base_url()?>get_csv_dataset?tbl=<?php echo $d['category_table']?>" ><button class="btn btn-light btn-sm" ><span class="fa fa-download" ></span> CSV</button></a>
						<a href="<?php echo base_url()?>get_geojson_dataset?tbl=<?php echo $d['category_table']?>"><button class="btn btn-light btn-sm"><span class="fa fa-download"></span> Geojson</button></a>

          <?php }else{ ?>

            <button id="" name="<?php echo $d['category_table']?>" class="btn btn-light btn-sm kml" hidden><span class="fa fa-download" ></span> KML</button>
 						<a href="<?php echo base_url()?>get_csv_dataset?tbl=<?php echo $d['category_table']?>" ><button class="btn btn-light btn-sm" hidden><span class="fa fa-download" ></span> CSV</button></a>
 						<a href="<?php echo base_url()?>get_geojson_dataset?tbl=<?php echo $d['category_table']?>"><button class="btn btn-light btn-sm" hidden><span class="fa fa-download"></span> Geojson</button></a>


          <?php }  ?>

						<a href="<?php echo base_url()?>category?tbl=<?php echo $d['category_table']?>&& name=<?php echo $d['category_name']?>"><button class="btn btn-light btn-sm"><span class="fa fa-eye"></span> Map</button></a>
						<a href="<?php echo base_url()?>data_map?tbl=<?php echo $d['category_table']?>&& name=<?php echo $d['category_name']?>"><button class="btn btn-light btn-sm"><span class="fa fa-table"></span> Table</button></a>


							<hr>

					</div>

				</div>

		<?php	}} ?>
							<div class="col-md-10">
								<ul class="pagination pull-right" style="padding-top: 20px; padding-bottom: 30px;">
									<li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
									<li class="page-item"><a class="page-link" href="#">1</a></li>
									<li class="page-item"><a class="page-link" href="#">2</a></li>
									<li class="page-item"><a class="page-link" href="#">3</a></li>
									<li class="page-item"><a class="page-link" href="#">Next</a></li>
								</ul>
							</div>
						</div>


					</div>

				</div>
			</div>
			<script type="text/javascript">

    	// search from main page

			$('.kml').on('click',function(){
				console.log('clicked');

				var tbl = $(this).attr('name')


			 $.ajax({
			 type: "GET",
			                          //  data: name,
			                          url:"Admin/TableController/get_kml_dataset?tbl="+tbl,
			                          beforeSend: function() {
			                              //  $.LoadingOverlay("show");
			                            },
			                            complete: function() {
			                              //  $.LoadingOverlay("hide", true);
			                            },
			                            success: function (result) {

																	//console.log(JSON.parse(result));
																	var result_parsed=JSON.parse(result);
																	var kml = tokml(result_parsed); // json is geojson here
																	console.log(kml);
                                  download(kml, tbl+".kml", "text/xml");


																	}

			});
			});

			var search ='<?php echo $search ?>';


			if(search != 0 ){
				searchFunction(search);


				function searchFunction(search) {
	 			 // Declare variables
	 			var   filter, div, h5, a, i;


	 		 	 filter = search.toUpperCase();
				 	console.log(filter);

	 			 div = document.getElementsByClassName("myUL");

	 			 h5 = document.getElementsByTagName('h5');
	 			 console.log(h5);
	 			 console.log(div);
	 			 console.log(filter);
	 			// console.log(input);

	 			 // Loop through all list items, and hide those who don't match the search query
	 			 for (i = 0; i < h5.length; i++) {
	 					 // a = h5[i].getElementsByTagName("a")[0];
	 						//console.log(h5[i].innerHTML.toUpperCase().indexOf(filter));
	 					 if (h5[i].innerHTML.toUpperCase().indexOf(filter) > -1) {
	 						console.log('if');
	 							 $("#"+h5[i].id).parent().css('display','');
	 					 } else {
	 		 console.log('else');
	 									 $("#"+h5[i].id).parent().css('display','none');
	 					 }
	 			 }
	 		 }

		 }

		// search from main page end

			function myFunction() {
			  // Declare variables
			 var  input, filter, div, h5, a, i;
			  input = document.getElementById('myInput');

			  filter = input.value.toUpperCase();

			  div = document.getElementsByClassName("myUL");

			  h5 = document.getElementsByTagName('h5');
			  console.log(h5);
			  console.log(div);
			  console.log(filter);
			  console.log(input);

			  // Loop through all list items, and hide those who don't match the search query
			  for (i = 0; i < h5.length; i++) {
			      // a = h5[i].getElementsByTagName("a")[0];
			       //console.log(h5[i].innerHTML.toUpperCase().indexOf(filter));
			      if (h5[i].innerHTML.toUpperCase().indexOf(filter) > -1) {
			       console.log('if');
			          $("#"+h5[i].id).parent().css('display','');
			      } else {
			console.log('else');
			              $("#"+h5[i].id).parent().css('display','none');
			      }
			  }
			}

			</script>
<script>
$('.article-loop').paginate(7);
</script>
