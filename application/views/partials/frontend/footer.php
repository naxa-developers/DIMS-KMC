<div id="golobalMoadl" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="form-check">
                <div class="row"> 
                    <div class="col-md-12">
                        <form>
                          <div class="col-sm-12">
                            <div class="row">
                                <div class="col-8 col-sm-6">
                                    <div class="form-group">
                                        <label for="formGroupExampleInput">Map Data</label>
                                        <div class="form-check">
                                            <input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="formGroupExampleInput">Dataset Publication</label>
                                        <div class="form-check">
                                            <input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="formGroupExampleInput">Dataset Publication</label>
                                        <div class="form-check">
                                            <input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
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
                                        <label for="formGroupExampleInput">Dataset Publication</label>
                                        <div class="form-check">
                                            <input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="formGroupExampleInput">Subscribe All</label>
                                        <div class="form-check">
                                            <input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
                                        </div>
                                    </div>
                                </div>
                            </div>
                          </div>
                        </div>
                        </form>
                    </div>
                </div>
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
                            <button id="subscribeButton" class="suscribeBtn"> <?php echo !empty(SUBSCRIBE_BTN)?SUBSCRIBE_BTN:'' ?></button>
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
            <p> &copy; <?php echo !empty(COPY_DATE)?COPY_DATE:'' ?> <a href="#" title=""></a><?php echo !empty(COPY_TEXT)?COPY_TEXT:'' ?></p>
        </div>
    </section>
</footer>
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script src="<?php echo base_url();?>assets/frontend/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/frontend/js/slick.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/frontend/js/validate.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/frontend/js/validation.error.messages.js"></script><script type="text/javascript" src="<?php echo base_url()?>assets/frontend/js/jquery.form.js"></script>
    <script src="<?php echo base_url();?>assets/frontend/js/scriptall.js"></script>
    <script src="<?php echo base_url();?>assets/frontend/js/jquery.jConveyorTicker.min.js"></script>

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
        $(document).ready(function(){
          $('[data-toggle="popover"]').popover();   
        });
        // thiis is for auto call ajax function and retrive data from db
        // var action="<?php echo base_url() ?>inventory/datacount";
        // function loadajax(){
        //     $.ajax({
        //     type: "POST",
        //     url: action,
        //     dataType: 'html',
        //         success: function(jsons)
        //         {
        //          data = jQuery.parseJSON(jsons); 
        //           if(data.status=='success'){
        //             setTimeout(function(){
        //             window.location.href = url;
        //              }, 500);
        //           }
        //       }
        //     });
        // }
        // $(document).ready(function(){
        //     setTimeout(function(){
        //       // loadajax();
        //      },1000); // milliseconds
        // });
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
            }
        })
    });
    </script>
</body>
</html>