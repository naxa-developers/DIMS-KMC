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
                        <input class="suscribe" type="text" name="email" placeholder="<?php echo !empty(EMAIL)?EMAIL:''?>">
                        <button class="suscribeBtn"> <?php echo !empty(SUBSCRIBE_BTN)?SUBSCRIBE_BTN:'' ?></button>
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
    <!-- <script src="<?php echo base_url();?>assets/frontend/js/sc.js"></script> -->
    <script src="<?php echo base_url();?>assets/frontend/js/jquery.jConveyorTicker.min.js"></script>
    <script>
        $(function () {
            $('.ticker').jConveyorTicker({
                anim_duration: 800
            });
        });
    </script>
    <script src="<?php echo base_url();?>assets/frontend/js/scriptall.js"></script>
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
</body>
</html>