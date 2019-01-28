<!--main content start-->
<section id="main-content" class="">
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Form Elements
                </header>
                <div class="panel-body">
                    <form class="form-horizontal bucket-form" method="post" action="">
                      <input type="hidden" value="<?php echo $dictionary[0]['id']; ?>" name="id">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="word">Word</label>
                                <input type="text" value="<?php echo $dictionary[0]['word']; ?>" name="word" class="form-control round-input">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <label for="Meaning">Meaning</label>
                            <textarea class="form-control" name="meaning" id="meaning" cols="60" rows="4"><?php echo $dictionary[0]['meaning'];?></textarea>
                        </div>

                        <div class="col-sm-6">
                            <label for="comment">Comment</label>
                            <textarea class="form-control" name="comment" id="comment" cols="60" rows="4"><?php echo $dictionary[0]['comment'];?></textarea>
                        </div>


                        <div class="col-md-6">
                            <label class="control-label">&nbsp;&nbsp;</label>
                            <button type="submit" name="submit" class="btn btn-info">Submit</button>
                         </div>
                        </div>
                    </form>
                </div>
            </section>
            </div>
        </div>
    </section>
</section>
