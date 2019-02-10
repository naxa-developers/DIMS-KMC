<section id="main-content" class="">
  <section class="wrapper">
    <div class="row"><style>.error{ color: red; }</style>
      <div class="col-lg-12">
        <section class="panel">
          <header class="panel-heading">
           Inventory Sub Category
            <form role="form"  method="POST" action="" enctype="multipart/form-data">
              <input type="hidden" name="id" value="<?php echo !empty($drrdataeditdata[0]['id'])?$drrdataeditdata[0]['id']:'' ?>">
                <div class="form-group position-center">

                  <label for="name">Inventory Sub Category Name:</label>
                  <input type="text" name="name" class="form-control" id="name" value="<?php echo !empty($drrdataeditdata[0]['name'])?$drrdataeditdata[0]['name']:'' ?>" placeholder="Please Enter Inventory Sub Category Name">
                <?=form_error('name')?>
                </div>
                    <div class="panel-body">
                        <div class="position-center">
                          <div class="form-group">
                            <div class="col-md-12">
                              <button type="submit" name="submit" class="btn btn-info"><?php if($drrdataeditdata) { echo "Update";}else{echo "Submit";} ?></button>
                             </div>
                            </div>
                        </div>
                    </div>
            </form>
            </div>
          </div>
        </header>
      </section>
    </div>
  </div>
</section>