<?php
  include('../db/session.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Cursor Types | Learn Excel</title>
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
                <a class="navbar-brand">CURSOR TYPES</a>
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
                                Cursor Types 
                            </h1>


            <div class="row clearfix">
             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               General Select
                            </h2>
                        </div>
                        <div class="body">
                            <p> When Excel's mouse pointer is at "General Select" shape as marked in below image, it is ready to select a cell or a range of cells within in Excel worksheet.</p>
                           <img src="https://www.omnisecu.com/images/excel/worksheet/excel-general-select-mouse-pointer.jpg?ezimgfmt=ng%3Awebp%2Fngcb3" width="100%" height="100%"></a>                        
                       </div>
                           
                    </div>
                </div>
            </div>


            <div class="row clearfix">
             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               Fill Data
                            </h2>
                        </div>
                        <div class="body">
                        <p>Fill data mouse pointer shape appears when you hover the mouse pointer over the small square at the bottom right corner of the cell. When Excel's mouse pointer is at "Fill Data" shape as marked in below image, it can fill data or extend a data series.</p>
                        <img src="https://www.omnisecu.com/images/excel/worksheet/excel-extend-fill-data-mouse-pointer.jpg?ezimgfmt=ng:webp/ngcb3" width="100%" height="100%"></a>

                        </div>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               I-Beam Cursor
                            </h2>
                        </div>
                        <div class="body">
                            <p>Excel blinking I-Beam text cursor indicates that you can enter data inside a cell by typing text at the location of cursor. Excel blinking I-Beam text cursor is marked in below image.</p>
                          <img src="https://www.omnisecu.com/images/excel/worksheet/excel-i-beam-text-cursor.jpg?ezimgfmt=ng:webp/ngcb3" width="100%" height="100%"></a>  
                    </div>
                </div>
            </div>
            <div class="row clearfix">
             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               Arrow Mouse Pointer
                            </h2>
                        </div>
                        <div class="body">
                            <p>Normal Arrow cursor shape appears when when you select menu or commands in Ribbon. It appears when moving a selection also. While moving a selection, Arrow Mouse pointer has a small cross also.Arrow Mouse Pointer is shown in below image.</p>
                        <img src="https://www.omnisecu.com/images/excel/worksheet/excel-arrow-mouse-pointer.jpg?ezimgfmt=ng:webp/ngcb3" width="100%" height="100%"></a>

                    </div>
                </div>
            </div>
             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               Column Resize Mouse Pointer
                            </h2>
                        </div>
                        <div class="body">
                            <p>Column Resize Mouse Pointer appears when mouse hover at the border between Column letters. When Column Resize Mouse Pointer appears, you need to click and drag to increase or decrease the width of a column.</p>
                        <img src="https://www.omnisecu.com/images/excel/worksheet/excel-change-column-width-mouse-pointer.jpg?ezimgfmt=ng:webp/ngcb3" width="100%" height="100%"></a>
</div></div>
</div>
                    </div>
             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               Row Resize Mouse Pointer
                            </h2>
                        </div>
                        <div class="body">
                            <p>Row Resize Mouse Pointer appears when mouse hover at the border between Row numbers. When Row Resize Mouse Pointer appear, you need to click and drag to increase or decrease the height of a row.</p>
                        <img src="https://www.omnisecu.com/images/excel/worksheet/excel-change-row-height-mouse-pointer.jpg?ezimgfmt=ng:webp/ngcb3" width="100%" height="100%"></a>
</div>
</div>
                    </div>
             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               Move Selected cells Mouse Pointer
                            </h2>
                        </div>
                        <div class="body">
                            <p>Move Selected cells Mouse Pointer appears when mouse hover at border of a cell or range of cells. When Move Selected cells Mouse Pointer appear, you need to click and drag to move the data to another location within worksheet.</p>
                        <img src="https://www.omnisecu.com/images/excel/worksheet/excel-move-cell-mouse-pointer.jpg?ezimgfmt=ng:webp/ngcb3" width="100%" height="100%"></a>
</div>
</div>
                    </div>
             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               Copy Selected Cells Mouse Pointer
                            </h2>
                        </div>
                        <div class="body">
                            <p>Copy Selected Cells Mouse Pointer appears when "Ctrl" key is pressed and mouse hover at border of a cell or range of cells. When Copy Selected Cells Mouse Pointer appear, you need to click and drag to copy the data to another location within worksheet.</p>
                        <img src="https://www.omnisecu.com/images/excel/worksheet/excel-copy-cell-mouse-pointer.jpg?ezimgfmt=ng:webp/ngcb3" width="100%" height="100%"></a>
</div>
</div>
</div>
</div>
                    </div>
                </div>
           </div>
           <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               Select Entire Column Mouse Pointer
                            </h2>
                        </div>
                        <div class="body">
                            <p>Select Entire Column Mouse Pointer appears when mouse hover at any Column label. If you click when Select Entire Column Mouse Pointer appear, entire column is selected, as shown im below image.</p>
                        <img src="https://www.omnisecu.com/images/excel/worksheet/excel-select-entire-column.jpg?ezimgfmt=ng:webp/ngcb3" width="100%" height="100%"></a>
                        </div>
                        </div>
        </div>

</div>
</div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               Select Entire Row Mouse Pointer
                            </h2>
                        </div>
                        <div class="body">
                            <p>Select Entire Row Mouse Pointer appears when mouse hover at any Row number. If you click when Select Entire Row Mouse Pointer appear, entire row is selected, as shown im below image.</p>
                        <img src="https://www.omnisecu.com/images/excel/basics/excel-select-entire-row.jpg?ezimgfmt=ng:webp/ngcb3" width="100%" height="100%"></a>
                        

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
