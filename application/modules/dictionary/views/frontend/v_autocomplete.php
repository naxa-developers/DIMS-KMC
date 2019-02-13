 <li id="fav" class="list-group-item">
    <div class="row">
        <div id="favorites" class="">
            <div class="container">
                <span class="glyphicon glyphicon-star"> </span><b>Suggested List</b>
            </div>
        </div>
    </div>
</li>
<?php if($searchdata):

foreach ($searchdata as $key => $value) { ?>
<li class="list-group-item" data-id="<?php echo $value->id; ?>">
    <div class='row'>
        <div class='col-md-12'>
            <div class='media-left media-middle'>
                <a href='javascript:void(0);' class="findClickedItem" data-id="<?php echo $value->id; ?>">
                    <img class='media-object img-circle' src='<?php echo $value->image; ?>' height="40px"></a>
            </div>
            <div id='center'>
               <?php echo $value->word ?>
            </div>
        </div>
    </div>
</li>
<?php } endif; ?>
