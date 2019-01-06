<section id="main-content">
  <section class="wrapper">
    <div class="row">
        <div class="maincontent">
            <div class="contentinner content-editprofile">
                <div class="container-fluid">
                    <div class="row-fluid">
                        <div class="well" style="margin-left: -18px; width: 100%;">
                            <div class="container-fluid">
                                <div class="row-fluid">
                                    <div class="menunotification"></div>
                                    <div class="well">
                                         <?=$category?> 
                                    </div> 
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
  </section>
</section>
<script src="<?php echo base_url('assets/admin/js/jquery.mjs.nestedSortable.js'); ?>"></script>
<script>
    $(document).ready(function(){
    var siteurl='<?php echo base_url(); ?>';  
    $('ol.sortable').nestedSortable({
          forcePlaceholderSize: true,
          handle: 'div',
          helper: 'clone',
          items: 'li',
          opacity: .6,
          placeholder: 'placeholder',
          revert: 250,
          tabSize: 25,
          tolerance: 'pointer',
          toleranceElement: '> div',
          maxLevels: 3,

          isTree: true,
          expandOnHover: 700,
          startCollapsed: true,
          update: function() {
            //var arraied = $(this).nestedSortable('toArray', {startDepthCount: 0});
            //alert(arraied);
           // console.log(arraied);
            var order = $(this).nestedSortable("serialize"); 
           // var order = $(this).nestedSortable('toArray', {startDepthCount: 0});
            $.post(siteurl + "ajax_change_order", order, function(theResponse){
              $(".menunotification").html('<div class="alert alert-success"><button data-dismiss="alert" class="close" type="button">X</button>Category order updated successfully.</div>');
            });
          }
        });
    })
</script>

