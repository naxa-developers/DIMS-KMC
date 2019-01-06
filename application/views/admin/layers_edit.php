<!--main content start-->
<section id="main-content" class="">
    <section class="wrapper">
    <!-- page start-->
    <!-- page start-->





    <div class="row">
    <div class="col-lg-12">
    <section class="panel">
        <header class="panel-heading">
            Form Elements
        </header>
        <div class="panel-body">
            <form class="form-horizontal bucket-form" method="post" action="">

              <?php



         foreach($data as $v){

              foreach($v as $key => $value) {



             ?>

             <input type="hidden" value="<?php echo $v['gid'];?>" name="id" >


                <div class="form-group">
                    <label class="col-sm-3 control-label"><?php  echo ucwords(str_replace("_"," ",$key));?></label>
                    <div class="col-sm-6">
                        <input type="text" value="<?php echo $value ?>" name="<?php echo $key ?>" class="form-control round-input">
                    </div>
                </div>

             <?php }}?>






                <div class="col-md-6">
              <button type="submit" class="btn btn-info">Submit</button>

                 </div>



                </div>


                </div>
            </form>
        </div>
    </section>




    </div>
    </div>









    <!-- page end-->
    </section>
</section>
<!--main content end-->
