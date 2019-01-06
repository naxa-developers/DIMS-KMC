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



         foreach($data_nep as $nep){



             ?>

             <input type="hidden" value="<?php echo $edit_data['id'];?>" name="id">


                <div class="form-group">
                    <label class="col-sm-3 control-label"><?php  echo $nep['nepali_lang']; //ucwords(str_replace("_"," ",$fields[$i]));?></label>
                    <div class="col-sm-6">
                        <input type="text" value="<?php echo $edit_data[$nep['eng_lang']]; ?>" name="<?php echo $nep['eng_lang'];?>" class="form-control round-input">
                    </div>
                </div>

             <?php }?>






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
