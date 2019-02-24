<style>.valid-feedback{color:red;}</style>
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url();?>assets/frontend/leaflet/leaflet.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/c3/0.6.11/c3.min.css">
<link href="<?php echo site_url(); ?>/assets/frontend/css/select2_406.css" rel="stylesheet">
<section class="projectSection">
   <div class="container-fluid">
    <div class="row">
        <div class="col-lg-3 col-md-4">
            <div class="project-sidebar">
                <ul>
                    <li class="active">
                        <a href="#">Project list</a>
                    </li>
                    <li>
                        <a href="#">Project list</a>
                    </li>
                    <li>
                        <a href="#">Project list</a>
                    </li>
                    <li>
                        <a href="#">Project list</a>
                    </li>
                    <li>
                        <a href="#">Project list</a>
                    </li>
                    <li>
                        <a href="#">Project list</a>
                    </li>
                    <li>
                        <a href="#">Project list</a>
                    </li>
                    <li>
                        <a href="#">Project list</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-lg-9 col-md-8">
            <div class="project-main">
                <form action="" method="POST">
                <input type="hidden" name="id" value="<?php echo  !empty($projectlist[0]['id'])?$projectlist[0]['id']:'' ?>">
                <div class="form-row">
                    <div class="col-md-3 mb-3">
                        <label for="validationServer013">Enter Project Name : </label>
                        <input type="text" name="title" class="form-control is-valid" id="validationServer013" placeholder="Enter Project Name" value="<?php echo  !empty($projectlist[0]['title'])?$projectlist[0]['title']:'' ?>">
                       <?php echo form_error('title'); ?>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="validationServer023">Start Date : </label>
                        <input type="text" name="startdate" id="datepicker" class="form-control is-valid datepicker" id="validationServer023" placeholder="Last name" value="<?php echo  !empty($projectlist[0]['startdate'])?$projectlist[0]['startdate']:'' ?>"> 
                        <?php echo form_error('startdate'); ?>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="validationServer023">Start Date : </label>
                        <input type="text" name="enddate" id="datepicker1" class="form-control is-valid datepicker" id="validationServer023" placeholder="Last name" value="<?php echo  !empty($projectlist[0]['enddate'])?$projectlist[0]['enddate']:'' ?>"> 
                        <?php echo form_error('enddate'); ?>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="validationServer023">Latitude : </label>
                        <input type="text" name="latitude" id="latitude" class="form-control is-valid" id="validationServer023" placeholder="Latitude"  value="<?php echo  !empty($projectlist[0]['latitude'])?$projectlist[0]['latitude']:'' ?>"> 
                        <?php echo form_error('latitude'); ?>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="validationServer023">Longitude : </label>
                        <input type="text" name="longitude" id="longitude" class="form-control is-valid" id="validationServer023" placeholder="Longitude"  value="<?php echo  !empty($projectlist[0]['longitude'])?$projectlist[0]['longitude']:'' ?>">
                        <?php echo form_error('longitude'); ?>
                    </div>
                    <div class="col-md-9 mb-3">
                        <label for="ward">Select Ward :</label>
                        <?php 
                            $wardd = !empty($projectlist[0]['ward'])?$projectlist[0]['ward']:'';
                            $wardID = explode(',',$wardd);//print_r($wardID);
                        ?>
                        <select name="ward[]" class="form-control select2 custom-select" id="ward" multiple="multiple">
                        <?php 
                            for ($i=1; $i < 40 ; $i++) { 
                                ?>
                            <option value="<?php echo $i;?>" <?php echo (in_array($i, $wardID))?"selected='selected'":"";?>>Ward <?php  echo $i; ?></option>
                        <?php } ?>
                        </select>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="validationServer023">Description : </label>
                        <textarea class="form-control" name="description" id="" cols="30" rows="6" placeholder="Enter Your Project Description"><?php echo  !empty($projectlist[0]['description'])?$projectlist[0]['description']:'' ?></textarea>
                    </div>
                    <div  id="iframeMap" style="height: 400px; width: 100%">
                        <label for="validationServer023">To select Lattitude Please change your location</label>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <button class="btn btn-primary" type="submit" style="margin-top: 10px;"><?php if($projectlist){ echo "Update form"; }else{ echo "Submit form ";} ?></button>
                </div>
            </form>
            </div>
            
        </div>
    </div>
</div> 
</section>


<link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.3/dist/leaflet.css"/>
<script src="https://unpkg.com/leaflet@1.0.3/dist/leaflet.js"></script>
 <script type="text/javascript" src="<?php echo base_url() ?>assets/frontend/js/select2prakash.js"></script>
<script>
    var mymap1 = L.map('iframeMap').setView([27.7172, 85.3240], 13);
    var CartoDB_DarkMatter1 = L.tileLayer(
        'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors',
            subdomains: 'abcd',
            maxZoom: 19
        }).addTo(mymap1);
        googleStreets = L.tileLayer('http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}',{
            maxZoom: 20,
            subdomains:['mt0','mt1','mt2','mt3']
        });
        var marker = L.marker([27.710623, 85.327163], {
            draggable: true
        }).addTo(mymap1);
        marker.bindPopup('<b><p class="center">Drag The Marker On Your location</p></b>').openPopup();
        marker.on('dragend', function(e) {


            document.getElementById('latitude').value = marker.getLatLng().lat;
            document.getElementById('longitude').value = marker.getLatLng().lng;

        });
        $(document).ready(function() {
        $(function () {
          $("#datepicker").datepicker({ 
                autoclose: true, 
                todayHighlight: true
          }).datepicker('update', new Date());
          $(".datepicker").datepicker({ 
                autoclose: true, 
                todayHighlight: true
          }).datepicker('update', new Date());
        });
        // $("select").select2({
        //     // options 
        //     searchInputPlaceholder: 'My custom placeholder...'
        // });
        $('.select2').select2({
        minimumResultsForSearch: -1,
        placeholder: function() {
            $(this).data('placeholder');
        }
    });
    });

</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>

