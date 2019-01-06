</section>
<!-- Placed js at the end of the document so the pages load faster -->
<!--Core js-->
<!-- <script src="<?php echo base_url();?>assets/admin/js/jquery-1.10.2.min.js"></script> -->
<script src="<?php echo base_url();?>assets/admin/js/jquery-migrate.js"></script>
<!-- <script src="<?php echo base_url();?>assets/admin/js/jquery.js"></script> -->
<script src="<?php echo base_url();?>assets/admin/js/bootstrap.min.js"></script>
<script class="include" type="text/javascript" src="<?php echo base_url();?>assets/admin/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="<?php echo base_url();?>assets/admin/js/jquery.scrollTo.min.js"></script>
<script src="<?php echo base_url();?>assets/admin/js/jquery.slimscroll.js"></script>
<script src="<?php echo base_url();?>assets/admin/js/jquery.nicescroll.js"></script>

<!-- scrip for steps forms -->
<script src="<?php echo base_url();?>assets/admin/js/jquery.steps.js"></script>

<!-- js fileupload drop box -->
<script src="<?php echo base_url();?>assets/admin/js/dropzone.js"></script>

<!-- js fileuplaod -->
<script type="text/javascript" src="<?php echo base_url();?>assets/admin/js/bootstrap-fileupload.js"></script>

<!--script for datatables-->
<script type="text/javascript" src="<?php echo base_url();?>assets/admin/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/admin/js/DT_bootstrap.js"></script>

<!-- datatables -->

<!-- <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script> -->

<!-- <script type="text/javascript" src="<?php echo base_url();?>assets/admin/js/jquery.dataTables.js"></script> -->

<!-- <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script> -->

<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>

<!-- end -->

<!--common script init for all pages-->
<script src="<?php echo base_url();?>assets/admin/js/scripts.js"></script>

<script src="<?php echo base_url();?>assets/admin/js/table-editable.js"></script>

<script>
    $(document).ready(function() {
        EditableTable.init();

    $('#btnadd').on('click',function(){

    console.log('sdasdas');

     $("#columnid").append(' <br><br><label for="pwd">column name:</label>'+
         '<input type="text" class="form-control" id="pwd" placeholder="Enter Column Name" name="c_name[]" required>'+
       '</div>'+
       '<div class="form-group">'+
         '<label for="pwd">column length:</label>'+
         '<input type="text" class="form-control" id="pwd" placeholder="Provide Length" name="c_length[]" >'+
       '</div>'+

        '<div class="form-group">'+
            '<label for="pwd">column Type:</label>'+
         '<select class="form-control" name="c_type[]">'+
           '<option value="varchar">varchar</option>'+
           '<option value="int">int</option>'+
       '</select>');

    });


    $('#tb1').DataTable({
       dom: 'Bfrtip',

       buttons: [
           'copy','csv', 'excel', 'pdf', 'print'
       ]
   });

   $('#tb2').DataTable({
      dom: 'Bfrtip',
       "paging": false,
       "searching": false,
       "info": false,
       "ordering": false,

      buttons: [
          'csv'
      ]
  });

  $('#tb3').DataTable({
     dom: 'Bfrtip',
      "paging": true,
      "searching": true,
      "info": true,
      "ordering": true,

     buttons: [

     ],


 });

});//documnt

// steps forms

    $(function ()
    {
        $("#wizard").steps({
            headerTag: "h2",
            bodyTag: "section",
            transitionEffect: "slideLeft"
        });


        $("#wizard-vertical").steps({
            headerTag: "h2",
            bodyTag: "section",
            transitionEffect: "slideLeft",
            stepsOrientation: "vertical"
        });
    });
</script>


</body>
</html>
