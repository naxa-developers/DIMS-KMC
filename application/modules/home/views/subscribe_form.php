<div class="row"> 
    <div class="col-md-12">
        <form action="" action="" method="POST" id="subscribeormValidate">
            <input type="hidden" name="email" value="<?php echo !empty($email)?$email:''; ?>" id="emailSubscribe">
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-8 col-sm-6">
                        <div class="form-group">
                            <label for="formGroupExampleInput">Map Data</label>
                            <div class="form-check">
                                <input name="mapdata" id="mapdata" class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="1" aria-label="...">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Dataset Publication</label>
                            <div class="form-check">
                                <input name="datasetpblication" id="mapdata" class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="1" aria-label="...">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Disaster Information</label>
                            <div class="form-check">
                                <input name="drrinformation" id="mapdata" class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
                            </div>
                        </div>
                    </div>
                    <div class="col-4 col-sm-6">
                        <div class="form-group">
                            <label for="formGroupExampleInput">Map Data</label>
                            <div class="form-check">
                                <input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">DIMS Report</label>
                            <div class="form-check">
                                <input name="report" value="1" class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Subscribe All</label>
                            <div class="form-check">
                                <input name="all" id="all" class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
                            </div>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success" id="SubscribeNowButton">Subscribe Now</button>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </form> 
    </div>
</div>
<script>
        $.extend(
        {
            redirectPost: function(location, args)
            {
                var form = $('<form></form>');
                form.attr("method", "post");
                form.attr("action", location);
                $.each( args, function( key, value ) {
                    var field = $('<input></input>');
                    field.attr("type", "hidden");
                    field.attr("name", key);
                    field.attr("value", value);
                    form.append(field);
                });
                $(form).appendTo('body').submit();
            }
        }); 
        $(document).off('click','#SubscribeNowButton');
        $(document).on('click','#SubscribeNowButton',function(){ 
            var title= $(this).data('title'); 
            $("#subscribeormValidate").validate({
                errorElement: 'p',
                errorClass:'text-danger',
                //validClass:'success',
                highlight: function (element, errorClass, validClass) { 
                    $(element).parents("div.form-group").addClass('has-error').removeClass('has-success'); 
                }, 
                unhighlight: function (element, errorClass, validClass) { 
                $(element).parents("div.form-group").removeClass('has-error'); 
                $(element).parents(".error").removeClass('has-error').addClass('has-success'); 
            },
            rules: {
                email: {
                    required: true,
                    email: true,
                },
                drrinformation: {
                    required: true,
                }
            },
            subject: {
                required: errorMessage.required
            },
            messages: {
                email: {
                    required: errorMessage.required,
                    email: errorMessage.email
                }
            },
            errorPlacement: function(e, s) {
                e.appendTo(s.parent())
            },
            submitHandler: function(e) {
                $('#golobalMoadl').modal('show');
                $('#globalTitleModal').html(title);
                
                jQuery.ajax({
                        type: "json",
                        method:"POST",
                        url: '<?php echo base_url() ?>home/save_subscribe_form',
                        datatype: 'html',
                        data: $('form#subscribeormValidate').serialize(),
                        beforeSend: function(){
                        },
                    success: function(jsons) {
                        data = jQuery.parseJSON(jsons);
                        if (data.statuses == 'success') {
                            $( "#globalModalId" ).html(data.template);

                        } else {
                            $( "#globalModalId" ).html(data.message);
                        }
                        setTimeout(function(){
                        $("#submitstatus").html('');
                        },4000);
                    }
                });
            }
        })
    });
    </script>