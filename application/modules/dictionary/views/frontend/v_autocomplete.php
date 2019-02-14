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
<li class="list-group-item findClickedItemData" data-id="<?php echo base64_encode($value->id); ?>">
    <div class='row'> 
        <a href='javascript:void(0);'>
            <div class='col-md-12'>
            <div class='media-left media-middle'>
                <img class='media-object img-circle '  src='<?php echo $value->image; ?>' height="40px">
            </div>
            <div id='center'>
               <?php echo $value->word ?>
            </div>
        </a>
        </div>
    </div>
</li>
<?php } endif; ?>
