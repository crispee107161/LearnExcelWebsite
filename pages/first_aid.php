<?php
  include('../db/session.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>First Aid | Rapid Respo</title>
    <!-- Favicon-->
    <link rel="icon" type="image/png" href="../images/favicongreenbox.png"/>

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
                <a class="navbar-brand">First Aid</a>
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
    <!-- Our CSS -->
  <link rel="stylesheet" type="text/css" href="style.css">

    <section class="content">
      <div class="container-fluid">
            <div class="row clearfix">
             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                INTRODUCTION TO FIRST AID 
                            </h2>
                        </div>
                        <div class="body">
                            <p>First aid is the emergency care a sick or injured person gets. You or someone close to you could suffer an accident from an accident at any time. You might be able to prevent a minor mishap from becoming severe by using basic first aid. You might even save a life in the event of a critical medical emergency.</p>
                         
                        </div>
                    </div>
                </div>
            </div>

           <div class="row clearfix">
             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Three steps for emergencies
                            </h2>
                        </div>
                        <div class="body">
                            <p> If you encounter an emergency, follow these three basic steps: </p>
                            <p>1. Check the scene for danger<p>
                            <p>Look for anything that might be dangerous, like signs of fire, falling debris, or violent people. If your safety is at risk, remove yourself from the area and call for help. If the scene is safe, assess the condition of the sick or injured person. Don’t move them unless you must do so to protect them from danger.</p>
                            <p>2. Call for medical help, if needed</p>
                            <p>If you suspect the sick or injured person needs emergency medical care, tell a nearby person to call 911 or the local number for emergency medical services. If you’re alone, make the call yourself.</p>
                            <p> If you encounter an emergency, follow these three basic steps: </p>
                            <p>3. Provide care<p>
                            <p>If you can do so safely, remain with the sick or injured person until professional help arrives. Cover them with a warm blanket, comfort them, and try to keep them calm. If you have basic first aid skills, try to treat any potentially life-threatening injuries they have. Remove yourself from danger on you think your safety might be at risk at any point in the situation.</p>



                        </div>
                    </div>
                </div>
            </div>

             <div class="row clearfix">
             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               First aid bandage
                            </h2>
                        </div>
                        <div class="body">
                            <p>You can use an adhesive bandage to cover minor cuts, scrapes, or burns in many cases. To cover and protect larger wounds, you might need to apply a clean gauze pad or roller bandage.</p>
                            <p>To apply a roller bandage to a wound, follow these steps:</p>
                            <p> • Hold the injured area steady.</p>
                            <p> • Gently but firmly wrap the bandage around the injured limb or body part, covering the wound.</p>
                            <p> • The bandage should be wrapped firmly enough to stay put, but not so tightly that it cuts off blood flow.</p>
                            <p> • Refrain from using running water to thaw meat or other frozen foods. Defrost food overnight in the refrigerator or use the defrost setting on the microwave.</p>
                            <p> • Pinch one of the person’s fingernails or toenails until the color drains from the nail to check the circulation in a bandaged limb. If the color doesn’t return within two seconds of letting go, the bandage is too tight and needs to be adjusted.</p>

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
