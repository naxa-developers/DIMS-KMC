
<style>
.basemap img.mapp-image{
	width: 100%;
	height: 200px;
	object-fit: cover;
	background-repeat: no-repeat;
}
.basemap{
	margin: 20px auto;
}
#map_download{
	margin: 30px auto;
}
.text-block {
	position: absolute;
	top: 5px;
	right: 50px;
	background-color: rgba(0,0,0,0.5);
	color: white;
	padding-left: 10px;
	padding-right: 10px;
}

/* Style the Image Used to Trigger the Modal */
#myImg {
	border-radius: 5px;
	cursor: pointer;
	transition: 0.3s;
	    height: 150px;
    width: 250px
}

#myImg:hover {opacity: 0.7;}
.input-group-addon {
    position: absolute;
    right: 10px;
    bottom: 10px;
    z-index: 2;
  }

.publish-srch {
    /* padding: 35px; */
    border-bottom: 1px solid #eee;
}
.publish{
  padding: 35px;
}
.publish img{
  width: 100%;
  height: auto;
  object-fit: cover;
}
.publish h5{
  font-weight: bold;
  border-bottom: 1px solid #ccc;
}

.publish .publish-des{
  text-align: justify;
}
p.para {
    font-size: 14px;
    margin-top: -5px;
}
h6.base {
    font-weight: bold;
}
.myUL:hover .edit {
	display: block;
}

.edit {
	/*padding-top: 128px; */
    /* padding-right: 36px; */
    position: absolute;
    right: 36px;
    top: 120px;
    display: none;
    color: red;
    background-color: #fff;

}

.edit a {
	color: #000;
}
i.fa.fa-download.dwn {
    background-color: #1f5cb2;
    color: #fff;
    padding: 7px;
}
/**/
#myImg {
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
}



/* Add Animation */
.modal-content {
    -webkit-animation-name: zoom;
    -webkit-animation-duration: 0.6s;
    animation-name: zoom;
    animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
    from {-webkit-transform:scale(0)}
    to {-webkit-transform:scale(1)}
}

@keyframes zoom {
    from {transform:scale(0)}
    to {transform:scale(1)}
}

/* The Close Button */
.close {
    position: absolute;
    top: 15px;
    right: 35px;
    color: #f1f1f1;
    font-size: 40px;
    font-weight: bold;
    transition: 0.3s;
}

.close:hover,
.close:focus {
    color: #bbb;
    text-decoration: none;
    cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
    .modal-content {
        width: 100%;
    }
}
.downlink{
	background-color: #1f5cb2;
	color: #fff;
	margin-left: 50px;
	padding: 10px;
}
.downlink:hover{
	color:#e8e8e8;
}
#conten-map {
  padding: 0px;
  transition: all 0.3s;
  position: relative;
  width: 100%;
  background: #fff;
}

#conten-map .navbar {
  padding: 0;
  background: #002052;
  border: none;
  border-radius: 0;
  margin: 0px;
  box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
  position: relative;
}

#conten-map .navbar.navbar-default{
  min-height: 25px;
  font-size: 13px;
}

#conten-map .nav {
  text-align: center;
  color: #fff;
}

#conten-map .navbar-header .navbar-nav li{
  padding: 0;
  color: white;
}
#conten-map .navbar-header .navbar-nav li>a{
  color:#fff;
  padding-top: 5px;
  padding-bottom: 5px;
}
#conten-map .navbar-header .navbar-nav li>a:hover{
  text-decoration: none;
  color: #002052;
  background: #f5f5f5;
}
#conten-map .navbar-default .navbar-nav > li > a:focus{
  text-decoration: none;
  color: #002052;
  background: #f5f5f5;
}
#conten-map .navbar-expand-sm{
  background: #1f5cb2;
  height: 32px;
}
#conten-map .nav-item .nav-link{
  color: #fff;
  font-size: 13px;
}

/* tab css */
ul.nav.nav-tabs li.basemap a{
display: inline-block;
padding: 10px 15px;
color: #FFF;
}
ul.nav-tabs li.basemap.active{
background: rgba(0,0,0,.3);

}

ul.nav.nav-tabs li.basemap a:hover{
background: rgba(0,0,0,.2);
color: #FFF;
}

ul.nav-tabs li.basemap.active a{
color: #FFF;
}


li.basemap.chevron1 i{
font-size: 22px;
color: #FFF;
}

li.basemap.chevron1{
padding: 10px;
}

#close-panel-right i{
font-size: 24px;
color: #FFF;
}

#close-panel-right{
padding: 9px;
}

#close-panel-right:hover, #close-panel-left:hover{
cursor: pointer;
}

ul.nav.nav-tabs {
    font-size: 14px;
    font-weight: bold;
    border-bottom-color: transparent;
    /* margin-left: 10px; */
    margin-top: 0px;
    background: #0056b3;
    border-bottom: none;
}
.no-padding {
    padding-left: 0;
    padding-right: 0;
}

ul.nav-tabs li.basemap{
margin: 0;
}

</style>
<?php

$map_nep='<option value="0">सबै</option>
<option value="admin">प्रशासनिक नक्सा</option>
<option value="risk">जोखिम र प्रकोप नक्सा</option>
<option value="socio">सामाजिक आर्थिक नक्सा</option>
<option value="tourist">पर्यटक नक्सा</option>
<option value="land">जमिनको प्रयोग र आवरण नक्सा</option>
<option value="other">अन्य</option>';

$map_eng='	<option value="0">All</option>
	<option value="admin" >Administrative Maps</option>
	<option value="risk" >Risk and Hazard Maps</option>
	<option value="socio" >Socio Economic Maps</option>
	<option value="tourist" >Tourist Maps</option>
	<option value="land" >Land use and Land Cover</option>
	<option value="other" >Others</option>';


 ?>



<div id="conten-map">
  <!-- <nav class="navbar navbar-expand-sm">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url()?>category?tbl=0 && name=0"><i class="fa fa-map" aria-hidden="true"></i> <?php echo $site_info['map'] ?></a>
      </li>

    </ul>
  </nav> -->
	<div class="container-fluid">
    <div class="row">
	<div class="col-md-6 no-padding col-sm-12">
		<div class="panel-heading">
			<ul class="nav nav-tabs" role="tablist">
				<li class="basemap chevron1" id="close-panel-left">
					<!-- <img src="<?php echo base_url()?>assets/img/up-arrow.png" class="test-icon chevron"> -->
					<i class="la la-bars"></i>
				</li>
				<li role="presentation" class="basemap "><a href="category?tbl=0&&name=0" ><span style="font-size: 16px;"><?php echo $site_info['map']?></span></a></li>
				<li role="presentation" class="basemap"><a href="#" ><span  style="font-size: 16px;"><?php echo $site_info['nav_5']?></span></a></li>
				<li role="presentation" class="basemap active"><a href="<?php echo base_url()?>map_download">
					<!-- <img src="<?php echo base_url()?>assets/img/map-down.png" class="test-icon"> -->
					<span  style="font-size: 16px;"><?php echo $site_info['download']?> <?php echo $site_info['map']?></span></a></li>

			</ul>
		</div>
	</div>
	<div class="col-md-6 no-padding col-sm-12" style="background: #0056b3">
		<div class="panel-heading right pull-right">
			<ul class="nav nav-tabs" role="tablist">
				<li class=" basemap chevron2 navbar-right" id="close-panel-right">
					<!-- <img src="<?php echo base_url()?>assets/img/up-arrow.png" class="test-icon chevron"> -->
					<i class="la la-info-circle"></i>
				</li>
			</ul>
		</div>
	</div>

</div>
</div>

</div>

<div id="map_download">
	<div class="container">
		<!-- search bar -->
		<div class="publish-srch">
			<div class="row">
				<div class="col-md-6">
					<div class="input-group">
						<input class="form-control" placeholder="<?php echo $site_info['search'] ?>" id="myInput" onkeyup="myFunction()">
						<div class="input-group-addon" ><i class="fa fa-search"></i></div>
					</div>
				</div>

				<div class="col-md-6">

					<div class="form-group">
						<select class="custom-select" id="map_download_fil">
             <?php

							if($map_dwnld_lang=='en'){

								echo $map_eng;

							}else {

								echo $map_nep;

							}

						 ?>
						</select>
					</div>
				</div>
				<!-- <div class="col-md-4"><div class="form-group">
					<select class="custom-select">
						<option value="0" selected disabled>Select Document</option>
						<option value="3" >Document 1</option>
						<option value="1" >Document 2</option>
						<option value="2" >Document 3</option>
					</select>
				</div>
			</div> -->
		</div>
	</div>


	<div class="row" id="map_download_filter_data">

<?php  foreach ($data as $v){ ?>
<div class="col-sm-3">
		<div class="basemap myUL padding bg-white" data-mh="downloadMap">
		<img src="<?php echo $v['photo_thumb']  ?>" class="mapp-image mb-3" id="myImg" alt="cangunarayan municipality" name="img1">
		<!-- The Modal -->

			<!-- <div class="edit"></div> -->
			<h6 class="base" id="<?php echo $v['id']  ?>"><?php echo $v['title']  ?></h6>
			 <p class="para"><?php echo $v['summary']  ?></p>

<div id="myModal" class="modal" style="overflow:hidden">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div class="downlk"><a href="NewsletterController/download?name=<?php echo $v['title']?> && id=<?php echo $v['id'] ?>"><i class="fa fa-download fa-2x downlink"></i></a>
  </div>

</div>
<a href="NewsletterController/download?name=<?php echo $v['title']?> && id=<?php echo $v['id'] ?>" class="btn btn-primary btn-sm btn-block"><i class="fa fa-download dwn"></i> Download</a>
		</div>
</div>
	<?php } ?>

	</div>



</div>
</div>

<script type="text/javascript">

function myFunction() {
	// Declare variables
 var  input, filter, div, h5, a, i;
	input = document.getElementById('myInput');

	filter = input.value.toUpperCase();



	h6 = document.getElementsByTagName('h6');


	// Loop through all list items, and hide those who don't match the search query
	for (i = 0; i < h6.length; i++) {
			// a = h5[i].getElementsByTagName("a")[0];
			 //console.log(h5[i].innerHTML.toUpperCase().indexOf(filter));
			if (h6[i].innerHTML.toUpperCase().indexOf(filter) > -1) {

					$("#"+h6[i].id).parent().css('display','');
			} else {

							$("#"+h6[i].id).parent().css('display','none');
			}
	}
}

</script>
<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementsByClassName('mapp-image');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
$('.mapp-image').on('click',function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
});

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

//filter map_download

$('#map_download_fil').change(function(){

var category = $(this).val();
console.log(category);
$.ajax({
  type: "GET",
  //  data: name,
  url:  "NewsletterController/get_category_mapdownload?cat="+category,
  beforeSend: function() {
      $('#map_download_filter_data').empty();
      $('#map_download_filter_data').html('<h2>Loading</h2>');
  },
  complete: function() {
    // $('#filter_pub').empty();
    // $('#filter_pub').append('<h2>Loading</h2>');
  },
  success: function (result) {
		//console.log(result);

    $('#map_download_filter_data').html('');
		var data = JSON.parse(result);

	  var i;


	  for(i=0; i<data.length; i++){
			var div_map_download = " ";

			div_map_download += '<div class="col-sm-4 basemap myUL">';
			div_map_download +='<img src="'+data[i].photo_thumb+'" class="mapp-image" id="myImg" alt="cangunarayan municipality" name="img1">';


				div_map_download +='<div class="edit"><a href="NewsletterController/download?name='+data[i].title+' && id='+data[i].id+'"><i class="fa fa-download dwn"></i></a></div>';
				div_map_download +='<h6 class="base" id="'+data[i].id+'">'+data[i].title+'</h6>';
				 div_map_download +='<p class="para">'+data[i].summary+'</p>';

	div_map_download +='<div id="myModal" class="modal" style="overflow:hidden">';
	  div_map_download +='<span class="close">&times;</span>';
	  div_map_download +='<img class="modal-content" id="img01">';
	  div_map_download +='<div class="downlk"><a href="NewsletterController/download?name='+data[i].title+' && id='+data[i].id+'"><i class="fa fa-download fa-2x downlink"></i></a>';
	  div_map_download +='</div>';

	div_map_download +='</div>';

			div_map_download +='</div>';

			console.log(div_map_download);

  $('#map_download_filter_data').append(div_map_download);



		}
}

});
});

//filter end s
</script>
