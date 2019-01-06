<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keyword" content="vso">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Admin Login </title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>assets/admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/admin/css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="<?php echo base_url();?>assets/admin/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>assets/admin/css/style.css?1" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/admin/css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body class="lock-screen" onload="startTime()">

    <div class="lock-wrapper" style="overflow:hidden; position:relative;">

        <div id="time" style="color:rgba(0,0,0,0.5); font-weight:300; position:relative; top:50px; object-fit:center; " ></div>


        <div class="lock-box text-center">
          <form class="form-signin" method="post" action="">
            <!-- <h2 class="form-signin-heading no-padding">sign in now</h2> -->
            <?php
              $error=	$this->session->flashdata('Login');
               if($error){
               echo $error;

               }
                ?>
            <div class="login-wrap">
                <div class="user-login-info">
                    <input type="text" class="form-control" name="username" placeholder="User ID" autofocus>
                    <input type="password" class="form-control" name="password" placeholder="Password">
                </div>
                <!-- <label class="checkbox">
                    <input type="checkbox" value="remember-me"> Remember me
                    <span class="pull-right">
                        <a data-toggle="modal" href="#myModal"> Forgot Password?</a>

                    </span>
                </label> -->
                <button class="btn btn-lg btn-login btn-block" name="submit" type="submit">Sign iin</button>

                <!-- <div class="registration">
                    Don't have an account yet?
                    <a class="" href="registration.html">
                        Create an account
                    </a>
                </div> -->

            </div>

              <!-- Modal -->
              <!-- <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
                  <div class="modal-dialog">
                      <div class="modal-content">
                          <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                              <h4 class="modal-title">Forgot Password ?</h4>
                          </div>
                          <div class="modal-body">
                              <p>Enter your e-mail address below to reset your password.</p>
                              <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">

                          </div>
                          <div class="modal-footer">
                              <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                              <button class="btn btn-success" type="button">Submit</button>
                          </div>
                      </div>
                  </div>
              </div> -->
              <!-- modal -->

          </form>

        </div>
    </div>
    <script>
        function startTime()
        {
            var today=new Date();
            var h=today.getHours();
            var m=today.getMinutes();
            var s=today.getSeconds();
            // add a zero in front of numbers<10
            m=checkTime(m);
            s=checkTime(s);
            document.getElementById('time').innerHTML=h+":"+m+":"+s;
            t=setTimeout(function(){startTime()},500);
        }

        function checkTime(i)
        {
            if (i<10)
            {
                i="0" + i;
            }
            return i;
        }
    </script>
</body>
</html>
