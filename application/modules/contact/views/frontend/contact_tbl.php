<div class="tab-content">
    <div id="first" class="tab-pane   fade in show   active">
        <div class="table-responsive">
            <table class="table table-striped table-hover" id="contact_table_db">
                <thead class="tableHeader">
                    <tr>

                    <?php

                   echo $header;


                        ?>
                    </tr>
                </thead>
                <tbody>
                <?php if($data){ $i=1;
                foreach($data as $v ){
                  ?>

                    <tr class="tr_tbl">
                       <th scope="row" id="<?php echo $v['id'] ?>"><?php echo $i; ?></th>
                        <?php  foreach($v as $key => $value) {
                          if($key=='id' || $key=='category' || $key=='language'){

                          }else{
                          ?>

                       <td id="<?php echo $v['id'].$i.$key ?>"><?php echo $value ?></td>

                     <?php }}?>
                    </tr>
                <?php $i++;  } } ?>
                </tbody>
            </table>
            <div class="text-center mb-3">
                <a href="<?php echo base_url()?>contact/downlaod_conatct_tbl?type=<?php echo $sub_cat ?>&&tbl=<?php echo $cat_contact ?>"><button type="submit" name="upload_data" class="btn btn-danger" style="background-color: #1f5cb2;border-color: #1f5cb2;margin-top: -7px;"><i class="fa fa-download"></i> <?php echo DOWNLOAD ?></button></a>
            </div>
        </div>
    </div>




    </div>

    <script>
    $(document).ready(function() {
      $('#contact_table_db').DataTable({

            "paging":   true,
            "ordering": true,
            "searching":false,
            "info":     false
            });
    } );
    </script>
