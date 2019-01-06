<!--main content start-->
<script src="https://cdn.ckeditor.com/4.9.2/standard/ckeditor.js"></script>
<section id="main-content">
  <section class="wrapper">
    <!-- page start-->




    <div class="row">
      <div class="col-lg-12">
        <section class="panel">
          <header class="panel-heading">
            <b><?php echo $this->lang->line('sub_categories'); ?></b>
          </header>
          <div class="panel-body">

            <br>
            <br>
            <div class="row">
              <div class="col-md-12">
                <form class="form-horizontal bucket-form" action="" method="POST">
                  <div class="form-group">
                    <label class="col-sm-3 control-label col-lg-3" for="inputSuccess">Select Data</label>
                    <div class="col-lg-6">
                      <select name="cat" class="form-control m-bot15">
                        <?php foreach ($data as $data){?>


                          <option value="<?php  echo $data['category_table']?>"><?php  echo $data['category_name']?></option>

                        <?php } ?>
                      </select>



                    </div>
                    <button type="submit" name="submit" class="btn btn-info">select</button>
                  </form>
                </div>


                

              </div>

            </div>



          </section>
        </div>
      </div>










      <!-- page end-->
    </section>
  </section>
  <!--main content end-->
