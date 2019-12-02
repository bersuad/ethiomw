<!DOCTYPE html>
<html dir="ltr" lang="en">

<!-- Mirrored from thememascot.net/demo/html/mrlaw/v3/demo/form-login-style3.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Nov 2019 14:30:27 GMT -->
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <meta name="description" content="MrLaw - Insurance and Lawyer business template" />
  <meta name="keywords" content="building,business,construction,cleaning,transport,workshop" />
  <meta name="author" content="ThemeMascot" />
  <title>Ethiopian Most Wanted Criminal And Suspects</title>
  <link href="<?php echo site_url()?>upload/logo/federal_logo.png" rel="shortcut icon" type="image/png">
  <link href="<?php echo site_url()?>assets/images/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="<?php echo site_url()?>assets/images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
  <link href="<?php echo site_url()?>assets/images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
  <link href="<?php echo site_url()?>assets/images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">

  <link href="<?php echo site_url()?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="<?php echo site_url()?>assets/css/jquery-ui.min.css" rel="stylesheet" type="text/css">
  <link href="<?php echo site_url()?>assets/css/animate.css" rel="stylesheet" type="text/css">
  <link href="<?php echo site_url()?>assets/css/css-plugin-collections.css" rel="stylesheet" />
  <link id="menuzord-menu-skins" href="<?php echo site_url()?>assets/css/menuzord-skins/menuzord-boxed.css" rel="stylesheet" />
  <link href="<?php echo site_url()?>assets/css/style-main.css" rel="stylesheet" type="text/css">
  <link href="css/colors/theme-skin-orange.css" rel="stylesheet" type="text/css">
  <link href="<?php echo site_url()?>assets/css/preloader.css" rel="stylesheet" type="text/css">
  <link href="<?php echo site_url()?>assets/css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
  <link href="<?php echo site_url()?>assets/css/responsive.css" rel="stylesheet" type="text/css">

  <link href="<?php echo site_url()?>assets/js/revolution-slider/css/settings.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo site_url()?>assets/js/revolution-slider/css/layers.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo site_url()?>assets/js/revolution-slider/css/navigation.css" rel="stylesheet" type="text/css" />

  <script src="<?php echo site_url()?>assets/js/jquery-2.2.0.min.js"></script>
  <script src="<?php echo site_url()?>assets/js/jquery-ui.min.js"></script>
  <script src="<?php echo site_url()?>assets/js/bootstrap.min.js"></script>

  <script src="<?php echo site_url()?>assets/js/jquery-plugin-collection.js"></script>

</head>


<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body class="">
<div id="wrapper">


  <!-- start main-content -->
  <div class="main-content" >
    <!-- Section: home -->
    <section id="home" class="divider bg-lighter" style="min-height:755px">
      <div class="display-table">
        <div class="display-table-cell" >
          <div class="container">
            <div class="row">
              <div class="col-md-6 col-md-push-3">
                <div class="text-center mb-60"><a href="#" class="">
                  <img alt="" src="<?php echo base_url()?>upload/logo/federal_logo.png"></a></div>

                  <form class="form-horizontal"  method="post" id="loginToAdmin" >
                  <div class="row">
                    <div class="form-group col-md-8" style="margin-left:15%">
                      <label for="username">Username</label>
                      <input class="form-control"
                      style="height:40px" type="text" id="username"
                       placeholder="Username" name="username">
                      <div class="username" style="color:red"></div>

                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-8" style="margin-left:15%">
                      <label for="password">Password</label>
                      <input type="password"  class="form-control"
                       style="height:40px" id="password"
                       placeholder="Password" name="password" >
                      <div class="password" style="color:red"></div>
                      <div class="error_response_login" style="color:red"></div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-8" style="margin-left:37%">
                      <button type="submit" class="btn btn-sm" style="background-color:#0f47af;color:white" onclick="login()">
                        <i class="icon icon_lock_alt"></i> Log In<span class="click_login"></span></button></button>

                    </div>
                  </div>
                 </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->

<!-- Footer -->
  <footer id="footer" class="footer text-center" style="background-color:#182c31">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p class="mb-0">Copyright ©2019 Ethiopia Federal. All Rights Reserved</p>
        </div>
      </div>
    </div>
  </footer>
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="js/custom.js"></script>
<script>
function validLogin(username,password){
  if(username && password ){
    return username+password;
  }
  else{
    if(!username){
      $('.username').text('User Name is required!');
      }
    if(!password){
      $('.password').text('Password is required!');
      }

    return;
  }
}
function login(e){
var nm=0;
var validate=validLogin($('#username').val(),$('#password').val());
if(validate)
{
$("#loginToAdmin").on('submit', function(e){
      e.preventDefault();
     if(nm==0) {
    $.ajax({
          type: 'POST',
          url: '<?php echo base_url('login/Login');?>',
          data: new FormData(this),
          contentType: false,
          cache: false,
          processData:false,
          timeout:30000,
        beforeSend: function(){
          $('.click_login').html('<i class="fa fa-spinner fa-spin"></i>');
          },
success: function(data){
if(data=='200'){
window.location.href='<?php echo base_url('pages/admin');?>';
}
else{
  $('.error_response_login').text('Username or Password Is Wrong!');
  $('.click_login').html('');
  $('.username').text('');
  $('.password').text('');
}
nm++;
}
});
}
});
}
else{
$("#loginToAdmin").on('submit', function(e){
e.preventDefault();
});
}
}
</script>

</body>

<!-- Mirrored from thememascot.net/demo/html/mrlaw/v3/demo/form-login-style3.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Nov 2019 14:30:27 GMT -->
</html>
