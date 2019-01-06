<!--main content start-->
<section id="main-content">
    <section class="wrapper">
    <!-- page start-->
        <div class="row">
        <div class="col-sm-12">
            <section class="panel">
              <section class="panel">
                  <header class="panel-heading">
                      <b><?php echo $this->lang->line('reports'); ?></b>

                      <!-- <span class="tools pull-right">
                        <a href="<?php echo base_url()?>add_proj"><button type="submit" name="upload_data" class="btn btn-danger"><i class="fa fa-plus"></i> Add Project Partner</button></a>
                       </span> -->
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
                    <?php  if($data == NULL){   ?>

                      <h4> <?php echo $this->lang->line('nodata'); ?>   </h4>

                    <?php }else{ ?>
                      <table class="table table-hover" id='tb1'>
                          <thead>





                          <tr>

                            <?php foreach($data[0] as $key => $value){

                                if ($key=='id'||$key=='latitude'||$key=='longitude'||$key=='photo'||$key=='token_id') {
                                  // code...
                                }else{
                                          ?>
                              <td>

                                <?php

               									$cleanname = explode("_", $key);
               									foreach ($cleanname as $r) {
               										echo ucfirst($r)." ";
               														      }?>

                              </td>
                            <?php  }} ?>
                            <td>
                            <?php echo $this->lang->line('reply'); ?>
                            </td>
                            <td>
                              <?php echo $this->lang->line('operation'); ?>
                            </td>
                          </tr>


                          </thead>
                          <tbody>
                              <?php foreach($data as $v ){ ?>
                          <tr>
                              <?php foreach($v as $key => $value) {

                                if ($key=='id'||$key=='latitude'||$key=='longitude'||$key=='photo'||$key=='token_id') {
                                  // code...
                                }elseif($key=='status'){

                                    if($value=='ongoing'){
                                     echo '<td><button type="button" class="btn btn-round btn-primary" data-toggle="modal" data-target="#myModal'.$v['id'].'"> ongoing  </button></td>';

                                   } elseif($value=='completed'){
                                      echo '<td><button type="button" class="btn btn-round btn-success" data-toggle="modal" data-target="#myModal'.$v['id'].'">Completed</button></td>';

                                    } elseif($value=='pending'){
                                       echo '<td><button type="button" class="btn btn-round btn-danger" data-toggle="modal" data-target="#myModal'.$v['id'].'">Pending</button></td>';

                                   }else{

                                    echo '<td><button type="button" class="btn btn-round btn-warning" data-toggle="modal" data-target="#myModal'.$v['id'].'"> choose status</button></td>';
                                   }




                                 }elseif($key=='verify'){

                                  if($value=='0'){
                                    ?>


                                <td><a onclick="return confirm('Are you sure you want to verify this Report ?')"   href="verify_status?id=<?php echo $v['id']?>" ><button  type="button" class="btn btn-round btn-warning btn-sm"><i class="fa fa-circle"></i> Verify</button></a></td>';
                                <?php
                                  }else{

                                  echo '<td><button type="button" class="btn btn-round btn-success btn-sm" ><i class="fa fa-check"></i> Verified</button></td>';

                                  }


                                   }else{


                                   ?>





                              <td><?php echo $value;?></td>
                            <?php }}  ?>
                            <td>
                              <button type="button" class="btn btn-round btn-primary" data-toggle="modal" data-target="#myModal_rep<?php echo $v['id'] ?>"><i class="fa fa-mail-reply"></i> <?php echo $this->lang->line('reply'); ?></button>
                            </td>

                              <td>

                          <a onclick="return confirm('Are you sure you want to delete?')" href="<?php echo base_url()?>report/delete?id=<?php echo  $v['id'];?>"><?php echo $this->lang->line('delete'); ?></a>

                        </td>





                          </tr>

                          <!-- modal start -->


                          <!-- Modal -->
                            <div class="modal fade" id="myModal<?php echo  $v['id'];?>" role="dialog">
                              <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title"><?php echo $this->lang->line('change_status'); ?></h4>
                                  </div>
                                  <div class="modal-body">
                                    <p><?php echo $this->lang->line('choose_status'); ?>.</p>

                                    <form action="" method="POST">
                                      <input type="text" name="id" value="<?php echo  $v['id'];?>" hidden>
                                    <?php  if($v['status']=='pending') { ?>
                                <label class="radio-inline">
                                  <input type="radio" name="status" value="pending" checked> <?php echo $this->lang->line('pending'); ?>
                                </label>
                                <label class="radio-inline">
                                  <input type="radio" name="status" value="ongoing" > <?php echo $this->lang->line('ongoing'); ?>
                                </label>
                                <label class="radio-inline">
                                  <input type="radio" name="status" value="completed" > <?php echo $this->lang->line('completed'); ?>
                                </label>
                              <?php }elseif($v['status']=='ongoing'){ ?>

                                <label class="radio-inline">
                                  <input type="radio" name="status" value="pending" ><?php echo $this->lang->line('pending'); ?>
                                </label>

                                <label class="radio-inline">
                                  <input type="radio" name="status" value="ongoing" checked><?php echo $this->lang->line('ongoing'); ?>
                                </label>

                                <label class="radio-inline">
                                  <input type="radio" name="status" value="completed" ><?php echo $this->lang->line('completed'); ?>
                                </label>

                              <?php }else{ ?>
                                <label class="radio-inline">
                                  <input type="radio" name="status" value="pending" ><?php echo $this->lang->line('pending'); ?>
                                </label>

                                <label class="radio-inline">
                                  <input type="radio" name="status" value="ongoing" ><?php echo $this->lang->line('ongoing'); ?>
                                </label>

                                <label class="radio-inline">
                                  <input type="radio" name="status" value="completed" checked><?php echo $this->lang->line('completed'); ?>
                                </label>
                              <?php } ?>
                                <br><br>
                                <button type="submit" name="submit" class="btn btn-danger"><?php echo $this->lang->line('change'); ?></button>
                              </form>

                                  </div>
                                  <div class="modal-footer">
                                    <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
                                  </div>
                                </div>

                              </div>
                            </div>
                          <!-- modal end -->


                          <!-- modal reply start -->


                          <!-- modal start -->


                          <!-- Modal -->
                            <div class="modal fade" id="myModal_rep<?php echo  $v['id'];?>" role="dialog">
                              <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">REPLY REPORT</h4>
                                  </div>
                                  <div class="modal-body">
                                    <div class="col-md-16">
                                                   <div class="card">

                                                       <div class="content">
                                                           <form method="post" action="ReportController/send_msg">

                                                             <div class="header">
                                                      <h4 class="title">Message Received</h4>
                                                           </div>
                                             <p><strong><?php echo  $v['incident_type'];?></strong><p>
                                               <br> <br>

                                                             <div class="header">
                                                      <h4 class="title">Message Received</h4>
                                                           </div>
                                             <p><strong><?php echo  $v['message'];?></strong><p>
                                               <br> <br>

                                                                  <div class="header">
                                                           <h4 class="title">Write Reply</h4>
                                                                </div>

                                                               <div class="row">
                                                                   <div class="col-md-12">
                                                                       <div class="form-group">
                                                                           <label></label>
                                                                          <input type="hidden" name="id" value="<?php echo  $v['id'];?>">
                                                                          <input type="hidden" name="token" value="<?php echo  $v['token_id'];?>">
                                                                           <textarea rows="10" class="form-control" id="ans" name="ans" placeholder="Here you can write your Reply"></textarea>
                                                                       </div>
                                                                   </div>
                                                               </div>

                                                               <button type="submit" name="send" class="btn btn-info  pull-right">Reply</button>
                                                               <div class="clearfix"></div>
                                                           </form>
                                                       </div>
                                                   </div>
                                               </div>
                                  <div class="modal-footer">
                                    <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
                                  </div>
                                </div>

                              </div>
                            </div>
                          <!-- modal end -->
                          <!-- modal end -->




                        <?php  }?>
                          </tbody>
                      </table>
                    <?php }?>
                  </div>
              </section>

            </section>
        </div>
    </div>

        </div>
    <!-- page end-->



    </section>
</section>



<!--main content end-->
