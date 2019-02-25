 <div class="row">
 <li id="fav" class="list-group-item col-md-12">
        <div id="favorites" class="">
            <div class="container">
                <span class="glyphicon glyphicon-star"> </span><b>Suggested List</b>
            </div>
        </div>
</li>
<?php if($searchdata):

foreach ($searchdata as $key => $value) { ?>
<li class="list-group-item findClickedItemData col-lg-4 col-md-6" data-id="<?php echo base64_encode($value->id); ?>">
  
        
            
            <div class='media-left media-middle searchItem'>
                <div class="searchThimb">
                    <a href='javascript:void(0);'> <img class='media-object img-circle '  src='<?php echo $value->image; ?>'></a>
                </div>
                <div id='center' class="search-content">
                    <?php echo $value->word ?>
                </div>
            </div>
            
</li>

<?php } endif; ?>
</div>
