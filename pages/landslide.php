<?php
  include('../db/session.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Groups | Learn Excel</title>
    <!-- Favicon-->
    <link rel="icon" type="image/png" href="../images/favicon.png"/>

    <!-- Leaflet CSS & JS -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.2/dist/leaflet.css" />
  <script src="https://unpkg.com/leaflet@1.0.2/dist/leaflet.js"></script>
  <!-- leaflet timeline cdn -->
  <script src="https://cdn.jsdelivr.net/npm/leaflet.timeline@1.2.0/dist/leaflet.timeline.min.js"></script>
  <!-- heatmap cdn -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.1/dist/leaflet.css" />
  <script src="https://unpkg.com/leaflet@1.0.1/dist/leaflet.js"></script>
  <script src="https://d3js.org/d3.v4.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script type="text/javascript" src="leaflet-heat.js"></script>
  <!-- Our CSS -->
  <link rel="stylesheet" type="text/css" href="style.css">

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

<body class="theme-green">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-green">
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
                <a class="navbar-brand">COMMAND BUTTONS</a>
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
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                 <a href="javascript:void(0);">Learn Excel</a> &copy; 2023
                </div>
                <div class="version">
                    <b>Version: </b> 1.0.0
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
    </section>
    <!-- Our CSS -->
  <link rel="stylesheet" type="text/css" href="style.css">

    <section class="content">
      <div class="container-fluid">
            <div class="row clearfix">
             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h1>
                                Command Buttons 
                            </h1>


            <div class="row clearfix">
             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               Toggle Buttons
                            </h2>
                        </div>
                        <div class="body">
                            <p> now this is pretty neat, and hadn’t spotted this until someone pointed it out to me.  Excel tells me when I’ve applied this button to a cell, by changing the colour of the button, so I can toggle between applying and deselecting. This is incredibly helpful when I have different formats applied to cells and I need a reminder, or want to deselect the format quickly.</p>
                           <img src="../images/toggle-excel-vba-training.webp" width="300px" height="150px"></a>                        </div>
                           <p>In this example, my category headings have bold and bottom alignment applied, and the buttons are yellow to show me that.</p>
                    </div>
                </div>
            </div>


            <div class="row clearfix">
             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               Drop down buttons 
                            </h2>
                        </div>
                        <div class="body">
                        <p>have little arrows next to the button, reminding me that there are more options available.  A good example is the Borders button, which offers me different borders to apply to the cells I have selected.  Colour fill is another example, where I can click on the down arrow, select a colour and it is applied.</p>
                        <img src="https://i0.wp.com/www.stl-training.co.uk/b/exceltraining/files/2012/11/simple-button-borders-excel-vba-training1.png?ssl=1" width="200px" height="150px"></a>
                        <p>Drop down button options are displayed for me to select.</p>

                        </div>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               Split buttons
                            </h2>
                        </div>
                        <div class="body">
                            <p>are a hybrid of drop down buttons and one-click wonders.  So you can click on the button itself and the action is applied.  Click on the down arrow next to it, and more options are available and you can apply them from there.  You still have the benefit of the button changing colour so you know when an action is applied.</p>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               Tick box buttons
                            </h2>
                        </div>
                        <div class="body">
                            <p>are on/off kind of buttons.   A good example is in the View tab, where I can tick when I want to view gridlines, or show headings.  Quick to apply or deselect.</p>
                            <img src="https://i0.wp.com/www.stl-training.co.uk/b/exceltraining/files/2012/11/view-tab-tick-box-excel-vba-training.png?resize=180%2C99&ssl=1" width="250px" height="150px"></a>
                            <p>Tick box options in the View tab, so I can tick or untick actions such as show grid lines, or headings.</p>
                            <p>If you can’t remember what a button does, hold your mouse over the icon, and Excel will give the description.  If you use a button frequently, right click on it and add it to your Quick Access Toolbar, to save you from locating it on the ribbon each time.</p>
                    </div>
                </div>
            </div>


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
