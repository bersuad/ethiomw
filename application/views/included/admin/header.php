<!DOCTYPE html>
<html dir="ltr" lang="en">

<!-- Mirrored from thememascot.net/demo/html/mrlaw/v3/demo/index-mp-layout1.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Nov 2019 14:11:23 GMT -->

<head>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="description" content="MrLaw - Insurance and Lawyer business template" />
    <meta name="keywords" content="building,business,construction,cleaning,transport,workshop" />
    <meta name="author" content="ThemeMascot" />

    <!-- Page Title -->
    <title>Ethiopian Most Wanted Fugitives</title>

    <!-- Favicon and Touch Icons -->
    <link href="<?php echo site_url()?>assets/images/favicon.png" rel="shortcut icon" type="image/png">
    <link href="<?php echo site_url()?>assets/images/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="<?php echo site_url()?>assets/images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
    <link href="<?php echo site_url()?>assets/images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
    <link href="<?php echo site_url()?>assets/images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">

    <!-- Stylesheet -->
    <link href="<?php echo site_url()?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo site_url()?>assets/css/jquery-ui.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo site_url()?>assets/css/animate.css" rel="stylesheet" type="text/css">
    <link href="<?php echo site_url()?>assets/css/css-plugin-collections.css" rel="stylesheet" />
    <!-- CSS | menuzord megamenu skins -->
    <link id="menuzord-menu-skins" href="<?php echo site_url()?>assets/css/menuzord-skins/menuzord-boxed.css" rel="stylesheet" />
    <!-- CSS | Main style file -->
    <link href="<?php echo site_url()?>assets/css/style-main.css" rel="stylesheet" type="text/css">
    <!-- CSS | Theme Color -->
    <link href="css/colors/theme-skin-orange.css" rel="stylesheet" type="text/css">
    <!-- CSS | Preloader Styles -->
    <link href="<?php echo site_url()?>assets/css/preloader.css" rel="stylesheet" type="text/css">
    <!-- CSS | Custom Margin Padding Collection -->
    <link href="<?php echo site_url()?>assets/css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
    <!-- CSS | Responsive media queries -->
    <link href="<?php echo site_url()?>assets/css/responsive.css" rel="stylesheet" type="text/css">
    <!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
    <!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

    <!-- Revolution Slider 5.x CSS settings -->
    <link href="<?php echo site_url()?>assets/js/revolution-slider/css/settings.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo site_url()?>assets/js/revolution-slider/css/layers.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo site_url()?>assets/js/revolution-slider/css/navigation.css" rel="stylesheet" type="text/css" />

    <!-- external javascripts -->
    <script src="<?php echo site_url()?>assets/js/jquery-2.2.0.min.js"></script>
    <script src="<?php echo site_url()?>assets/js/jquery-ui.min.js"></script>
    <script src="<?php echo site_url()?>assets/js/bootstrap.min.js"></script>

    <!-- JS | jquery plugin collection for this theme -->
    <script src="<?php echo site_url()?>assets/js/jquery-plugin-collection.js"></script>

</head>

<body class="has-side-panel side-panel-right fullwidth-page side-push-panel">
    <header id="header" class="header">
        <div class="header-top bg-deep sm-text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="widget no-border m-0">
                            <ul class="social-icons icon-sm sm-text-center">
                                <h5>Ethio Most wonted control room</h5>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="widget no-border m-0">
                            <ul class="list-inline pull-right sm-pull-none sm-text-center mt-5">
                                <li class="m-0 pl-10 pr-10"> <a href="#"><img class="image" src="<?php echo base_url()?>assets/images/emw4.jpg" alt="featured project"  style="min-width: auto; min-height: auto; max-height: 30px!important; max-width: 30px; border-radius: 50%; margin-top: -5%;"></a></li>
                                </li>
                                <?php
                  if( current_url()==base_url('/') )
                  {
                    echo "<a href='#' id='side-panel-trigger' class='side-panel-trigger'><i class='fa fa-bars fa-lg text-gray'></i></a>";
                  }else{
                    echo "<li><a href=".base_url()."><i class='fa fa-sign-out'></i> Logout</a></li>";
                  }
                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="container-fluid" id="admin_css">

        <div class="row" style="padding-top: 3%;">
            <div class="col-md-3" id="left_nav">
              <div class="panel panel-default">
                <div class="panel-heading main-color-bg" style="background-color: #182c31; color: #fff;">
                  <h3 class="panel-title" align="center"><span class="fa fa-cogs"></span> Dashboard</h3>
                </div>
                <div class="panel-body">
                  <div class="list-group">
                    <a href="<?php echo base_url()?>admin" class="list-group-item active"><span class="fa fa-home"></span> Main Dashbord</a>
                    <a href="<?php echo base_url()?>all-wanted" class="list-group-item"><span class="fa fa-list"></span> All Wanted List</a>
                    <a href="#" class="list-group-item" data-toggle="modal" data-target="#cargo-status"><span class="fa fa-edit"></span> All Reports</a>
                    <a href="/admin-all-client" class="list-group-item"><span class="fa fa-pencil"></span> New Crime Report<span class="badge main-color-bg">10</span></a>
                    <a href="/admin-all-support" class="list-group-item"><span class="fa fa-life-ring"></span> Support Request<span class="badge main-color-bg">10</span></a>
                    <a href="/home" class="list-group-item"><span class="fa fa-envelope"></span> Message <span class="badge main-color-bg">4</span></a>
                    <a href="<?php base_url()?>settings" class="list-group-item"><span class="fa fa-cog"></span> Setting</a>
                  </div>
                </div>
              </div>
            </div>