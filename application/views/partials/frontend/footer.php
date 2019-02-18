        <div class="modal fade" tabindex="-1" role="dialog" id="spinnerModal">
            <div class="modal-dialog modal-dialog-centered text-center" role="document">
                <span class="fa fa-spinner fa-spin fa-3x w-100"></span>
            </div>
        </div>
        <div id="golobalMoadl" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="globalTitleModal"></h5>
                        <button type="button" class="close1 btn" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="form-check" id="globalModalId">

                    </div>
                </div>
            </div>
        </div>
        <footer>
            <section class="footerSection section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="texts">
                                 <div class="download">
                                    ABOUT PROJECT
                                </div>
                                <div class="download">
                                    DOWNLOAD APP
                                </div>
                                <div class="sdnld">
                                    DIMS ANROID APP
                                </div>
                                <div class="icons">
                                    <a href="">
                                        <img src="<?php echo base_url();?>assets/frontend/img/assets/googleplay.png" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">

                            <div class="download">
                                SIGN UP
                            </div>
                            <div class="sdnld">
                              <?php echo !empty(SUBSCRIBE)?SUBSCRIBE:'' ?>
                            </div>
                            <div class="suscribeholder">
                                <form  id="subscribeForm" class="search-hotels__form" method="POST" action="<?php //echo base_url();?>">
                                    <input class="suscribe" type="email" name="email" placeholder="<?php echo !empty(EMAIL)?EMAIL:''?>">
                                    <button id="subscribeButton" class="suscribeBtn" data-title="Subscribe Form"> <?php echo !empty(SUBSCRIBE_BTN)?SUBSCRIBE_BTN:'' ?></button>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="download">
                                FOLLOW
                            </div>
                            <div class="sdnld">
                                OUR SOCIAL NETWORK
                            </div>
                            <?php if(FACEBOOK): ?>
                            <div class="links">
                                <a href="<?php echo FACEBOOK ?>">
                                    <i class="fab fa-facebook"></i>
                                    <span>Facebook</span>
                                </a>
                            </div>
                            <?php endif; if(TWITTER): ?>
                            <div class="links">
                                <a href="<?php echo TWITTER ?>">
                                    <i class="fab fa-twitter"></i>
                                    <span>Twitter</span>
                                </a>
                            </div>
                        <?php endif; if(GOOGLE): ?>
                            <div class="links">
                                <a href="<?php echo GOOGLE ?>">
                                    <i class="fab fa-youtube"></i>
                                    <span>Youtube</span>
                                </a>
                            </div>
                        <?php endif; ?>
                        </div>
                    </div>
                </div>
            </section>
            <section class="copyright">
                <div class="container ">
                    <p> &copy; <?php echo date('Y'); ?> <a href="#" title=""></a><?php echo !empty(COPY_TEXT)?COPY_TEXT:'' ?></p>
                </div>
            </section>
        </footer>
        <!-- <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script> -->

        <script src="<?php echo base_url();?>assets/frontend/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>assets/frontend/js/slick.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url()?>assets/frontend/js/validate.js"></script>
        <script type="text/javascript" src="<?php echo base_url()?>assets/frontend/js/validation.error.messages.js"></script><script type="text/javascript" src="<?php echo base_url()?>assets/frontend/js/jquery.form.js"></script>
        <script src="<?php echo base_url();?>assets/frontend/js/scriptall.js"></script>
        <script src="<?php echo base_url();?>assets/frontend/js/jquery.jConveyorTicker.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <!-- <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script> -->

       <!--  <script>
            $('#popover').popover();
            $("#popover").popover({ trigger: "hover" });
        </script> -->
        <script>

            $(function () {
                $('.ticker').jConveyorTicker({
                    anim_duration: 800
                });
            });
        </script>
        <script>
            $(function () {
                $('.ticker').jConveyorTicker({
                    anim_duration: 800
                });
                $('.mobile-slide').slick({
                    dots: false,
                    autoplay: true,
                    arrows: false,
                    infinite: true,
                    autoplaySpeed: 1500,
                    speed: 300,
                    slidesToShow: 1
                });
            });
        </script>
        <!-- <script src="<?php echo base_url()?>assets/js/bootstrap-tabdrop.js"></script> -->
        <script>
             $(document).ready(function () {
                 scrollTab();
                 $(window).resize(function () {
                     scrollTab();
                 });
                 function scrollTab() {
                     var devicewidth = $(window).width();
                     if (devicewidth < 769) {
                         $("li a ").click(function () {
                             $('html, body').animate({
                                 scrollTop: $(".tab-content").offset().top
                             }, 1000);
                         });
                     }
                 }
             });
        </script>
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
            $(document).off('click','#subscribeButton');
            $(document).on('click','#subscribeButton',function(){
                var title= $(this).data('title');
                $("#subscribeForm").validate({
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
                    message: {
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
                            url: '<?php echo base_url() ?>home/subscribe_form',
                            datatype: 'html',
                            data: $('form#subscribeForm').serialize(),
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
        <script type="text/javascript">
            $(document).off('click','.CatchName');
            $(document).on('click','.CatchName',function(){
                var name = $(this).data('name');
                if(name == "food") {
                    //$("#myInput").attr("onkeyup", "functionPrakash()");
                    document.getElementsByName("terminology")[0].addEventListener("keyup", function(event) {
                        validate_numb("terminology")
                    });
                }
            });
            $('.ChangeLanguage').on('click',function(e) {
                var url  = window.location.href;
                var language=$(this).data('language'); //alert(language);
                var action="<?php echo base_url() ?>/home/change_language";
                $.ajax({
                type: "POST",
                url: action,
                dataType: 'html',
                    data: {language:language},
                    success: function(jsons)
                    {
                     data = jQuery.parseJSON(jsons);
                      if(data.status=='success'){
                        setTimeout(function(){
                        window.location.href = url;
                         }, 500);
                      }
                  }
                });
            });

            // conatct load table
            $(".contact_tab").click(function(){
                $("#contact_tbl").html('');
                var sub_cat = $(this).attr('id');
                var cat = $(this).attr('name');
                $.ajax({
                    type: "json",
                    method:"POST",
                    url: '<?php echo base_url() ?>contact/get_contact_tbl',
                    datatype: 'html',
                    data: {category:cat,sub_category:sub_cat},
                    beforeSend: function(){
                    },
                    success: function(result) {
                    //console.log(result);
                    $("#contact_tbl").html(result);
                    }
                });
            });
            $( "#contact_category" ).change(function() {
                var cat=$(this).val();
                var url='<?php echo base_url()?>contact?cat='+cat;
                  window.location=url;
            });

            $(document).ready(function () {
                $("#searhddr").keyup(function () {
                    var keyword = $('#searhddr').val();
                    var action="<?php echo base_url() ?>/dictionary/ajaxAutoComplete";
                    $.ajax({
                        type: "POST",
                        url: action,
                        dataType: 'html',
                        data: {keyword:keyword},
                        beforeSend: function(){
                            $('#autolist').html();
                        },
                        success: function(jsons)
                        {
                            data = jQuery.parseJSON(jsons);
                            $("#autolist").addClass("newAutolist");
                            if(data.status=='success'){
                                $('#autolist').html(data.template);
                            }
                        }
                    });
                });


            });
          
       </script>
       
    
    </body>
</html>
