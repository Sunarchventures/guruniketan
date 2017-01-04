<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Login Page</title>

    <!-- Bootstrap -->
   <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">

    <!-- Custom Stylesheet by Ashish Chawla -->
    <link href="<?php echo base_url('assets/css/style.css'); ?>" rel="stylesheet">


    <!-- Font Awesome Icons -->
  <script src="https://use.fontawesome.com/0fd0e3f0a4.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="background"><br>
      <center><h1 style="color:white;">Logo Goes here</h1></center>
    <!-- Layer for login box -->
      <div class="layer">
      <div class="col-lg-2"></div>

      <div class="col-lg-8 login_box">
          <h3><i class="fa fa-user"></i> Login </h3><br>
             <?php 
          $attributes = array("class" => "form-horizontal", "id" => "loginform", "name" => "loginform");
          echo form_open("test/index", $attributes);?>  
              <div class="form-group">
                <label for="username">UserID</label>
                <input type="text" id="txt_username" name="txt_username" class="form-control styled" placeholder="Enter your Username">
                 <span class="text-danger"><?php echo form_error('txt_username'); ?></span>
              </div>
              <div class="form-group">
                <label for="username">Password</label>
                <input type="password" id="txt_password" name="txt_password" class="form-control styled" placeholder="Enter yout Password">
                 <span class="text-danger"><?php echo form_error('txt_password'); ?></span>
              </div>
              <div class="form-group">
                <label for="role">Select your Role:       </label> 
                <big><label class="radio-inline"><input type="radio" name="optradio" selected>Student</label>
                <label class="radio-inline"><input type="radio" name="optradio">Teacher</label></big>
              </div>  
             <center><input type="submit" name="btn_login" class="btn btn-styled" value="Login"></center><br>

                <?php echo form_close(); ?>
                <br>
              <center>
                <a href=""><i class="fa fa-facebook-square fa-4x"></i></a>
                <a href=""><i class="fa fa-google-plus-square fa-4x"></i></a>
              </center>
      </div>
      <div class="col-lg-2"></div>
      </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
     <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
  </body>
</html>
