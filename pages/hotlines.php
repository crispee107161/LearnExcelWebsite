<?php
  include('../db/session.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>EMERGENCY HOTLINES | Rapid Respo</title>
    <!-- Favicon-->
      <link rel="icon" type="image/png" href="../images/favicongreenbox.png"/>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="../../../plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="../../../plugins/node-waves/waves.css" rel="stylesheet" />

    <!--WaitMe Css-->
    <link href="../../../plugins/waitme/waitMe.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="../../../plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="../../../css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="../../../css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand">EMERGENCY HOTLINES</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Notifications -->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="material-icons">notifications</i>
                            <span class="label-count">7</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">NOTIFICATIONS</li>
                            <li class="body">
                                <ul class="menu">
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-light-green">
                                                <i class="material-icons">person_add</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4>12 new members joined</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 14 mins ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    </ul>
                            <li class="footer">
                                <a href="javascript:void(0);">View All Notifications</a>
                            </li>
                        </ul>
                    </li>
                    <!-- #END# Notifications -->
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
           <!-- User Info -->
                 <?php 
                     include("sidebar/userinfo.php");
                 ?> 
            <!-- #User Info -->
            <!-- Menu -->
                <?php 
                     include("sidebar/sidebar.php");
                 ?> 
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                 <a href="javascript:void(0);">Rapid Respo</a> &copy; 2022
                </div>
                <div class="version">
                    <b>Version: </b> 1.0.0
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
    </section>

    <section class="content">
        <div class="container-fluid">

            <!-- Basic Example -->
            <div class="row clearfix">

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               National Disaster and Risk Reduction and Management Council (NDRRMC): 
                            </h2>
                        </div>
                        <div class="body"><br><br>
                            <a href="tel:(02) 911-1406">(02) 911-1406</a><br>
                            <a href="tel:(02) 912-2665">(02) 912-2665</a><br>
                            <a href="tel:(02) 912-5668">(02) 912-5668</a><br>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                              Emergency 911 National Office
                            </h2>
                        </div>
                        <div class="body">
                            <a href="911">911</a><br>
                            <b>Trunklines and Direct lines:</b><br>
                            <a href="tel:(02) 925-9111">(02) 925-9111</a><br>
                            <a href="tel:(02) 928-7281">(02) 928-7281</a><br>
                            <a href="+63966-5000-299">+63966-5000-299</a><br>
                            <a href="tel:+63932-318-0440">+63932-318-0440</a><br>
                        </div>
                    </div>
                </div>


                 <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                              Philippine Coast Guard
                            </h2>
                        </div>
                        <div class="body">
                            <a href="(02) 8527-8481">(02) 8527-8481 to 89</a><br>
                            <a href="tel:(02) 8527-3877">(02) 8527-3877</a><br>
                            <a href="tel:(02) 8527-3880">(02) 8527-3880 to 85</a><br>
                            <a href="tel:(02) 8527-8482">(02) 8527-8482 local 6291</a><br>
                            <b>Text Hotlines</b><br>
                            <a href="tel:0917-724-3682">0917-PCG-DOTC (0917-724-3682)</a><br>
                            <a href="tel:0918-967-4697">0918-967-4697</a><br>
                        </div>
                    </div>
                </div>

                

               <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               Red Cross hotline: <br>
                            </h2>
                        </div>
                        <div class="body">
                            <a href="tel:(02) 911-1876">143, (02) 911-1876</a><br>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               Department of Public Works and Highways (DPWH):
                            </h2>
                        </div>
                        <div class="body">
                            <a href="tel:(02) 304-3713">(02) 304-3713</a><br>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               Philippine Coast Guard: 
                            </h2>
                        </div>
                        <div class="body">
                            <a href="tel:(02) 527-3877">(02) 527-3877</a><br>
                            <a href="tel:(02) 527-8481">(02) 527-8481</a><br>
                            <a href="tel:0917-724-3682">0917-724-3682</a><br>
                            <a href="tel:0917-PCG-DOTC">0917-PCG-DOTC</a><br>
                        </div>
                    </div>
                </div>

                 <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                              Department of Health (DOH): 
                            </h2>
                        </div>
                        <div class="body">
                            <a href="tel:71110017">7111001</a><br>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                              Bureau of Fire Protection (BFP)
                            </h2>
                        </div>
                        <div class="body">
                            <a href="tel:(02) 8426-0219">(02) 8426-0219</a><br>
                            <a href="tel:(02) 8426-0246">(02) 8426-0246</a><br>
                        </div>
                    </div>
                </div>

               
                

            </div>
            <!-- #END# Basic Example -->

        </div>
    </section>

    <!-- Jquery Core Js -->
    <script src="../../../plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="../../../plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="../../../plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="../../../plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../../../plugins/node-waves/waves.js"></script>

    <!-- Wait Me Plugin Js -->
    <script src="../../../plugins/waitme/waitMe.js"></script>

    <!-- Custom Js -->
    <script src="../../../js/admin.js"></script>
    <script src="../../../js/pages/cards/basic.js"></script>

    <!-- Demo Js -->
    <script src="../../../js/demo.js"></script>
</body>
</html>
