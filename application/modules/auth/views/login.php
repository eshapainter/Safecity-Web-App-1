<!DOCTYPE html>
<html>
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Safecity Login</title>
      <!-- Tell the browser to be responsive to screen width -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <meta name="description" content="">
      <meta name="author" content="Safe City"> 
      <meta name="generator" content="Safe City">
      <link href="<?php echo base_url(); ?>application/modules/auth/assets/images/favicon.png" rel="icon" type="image/png" />

      <!-- icheck bootstrap -->
      <link rel="stylesheet" href="<?php echo base_url(); ?>application/modules/auth/assets/css/bootstrap.min.css">
      <!-- Theme style -->
      <link rel="stylesheet" href="<?php echo base_url(); ?>application/modules/auth/assets/css/login.css">
    </head>
    <body class="hold-transition login-page">
        <div class="login-box">

            <!-- /.login-logo -->
            <div class="card">
                <div class="card-body login-card-body">
                    <div class="login-logo">
                        <a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>application/modules/auth/assets/images/safecity-logo.png" class="img-fluid" alt="Safecity" ></a>
                    </div>
                    <form action="<?php echo base_url(); ?>auth/login" method="post">
                        <div class="login-screen">
                          <p class="login-box-msg text-center">Admin Panel Login</p>
                            <div class="input-group mb-4">
                                <div class="input-group-append">
                                    <div class="input-group-text border-right-0">
                                      <span><img src="<?php echo base_url(); ?>application/modules/auth/assets/images/feather-user.svg" alt="user"  class="img-fluid"></span>
                                    </div>
                                </div>
                                <input type="email" name="email" class="form-control border-left-0" placeholder="Enter Email" value="<?php echo set_value('email') ?>">
                                <?php echo form_error('email');?>
                            </div>
                            <div class="input-group mb-2">
                                <div class="input-group-append">
                                    <div class="input-group-text border-right-0">
                                      <span><img src="<?php echo base_url(); ?>application/modules/auth/assets/images/feather-lock.svg" alt="user"  class="img-fluid"></span>
                                    </div>
                                </div>
                                <input type="password" name="password" class="form-control border-left-0" placeholder="Enter Password">
                                <?php echo form_error('password');?>
                            </div>
                            <p class="mb-1 theme-color fog-pass mb-4">
                                <a href="<?php echo base_url('auth/forgot_pwd') ?>" class="forgote-btn">Forgot Password</a>
                            </p>
                            <div class="row">
                                <!-- /.col -->
                                <div class="col-12">
                                    <div class="invalid-feedback" style="display:block">
                                        <?php echo $this->session->flashdata('message'); ?>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-block purple-btn text-uppercase">Log In</button>
                                </div>
                                <!-- /.col -->
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.login-card-body -->
        </div>
        <!-- /.login-box -->

        <!-- jQuery -->
        <script src="<?php echo base_url(); ?>application/modules/auth/assets/js/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="<?php echo base_url(); ?>application/modules/auth/assets/js/bootstrap.min.js"></script>

        <script>
            $(document).ready(function(){
              /*$(".forgote-btn").click(function(){
                $(".forgot-screen").show();
                 $(".login-screen").hide();
              });
              $(".back-to-login").click(function(){
                $(".login-screen").show();
                $(".forgot-screen").hide();
              });*/
            });
        </script>
    </body>
</html>