!--main content start-->
 <script src="<?php echo base_url();?>assets/admin/js/jquery-1.10.2.min.js"></script>
<section id="main-content" class="">
  <section class="wrapper">
    <!-- page start-->
    <!-- page start-->
    <div class="row" >
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                  <b>Manage Popup Style</b>
                  <span class="tools pull-right">
          <a href="<?php echo base_url()?>category?tbl=<?php echo $table ?>"><button type="submit" name="upload_data" class="btn btn-danger" style="background-color: #1fb5ad;border-color: #1fb5ad;margin-top: -7px;"><i class="fa fa-map-marker"></i> View In Map</button></a>
                        </span>
                </header>
                <div class="panel-body">

                  <?php
                  $error=	$this->session->flashdata('msg');
                  if($error){ ?>
                    <div class="alert alert-info alert-dismissible">
                      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                      <strong>Message!!!!</strong>  <?php echo $error ; ?>
                    </div>
                    <?php
                  }
                  ?>

                  <div class="form-group">
                      <label class="col-sm-3 control-label col-lg-3" for="inputSuccess">Selects</label>
                      <div class="col-lg-6">
                          <select id="getcolumns" class="form-control m-bot15">
                            <?php foreach($tbl_name as $tbl){ ?>
                              <option  value="<?php echo $tbl['category_table'] ?>"><?php echo $tbl['category_name'] ?></option>

                            <?php } ?>
                          </select>


                      </div>
                  </div>


                    <div class="row">
                        <div class="col-md-12">
                            <form class="form-horizontal bucket-form" action=" " method="POST">
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Checkboxes</label>

                                    <div class="col-sm-9 icheck ">

                                        <div class="minimal col-md-12">
                                            <div id="checkbox_div" class="checkbox col-md-12">


                                            </div>
                                        </div>
                                        <input type="text" name="table" value="<?php echo $table ?>" hidden>
                                        <br/>
                                        <button type="submit" name="submit" class="btn btn-info" style="background-color: #1fb5ad;border-color: #1fb5ad;">Update</button>



                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                    <br>
                    <br>

                    </div>
                </div>
            </section>
        </div>
    </div>

    <!-- kjljlkjklj -->








    <!-- page end-->
  </section>
</section>
<!--main content end-->



<script>

$(document).ready(function(){



$('#checkbox_div').on('click','.chbox',function(){
console.log($(this).is(':checked'));
if($(this).is(':checked')){
  //console.log('checked');

var Class = $(this).attr('id');
console.log(Class);
$('.'+Class).attr('checked',true);


}else{
console.log('not-checked');
$('.'+Class).attr('checked',false);
}




});





});


function getcolumns(id)
{
//var tbl='<?php echo $table ?>'
//var id=document.getElementById("getcolumns").value;
// var dataString = 'id='+ id;
console.log(id);
$("#checkbox_div").html("");

$.ajax
({
type: "GET",
url: "<?php echo base_url(FOLDER_ADMIN); ?>map/getcolumnsselected?tbl="+id,



success: function(html)
{
console.log(html);
$("#checkbox_div").html(html);
}
});

}
$('#getcolumns').on('change',function(){

  var Option=$('#getcolumns option:selected').val();
  getcolumns(Option);

});

$("#getcolumns  option:selected").attr("selected",false);
$("#getcolumns  option[value='<?php echo $table; ?>']").attr("selected",true);
getcolumns("<?php echo $table; ?>");



</script>


</body>
</html>
